<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\BlogPost;
use App\comment;
use App\Http\Requests\PostFormRequest;
use App\Person;

class PostController extends Controller
{
    //
    public function index() {
    	$posts = BlogPost::where('idPost', '>', 0)->orderBy('Time', 'DESC')->paginate(5) ;
    	$title = 'Latest Posts';
        $names = [];
        for ($i=0; $i<count($posts); $i++){
            $p = Person::where('idPerson', $posts[$i]->idUser)->first();
            array_push($names, $p);
        }
    	return view('blog')->withPosts($posts)->withTitle($title)->with('names', $names);
    }

    public function create(Request $request) {
    	return view('create');
    }

    public function show($idPost) {
    	$post = BlogPost::find($idPost);
        $names = [];
    	if (!$post) {
    		return redirect()->back();
    	}
    	$comments = comment::where('idPost', $idPost)->get();
        for ($i=0; $i<count($comments); $i++){
            $p = Person::where('idPerson', $comments[$i]->idUser)->first();
            array_push($names, $p);
        }
        

    	return view('show')->with('post', $post)->with('comments', $comments)->with('names',$names);
    }

    public function edit(Request $request, $idPost) {
    	$post = BlogPost::find($idPost);
    	if ($post && ($request->Auth::user()->id == $idUser))
    		return view('edit')->with('post', $post);
    	return redirect('/')->withErrors('you have not sufficient permissions');
    }


    public function destroy(Request $request, $idPost) {
    	$post = BlogPost::find($idPost);
    	if ($post && ($post->idUser == $request->Auth::user()->idPerson)) {
    			$post->delete();
    			$data['message'] = 'Post deleted successfully';
    	}

    	else {
    		$data['message'] = 'Invalid Operation. You have not sufficient permissons';
    	}
    	return redirect('/blog')->with($data);

    }

    public function store(Request $request) {
        $post = new BlogPost();
        $post->title = $request->get('title');
        $post->content = $request->get('body');
        // $post->slug = str_slug($post->title);
        $post->idUser = Auth::user()->idPerson;
        if($request->has('save'))
        {
          // $post->active = 0;
          $message = 'Post saved successfully';            
        }            
        else 
        {
          // $post->active = 1;
          $message = 'Post published successfully';
        }
        $post->save();
        return redirect('blog')->withMessage($message);
      }

}
