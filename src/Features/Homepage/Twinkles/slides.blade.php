@foreach($posts as $post)
        <div class="swiper-slide">
            <div class="swiper-slide-block">
                <div class="swiper-slide-block-img">
                    <a href="post.html"><img src="/storage/{{ $post->featured_image }}" alt=""></a>
                </div>
                <div class="swiper-slide-block-text">
                    <h2 class="alf-main-title">{{ $post->header_line }}<br />{{ $post->header_baseline }}<span></span></h2>
                    <p class="alf-paragraph">{{ $post->excerpt }}</p>
                    <h3 class="alf-main-subtitle">TAGS — <span>
                        @foreach($post->tags as $tag)
                            • <a href="/posts/tag/{{ $tag->slug }}" target="_blank">{{ $tag->name }}</a>
                        @endforeach
                    </h3>
                    <a class="alf-link" href="/posts/{{ $post->slug }}">Read more</a></div>
            </div>
        </div>
@endforeach
