@include('dashboard.layout.head', ['title' => 'Dashboard'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<div class="page-wrapper">
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold text-white">Like Event</p>
                                    <h2 class="mb-0 text-white">{{ $data['like']->count() }}</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14"><i class='bx bxs-up-arrow-circle'></i>
                                        <span>
                                            {{ $data['like']->filter(function ($item) {
                                                return \Carbon\Carbon::parse($item->created_at)->isToday(); // Mengecek apakah tanggalnya hari ini
                                            })->count() }} hari ini
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold text-white">Visitors</p>
                                    <h2 class="mb-0 text-white">{{ $data['lihat']->count() }}</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14"><i class='bx bxs-up-arrow-circle'></i>
                                    <span>
                                        {{ $data['lihat']->filter(function ($item) {
                                            return \Carbon\Carbon::parse($item->created_at)->isToday(); // Mengecek apakah tanggalnya hari ini
                                        })->count() }} hari ini
                                    </span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div>
                                    <p class="mb-0 font-weight-bold text-white">Follow Event</p>
                                    <h2 class="mb-0 text-white">{{ $data['follow']->count() }}</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14"><i class='bx bxs-up-arrow-circle'></i>
                                        <span>
                                            {{ $data['follow']->filter(function ($item) {
                                                return \Carbon\Carbon::parse($item->created_at)->isToday(); // Mengecek apakah tanggalnya hari ini
                                            })->count() }} hari ini
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            {{-- <div class="row">

                <div class="col-12 col-lg-12">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h5 class="mb-4">Devices Monitoring</h5>
                                </div>
                            </div>
                            <div id="chart5"></div>
                        </div>
                        <ul class="list-group list-group-flush mb-0">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                CPU Usage<span class="badge bg-transparent-1 text-white badge-pill">{{ $data['cpuUsage'] }}</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                Memory Usage<span class="badge bg-white badge-pill text-dark">65%</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                Disk Usage<span class="badge bg-transparent-2 text-white badge-pill">10%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@include('dashboard.layout.footer')
