@extends('layouts.master')
@section('title', 'Team')

@section('content')

<x-page-title title="Home" pagetitle="Team" maintitle="Meet The Team Member" />


<!--===== TEAM AREA STARTS =======-->
<div class="team-inner-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="team-header heading2">
                    <h5>What We Believe In</h5>
                    <h2>We Believe In Marketing The World A Better Place </h2>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">
                <div class="pera heading2">
                    <p>We achieve this by scaling impactful businesses. Our focus is on promoting our clients’ brands and effectively disseminating their message worldwide. We refuse to settle for the status quo, constantly striving to expand our own business with the same level of honesty and integrity we employ to enhance our clients’ enterprises.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="space50"></div>
                <div class="step-by-step">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="pera">
                                <p>Transparency</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="pera">
                                <p>Accountability</p>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="pera">
                                <p>Lifelong Learning</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="pera">
                                <p>Ambition</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== TEAM AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team-inner-section-area sp2 bg2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="team2-header-area heading2">
            <h2>Executive Team</h2>
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

<!--===== TESTIMONIAL AREA STARTS =======-->
<div class="testimonial1-section-area sp1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="testimonial-sliders">
               <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="testimonial-content-slider slider-nav1">
                    <div class="testimonial-slider-boxarea">
                        <img src="{{ URL::asset('build/img/icons/quito3.svg') }}" alt="">
                        <div class="space24"></div>
                         <div class="testimonial5-all-content">
                            <p>"I can't say enough about the incredible results we've achieved with SEOC. Their SEO expertise has catapulted our website to the top of search engine rankings, resulting in a significant increase in organic traffic and leads. I highly recommend SEOC to any business looking to boost their visibility and drive growth online."</p>
                         </div>
                         <div class="space32"></div>
                         <div class="content">
                            <a href="team">Anderson Belly</a>
                            <p>Head Of Google Ads</p>
                          </div>
                        </div>

                        <div class="testimonial-slider-boxarea">
                            <img src="{{ URL::asset('build/img/icons/quito3.svg') }}" alt="">
                            <div class="space24"></div>
                             <div class="testimonial5-all-content">
                                <p>"I can't say enough about the incredible results we've achieved with SEOC. Their SEO expertise has catapulted our website to the top of search engine rankings, resulting in a significant increase in organic traffic and leads. I highly recommend SEOC to any business looking to boost their visibility and drive growth online."</p>
                             </div>
                             <div class="space32"></div>
                             <div class="content">
                                <a href="team">Anderson Belly</a>
                                <p>Head Of Google Ads</p>
                              </div>
                            </div>

                            <div class="testimonial-slider-boxarea">
                                <img src="{{ URL::asset('build/img/icons/quito3.svg') }}" alt="">
                                <div class="space24"></div>
                                 <div class="testimonial5-all-content">
                                    <p>"I can't say enough about the incredible results we've achieved with SEOC. Their SEO expertise has catapulted our website to the top of search engine rankings, resulting in a significant increase in organic traffic and leads. I highly recommend SEOC to any business looking to boost their visibility and drive growth online."</p>
                                 </div>
                                 <div class="space32"></div>
                                 <div class="content">
                                    <a href="team">Anderson Belly</a>
                                    <p>Head Of Google Ads</p>
                                  </div>
                                </div>
                                <div class="testimonial-slider-boxarea">
                                    <img src="{{ URL::asset('build/img/icons/quito3.svg') }}" alt="">
                                    <div class="space24"></div>
                                     <div class="testimonial5-all-content">
                                        <p>"I can't say enough about the incredible results we've achieved with SEOC. Their SEO expertise has catapulted our website to the top of search engine rankings, resulting in a significant increase in organic traffic and leads. I highly recommend SEOC to any business looking to boost their visibility and drive growth online."</p>
                                     </div>
                                     <div class="space32"></div>
                                     <div class="content">
                                        <a href="team">Anderson Belly</a>
                                        <p>Head Of Google Ads</p>
                                      </div>
                                    </div>
                            </div>
                  <div class="testimonial-arrows">
                    <div class="testimonial-prev-arrow">
                      <button><i class="fa-solid fa-arrow-left"></i></button>
                    </div>
                    <div class="testimonial-next-arrow">
                      <button><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                  </div>
                </div>
  
                <div class="col-lg-6">
                  <div class="teimonial-slider-nav-area foter-carousel">
                    <div class="testimonial-slider-img">
                      <img src="{{ URL::asset('build/img/all-images/testimonial-img10.png') }}" alt="">
                    </div>
                    <div class="testimonial-slider-img">
                        <img src="{{ URL::asset('build/img/all-images/testimonial-img10.png') }}" alt="">
                    </div>
                    <div class="testimonial-slider-img">
                        <img src="{{ URL::asset('build/img/all-images/testimonial-img10.png') }}" alt="">
                    </div>
                    <div class="testimonial-slider-img">
                        <img src="{{ URL::asset('build/img/all-images/testimonial-img10.png') }}" alt="">
                    </div>
                    <div class="testimonial-slider-img">
                        <img src="{{ URL::asset('build/img/all-images/testimonial-img10.png') }}" alt="">
                    </div>
                    <div class="testimonial-slider-img">
                        <img src="{{ URL::asset('build/img/all-images/testimonial-img10.png') }}" alt="">
                    </div>
                  </div>
                </div>
               </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<!--===== TESTIMONIAL AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
<div class="team-inner-section-area sp2 bg2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="team2-header-area heading2">
            <h2>Leadership</h2>
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
          <div class="space30"></div>
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
          <div class="space30"></div>
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
          <div class="space30"></div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="team-boxarea">
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
          <div class="space30"></div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="team-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/team-img9.png') }}" alt="">
              </div>
              <ul>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                  <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
              </ul>
              <div class="content">
                <a href="team">Florence Walker</a>
                <p>Future Creative Director</p>
              </div>
            </div>
            <div class="space30"></div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="team-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/team-img10.png') }}" alt="">
              </div>
              <ul>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                  <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
              </ul>
              <div class="content">
                <a href="team">Sally Mann</a>
                <p>Designer</p>
              </div>
            </div>
            <div class="space30"></div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="team-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/team-img11.png') }}" alt="">
              </div>
              <ul>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                  <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
              </ul>
              <div class="content">
                <a href="team">Miss Darrin Larkin</a>
                <p>Orchestrator</p>
              </div>
            </div>
            <div class="space30"></div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="team-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/team-img12.png') }}" alt="">
              </div>
              <ul>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                  <li><a href="#" class="m-0"><img src="{{ URL::asset('build/img/icons/youtube.svg') }}" alt=""></a></li>
              </ul>
              <div class="content">
                <a href="team">David Garcia</a>
                <p>Coordinator</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
<!--===== TEAM AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="works-inner-section-area sp1">
    <div class="container">
        <div class="row align-items-center">
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
            <div class="col-lg-5">
                <div class="works-header-area heading2 specing2">
                    <h5>Our Mission</h5>
                    <h2>Our Mission</h2>
                    <p>We strive to be more than just a service provider; we aim to be trusted SEOC By staying true to our mission and values, we are committed to helping businesses of all sizes achieve their goals, realize their potential shape.</p>
                    <div class="space32"></div>
                    <div class="btn-area1">
                        <a href="case" class="header-btn1">Our Case Study <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<!--===== WORK AREA ENDS =======-->
@endsection