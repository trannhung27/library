@extends('reader.head')
@section('content')
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Library</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Library -->
      <div class="Library">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="Library-box">{{asset('')}}
                        <figure><img src="{{asset('images/Library-.jpg')}}" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="read-more">
                     <a href="#">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Library -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="{{asset('icon/facebook.png')}}"></a></li>
                        <li> <a href="#"><img src="{{asset('icon/Twitter.png')}}"></a></li>
                        <li> <a href="#"><img src="{{asset('icon/linkedin.png')}}"></a></li>
                        <li> <a href="#"><img src="{{asset('icon/instagram.png')}}"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
            </div>
         </div>
      </footer>
@endsection()