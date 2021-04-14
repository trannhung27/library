@extends('reader.head')
@section('content')
    <!-- end header -->
    <div class="chapters col-lg-8">
        @foreach($chapter as $row)
        <div class="chapter-name">
            <input type="hidden" value="{{$row->idbook}}" name="" id="idbook">
            <h2 style="padding-top: 10px; padding-left: 10px; color: white; ">Harry Potter và hòn đá phù thủy</h2>
            <h3 style="text-align: center; color: white;">{{$row->name}}</h3>
        </div>
        <div class="switch-chapters">
            <div class="next-chapter">
                <button type="submit"><img src="{{asset('icon/btn-prev-page.svg')}}" alt=""></button>
            </div>
            <div class="select-chapter">
                <select name="" id="listchapter">
                  <option value="">Chọn tập:</option>
                  <option value="">Chương 1: Đứa bé vẫn sống</option>
                  <option value="">Chương 1: Đứa bé vẫn sống</option>
                  <option value="">Chương 1: Đứa bé vẫn sống</option>
               </select>
            </div>
            <div class="prev-chapter">
                <button type="submit"><img src="{{asset('icon/btn-next-page.svg')}}" alt=""></button>
            </div>
        </div>
        <div class="chapter-content">
            {{$row->content}}
        </div>
        <div class="switch-chapters">
            <div class="next-chapter">
                <button id="next" type="submit"><img src="{{asset('icon/btn-prev-page.svg')}}" alt=""></button>
            </div>
            <div class="select-chapter">
                <select name="" id="listchapter">
                    <option style="text-align: center;" value="">Chon tap</option>
                    <option id="id_chapter" value="">Chương 1: Đứa bé vẫn sống</option>
                    <option value="">Chương 1: Đứa bé vẫn sống</option>
                    <option value="">Chương 1: Đứa bé vẫn sống</option>
                    <option value="">Chương 1: Đứa bé vẫn sống</option>
                </select>
            </div>
            <div class="prev-chapter">
                <button id="prev-chapter" type="submit"><img src="{{asset('icon/btn-next-page.svg')}}" alt=""></button>
            </div>
        </div>
        @endforeach
    </div>


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
                            <li>
                                <a href="#"><img src="{{asset('icon/facebook.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('icon/Twitter.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('icon/linkedin.png')}}"></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('icon/instagram.png')}}"></a>
                            </li>
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
<script type='text/javascript'>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    function listchapter(){
        var idbook = $('#idbook').val();
        $.ajax({
            type:"post",
            url:"{{URL::to('reader/listchapter')}}",
            data:{
                _token: CSRF_TOKEN,
                idbook: idbook,
            },
            success: function(response){
                var chapter = "<option id='id_chapter' value=''>Chọn tập:</option>";
                $.each(response.response,function(index,value){
                    chapter +=
                    "<option value='"+value.id+"'>"+value.name +"</option>";
                });
                $('.select-chapter select').html('').append(chapter);
            }
        });
    }

    $(document).ready(function(){
        listchapter();
    });

    $('select').on('change', function() {
        var id_chapter = $('#listchapter').val();
        $.ajax({
            type:"post",
            url:"{{URL::to('reader/chapter_content')}}",
            data:{
                _token: CSRF_TOKEN,
                id_chapter: id_chapter,
            },
            success: function(response){
                var chapter_content = "";
                $.each(response.response,function(index,value){
                    chapter_content += value.content;
                });
                $('.chapter-content').html('').append(chapter_content);
            }
        })
    });
</script> 
@endsection()