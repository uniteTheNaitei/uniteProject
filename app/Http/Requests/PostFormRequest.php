    <?php namespace App\Http\Requests;
    use App\Http\Requests\Request;
    use App\BlogPost;
    use Illuminate\Support\Facades\Auth;
    class PostFormRequest extends Request {
      
      /**
       * Get the validation rules that apply to the request.
       *
       * @return array
       */
      public function rules()
      {
        return [
          'title' => 'required|unique:posts|max:255',
          'title' => array('Regex:/^[A-Za-z0-9 ]+$/'),
          'content' => 'required',
        ];
      }    
    }
    public function store(PostFormRequest $request) {
      $post = new BlogPost();
      $post->title =  $request->get('title');
      $post->content = $request->get('content');
      $post->idUser = $request->Auth::user()->id;
      $post->idPost = $request->get('idPost');
      $post->save();
      return redirect()->back();
    }

