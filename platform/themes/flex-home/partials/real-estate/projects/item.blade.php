<div class="itemm">
    <div class="container-item">
        <div class="item-left">
            <a href="{{ $project->url }}" class="linkdetail">
                <img class="thumb" data-src="{{ RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage()) }}" src="{{ RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $project->name }}">
            </a>
        </div>
        <div class="item-right">
            <div class="item-right-container">
                <div class="item-right_header">
                    <div class="item-header_text">
                        <span>{{ $project->City['name'] }}</span>
                    </div>
                    <div class="item-header_button">
                        <a href="{{ $project->url }}">good price</a>
                    </div>
                </div>
                <div class="item-right_title">
                    <a href="{{ $project->url }}"><p class="title-text">{{ $project->name }}</p></a>
                </div>
                <div class="item-right_container">
                    <p class="item-container_text">{{ $project->Description }}</p>
                </div>
                <div class="item-right_seemore">
                    <a href="{{ $project->url }}" class="linkdetail">See more</a>
                    <img src="{{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/vector-1-1.png')}}">
                </div>
            </div>
        </div>
    </div>

{{--<div class="item">--}}
{{--    <div class="blii">--}}
{{--        <div class="img"><img class="thumb" data-src="{{ RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage()) }}" src="{{ RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $project->name }}">--}}
{{--        </div>--}}
{{--        <a href="{{ $project->url }}" class="linkdetail"></a>--}}
{{--        <ul class="item-price-wrap hide-on-list"><li class="h-type"><span>{{ $project->category->name }}</span></li></ul>--}}
{{--    </div>--}}

{{--    <div class="description">--}}
{{--        <a href="{{ $project->url }}"><h5>{{ $project->name }}</h5>--}}
{{--            <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> {{ $project->city->name }}, {{ $project->city->state->name }}</p>--}}
{{--            @if ($project->price_from || $project->price_to)--}}
{{--                <p class="bold500">{{ __('Price') }}: @if ($project->price_from) <span class="from">{{ __('From') }}</span> {{ format_price($project->price_from, $project->currency) }} @endif @if ($project->price_to) - {{ format_price($project->price_to, $project->currency) }} @endif</p>--}}
{{--            @endif--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}
