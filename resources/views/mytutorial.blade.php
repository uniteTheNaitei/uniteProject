@extends('layouts.app')

@section('content')
    <div class="container content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-bordered text-center">
                    <tr>
                        <td colspan="2" class=" danger">Information</td>
                    </tr>
                    <tr class="active">
                        <td>My Name </td>
                        <td>{{ Auth::user()->name }}</td>
                    </tr>
                    <tr class="warning">
                        <td>Weight</td>
                        <td> {{ Auth::user()->weight }}</td>
                    </tr>
                    <tr class="danger">
                        <td>Height</td>
                        <td>{{ Auth::user()->height }}</td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
@endsection
