   <x-layout>
       <!-- about-area-start -->
       <section class="it-about-4-area pt-xl-60 pb-xl-130">
           <div class="container">
               <div class="row align-items-center project-item">
                   <div class="col-xl-8 offset-xl-2 col-lg-6 offset-lg-2">
                       <div class=" border-radius-30 mb-20 mb-xl-40">
                           <img class="d-block mx-auto project-item__image project-item__image--contain"
                               src="{{ $subCompany->getFirstMediaUrl('images') }}" alt="">
                       </div>
                   </div>
                   <div class="col-xl-8 offset-xl-2 col-lg-7 offset-lg-2">
                       <div class="it-about-section-title-box mb-20 mb-xl-40">
                           <h4 class="it-section-title fz-45">
                               {{ $subCompany->title }}
                           </h4>
                       </div>
                   </div>
                   <div class="col-xl-8 offset-xl-2 col-lg-6 offset-lg-2 wow itfadeRight" data-wow-duration=".9s"
                       data-wow-delay=".7s">
                       <div class="">
                           <p class="s4">At Abio Green, we are committed to accelerating the global transition from
                               polluting, expensive fossil fuels to clean, renewable energy. Recognizing the urgent need
                               to combat climate change, we harness state-of-the-art technologies to generate, store,
                               and distribute energy from the sun, wind, and water. Beyond renewable generation, we are
                               advancing the future of EV charging infrastructure and pioneering green finance solutions
                               that empower businesses and communities to invest in sustainable growth. Our mission is
                               clear: to deliver innovative, cost-effective energy solutions that reduce carbon
                               emissions and pave the way for a cleaner future.</p>
                           <p class="s4">Since our founding in 2016, Abio Green has grown into a multinational
                               leader in renewable energy and green technology, employing more than 350 passionate
                               professionals worldwide. From engineers and project managers to financial experts and
                               service specialists, every member of our team plays a vital role in shaping the future of
                               clean power.</p>
                           <p class="s4">We believe that investing in people is just as important as investing in
                               technology and finance. That&rsquo;s why we foster a culture of collaboration,
                               innovation, and excellence &mdash; creating an environment where talent thrives, ideas
                               are valued, and every contribution makes a real impact.</p>
                           <p class="s4">At Abio Green, we don&rsquo;t just deliver energy &mdash; we combine
                               renewable power, innovative technologies, EV charging, and green finance to drive
                               sustainable progress.</p>
                       </div>
                       <div class="mt-20">
                           @if ($subCompany->external_link)
                               <a href="{{ $subCompany->external_link }}" class="it-btn-theme black-bg" target="_blank">
                                   <span>
                                       <span class="text-1">Visit Website</span>
                                       <span class="text-2">Visit Website</span>
                                   </span>
                               </a>
                           @endif
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!-- about-area-end -->





   </x-layout>
