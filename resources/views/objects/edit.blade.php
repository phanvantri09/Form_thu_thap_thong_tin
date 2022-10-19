
@extends('index')
@section('content')
<div class="card">
    <div class="card-header">
        <strong>Sửa Đối Tượng: <u><i>{{$id->name}}</i></u></strong>
    </div>
    <div class="card-body card-block">
        {{-- {{route('admin.updateProduct',$id )}} --}}
        <form action="{{ route('postupdateObjects', $id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf @method('PUT') 
            <input type="hidden" name="id" value="{{$id->id}}">
            
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Đối tượng</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="name" id="textarea-input" rows="9" placeholder="" class="form-control">{{$id->name}}</textarea>
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