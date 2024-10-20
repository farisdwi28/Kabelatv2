@extends('layouts.master')
@section('title', 'Our Blog')

@section('content')

<x-page-title title="Home" pagetitle="Our Blog" maintitle="Blog" />

<!--===== BLOG AREA STARTS =======-->
<div class="blog-top-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-top-boxarea">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="content-area heading2">
                                <div class="tags-area">
                                  <ul>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                                  </ul>
                             </div>
                                <h2>The Power of PPC Advertising: How to Maximize Your ROI</h2>
                                <div class="space8"></div>
                                <div class="btn-area">
                                    <a href="blog" class="header-btn1">Read Full Story <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5">
                            <div class="images image-anime">
                                <img src="{{ URL::asset('build/img/all-images/blog-img19.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog1-scetion-area sp1 bg2">
    <div class="container">
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
          <div class="space30"></div>
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
          <div class="space30"></div>
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
          <div class="space30"></div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="blog-author-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/blog-img15.png') }}" alt="">
            </div>
            <div class="content-area">
              <div class="tags-area">
                <ul>
                 <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                </ul>
              </div>
              <a href="blog-single">The Power of Content Marketing: How to Drive Engagement...</a>
              <p>Are you looking to improve your website's visibility and attract more organic traffic? </p>
              <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="space30"></div>
        </div>
  
        <div class="col-lg-4 col-md-6">
          <div class="blog-author-boxarea">
            <div class="img1">
              <img src="{{ URL::asset('build/img/all-images/blog-img16.png') }}" alt="">
            </div>
            <div class="content-area">
              <div class="tags-area">
                <ul>
                 <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                </ul>
              </div>
              <a href="blog-single">The Importance of SEO in Digital Marketing:A Comprehensive Guide</a>
              <p>Unlock the full potential of your digital marketing strategy with the power of PPC.</p>
              <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="space30"></div>
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
              <a href="blog-single">The Power of Social Media Marketing: How to Build Your...</a>
              <p>Where mobile devices dominate internet usage, responsive web design more crucial.</p>
              <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="space30"></div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="blog-author-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/blog-img15.png') }}" alt="">
              </div>
              <div class="content-area">
                <div class="tags-area">
                  <ul>
                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  </ul>
                </div>
                <a href="blog-single">Social Media Marketing Strategies to Drive Engagement Conversions</a>
                <p>Are you looking to improve your website's visibility and attract more organic traffic? </p>
                <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="space30"></div>
          </div>
    
          <div class="col-lg-4 col-md-6">
            <div class="blog-author-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/blog-img18.png') }}" alt="">
              </div>
              <div class="content-area">
                <div class="tags-area">
                  <ul>
                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  </ul>
                </div>
                <a href="blog-single">Content Marketing 101: How to Create Compelling Converts..</a>
                <p>Unlock the full potential of your digital marketing strategy with the power of PPC.</p>
                <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="space30"></div>
          </div>
    
          <div class="col-lg-4 col-md-6">
            <div class="blog-author-boxarea">
              <div class="img1">
                <img src="{{ URL::asset('build/img/all-images/blog-img17.png') }}" alt="">
              </div>
              <div class="content-area">
                <div class="tags-area">
                  <ul>
                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                    <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                  </ul>
                </div>
                <a href="blog-single">The Importance of Responsive Web Design in the Mobile Age</a>
                <p>Where mobile devices dominate internet usage, responsive web design more crucial.</p>
                <a href="blog-single" class="readmore">Read More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
            <div class="space30"></div>
          </div>

          <div class="col-lg-12">
            <div class="pagination-area">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                  </li>
                  <li class="page-item"><a class="page-link active" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
      </div>
    </div>
  </div>
<!--===== BLOG AREA ENDS =======-->


@endsection