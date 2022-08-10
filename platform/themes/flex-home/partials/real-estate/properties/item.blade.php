<style>
    .properties-container_item .properties-item .item-properties .item-properties_title h1.item-titleh1
    {
        padding-top: 18.8px;
    }
    .properties-container_item .properties-item .item-properties .item-properties_title .item-properties_address
    {
        margin-top: 8px;
    }
</style>
<div class="item-properties" data-lat="{{ $property->latitude }}" data-long="{{ $property->longitude }}">
    <div class="properties-item_img">
        <a href="{{ $property->url }}" style="width: 100%;">
        <img class="thumb"
             data-src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
             src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"
             alt="{{ $property->name }}">
        </a>
        <div class="properties-item_sale">
            <a href="{{ $property->url }}" class="item-sale">On sale</a>
            <a href="{{ $property->url }}" class="item-saleimg"><img src="{{ Theme::asset()->url('https://thomasnguyen.com.vn/storage/icon/share-2.png') }}" alt="" srcset=""></a>
        </div>
        <div class="properties-img_proce">
            <span class="price-text">Price:</span>
            <span class="price-textstart">{{ format_price($property->price, $property->currency) }}</span>
        </div>
        <a href="{{ $property->url }}" class="linkdetail"></a>
        <div class="media-count-wrapper">
            <div class="media-count">
                <img src="{{ Theme::asset()->url('images/media-count.svg') }}" alt="media">
                <span>{{ count($property->images) }}</span>
            </div>
        </div>
    </div>

    <div class="item-properties_title">
        <a class="item-properties_titlelink" href="{{ $property->url }}">
            <h1 class="item-titleh1">{{ $property->name }}</h1></a>
            <div class="item-properties_address">
                <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/map-pin.png')}} alt="" srcset="" >
                <div class="item-properties_textaddress">
                    <span class="left">Address:</span><span class="right">{{ $property->city->state->name }}</span>
                </div>
            </div>
        <div class="item-properties_investor">
            <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/group-1.png')}} alt="" srcset="" >
            <div class="item-properties_textinvestor">
                <span class="left">Investor:</span><span class="right">Thomas Nguyen</span>
            </div>
        </div>
        <div class="item-properties_area">
            @if ($property->number_bedroom)
                <div class="item-properties_area-left">
                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/icon-park-twotone-double-bed.png')}} alt="" srcset="" style="display: inline-block">
                    <span>{{ $property->number_bedroom }}</span>
                </div>
            @endif
            @if ($property->number_bathroom)
                <div class="item-properties_area-middo">
                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/la-bath.png')}} alt="" srcset="" style="display: inline-block">
                    <i class="vti">{{ $property->number_bathroom }}</i></div>
            @endif
            @if ($property->square)
                <div class="item-properties_area-right">
                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/carbon-area.png')}} alt="" srcset="" style="display: inline-block">
                    <i class="vti">{{ $property->square_text }}</i> </div>
            @endif
            {!! apply_filters('property_item_listing_extra_info', null, $property) !!}
        </div>
    </div>
</div>




{{--    <div class="itema" data-lat="{{ $property->latitude }}" data-long="{{ $property->longitude }}">--}}
{{--        <div class="properties-item_img">--}}
{{--            <img class="thumb"--}}
{{--                 data-src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"--}}
{{--                 src="{{ RvMedia::getImageUrl($property->image, 'small', false, RvMedia::getDefaultImage()) }}"--}}
{{--                 alt="{{ $property->name }}">--}}
{{--            <div class="properties-item_sale">--}}
{{--                <a href="{{ $property->url }}" class="item-sale">On sale</a>--}}
{{--                <a href="{{ $property->url }}" class="item-saleimg"><img src="{{ Theme::asset()->url('http://127.0.0.1:8000/storage/footer/share-2.png') }}" alt="" srcset=""></a>--}}
{{--            </div>--}}
{{--            <div class="properties-img_proce">--}}

{{--                <div class="media-count">--}}
{{--                    <img src="{{ Theme::asset()->url('images/media-count.svg') }}" alt="media">--}}
{{--                    <span>{{ count($property->images) }}</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="status">{!! $property->status->toHtml() !!}</div>--}}
{{--            <ul class="item-price-wrap hide-on-list">--}}
{{--                <li class="h-type"><span>{{ $property->category->name }}</span></li>--}}
{{--                <li class="item-price">{{ format_price($property->price, $property->currency) }}</li>--}}
{{--            </ul>--}}

{{--            <div class="description">--}}
{{--                <a href="#" class="text-orange heart add-to-wishlist" data-id="{{ $property->id }}"--}}
{{--                   title="{{ __('I care about this property!!!') }}"><i class="far fa-heart"></i></a>--}}
{{--                <a href="{{ $property->url }}">--}}
{{--                    <h5>{{ $property->name }}</h5>--}}
{{--                    <p class="dia_chi"><i class="fas fa-map-marker-alt"></i> {{ $property->city->name }},--}}
{{--                        {{ $property->city->state->name }}</p>--}}
{{--                </a>--}}
{{--                <p class="threemt bold500">--}}
{{--                    @if ($property->number_bedroom)--}}
{{--                        <span data-toggle="tooltip" data-placement="top" data-original-title="{{ __('Number of rooms') }}">--}}
{{--                    <i><img src="{{ Theme::asset()->url('images/bed.svg') }}" alt="icon"></i> <i--}}
{{--                                    class="vti">{{ $property->number_bedroom }}</i>--}}
{{--                </span>--}}
{{--                    @endif--}}
{{--                    @if ($property->number_bathroom)--}}
{{--                        <span data-toggle="tooltip" data-placement="top"--}}
{{--                              data-original-title="{{ __('Number of rest rooms') }}"> <i><img--}}
{{--                                        src="{{ Theme::asset()->url('images/bath.svg') }}" alt="icon"></i> <i--}}
{{--                                    class="vti">{{ $property->number_bathroom }}</i></span>--}}
{{--                    @endif--}}
{{--                    @if ($property->square)--}}
{{--                        <span data-toggle="tooltip" data-placement="top" data-original-title="{{ __('Square') }}"> <i><img--}}
{{--                                        src="{{ Theme::asset()->url('images/area.svg') }}" alt="icon"></i> <i--}}
{{--                                    class="vti">{{ $property->square_text }}</i> </span>--}}
{{--                    @endif--}}
{{--                    {!! apply_filters('property_item_listing_extra_info', null, $property) !!}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
