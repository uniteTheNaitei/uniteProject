join@extends ('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Course
                        <small>Add</small>
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

                    <form action="admin/course/add" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control"required name="name" placeholder="Nhập tên" />
                        </div>
                        <div class="form-group">
                            <label>idCoach</label>
                            <input type="number" required class="form-control" name="idCoach" placeholder="Nhập id Coach" />
                        </div>
                        <div class="form-group">
                            <label>Money</label>
                            <input  type="text" required class="form-control" name="money" placeholder="Nhập money" />
                        </div>
                        <div class="form-group">
                            <label>Info</label>
                            <input  type="text" required class="form-control" name="info" placeholder="Info" />
                        </div>
                        <div class="form-group">
                            <label>Min Weight</label>
                            <input type="number" required class="form-control" name="weight" placeholder="Nhập weight" />
                        </div>
                        <div class="form-group">
                            <label>Min Height</label>
                            <input type="number" required class="form-control" name="height" placeholder="Nhập height" />
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh 1</label>
                            <input type="text" name="img_1" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Hình Ảnh 2</label>
                            <input type="text" name="img_2" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-default">Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection