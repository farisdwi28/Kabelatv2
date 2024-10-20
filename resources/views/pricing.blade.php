@extends('layouts.master')
@section('title', 'Pricing Plan')

@section('content')

<x-page-title title="Home" pagetitle="Pricing Plan" maintitle="Pricing Plan" />

<!--===== PRICING AREA STARTS =======-->
<div class="pricing-inner-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-boxarea">
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
                <div class="pricing-boxarea">
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
        </div>
    </div>
</div>

<div class="compare-table-area sp10">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="heading2 text-center">
          <h5>Compare Plan</h5>
          <h2>Compare Plan Suitable for Your Business</h2>
        </div>
        <div class="space60 d-lg-block d-none"></div>
        <div class="space30 d-lg-none d-block"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="comparison">
          <table>
            <thead>
              <tr class="table-header">
                <th class="price-info features">
                  <div class="price-now text-start"><span class="text-start">Key Features</span>
                  </div>
                </th>
                <th class="price-info">
                  <div class="price-now"><span>Basic Plan</span>
                  </div>
                </th>
                <th class="price-info standard">
                  <div class="price-now"><span>Standard Plan</span>
                  </div>
                </th>
                <th class="price-info">
                  <div class="price-now"><span>Premium Plan</span>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td colspan="3">Key Words Optimized</td>
              </tr>
              <tr class="compare-row">
                <td>Key Words Optimized</td>
                <td>20 Keywords</td>
                <td class="standard">40 Keywords</td>
                <td>80 Keywords</td>
              </tr>
              <tr class="another-list">
                <td> </td>
                <td colspan="3">Top 10 Rankings Guarantee</td>
              </tr>
              <tr class="another-list">
                <td class="starndard1">Top 10 Rankings Guarantee</td>
                <td>5</td>
                <td class="standard">10</td>
                <td>20</td>
              </tr>
              <tr>
                <td> </td>
                <td colspan="3">Weekly Reporting</td>
              </tr>
              <tr class="compare-row">
                <td>Weekly Reporting</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>
              <tr class="another-list">
                <td> </td>
                <td colspan="4">Support</td>
              </tr>
              <tr class="another-list">
                <td>Support</td>
                <td> Email, Chat & Phone </td>
                <td class="standard"> Email, Chat & Phone</td>
                <td> Email, Chat & Phone</td>
              </tr>
              <tr>
                <td></td>
                <td colspan="3">Customized Presentation</td>
              </tr>
              <tr class="compare-row">
                <td>Customized Presentation</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>
              <tr class="another-list">
                <td></td>
                <td colspan="4" class="list-head">On-Page Optimization</td>
              </tr>
              <tr class="another-list">
                <td class="list-head">On-Page Optimization</td>
                <td><span></span></td>
                <td class="standard"><span></span></td>
                <td><span></span></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="3">Website Analysis</td>
              </tr>
              <tr class="compare-row">
                <td>Website Analysis</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>
              <tr class="another-list">
                <td> </td>
                <td colspan="3">Competitor Analysis</td>
              </tr>
              <tr class="another-list">
                <td>Competitor Analysis</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>
              <tr>
                <td></td>
                <td colspan="3">Keyword Research</td>
              </tr>
              <tr class="compare-row">
                <td>Keyword Research</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>
              <tr class="another-list">
                <td></td>
                <td colspan="3">Structure Optimization</td>
              </tr>
              <tr class="another-list">
                <td>Structure Optimization</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>

              <tr>
                <td></td>
                <td colspan="3">Content Optimization</td>
              </tr>
              <tr class="compare-row">
                <td>Content Optimization</td>
                <td>20 Pages</td>
                <td class="standard">40 Pages</td>
                <td>80 Pages</td>
              </tr>

              <tr class="another-list">
                <td></td>
                <td colspan="3">Google Analytics Installation</td>
              </tr>
              <tr class="another-list">
                <td>Google Analytics Installation</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>

              <tr>
                <td></td>
                <td colspan="3">Google Webmaster Tools Account</td>
              </tr>
              <tr class="compare-row">
                <td>Google Webmaster Tools Account</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>

              <tr class="another-list">
                <td></td>
                <td colspan="3">Off-Page Optimization</td>
              </tr>
              <tr class="another-list">
                <td  class="list-head">Off-Page Optimization</td>
                <td></td>
                <td class="standard"></td>
                <td></td>
              </tr>

              <tr>
                <td></td>
                <td colspan="3">Web 2.0 Link Creation</td>
              </tr>
              <tr class="compare-row">
                <td>Web 2.0 Link Creation</td>
                <td>15</td>
                <td class="standard">25</td>
                <td>40</td>
              </tr>

              <tr class="another-list">
                <td></td>
                <td colspan="3">Article Writing</td>
              </tr>
              <tr class="another-list">
                <td>Article Writing</td>
                <td>4</td>
                <td class="standard">6</td>
                <td>10</td>
              </tr>

              <tr>
                <td></td>
                <td colspan="3">YouTube Video Creation</td>
              </tr>
              <tr class="compare-row">
                <td>YouTube Video Creation</td>
                <td>2</td>
                <td class="standard">5</td>
                <td>10</td>
              </tr>

              <tr class="another-list">
                <td></td>
                <td colspan="3">YouTube Video Promotion</td>
              </tr>
              <tr class="another-list">
                <td>YouTube Video Promotion</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>

              <tr>
                <td></td>
                <td colspan="3">Links From Social Media</td>
              </tr>
              <tr class="compare-row">
                <td>Links From Social Media</td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td class="standard"><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
                <td><img src="{{ URL::asset('build/img/icons/check4.svg') }}" alt=""></td>
              </tr>

              <tr class="another-list">
                <td></td>
                <td colspan="3">Free Blog Creation</td>
              </tr>
              <tr class="another-list">
                <td>Free Blog Creation</td>
                <td>5</td>
                <td class="standard">10</td>
                <td>20</td>
              </tr>

              <tr>
                <td></td>
                <td colspan="3">Profile Page Creation</td>
              </tr>
              <tr class="compare-row">
                <td>Profile Page Creation</td>
                <td>10</td>
                <td class="standard">20</td>
                <td>30</td>
              </tr>
              <tr class="compare-row">
                <td> </td>
              </tr>
              <tr class="compare-row compare-footer">
                <td class="none-border"></td>
                <td><a href="pricing" class="header-btn1">$999/ Month<span><i class="fa-solid fa-arrow-right"></i></span></a></td>
                <td class="standard"><a href="pricing" class="header-btn1">$1999/ Month<span><i class="fa-solid fa-arrow-right"></i></span></a></td>
                <td><a href="pricing" class="header-btn1">$2999/ Month<span><i class="fa-solid fa-arrow-right"></i></span></a></td>
              </tr>
            </tbody>
          </table>
        
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== PRICING AREA ENDS =======-->

@endsection