@extends('layouts.master')
@section('title')
    {{$title}}
@endsection
@section('navbar')
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
                </div>
            </div>
            <div class="col-lg-7">
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        @for ($i = 0; $i < 2; $i++)
        <div class="row">
            @foreach ($items as $item)
            <div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="#">
                    <img src="{{$item['img']}}" class="img-fluid product-thumbnail">
                    <h3 class="product-title">{{$item['name']}}</h3>
                    <strong class="product-price">{{$item['price']}}</strong>
                    <span class="icon-cross">
                        <img src="{{asset('asserts/image/cross.svg')}}" class="img-fluid">
                    </span>
                </a>
            </div>
            @endforeach
        </div>
        @endfor
    </div>
</div>
@endsection