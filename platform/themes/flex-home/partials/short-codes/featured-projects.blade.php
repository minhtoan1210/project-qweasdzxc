@php
    use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;

    $projects = collect([]);

    if (is_plugin_active('real-estate')) {
        $projects = app(ProjectInterface::class)->advancedGet([
            'condition' => [
                're_projects.is_featured' => true,
            ] + RealEstateHelper::getProjectDisplayQueryConditions(),
            'take'      => (int)theme_option('number_of_featured_projects', 4),
            'with'      => RealEstateHelper::getProjectRelationsQuery(),
            'order_by' => ['re_projects.created_at' => 'DESC'],
        ]);
     }
@endphp
@if ($projects->count())
    <div class="box_shadow" style="margin-top: 0;">
        <div class="container-fluid w90">
            <div class="projecthome">
                <div class="row">
                    <div class="col-12">
                        <h2>{!! BaseHelper::clean($title) !!}</h2>
                        @if ($subtitle)
                            <p style="margin: 0; margin-bottom: 10px">{!! BaseHelper::clean($subtitle) !!}</p>
                        @endif
                    </div>
                </div>
                <div style="position:relative;">
                    <div class="owl-carousel" >
{{--                    @foreach ($projects as $key => $project)--}}
                            @foreach ($projects as $project)
{{--                            <h1><?php echo $key ?></h1>--}}
                                <div class="items">
                                <div class="home__item">
                                    <div class="home__item__top">
                                        <a href="{{ $project->url }}">
                                            <img class="thumb" data-src="{{ RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage()) }}" src="{{ RvMedia::getImageUrl($project->image, 'small', false, RvMedia::getDefaultImage()) }}" alt="{{ $project->name }}">
                                        </a>
                                            <div class="item__share">
                                            <div class="row">
                                                <button class="status__green">
                                                    <a href="{{ $project->url }}"> <p class="para__white14">good price</p></a>
                                                </button>
                                                <div class="col-6 item__share__right">
                                                    <a href="{{ $project->url }}"><img src="{{ Theme::asset()->url('https://thomasnguyen.com.vn/storage/icon/share-2.png') }}" alt="" srcset=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                                class="item__status d-flex justify-content-center
                align-items-center">
                                            <p class="para__white14">Coming up</p>
                                        </div>
                                    </div>
                                    <div class="home__item__bottom">
                                        <a href="{{ $project->url }}">
                                            <div class="home__item__title">
                                                <h3 class="heading3__black">{{$project->name}}</h3>
                                            </div>
                                        </a>
                                        <div class="home__item__content">
                                            <div class="item__address">
                                                <p class="para__light__gray">
                                                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/map-pin.png')}} alt="" srcset="" style="width: auto">
                                                    Address:
                                                    District 2, Ho Chi Minh
                                                </p>
                                            </div>
                                            <div class="item__investor">
                                                <p class="para__light__gray">
                                                    <img src={{ RvMedia::getImageUrl('https://thomasnguyen.com.vn/storage/icon/group-1.png')}} alt="" srcset="" style="width: auto"> Investor: Thomas
                                                    Nguyen
                                                </p>
                                            </div>
                                            <div class="item__price">
                                                <p class="para__black__large">
                                                    Price: <span class="span__green"> Updating</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            {!! Theme::partial('real-estate.projects.item', compact('project')) !!}--}}

                    @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endif
