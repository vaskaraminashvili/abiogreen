       <!-- Our team Section -->
       <section id="team" class="team content-section">
           <div class="container">
               <div class="row text-center">
                   <div class="col-md-12">
                       <h2>Our Team</h2>
                       <h3 class="caption gray">Meet the people who make awesome stuffs</h3>
                   </div><!-- /.col-md-12 -->

                   <div class="container">
                       <div class="row">
                           @foreach ($teamMembers as $teamMember)
                               <div class="col-md-4">
                                   <div class="team-member">
                                       <figure>
                                            <img src="{{ $teamMember->getFirstMediaUrl('team', 'portrait') }}"
                                               alt="" class=" team-member-img">
                                           <figcaption>
                                               {{ $teamMember->description }}
                                               
                                           </figcaption>
                                       </figure>
                                       <h4>{{ $teamMember->full_name }}</h4>
                                       <p>{{ $teamMember->position }}</p>
                                   </div><!-- /.team-member-->
                               </div><!-- /.col-md-4 -->
                           @endforeach
                       </div><!-- /.row -->
                   </div><!-- /.container -->

               </div><!-- /.row -->
           </div><!-- /.container -->
       </section><!-- /.our-team -->
