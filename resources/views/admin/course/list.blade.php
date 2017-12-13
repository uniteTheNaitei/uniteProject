@extends ('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Course
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th >ID</th>
                        <th>Name</th>
                        <th>ID Coach</th>
                        <th>Money</th>
                        <th>Info</th>
                        <th>MinHeight</th>
                        <th>MinWeight</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($course as $value)
                        <tr class="odd gradeX" align="center">
                            <td>{{$value->idCourse}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->idCoach}}</td>
                            <td>{{$value->Money}}</td>
                            <td>{{$value->info}}</td>
                            <td>{{$value->minHeight}}</td>
                            <td>{{$value->minWeight}}</td>
                            <td>
                                <img width="100px" src="{{$value->img_1}}"/>
                            </td>
                            <td>
                                <img width="100px" src="{{$value->img_2}}"/>
                            </td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/course/delete/{{$value->idCourse}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/course/fix/{{$value->idCourse}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection