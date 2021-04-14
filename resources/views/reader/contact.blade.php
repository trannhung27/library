@extends('reader.head')
@section('content')
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <form>
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Name" name="name" type="text">
                        </div>
                         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Email" name="email" type="Email">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Phone Number" name="phone_nu" type="text">
                        </div>
                       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <input class="form-control" placeholder="Subject" name="subject" type="text">
                        </div>
                        <div class="col-sm-12">
                           <textarea class="textarea" name="message" placeholder="Message">Message</textarea>
                        </div>
                     </div>
                  </form>
               </div>
               <button class="send-btn">Send</button>
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