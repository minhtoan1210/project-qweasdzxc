@php
    use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;
    use Botble\Blog\Repositories\Interfaces\PostInterface;
 /**
     * @param Request $request
     * @param BaseHttpResponse $response
     * @return BaseHttpResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Resources\Json\JsonResource
     */
    $posts = collect([]);
    if (is_plugin_active('blog')) {
         $posts = app(PostInterface::class)->getFeatured(4, []);
     }
@endphp
@if (is_plugin_active('blog'))
    <div class="box_shadow" style="margin-bottom: 0;padding-bottom: 80px;">
        <div class="container-fluid w90">
            <div class="discover">
                <div class="row">
                    <div class="col-12">
                        <h2>{!! BaseHelper::clean($title) !!}</h2>
                        @if ($subtitle)
                            <p>{!! BaseHelper::clean($subtitle) !!}</p>
                        @endif
                        <br>
                        <div class="home__news__content">
                            <div class="row">
                                @foreach($posts as $key => $post)
                                    @if ($key == 0)
                                    <div class="home__new__content__item home__news__content__highlight col-0 col-xl-6">
                                    <a href="{{ $post->url }}" style="position: relative">
                                    <div class="content__highlight__img">

                                     <img
                                     data-src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                     src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                     alt="{{ $post->name }}">
                                     </div>
                                     <div class="content__highlight__text">
                                     <h3 class="heading3__white">
                                         {{ $post->name }}
                                     </h3>
                                     <p class="para__white16">
                                         {{ $post->description }}
                                      </p>
                                      </div></a>
                                      <p class="seemore">
                                      <a href="https://thomasnguyen.com.vn/news">View more posts <i class="fa fa-angle-right"></i></a>
                                      </p>
                                      @endif
                                        @endforeach
                                    </div>
                                        <div class="home__new__content__item home__news__content__detail col-12 col-xl-6">
                                            @foreach($posts as $key => $post)
                                                @if ($key > 0)
                                                    <div class="content__detail__item col-12">
                                                        <div class="row">
                                                            <div class="content__detail__title col-2 col-xl-4">
                                                                <a href="{{ $post->url }}">
                                                                <img
                                                                     data-src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                                                     src="{{ RvMedia::getImageUrl($post->image, 'small', false, RvMedia::getDefaultImage()) }}"
                                                                     alt="{{ $post->name }}"></a>
                                                            </div>
                                                            <div class="content__detail__title col-10 col-xl-8">
                                                                <a href="{{ $post->url }}"> <h3 class="heading3__black">{{ $post->name }}</h3></a>
{{--                                                                <p class="para__light__gray__small">06/09/2022</p>--}}
                                                                <p class="para__black__large">
                                                                    {{ $post->description }}
                                                                </p>
                                                                <span class="seemore d-inline-block"><a href="#">see more</a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                            </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
