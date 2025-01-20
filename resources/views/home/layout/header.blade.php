<header class="relative wrapper !bg-[#edf2fc]">
    <nav class="navbar navbar-expand-lg center-nav transparent !absolute navbar-dark caret-none">
        <div class="container xl:flex-row lg:flex-row !flex-nowrap items-center">
            <div class="navbar-brand w-full">
                <a href=''>
                    <img class="logo-dark" src="{{ asset('home') }}/assets/img/logo-dark.png">
                    <img class="logo-light" src="{{ asset('home') }}/assets/img/logo-light.png">
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div
                    class="offcanvas-header xl:hidden lg:hidden flex items-center justify-between flex-row p-6">
                    <h3 class="text-white xl:text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Kolaka Utara</h3>
                    <button type="button"
                        class="btn-close btn-close-white mr-[-0.75rem] m-0 p-0 leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0"
                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body xl:!ml-auto lg:!ml-auto flex  flex-col !h-full">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link font-bold !tracking-[-0.01rem]" href="{{ route('home.index') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold !tracking-[-0.01rem]" href="{{ route('home.event') }}">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold !tracking-[-0.01rem]" href="{{ route('home.galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold !tracking-[-0.01rem]" href="{{ route('home.about') }}">Tentang</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->

                    <div class="offcanvas-footer xl:hidden lg:hidden">
                        <div>
                            <a href="https://berita.kolutkab.go.id/" class="link-inverse">Berita Kolaka Utara</a>
                            <br> +62 822-5967-9687 <br>
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
                    <li class="nav-item">
                        <a class="nav-link font-bold !tracking-[-0.01rem]" href="{{ route('home.kontak') }}">Hubungi Kami</a>
                    </li>
                  @if (!Auth::user())
                  <li class="nav-item hidden xl:block lg:block md:block">
                    <a class='btn btn-sm btn-white !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]' href='{{ route('login') }}'>Masuk</a>
                  </li>
                  @endif
                  @if (Auth::user() and Auth::user()->role == 'admin')
                  <li class="nav-item hidden xl:block lg:block md:block">
                    <a class='btn btn-sm btn-white !rounded-[50rem] hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]' href='{{ route('dashboard.index') }}'>Dashboard</a>
                  </li>
                  @endif
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
    <!--/.modal -->
    <div class="offcanvas offcanvas-end text-inverse !text-[#cacaca] opacity-100" id="offcanvas-info"
        data-bs-scroll="true">
        <div class="offcanvas-header flex flex-row items-center justify-between p-[1.5rem]">
            <h3 class="text-white xl:!text-[1.5rem] text-[calc(1.275rem_+_0.3vw)] !leading-[1.4] mb-0">Kolaka Utara
            </h3>
            <button type="button" class="btn-close btn-close-white mr-[-0.5rem] m-0 p-0"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body !pb-[1.5rem]">
            <div class="widget mb-8">
                <p>Kabupaten Kolaka Utara, yang terletak di Provinsi Sulawesi Tenggara, Indonesia, adalah daerah yang menyimpan banyak potensi alam dan budaya yang menakjubkan. Dikenal dengan keindahan alamnya, Kolaka Utara menawarkan pemandangan alam yang memukau, seperti pantai-pantai indah, pegunungan, dan air terjun yang menawan</p>
            </div>
            <!-- /.widget -->

            <!-- /.widget -->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->
    <div class="offcanvas offcanvas-top !bg-[#ffffff] " id="offcanvas-search" data-bs-scroll="true">
        <div class="container flex flex-row py-6">
            <form
                class=" search-form relative before:content-['\eca5'] before:block before:absolute before:-translate-y-2/4 before:text-[1rem] before:text-[#343f52] before:z-[1] before:right-auto before:top-2/4 before:font-Unicons w-full before:left-0 focus:!outline-offset-0 focus:outline-0">
                <input id="search-form1" type="text"
                    class="form-control text-[0.8rem] !shadow-none pl-[1.75rem] !pr-[.75rem] border-0 bg-inherit m-0 block w-full font-medium leading-[1.7] text-[#60697b] px-4 py-[0.6rem] rounded-[0.4rem] focus:!outline-offset-0 focus:outline-0"
                    placeholder="Type keyword and hit enter">
            </form>
            <button type="button"
                class="btn-close leading-none text-[#343f52] transition-all duration-[0.2s] ease-in-out p-0 border-0 motion-reduce:transition-none before:text-[1.05rem] before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(0,0,0,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] focus:outline-0"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->
</header>
