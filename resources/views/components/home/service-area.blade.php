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
                    @foreach ($subCompanies as $subCompany)
                        <div class="col-xl-6 mb-35 ">
                            <div class="it-service-item sub-company-item min-height-300 h-100 wow itfadeUp " data-wow-duration=".9s" data-wow-delay=".3s">
                                <div class="row h-100 w-100 m-0">
                                    <div class="col-xl-6 col-lg-6 h-100">
                                        <div class="it-service-content h-100 d-flex flex-column justify-content-center">
                                            <h4 class="it-service-title"><a class="border-line"
                                                    href="service-details.html">{{ $subCompany->title }}</a></h4>
                                            <p>
                                                {{ $subCompany->short_desc }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div
                                            class="it-service-content-wrap d-flex flex-column justify-content-between align-items-center h-100">
                                            <div class="it-service-thumb border-radius-10 mx-0 mb-3">
                                                <img class="w-100 sub-company__image" src="{{ $subCompany->getFirstMediaUrl('images') }}"
                                                    alt="">
                                            </div>
                                            <div class="it-service-btn z-index-1">
                                                <a href="service-details.html" class="it-btn-theme black-bg">
                                                    <span>
                                                        <span class="text-1">More Details</span>
                                                        <span class="text-2">More Details</span>
                                                    </span>
                                                </a>
                                                <img class="shape" src="assets/img/shape/service-4-1.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="it-service-btn text-center mt-35">
                            <a href="service-v1.html" class="it-btn-theme">
                                <span>
                                    <span class="text-1">View All Service</span>
                                    <span class="text-2">View All Service</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-area-end -->