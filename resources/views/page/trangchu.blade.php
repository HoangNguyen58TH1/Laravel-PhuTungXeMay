@extends('master')
@section('content')

<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer">
            <div class="banner" style="height: 500px !important;">
                <ul>
                    @foreach($slide as $sl)
                    <!-- THE FIRST SLIDE -->
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                        <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                            <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                src="source/image/slide/{{$sl->hinh}}" data-src="source/image/slide/{{$sl->hinh}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('source/image/slide/{{$sl->hinh}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<div class="container">
<div id="content" class="space-top-none">
<div class="main-content">
<div class="space60">&nbsp;</div>
<div class="row">
    <div class="col-sm-12">
        <div class="beta-products-list">
            <h4>Sản phẩm mới</h4>
            <div class="beta-products-details">
                <p class="pull-left">Tìm thấya {{$new_product->total()}} sản phẩm</p>
                {{-- <p class="pull-left">Tìm thấyb {{count($new_product)}} sản phẩm</p> --}}
                <div class="clearfix"></div>
            </div>

            <div class="row">
                @foreach($new_product as $new)
                <div class="col-sm-3">
                    <div class="single-item">
                        @if($new->giamgia != 0)
                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                        @endif
                        <div class="single-item-header">
                        <a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->hinh}}" alt="" height="250px" width="262.5"></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">{{$new->ten}}</p>
                            <p class="single-item-price">
                                @if($new->giamgia == 0)
                                    <span class="flash-sale">{{number_format($new->gia)}} VNĐ</span>
                                @else
                                    <span class="flash-del">{{number_format($new->gia)}} VNĐ</span>
                                    <span class="flash-sale">{{number_format($new->giamgia)}} VNĐ</span>
                                @endif
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="{{route('themgiohang',$new->id)}}"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="{{route('chitietsanpham',$new->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Tạo pagination cho page --}}
            <div class="row"> {{$new_product->links()}} </div>
        </div> <!-- .beta-products-list -->

        <div class="space50">&nbsp;</div>

        <div class="beta-products-list">
            <h4>Sản phẩm khuyến mãi</h4>
            <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{$sanpham_khuyenmai->total()}} sản phẩm khuyến mãi</p>
                {{-- <p class="pull-left">Tìm thấy {{count($sanpham_khuyenmai)}} sản phẩm khuyến mãi</p> --}}
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @foreach($sanpham_khuyenmai as $spkm)
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                        <div class="single-item-header">
                            <a href="{{route('chitietsanpham',$spkm->id)}}"><img src="source/image/product/{{$spkm->hinh}}" alt="" height="250px" width="262.5"></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">{{$spkm->ten}}</p>
                            <p class="single-item-price">
                                <span class="flash-del">{{number_format($spkm->gia)}} VNĐ</span>
                                <span class="flash-sale">{{number_format($spkm->giamgia)}} VNĐ</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="{{route('themgiohang',$spkm->id)}}"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="{{route('chitietsanpham',$spkm->id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            {{-- Tạo pagination cho page --}}
            <div class="row">{{$sanpham_khuyenmai->links()}}</div>
            <div class="space40">&nbsp;</div>

        </div> <!-- .beta-products-list -->
    </div>
</div> <!-- end section with sidebar and main content -->


</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection