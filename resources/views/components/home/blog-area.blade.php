        <!-- blog-area-start -->
        <section class="it-blog-area it-blog-style-3 pt-125 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="it-blog-section-title-box text-center mb-65">
                            <span class="it-section-subtitle">Our Recent post</span>
                            <h4 class="it-section-title fz-45 it-split-text it-split-in-right">Read Our Latest News &
                                Blog</h4>
                        </div>
                    </div>
                </div>
                <div class="row gx-35">
                    @foreach ($news as $item)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="it-blog-item mb-30">
                                <div class="it-blog-thumb p-relative mb-30 border-radius-20 wow img-anim-top"
                                    data-wow-duration="1.5s" data-wow-delay="0.1s">
                                    <a href="blog-details.html">
                                        <img class="w-100" src="{{ $item->getFirstMediaUrl('news', 'thumb') }}" alt="">
                                        <img class="w-100" src="{{ $item->getFirstMediaUrl('news', 'thumb') }}" alt="">
                                    </a>
                                    <div class="it-blog-date">
                                        <span>{{ $item->publish_date->format('M d, Y') }}</span>
                                    </div>
                                </div>
                                <div class="it-blog-content">
                                    <h4 class="it-blog-title mb-15">
                                        <a class="border-line" href="blog-details.html">
                                            {{ $item->title }}
                                        </a>
                                    </h4>
                                    <p>{{ Str::limit($item->description, 100) }}</p>
                                    <a class="it-blog-link" href="blog-details.html">
                                        <span>
                                            <span class="text-1">Explore More
                                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0182 1.70005C12.0339 1.28613 11.7111 0.937823 11.2972 0.922075L4.5521 0.665445C4.13819 0.649697 3.78988 0.972475 3.77413 1.38639C3.75838 1.8003 4.08116 2.14861 4.49507 2.16436L10.4907 2.39248L10.2626 8.38814C10.2469 8.80205 10.5697 9.15036 10.9836 9.16611C11.3975 9.18186 11.7458 8.85908 11.7615 8.44517L12.0182 1.70005ZM1 11.1875L1.50978 11.7376L11.7785 2.22164L11.2687 1.67153L10.7589 1.12142L0.490216 10.6374L1 11.1875Z"
                                                        fill="#2DC457" />
                                                </svg>
                                            </span>
                                            <span class="text-2">Explore More
                                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.0182 1.70005C12.0339 1.28613 11.7111 0.937823 11.2972 0.922075L4.5521 0.665445C4.13819 0.649697 3.78988 0.972475 3.77413 1.38639C3.75838 1.8003 4.08116 2.14861 4.49507 2.16436L10.4907 2.39248L10.2626 8.38814C10.2469 8.80205 10.5697 9.15036 10.9836 9.16611C11.3975 9.18186 11.7458 8.85908 11.7615 8.44517L12.0182 1.70005ZM1 11.1875L1.50978 11.7376L11.7785 2.22164L11.2687 1.67153L10.7589 1.12142L0.490216 10.6374L1 11.1875Z"
                                                        fill="#2DC457" />
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- blog-area-end -->
