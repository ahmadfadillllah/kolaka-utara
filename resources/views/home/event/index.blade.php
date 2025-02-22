@include('home.layout.head', ['title' => 'Event'])
@include('home.layout.header')
<section
    class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white bg-no-repeat bg-[center_center] bg-cover relative z-0 !bg-fixed before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.4)]"
    data-image-src="{{ asset('home') }}/assets/img/photos/wd12.jpg">
    <div
        class="container pt-28 pb-40 xl:pt-36 lg:pt-36 md:pt-36 xl:pb-[12.5rem] lg:pb-[12.5rem] md:pb-[12.5rem] !text-center">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
                <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] mb-3 text-white">
                    Event</h1>
                <nav class="inline-block" aria-label="breadcrumb">
                    <ol class="breadcrumb  flex flex-wrap bg-[none] p-0 !rounded-none list-none mb-[20px]">
                        <li class="breadcrumb-item flex text-[#60697b]"><a class="text-white hover:text-white"
                                href="#">Home</a></li>
                        <li class="breadcrumb-item flex text-white pl-2 before:font-normal before:flex before:items-center before:text-[rgba(255,255,255,.5)] before:content-['\e931'] before:text-[0.9rem] before:-mt-px before:pr-2 before:font-Unicons active"
                            aria-current="page">Event</li>
                    </ol>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<div class="wrapper !bg-[#ffffff]">
    <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">
        <div class="flex flex-wrap mx-[-15px] xl:mx-[-35px] lg:mx-[-20px]">
            <div
                class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full md:px-[20px] lg:px-[20px] xl:px-[35px]">

                <!-- /.blog -->
                <div class="blog itemgrid grid-view">
                    <div
                        class="flex flex-wrap mx-[-15px] isotope xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-40px] !mb-8">
                        @foreach ($data['event'] as $ev)
                        <article
                            class="item post xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[40px] px-[15px] max-w-full">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale group"><a
                                        href="{{ route('home.event.show', $ev->uuid) }}">
                                        <img class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105"
                                            src="{{ asset('storage') }}/{{ $ev->path }}" alt="image"></a>
                                    <figcaption
                                        class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                                        <h5
                                            class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">
                                            Lihat Event</h5>
                                    </figcaption>
                                </figure>
                                <div
                                    class="card-body flex-[1_1_auto] p-[40px] xl:p-[1.75rem_1.75rem_1rem_1.75rem] lg:p-[1.75rem_1.75rem_1rem_1.75rem] md:p-[1.75rem_1.75rem_1rem_1.75rem] sm:pb-4 xsm:pb-4  ">
                                    <div class="post-header !mb-[.9rem]">
                                        <div
                                            class="inline-flex mb-[.4rem] uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] relative align-top pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                                            <a href="#" class="hover" rel="category">{{ $ev->nama_kategori }}</a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 !mt-1 !mb-3"><a
                                                class='text-[#343f52] hover:text-[#3f78e0]'
                                                href='{{ route('home.event.show', $ev->uuid) }}'>{{ $ev->judul }}</a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="!relative">
                                        {!! \Str::words($ev->deskripsi, 30, '...') !!}
                                    </div>
                                    @if ($ev->done == true)
                                        <p class="btn btn-soft-ash btn-sm !rounded-[50rem] flex items-center hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,.05)] before:not-italic before:font-normal before:pr-[0.2rem]">Event telah dilaksanakan</p>
                                    @endif
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div
                                    class="card-footer xl:p-[1.25rem_1.75rem_1.25rem] lg:p-[1.25rem_1.75rem_1.25rem] md:p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                                    <ul class="text-[0.7rem] text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                                        <li class="post-date inline-block"><i
                                                class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>{{ \Carbon\Carbon::parse($ev->created_at)->format('d M Y') }}</span>
                                        </li>
                                        <li
                                            class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                                            <a class="text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                                href="javascript:void();"><i
                                                    class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>{{ $ev->jumlah_komentar }}</a>
                                        </li>
                                        <li class="post-likes !ml-auto inline-block"><a
                                                class="text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                                href="javascript:void();"><i
                                                    class="uil uil-eye pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>{{ $ev->jumlah_lihat }}</a>
                                        </li>

                                        <li class="post-likes !ml-auto inline-block"><a
                                                class="text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                                href="javascript:void();"><i
                                                    class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>{{ $ev->jumlah_like }}</a>
                                        </li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        @endforeach
                        <!-- /.post -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.blog -->
                <!-- Pagination -->
                <nav class="flex" aria-label="pagination">
                    <ul class="pagination">
                        <!-- Previous Page Link -->
                        @if ($data['event']->onFirstPage())
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $data['event']->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        @endif

                        <!-- Page Number Links -->
                        @foreach ($data['event']->getUrlRange(1, $data['event']->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $data['event']->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">
                                {{ $page }}
                            </a>
                        </li>
                        @endforeach

                        <!-- Next Page Link -->
                        @if ($data['event']->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $data['event']->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                        @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>


                <!-- /nav -->
            </div>
            <!-- /column -->
            <aside
                class="xl:w-4/12 lg:w-4/12 w-full flex-[0_0_auto] xl:px-[35px] lg:px-[20px] px-[15px] max-w-full sidebar mt-8 xl:!mt-6 lg:!mt-6">
                <div class="widget">
                    <form
                        class="search-form relative before:content-['\eca5'] before:block before:absolute before:-translate-y-2/4 before:text-[0.9rem] before:text-[#959ca9] before:z-[9] before:right-3 before:top-2/4 font-Unicons">
                        <div class="form-floating relative !mb-0">
                            <input id="search-form" type="text" name="event"
                                class="form-control relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]"
                                placeholder="Search">
                            <label for="search-form" class="inline-block text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope
                                ">Cari Event</label>
                        </div>
                    </form>
                </div>
                <!-- /.widget -->
                <div class="widget mt-[40px]">
                    <h4 class="widget-title !mb-3">About Us</h4>
                    <p>Event Kolaka Utara adalah acara yang diselenggarakan untuk mempromosikan wisata, seni, dan budaya
                        daerah Kolaka Utara, Sulawesi Tenggara. Acara ini biasanya melibatkan pertunjukan seni dan
                        pameran produk lokal</p>
                    <nav class="nav social">
                        <a class=" text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                            href="#"><i
                                class=" text-[1rem] text-[#5daed5] before:content-['\ed59'] uil uil-twitter"></i></a>
                        <a class=" text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                            href="#"><i
                                class=" text-[1rem] text-[#4470cf] before:content-['\eae2'] uil uil-facebook-f"></i></a>
                        <a class=" text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                            href="#"><i
                                class=" text-[1rem] text-[#e94d88] before:content-['\eaa2'] uil uil-dribbble"></i></a>
                        <a class=" text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                            href="#"><i
                                class=" text-[1rem] text-[#d53581] before:content-['\eb9c'] uil uil-instagram"></i></a>
                        <a class=" text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                            href="#"><i
                                class=" text-[1rem] text-[#c8312b] before:content-['\edb5'] uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <div class="widget mt-[40px]">
                    <h4 class="widget-title !mb-3">Popular Tourist</h4>
                    <ul class="m-0 p-0 after:content-[''] after:block after:h-0 after:clear-both after:invisible">
                        @foreach ($data['popular'] as $pop)
                        <li class=" clear-both block overflow-hidden">
                            <figure class="!rounded-[.4rem] float-left w-14 !h-[4.5rem]"><a href='blog-post.html'><img
                                        class="!rounded-[.4rem]" src="{{ asset('storage') }}/{{ $pop->path }}" alt="image"></a>
                            </figure>
                            <div class="!relative ml-[4.25rem] mb-0">
                                <h6 class="!mb-2"> <a class='text-[#343f52] hover:text-[#3f78e0]'
                                        href='blog-post.html'>{!! \Str::words($pop->judul, 10, '...') !!}</a> </h6>
                                <ul class="text-[0.7rem] text-[#aab0bc] m-0 p-0 list-none">
                                    <li class="post-date inline-block"><i
                                            class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>{{ \Carbon\Carbon::parse($pop->created_at)->format('d M Y') }}</span></li>
                                    <li
                                        class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                                        <a class="text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                            href="#">
                                            <i class="uil uil-eye pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>{{ $pop->jumlah_lihat }}
                                        </a>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- /.image-list -->
                </div>
                <!-- /.widget -->
                <div class="widget mt-[40px]">
                    <h4 class="widget-title !mb-3">Categories</h4>
                    <ul class="pl-0 list-none bullet-primary !text-inherit">
                        @foreach ($data['kategori'] as $kat)
                        <li
                            class="relative pl-[1rem] before:absolute  before:top-[-0.15rem] before:text-[1rem] before:content-['\2022'] before:left-0 before:font-SansSerif">
                            <a class="text-inherit hover:text-[#3f78e0]"
                                href="{{ url()->current() }}?kategori={{ $kat->nama_kategori }}">{{ $kat->nama_kategori }}
                                ({{ $kat->event_count }})</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget mt-[40px]">
                    <h4 class="widget-title !mb-3">Tags</h4>
                    <ul class="pl-0 list-none tag-list">
                        @foreach ($data['tags'] as $tags)
                        <li class=" mt-0 mb-[0.45rem] mr-[0.2rem] inline-block">
                            <a href="{{ url()->current() }}?tags={{ $tags->nama }}"
                                class="btn btn-soft-ash btn-sm !rounded-[50rem] flex items-center hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,.05)] before:not-italic before:content-['#'] before:font-normal before:pr-[0.2rem]">
                                {{ $tags->nama }}
                            </a>
                        </li>
                        @endforeach

                    </ul>
                </div>

            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

</div>
@include('home.layout.footer')
