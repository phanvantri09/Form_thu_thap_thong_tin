
@extends('index')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 style="text-align: center">Thêm nhóm câu hỏi </h2>
    </div>
    
    <div class="card">
                {{-- <div class="card-header">
                    <strong>Nhóm câu hỏi</strong>
                </div> --}}
                <form action="{{ route('postaddPart') }}" method="POST" class="card-body card-block col col-md-12">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName2" class="pr-1  form-control-label">Đặt tên cho nhóm câu hỏi</label>
                        <input type="text" id="exampleInputName2" name="name" placeholder="nhập ở đây" required="" class="form-control">
                        <input type="hidden" id="exampleInputName2" name="id_form" value="{{$id_form}}" placeholder="nhập ở đây" required="" class="form-control">
                    </div>
                    <div class="form-group" >
                        <label for="select" class=" form-control-label">Chọn câu hỏi cho nhóm</label>
                        <div style="height:200px ;overflow-y: scroll">
                            @foreach ($quest as $item)
                            <div class="form-group form-check">
                                <input type="checkbox" name="id_question[]" class="form-check-input" value="{{$item->id}}" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{$item->name}}</label>
                             </div> 
                            @endforeach
                        </div>
                    </div>
                    <div style=" text-align: left" class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Thêm Nhóm
                        </button>
                    </div>
                </form>
            </div>
    
</div>
@stop();