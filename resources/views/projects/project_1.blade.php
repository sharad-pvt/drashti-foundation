@extends('layouts.main')

@section('content')

<section class="wrapper !bg-[rgba(254,254,254)]">
    <div class="container pt-10 pb-9 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] xl:pb-[3rem] lg:pb-[3rem] md:pb-[3rem] !text-center">
      <div class="flex flex-wrap mx-[-15px]">
        <div class="md:w-10/12 lg:w-8/12 xl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <div class="post-header">
            <div class="inline-flex mb-[.4rem] uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] relative align-top pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
              <a href="#" class="hover" rel="category">Identity</a>
            </div>
            <!-- /.post-category -->
            <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">Commodo Dolor Bibendum Parturient Cursus Mollis</h1>
            <p class="lead leading-[1.65] text-[.9rem] font-medium md:!px-14 lg:!px-14 xl:!px-20 xxl:!px-32">Integer posuere erat a ante venenatis dapibus posuere. Maecenas faucibus mollis interdum.</p>
          </div>
          <!-- /.post-header -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <div class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
    <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
      <article>
        <div class="post-slider !mb-8 xl:!mb-14 lg:!mb-14 md:!mb-14">
          <div class="swiper-container dots-over relative !z-10" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide !rounded-[.4rem]">
                  <img class="!rounded-[.4rem]" src="assets/img/photos/pp7.jpg" alt="image">
                  <div class="caption-wrapper p-14">
                    <div class="caption bg-[rgba(255,255,255)] opacity-100 !rounded-[.4rem] px-4 py-3 ml-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                      <h5 class="!mb-0">Vivamus sagittis lacus augue</h5>
                    </div>
                    <!--/.caption -->
                  </div>
                  <!--/.caption-wrapper -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide !rounded-[.4rem]">
                  <img class="!rounded-[.4rem]" src="assets/img/photos/pp8.jpg" alt="image">
                  <div class="caption-wrapper p-14">
                    <div class="caption bg-[rgba(255,255,255)] opacity-100 !rounded-[.4rem] px-4 py-3 !mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                      <h5 class="!mb-0">Vivamus sagittis lacus augue</h5>
                    </div>
                    <!--/.caption -->
                  </div>
                  <!--/.caption-wrapper -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide !rounded-[.4rem]">
                  <img class="!rounded-[.4rem]" src="assets/img/photos/pp9.jpg" alt="image">
                  <div class="caption-wrapper p-14">
                    <div class="caption bg-[rgba(255,255,255)] opacity-100 !rounded-[.4rem] px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                      <h5 class="!mb-0">Vivamus sagittis lacus augue</h5>
                    </div>
                    <!--/.caption -->
                  </div>
                  <!--/.caption-wrapper -->
                </div>
                <!--/.swiper-slide -->
              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.post-slider -->
            <div class="flex flex-wrap mx-[-15px]">
              <div class="xl:w-10/12 xl:!ml-[8.33333333%] lg:w-10/12 lg:!ml-[8.33333333%] w-full flex-[0_0_auto] px-[15px] max-w-full">
                <h2 class="text-[calc(1.265rem_+_0.18vw)] font-bold xl:text-[1.4rem] leading-[1.35] mb-4">About the Project</h2>
                <div class="flex flex-wrap mx-0">
                  <div class="xl:w-9/12 lg:w-9/12 md:w-9/12 w-full flex-[0_0_auto] max-w-full">
                    <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum.</p>
                    <p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                  </div>
                  <!--/column -->
                  <div class="xl:w-2/12 lg:w-2/12 md:w-2/12 w-full flex-[0_0_auto] max-w-full !ml-auto">
                    <ul class="pl-0 list-none">
                      <li>
                        <h5 class="!mb-1">Date</h5>
                        <p>17 May 2018</p>
                      </li>
                      <li>
                        <h5 class="!mb-1">Client Name</h5>
                        <p>Cool House</p>
                      </li>
                    </ul>
                    <a href="#" class="more hover">See Project</a>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!-- /column -->
            </div>
        <!--/.row -->
      </article>
      <!-- /.project -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /section -->
  <div class="wrapper !bg-[#ffffff]">
    <div class="container py-10">
      <div class="flex flex-wrap mx-[-15px] md:mx-[-15px] mt-[-15px] xl:mt-0 lg:mt-0 md:mt-0">
        <div class="xl:w-8/12 lg:w-8/12 md:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full self-center text-center xl:text-left lg:text-left md:text-left navigation">
          <a href="#" class="btn btn-soft-ash !rounded-[50rem] btn-icon btn-icon-start !mb-0 !mr-[.25rem] hover:translate-y-[-0.15rem]"><i class="uil uil-arrow-left before:content-['\e949']"></i> Prev Post</a>
          <a href="#" class="btn btn-soft-ash !rounded-[50rem] btn-icon btn-icon-end hover:translate-y-[-0.15rem] !mb-0">Next Post <i class="uil uil-arrow-right before:content-['\e94c']"></i></a>
        </div>
        <!--/column -->
        <aside class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full sm:mt-[15px] xsm:mt-[15px] sidebar text-center xl:text-right lg:text-right md:text-right">
          <!--/.share-dropdown -->
          <div class="dropdown share-dropdown btn-group">
            <button class="btn btn-red text-white !bg-[#e2626b] border-[#e2626b] hover:text-white hover:bg-[#e2626b] hover:border-[#e2626b] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#e2626b] active:border-[#e2626b] disabled:text-white disabled:bg-[#e2626b] disabled:border-[#e2626b] !rounded-[50rem] btn-icon btn-icon-start dropdown-toggle  !mb-0 mr-0 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="uil uil-share-alt mr-[0.3rem] text-[0.8rem] before:content-['\ecb0']"></i> Share </button>
            <div class="dropdown-menu !shadow-[rgba(30,34,40,0.06)_0px_0px_25px_0px]" style="">
            <a class="dropdown-item text-[0.7rem] !p-[.25rem_1.15rem]" href="#"><i class="uil uil-twitter w-4 text-[0.8rem] pr-[0.4rem] align-[-.1rem] before:content-['\ed59']"></i>Twitter</a>
            <a class="dropdown-item text-[0.7rem] !p-[.25rem_1.15rem]" href="#"><i class="uil uil-facebook-f w-4 text-[0.8rem] pr-[0.4rem] align-[-.1rem] before:content-['\eae2']"></i>Facebook</a>
            <a class="dropdown-item text-[0.7rem] !p-[.25rem_1.15rem]" href="#"><i class="uil uil-linkedin w-4 text-[0.8rem] pr-[0.4rem] align-[-.1rem] before:content-['\ebd1']"></i>Linkedin</a>
            </div>
            <!--/.dropdown-menu -->
          </div>
        </aside>
        <!-- /column .sidebar -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </div>

@endsection
