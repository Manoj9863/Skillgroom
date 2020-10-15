@extends('Admin.base')

@section('Content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12">
                <div class="row">
                    @if(Auth::guard('super_admin')->check() || Auth::guard('teacher')->check())
                    <a href="/admin/classes">
                        <div class="col-lg-12 col-md-4">
                            <div class="widget-stat card">
                                <div class="card-body">
                                    <div class="media ai-icon">
                                        <span class="mr-3">
                                            <!-- <i class="ti-user"></i> -->
                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                        <div class="media-body">
                                            <p class="mb-1">Total Class</p>
                                        <h4 class="mb-0">{{$Classes}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endif

                    @if(Auth::guard('super_admin')->check())
                    <a href="/admin/partners">
                    <div class="col-lg-12 col-md-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media ai-icon">
                                    <span class="mr-3">
                                        <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Total Partners</p>
                                        <h4 class="mb-0">{{$Partners}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="/admin/inquiry">
                    <div class="col-lg-12 col-md-4">
                        <div class="widget-stat card">
                            <div class="card-body">
                                <div class="media ai-icon">
                                    <span class="mr-3">
                                        <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </span>
                                    <div class="media-body">
                                        <p class="mb-1">Total Inquiries</p>
                                        <h4 class="mb-0">{{$Inquiry}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection