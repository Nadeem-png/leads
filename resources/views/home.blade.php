
@extends('master/layout')
@section('content')
    <style>
        .cources_highlight {
            padding: 0;
            margin-top: -150px; }
        .cources_highlight h2 {
            margin-bottom: 40px; }
        .cources_highlight .latest_blog_carousel {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; }
        .cources_highlight .latest_blog_carousel .single_item_first {
            border-top: 5px solid #fff;
            border-left: 5px solid #fff; }
        .cources_highlight .latest_blog_carousel .single_item_first:before {
            height: 3px;
            width: 102%;
            left: -5px;
            background: #092ace;
            bottom: 0; }
        .cources_highlight .latest_blog_carousel .single_item_first span {
            color: #092ace; }
        .cources_highlight .latest_blog_carousel .single_item_center {
            border: 5px solid #fff; }
        .cources_highlight .latest_blog_carousel .single_item_center:before {
            height: 5px;
            bottom: -5px;
            width: 103%;
            left: -5px;
            background: #ff5a2c; }
        .cources_highlight .latest_blog_carousel .single_item_center .blog-img {
            height: 350px; }
        .cources_highlight .latest_blog_carousel .single_item_center .blog-img img {
            width: 100%;
            height: 100%; }
        .cources_highlight .latest_blog_carousel .single_item_center span {
            color: #ff5a2c; }
        .cources_highlight .latest_blog_carousel .single_item_last {
            border-top: 5px solid #fff;
            border-right: 5px solid #fff; }
        .cources_highlight .latest_blog_carousel .single_item_last:before {
            height: 3px;
            width: 102%;
            right: -5px;
            background: #092ace;
            bottom: 0; }
        .cources_highlight .latest_blog_carousel .single_item_last span {
            color: #092ace; }
        .cources_highlight .latest_blog_carousel .single_item {
            -webkit-box-shadow: 0px 0px 15px 0px rgba(47, 47, 47, 0.05);
            box-shadow: 0px 0px 15px 0px rgba(47, 47, 47, 0.05);
            width: 33.33%;
            text-align: center;
            position: relative; }
        .cources_highlight .latest_blog_carousel .single_item:before {
            position: absolute;
            content: "";
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out; }
        .cources_highlight .latest_blog_carousel .single_item:hover:before {
            background: #ff5a2c; }
        .cources_highlight .latest_blog_carousel .single_item:hover .blog-img img {
            -webkit-transform: scale(1);
            transform: scale(1); }
        .cources_highlight .latest_blog_carousel .single_item:hover .blog_title span {
            color: #ff5a2c; }
        .cources_highlight .latest_blog_carousel .single_item .blog-img {
            overflow: hidden; }
        .cources_highlight .latest_blog_carousel .single_item .blog-img img {
            width: 100%;
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out; }
        .cources_highlight .latest_blog_carousel .single_item .blog_title {
            padding: 50px; }
        .cources_highlight .latest_blog_carousel .single_item .blog_title span {
            font-size: 20px;
            line-height: 24px;
            font-weight: 400;
            margin-bottom: 15px;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            font-family: "Rubik", sans-serif; }
        .cources_highlight .latest_blog_carousel .single_item .blog_title h3 {
            font-weight: 700;
            font-size: 30px;
            padding: 5px 0 30px;
            line-height: 34px;
            font-weight: 700; }
        .cources_highlight .latest_blog_carousel .single_item .blog_title h3 a {
            color: #333146;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out; }
        .cources_highlight .latest_blog_carousel .single_item .blog_title p {
            font-size: 15px;
            font-weight: 300;
            margin: 0;
            color: #6a7a83; }

        #div1{
            background-color:#e1e8e5;
            width: 100%;
            height: 550px
        }
    </style>
    <body>
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container2">
        <div class="ws_images" ><ul>
                <li><img src="{{asset('data2/images/students1807505_1920.jpg')}}" alt="" title="" id="wows2_0"/></li>
                <li><a href="http://wowslider.net"><img src="{{asset('data2/images/typing849806_1920.jpg')}}" alt="css slider" title="" id="wows2_1"/></a></li>
                <li><img src="{{asset('data2/images/library1147815_1920.jpg')}}" alt="" title="" id="wows2_2"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title=""><span><img src="{{asset('data2/tooltips/students1807505_1920.jpg')}}" alt=""/>1</span></a>
                <a href="#" title=""><span><img src="{{asset('data2/tooltips/typing849806_1920.jpg')}}" alt=""/>2</span></a>
                <a href="#" title=""><span><img src="{{asset('data2/tooltips/library1147815_1920.jpg')}}" alt=""/>3</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">carousel jquery</a> by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="{{asset('engine2/wowslider.js')}}"></script>
    <script type="text/javascript" src="{{asset('engine2/script.js')}}"></script>
    <!-- End WOWSlider.com BODY section -->

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12 col-lg col-md">
                <h3 class="font-weight-bold ml-5" style="font-family: Serif ">Leads Group of Colleges</h3>
                <hr style="border:2px solid red ; width: 15%;margin-left: 50px" />
                <p class="ml-5 mt-4"> We, at Leads-college, are steered by our values.
                    Team Work . Student Success .<br> Excellence .Innovation . Agility . Fairness
                    ‘Facilitating superior human beings’ <br>was the intentwhich gave rise to the Leads College.<br>We, at Leads-college, are steered by our values.
                    Team Work . Student Success .<br> Excellence .Innovation . Agility . Fairness
                    ‘Facilitating superior human beings’ <br>was the intentwhich gave rise to the Leads College.</p>
             <p class="collapse ml-5 mt-2" id="demo">   We, at Leads-college, are steered by our values.
                Team Work . Student Success .<br> Excellence .Innovation . Agility . Fairness
                ‘Facilitating superior human beings’ <br>was the intentwhich gave rise to the Leads College.<br>We, at Leads-college, are steered by our values.
                Team Work . Student Success .<br> Excellence .Innovation . Agility . Fairness
                ‘Facilitating superior human beings’ <br>was the intentwhich gave rise to the Leads College.</p>
                <button class="btn btn-primary ml-5 rounded-pill mb-5" type="button" data-toggle="collapse" data-target="#demo">Read More</button>
            </div>
            <div class="col-sm-12 col-lg col-md">
                <iframe width="450" height="280" src="https://www.youtube.com/embed/r3_mFSmKKnc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                </iframe>
            </div>
        </div>
    </div>

    <!--   <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js bg-dark" style="background-size: cover; background-position: center center; background-image: url(img/book-4126483_1920.jpg);" data-parallax-speed="0"></div> -->
{{--    <section class="cources_highlight mt-2">--}}
{{--        <div class="container">--}}
{{--            <div class="row" >--}}
{{--                <div class="col-12 col-sm-12 col-md-12 col-lg-12">--}}
{{--                    <div class="latest_blog_carousel">--}}
{{--                        <div class="single_item single_item_first">--}}
{{--                            <div class="blog-img">--}}
{{--                                <a href="#"><img src="{{asset('img/features_1.jpg')}}" alt="" class="img-fluid"></a>--}}
{{--                            </div>--}}
{{--                            <div class="blog_title">--}}
{{--                                <span>look At</span>--}}
{{--                                <h3><a href="#" title="">Next Scheduled</a></h3>--}}
{{--                                <p>Lorem Ipsum dolor sit amet mollis felis arcu donec viverra. Pede phasellus etiam; Aaecenas vel vici quis dictum rutrum nec nisi et ac penatibus aenean....</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="single_item single_item_center">--}}
{{--                            <div class="blog-img">--}}
{{--                                <a href="#" title=""><img src="{{asset('img/features_2.jpg')}}" alt="" class="img-fluid"></a>--}}
{{--                            </div>--}}
{{--                            <div class="blog_title">--}}
{{--                                <span>Go To</span>--}}
{{--                                <h3><a href="#" title="">Online Courees</a></h3>--}}
{{--                                <p>Lorem Ipsum dolor sit amet mollis felis arcu donec viverra. Pede phasellus etiam; Aaecenas vel vici quis dictum rutrum nec nisi et ac penatibus aenean. Pede enim nunc ultricies quis rhoncus penatibus tincidunt integer felis...</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="single_item single_item_last">--}}
{{--                            <div class="blog-img">--}}
{{--                                <a href="#" title=""><img src="{{asset('img/features_3.jpg')}}" alt="" class="img-fluid"></a>--}}
{{--                            </div>--}}
{{--                            <div class="blog_title">--}}
{{--                                <span>Get Your</span>--}}
{{--                                <h3><a href="#" title="">Education Equip</a></h3>--}}
{{--                                <p>Lorem Ipsum dolor sit amet mollis felis arcu donec viverra. Pede phasellus etiam; Aaecenas vel vici quis dictum rutrum nec nisi et ac penatibus aenean....</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section><!-- End Popular Courses Highlight -->--}}
      <div class="container-fluid mt-5">
          <div class=" ml-5 mb-5">
          <h3 class="font-weight-bold " style="font-family: Serif ">CHOOSE A COURSE</h3>
              <hr style="border:2px solid red ; width:10%;margin-left: 50px" />
          </div>

          <div class="row mb-5">
              <div class="col-sm-8 col-lg-3 col-md-3 ">
                  <a href="#"> <img src="{{asset('/img/a2.jpg')}}" class="img-thumbnail mb-2"></a>
                  <a href="#" class="font-weight-bold ml-5 " style="font-family: Serif;text-decoration: none;color: #013e7d">INTERMEDIATE PROGRAMS</a>
              </div>
              <div class="col-sm-8 col-lg-3 col-md-3">
                  <a href="#"> <img src="{{asset('/img/a1.jpg')}}" class="img-thumbnail mb-2"></a>
                   <a href="#" class="font-weight-bold ml-5 " style="font-family: Serif;text-decoration: none;color: #013e7d">BACHELORS PROGRAMS</a>
              </div>
              <div class="col-sm-8 col-lg-6 col-md-8">
                  <div class=" ml-5">
                      <h3 class="font-weight-bold " style="font-family: Serif ">LATEST NEWS</h3>
                      <hr style="border:2px solid red ; width:20%;margin-left: 40px" />
                  </div>
                  <div class="card" style="background-color: #cfd0d1">
                      <div class="card-header">
                      <div class="card-body">
                           <div class="row">
                               <div class="col-sm col-lg">
                                   <i class="fas fa-clock fa-3x"></i>
                               </div>
                               <div class="col-sm col-lg-10">
                                    <p class="card-text">The Leads Group and FlyMust Travel and Tours</p>
                                    <p>January 13, 2021</p>
                               </div>
                           </div>
                          <hr/>
                          <div class="row">
                              <div class="col-sm col-lg">
                                  <i class="fas fa-clock fa-3x"></i>
                              </div>
                              <div class="col-sm col-lg-10">
                                  <p class="card-text">The Leads Group and FlyMust Travel and Tours</p>
                                  <p>January 13, 2021</p>
                              </div>
                          </div>
                          <hr/>
                          <div class="row">
                              <div class="col-sm col-lg">
                                  <i class="fas fa-clock fa-3x"></i>
                              </div>
                              <div class="col-sm col-lg-10">
                                  <p class="card-text">The Leads Group and FlyMust Travel and Tours</p>
                                  <p>January 13, 2021</p>
                              </div>
                          </div>

                      </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

   <div class="container-fluid p-4" style="background-color: #dadde0">
       <div class="row">
           <div class="col-sm-8 col-lg-5 col-md mt-5 ml-5">
            <img src="{{asset('/img/log.png')}}" class="img-fluid w-75">
           </div>
           <div class="col-sm-8 col-lg col-md mt-5">
               <h3 class="font-weight-bold " style="font-family: Serif ">WHY LEADS</h3>
               <hr style="border:2px solid red ; width: 15%;margin-left: 10px" />
               <p class="mt-4 mb-5">To make your Learning FUN, our student engagement office provides you an <br>opportunity to participate
                   in various extra-curricular activities through <br>its flagship events like Superior Nights (Concerts)
                   which teach you social skills.<br> Sports and Cultural Festival imparts an achievement orientation
                   and sportsman spirit in your personalities.<br> Team Building Adventures (Tours) teach you teamwork
                   and bring forward<br> the adventurous side of your personality.</p>
           </div>
       </div>
   </div>
    <div class="container-fluid text-truncate " style="background-color:#18f59d">
        <div class="row mt-5 p-5">
            <div class="col">
                <p class="text-center mb-4" style="font-size: 40px"><i class="fas fa-book-open"></i></p>
                <h4 class="text-center mt-2 mb-4" style="font-family: initial;">CMACED</h4>
                <h6 class="text-center ">The Chaudhry Muhammad Akram <br>Center for Entrepreneurship and<br>Development was established in<br>2009.</h6>
            </div>

            <div class="col">
                <p class="text-center mb-4" style="font-size: 40px"><i class="fas fa-globe-americas"></i></p>
                <h3 class="text-center mt-2 mb-4" style="font-family: initial;">International Partnerships</h3>
                <h6 class="text-center ">With 200+ active partnerships<br> across the globe, we encourage<br> international exposure for our <br>students</h6>
            </div>

            <div class="col">
                <p class="text-center mb-4" style="font-size: 40px"><i class="fas fa-globe"></i></p>
                <h4 class="text-center mt-2 mb-4" style="font-family: initial;">Degrees</h4>
                <h6 class="text-center ">55+ degrees are offered in<br> Undergraduate, Post Graduate and<br>Doctoral Programs.</h6>
            </div>
            <div class="col">
                <p class="text-center mb-4" style="font-size: 40px"><i class="fas fa-archway"></i></p>
                <h4 class="text-center mt-2 mb-4" style="font-family: initial;">Campus Life</h4>
                <h6 class="text-center ">We believe in a vibrant campus life<br> and our Clubs, Societies, Events<br>ensure that.</h6>
            </div>
        </div>
    </div>
    <iframe width="100%" height="430px" src="https://www.youtube.com/embed/9cGy4DOUMlE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-6 col-lg img-fluid d-flex align-items-center justify-content-center flex-column text-truncate" style="background-image: url({{asset('img/d10.jpg')}});width: 100%; height:300px;">

                <h4 class="text-white">Undergraduate Programs</h4>
                <h6 class="text-white">Preparing you to be contributing<br> members of the society for an <br>Economically Superior Pakistan.</h6>
                <a href="#" style="text-decoration: none;font-size: 15pt"class="btn btn-info rounded-pill">Learn More</a>


            </div>
            <div class="col-sm-12 col-lg  img-fluid d-flex align-items-center justify-content-center flex-column text-truncate" style="background-image: url({{asset('img/d4.jpg')}});height:300px; width: 100%;">
                <h4 class="text-white">Graduate Programs</h4>
                <h6 class="text-white">Preparing mindsets that will shape a<br> sustainable tomorrow.</h6>
                <a href="#" style="text-decoration: none;font-size: 15pt"class="btn btn-success rounded-pill">Learn More</a>
            </div>

            <div class="col-sm-12 col-lg  img-fluid d-flex align-items-center justify-content-center flex-column text-truncate" style="background-image: url({{asset('img/d0.jpg')}});height:300px; width: 100%;">
                <h4 class="text-white">Postgraduate Programs</h4>
                <h6 class="text-white ml-5">Promoting research culture and<br> preparing individuals that will<br> contribute to the growing landscape of Pakistan.</h6>
                <a href="#" style="text-decoration: none;font-size: 15pt"class="btn btn-info rounded-pill">Learn More</a>
            </div>

        </div>

    </div>

    </body>


@endsection
@section('title','Home')
@section('nava','active')

