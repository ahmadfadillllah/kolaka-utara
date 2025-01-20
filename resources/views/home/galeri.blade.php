@include('home.layout.head', ['title' => 'Galeri'])
@include('home.layout.header')
<section
    class="wrapper image-wrapper bg-image bg-overlay text-white bg-no-repeat bg-[center_center] bg-cover relative z-0 !bg-fixed before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,0.5)]"
    data-image-src="{{ asset('home') }}/assets/img/photos/wd4.jpg">
    <div class="container pt-28 pb-14 xl:pt-36 lg:pt-36 md:pt-36 xl:pb-24 lg:pb-24 md:pb-24 !text-center">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="md:w-10/12 lg:w-8/12 xl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
                <div class="post-header">
                    <div
                        class="inline-flex mb-[.4rem] uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-white relative align-top pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#ffffff]">
                        <a href="#" class="text-inherit hover:!text-white" rel="category">Galeri</a>
                    </div>
                    <!-- /.post-category -->
                    <h1
                        class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3 text-white">
                        Event yang sering dikunjungi</h1>
                    <p class="lead leading-[1.65] text-[.9rem] font-medium md:!px-14 lg:!px-14 xl:!px-20 xxl:!px-32">
                        ~ Kolaka Utara</p>
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
<section class="wrapper !bg-[#ffffff]  border-b-[rgba(164,174,198,0.2)] border-b border-solid">
    <div class="container pt-[4.5rem] xl:pt-24 lg:pt-24 md:pt-24 pb-16 xl:pb-20 lg:pb-20 md:pb-20">
        <div class="flex flex-wrap mx-[-15px]">
            <div
                class="xl:w-10/12 xl:!ml-[8.33333333%] lg:w-10/12 lg:!ml-[8.33333333%] w-full flex-[0_0_auto] px-[15px] max-w-full">
                <h2 class="text-[calc(1.265rem_+_0.18vw)] font-bold xl:text-[1.4rem] leading-[1.35] mb-4">Tentang Kolaka Utara</h2>
                <div class="flex flex-wrap mx-0">
                    <div class="xl:w-9/12 lg:w-9/12 md:w-9/12 w-full flex-[0_0_auto] max-w-full">
                        <p>Kolaka Utara adalah sebuah kabupaten di Provinsi Sulawesi Tenggara, Indonesia, yang terkenal dengan kekayaan sumber daya alamnya,
                            termasuk nikel, emas dan tanah yang subur untuk pertanian. Ibu Kota Kolaka Utara ada Lasusua. Wilayah ini memiliki karakteristik geografis yang beragam, meliputi pegunungan,
                            sungai, serta area pesisir disepanjang teluk Bone.</p>
                    </div>
                    <!--/column -->
                    <div class="xl:w-2/12 lg:w-2/12 md:w-2/12 w-full flex-[0_0_auto] max-w-full !ml-auto">
                        <ul class="pl-0 list-none">
                            <li>
                                <h5 class="!mb-1">Date</h5>
                                <p>{{ \Carbon\Carbon::now()->format('d M Y') }}</p>
                            </li>
                        </ul>
                        <a href="{{ route('event.index') }}" class="more hover">Lihat Event</a>
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
    <div class="container-fluid xl:!px-6 lg:!px-6 md:!px-6">
        <div class="swiper-container blog grid-view mb-[7rem] xl:!mb-[9rem] lg:!mb-[9rem] md:!mb-[9rem]"
            data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($galeri as $ga)
                    <div class="swiper-slide">
                        <figure class="rounded-[0.4rem]"><img class="rounded-[0.4rem]" src="{{ asset('storage') }}/{{ $ga->path }}" alt="image"></figure>
                    </div>
                    @endforeach

                    <!--/.swiper-slide -->
                </div>
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
    </div>
    <!-- /.container-fluid -->
</section>

</div>
@include('home.layout.footer')
