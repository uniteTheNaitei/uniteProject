<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;
use App\takelike;
use App\BlogPost;
use App\Person;
class LikeController extends Controller
{
    //
    public function postlike(Request $req){
     $posts = BlogPost::where('idPost', '>', 0)->orderBy('Time')->paginate(5) ;
     $title = 'Latest Posts';
      $user = Auth::user();
      $names = [];
        for ($i=0; $i<count($posts); $i++){
            $p = Person::where('idPerson', $posts[$i]->idUser)->first();
            array_push($names, $p);
        }
	 $like = new takelike;
	 $like->idPost = $req->post;
	 $like->idPerson= $req->user;
	 $like->likeType=2;
	 $like->save();
	 // var_dump($likdedPostId);
	 // die();
	  $likdedPostId = $user->likedBlog;
		return view('blog')->withPosts($posts)->withTitle($title)->with('names', $names)->with('likdedPostId', $likdedPostId);
    }  
}
