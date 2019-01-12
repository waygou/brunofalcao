@extends('website::layouts.homepage')

@section('swiper')
<div class="swiper-container">
    <div class="swiper-wrapper">
        @twinkle('slides')
    </div>
    <div class="swiper-button-next"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </div>
    <div class="swiper-button-prev"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </div>
</div>
@endsection
