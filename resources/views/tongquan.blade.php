@extends('index')
@section('content')
<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>{{$countUser}}</h2>
                        <span>Người dùng</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <h2>{{$countForm}}</h2>
                        <span>Biểu mẫu</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                    <div class="text">
                        <h2>{{$countQuestion}}</h2>
                        <span>Câu hỏi</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2>{{$countObjects}}</h2>
                        <span>Đối tượng</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
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
@stop()