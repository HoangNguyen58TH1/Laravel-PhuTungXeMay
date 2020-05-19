@extends('master')
@section('content')

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach($loai as $l)
                            <li><a href="{{route('loaisanpham',$l->id)}}">{{$l->ten}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm: {{$loai_sp->ten}}</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{$sp_theoloai->total()}} sản phẩm</p>
                            {{-- <p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p> --}}
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($sp_theoloai as $sp)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if($sp->giamgia != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('chitietsanpham',$sp->id)}}"><img src="source/image/product/{{$sp->hinh}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sp->ten}}</p>
                                        <p class="single-item-price">
                                            @if($sp->giamgia == 0)
                                                <span class="flash-sale">{{number_format($sp->gia)}} VNĐ</span>
                                            @else
                                                <span class="flash-del">{{number_format($sp->gia)}} VNĐ</span>
                                                <span class="flash-sale">{{number_format($sp->giamgia)}} VNĐ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$sp_theoloai->links()}}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{$sp_khac->total()}} sản phẩm</p>
                            {{-- <p class="pull-left">Tìm thấy {{count($sp_khac)}} sản phẩm</p> --}}
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($sp_khac as $sp_k)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if($sp_k->giamgia != 0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('chitietsanpham',$sp_k->id)}}"><img src="source/image/product/{{$sp_k->hinh}}" alt="" height="250px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sp_k->ten}}</p>
                                        <p class="single-item-price">
                                            @if($sp_k->giamgia == 0)
                                                <span class="flash-sale">{{number_format($sp_k->gia)}} VNĐ</span>
                                            @else
                                                <span class="flash-del">{{number_format($sp_k->gia)}} VNĐ</span>
                                                <span class="flash-sale">{{number_format($sp_k->giamgia)}} VNĐ</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="{{route('themgiohang',$sp_k->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{route('chitietsanpham',$sp_k->id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">{{$sp_khac->links()}}</div>
                        <div class="space40">&nbsp;</div>
                        
                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection