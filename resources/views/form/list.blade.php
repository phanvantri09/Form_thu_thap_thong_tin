@extends('index')
@section('content')
<!-- MAIN CONTENT-->
<table class="table table-data2">
    <thead>
        <tr>
            <th>...</th>
            <th>Biểu mẫu</th>
            <th>Đối tượng</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $da)
        <tr class="tr-shadow">
            <td>{{$da->id}}</td>
            
            <td><b>{{$da->name}}</b></td>   
            @foreach ($ob as $item)
                @if ($item->id == $da->id_objects)
                <td>{{$item->name}}</td>
                @endif
            @endforeach  
            <td>
                <div class="table-data-feature">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Nhóm
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($part as $item)
                                @if ($da->id == $item->id_form)
                                <a class="dropdown-item au-btn--blue" href="#">{{$item->name}}</a>
                                @endif
                            @endforeach
                          <a  class="dropdown-item au-btn--green" href="{{ route('addPart',['id_form'=>$da->id]) }}">Thêm nhóm</a>
                        </div>
                      </div>
                    <a style="margin-left: 8px"  href="{{route('sumForm',$da->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Thống kê">
                        <i class="zmdi zmdi-chart text-info"></i>
                    </a>
                    
                      <a style="margin-left: 8px"  href="{{route('form',$da->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Xem form">
                        <i class="zmdi zmdi-file-text text-primary"></i>
                    </a>
                    <a  href="{{route('updateForm',$da->id)}}" class="item btnEdit" data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit text-success"></i>
                    </a>
                    <a href="{{route('deleteForm',$da->id)}}" class="item btnDelete"  data-toggle="tooltip" data-placement="top" title="Delete">
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

