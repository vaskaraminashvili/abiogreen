<x-layout>
    <!-- team-area-start -->
    <section class="it-team-area pt-130 pb-130">
        <div class="container">
            <div class="row gx-35">
                @foreach ($teamMembers as $teamMember)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow img-anim-top" data-wow-duration="1.5s"
                        data-wow-delay="0.1s">
                        <div class="it-team-item fix mb-40">
                            <a class="d-inline-block w-100" href="{{ route('team.show', $teamMember->id) }}">
                                <div class="it-team-thumb p-relative border-radius-20">
                                    <img class="w-100 team-member-img"
                                        src="{{ $teamMember->getFirstMediaUrl('team', 'portrait') }}" alt="">

                                </div>
                            </a>
                            <div class="it-team-content">
                                <h4 class="it-team-title">
                                    <a class="border-line"
                                        href="{{ route('team.show', $teamMember->id) }}">{{ $teamMember->full_name }}</a>
                                </h4>
                                <span>{{ $teamMember->position }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $teamMembers->links('vendor.pagination.default') }}
        </div>
    </section>
    <!-- team-area-end -->
</x-layout>
