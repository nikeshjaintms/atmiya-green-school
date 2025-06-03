<header class="navbar navbar-custom container-full-sm" id="header">
    <div class="container position-s">
        <div class="header-inner">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-md-6 col-5 ">
                    <div class="navbar-header">
                        <a class="navbar-brand page-scroll" href="{{route('home')}}">
                            <img alt="Atmiya" src="{{asset('frontend/assets/images/logo.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 menu-width position-initial">
                    <div id="menu" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{route('home')}}" class="page-scroll">Home</a></li>
                            <li><a href="{{route('frontend.about')}}" class="page-scroll">About Us</a></li>
                            <li class="level dropdown"><span class="opener plus"></span>
                                <a href="{{route('frontend.gallery')}}" class="page-scroll">CBSE INFO</a>
                                <div class="megamenu mobile-sub-menu">
                                    <div class="megamenu-inner-top">
                                        <ul class="sub-menu-level1">
                                            <li class="level2">
                                                <ul class="sub-menu-level2 ">
                                                    <li class="level3"><a href="{{route('frontend.generalInformation')}}"
                                                                          target="_blank"><span>■</span>General Information</a></li>
                                                    <li class="level3"><a href="{{route('frontend.documents-information')}}"><span>■</span>Documents and
                                                            Information</a></li>
                                                    <li class="level3"><a href="{{route('frontend.academic')}}"><span>■</span>Academics</a></li>
                                                    <li class="level3"><a href="{{route('frontend.circular')}}"><span>■</span>Circulars</a></li>
                                                    <li class="level3"><a href="{{route('frontend.teaching_staff')}}"><span>■</span>Teaching Staff</a></li>
                                                    <li class="level3"><a href="{{route('frontend.schoolInfrastructure')}}"><span>■</span>School
                                                            Infrastructure</a></li>
                                                    <li class="level3"><a
                                                            href="{{asset('frontend/assets/cbseinfo/documentsandInformation/mandatorypublicdisclosure.pdf')}}"
                                                            target="_blank"><span>■</span>Mandatory Public Disclosure</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="level"><a href="#" class="page-scroll">Facility</a></li>
                            <li class="level"><a href="{{route('frontend.admin')}}" class="page-scroll">Admissions </a></li>
                            <!-- <li class="level"><a href="contact.html" class="page-scroll">Contact Us</a></li> -->
                            <li class="level dropdown"> <span class="opener plus"></span>
                                <a href="{{route('frontend.gallery')}}" class="page-scroll">Gallery</a>
                                <div class="megamenu mobile-sub-menu">
                                    <div class="megamenu-inner-top">
                                        <ul class="sub-menu-level1">
                                            <li class="level2">
                                                <ul class="sub-menu-level2 ">
                                                    <li class="level3"><a href="{{route('frontend.magazine')}}"><span>■</span>School Magazine</a></li>
                                                    <li class="level3"><a href="{{route('frontend.event')}}"><span>■</span>Events</a></li>
                                                    <li class="level3"><a href="{{route('frontend.staff')}}"><span>■</span>Our Staff</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="level"><a href="{{route('frontend.contact')}}" class="page-scroll">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-7">
                    <div class=" header-right-link" style="margin-top: 45px">
                        <ul>
                            <li>
                                <a href="#"><span class="fa fa-phone"></span> 97149 94545</a>
                            </li>
                            <li class="side-toggle">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i
                                        class="fa fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="sidebar-search-wrap">
    <div class="sidebar-table-container">
        <div class="sidebar-align-container">
            <div class="search-closer right-side"></div>
            <div class="search-container">
                <form method="get" id="search-form">
                    <input type="text" id="s" class="search-input" name="s" placeholder="Start Searching">
                </form>
                <span>Search and Press Enter</span>
            </div>
        </div>
    </div>
</div>
