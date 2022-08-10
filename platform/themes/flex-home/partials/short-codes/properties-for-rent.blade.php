@php
    use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;
    use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;
    use Botble\RealEstate\Enums\PropertyTypeEnum;


    $projects = collect([]);
    $sales = collect([]);

    if (is_plugin_active('real-estate')) {
        $projects = app(ProjectInterface::class)->advancedGet([
            'condition' => [
                're_projects.is_featured' => true,
            ] + RealEstateHelper::getProjectDisplayQueryConditions(),
            'take'      => (int)theme_option('number_of_featured_projects', 4),
            'with'      => RealEstateHelper::getProjectRelationsQuery(),
            'order_by' => ['re_projects.created_at' => 'DESC'],
        ]);


        $sales = app(PropertyInterface::class)->getPropertiesByConditions(
                    [
                        're_properties.is_featured'       => true,
                        're_properties.type'              => PropertyTypeEnum::SALE,
                    ] + RealEstateHelper::getPropertyDisplayQueryConditions(),
                    (int)theme_option('number_of_properties_for_sale', 8),
                    RealEstateHelper::getPropertyRelationsQuery()
                );
        $rent = app(PropertyInterface::class)->getPropertiesByConditions(
                    [
                        're_properties.is_featured'       => true,
                        're_properties.type'              => PropertyTypeEnum::RENT,
                    ] + RealEstateHelper::getPropertyDisplayQueryConditions(),
                    (int)theme_option('number_of_properties_for_rent', 8),
                    RealEstateHelper::getPropertyRelationsQuery()
                );
     }
@endphp
<div class="container-fluid w90" style="display:none;">
    <div class="homehouse padtop30 projecthome">
        <div class="row">
            <div class="col-12">
                <h2>{!! BaseHelper::clean($title) !!}</h2>
                @if ($subtitle)
                    <p>{!! BaseHelper::clean($subtitle) !!}</p>
                @endif
            </div>
        </div>
        <div style="position:relative;">
            <div class="owl-carousel" >
                @foreach($rent as $rent)
                    <div class="items">
                        <div class="home__item">
                            <div class="home__item__top">
                                <a href="{{$rent -> url}}">
                                <img class="fix-img"
                                     data-src="{{ RvMedia::getImageUrl($rent->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                     src="{{ RvMedia::getImageUrl($rent->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                     alt="{{ $rent->name }}">
                                </a>
                                <div class="item__share">
                                    <div class="row">
                                        <button class="status__blue status__green">
                                            <a href="{{ $rent->url }}">
                                                <p class="para__white">Renting</p>
                                            </a>
                                        </button>
                                        <div class="item__share__right">
                                            <a href="{{ $rent->url }}"> <img src="{{ Theme::asset()->url('https://thomasnguyen.com.vn/storage/icon/share-2.png') }}" alt="" srcset=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item__status d-flex justify-content-center
                align-items-center">
                                    <p class="para__white14">
                                        Price: <span class="span__gold">{{ format_price($rent->price, $rent->currency) }} </span>
                                    </p>
                                </div>
                            </div>
                            <div class="home__item__bottom">
                                <a href="#">
                                    <div class="home__item__title">
                                        <h3 class="heading3__black">{{ $rent->name }}</h3>
                                    </div>
                                </a>
                                <div class="home__item__content">
                                    <div class="item__address">
                                        <p class="para__light__gray">
                                            <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/map-pin.png')}} alt="" srcset=""> Address:
                                            {{ $rent->city->state->name }}
                                        </p>
                                    </div>
                                    <div class="item__investor">
                                        <p class="para__light__gray">
                                            <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/group-1.png')}} alt="" srcset=""> Investor: Thomas
                                            Nguyen
                                        </p>
                                    </div>
                                    <div class="item__price">
                                        <div class="row">
                                            <div class="item__price__detail col-auto">
                                                <p class="para__light__gray left">
                                                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/icon-park-twotone-double-bed.png')}} alt="" srcset="">{{ $rent->number_bedroom }}
                                                </p>
                                            </div>
                                            <div class="item__price__detail col-auto">
                                                <p class="para__light__gray middo">
                                                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/la-bath.png')}} alt="" srcset="">{{ $rent->number_bathroom }}
                                                </p>
                                            </div>
                                            <div class="item__price__detail col-auto">
                                                <p class="para__light__gray right">
                                                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/carbon-area.png')}} alt="" srcset=""> {{ $rent->square_text }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
