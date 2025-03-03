@extends('layouts.main')

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white bg-no-repeat bg-[center_center] bg-cover relative z-0 !bg-fixed before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.5)]" data-image-src="assets/img/photos/bg1.jpg">
    <div class="container pt-36 xl:pt-[12.5rem] lg:pt-[12.5rem] md:pt-[12.5rem] pb-32 xl:pb-40 lg:pb-40 md:pb-40 !text-center">
      <div class="flex flex-wrap mx-[-15px]">
        <div class="md:w-10/12 lg:w-8/12 xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] text-white !mb-3">Our Services</h1>
          <p class="lead text-[1.05rem] leading-[1.6] font-medium md:!px-3 lg:!px-7 xl:!px-9 xxl:!px-10">We are a creative company that focuses on establishing long-term relationships with customers.</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper !bg-[#ffffff]">
    <div class="container pt-[4.5rem] pb-14 xl:pt-24 lg:pt-24 md:pt-24 xl:pb-[4.5rem] lg:pb-[4.5rem] md:pb-[4.5rem]">
      <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] lg:!mb-60 xl:!mb-80 items-center">
        <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] max-w-full xl:!order-2 lg:!order-2 mt-[50px]">
          <div class="flex flex-wrap mx-[-15px] xl:mx-[-12.5px] lg:mx-[-12.5px] md:mx-[-12.5px] mt-[-25px]">
            <div class="xl:w-5/12 lg:w-5/12 md:w-5/12 w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full xl:!ml-[8.33333333%] lg:!ml-[8.33333333%] md:!ml-[8.33333333%] !self-end mt-[25px]">
              <div class="card !bg-[#fef3e4]">
                <div class="card-body p-[40px]">
                  <img src="assets/img/icons/lineal/telephone-3.svg" class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#fab758] text-yellow !mb-3 " alt="image">
                  <h4>24/7 Support</h4>
                  <p class="!mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full !self-end mt-[25px]">
              <div class="card !bg-[#fae6e7]">
                <div class="card-body p-[40px]">
                  <img src="assets/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#e2626b] text-red !mb-3 " alt="image">
                  <h4>Secure Payments</h4>
                  <p class="!mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="xl:w-5/12 lg:w-5/12 md:w-5/12 w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full mt-[25px]">
              <div class="card !bg-[#eaf3ef]">
                <div class="card-body p-[40px]">
                  <img src="assets/img/icons/lineal/cloud-computing-3.svg" class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#7cb798] text-leaf !mb-3 " alt="image">
                  <h4>Daily Updates</h4>
                  <p class="!mb-0">Nulla vitae elit libero, a pharetra augue.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
            <div class="xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:px-[12.5px] lg:px-[12.5px] md:px-[12.5px] px-[15px] max-w-full !self-start mt-[25px]">
              <div class="card !bg-[#e0e9fa]">
                <div class="card-body p-[40px]">
                  <img src="assets/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-[#3f78e0] text-primary !mb-3 !w-[2.6rem] !h-[2.6rem]" alt="image">
                  <h4>Market Research</h4>
                  <p class="!mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget.</p>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
        <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
          <h2 class="!text-[.75rem] uppercase text-[#aab0bc] !mb-3 tracking-[0.02rem] leading-[1.35]">What We Do?</h2>
          <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3] mb-5">The service we offer is specifically designed to meet your needs.</h3>
          <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <a href="#" class="btn btn-navy text-white !bg-[#343f52] border-[#343f52] hover:text-white hover:bg-[#343f52] hover:border-[#343f52] focus:shadow-[rgba(82,92,108,1)] active:text-white active:bg-[#343f52] active:border-[#343f52] disabled:text-white disabled:bg-[#343f52] disabled:border-[#343f52] !rounded-[50rem] mt-3 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">More Details</a>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper !bg-[#edf2fc]">
    <div class="container py-[4.5rem] md:pt-24 lg:pt-0 xl:pt-0 xl:pb-24 lg:pb-24 md:pb-24">
      <div class="flex flex-wrap mx-[-15px] !text-center">
        <div class="xl:w-10/12 lg:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <div class="lg:mt-[-10rem] xl:!mt-[-15rem] !relative">
            <div class="shape bg-dot red rellax !w-[6rem] !h-[8rem] absolute opacity-50 bg-[radial-gradient(#e2626b_2px,transparent_2.5px)]" data-rellax-speed="1" style="top: 1rem; left: -3.9rem;"></div>
            <div class="shape !rounded-[50%] bg-line primary rellax !w-[8rem] !h-[8rem] absolute opacity-50" data-rellax-speed="1" style="bottom: 2rem; right: -3rem;"></div>
            <video poster="assets/img/photos/movie.jpg" class="player relative z-[2] rounded-[0.4rem]" playsinline controls preload="none">
              <source src="assets/media/movie.mp4" type="video/mp4">
              <source src="assets/media/movie.html" type="video/webm">
            </video>
          </div>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="flex flex-wrap mx-[-15px] !text-center">
        <div class="xl:w-9/12 lg:w-9/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <h2 class="!text-[.75rem] uppercase text-[#aab0bc] mb-3 mt-[3.5rem] tracking-[0.02rem]">Our Process</h2>
          <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3]  !mb-0 !text-center xl:!px-10 xxl:!px-20">Find out everything you need to know about creating a business process model</h3>
          <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] process-wrapper !text-center mt-9">
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] max-w-full"> <img src="assets/img/icons/lineal/light-bulb.svg" class="svg-inject icon-svg text-[#3f78e0] mb-3 !w-[2.6rem] !h-[2.6rem] m-[0_auto]" alt="image">
              <h4 class="!mb-1">1. Concept</h4>
              <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
            </div>
            <!--/column -->
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] max-w-full"> <img src="assets/img/icons/lineal/settings-3.svg" class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#e2626b] text-red !mb-3 m-[0_auto]" alt="image">
              <h4 class="!mb-1">2. Prepare</h4>
              <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
            </div>
            <!--/column -->
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] max-w-full"> <img src="assets/img/icons/lineal/design.svg" class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] text-[#7cb798] text-leaf !mb-3 m-[0_auto]" alt="image">
              <h4 class="!mb-1">3. Retouch</h4>
              <p>Nulla vitae elit libero elit non porta gravida eget metus cras.</p>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper !bg-[#ffffff]">
    <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
      <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] !mb-[4.5rem] xl:!mb-24 lg:!mb-24 md:!mb-24 items-center">
        <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
          <figure class="m-0 p-0"><img class="w-auto" src="assets/img/illustrations/i8.png" srcset="./assets/img/illustrations/i8@2x.png 2x" alt="image"></figure>
        </div>
        <!--/column -->
        <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
          <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3] !mb-6 xxl:pr-6">We bring rapid solutions to make the life of our customers easier.</h3>
          <ul class="progress-list mt-3 m-0 p-0">
            <li class="mb-4">
              <p class="mb-1">Marketing</p>
              <div class="progressbar line relative blue" data-value="100"></div>
            </li>
            <li class="mb-4">
              <p class="mb-1">Strategy</p>
              <div class="progressbar line relative yellow" data-value="80"></div>
            </li>
            <li class="mb-4">
              <p class="mb-1">Development</p>
              <div class="progressbar line relative orange" data-value="85"></div>
            </li>
            <li class="mb-4">
              <p class="mb-1">Data Analysis</p>
              <div class="progressbar line relative green" data-value="90"></div>
            </li>
          </ul>
          <!-- /.progress-list -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
      <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] items-center">
        <div class="xl:w-7/12 lg:w-7/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full xl:!order-2 lg:!order-2">
          <figure class="m-0 p-0"><img class="w-auto" src="assets/img/illustrations/i7.png" srcset="./assets/img/illustrations/i7@2x.png 2x" alt="image"></figure>
        </div>
        <!--/column -->
        <div class="xl:w-5/12 lg:w-5/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
          <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3] mb-5">We make your spending stress-free for you to have the perfect control.</h3>
          <p class="!mb-6">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <div class="flex flex-wrap mx-[-15px] mt-[-15px]">
            <div class="xl:w-6/12 w-full flex-[0_0_auto] px-[15px] mt-[15px] max-w-full">
              <ul class="pl-0 list-none bullet-bg bullet-soft-primary  !mb-0">
                <li class="relative pl-6"><span><i class="uil uil-check w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex justify-center items-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell absolute left-0"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li>
                <li class="relative pl-6 mt-3"><span><i class="uil uil-check w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex justify-center items-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell absolute left-0"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li>
              </ul>
            </div>
            <!--/column -->
            <div class="xl:w-6/12 w-full flex-[0_0_auto] px-[15px] mt-[15px] max-w-full">
              <ul class="pl-0 list-none bullet-bg bullet-soft-primary  !mb-0">
                <li class="relative pl-6"><span><i class="uil uil-check w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex justify-center items-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell absolute left-0"></i></span><span>Etiam porta euismod malesuada mollis.</span></li>
                <li class="relative pl-6 mt-3"><span><i class="uil uil-check w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex justify-center items-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell absolute left-0"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li>
              </ul>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper !bg-[#edf2fc]">
    <div class="container pt-[4.5rem] pb-32 xl:pt-24 lg:pt-24 md:pt-24 xl:pb-60 lg:pb-60 md:pb-60 !text-center">
      <div class="flex flex-wrap mx-[-15px]">
        <div class="lg:w-10/12 xl:w-9/12 xxl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <h2 class="!text-[.75rem] uppercase text-[#aab0bc] !mb-3 tracking-[0.02rem] leading-[1.35]">Our Pricing</h2>
          <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3] mb-[5rem] xl:!mb-6 lg:!mb-6 md:!mb-6 lg:!px-10 xl:!px-10">We offer great prices, premium products and quality service for your business.</h3>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper !bg-[#ffffff]">
    <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
      <div class="pricing-wrapper !relative z-[3] mt-[-15rem] xl:!mt-[-20rem] lg:!mt-[-20rem] md:!mt-[-20rem]">
        <div class="shape bg-dot primary rellax !w-[6rem] !h-[8rem] bg-[radial-gradient(#3f78e0_2px,transparent_2.5px)] absolute z-[1] opacity-50" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
        <div class="shape !rounded-[50%] bg-line red rellax !w-[8rem] !h-[8rem] hidden xl:block lg:block absolute z-[1] opacity-50" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
        <div class="flex flex-wrap items-center justify-center pricing-switcher-wrapper switcher">
          <p class="!mb-0 !pr-[.75rem]">Monthly</p>
          <div class="pricing-switchers w-8 h-4 clear-both !text-center !relative bg-[rgba(30,34,40,0.07)] box-content rounded-3xl border-[0.2rem] border-solid border-transparent">
            <div class="pricing-switcher pricing-switcher-active cursor-pointer w-full float-left h-4 leading-4 !relative z-[888] transition-[0.3s] duration-[ease-in-out] uppercase text-white"></div>
            <div class="pricing-switcher cursor-pointer w-full float-left h-4 leading-4 !relative z-[888] transition-[0.3s] duration-[ease-in-out] uppercase"></div>
            <div class="h-4 w-4 block absolute z-[555] transition-[0.3s] duration-[ease-in-out] m-0 rounded-[100%] border-[none] left-0 top-0 !bg-[rgba(63,120,224)] opacity-100 switcher-button"></div>
          </div>
          <p class="!mb-0 !pl-3 !relative">Yearly</p>
        </div>
        <div class="flex flex-wrap mx-[-15px] mt-3 xl:!mt-5 lg:!mt-5 md:!mt-5">
          <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full mt-[30px]">
            <div class="pricing card !text-center">
              <div class="card-body flex-[1_1_auto]  pb-4 xl:p-[2rem_2.5rem_1.25rem] lg:p-[2rem_2.5rem_1.25rem] md:p-[2rem_2.5rem_1.25rem]">
                <img src="assets/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg text-[#3f78e0] mb-3 !w-[2.6rem] !h-[2.6rem] m-[0_auto]" alt="image">
                <h4 class="card-title">Basic Plan</h4>
                <div class="prices text-[#343f52]">
                  <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">mo</span></div>
                  <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">yr</span></div>
                </div>
                <!--/.prices -->
                <ul class="pl-0 list-none bullet-bg bullet-soft-primary mt-7 !mb-8 text-left">
                  <li class="relative pl-6"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>1</strong> Project </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>100K</strong> API Access </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>100MB</strong> Storage </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-times bullet-soft-red absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center !bg-[#fae3e4] !text-[#e2626b] rounded-[100%] top-[0.2rem] before:content-['\ed3b'] before:align-middle before:table-cell"></i><span> Weekly <strong>Reports</strong> </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-times bullet-soft-red absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center !bg-[#fae3e4] !text-[#e2626b] rounded-[100%] top-[0.2rem] before:content-['\ed3b'] before:align-middle before:table-cell"></i><span> 7/24 <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full popular mt-[30px]">
            <div class="pricing card !text-center">
              <div class="card-body flex-[1_1_auto]  pb-4 xl:p-[2rem_2.5rem_1.25rem] lg:p-[2rem_2.5rem_1.25rem] md:p-[2rem_2.5rem_1.25rem]">
                <img src="assets/img/icons/lineal/home.svg" class="svg-inject icon-svg text-[#3f78e0] mb-3 !w-[2.6rem] !h-[2.6rem] m-[0_auto]" alt="image">
                <h4 class="card-title">Premium Plan</h4>
                <div class="prices text-[#343f52]">
                  <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">mo</span></div>
                  <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                </div>
                <!--/.prices -->
                <ul class="pl-0 list-none bullet-bg bullet-soft-primary mt-7 !mb-8 text-left">
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>5</strong> Projects </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>100K</strong> API Access </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>200MB</strong> Storage </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span> Weekly <strong>Reports</strong></span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-times bullet-soft-red absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center !bg-[#fae3e4] !text-[#e2626b] rounded-[100%] top-[0.2rem] before:content-['\ed3b'] before:align-middle before:table-cell"></i><span> 7/24 <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
          <div class="md:w-6/12 lg:w-4/12 xl:w-4/12 md:!ml-[25%] w-full flex-[0_0_auto] px-[15px] max-w-full xl:!ml-0 lg:!ml-0 mt-[30px]">
            <div class="pricing card !text-center">
              <div class="card-body flex-[1_1_auto]  pb-4 xl:p-[2rem_2.5rem_1.25rem] lg:p-[2rem_2.5rem_1.25rem] md:p-[2rem_2.5rem_1.25rem]">
                <img src="assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg text-[#3f78e0] mb-3 !w-[2.6rem] !h-[2.6rem] m-[0_auto]" alt="image">
                <h4 class="card-title">Corporate Plan</h4>
                <div class="prices text-[#343f52]">
                  <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                  <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                </div>
                <!--/.prices -->
                <ul class="pl-0 list-none bullet-bg bullet-soft-primary mt-7 !mb-8 text-left">
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>20</strong> Projects </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>300K</strong> API Access </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span><strong>500MB</strong> Storage </span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span> Weekly <strong>Reports</strong></span></li>
                  <li class="relative pl-6 mt-[0.35rem]"><i class="uil uil-check absolute left-0 w-4 h-4 text-[0.8rem] leading-none tracking-[normal] !text-center flex items-center justify-center bg-[#dce7f9] text-[#3f78e0] rounded-[100%] top-[0.2rem] before:content-['\e9dd'] before:align-middle before:table-cell"></i><span> 7/24 <strong>Support</strong></span></li>
                </ul>
                <a href="#" class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">Choose Plan</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.pricing-wrapper -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
  <section class="wrapper image-wrapper bg-auto no-overlay bg-image !text-center bg-map bg-[center_center] bg-no-repeat !bg-scroll relative z-[0]" data-image-src="assets/img/map.png">
    <div class="container pt-0 pb-[4.5rem] xl:pt-24 lg:pt-24 md:pt-24 xl:pb-32 lg:pb-32 md:pb-32">
      <div class="flex flex-wrap mx-[-15px]">
        <div class="lg:w-10/12 xl:w-9/12 xxl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <h2 class="!text-[.75rem] uppercase text-[#aab0bc] !mb-3 tracking-[0.02rem] leading-[1.35]">Join Our Community</h2>
          <h3 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3] !mb-8 lg:!px-14 xl:!px-14">We are trusted by over 5000+ clients. Join them now and grow your business.</h3>
        </div>
        <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="flex flex-wrap mx-[-15px]">
        <div class="md:w-10/12 lg:w-9/12 xl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
          <div class="flex flex-wrap mx-[-15px] items-center counter-wrapper mt-[-20px] xl:mt-0 lg:mt-0 md:mt-0">
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full !text-center mt-[20px] xl:mt-0 lg:mt-0 md:mt-0">
              <h3 class="counter counter-lg text-[calc(1.345rem_+_1.14vw)] tracking-[normal] !leading-none mb-2 xl:text-[2.2rem]  text-[#3f78e0]">7518</h3>
              <p class=" text-[0.8rem] font-medium mb-0">Completed Projects</p>
            </div>
            <!--/column -->
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full !text-center mt-[20px] xl:mt-0 lg:mt-0 md:mt-0">
              <h3 class="counter counter-lg text-[calc(1.345rem_+_1.14vw)] tracking-[normal] !leading-none mb-2 xl:text-[2.2rem]  text-[#3f78e0]">5472</h3>
              <p class=" text-[0.8rem] font-medium mb-0">Satisfied Customers</p>
            </div>
            <!--/column -->
            <div class="xl:w-4/12 lg:w-4/12 md:w-4/12 w-full flex-[0_0_auto] px-[15px] max-w-full !text-center mt-[20px] xl:mt-0 lg:mt-0 md:mt-0">
              <h3 class="counter counter-lg text-[calc(1.345rem_+_1.14vw)] tracking-[normal] !leading-none mb-2 xl:text-[2.2rem]  text-[#3f78e0]">2184</h3>
              <p class=" text-[0.8rem] font-medium mb-0">Expert Employees</p>
            </div>
            <!--/column -->
          </div>
          <!--/.row -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /section -->
</div>


@endsection