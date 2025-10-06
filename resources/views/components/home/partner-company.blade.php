        <!-- brand-area-start -->
        <div class="it-brand-area gray-bg3 pt-xl-40 pb-xl-70 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-brand-content mb-55">
                            <div class="text-center">
                                <span class="style-2">Trusted By 500+ Companies</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-0">
                    <div class="col-xl-12">
                        <div class="partner-company-wrapper swiper partner-company-slider p-relative">
                            <div class="swiper-wrapper">
                                @foreach ($partnerCompanies as $partnerCompany)
                                    <div class="swiper-slide it-brand-item">
                                        <img src="{{ $partnerCompany->getFirstMediaUrl('partners') }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->
