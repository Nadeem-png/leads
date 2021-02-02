<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/9ddc0bba90.js" crossorigin="anonymous"></script>
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="{{asset('engine2/style.css')}}" />
{{--    <script type="text/javascript" src="{{asset('engine2/jquery.js')}}"></script>--}}
    <!-- End WOWSlider.com HEAD section -->
    <style>
        #footer{
            background-color:rgb(49, 51, 51);
            width:100%;
        }
        /*.dropbtn {*/
        /*    padding: 16px;*/
        /*    font-size: 16px;*/
        /*    border: none;*/
        /*}*/

        /*.dropdown {*/
        /*    position: relative;*/
        /*    display: inline-block;*/
        /*}*/

        /*.dropdown-content {*/
        /*    display: none;*/
        /*    position: absolute;*/
        /*    background-color: #f1f1f1;*/
        /*    min-width: 160px;*/
        /*    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
        /*    z-index: 1000;*/
        /*}*/

        /*.dropdown-content a {*/
        /*    color: black;*/
        /*    padding: 12px 16px;*/
        /*    text-decoration: none;*/
        /*    display: block;*/
        /*}*/

        /*.dropdown-content a:hover {background-color: #ddd;}*/

        /*.dropdown:hover .dropdown-content {display: block;}*/

        /*.dropdown:hover .dropbtn {background-color: #3e8e41;}*/

    </style>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a href="/student/create" target="_blank" class="text-white nav-link bg-danger p-3 mr-4" style="font-size: 15px">
        Apply Now
    </a>
    <button class="navbar-toggler btn btn-danger"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item active mr-2">
                <a class="nav-link text-white " href="#">HOME<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ADMISSIONS
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="rule">RULES & REGULATION</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="admission">ADMISSION SCHEDULE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown mr-2">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ACADEMICS
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="preeng">FSC PRE-ENGINEERING</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="premed">FSC PRE-MEDICAL</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="fa">F.A</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ABOUT US
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="chairman">CHAIRMAN MESSAGE</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="mission">MOISSION</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="ourteam">OUR TEAM</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<nav class="navbar  navbar-expand-lg text-truncate" >
    <a href="#" class="navbar-brand mr-5 p-2">
        <img src="{{asset('img/log.png')}}" class="img-fluid w-25">
    </a>

    <button type="button" class="navbar-toggler" data-target="#div1" data-toggle="collapse">
        <i class="fas fa-bars text-white"></i>
    </button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item px-4 py-3">
                <a href="/contact/contactus" class="text-dark nav-link">Contact</a>
            </li>
            <li class="nav-item px-4 py-3">
                <a href="/student" class="text-dark nav-link">About us</a>
            </li>

            <li class="nav-item px-4 py-3">
                <a href="#" class="text-dark nav-link">
                    Life at Leads
                    </i>
                </a>
            </li>

            <li class="nav-item px-4 py-3 ml-5">
                <a href="#" class="text-dark nav-link">
                    <i class="fa fa-user-circle fa-2x"></i>
                </a>
            </li>

        </ul>
    </div>
</nav>

@yield('content')
<footer id="footer">
    <div class="container px-5 py-5 text-truncate">
        <div class="row ">
            <div class="col my-5">
                <h5 class="text-white">Contact</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <p class="text-white mt-4 mb-5">31 Tipu Block new Garden town<br>Lahore kalma chowk.<br>17 km Main Raiwind Road,<br>Lahore.<br>Superior Gold Campus,<br>6 KM Raiwind Rd, Lahore</p>
                <p class="text-white">UAN: 042-111-00-00-78</p>
                <a href="#"  class="text-white mb-3" style="text-decoration: none;">info@leads.edu.pk</a><br>
                <a href="#"  class="text-white" style="text-decoration: none;">admissions@leads.edu.pk</a>
            </div>


            <div class="col my-5">
                <h5 class="text-white">Our Campus</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <ul class="mt-4">
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 mt-4" style="text-decoration: none;">All About Leads</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 " style="text-decoration: none;">Leads Documentary</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Picture Gallery</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Feedback</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Co-curricular Activities</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">International Office</a>
                    </li>
                    <li>
                        <a href="#"  class="text-white" style="text-decoration: none;">Department of Public Relations</a>
                    </li>

                </ul>
            </div>


            <div class="col my-5">
                <h5 class="text-white">Academics</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <ul class="mt-4">
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 mt-4" style="text-decoration: none;">Admissions Procedure</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 " style="text-decoration: none;">Scholarships and Fees</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Policies</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Rules Governing Financial Awards<br>and Scholarships</a>
                    </li>

                </ul>
            </div>
            <div class="col my-5">
                <h5 class="text-white">Media</h5>
                <hr class="text-danger" style="width:90%;border-top:3px solid">
                <ul class="mt-4">
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 mt-4" style="text-decoration: none;">Blog</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3 " style="text-decoration: none;">Videos</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Podcast</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">News and Updates</a>
                    </li>
                    <li class="mb-3">
                        <a href="#"  class="text-white mb-3" style="text-decoration: none;">Events and PR</a>
                    </li>

                </ul>
            </div>

            <hr class="text-danger" style="width:100%;border-top:3px solid">
            <p class=" text-white ml-5">Leads-college Theme &copy; 2021.All Right Reserved.</p>
        </div>
    </div>
</footer>
<script>
    $(document).ready(function () {
     setTimeout(function () {
      $(".alert").alert("close");
     },4000);
    });
</script>

</html>
