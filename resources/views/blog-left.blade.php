@extends('layouts.master')
@section('title', 'Our Blog')

@section('content')

<x-page-title title="Home" pagetitle="Our Blog" maintitle="Blog Details Left" />

<!--===== BLOG AREA STARTS =======-->
<div class="blog-auhtor-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-sidebar-area">
                    <div class="search-area">
                        <h3>Search</h3>
                        <form>
                            <input type="text" placeholder="Search...">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="space32"></div>
                    <div class="categories-area">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">PPC Advertising</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Social Media Marketing</a></li>
                            <li><a href="#">SEO Analysis</a></li>
                            <li><a href="#">Content Marketing</a></li>
                        </ul>
                    </div>
                    <div class="space32"></div>
                    <div class="posts-area">
                        <h3>Recent Post</h3>
                        <div class="post-auhtor-area">
                            <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/post-img1.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="date"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a>
                                <a href="#" class="head">The Importance of Responsive Web Design in the Mobile Age</a>
                            </div>
                        </div>

                        <div class="post-auhtor-area box2">
                            <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/post-img2.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="date"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a>
                                <a href="#" class="head">The Power of Content Marketing How to Drive... </a>
                            </div>
                        </div>

                        <div class="post-auhtor-area">
                            <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/post-img3.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="date"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a>
                                <a href="#" class="head">The Power of Social Media Marketing: How to Build Your...</a>
                            </div>
                        </div>

                        <div class="post-auhtor-area">
                            <div class="img1">
                                <img src="{{ URL::asset('build/img/all-images/post-img4.png') }}" alt="">
                            </div>
                            <div class="content">
                                <a href="#" class="date"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a>
                                <a href="#" class="head">Social Media Marketing Strategies  Drive Engagement..</a>
                            </div>
                        </div>
                    </div>
                    <div class="space32"></div>
                    <div class="tags-area">
                        <h3>Popular Tags</h3>
                        <ul>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#" class="m-0">PPC</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Keyword Research</a></li>
                            <li><a href="#" class="m-0">Content</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#" class="m-0">Social Media</a></li>
                        </ul>
                    </div>
                    <div class="space32"></div>
                    <div class="others-area">
                        <h3>If You Need Any Help Contact With Us</h3>
                        <div class="space16"></div>
                        <div class="btn-area">
                            <a href="tel:123-456-7890" class="header-btn1">123-456-7890 <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="blog-auhtor-sidebar-area heading2">
                    <div class="tags-area">
                        <ul>
                          <li><a href="#"><img src="{{ URL::asset('build/img/icons/contact1.svg') }}" alt="">Ben Stokes</a></li>
                          <li><a href="#"><img src="{{ URL::asset('build/img/icons/calender1.svg') }}" alt="">16 August 2023</a></li>
                        </ul>
                      </div>
                      <h2>The Power Of PPC Advertising: <br class="d-lg-block d-none"> How To Maximize Your ROI</h2>
                      <div class="space34"></div>
                      <div class="img1">
                        <img src="{{ URL::asset('build/img/all-images/blog-img23.png') }}" alt="">
                      </div>
                      <div class="space24"></div>
                      <p>Pay-per-click (PPC) advertising is a powerful tool for driving targeted traffic to your website, generating leads, and increasing sales. When implemented effectively, PPC campaigns can deliver a high return on investment (ROI) and help you achieve your business goals.This guide, we'll explore the key components of successful PPC advertising and share strategies for maximizing your ROI.</p>
                      <div class="space50"></div>
                      <h3>Understanding PPC Advertising</h3>
                      <div class="space24"></div>
                      <p>PPC advertising is a digital marketing strategy in which advertisers pay a fee each time their ad is clicked. These ads are displayed on search engine results pages (such as Google or Bing) or on websites and social media platforms (such as Facebook or LinkedIn). The goal of PPC advertising is to attract qualified traffic to your website and convert them into customers or leads.</p>
                      <div class="space50"></div>
                      <h3>Key Components of Successful PPC Campaign</h3>
                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Keyword Research:</span> Conduct thorough keyword research to identify relevant search terms and phrases that your target audience is using. Choose keywords with high search volume, low competition, and strong buyer intent to maximize your chances of success.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Ad Copywriting:</span> Write compelling ad copy that grabs attention, highlights your unique selling proposition (USP), and encourages users to click. Use relevant keywords in your ad copy to improve ad relevance and quality score.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Ad Targeting:</span> Use advanced targeting options to reach your ideal audience. Target users based on demographics, interests, location, device, and more to ensure that your ads are shown to the right people at the right time.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Ad Extension:</span> Take advantage of ad extensions to provide additional information and increase ad visibility. Use extensions such as sitelinks, callouts, and structured snippets to enhance your ads and drive more clicks.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Landing Page Optimization:</span> Create dedicated landing pages that are tailored to your PPC campaigns. Optimize your landing pages for relevance, usability, and conversion to ensure a seamless user experience and maximize your ROI.</p>
                        </div>
                      </div>
                      <div class="space50"></div>
                      <div class="img1">
                        <img src="{{ URL::asset('build/img/all-images/blog-img20.png') }}" alt="">
                      </div>
                      <div class="space50"></div>
                      <h3>Strategies for Maximizing PPC ROI</h3>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Set Clear Goals:</span> Define clear objectives for your PPC campaigns, whether it's increasing website traffic, generating leads, or driving sales. Align your campaign strategy with your business goals to ensure that you're focusing on the metrics that matter most.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Monitor Performance Metrics:</span> Track key performance metrics such as click-through rate (CTR), conversion rate, cost per acquisition (CPA), and ROI. Use analytics tools like Google Analytics and Google Ads to monitor campaign performance and identify areas for improvement</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Optimize Ad Copy & keywords:</span> Continuously test and optimize your ad copy and keywords to improve ad relevance and click-through rates. Experiment with different messaging, offers, and calls to action to see what resonates best with your audience.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Refine Targeting Options:</span> Refine your targeting options based on performance data and audience insights. Adjust your targeting parameters to focus on high-value segments and exclude irrelevant audiences to improve campaign efficiency.</p>
                        </div>
                      </div>

                      <div class="right-area">
                        <div class="check1">
                            <img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt="">
                        </div>
                        <div class="content">
                            <p><span>Implement Bid Strategies:</span> Create dedicated landing pages that are tailored to your PPC campaigns. Optimize your landing pages for relevance, usability, and conversion to ensure a seamless user experience and maximize your ROI.</p>
                        </div>
                      </div>
                      <div class="space50"></div>
                      
                      <div class="pera-box">
                        <p>"PPC advertising is like a well-tuned engine: with the right fuel, maintenance, and strategy, it can propel your business forward at unprecedented speeds."</p>
                        <div class="space16"></div>
                        <a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a>
                      </div>
                      <div class="space50"></div>
                      <h3>Hire a Team of Expert Marketers to Handle the Research and Video Creation Process For You</h3>
                      <div class="space24"></div>
                      <p class="pera1">Just because something worked for one type of video doesn’t mean it will always work. Your video marketing strategy needs to be flexible and adjust to people’s viewing behaviors for maximum impact.</p>
                      <div class="social-tags">
                        <div class="tags">
                          <h4>Tags:</h4>
                          <ul>
                            <li><a href="#">PPC Advertising</a></li>
                            <li><a href="#">SEO</a></li>
                            <li><a href="#" class="m-0">Digital Marketing</a></li>
                          </ul>
                        </div>
                        <div class="social">
                          <h4>Social:</h4>
                          <ul>
                            <li><a href="#"><img src="{{ URL::asset('build/img/icons/facebook.svg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ URL::asset('build/img/icons/instagram.svg') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ URL::asset('build/img/icons/linkedin.svg') }}" alt=""></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="space50"></div>
                      <h3>Blog Comments (2)</h3>
                      <div class="space32"></div>
                      <div class="comments-boxarea">
                        <div class="comments-boxes">
                          <div class="comments-auhtor-box">
                            <div class="img3">
                              <img src="{{ URL::asset('build/img/all-images/comments-img1.png') }}" alt="">
                            </div>
                            <div class="content">
                              <a href="#" class="name">Mr. Ana Ritchie</a>
                              <a href="#" class="date">12 May 2024</a>
                            </div>
                          </div>
                          <a href="#" class="reply">Reply</a>
                        </div>
                        <div class="space16"></div>
                        <p>"This is a fantastic guide on PPC advertising! I've been struggling to good ROI with my campaigns, but your tips on keyword research ad copywriting have given me some great ideas to try. Thanks for sharing such valuable information!"</p>
                      </div>
                      <div class="space30"></div>
                      <div class="comments-boxarea box2">
                        <div class="comments-boxes">
                          <div class="comments-auhtor-box">
                            <div class="img3">
                              <img src="{{ URL::asset('build/img/all-images/comments-img2.png') }}" alt="">
                            </div>
                            <div class="content">
                              <a href="#" class="name">Matthew Kuhnemann</a>
                              <a href="#" class="date">12 May 2024</a>
                            </div>
                          </div>
                          <a href="#" class="reply">Reply</a>
                        </div>
                        <div class="space16"></div>
                        <p>"Great article! I especially appreciate the section on ad extensions. I've been neglecting them in my campaigns, but now I see how they can really enhance the visibility and effectiveness of my ads. Time to make some changes!" </p>
                      </div>
                      <div class="space50"></div>

                      <div class="contact-form-area">
                        <h4>Leave a Reply</h4>
                        <div class="space16"></div>
                        <p>Provide clear contact information, including phone number, email, and address.</p>
                        <div class="space12"></div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="input-area">
                              <input type="text" placeholder="First Name">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-area">
                              <input type="text" placeholder="Last Name">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-area">
                              <input type="email" placeholder="Email">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="input-area">
                              <input type="number" placeholder="Phone">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="input-area">
                              <input type="text" placeholder="Subject">
                            </div>
                          </div>

                          <div class="col-lg-12">
                            <div class="input-area">
                              <textarea placeholder="Message"></textarea>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="space24"></div>
                            <div class="input-area">
                              <button type="submit" class="header-btn1">Submit <span><i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== BLOG AREA ENDS =======-->

<!--===== BLOG AREA STARTS =======-->
<div class="blog1-scetion-area sp2 bg2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 m-auto">
          <div class="blog-hedaer-area heading2 text-center">
            <h2>More Blogs & News</h2>
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
      </div>
    </div>
</div>
  <!--===== BLOG AREA ENDS =======-->

  @endsection