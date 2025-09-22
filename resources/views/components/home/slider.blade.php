        <section class="it-slider-3-area it-slider-2-area fix">
            <div class="it-slider-2-wrap z-index-1">
                <div class="swiper-container it-slider-3-active">
                    <div class="swiper-wrapper">
                        @foreach ($slides as $slide)
                        <div class="swiper-slide">
                            <div class="it-slider-2-box it-slider-2-overlay p-relative">
                                <div class="it-slider-2-bg"><img src="{{ $slide->getFirstMediaUrl('slides', 'large') }}"
                                        alt=""></div>
                                <img class="shape" src="assets/img/shape/slider-2-1.png" alt="">
                                <!-- stat-box-start -->
                                <div class="it-slider-2-stat-box-wrap">
                                    <div class="it-slider-2-stat-box">
                                        <div class="mb-20">
                                            {{ $slide->bottom_title }}
                                        </div>
                                        <span class="number">
                                             {{ strip_tags($slide->bottom_description) }}
                                        </span>
                                        
                                    </div>
                                </div>
                                <!-- stat-box-end -->

                                <div class="container">
                                    <div class="row">
                                        <div class="col-xxl-9 col-xl-8 col-lg-10">
                                            <div class="it-slider-2-content">
                                                <h1 class="it-slider-2-title mb-20">
                                                    {{ $slide->title }}
                                                </h1>
                                                <div class="it-slider-2-text">
                                                    <p class="mb-40">
                                                        {!! $slide->description !!}
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
                <!-- pagination start -->
                <div class="swiper-pagination-custom">
                    <span class="swiper-current">01</span>
                    <!-- Progress container -->
                    <div class="swiper-progress-container">
                        <div class="swiper-progress-bar"></div>
                    </div>
                    <span class="swiper-total">05</span>
                </div>
                <!-- pagination end -->
            </div>
        </section>