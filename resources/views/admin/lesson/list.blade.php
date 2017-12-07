@extends ('admin.layout.index')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lesson
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
                    <tr class="text-center">
                        <th >ID Course</th>
                        <th>STT</th>
                        <th>Info Lesson</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lesson as $value)
                        <tr class="odd gradeX" align="center">
                            <td>{{$value->idCourse}}</td>
                            <td>{{$value->stt}}</td>
                            <td>{{$value->infoLesson}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lesson/delete/{{$value->stt}}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/lesson/fix/{{$value->stt}}">Edit</a></td>
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