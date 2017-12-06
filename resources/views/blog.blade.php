    @extends('layouts.app')
   
    @section('content')
    @if ( !$posts->count() )
    There is no post till now. Login and write a new post now!!!
    @else
    <div class="container">
      <br>
      @foreach( $posts as $post )
      <div class="list-group">
        <div class="list-group-item" style="padding:  10px">
          <h3><a href="{{ url('blog/show/'.$post->idPost) }}" >{{ $post->title }}</a>
            @if(!Auth::guest() && ($post->idUser == Auth::user()->id))
              @if($post)
              <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->idPost)}}">Edit Post</a></button>
              @else
              <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->idPost)}}">Edit Draft</a></button>
              @endif
            @endif
          </h3>
          <p> Created by <a href="{{ url('/user/'.$post->idUser)}}">{{ $post->idUser }}</a></p>
        </div>
        <div class="list-group-item">
          <article>
            {!! str_limit($post->content, $limit = 1500, $end = '....... <a href='.url("/".$post->idPost).'>Read More</a>') !!}
          </article>
        </div>
      </div>
      @endforeach
      {!! $posts->render() !!}
    </div>
    @endif
    @endsection
