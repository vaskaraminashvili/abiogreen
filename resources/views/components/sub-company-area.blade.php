        <!-- service-area-start -->
        <section class="it-service-area it-service-style-2 z-index-1 gray-bg3 pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="it-service-section-title-box text-center mb-70">
                            <span class="it-section-subtitle">Services</span>
                            <h4 class="it-section-title fz-45 it-split-text it-split-in-right">Our Energy Solution
                                empowers <br> sustainable energy.</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="swiper service-slider p-relative">
                            <div class="swiper-wrapper">
                                @foreach ($subCompanies as $subCompany)
                                    <div class="swiper-slide it-service-item sub-company-item min-height-300 h-100 "
                                        data-wow-duration=".9s" data-wow-delay=".3s">
                                        <div class="row h-100 w-100 m-0">
                                            <div class="col-xl-12 col-lg-12">
                                                <a href="{{ route('holdings.show', $subCompany->id) }}">
                                                    <img class="w-100 sub-company__image mb-3"
                                                        src="{{ $subCompany->getFirstMediaUrl('images') }}" alt="">
                                                </a>
                                                <div class="sub-company__title">
                                                    <h5 class="it-service-title mb-2"><a class="border-line"
                                                            href="{{ route('holdings.show', $subCompany->id) }}">{{ $subCompany->title }}</a>
                                                    </h5>
                                                </div>
                                                <div class="sub-company__description">
                                                    <p>
                                                        {{ $subCompany->short_desc }}
                                                    </p>
                                                    <a href="{{ route('holdings.show', $subCompany->id) }}" class="it-btn-theme black-bg">
                                                        <span>
                                                            <span class="text-1">More Details</span>
                                                            <span class="text-2">More Details</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- service-area-end -->
