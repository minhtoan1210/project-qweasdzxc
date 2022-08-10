@if ($posts->count() > 0)
    <div class="page_new">
        <div class="row">
            <div class="new">
                <div class="new-left">
                    @foreach($posts as $post)
                        <div class="new-left_item">
                            <div class="new-left_img">
                                <a href="{{$post->url}}">
                                <img
                                        data-src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                        src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                        alt="{{ $post->name }}"
                                        style="border-radius: 4px;">
                                </a>
                            </div>
                            <div class="new-right">
                                <div class="new-right_text">
                                    <a href="{{$post->url}}">
                                    <h1 class="new-text">{{ $post-> name }}</h1>
                                    </a>
                                </div>
                                <div class="new-right_date">
                                    <img src="{{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/group.png')}}" style="max-height: 38px" alt="{{ theme_option('site_name') }}">
                                    <span class="new-date_text">{{ date_format($post->created_at,"d/m/Y") }}</span>
                                </div>
                                <div class="new-right_dirscription">
                                    <p class="text-dirscription">{{$post->description}}</p>
                                </div>
                                <div class="new-right_seemore">
                                    <a href="{{$post->url}}">See more</a>
                                    <img src="{{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/vector-1-1.png')}}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="new-rightt">
                    <div class="new-right_title">
                        <h1 class="new-title">Featured Posts</h1>
                        @foreach($posts as $post)
                            <div class="new-right_item">
                                <a href="{{$post->url}}">
                                <img
                                        data-src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                        src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                        alt="{{ $post->name }}"
                                        style="border-radius: 4px;">
                                </a>
                                <div class="new-right-item_text">
                                    <a href="{{$post->url}}">
                                    <p class="new-right-text">
                                       {{$post->name}}
                                    </p>
                                    </a>
                                    <p class="new-right_time">
                                        {{ date_format($post->created_at,"d/m/Y") }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="colm10 col-sm-12">
        <nav class="d-flex justify-content-center pt-3">
            {!! $posts->withQueryString()->links() !!}
        </nav>
    </div>
@endif
