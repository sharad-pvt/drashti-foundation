<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from sandbox-tailwind-template.netlify.app/demo2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2025 03:12:29 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Drashti Foundation - @yield('title','Welcome To Drashti Foundation')</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Manrope:wght@400;500;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('assets')}}/img/logo-500x500.png">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/fonts/unicons/unicons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/plugins.css">
    <link rel="preload" href="{{asset('assets')}}/css/fonts/dm.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
</head>

<body>
    <div class="grow shrink-0">
        <header class="relative wrapper !bg-[#ffffff] ">
            <div class="bg-[rgba(63,120,224)] text-white font-bold text-[.75rem] mb-2">
                <div class="container py-2 xl:flex lg:flex md:flex xl:flex-row lg:flex-row md:flex-row">
                    <div class="flex flex-row items-center">
                        <div class="icon text-white !text-[1.1rem] !mt-[.25rem] !mr-[.5rem]"> <i
                                class="uil uil-location-pin-alt before:content-['\ebd8']"></i></div>
                        <address class="mb-0 not-italic leading-[inherit] block">31, SS Empire, Ahmedabad </address>
                    </div>
                    <div class="flex flex-row items-center me-6 ms-auto">
                        <div class="icon text-white !text-[1.1rem] !mt-[.25rem] !mr-[.5rem]"> <i
                                class="uil uil-phone-volume before:content-['\ec50']"></i></div>
                        <p class="mb-0">99 231 564 01</p>
                    </div>
                    <div class="flex flex-row items-center">
                        <div class="icon text-white !text-[1.1rem] !mt-[.25rem] !mr-[.5rem]"> <i
                                class="uil uil-message before:content-['\ebfe']"></i></div>
                        <p class="mb-0"><a href="mailto:info@drashtifoundation.ssemp"
                                class="hover text-white hover:!text-white">info@drashtifoundation.ssemp</a></p>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container xl:flex-row lg:flex-row !flex-nowrap items-center">
                    <div class="navbar-brand w-full">
                        <a href='index.html'>
                            <img src="{{asset('assets')}}/img/logo-2000x500.png" width="300" srcset="./{{asset('assets')}}/img/logo-2000x500.png 2x" alt="image">
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div
                            class="offcanvas-header xl:hidden lg:hidden flex items-center justify-between flex-row p-6">
                            <h3 class="text-white xl:text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Drashti
                                Foundation</h3>
                            <button type="button"
                                class="btn-close btn-close-white mr-[-0.75rem] m-0 p-0 leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0"
                                data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link {{-- dropdown-toggle --}}" href="/home"
                                        >Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link {{-- dropdown-toggle --}}" href="{{route('service')}}"
                                        >Services</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="/projects"
                                        >Projects</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/blogs" >Blog</a>
                                </li>
                
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer xl:hidden lg:hidden">
                                <div>
                                    <a href="mailto:first.info@drashtifoundation.ssemp" class="link-inverse">info@drashtifoundation.ssemp</a>
                                    <br> 00 (123) 456 78 90 <br>
                                    <nav class="nav social social-white mt-4">
                                        <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                            href="#"><i
                                                class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                                        <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                            href="#"><i
                                                class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                                        <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                            href="#"><i
                                                class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                                        <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                            href="#"><i
                                                class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                                        <a class="text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                            href="#"><i
                                                class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-full !flex !ml-auto">
                        <ul class="navbar-nav !flex-row !items-center !ml-auto">
                          @section('lang')
                            <li class="nav-item dropdown language-select uppercase group">
                                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                                <ul class="dropdown-menu group-hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">
                                    <li class="nav-item"><a
                                            class="dropdown-item hover:text-[#3f78e0] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]"
                                            href="#">En</a></li>
                                    <li class="nav-item"><a
                                            class="dropdown-item hover:text-[#3f78e0] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]"
                                            href="#">De</a></li>
                                    <li class="nav-item"><a
                                            class="dropdown-item hover:text-[#3f78e0] hover:bg-[inherit] focus:text-[#3f78e0] focus:bg-[inherit]"
                                            href="#">Es</a></li>
                                </ul>
                            </li>
                          @show
                            <li class="nav-item hidden xl:block lg:block md:block">
                                <a class='btn btn-sm btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]'
                                    href='/contact'>Contact</a>
                            </li>
                            <li class="nav-item xl:hidden lg:hidden">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        @hasSection('content')
          @yield('content')

        @else
        <div class="container">
          <p>This Page Under Maintaines</p>

        </div>
        @endif
    </div>
    <!-- /.content-wrapper -->
    <footer class="!bg-[#ffffff] ">
        <div class="container py-16 xl:!py-20 lg:!py-20 md:!py-20">
            <div class="flex flex-wrap mx-[-15px] mt-[-30px] xl:mt-0 lg:mt-0">
                <div
                    class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
                    <div class="widget">
                        <img class="!mb-4" src="{{asset('assets')}}/img/logo-2000x500.png" width="300" srcset="./{{asset('assets')}}/img/logo-dark@2x.png 2x"
                            alt="image">
                        <p class="!mb-4">© {{date('Y')}} Drashti Foundation. <br class="hidden xl:block lg:block">All rights reserved.
                        </p>
                        <nav class="nav social">
                            <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                href="#"><i
                                    class="uil uil-twitter before:content-['\ed59'] !text-[#5daed5] text-[1rem]"></i></a>
                            <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                href="#"><i
                                    class="uil uil-facebook-f before:content-['\eae2'] !text-[#4470cf] text-[1rem]"></i></a>
                            <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                href="#"><i
                                    class="uil uil-dribbble before:content-['\eaa2'] !text-[#e94d88] text-[1rem]"></i></a>
                            <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                href="#"><i
                                    class="uil uil-instagram before:content-['\eb9c'] !text-[#d53581] text-[1rem]"></i></a>
                            <a class="text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                href="#"><i
                                    class="uil uil-youtube before:content-['\edb5'] !text-[#c8312b] text-[1rem]"></i></a>
                        </nav>
                    </div>
                </div>
                <div
                    class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
                    <div class="widget">
                        <h4 class="widget-title !mb-3">Get in Touch</h4>
                        <address class="xl:pr-20 xxl:!pr-28 not-italic leading-[inherit] block mb-4">31, SS Empire, Ahmedabad, Gujarat, India</address>
                        <a class="text-[#60697b] hover:text-[#60697b]"
                            href="mailto:first.last@email.com">info@email.com</a><br> 00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div
                    class="md:w-4/12 xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
                    <div class="widget">
                        <h4 class="widget-title !mb-3">Learn More</h4>
                        <ul class="pl-0 list-none !mb-0">
                            <li><a class="text-[#60697b] hover:text-[#3f78e0]" href="#">About Us</a></li>
                            <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#3f78e0]"
                                    href="#">Our Story</a></li>
                            <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#3f78e0]"
                                    href="#">Projects</a></li>
                            <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#3f78e0]"
                                    href="#">Terms of Use</a></li>
                            <li class="mt-[0.35rem]"><a class="text-[#60697b] hover:text-[#3f78e0]"
                                    href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div
                    class="md:w-full xl:w-3/12 lg:w-3/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:mt-0 lg:mt-0 mt-[30px]">
                    <div class="widget">
                        <h4 class="widget-title !mb-3">Our Newsletter</h4>
                        <p class="!mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form
                                    action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                    method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                    class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div
                                            class="!text-left input-group form-floating !relative flex flex-wrap items-stretch w-full">
                                            <input type="email" value="" name="EMAIL"
                                                class="required form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]"
                                                placeholder="Email Address" id="mce-EMAIL2">
                                            <label
                                                class="!ml-[0.05rem] text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none origin-[0_0] px-4 py-[0.6rem] left-0 top-0"
                                                for="mce-EMAIL2">Email Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2"
                                                class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !relative z-[2] focus:z-[5] hover:!transform-none border-0">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response2" style="display:none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input
                                                type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- progress wrapper -->
    <div
        class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:text-[#3f78e0] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path
                class="fill-none stroke-[#3f78e0] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none"
                d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="{{asset('assets')}}/js/plugins.js"></script>
    <script src="{{asset('assets')}}/js/theme.js"></script>
</body>


<!-- Mirrored from sandbox-tailwind-template.netlify.app/demo2 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Jan 2025 03:12:48 GMT -->

</html>
