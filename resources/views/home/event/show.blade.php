@include('home.layout.head')
@include('home.layout.header')
<section class="wrapper image-wrapper bg-image bg-overlay !text-white !bg-fixed bg-no-repeat bg-[center_center] bg-cover relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(30,34,40,.5)]"
data-image-src="{{ asset('home') }}/assets/img/photos/wd8.jpg">
    <div
        class="container pt-10 pb-36 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] xl:pb-40 lg:pb-40 md:pb-40 !text-center">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="md:w-10/12 lg:w-10/12 xl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
                <div class="post-header !mb-[.9rem]">
                    <div
                        class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] mb-[0.4rem]  text-line relative align-top pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                        <a href="#" class="hover" rel="category">{{ $data['event']->nama_kategori }}</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] mb-4" style="color: white">
                        {{ $data['event']->judul }}</h1>
                    <ul class="text-[0.8rem] text-[#aab0bc] m-0 p-0 list-none !mb-5">
                        <li class="post-date inline-block"><i
                                class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span>{{ \Carbon\Carbon::parse($data['event']->created_at)->format('d M Y') }}</span></li>
                        <li
                            class="post-author inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                            <a class="text-[0.8rem] text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                href="#"><i
                                    class="uil uil-user pr-[0.2rem] align-[-.05rem] before:content-['\ed6f']"></i><span>By
                                    {{ $data['event']->nama }}</span></a></li>
                        <li
                            class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                            <a class="text-[0.8rem] text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                href="#"><i
                                    class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>{{ $data['komentar']->count() }}<span>
                                    Comments</span></a></li>
                        <li
                            class="post-likes inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                            <a class="text-[0.8rem] text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]"
                                href="#"><i
                                    class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>{{ $data['like']->count() }}<span>
                                    Likes</span></a></li>
                    </ul>
                    <!-- /.post-meta -->
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
<section class="wrapper !bg-[#ffffff]">
    <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
        <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-10/12 lg:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
                <div class="blog single !mt-[-7rem]">
                    <div class="card">

                        <div
                            class="card-body flex-[1_1_auto] p-[40px] xl:p-[2.8rem_3rem_2.8rem] lg:p-[2.8rem_3rem_2.8rem] md:p-[2.8rem_3rem_2.8rem]">
                            <div class="classic-view">
                                <article class="post mb-8">
                                    <div class="relative mb-5">
                                        {!! $data['event']->deskripsi !!}
                                    </div>
                                    <!-- /.post-content -->
                                    <div
                                        class="post-footer xl:flex xl:!flex-row xl:!justify-between lg:flex lg:!flex-row lg:!justify-between md:flex md:!flex-row md:!justify-between !items-center !mt-8">
                                        <div>
                                            <ul class="pl-0 list-none tag-list  !mb-0">
                                                @foreach ($data['tags'] as $tag)
                                                <li class="mt-0 mb-[0.45rem] mr-[0.2rem] inline-block">
                                                    <a href="javasript:void(0);" class="btn btn-soft-ash btn-sm !rounded-[50rem] flex items-center hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,.05)] before:not-italic before:content-['#'] before:font-normal before:pr-[0.2rem]">
                                                        {{ $tag }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @if (Auth::user() and Auth::user()->role != 'admin')
                                            <div class="mb-0 xl:!mb-2 lg:!mb-2 md:!mb-2">
                                                <div class="dropdown share-dropdown btn-group">
                                                    <a href="{{ route('home.event.like', ['uuid' => request('uuid')]) }}" class="btn btn-sm btn-red text-white !bg-[#e2626b] border-[#e2626b] hover:text-white hover:bg-[#e2626b] hover:border-[#e2626b] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#e2626b] active:border-[#e2626b] disabled:text-white disabled:bg-[#e2626b] disabled:border-[#e2626b] !rounded-[50rem] btn-icon btn-icon-start dropdown-toggle !mb-0 mr-0 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">
                                                        <i class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>
                                                        Suka
                                                    </a>

                                                    <!-- Tombol "Follow" dengan UUID dari request -->
                                                    <a href="{{ route('home.event.follow', ['uuid' => request('uuid')]) }}" class="btn btn-sm btn-red text-white !bg-[#e2626b] border-[#e2626b] hover:text-white hover:bg-[#e2626b] hover:border-[#e2626b] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#e2626b] active:border-[#e2626b] disabled:text-white disabled:bg-[#e2626b] disabled:border-[#e2626b] !rounded-[50rem] btn-icon btn-icon-start dropdown-toggle !mb-0 mr-0 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">
                                                        <i class="uil uil-share-alt mr-[0.3rem] text-[0.8rem] before:content-['\ecb0']"></i>
                                                        Follow
                                                    </a>
                                                </div>
                                                <!--/.share-dropdown -->
                                            </div>
                                        @endif
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr>

                            <div id="comments" class="relative !m-0">
                                <h3 class="!mb-6">{{ $data['komentar']->count() }} Comments</h3>
                                <ol id="singlecomments" class="commentlist m-0 p-0 list-none">
                                    @foreach ($data['komentar'] as $komentar)
                                    <li class="comment mt-8">
                                        <div
                                            class="comment-header xl:flex lg:flex md:flex items-center !mb-[.5rem]">
                                            <div class="flex items-center">
                                                <figure class="w-12 h-12 !relative !mr-4 rounded-[100%]"><img
                                                        class="rounded-[50%]" alt="image"
                                                        src="{{ asset('home') }}/assets/img/avatars/avatar.jpg"></figure>
                                                <div>
                                                    <h6 class=" m-0 mb-[0.2rem]"><a href="#"
                                                            class="text-[#343f52] hover:text-[#3f78e0]">{{ $komentar->nama }}</a></h6>
                                                    <ul class="text-[0.7rem] text-[#aab0bc] m-0 p-0 list-none">
                                                        <li><i
                                                                class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i>{{ \Carbon\Carbon::parse($komentar->created_at)->format('d M Y') }}</li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /div -->
                                            </div>
                                            <!-- /div -->
                                            <!-- /div -->
                                        </div>
                                        <!-- /.comment-header -->
                                        <p>{{ $komentar->komentar }}</p>
                                    </li>
                                    @endforeach

                                </ol>
                            </div>
                            <!-- /#comments -->
                            <hr>
                            <h3 class="!mb-3">Bersedia meluangkan waktu?</h3>
                            <p class="!mb-7">berikan komentar untuk event ini*</p>
                            @if (Auth::user() and Auth::user()->role != 'admin')
                            <form class="comment-form" action="{{ route('home.event.comment') }}" method="POST">
                                @csrf
                                <input type="text" hidden value="{{ $data['event']->uuid }}" name="event_uuid">
                                <div class="form-floating relative !mb-4">
                                    <textarea name="komentar" required
                                        class=" form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]"
                                        placeholder="Comment" style="height: 150px"></textarea>
                                    <label
                                        class="inline-block text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Comment
                                        *</label>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] !mb-0 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">Submit</button>
                            </form>

                            @else
                            <a href="{{ route('login') }}"><h5 class="!mb-3">Maaf, Anda belum login. Silakan login terlebih dahulu untuk mengisi komentar</h5></a>
                            @endif

                            <!-- /.comment-form -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@include('home.layout.footer')
