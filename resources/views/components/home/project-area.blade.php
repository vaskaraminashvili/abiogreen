        <!-- project-area-start -->
        <section class="it-project-3-area fraction-wrapper pt-120 pb-120">
            <div class="container">
                <div class="mb-70">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="it-project-2-section-title-box">
                                <span class="it-section-subtitle">Project</span>
                                <h4 class="it-section-title fz-45 it-split-text it-split-in-right">Latest Projects,
                                    Solutions <br> And Energy Supplies</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-4">
                            <div class="it-project-2-btn z-index-1 text-md-end">
                                <a href="project.html" class="it-btn-theme">
                                    <span>
                                        <span class="text-1">View All Project</span>
                                        <span class="text-2">View All Project</span>
                                    </span>
                                </a>
                                <img class="shape" src="assets/img/shape/testimonial-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="it-project-2-wrapper p-relative">
                            <div class="swiper it-project-3-active">
                                <div class="swiper-wrapper">
                                    @foreach ($projects as $project)
                                        <div class="swiper-slide project-item">
                                            <div class="it-project-2-item project-item__slide z-index-1">
                                                <img src="{{ $project->getFirstMediaUrl('images') }}" alt="">
                                                <div class="it-project-2-content">
                                                    <h4 class="it-project-2-title"><a class="border-line"
                                                            href="project-details.html">
                                                            {{ $project->title }}
                                                        </a></h4>
                                                    <span>{{ $project->station_size }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="it-project-2-arrow-wrap">
                                <button class="arrow-prev">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM16 7H0.999999V9H16V7Z"
                                            fill="currentcolor" />
                                    </svg>
                                </button>
                                <button class="arrow-next">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM0 9H15V7H0V9Z"
                                            fill="currentcolor" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-10 col-sm-8">
                        <!-- pagination start -->
                        <div class="swiper-pagination-custom project-pagination mt-60">
                            <span class="swiper-current">01</span>
                            <div class="swiper-progress-container">
                                <div class="swiper-progress-bar"></div>
                            </div>
                            <span class="swiper-total">05</span>
                        </div>
                        <!-- pagination end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- project-area-end -->