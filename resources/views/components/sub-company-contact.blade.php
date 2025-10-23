    <!-- contact-area-start -->
    <section class="it-contact-2-area z-index-1 black-bg pt-130 pb-130">
        <div class="it-contact-2-bg-1"><img src="assets/img/contact/bg-5-1.jpg" alt=""></div>
        <div class="it-contact-2-bg-2"><img src="assets/img/contact/bg-5-2.jpg" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="it-contact-2-left">
                        <div class="it-testimonial-section-title-box mb-35">
                            <span class="it-section-subtitle" id="CONTACTUS"> CONTACT US</span>
                            <h4 class="it-section-title fz-45 text-white it-split-text it-split-in-right">
                                Choose Your Company
                            </h4>
                        </div>
                        <div class="it-contact-2-nav-box">
                            <ul class="nav nav-tab" id="myTab" role="tablist">
                                @foreach ($subCompanies as $subCompany)
                                    <li class="nav-items mb-15" role="presentation">
                                        <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            id="{{ $subCompany->id }}-tab" data-bs-toggle="tab"
                                            data-bs-target="#contact-{{ $subCompany->id }}" type="button"
                                            role="tab" aria-controls="{{ $subCompany->id }}" aria-selected="true">
                                            <span class="it-contact-2-nav-link">{{ $subCompany->title }}</span>
                                            <span class="arrow">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.0035 3.40804L1.41153 12L0 10.5885L8.59097 1.99651H1.01922V0H12V10.9808H10.0035V3.40804Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </button>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="it-contact-2-right">
                        <div class="tab-content" id="myTabContent">
                            @foreach ($subCompanies as $subCompany)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                    id="contact-{{ $subCompany->id }}" role="tabpanel"
                                    aria-labelledby="{{ $subCompany->id }}-tab">
                                    <div class="it-contact-2-form-box text-center">
                                        <h4 class="it-contact-form-title text-white mb-xl-40 mb-10">Connect with Abio’s
                                            Experts </h4>

                                        <form action="{{ route('email.submit') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="sub_company_email" value="{{ $subCompany->email }}">
                                            <div class="it-contact-input-wrap">
                                                <div class="row gx-20">
                                                    <div class="col-12 mb-20">
                                                        <div class="it-contact-2-input-box p-relative">
                                                            <input type="text" name="name"
                                                                placeholder="Your Name">
                                                                 @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <button>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <g clip-path="url(#clip0_819_101277)">
                                                                        <path
                                                                            d="M9 9C9.89002 9 10.76 8.73608 11.5001 8.24162C12.2401 7.74715 12.8169 7.04434 13.1575 6.22208C13.4981 5.39981 13.5872 4.49501 13.4135 3.6221C13.2399 2.74918 12.8113 1.94736 12.182 1.31802C11.5526 0.688685 10.7508 0.260102 9.87791 0.0864683C9.00499 -0.0871652 8.10019 0.00194979 7.27792 0.342544C6.45566 0.683138 5.75285 1.25991 5.25839 1.99994C4.76392 2.73996 4.5 3.60999 4.5 4.5C4.50119 5.69311 4.97568 6.83701 5.81934 7.68067C6.66299 8.52432 7.80689 8.99881 9 9ZM9 1.5C9.59334 1.5 10.1734 1.67595 10.6667 2.00559C11.1601 2.33524 11.5446 2.80377 11.7716 3.35195C11.9987 3.90013 12.0581 4.50333 11.9424 5.08527C11.8266 5.66722 11.5409 6.20177 11.1213 6.62132C10.7018 7.04088 10.1672 7.3266 9.58527 7.44236C9.00333 7.55811 8.40013 7.4987 7.85195 7.27164C7.30377 7.04458 6.83524 6.66006 6.50559 6.16671C6.17595 5.67337 6 5.09335 6 4.5C6 3.70435 6.31607 2.94129 6.87868 2.37868C7.44129 1.81607 8.20435 1.5 9 1.5Z"
                                                                            fill="#625E58" />
                                                                        <path
                                                                            d="M9 10.5C7.2104 10.502 5.49466 11.2138 4.22922 12.4792C2.96378 13.7447 2.25199 15.4604 2.25 17.25C2.25 17.4489 2.32902 17.6397 2.46967 17.7803C2.61032 17.921 2.80109 18 3 18C3.19891 18 3.38968 17.921 3.53033 17.7803C3.67098 17.6397 3.75 17.4489 3.75 17.25C3.75 15.8576 4.30312 14.5223 5.28769 13.5377C6.27226 12.5531 7.60761 12 9 12C10.3924 12 11.7277 12.5531 12.7123 13.5377C13.6969 14.5223 14.25 15.8576 14.25 17.25C14.25 17.4489 14.329 17.6397 14.4697 17.7803C14.6103 17.921 14.8011 18 15 18C15.1989 18 15.3897 17.921 15.5303 17.7803C15.671 17.6397 15.75 17.4489 15.75 17.25C15.748 15.4604 15.0362 13.7447 13.7708 12.4792C12.5053 11.2138 10.7896 10.502 9 10.5Z"
                                                                            fill="#625E58" />
                                                                    </g>
                                                                    <defs>
                                                                        <clipPath id="clip0_819_101277">
                                                                            <rect width="18" height="18"
                                                                                fill="white" />
                                                                        </clipPath>
                                                                    </defs>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-20">
                                                        <div class="it-contact-2-input-box p-relative">
                                                            <input type="email" name="email" placeholder="Email Address">
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <button>
                                                                <svg width="18" height="18" viewBox="0 0 18 18"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.25 0.75H3.75C2.7558 0.751191 1.80267 1.14666 1.09966 1.84966C0.396661 2.55267 0.00119089 3.5058 0 4.5L0 13.5C0.00119089 14.4942 0.396661 15.4473 1.09966 16.1503C1.80267 16.8533 2.7558 17.2488 3.75 17.25H14.25C15.2442 17.2488 16.1973 16.8533 16.9003 16.1503C17.6033 15.4473 17.9988 14.4942 18 13.5V4.5C17.9988 3.5058 17.6033 2.55267 16.9003 1.84966C16.1973 1.14666 15.2442 0.751191 14.25 0.75ZM3.75 2.25H14.25C14.6991 2.25088 15.1376 2.38614 15.5092 2.63835C15.8808 2.89057 16.1684 3.24821 16.335 3.66525L10.5915 9.4095C10.1688 9.83049 9.59656 10.0669 9 10.0669C8.40344 10.0669 7.83118 9.83049 7.4085 9.4095L1.665 3.66525C1.83161 3.24821 2.11921 2.89057 2.49079 2.63835C2.86236 2.38614 3.30091 2.25088 3.75 2.25ZM14.25 15.75H3.75C3.15326 15.75 2.58097 15.5129 2.15901 15.091C1.73705 14.669 1.5 14.0967 1.5 13.5V5.625L6.348 10.47C7.05197 11.1722 8.00569 11.5665 9 11.5665C9.99431 11.5665 10.948 11.1722 11.652 10.47L16.5 5.625V13.5C16.5 14.0967 16.2629 14.669 15.841 15.091C15.419 15.5129 14.8467 15.75 14.25 15.75Z"
                                                                        fill="#625E58" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-15">
                                                        <div class="it-contact-2-input-box p-relative">
                                                            <textarea name="text" placeholder="Message..."></textarea>
                                                            @error('text')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        
                                                        </div>
                                                    </div>
                                                    <!-- filter -->

                                                    <div class="it-contact-btn">
                                                        <button type="submit" class="it-btn-theme black-bg w-100">
                                                            <span>
                                                                <span class="text-1">Submit Request</span>
                                                                <span class="text-2">Submit Request</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
  <x-email.toast />