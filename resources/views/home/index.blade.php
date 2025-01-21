@include('home.layout.head', ['title' => 'Home'])
@include('home.layout.header')
<!-- /header -->
<section class="wrapper  bg-[#21262c] opacity-100 ">
    <div class="swiper-container swiper-hero dots-over relative z-10" data-margin="0" data-autoplay="true"
        data-autoplaytime="7000" data-nav="true" data-dots="true" data-items="1">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-overlay bg-overlay-400  bg-[#21262c] opacity-100  bg-image !bg-cover !bg-[center_center] !h-[750px] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.4)]"
                    data-image-src="{{ asset('home') }}/assets/img/photos/wd12.jpg">
                    <div class="container !h-full">
                        <div class="flex flex-wrap mx-[-15px] !h-full">
                            <div
                                class="md:w-10/12 md:!ml-[8.33333333%] lg:w-7/12 lg:!ml-0 xl:w-6/12 xxl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full text-center lg:text-left xl:text-left justify-center self-center items-start">
                                <h2
                                    class="xl:text-[2.8rem] !leading-[1.2] font-bold text-[calc(1.405rem_+_1.86vw)] mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    EVENT PARIWISATA.</h2>
                                <p
                                    class="lead text-[1.15rem] leading-normal mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    Event pariwisata Kabupaten Kolaka Utara bertujuan untuk meningkatkan daya tarik wisata daerah, memperkenalkan kekayaan budaya serta mendorong pertumbuhan ekonomi lokal</p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="{{ route('home.event') }}"
                                        class="btn btn-lg btn-outline-white !text-white bg-[#ffffff] !border-white !border-[2px] hover:!text-[#343f52] hover:bg-[#ffffff] hover:border-white focus:shadow-[rgba(255,255,255,1)] active:!text-[#343f52] active:bg-[#ffffff] active:border-white disabled:text-white disabled:bg-transparent disabled:border-white !rounded-[50rem]">Baca Selengkapnya</a></div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
                <div class="swiper-slide bg-overlay bg-overlay-400  bg-[#21262c] opacity-100  bg-image !bg-cover !bg-[center_center] !h-[750px] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.4)]"
                    data-image-src="{{ asset('home') }}/assets/img/photos/wd2.jpg">
                    <div class="container !h-full">
                        <div class="flex flex-wrap mx-[-15px] !h-full">
                            <div
                                class="md:w-11/12 lg:w-8/12 xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !text-center justify-center self-center">
                                <h4
                                    class="xl:text-[2.8rem] !leading-[1.2] font-bold text-[calc(1.405rem_+_1.86vw)] mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    Ulasan kreator mengenai Wonderful Kolaka Utara</h4>
                                <div class="animate__animated animate__slideInUp animate__delay-3s"><a
                                        href="{{ asset('home') }}/assets/media/kolut.mp4"
                                        class="btn btn-circle btn-white btn-play ripple !mx-auto mb-5 !relative z-[2] xl:text-[2.3rem] !w-[3.5rem] !h-[3.5rem] text-[calc(1.355rem_+_1.26vw)] hover:translate-y-0 inline-flex items-center justify-center leading-none p-0 !rounded-[100%]  before:content-[''] before:block before:absolute before:opacity-80 before:animate-[ripple-1_2s_infinite_ease-in-out] before:z-[-1] before:rounded-[50%] before:inset-0 before:bg-[#ffffff] after:content-[''] after:block after:absolute after:opacity-60 after:animate-[ripple-2_2s_infinite_ease-in-out] after:z-[-1] after:rounded-[50%] after:inset-0 after:bg-[#ffffff]"
                                        data-glightbox><i
                                            class="icn-caret-right ml-[0.15rem] !relative z-[2] before:content-['\e900'] text-[calc(1.355rem_+_1.26vw)]"></i></a>
                                </div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.swiper-slide -->
                {{-- <div class="swiper-slide bg-overlay bg-overlay-400  bg-[#21262c] opacity-100  bg-image !bg-cover !bg-[center_center] !h-[750px] before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.4)]"
                    data-image-src="{{ asset('home') }}/assets/img/photos/wd3.jpg">
                    <div class="container !h-full">
                        <div class="flex flex-wrap mx-[-15px] !h-full">
                            <div
                                class="md:w-10/12 md:!ml-[8.33333333%] lg:w-7/12 lg:!ml-[41.66666667%] xl:w-6/12 xl:!ml-[50%] xxl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full xxl:!ml-[50%] text-center lg:text-left xl:text-left justify-center self-center items-start">
                                <h2
                                    class="xl:text-[2.8rem] !leading-[1.2] font-bold text-[calc(1.405rem_+_1.86vw)] mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                    Kenalan lebih jauh</h2>
                                <p
                                    class="lead text-[1.15rem] leading-normal mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                    Kenali siapa saja pejabat di Kabupaten Kolaka Utara</p>
                                <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="https://kolutkab.go.id/pejabat-di-kolaka-utara/" target="_blank"
                                        class="btn btn-lg btn-outline-white !text-white bg-[#ffffff] !border-white !border-[2px] hover:!text-[#343f52] hover:bg-[#ffffff] hover:border-white focus:shadow-[rgba(255,255,255,1)] active:!text-[#343f52] active:bg-[#ffffff] active:border-white disabled:text-white disabled:bg-transparent disabled:border-white !rounded-[50rem]">Yuk cari tau disini</a></div>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/.container -->
                </div> --}}
                <!--/.swiper-slide -->
            </div>
            <!--/.swiper-wrapper -->
        </div>
        <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
</section>
<section
    class="wrapper !bg-[#ffffff]  angled lower-end relative after:bottom-[-4rem] after:border-l-transparent after:border-r-[100vw] after:border-b-[4rem] after:border-[#fefefe] after:content-[''] after:block after:absolute after:z-0 after:!border-y-transparent after:border-0 after:border-solid after:right-0">
    <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
        <div
            class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px] mt-[-50px] !mb-[4.5rem] xl:!mb-[7rem] lg:!mb-[7rem] md:!mb-[7rem] items-center">
            <div
                class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full !relative xl:!order-2 lg:!order-2">
                <div class="shape bg-dot primary bg-[radial-gradient(#3f78e0_2px,transparent_2.5px)] rellax !w-[6rem] !h-[10rem] absolute z-[1] opacity-50"
                    data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                <div class="flex flex-wrap !relative overlap-grid-2">
                    <div
                        class="item xl:w-[70%] xl:z-[3] xl:ml-[30%] xl:mt-0 lg:w-[70%] lg:z-[3] lg:ml-[30%] lg:mt-0 md:w-[70%] md:z-[3] md:ml-[30%] md:mt-0">
                        <figure class="!rounded-[.4rem] shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] relative"><img
                                class="!rounded-[.4rem] " src="{{ asset('home') }}/assets/img/photos/wd9.jpg"
                                srcset="./assets/img/photos/about2@2x.jpg 2x" alt="image"></figure>
                    </div>
                    <div
                        class="item xl:w-[55%] xl:mt-[-45%] xl:z-[4] xl:ml-0 lg:w-[55%] lg:mt-[-45%] lg:z-[4] lg:ml-0 md:w-[55%] md:mt-[-45%] md:z-[4] md:ml-0">
                        <figure class="!rounded-[.4rem] shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] relative"><img
                                class="!rounded-[.4rem] " src="{{ asset('home') }}/assets/img/photos/wd10.jpg"
                                srcset="./assets/img/photos/about3@2x.jpg 2x" alt="image"></figure>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div
                class="xl:w-6/12 lg:w-6/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] mt-[50px] max-w-full">
                <img src="{{ asset('home') }}/assets/img/icons/lineal/megaphone.svg"
                    class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] mb-4" alt="image">
                <h2 class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] leading-[1.3] !mb-3">Tentang Kolut?</h2>
                <p class="!mb-6">Event Kolaka Utara adalah acara yang diselenggarakan untuk mempromosikan wisata, seni, dan budaya daerah Kolaka Utara, Sulawesi Tenggara. Acara ini biasanya melibatkan pertunjukan seni dan pameran produk lokal</p>

                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="flex flex-wrap mx-[-15px] mb-5">
            <div
                class="md:w-10/12 lg:w-10/12 xl:w-8/12 xxl:w-7/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !text-center">
                <img src="{{ asset('home') }}/assets/img/icons/lineal/list.svg"
                    class="svg-inject icon-svg icon-svg-md !w-[2.6rem] !h-[2.6rem] mb-4 m-[0_auto]" alt="image">
                <h2
                    class="text-[calc(1.305rem_+_0.66vw)] font-bold xl:text-[1.8rem] !leading-[1.3] mb-4 xl:!px-[4.5rem] lg:!px-[4.5rem]">
                    Apa kata mereka?</h2>
            </div>
            <!-- /column -->
        </div>

        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper !bg-[#edf2fc]">
    <div class="container pt-24 pb-[4.5rem] xl:pb-0 lg:pb-0 md:pb-0">
        <div class="flex flex-wrap mx-[-15px] lg:mx-[-20px] xl:mx-0 items-center">
            <div
                class="md:w-5/12 lg:w-5/12 xl:w-4/12 w-full flex-[0_0_auto] px-[15px] lg:px-[20px] xl:px-0 max-w-full xl:!ml-[8.33333333%] xsm:!hidden sm:!hidden md:!hidden xl:!flex lg:!flex !relative !self-end">
                <div class="shape !rounded-[50%] !bg-[#e0e9fa] rellax !w-[12.5rem] !h-[12.5rem] hidden xl:block lg:block z-[1] absolute"
                    data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                <figure class=" relative z-[2]"><img class="w-full max-w-full !h-auto"
                        src="{{ asset('home') }}/assets/img/photos/co1.png" srcset="./assets/img/photos/co1@2x.png 2x"
                        alt="image">
                </figure>
            </div>
            <!--/column -->
            <div
                class="md:w-7/12 lg:w-6/12 xl:w-6/12 xxl:w-5/12 w-full flex-[0_0_auto] px-[15px] lg:px-[20px] xl:px-0 max-w-full xl:!ml-[8.33333333%]">
                <div class="swiper-container dots-start dots-closer xl:!mt-10 lg:!mt-10 md:!mt-10 xl:!mb-20 lg:!mb-20 md:!mb-20 relative !z-10"
                    data-margin="30" data-dots="true">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($ulasan as $ab)
                            <div class="swiper-slide">
                                <blockquote
                                    class="icon relative p-0 border-0 text-[1rem] leading-[1.7] font-medium m-[0_0_1rem] before:content-['\201d'] before:absolute before:top-[-1.5rem] before:left-[-0.9rem] before:text-[rgba(52,63,82,0.05)] before:text-[10rem] before:leading-none before:z-[1]">
                                    <p>“{{ $ab->ulasan }}”</p>
                                    <div class="flex items-center text-left">
                                        <div class="info !pl-0">
                                            <h5 class="!mb-1 text-[.95rem] !leading-[1.5]">{{ $ab->nama }}</h5>
                                            <p class="!mb-0 text-[0.8rem]">{{ $ab->pekerjaan }}</p>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            @endforeach

                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <a href="#" class="btn btn-outline-gradient gradient-1 !rounded-[50rem] mr-1 mb-2 md:mb-0" data-bs-toggle="modal" data-bs-target="#modal-02"><span>Berikan ulasan untuk kami.</span></a>
                @include('home.modal.ulasan')
                <!-- /.swiper-container -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>


@include('home.layout.footer')
