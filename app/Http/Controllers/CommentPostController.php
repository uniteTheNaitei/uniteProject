<?php namespace App\Http\Controllers;
    use App\Posts;
    use App\comment;
    use Redirect;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class CommentPostController extends Controller {
      public function store(Request $request)
      {
        //on_post, from_user, body
        $input = new comment();
        $input->idUser = Auth::user()->idPerson;
        $input->idPost = $request->get('on_post');
        $input->content = $request->get('body');
        $input->type = 1;
        $input->save();
        return redirect()->back();   
      }
    public function store_on_course(Request $request)
      {
        //on_post, from_user, body
        $input = new comment();
        $input->idUser = Auth::user()->idPerson;
        $input->idPost = $request->get('on_post');
        $input->content = $request->get('body');
        $input->type = 2;
        $input->save();
        return redirect('course/'.$request->on_post);   
      }
    }
