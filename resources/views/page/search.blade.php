@extends('master')
@section('content')
<div class="container">
<div id="content" class="space-top-none">
<div class="main-content">
<div class="space60">&nbsp;</div>
<div class="row">
    <div class="col-sm-12">
        <div class="beta-products-list">
            <h4>Tìm kiếm</h4>
            <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{$product->total()}} sản phẩm</p>
                {{-- <p class="pull-left">Tìm thấy {{count($product)}} sản phẩm</p> --}}
                <div class="clearfix"></div>
            </div>

            <div class="row">
                @foreach($product as $new)
                <div class="col-sm-3">
                    <div class="single-item">
                        @if($new->giamgia != 0)
                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                        @endif
                        <div class="single-item-header">
                        <a href="{{route('chitietsanpham',$new->id)}}"><img src="source/image/product/{{$new->hinh}}" alt="" height="250px" width="262.5px"></a>
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
                            <a class="beta-btn primary" href="product.html">Chi tiết <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- Tạo pagination cho page --}}
            <div class="row"> {{$product->links()}} </div>
        </div> <!-- .beta-products-list -->

    </div>
</div> <!-- end section with sidebar and main content -->


</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection