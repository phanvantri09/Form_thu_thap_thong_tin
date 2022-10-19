
@extends('index')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Sửa biểu mẫu: <u><i>{{$id->name}}</i></u></strong>
    </div>
    <div class="card-body card-block">
        {{-- {{route('admin.updateProduct',$id )}} --}}
        <form action="{{ route('postupdateForm', $id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('PUT') 
            <input type="hidden" name="id" value="{{$id->id}}">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Biểu mẫu của bạn</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="name" id="textarea-input" rows="9" placeholder="" class="form-control">{{$id->name}}</textarea>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12">
                    <label for="textarea-input" class=" form-control-label"><strong>Đối tượng nhắm đến</strong></label>
                </div>
                <div class="col-12 col-md-12">
                    <select name="id_objects" id="select" class="form-control">
                        @foreach ($data as $item1)
                        @if ($id->id_objects == $item1->id)
                        <option value="{{$item1->id}}">{{$item1->name}}</option>
                        @endif
                        
                        @endforeach
                        
                        @foreach ($data as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Cập nhật
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();