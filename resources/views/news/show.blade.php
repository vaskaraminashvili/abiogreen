<x-layout>
    <!-- postbox area start  -->
    <div class="postbox-area pt-40 pb-10 pt-lg-70 pb-lg-80">
        <div class="container">
            <div class="row gx-35">
                <div class="col-xl-8 mx-auto col-lg-8 offset-lg-2">
                    <div class="postbox-details-wrapper">
                        <article>
                            <div class="postbox-main-thumb border-radius-20 mb-40">
                                <img class="w-100" src="{{ $news->getFirstMediaUrl('news', 'thumb') }}" alt="">
                            </div>
                            <div class="postbox-content-box">
                                <div class="it-blog-meta-wrap d-flex justify-content-between">
                                    <div class="it-blog-meta mb-30">
                                        <span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.468788 13.1562H2.81253V14.5625C2.81253 14.8213 3.02241 15.0312 3.28128 15.0312H15.5313C15.7901 15.0312 16 14.8213 16 14.5625V2.375C16 2.11612 15.7901 1.90625 15.5313 1.90625H13.1875V1.4375C13.1875 1.17862 12.9776 0.96875 12.7188 0.96875C12.4599 0.96875 12.25 1.17862 12.25 1.4375V1.90625H9.87502V1.4375C9.87502 1.17862 9.66514 0.96875 9.40627 0.96875C9.1474 0.96875 8.93752 1.17862 8.93752 1.4375V1.90625H6.59378V1.4375C6.59378 1.17862 6.3839 0.96875 6.12503 0.96875C5.86615 0.96875 5.65628 1.17862 5.65628 1.4375V1.90625H3.28128C3.02241 1.90625 2.81253 2.11612 2.81253 2.375V5.18749C2.81253 8.64217 1.37676 11.2999 0.168695 12.3274C0.0170703 12.4537 -0.0391483 12.6615 0.0280078 12.8471C0.0952264 13.0326 0.271414 13.1562 0.468788 13.1562ZM15.0625 14.0937H3.75003V13.1562H12.7188C12.8284 13.1562 12.9346 13.1178 13.0189 13.0476C13.5824 12.5782 14.4552 11.4608 15.0625 10.0296V14.0937ZM3.75003 2.84375H5.65628V3.3125C5.65628 3.57137 5.86615 3.78124 6.12503 3.78124C6.3839 3.78124 6.59378 3.57137 6.59378 3.3125V2.84375H8.93752V3.3125C8.93752 3.57137 9.1474 3.78124 9.40627 3.78124C9.66514 3.78124 9.87502 3.57137 9.87502 3.3125V2.84375H12.25V3.3125C12.25 3.57137 12.4599 3.78124 12.7188 3.78124C12.9776 3.78124 13.1875 3.57137 13.1875 3.3125V2.84375H15.0625V4.71874H3.75003V2.84375ZM3.742 5.65593H15.0542C14.9486 8.62952 13.8073 10.9691 12.535 12.2187H1.535C2.97666 10.3818 3.66466 7.99005 3.742 5.65593Z"
                                                    fill="currentcolor" />
                                            </svg>
                                            {{ $news->publish_date->format('M d, Y') }}
                                        </span>

                                    </div>
                                    <div class="it-blog-meta mb-30">

                                    </div>
                                </div>
                                <h4 class="it-section-title pb-20">
                                    {{ $news->title }}
                                </h4>
                            </div>
                            <div class="postbox-dsc mb-50">
                                {!! $news->description !!}
                            </div>
                        </article>
                    </div>
                </div>
                @if ($news->getMedia('news')->count() > 1)
                    <div class="col-xl-8 mx-auto">
                        <div class="swiper news-slider p-relative">
                            <div class="swiper-wrapper">
                                @foreach ($news->getMedia('news') as $media)
                                    @if ($loop->index > 0)
                                    <div
                                        class="swiper-slide news-slider-item__image postbox-banner border-radius-20 mb-30">
                                            <a href="{{ $media->getUrl() }}" data-fancybox="gallery">
                                                <img class="w-100" src="{{ $media->getUrl() }}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-12">
                    <div class="sidebar-widget">
                        <h4 class="sidebar-widget-title mb-25">Recent post</h4>
                        <div class="sidebar-widget-content">
                            <div class="sidebar-widget-post sidebar-widget-post--custom">
                                <ul class="row">
                                    @foreach ($recentNews as $recentNewsItem)
                                        <li class="col-xl-4">
                                            <div class="rc-post">
                                                <div class="rc-post-thumb mb-30">
                                                    <a href="{{ route('news.show', $recentNewsItem->slug) }}">
                                                        <img src="{{ $recentNewsItem->getFirstMediaUrl('news', 'thumb') }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <div class="rc-meta mb-5">
                                                        <span>
                                                            <i class="fa-solid fa-calendar-days"></i>
                                                            {{ $recentNewsItem->publish_date->format('M d, Y') }}
                                                        </span>
                                                    </div>
                                                    <h5 class="rc-post-title">
                                                        <a class="border-line"
                                                            href="{{ route('news.show', $recentNewsItem->slug) }}">{{ $recentNewsItem->title }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- postbox area end  -->
</x-layout>
