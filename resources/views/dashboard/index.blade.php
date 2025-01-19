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
                                    <p class="mb-0 font-weight-bold text-white">Sessions</p>
                                    <h2 class="mb-0 text-white">501</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14"><i class='bx bxs-up-arrow-circle'></i> <span>1.01% 31 days
                                            ago</span>
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
                                    <h2 class="mb-0 text-white">409</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14"><i class='bx bxs-up-arrow-circle'></i> <span>0.49% 31 days
                                            ago</span>
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
                                    <p class="mb-0 font-weight-bold text-white">Page Views</p>
                                    <h2 class="mb-0 text-white">2,346</h2>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <p class="mb-0 font-14"><i class='bx bxs-down-arrow-circle'></i> <span>130.68% 31
                                            days ago</span>
                                    </p>
                                </div>
                            </div>
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card radius-15">
                        <div class="card-header border-bottom-0">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h5 class="mb-lg-0">New VS Returning Visitors</h5>
                                </div>
                                <div class="ml-lg-auto mb-2 mb-lg-0">
                                    <div class="btn-group-round">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light">This Month</button>
                                            <div class="dropdown-menu"> <a class="dropdown-item"
                                                    href="javaScript:;">This Week</a>
                                                <a class="dropdown-item" href="javaScript:;">This Year</a>
                                            </div>
                                            <button type="button"
                                                class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span
                                                    class="sr-only">Toggle Dropdown</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="chart4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="d-lg-flex align-items-center">
                                <div>
                                    <h5 class="mb-4">Devices of Visitors</h5>
                                </div>
                            </div>
                            <div id="chart5"></div>
                        </div>
                        <ul class="list-group list-group-flush mb-0">
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                Mobile<span class="badge bg-transparent-1 text-white badge-pill">25%</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                Desktop<span class="badge bg-white badge-pill text-dark">65%</span>
                            </li>
                            <li
                                class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                                Tablet<span class="badge bg-transparent-2 text-white badge-pill">10%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page-content-wrapper-->
</div>
@include('dashboard.layout.footer')
