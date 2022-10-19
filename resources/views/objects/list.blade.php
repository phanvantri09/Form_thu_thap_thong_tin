@extends('index')
@section('content')
<!-- MAIN CONTENT-->
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Đối tượng</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $da)
        <tr class="tr-shadow">
            <td>{{$da->id}}</td>
            <td><b>{{$da->name}}</b></td>          
            <td>
                <div class="table-data-feature">
                    <a  href="{{route('updateObjects',$da->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    <a href="{{route('deleteObjects',$da->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Delete">
                        <i  class="zmdi zmdi-delete text-danger"></i>
                    </a>
                </div> 
            </td>
        </tr>
        <tr class="spacer"></tr>
        @endforeach
    </tbody>
</table>
<form method="POST" action="" id="formDelete">
    @csrf @method('DELETE')
</form>
<div>
    {{$data->appends(request()->all())->links()}}
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
@stop();

