<a href='#CONTACTUS'>test</a>
        <!-- about-area-start -->
        <section class="it-about-area pt-120 pb-130">
            <div class="container">
                <div class="mb-80">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12">
                            <div class="it-about-section-title-box text-center text-xl-start">
                                <span class="it-section-subtitle">Who We Are</span>
                                <h4 class="it-section-title fz-45 it-split-text it-split-in-right">Empowering the
                                    Future with Clean Hydropower Solutions</h4>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="it-about-mission-wrap">
                                <div class="it-about-border">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-5 col-sm-6">
                                            <div class="it-about-mission">
                                                <span>Our Vision</span>
                                                <p>To drive a cleaner and more sustainable future by making renewable energy accessible, efficient, and reliable for communities and businesses worldwide.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-5 col-sm-6">
                                            <div class="it-about-mission">
                                                <span>Our Mission</span>
                                                <p>To design, build, and operate advanced solar, storage, and energy management solutions that empower progress while protecting the planet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="it-about-btn">
                                    <a href="{{ route('about') }}" class="it-btn-theme">
                                        <span>
                                            <span class="text-1">More About Us</span>
                                            <span class="text-2">More About Us</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-6 order-1 order-lg-0">
                        <div class="row gx-35">
                            @foreach ($stats as $stat)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow itfadeLeft" data-wow-duration=".9s"
                                data-wow-delay=".5s">
                                <div class="it-about-stat-box z-index-1 gray-bg3 mb-35">
                                    <img class="shape" src="assets/img/shape/about-1-1.png" alt="">
                                    <span>{{ $stat->title }}</span>
                                    <h4 class="stat-number"><i>{{ strip_tags($stat->text) }}</i> </h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- about-area-end -->