@extends('index')
@section('content')
{{-- <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <h3 class="title-2 m-b-40">Biểu Đồ % các mức về đánh giá cho câu hỏi</h3>
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="page-wrapper">
    <header style="text-align: center; justify-items: center"> <h1>{{$form->name}}</h1></header>
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                
                                <div class="card-body card-block">
                                    <form action="{{ route('postForm') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        <input  type="hidden" name="id_form" value="{{$form->id}}">
                                        <div class="card bg-secondary.bg-gradient">
                                            <div class="card-body card-block ">
                                                    <label for="exampleInputName2" class=" col-lg-6"></label>
                                                    <label for="exampleInputName2" class=" col-lg-1 bg-primary">Mức 1</label>
                                                    <label for="exampleInputName2" class=" col-lg-1 bg-warning">Mức 2</label>
                                                    <label for="exampleInputName2" class=" col-lg-1 bg-light">Mức 3</label>
                                                    <label for="exampleInputName2" class=" col-lg-1 bg-primary">Mức 4</label>
                                                    <label for="exampleInputName2" class=" col-lg-1 bg-success">Mức 5</label>
                                            </div>
                                        </div>
                            @foreach ($part as $pa)
                            <div class="card">
                                <div class="card-header">
                                    <strong>{{$pa->name}}</strong> 
                                </div>
                                @foreach ($questioninpart as $qui)
                                @if ($qui->id_part == $pa->id)
                                    @foreach ($question as $qu)
                                        @if ($qu->id ==$qui->id_question)
                                             @if ($qu->type == 0)
                                {{-- <div class="card-body card-block">
                                    <label for="exampleInputName2" class=" col-lg-6">{{$qu->name}}</label>
                                    <input  name="rating{{$qui->id}}[]"  style="border: solid 1px black" type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class=" col-lg-5">
                                </div>
                                            @else --}}
                                            
                                            <div class="card-body card-block">
                                                <label for="exampleInputName2" class=" col-lg-6">{{$qu->name}}</label>
                                                @foreach ($rating as $ra)
                                                @if ($ra->id_questioninpart == $qui->id)
                                                    @if ($ra->rate == 1)
                                                    <input type="hidden" value="{{
                                                        $muc1++;
                                                        }}">
                                                    @endif
                                                    @if ($ra->rate == 2)
                                                    <input type="hidden" value="{{
                                                        $muc2++;
                                                        }}">
                                                    @endif
                                                    @if ($ra->rate == 3)
                                                    <input type="hidden" value="{{
                                                        $muc3++;
                                                        }}">
                                                    @endif
                                                    @if ($ra->rate == 4)
                                                    <input type="hidden" value="{{
                                                        $muc4++;
                                                        }}">
                                                    @endif
                                                    @if ($ra->rate == 5)
                                                    <input type="hidden" value="{{
                                                        $muc5++;
                                                        }}">
                                                    @endif
                                                    <input type="hidden" value="{{
                                                        $count++;
                                                        }}">
                                                @endif
                                                                
                                                @endforeach
                                                                <label for="exampleInputName2" class=" col-lg-1 bg-danger text-dark">{{$muc1*100/$count}} %</label>
                                                                <label for="exampleInputName2" class=" col-lg-1 bg-warning text-dark">{{$muc2*100/$count}} %</label>
                                                                <label for="exampleInputName2" class=" col-lg-1 bg-light text-dark">{{$muc3*100/$count}} %</label>
                                                                <label for="exampleInputName2" class=" col-lg-1 bg-primary text-dark">{{$muc4*100/$count}} %</label>
                                                                <label for="exampleInputName2" class=" col-lg-1 bg-success text-dark">{{$muc5*100/$count}} %</label>
                                                            </div>
                                            @endif
                                    @endif
                                @endforeach
                                @endif
                                @endforeach
                            </div>
                            @endforeach            
                            
                            
                                    </form>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@stop();