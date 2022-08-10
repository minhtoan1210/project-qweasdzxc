@php
    use Botble\Base\Enums\BaseStatusEnum;
    use Botble\Location\Repositories\Interfaces\CityInterface;

    $cities = collect([]);
    if (is_plugin_active('location')) {
        $cities = app(CityInterface::class)->advancedGet([
            'condition' => [
                'cities.is_featured' => true,
                'cities.status'      => BaseStatusEnum::PUBLISHED,
            ],
            'take'      => (int)theme_option('number_of_featured_cities', 10),
            'select'    => ['cities.id', 'cities.name', 'cities.image', 'cities.slug'],
            'order_by'  => ['order' => 'ASC', 'name' => 'ASC'],
        ]);
    }
@endphp

@if ($cities->count())
    <div class="container-fluid w90">
        <div class="padtop70">
            <div class="areahome">
                <div class="row">
                    <div class="col-12">
                        <h2>{!! BaseHelper::clean($title) !!}</h2>
                        @if ($subtitle)
                            <p>{!! BaseHelper::clean($subtitle) !!}</p>
                        @endif
                    </div>
                </div>
                <div style="position:relative">
{{--                    <div class="home__properties__content owl-carousel">--}}
                    <div class="owl-carousel">
                        @foreach($cities as $cities)
                            <div class="items">
                                <div class="home__properties__item">
                                    <div class="home__properties__img">
                                        <a href="{{ route('public.properties-by-city', $cities->slug) }}">
                                        <img class="thumb" data-src="{{ RvMedia::getImageUrl($cities->image, 'small', false, RvMedia::getDefaultImage()) }}" src="{{ RvMedia::getImageUrl($cities->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $cities->name }}">
                                        </a>
                                        <div class="home__properties__title__item">
                                            <div class="title__district">
                                                <h3 class="heading3__gold justify-content-center">
                                                    <a href="{{ route('public.properties-by-city', $cities->slug) }}">
                                                   {{$cities->name}}
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="title__city">
                                                <p class="para__white16 text-center mt-3">Ho Chi Minh City</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    <i class="am-next"><img src="{{ Theme::asset()->url('images/aleft.png') }}" alt="pre"></i>
                    <i class="am-prev"><img src="{{ Theme::asset()->url('images/aright.png') }}" alt="next"></i>
                </div>
            </div>

        </div>
    </div>
@endif
