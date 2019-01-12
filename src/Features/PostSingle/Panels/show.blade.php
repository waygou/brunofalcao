@extends('website::layouts.post', ['post' => $post])

@section('post-header')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="alf-header-container d-flex">
                <!-- Logo -->
                <div class="text-center flex-grow-1">
                    <a href="index.html">
                        <h1 class="title-block">Bruno Falcão</h1>
                    </a>
                </div>
            </div>
            <!-- Hamburger Menu -->
            <div class="menu-wrapper">
                <a href="post.html#" class="alf-hamburger-trigger alf-hamburger-trigger d-flex align-items-center justify-content-center">
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
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <ul class="alf-form-block">
                    <li class="alf-form-block-item clearfix">
                        <div class="img-wrapper">
                             <a href="post.html#" class="thumb-link"> <img src="{{ Gravatar::src('thomaswelton@me.com') }}" class="img-fluid alf-forms-img" alt=""> </a>
                        </div>
                        <div class="alf-form-wrapper">
                            <h4>Claire Stamper</h4>
                            <p>Quisque gravida eros ut turpis interdumion ornary. Interdumetions malesu they faucibus.</p>
                            <ul class="alf-form-icons">
                                <li> <i class="fa fa-heart"></i> <span>3</span> </li>
                                <li> <i class="fa fa-reply"></i> <span>1</span> </li>
                            </ul>
                        </div>
                    </li>
                    <li class="alf-form-block-item clearfix">
                        <div class="img-wrapper">
                            <a href="post.html#" class="thumb-link"> <img src="{{ Gravatar::src('bruno.falcao@live.com') }}" class="img-fluid alf-forms-img" alt=""> </a>
                        </div>
                        <div class="alf-form-wrapper">
                            <h4>Seth Narrow</h4>
                            <p>Quisque gravida eros ut turpis interdumion ornary. Interdumetions malesu they faucibus.</p>
                            <ul class="alf-form-icons">
                                <li> <i class="fa fa-heart"></i> <span>6</span> </li>
                                <li> <i class="fa fa-reply"></i> <span>0</span> </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Form -->
            <div class="col-md-6 col-sm-6 gutter-30">
                <div class="title-block">
                    <h3>Leave a comment</h3>
                </div>
                <form method="post" class="row">
                    <div class="col-sm-6">
                        <div class="alf-form-component">
                            <input type="text" name="name" id="name" class="ee-input" placeholder="Full Name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="alf-form-component">
                            <input type="email" name="email" id="email" class="ee-input" placeholder="Email (optional)">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="alf-form-component">
                            <textarea name="message" id="message" cols="40" rows="4" class="ee-input" placeholder="Your reply, with moderation please." required=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit">Submit here. Thanks!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
