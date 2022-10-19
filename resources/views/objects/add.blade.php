
@extends('index')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 style="text-align: center">Thêm ĐỐi Tượng</h2>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('postaddObjects') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
           @csrf 
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Nhập Đối Tượng</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="name" id="textarea-input" rows="9" placeholder="Nhập tại đây" class="form-control"></textarea>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> 
            <div style=" text-align: center" class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Hoàn thành
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();