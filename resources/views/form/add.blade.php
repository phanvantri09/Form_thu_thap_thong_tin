
@extends('index')
@section('content')
<div class="card">
    <div class="card-header">
        <h2 style="text-align: center">Thêm biểu mẫu</h2>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('postaddForm') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
           @csrf 
            {{-- <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tên sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="name" placeholder="Nhập tên sản phẩm" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="email-input" class=" form-control-label">Số lượng theo kg</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="email-input" name="amount" placeholder="Nhập số lượng đơn vị kg" class="form-control">
                    @error('amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Giá thành sản phẩm trên 1kg</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="price" placeholder="Nhập giá thành sản phẩm trên 1kg" class="form-control">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">Loại sản phẩm</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="level" id="select" class="form-control">
                        <option value="0">Trái cây</option>
                        <option value="1">Thịt</option>
                        <option value="2">Hải sản</option>
                        <option value="3">Đông lạnh</option>
                        <option value="4">Gói hàng</option>
                    </select>
                </div>
            </div>--}}
            <div class="row form-group">
                <div class="col col-md-12">
                    <label for="textarea-input" class=" form-control-label"><strong>Nhập Tên Của Biểu Mẫu</strong></label>
                </div>
                <div class="col-12 col-md-12">
                    <textarea name="name" id="textarea-input" rows="9" placeholder="Nhập tại đây" class="form-control"></textarea>
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
                        @foreach ($data as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <strong>Nhóm câu hỏi</strong>
                </div>
                <div class="card-body card-block col col-md-6">
                    
                        <div class="form-group">
                            <label for="exampleInputName2" class="pr-1  form-control-label">Đặt tên cho nhóm câu hỏi</label>
                            <input type="text" id="exampleInputName2" placeholder="nhập ở đây" required="" class="form-control">
                        </div>
                        <div class="form-group" >
                            <label for="select" class=" form-control-label">Chọn câu hỏi</label>
                            <div style="height:200px ;overflow-y: scroll">
                                
                                 <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Câu hỏi 1</label>
                                 </div>
                                 <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Câu hỏi 1</label>
                                 </div>
                                 <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Câu hỏi 1</label>
                                 </div>
                                 <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Câu hỏi 1</label>
                                 </div>

                            </div>
                        </div>
                </div>
                <div style=" text-align: left" class="card-footer">
                    <button type="submit" class="btn btn-success btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Thêm Nhóm
                    </button>
                </div>
            </div> --}}
            {{-- <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 1</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img1" class="form-control-file">
                    @error('img1')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}
            {{-- <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 2</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img2" class="form-control-file">
                    @error('img2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="file-input" class=" form-control-label">Ảnh 3</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="file" id="file-input" name="img3" class="form-control-file">
                    @error('img3')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div> --}}
            <div style=" text-align: center" class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Hoàn thành
                </button>
            </div>
        </form>
    </div>
    
</div>
@stop();