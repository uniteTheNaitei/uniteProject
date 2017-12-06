<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Http\Requests\PostFormRequest;

class PostController extends Controller
{
    //
    public function index() {
    	$posts = BlogPost::where('idPost', '>', 0)->orderBy('Time')->paginate(5) ;
    	$title = 'Latest Posts';
    	return view('blog')->withPosts($posts)->withTitle($title);
    }

    public function create(Request $request) {
    	return view('create');
    }

    public function show($idPost) {
    	$post = BlogPost::find($idPost);
    	if (!$post) {
    		return redirect()->back();
    	}
    	$comments = $post -> comment ;
    	return view('show')->withPosts($post)->withComments($comments);
    }

    public function edit(Request $request, $idPost) {
    	$post = BlogPost::find($idPost);
    	if ($post && ($request->Auth::user()->id == $idUser))
    		return view('edit')->with('post', $post);
    	return redirect('/')->withErrors('you have not sufficient permissions');
    }


    public function destroy(Request $request, $idPost) {
    	$post = BlogPost::find($idPost);
    	if ($post && ($post->idUser == $request->Auth::user()->id)) {
    			$post->delete();
    			$data['message'] = 'Post deleted successfully';
    	}

    	else {
    		$data['message'] = 'Invalid Operation. You have not sufficient permissons';
    	}
    	return redirect('/blog')->with($data);

    }
}
