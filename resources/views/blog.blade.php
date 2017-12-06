    @extends('layouts.app')
    <style type="text/css">.ds-btn li{ list-style:none; float:left; padding:10px; }
.ds-btn li a span{padding-left:15px;padding-right:5px;width:100%;display:inline-block; text-align:left;}
.ds-btn li a span small{width:100%; display:inline-block; text-align:left;}
</style>
    @section('content')
    @if ( !count($posts) )
    There is no post till now. Login and write a new post now!!!
    @else
    <br>
    <div class="container">
    <ul class="ds-btn">
     
        
        <li>
             <a class="btn btn-lg btn-success " href="{{route('create')}}">
         <i class="glyphicon glyphicon-dashboard pull-left"></i><span>Create your own blog<br></span></a> 
            
        </li>
        
      </ul>
    </div>
      <br> 
    <div class="container">
      <br>
      
      @for($i = 0; $i < count($posts); $i++)
      <div class="list-group">
        <div class="list-group-item" style="padding:  10px">
          <h3><a href="{{ url('blog/show/'.$posts[$i]->idPost) }}" >{{ $posts[$i]->title }}</a>
            <div style="float: right;">
            <?php $c=0 ?>     
            @if($likdedPostId!=NULL)
            @foreach($likdedPostId as $value)
               @if($posts[$i]->idPost==$value->idPost)  
                   <?php $c=1 ?>         
               @endif
            @endforeach
            @endif
           
            @if($c==0)
            <form method="post"  action="{{route('like')}}">
              {{csrf_field()}}
               <fieldset>                   
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="post"  value="{{ $posts[$i]->idPost }}" />
                <input type="hidden" name="user"  value="{{ Auth::user()->idPerson }}" />
                <input type="submit" value="Like" class="btn btn-default" aria-label="Left Align">  <span class="glyphicon glyphicon-thumbs-up " ></span> 
            @else 
               <button class="btn btn-success" disabled>Liked</button>
            @endif
           
              <fieldset>     
          </form>
        </div>
            @if(!Auth::guest() && ($posts[$i]->idUser == Auth::user()->id))
              @if($posts[$i])
              <button class="btn" style="float: right"><a href="{{ url('edit/'.$posts[$i]->idPost)}}">Edit Post</a></button>
     
              @else
              <button class="btn" style="float: right"><a href="{{ url('edit/'.$posts[$i]->idPost)}}">Edit Draft</a></button>
              @endif
            @endif
          </h3>
          <p> Created by <a href="{{ url('/user/'.$names[$i]->name)}}">{{ $names[$i]->name }}</a></p>
        </div>
        <div class="list-group-item">
          <article>
            {!! str_limit($posts[$i]->content, $limit = 1500, $end = '....... <a href='.url("/".$posts[$i]->idPost).'>Read More</a>') !!}
          </article>
        </div>
      </div>
      @endfor
      {!! $posts->render() !!}
    </div>
    @endif
    @endsection
