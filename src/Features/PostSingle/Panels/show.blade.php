@extends('website::layouts.post', ['post' => $post])

@section('post-header')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="alf-header-container d-flex">
                <!-- Logo -->
                <div class="text-center flex-grow-1">
                    <a href="{{ route('homepage.index') }}">
                        <h1 class="title-block">Bruno Falcão</h1>
                    </a>
                </div>
            </div>
            <!-- Hamburger Menu -->
            <div class="menu-wrapper">
                <a href="#" class="alf-hamburger-trigger alf-hamburger-trigger d-flex align-items-center justify-content-center">
                    <div class="alf-hamburger-wrapper align-self-center "> <span></span> <span></span> <span></span> </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('post-body')
<div class="col-md-12 col-sm-12 gutter-30">
    <img class="img-fluid" src="/storage/{{ $post->featured_image }}" alt="">
    <div class="alf-post-wrapper">
        <div class="title-block">
            <h2>{{ $post->title }}</h2>
            <p>by Bruno Falcão / {{ $post->published_at->diffForHumans() }}</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                {!! $post->html !!}
            </div>
        </div>
        <!-- Comments -->
        <div class="row mt-20">
            @twinkle('comments')
        </div>
    </div>
</div>
@endsection
