@extends('layouts.main')

@section('content')
<section class="wrapper !bg-[#ffffff]">
    <div class="container pt-10 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem]">
      <div class="flex flex-wrap mx-[-15px]">
        <div class="md:w-8/12 lg:w-7/12 xl:w-6/12 xxl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full">
          <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">Projects</h1>
          <p class="lead text-[1.05rem] leading-[1.6] xl:pr-20 lg:pr-20 xxl:pr-14">Check out some of our awesome projects with creative ideas and great design.</p>
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
      <div class="itemgrid grid-view projects-masonry">
        <div class="isotope-filter !relative z-[5] filter mb-10">
          <p class=" inline m-[0_1rem_0_0] uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc]">Filter:</p>
          <ul class=" inline m-0 p-0 list-none">
            <li class="inline"><a class="filter-item uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] cursor-pointer active" data-filter="*">All</a></li>
            <li class="inline before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:ml-2 before:mr-[0.8rem] before:my-0 before:rounded-[100%] before:bg-[rgba(30,34,40,.2)] before:align-[.15rem]"><a class="filter-item uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] cursor-pointer hover:text-[#3f78e0]" data-filter=".concept">Concept</a></li>
            <li class="inline before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:ml-2 before:mr-[0.8rem] before:my-0 before:rounded-[100%] before:bg-[rgba(30,34,40,.2)] before:align-[.15rem]"><a class="filter-item uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] cursor-pointer hover:text-[#3f78e0]" data-filter=".product">Product</a></li>
            <li class="inline before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:ml-2 before:mr-[0.8rem] before:my-0 before:rounded-[100%] before:bg-[rgba(30,34,40,.2)] before:align-[.15rem]"><a class="filter-item uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] cursor-pointer hover:text-[#3f78e0]" data-filter=".workshop">Workshop</a></li>
            <li class="inline before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:ml-2 before:mr-[0.8rem] before:my-0 before:rounded-[100%] before:bg-[rgba(30,34,40,.2)] before:align-[.15rem]"><a class="filter-item uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] cursor-pointer hover:text-[#3f78e0]" data-filter=".still-life">Still Life</a></li>
          </ul>
        </div>
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-50px] xl:mt-[-80px] lg:mt-[-80px] md:mt-[-80px] isotope">
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full product">
            <figure class="lift rounded !mb-6"><a href='single-project.html'> <img src="assets/img/photos/cs16.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#747ed1] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#747ed1] !mb-2">Cosmetic</div>
                <h3 class="post-title">Cras Fermentum Sem</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full workshop">
            <figure class="lift rounded !mb-6"><a href='single-project2.html'> <img src="assets/img/photos/cs17.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#7cb798] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#7cb798] !mb-2">Coffee</div>
                <h3 class="post-title">Mollis Ipsum Mattis</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full still-life">
            <figure class="lift rounded !mb-6"><a href='single-project3.html'> <img src="assets/img/photos/cs18.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#a07cc5] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#a07cc5] !mb-2">Still Life</div>
                <h3 class="post-title">Ipsum Ultricies Cursus</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full product">
            <figure class="lift rounded !mb-6"><a href='single-project.html'> <img src="assets/img/photos/cs20.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#fab758] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#fab758] !mb-2">Product</div>
                <h3 class="post-title">Inceptos Euismod Egestas</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full product">
            <figure class="lift rounded !mb-6"><a href='single-project2.html'> <img src="assets/img/photos/cs19.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#f78b77] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#f78b77] !mb-2">Product</div>
                <h3 class="post-title">Sollicitudin Ornare Porta</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full workshop">
            <figure class="lift rounded !mb-6"><a href='single-project3.html'> <img src="assets/img/photos/cs21.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#45c4a0] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#45c4a0] !mb-2">Workshop</div>
                <h3 class="post-title">Ipsum Mollis Vulputate</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full concept">
            <figure class="lift rounded !mb-6"><a href='single-project.html'> <img src="assets/img/photos/cs22.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#e2626b] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#e2626b] !mb-2">Concept</div>
                <h3 class="post-title">Porta Ornare Cras</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full concept still-life">
            <figure class="lift rounded !mb-6"><a href='single-project2.html'> <img src="assets/img/photos/cs23.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#54a8c7] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#54a8c7] !mb-2">Concept</div>
                <h3 class="post-title">Vulputate Sollicitudin</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
          <div class="project item xl:w-4/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:mt-[80px] xl:px-[20px] lg:mt-[80px] lg:px-[20px] md:mt-[80px] md:px-[20px] px-[15px] mt-[50px] max-w-full product">
            <figure class="lift rounded !mb-6"><a href='single-project3.html'> <img src="assets/img/photos/cs24.jpg" alt="image"></a></figure>
            <div class="project-details flex justify-center flex-col">
              <div class="post-header">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold relative align-top pl-[1.4rem] opacity-100 text-[#747ed1] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#747ed1] !mb-2">Product</div>
                <h3 class="post-title">Magna Tristique Inceptos</h3>
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /.project-details -->
          </div>
          <!-- /.project -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.grid -->
    </div>
    <!-- /.container -->
  </section>

@endsection