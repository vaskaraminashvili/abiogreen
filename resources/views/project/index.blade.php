<x-layout>
    <!-- project-area-start -->
    <section class="it-project-2-area it-project-2-style-2 pt-130 pb-130">
        <div class="container">
            <div class="row gx-35">
                @foreach ($projects as $project)
                    <div class="col-xl-6 col-lg-6 col-md-6 wow itfadeUp project-item" data-wow-duration=".9s" data-wow-delay=".3s">
                        <div class="it-project-2-item border-radius-20 z-index-1 mb-35">
                            <img class="project-item__image" src="{{ $project->getFirstMediaUrl('images') }}" alt="">
                            <div class="it-project-2-content d-flex align-items-center justify-content-between">
                                <div>
                                    <h4 class="it-project-2-title">
                                        <a class="border-line" href="{{ route('projects.show', $project->id) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h4>
                                    <span>{{ $project->station_size }}</span>
                                </div>
                                <a href="{{ route('projects.show', $project->id) }}" class="it-project-2-arrow">
                                    <svg width="19" height="17" viewBox="0 0 19 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.9912 3.13216C19.0642 2.58472 18.6796 2.08176 18.1322 2.00877L9.21111 0.819299C8.66367 0.746306 8.16071 1.13092 8.08772 1.67836C8.01473 2.2258 8.39935 2.72876 8.94678 2.80175L16.8766 3.85906L15.8193 11.7889C15.7463 12.3363 16.1309 12.8393 16.6784 12.9123C17.2258 12.9853 17.7288 12.6007 17.8018 12.0532L18.9912 3.13216ZM1 16L1.60745 16.7944L18.6074 3.79436L18 3L17.3925 2.20564L0.39255 15.2056L1 16Z"
                                            fill="currentcolor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $projects->links('vendor.pagination.default') }}
        </div>
    </section>
    <!-- project-area-end -->
</x-layout>
