    @extends('layouts.app')
    @section('title')
      @if($post)
        {{ $post->title }}
        @if(!Auth::guest() && ($post->idUser == Auth::user()->id))
          <button class="btn" style="float: right"><a href="{{ url('edit/'.$post->idPost)}}">Edit Post</a></button>
        @endif
      @else
        Page does not exist
      @endif
    @endsection
    @section('title-meta')
    <p> Created by <a href="{{ url('/user/'.$post->idUser)}}">{{ $post->idUser }}</a></p>
    @endsection
    @section('content')
    @if($post)
      <br>
      <div class="container">
        <h1>{{$post->title}}</h1>
        <br>
        <strong>{!! $post->content !!}</strong>
      </div>    
      <br>
      <div class="container">
        <h2>Leave a comment</h2>
      </div>
      @if(Auth::guest())
        <p>Login to Comment</p>
      @else
      <div class="container">
        <div class="panel-body">
          <form method="post" action="{{route('addcomment')}}"> {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="on_post" value="{{ $post->idPost }}">
            <input type="hidden" name="slug" value="{{ $post->slug }}">
            <div class="form-group">
              <textarea required="required" placeholder="Enter comment here" name = "body" class="form-control"></textarea>
            </div>
            <input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
          </form>
        </div>
      </div>
      @endif
      <div class="container">
        <h1>Comments area</h1>
      </div>
      <div class="container">
        @if($comments)
        <ul style="list-style: none; padding: 0">
          @for($i=0;$i<count($comments);$i++)
            <li class="panel-body">
              <div class="list-group">
                <div class="list-group-item">
                  <h3>{{ $names[$i]->name}}</h3>
                  
                </div>
                <div class="list-group-item">
                  <p>{{ $comments[$i]->content }}</p>
                </div>
              </div>
            </li>
          @endfor
        </ul>
        @endif
      </div>
    @else
    404 error
    @endif
    @endsection
