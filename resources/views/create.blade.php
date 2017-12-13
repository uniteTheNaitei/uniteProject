    @extends('layouts.app')
    @section('title')
    Add New Post
    @endsection
    @section('content')
    <br>
    <div class="container">
    <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <script type="text/javascript">
          tinymce.init({
            selector : "textarea",
            plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
            toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        });

    </script>
    <form method="post" action="{{route('create')}}"> {{ csrf_field() }}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
      </div>
      <div class="form-group">
        <textarea name='body'class="form-control">{{ old('body') }}</textarea>
      </div>
      <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
      <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
    </form>
  </div>
  <br>
    @endsection
