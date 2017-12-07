@extends ('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Course
                        <small>{{$course->name}}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors -> all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                    <form action="admin/course/fix/{{$course->idCourse}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" required name="name" value="{{$course->name}}" />
                        </div>
                        <div class="form-group">
                            <label>ID Coach</label>
                            <input class="form-control" name="idCoach" value="{{$course->idCoach}}" />
                        </div>
                        <div class="form-group">
                            <label>Money</label>
                            <input class="form-control" name="money" value="{{$course->Money}}"  />
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <input class="form-control" name="info" value="{{$course->info}}"  />
                        </div>
                        <div class="form-group">
                            <label>Min Height</label>
                            <input class="form-control" name="height" value="{{$course->minHeight}}"  />
                        </div>
                        <div class="form-group">
                            <label>Min Weight</label>
                            <input class="form-control" name="weight" value="{{$course->minWeight}}"  />
                        </div>
                        <button type="submit" class="btn btn-default">Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
