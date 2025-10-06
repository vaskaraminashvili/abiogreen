       <!-- team-area-start -->
       <section class="it-team-area gray-bg3 pt-130 pb-110">
           <div class="container">
               <div class="row">
                   <div class="col-xxl-3 col-xl-4 col-lg-4">
                       <div class="it-team-left">
                           <div class="it-team-section-title-box mb-20">
                               <span class="it-section-subtitle">Our Experts</span>
                               <h4 class="it-section-title fz-45">The Creative <br>Experts.</h4>
                           </div>
                           <p>Solaar Sustainable Energy: Harness Solar <br> Power for a Greener Future with
                               Reliable,<br> Eco-Friendly Technology</p>
                           <a href="{{ route('team') }}" class="it-btn-theme">
                               <span>
                                   <span class="text-1">View All Teammber</span>
                                   <span class="text-2">View All Teammber</span>
                               </span>
                           </a>
                       </div>
                   </div>
                   <div class="col-xxl-9 col-xl-8 col-lg-8">
                       <div class="it-team-wrap">
                           <div class="row gx-20">
                               @foreach ($teamMembers as $teamMember)
                                   <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 wow img-anim-top"
                                       data-wow-duration="1.5s" data-wow-delay="0.1s">
                                       <div class="it-team-item fix mb-20">
                                           <div class="it-team-thumb p-relative border-radius-20">
                                               <img class="w-100  team-member-img" src="{{ $teamMember->getFirstMediaUrl('team', 'portrait') }}" alt="">

                                           </div>
                                           <div class="it-team-content">
                                               <h4 class="it-team-title">
                                                   <a class="border-line" href="{{ route('team.show', $teamMember->id) }}">{{ $teamMember->full_name }}</a>
                                               </h4>
                                               <span>{{ $teamMember->position }}</span>
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
       <!-- team-area-end -->
