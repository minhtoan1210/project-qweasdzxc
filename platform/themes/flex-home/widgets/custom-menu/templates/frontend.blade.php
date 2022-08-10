{{--<div class="col-sm-4">--}}
{{--    <div class="menufooter">--}}
{{--        <h4>{{ $config['name'] }}</h4>--}}
{{--        {!!--}}
{{--            Menu::generateMenu(['slug' => $config['menu_id']])--}}
{{--        !!}--}}
{{--    </div>--}}
{{--</div>--}}

<style>
    ul li a
    {
        color: rgba(255, 255, 255, 1);
    }
    ul li a:hover
    {
        color: rgba(255, 255, 255, 1);
    }
    ul
    {
        padding-left: 0px;
    }
    ul li a:hover
    {
        color: rgba(255, 255, 255, 1);
        text-decoration: none;
    }
</style>
<div class="footer_nav-moreInformation">
    <div class="footer_nav-moreInformation">
        <p class="moreinformation">{{ $config['name'] }}</p>
        <p>{!!Menu::generateMenu(['slug' => $config['menu_id']])!!}</p>
        {{--        <p><a class="all-projects" href="http://">All projects</a></p>--}}
        {{--        <p><a class="all-properties" href="http://">All properties</a></p>--}}
        {{--        <p><a class="home-for-sale" href="http://">Home for sale</a></p>--}}
        {{--        <p><a class="Home-for-rent" href="http://">Home for rent</a></p>--}}

        {{--    <div class="menufooter">--}}
        {{--        <h4>{{ $config['name'] }}</h4>--}}
        {{--        {!!--}}
        {{--            Menu::generateMenu(['slug' => $config['menu_id']])--}}
        {{--        !!}--}}
        {{--    </div>--}}

    </div>
</div>
