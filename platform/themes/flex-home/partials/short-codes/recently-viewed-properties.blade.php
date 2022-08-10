{{--@php--}}
{{--    use Botble\RealEstate\Repositories\Interfaces\ProjectInterface;--}}
{{--    use Botble\RealEstate\Repositories\Interfaces\PropertyInterface;--}}
{{--    use Botble\RealEstate\Enums\PropertyTypeEnum;--}}


{{--    $projects = collect([]);--}}
{{--    $sales = collect([]);--}}

{{--    if (is_plugin_active('real-estate')) {--}}
{{--        $projects = app(ProjectInterface::class)->advancedGet([--}}
{{--            'condition' => [--}}
{{--                're_projects.is_featured' => true,--}}
{{--            ] + RealEstateHelper::getProjectDisplayQueryConditions(),--}}
{{--            'take'      => (int)theme_option('number_of_featured_projects', 4),--}}
{{--            'with'      => RealEstateHelper::getProjectRelationsQuery(),--}}
{{--            'order_by' => ['re_projects.created_at' => 'DESC'],--}}
{{--        ]);--}}


{{--        $sales = app(PropertyInterface::class)->getPropertiesByConditions(--}}
{{--                    [--}}
{{--                        're_properties.is_featured'       => true,--}}
{{--                        're_properties.type'              => PropertyTypeEnum::SALE,--}}
{{--                    ] + RealEstateHelper::getPropertyDisplayQueryConditions(),--}}
{{--                    (int)theme_option('number_of_properties_for_sale', 8),--}}
{{--                    RealEstateHelper::getPropertyRelationsQuery()--}}
{{--                );--}}
{{--        $rent = app(PropertyInterface::class)->getPropertiesByConditions(--}}
{{--                    [--}}
{{--                        're_properties.is_featured'       => true,--}}
{{--                        're_properties.type'              => PropertyTypeEnum::RENT,--}}
{{--                    ] + RealEstateHelper::getPropertyDisplayQueryConditions(),--}}
{{--                    (int)theme_option('number_of_properties_for_rent', 8),--}}
{{--                    RealEstateHelper::getPropertyRelationsQuery()--}}
{{--                );--}}
{{--           $rent = app(PropertyInterface::class)->getPropertiesByConditions(--}}
{{--                    [--}}
{{--                        're_properties.is_featured'       => true,--}}
{{--                        're_properties.type'              => PropertyTypeEnum::RENT,--}}
{{--                    ] + RealEstateHelper::getPropertyDisplayQueryConditions(),--}}
{{--                    (int)theme_option('number_of_properties_for_rent', 8),--}}
{{--                    RealEstateHelper::getPropertyRelationsQuery()--}}
{{--                );--}}
{{--     }--}}
{{--@endphp--}}
{{--<div class="container-fluid w90">--}}
{{--    <div class="homehouse padtop30 projecthome ">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <h2>{!! BaseHelper::clean($title) !!}</h2>--}}
{{--                @if ($description)--}}
{{--                    <p>{!! BaseHelper::clean($description) !!}</p>--}}
{{--                @endif--}}
{{--                @if ($subtitle)--}}
{{--                    <p>{!! BaseHelper::clean($subtitle) !!}</p>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <property-component type="recently-viewed-properties" url="{{ route('public.ajax.properties') }}"></property-component>--}}
{{--    </div>--}}
{{--</div>--}}
