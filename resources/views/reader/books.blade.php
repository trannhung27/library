@extends('reader.head')
@section('content')
      <!-- end header -->
      <div class="about-bg" style="margin-bottom:30px;">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Our Books</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Books -->
      <!--Books -->
      <div id="books" class="Books">
         <div class="container">
            <div class="row box">
                @foreach($book as $row)
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                  <div class="book-box">
                     <a href="book.html"><figure><img src="{{asset('images/'.$row->image)}}" alt="img"/></figure></a>
                     <div class="book-header">{{$row->name}}</div>
                     <a href="book.html"><button>Xem thêm</button></a>
                  </div>
               </div>
               @endforeach()
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
      </div>
      <!-- end Books --> 
      <!-- end Books -->


      
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