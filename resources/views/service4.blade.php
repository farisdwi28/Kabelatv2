@extends('layouts.master')
@section('title', 'Services')

@section('content')

<x-page-title title="Home" pagetitle="Services" maintitle="Email Marketing" />

<!--===== ABOUT AREA STARTS =======-->
<div class="service-inner-header sp8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="service-images">
                    <img src="{{ URL::asset('build/img/all-images/service-img10.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-textarea heading2">
                    <h5>Email Marketing</h5>
                    <h2>Email Marketing Services</h2>
                    <p>Email marketing with a high return on investment (ROI) and the ability <br class="d-lg-block d-none"> to deliver personalized content directly to your customers' inboxes, <br class="d-lg-block d-none"> email marketing is essential for building lasting relationships and <br class="d-lg-block d-none"> driving business growth.</p>
                    <div class="space32"></div>
                    <div class="btn-area1">
                        <a href="service1" class="header-btn1">View Our Services <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="slider-section-area slider-inner sp5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-2">
          <div class="sldier-head">
            <p>Trusted by  <br class="d-lg-block d-none"> Top Companies</p>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="slider-images-area owl-carousel">
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand-img1.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand-img2.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand-img3.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand-img4.png') }}" alt="">
            </div>
            <div class="img1">
              <img src="{{ URL::asset('build/img/elements/brand-img5.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="works-inner-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ URL::asset('build/img/elements/elements14.png') }}" alt="" class="elements12 keyframe5">
                    <img src="{{ URL::asset('build/img/elements/elements15.png') }}" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1 ">
                            <div class="space100"></div>
                          <img src="{{ URL::asset('build/img/all-images/about-img6.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2 ">
                          <img src="{{ URL::asset('build/img/all-images/service-img5.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="works-header-area heading2 specing2">
                    <h5>Email Marketing</h5>
                    <h2>Email Strategy Development</h2>
                    <p>We develop customized email marketing strategies that align with your business goals and target audience. We segment your email list to ensure that your messages are relevant personalized for different audience groups.</p>
                    <div class="space16"></div>
                    <p>We create a comprehensive content calendar to schedule and plan your email campaigns effectively.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
        <div class="space100 d-lg-block d-none"></div>
        <div class="space30 d-lg-none d-block"></div>
        <div class="row align-items-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div class="works-header-area heading2">
                    <h5>Email Marketing</h5>
                    <h2>Email Design & Development</h2>
                    <p>We design and develop responsive email templates that look great on all devices, ensuring seamless experience.</p>
                    <div class="space16"></div>
                    <p>We create visually appealing emails that reflect your brand's identity and capture your audience's attention.</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ URL::asset('build/img/elements/elements14.png') }}" alt="" class="elements12 keyframe5">
                    <img src="{{ URL::asset('build/img/elements/elements15.png') }}" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1 ">
                            <div class="space100"></div>
                          <img src="{{ URL::asset('build/img/all-images/service-img6.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2 ">
                          <img src="{{ URL::asset('build/img/all-images/service-img7.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-1"></div>
        </div>

        <div class="space100 d-lg-block d-none"></div>
        <div class="space30 d-lg-none d-block"></div>
        <div class="row align-items-center">
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ URL::asset('build/img/elements/elements14.png') }}" alt="" class="elements12 keyframe5">
                    <img src="{{ URL::asset('build/img/elements/elements15.png') }}" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1 ">
                            <div class="space100"></div>
                          <img src="{{ URL::asset('build/img/all-images/service-img8.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2 ">
                          <img src="{{ URL::asset('build/img/all-images/service-img9.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="works-header-area heading2 specing2">
                    <h5>Email Marketing</h5>
                    <h2>Content Creation</h2>
                    <p>We craft compelling email copy that resonates with your audience and drives action. We include relevant images, videos, and other media to enhance your emails and keep them visually appealing.</p>
                    <div class="space16"></div>
                    <p>We create informative and engaging content that adds value to your subscribers and encourages them to stay connected.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->



<!--===== CTA AREA STARTS =======-->
<div class="cta-section-area others-cta">
  <img src="{{ URL::asset('build/img/bg/cta-bg1.png') }}" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="{{ URL::asset('build/img/bg/cta-bg2.png') }}" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">  
        <div class="cta-header-area text-center sp4 heading2">
          <h2>Competitor Analysis</h2>
          <p>Find the keywords your competitors rank for and analyze their <br class="d-lg-block d-none"> data insights to uncover their SEO strategy in one click</p>
          <div class="space32"></div>
          <div class="form-area">
            <form>
              <div class="input-area">
                <span><i class="fa-solid fa-link"></i></span>
                <input type="text" placeholder="https:// yoursite.com">
              </div>

              <div class="input-area">
                <span><i class="fa-regular fa-envelope"></i></span>
                <input type="text" placeholder="youremail@domain.com">
              </div>
              <div class="btn-area">
                <a href="#" class="header-btn1">Analyze Now <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </form>
          </div>
          <ul>
            <li>Try:</li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Laptop</a></li>
            <li><a href="#">iPhone</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->


      <!-- analysis-area-start -->
      <section class="analysis-area sp1">
        <div class="container">
           <div class="row">
              <div class="col-lg-8 m-auto">
                 <div class="analysis-inner-section text-center heading2">
                     <h5>Website Analysis</h5>
                    <h2>Conduct Website Audience Analysis <br class="d-lg-block d-none"> And Explore Its Geography</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-lg-10 m-auto">
                 <div class="services-seo">
                    <div class="services-seo-scroll">
                       <div class="services-seo-head">
                          <div class="row">
                             <div class="col-xl-4 col-lg-5 col-5">
                                <div class="services-seo-heading">
                                   <h4 class="services-seo-heading-title">
                                      <input id="remeber" type="checkbox">
                                      <label for="remeber">Blanking</label>
                                   </h4>
                                </div>
                             </div>
                             <div class="col-xl-8 col-lg-7 col-7">
                                <div class="services-seo-catagory">
                                   <div class="row">
                                      <div class="col-lg-3 col-3">
                                         <div class="services-seo-heading-item services-seo-catagory-one">
                                            <span>Score</span>
                                         </div>
                                      </div>
                                      <div class="col-lg-3 col-3">
                                         <div class="services-seo-heading-item services-seo-catagory-two">
                                            <span>Keyword</span>
                                         </div>
                                      </div>
                                      <div class="col-lg-3 col-3">
                                         <div class="services-seo-heading-item services-seo-catagory-three">
                                            <span>Domain</span>
                                         </div>
                                      </div>
                                      <div class="col-lg-3 col-3">
                                         <div class="services-seo-heading-item services-seo-catagory-four">
                                            <div class="rank">
                                               <span>Rank
                                                  <i class="fa-light fa-angle-up"></i>
                                                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <path
                                                        d="M6.33239 1.14917H5.14742C2.18498 1.14917 1 2.33415 1 5.29659V8.85152C1 11.814 2.18498 12.9989 5.14742 12.9989H8.70235C11.6648 12.9989 12.8498 11.814 12.8498 8.85152V7.66654"
                                                        stroke="white" stroke-opacity="0.7" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                     <path
                                                        d="M9.31928 1.75319L4.65047 6.42199C4.47273 6.59974 4.29498 6.94931 4.25943 7.20408L4.00466 8.98747C3.90986 9.63328 4.36608 10.0836 5.01189 9.9947L6.79528 9.73993C7.04412 9.70438 7.39369 9.52663 7.57736 9.34889L12.2462 4.68008C13.052 3.8743 13.4311 2.93816 12.2462 1.75319C11.0612 0.568212 10.1251 0.947404 9.31928 1.75319Z"
                                                        stroke="white" stroke-opacity="0.7" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                     <path
                                                        d="M8.64844 2.42236C9.0454 3.83841 10.1534 4.94636 11.5753 5.34925"
                                                        stroke="white" stroke-opacity="0.7" stroke-width="1.5"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                  </svg>
                                               </span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="services-seo-info">
                          <div class="services-seo-item">
                             <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5 col-5">
                                   <div class="services-seo-link d-flex">
                                      <div class="services-seo-link-check">
                                         <input id="seo-link-check" type="checkbox">
                                         <label for="seo-link-check">WOG PRIDE on the app store</label>
                                         <span><a href="#">https://www.daraz.com/gameing-laptops/</a></span>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-7">
                                   <div class="services-seo-catagory">
                                      <div class="row">
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-one">
                                               <span>86</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-two">
                                               <span>Laptop</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-three">
                                               <span><a href="#">daraz.com</a></span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div
                                               class="services-seo-catagory-item services-seo-catagory-four d-flex align-items-center">
                                               <div class="stable-rank"><span>4</span></div>
                                               <div class="incridable-rank">
                                                <i class="fa-solid fa-angle-up"></i>
                                                  <span>1</span>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="services-seo-item">
                             <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5 col-5">
                                   <div class="services-seo-link d-flex">
                                      <div class="services-seo-link-check">
                                         <input id="seo-link-check-2" type="checkbox">
                                         <label for="seo-link-check-2">SEO PRIDE on the app store</label>
                                         <span><a href="#">https://www.daraz.com/gameing-laptops/</a></span>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-7">
                                   <div class="services-seo-catagory">
                                      <div class="row">
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-one">
                                               <span>105</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-two">
                                               <span>Laptop</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-three">
                                               <span><a href="#">daraz.com</a></span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div
                                               class="services-seo-catagory-item services-seo-catagory-four d-flex align-items-center">
                                               <div class="stable-rank"><span>0</span></div>
                                               <div class="incridable-rank">
                                                
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="services-seo-item">
                             <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5 col-5">
                                   <div class="services-seo-link d-flex">
                                      <div class="services-seo-link-check">
                                         <input id="seo-link-check-3" type="checkbox">
                                         <label for="seo-link-check-3">PRIDE on the app store</label>
                                         <span><a href="#">https://www.daraz.com/gameing-laptops/</a></span>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-7">
                                   <div class="services-seo-catagory">
                                      <div class="row">
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-one">
                                               <span>42</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-two">
                                               <span>Laptop</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-three">
                                               <span><a href="#">daraz.com</a></span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div
                                               class="services-seo-catagory-item services-seo-catagory-four d-flex align-items-center">
                                               <div class="stable-rank"><span>3</span></div>
                                               <div class="incridable-rank incridable-rank-y">
                                                <i class="fa-solid fa-angle-up"></i>
                                                  <span>2</span>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="services-seo-item">
                             <div class="row align-items-center">
                                <div class="col-xl-4 col-lg-5 col-5">
                                   <div class="services-seo-link d-flex">
                                      <div class="services-seo-link-check">
                                         <input id="seo-link-check-4" type="checkbox">
                                         <label for="seo-link-check-4">WOG on the Online store</label>
                                         <span><a href="#">https://www.daraz.com/gameing-laptops/</a></span>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-7">
                                   <div class="services-seo-catagory">
                                      <div class="row">
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-one">
                                               <span>06</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-two">
                                               <span>Laptop</span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div class="services-seo-catagory-item services-seo-catagory-three">
                                               <span><a href="#">daraz.com</a></span>
                                            </div>
                                         </div>
                                         <div class="col-lg-3 col-3">
                                            <div
                                               class="services-seo-catagory-item services-seo-catagory-four d-flex align-items-center">
                                               <div class="stable-rank"><span>5</span></div>
                                               <div class="incridable-rank">
                                                <i class="fa-solid fa-angle-up"></i>
                                                  <span>1</span>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- analysis-area-end -->
<!--===== CHOOSE AREA STARTS =======-->
<div class="choose-section-area sp1">
    <img src="{{ URL::asset('build/img/bg/cta-bg1.png') }}" alt="" class="cta-bg1 aniamtion-key-2">
    <img src="{{ URL::asset('build/img/bg/cta-bg2.png') }}" alt="" class="cta-bg2 aniamtion-key-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="choose-header-area text-center heading2">
                    <h5>Why Choose Us</h5>
                    <h2>Why Choose SEOC For Email Marketing?</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="accordian-tabs-area">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              1. Customized Strategies
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We believe in transparency and provide regular updates and detailed reports on your campaign's progress.</div>
                            <div class="space10"></div>
                            <div class="accordion-body body2">Ready to boost your online presence and drive more organic traffic to your website.</div>
                          </div>
                        </div>
                        <div class="space24"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                              2.Transparent Reporting
                            </button>
                          </h2>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We believe in transparency and provide regular updates and detailed reports on your campaign's progress.</div>
                            <div class="space10"></div>
                            <div class="accordion-body body2">Ready to boost your online presence and drive more organic traffic to your website.</div>
                          </div>
                        </div>
                        <div class="space24"></div>
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                              3.Proven Results
                            </button>
                          </h2>
                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We believe in transparency and provide regular updates and detailed reports on your campaign's progress.</div>
                            <div class="space10"></div>
                            <div class="accordion-body body2">Ready to boost your online presence and drive more organic traffic to your website.</div>
                          </div>
                        </div>
                        <div class="space24"></div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                4.Expert Team
                              </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">We believe in transparency and provide regular updates and detailed reports on your campaign's progress.</div>
                                <div class="space10"></div>
                                <div class="accordion-body body2">Ready to boost your online presence and drive more organic traffic to your website.</div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ URL::asset('build/img/elements/elements14.png') }}" alt="" class="elements12 keyframe5">
                    <img src="{{ URL::asset('build/img/elements/elements15.png') }}" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1">
                            <div class="space100"></div>
                          <img src="{{ URL::asset('build/img/all-images/service-img5.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2">
                          <img src="{{ URL::asset('build/img/all-images/service-img9.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<!--===== CHOOSE AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team-inner-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="team2-header-area text-center heading2">
            <h5>Our Team</h5>
            <h2>Meet With Our Expert Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/team-img1.png') }}" alt="">
            </div>
            <ul>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
              <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
              <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
            </ul>
            <div class="content">
              <a href="team">John Doe</a>
              <p>CEO & Founder</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="team-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/team-img2.png') }}" alt="">
            </div>
            <ul>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
            </ul>
            <div class="content">
              <a href="team">Jane Smith</a>
              <p>Digital Marketing Officer</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="team-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/team-img3.png') }}" alt="">
            </div>
            <ul>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
            </ul>
            <div class="content">
              <a href="team">Sarah Thompson </a>
              <p>Web Designer</p>
            </div>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="team-boxarea m-0">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/team-img4.png') }}" alt="">
            </div>
            <ul>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
            </ul>
            <div class="content">
              <a href="team">David Garcia</a>
              <p>Content Writer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== TEAM AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog1-scetion-area sp1 bg2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="blog-hedaer-area heading2 text-center">
            <h5>Our Blog</h5>
            <h2>Our Latest Blog & News</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="blog-author-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/blog-img1.png') }}" alt="">
            </div>
            <div class="content-area">
              <div class="tags-area">
                <ul>
                 <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                </ul>
              </div>
              <a href="blog-single">10 Essential SEO Tips to Boost Your Website's Ranking</a>
              <p>Are you looking to improve your website's visibility and attract more organic traffic? </p>
              <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="space30 d-lg-none d-block"></div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="blog-author-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/blog-img2.png') }}" alt="">
            </div>
            <div class="content-area">
              <div class="tags-area">
                <ul>
                 <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                </ul>
              </div>
              <a href="blog-single">The Power of PPC Advertising: How to Maximize Your ROI</a>
              <p>Unlock the full potential of your digital marketing strategy with the power of PPC.</p>
              <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="space30 d-lg-none d-block"></div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="blog-author-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/blog-img3.png') }}" alt="">
            </div>
            <div class="content-area">
              <div class="tags-area">
                <ul>
                 <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                </ul>
              </div>
              <a href="blog-single">The Importance of Responsive Web Design in the Mobile Age</a>
              <p>Where mobile devices dominate internet usage, responsive web design more crucial.</p>
              <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--===== BLOG AREA ENDS =======-->

@endsection