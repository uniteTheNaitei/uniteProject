@extends ('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PerSon
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

                    <form action="admin/person/add" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control"required name="name" placeholder="Nhập tên" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" required class="form-control" name="email" placeholder="Nhập email" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input  type="password" required class="form-control" name="password" placeholder="Nhập password" />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại Password</label>
                            <input  type="password" required class="form-control" name="passwordagain" placeholder="Nhập lại password" />
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="number" required class="form-control" name="weight" placeholder="Nhập weight" />
                        </div>
                        <div class="form-group">
                            <label>Height</label>
                            <input type="number" required class="form-control" name="height" placeholder="Nhập height" />
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