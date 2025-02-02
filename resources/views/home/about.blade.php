@include('home.layout.head', ['title' => 'Tentang'])
@include('home.layout.header')
<section class="wrapper image-wrapper bg-image bg-overlay text-white bg-no-repeat bg-[center_center] bg-cover relative z-0 !bg-fixed before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,0.5)]"
data-image-src="{{ asset('home') }}/assets/img/photos/wd6.jpg">
    <div
        class="container pt-10 pb-40 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] xl:pb-[17.5rem] lg:pb-[17.5rem] md:pb-[17.5rem] !text-center">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !mb-6">
                <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">Tentang Kami</h1>
                <p class="lead text-[0.9rem] font-medium leading-[1.65] !mb-0">Kolaka Utara</p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<section class="wrapper !bg-[#ffffff]">
    <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
        <div class="flex flex-wrap mx-[-15px] !text-center mb-14 xl:!mb-20 lg:!mb-20 md:!mb-20">
            <div
                class="md:w-10/12 lg:w-8/12 xl:w-8/12 w-full md:!ml-[8.33333333%] lg:!ml-[16.66666667%] xl:!ml-[16.66666667%] flex-[0_0_auto] px-[15px] max-w-full mt-[-8rem] xl:!mt-[-15rem] lg:!mt-[-15rem] md:!mt-[-15rem]">
                <figure class="m-0 p-0"><img class="!w-auto" src="{{ asset('home') }}/assets/img/illustrations/i8.png"
                        srcset="{{ asset('home') }}/assets/img/illustrations/i8.png" alt="image"></figure>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
</div>
@include('home.layout.footer')
