@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

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
                    <form action="fix" method="POST" class="fix1">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" required name="name" value=" {{ Auth::user()->name }}" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" value=" {{ Auth::user()->email }}" readonly />
                        </div>
                        <div class="form-group">
                            <label>Weight</label>
                            <input type="number" class="form-control" name="weight" value=" {{ Auth::user()->weight }}"  />
                        </div>
                        <div class="form-group">
                            <label>Height</label>
                            <input type="number" class="form-control" name="height" value=" {{ Auth::user()->height }}"  />
                        </div>
                         <div class="form-group">
                            <label>Address</label>
                            <input  class="form-control" name="address" value=" {{ Auth::user()->address }}"  />
                        </div>
                         <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control" name="age" value=" {{ Auth::user()->age }}"  />
                        </div>
                        <div class="form-group">
                            <label>Đổi mật khẩu</label>
                            <br>
                            <label>Password</label>
                            <input class="form-control password" placeholder="Nhập mật khẩu mới" type="password" name="password"   />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control password"  placeholder="Nhập lại mật khẩu mới" type="password" name="passwordagain" />
                        </div>
                        <button type="submit" class="btn btn-default">Update</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
