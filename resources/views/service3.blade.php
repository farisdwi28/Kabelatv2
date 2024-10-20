@extends('layouts.master')
@section('title', 'Services')

@section('content')

<x-page-title title="Home" pagetitle="Services" maintitle="Pay Per Click Service" />

<!--===== HISTORY AREA STARTS =======-->
<div class="history-inner-section-area  history3 sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="history-header-area text-center heading2">
                    <img src="{{ URL::asset('build/img/elements/star7.png') }}" alt="" class="star2 keyframe5">
                    <img src="{{ URL::asset('build/img/elements/star7.png') }}" alt="" class="star3 keyframe5">
                    <h5>Our History</h5>
                    <h2>Our Journey: Charting the <br class="d-lg-block d-none"> Evolution of SEOC</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ URL::asset('build/img/elements/elements14.png') }}" alt="" class="elements12 keyframe5">
                    <img src="{{ URL::asset('build/img/elements/elements15.png') }}" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img">
                            <div class="space100"></div>
                          <img src="{{ URL::asset('build/img/all-images/history-img1.png') }}" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2">
                          <img src="{{ URL::asset('build/img/all-images/history-img2.png') }}" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="col-lg-6">
                <div class="history-content-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2015</h5>
                                <a href="case-single">Inception and Founding</a>
                                <p>SEOC was founded with a vision to revolutionize the digital marketing industry and provide innovation.</p>
                                <a href="case-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2016</h5>
                                <a href="case-single">Expansion and Growth</a>
                                <p>The team expanded to include additional members with diverse skill sets and expertise allowing us.</p>
                                <a href="case-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2017</h5>
                                <a href="case-single">Recognition and Awards</a>
                                <p>We were honored to recognized as a leader in the digital marketing space and received accolades customer.</p>
                                <a href="case-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2018</h5>
                                <a href="case-single">Launch of New Services</a>
                                <p>Building on our success, SEOC expanded our service offerings to better meet the evolving needs. </p>
                                <a href="case-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2019</h5>
                                <a href="case-single">Strategic Partnerships </a>
                                <p>SEOC formed strategic partnerships and collaborations with industry leaders and technology providers. </p>
                                <a href="case-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="history-box-content">
                                <h5>2020</h5>
                                <a href="case-single">Continued Growth  Success</a>
                                <p>2020 continued to experience steady growth and success, despite ongoing challenges in external environment.</p>
                                <a href="case-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HISTORY AREA ENDS =======-->

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

<!--===== CASE AREA STARTS =======-->
<div class="case1-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="case-header-area heading2 text-center">
            <h5>Case Study</h5>
            <h2 class="text-anime-style-3">SEOC Case Study</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
            <div class="cs_case_study_1_list">
              <div class="cs_case_study cs_style_1 cs_hover_active active">
                <a href="case-single" class="cs_case_study_thumb cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img1.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">Website  Design & Development</a>
                </div>
                <div class="content-area">
                  <a href="case-single">Website  Design & Development </a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
              <div class="cs_case_study cs_style_1 cs_hover_active">
                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img2.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">SEO</a>
                </div>
                <div class="content-area">
                  <a href="case-single">SEO</a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
              <div class="cs_case_study cs_style_1 cs_hover_active">
                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img3.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">PPC Advertising</a>
                </div>
                <div class="content-area">
                  <a href="case-single">PPC Advertising</a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
              <div class="cs_case_study cs_style_1 cs_hover_active">
                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img4.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">Social Media Marketing</a>
                </div>
                <div class="content-area">
                  <a href="case-single">Social Media Marketing</a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
              <div class="cs_case_study cs_style_1 cs_hover_active">
                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb5 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img5.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">Content Marketing</a>
                </div>
                <div class="content-area">
                  <a href="case-single">Content Marketing</a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
              <div class="cs_case_study cs_style_1 cs_hover_active">
                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb6 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img6.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">Email Marketing</a>
                </div>
                <div class="content-area">
                  <a href="case-single">Email Marketing</a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
              <div class="cs_case_study cs_style_1 cs_hover_active " style="margin: 0 !important;">
                <a href="case-single" class="cs_case_study_thumb cs_case_study_thumb7 cs_bg_filed" data-src="{{ URL::asset('build/img/all-images/case-img7.png') }}"></a>
                <div class="content-area1">
                  <a href="case-single">Analytics & Reporting</a>
                </div>
                <div class="content-area">
                  <a href="case-single">Analytics & Reporting</a>
                  <p>We understand the critical role that a well-designed and user-friendly website plays in shaping your online presence driving.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CASE AREA ENDS =======-->

  <!--===== PRICING AREA STARTS =======-->
<div class="pricing-inner-section-area sp1 bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="pricing-header heading2 text-center">
                    <h5>Pricing</h5>
                    <h2>SEOC Pricing Plan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-boxarea bg-white">
                    <h4>Basic Plan - Starter</h4>
                    <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                    <h1>$999 <span>/monthly</span></h1>
                    
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
                        </ul>
                    </div>
                    <div class="space24"></div>
                    <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-boxarea active">
                    <h4>Standard Plan - Growth</h4>
                    <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                    <h1>$1999 <span>/monthly</span></h1>
                    
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
                        </ul>
                    </div>
                    <div class="space24"></div>
                    <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="pricing-boxarea bg-white">
                    <h4>Premium Plan - Pro</h4>
                    <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing plans tailored</p>
                    <h1>$2999 <span>/monthly</span></h1>
                    
                    <div class="space32"></div>
                    <div class="list-area">
                        <h5>Service Include:</h5>
                        <ul>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="" class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Keyword Research</li>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">One Page Optimization</li>
                            <li><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""  class="check2"><img src="{{ URL::asset('build/img/icons/check5.svg') }}" alt="" class="check3">Basic Analytics Reporting</li>
                        </ul>
                    </div>
                    <div class="space24"></div>
                    <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish their online presence.</p>
                </div>
            </div>

            <div class="col-lg-12 m-auto">
                <div class="space20"></div>
                <div class="btn-area1 text-center">
                    <a href="pricing" class="header-btn1">View Compare Plan <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== PRICING AREA ENDS =======-->


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
            <div class="col-lg-6 m-auto">
                <div class="choose-header-area text-center heading2">
                    <h5>Why Choose Us</h5>
                    <h2>Why Choose SEOC For PPC?</h2>
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