<x-layout>
    <!-- details-area-start -->
    <div class="it-pro-details-area pt-130 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="it-pro-details-wrap project-item">
                        @if ($project->header_info != null)
                        
                        <div class="it-pro-details-more-box">
                            @foreach ($project->header_info as $key => $value)
                                <div class="it-pro-details-more-info">
                                    <div>
                                        <span>{{ $key }}</span>
                                        <i>{{ $value }}</i>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        @endif
                        <div class="it-pro-details-thumb gray-bg3 mb-25">
                            <img class="w-100 border-radius-20 project-item__image--details"
                                src="{{ $project->getFirstMediaUrl('images') }}" alt="">
                        </div>
                        <div class="postbox-content-box mb-45">
                            <h4 class="it-inner-title mb-20">
                                <a href="#">Project overview</a>
                            </h4>
                            <div class="postbox-dsc">
                                <p>Nutmeal is a nutritious category of food that includes various types of ground nuts,
                                    such
                                    as almonds, walnuts, and peanuts These ground nuts can be used in a variety of
                                    recipes, including smoothies, baked goods, and savory dishes Nutmeal is a versatile
                                    ingredient Nutmeal is a nutritious category of food that includes various types of
                                    ground nuts, such as almonds, walnuts, and peanuts These ground nuts can be used in
                                    a
                                    variety of recipes</p>
                                <p>Nutmeal is a nutritious category of food that includes various types of ground nuts,
                                    such
                                    as almonds, walnuts, and peanuts These ground nuts can be used in a variety of
                                    recipes, including smoothies, baked goods, and savory dishes Nutmeal is a versatile
                                    ingredient Nutmeal is a nutritious category of food that includes various types of
                                    ground nuts, such as almonds, walnuts, and peanuts These ground nuts can be used in
                                    a
                                    variety of recipes</p>
                            </div>
                        </div>
                        <div class="row gx-0">
                            <div class="col-xl-12 mb-30">
                                <div class=" swiper p-relative project-show-slider">
                                    <div class="swiper-wrapper">
                                        @foreach ($project->getMedia('images') as $image)
                                            <div class="swiper-slide it-pro-details-thumb border-radius-20">
                                                <a href="{{ $image->getUrl() }}" data-fancybox="gallery">
                                                    <img class="w-100 project-item__image" src="{{ $image->getUrl() }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="postbox-details-wrapper postbox-style-2">
                            <div class="row">
                                @if ($project->project_objectives != null)
                                <div class="col-lg-6 col-md-6">
                                    <div class="it-sv-details-list mb-55">
                                        <h5 class="it-inner-title">Project Objectives</h5>
                                        <ul class="mt-20">
                                            @foreach ($project->project_objectives as $objective)
                                                <li>
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM9.92417 12.8492C9.60167 13.1717 9.1775 13.3325 8.75167 13.3325C8.32583 13.3325 7.8975 13.17 7.57167 12.845L5.25333 10.5983L6.41417 9.40083L8.74167 11.6567L13.5825 6.90583L14.7525 8.09333L9.92417 12.8492Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                    {{ $objective['name'] }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endif

                                @if ($project->key_features != null)
                                <div class="col-lg-6 col-md-6">
                                    <div class="it-sv-details-list mb-55">
                                        <h5 class="it-inner-title">Key Features</h5>
                                        <ul class="mt-20">
                                            @foreach ($project->key_features as $feature)
                                                <li>
                                                    <span>
                                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 0C4.48583 0 0 4.48583 0 10C0 15.5142 4.48583 20 10 20C15.5142 20 20 15.5142 20 10C20 4.48583 15.5142 0 10 0ZM9.92417 12.8492C9.60167 13.1717 9.1775 13.3325 8.75167 13.3325C8.32583 13.3325 7.8975 13.17 7.57167 12.845L5.25333 10.5983L6.41417 9.40083L8.74167 11.6567L13.5825 6.90583L14.7525 8.09333L9.92417 12.8492Z"
                                                                fill="currentcolor" />
                                                        </svg>
                                                    </span>
                                                    {{ $feature['name'] }}
                                                </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
                                @endif

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- details-area-end -->
</x-layout>
