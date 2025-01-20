<div class="modal fade !m-0 !p-0" id="modal-02" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content !text-center">
            <div
                class="relative flex-auto pt-[2.5rem] pr-[2.5rem] pb-[2.5rem] pl-[2.5rem]">
                <button class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="flex flex-wrap mx-[-15px]">
                    <div
                        class="xl:w-10/12 lg:w-10/12 md:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:!ml-[8.33333333%] lg:!ml-[8.33333333%] md:!ml-[8.33333333%]">
                        <figure class="!mb-6"><img src="{{ asset('home') }}/assets/img/illustrations/3d6.png"
                                srcset="{{ asset('home') }}/assets/img/illustrations/3d6@2x.png 2x"
                                alt="image" width="100px"></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <h3>Berikan Ulasan!</h3>
                <div class="newsletter-wrapper">
                    <div class="flex flex-wrap mx-[-15px]">
                        <div
                            class="xl:w-10/12 lg:w-10/12 md:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full xl:!ml-[8.33333333%] lg:!ml-[8.33333333%] md:!ml-[8.33333333%]">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup">
                                <form action="{{ route('home.ulasan') }}" method="post">
                                    @csrf
                                    <div id="mc_embed_signup_scroll">
                                        <div class="form-floating !relative">
                                            <input id="textInputExample" name="nama" type="text" class=" form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]" placeholder="Text Input">
                                            <label for="textInputExample" class="text-[#959ca9] mb-2 inline-block text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Nama</label>
                                        </div>
                                        <br>
                                        <div class="form-floating !relative">
                                            <input id="textInputExample" name="pekerjaan" type="text" class=" form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]" placeholder="Text Input">
                                            <label for="textInputExample" class="text-[#959ca9] mb-2 inline-block text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Pekerjaan</label>
                                        </div>
                                        <br>
                                        </div>
                                        <div class="form-floating !relative">
                                            <textarea id="textareaExample" name="ulasan" class=" form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]" placeholder="Textarea" style="height: 150px" required></textarea>
                                            <label for="textareaExample" class="text-[#959ca9] mb-2 inline-block text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Ulasan</label>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] btn-sm !rounded-[50rem]">Kirim</button>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.modal-body -->
        </div>
        <!--/.modal-content -->
    </div>
    <!--/.modal-dialog -->
</div>
