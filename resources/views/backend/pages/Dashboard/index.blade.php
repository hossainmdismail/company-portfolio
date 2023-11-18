@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-xxl-12 mr-auto">
                            <div class="d-sm-flex d-block align-items-center">
                                <img src="images/illustration.png" alt="" class="mw-100 mr-3">
                                <div>
                                    <h4 class="fs-20 text-black">Welcome Back <strong>{{ Auth::user()->name }}</strong></h4>
                                    <p class="fs-14 mb-0">We're thrilled to have you here and hope you find everything you
                                        need to manage your account effectively.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-xxl-12 mt-3">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12 col-lg-12">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="d-flex align-items-center mr-3">
                        <span class="p-sm-3 p-2 mr-sm-3 mr-2 rounded-circle bg-secondary">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.625 6.12506H22.75V2.62506C22.75 2.47268 22.7102 2.32295 22.6345 2.19068C22.5589 2.05841 22.45 1.94819 22.3186 1.87093C22.1873 1.79367 22.0381 1.75205 21.8857 1.75019C21.7333 1.74832 21.5831 1.78629 21.4499 1.86031L14 5.99915L6.55007 1.86031C6.41688 1.78629 6.26667 1.74832 6.11431 1.75019C5.96194 1.75205 5.8127 1.79367 5.68136 1.87093C5.55002 1.94819 5.44113 2.05841 5.36547 2.19068C5.28981 2.32295 5.25001 2.47268 5.25 2.62506V6.12506H4.375C3.67904 6.12582 3.01181 6.40263 2.51969 6.89475C2.02757 7.38687 1.75076 8.0541 1.75 8.75006V11.3751C1.75076 12.071 2.02757 12.7383 2.51969 13.2304C3.01181 13.7225 3.67904 13.9993 4.375 14.0001H5.25V23.6251C5.25076 24.321 5.52757 24.9882 6.01969 25.4804C6.51181 25.9725 7.17904 26.2493 7.875 26.2501H20.125C20.821 26.2493 21.4882 25.9725 21.9803 25.4804C22.4724 24.9882 22.7492 24.321 22.75 23.6251V14.0001H23.625C24.321 13.9993 24.9882 13.7225 25.4803 13.2304C25.9724 12.7383 26.2492 12.071 26.25 11.3751V8.75006C26.2492 8.0541 25.9724 7.38687 25.4803 6.89475C24.9882 6.40263 24.321 6.12582 23.625 6.12506ZM21 6.12506H17.3769L21 4.11256V6.12506ZM7 4.11256L10.6231 6.12506H7V4.11256ZM7 23.6251V14.0001H13.125V24.5001H7.875C7.64303 24.4998 7.42064 24.4075 7.25661 24.2434C7.09258 24.0794 7.0003 23.857 7 23.6251ZM21 23.6251C20.9997 23.857 20.9074 24.0794 20.7434 24.2434C20.5794 24.4075 20.357 24.4998 20.125 24.5001H14.875V14.0001H21V23.6251ZM24.5 11.3751C24.4997 11.607 24.4074 11.8294 24.2434 11.9934C24.0794 12.1575 23.857 12.2498 23.625 12.2501H4.375C4.14303 12.2498 3.92064 12.1575 3.75661 11.9934C3.59258 11.8294 3.5003 11.607 3.5 11.3751V8.75006C3.5003 8.51809 3.59258 8.2957 3.75661 8.13167C3.92064 7.96764 4.14303 7.87536 4.375 7.87506H23.625C23.857 7.87536 24.0794 7.96764 24.2434 8.13167C24.4074 8.2957 24.4997 8.51809 24.5 8.75006V11.3751Z"
                                    fill="rgb(255, 255, 255)"></path>
                            </svg>
                        </span>
                        <h4 class="fs-20 text-black mb-0">{{ $total }} <sup>Messages</sup></h4>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table shadow-hover">
                            <thead>
                                <tr>
                                    <th><span class="font-w600 text-black fs-16">Information</span></th>
                                    <th><span class="font-w600 text-black fs-16">Message</span></th>
                                    <th><span class="font-w600 text-black fs-16">Action</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notifications as $notification)
                                    <tr>
                                        <td>
                                            <p class="text-black mb-1 font-w600">{{ $notification->name }}</p>
                                            <span class="fs-14">{{ $notification->email }}</span> <br>
                                            <span class="fs-14">{{ $notification->number }}</span>
                                        </td>
                                        <td class="d-block">
                                            {{ $notification->message }}
                                        </td>
                                        <td>
                                            <a href="{{ route('order.nptofoaction.check', $notification->id) }}"
                                                class="fs-14">Mark</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-4 text-center">
                            {{ $notifications->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-6 col-lg-6">
            <div class="card">
                <div class="card-header bg-white">
                    <div class="d-flex mr-3 align-items-center">
                        <span class="p-sm-3 p-2 mr-sm-3 mr-2 rounded-circle bg-secondary">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip1)">
                                    <path
                                        d="M1.70023 22.6666C0.850779 22.8294 0.294244 23.6495 0.456974 24.499C0.600176 25.2476 1.2576 25.7683 1.99314 25.7683C2.09078 25.7683 2.19167 25.7585 2.28931 25.739L8.73339 24.5023C9.10116 24.4307 9.42987 24.2321 9.66421 23.9392L12.4306 20.4503L11.5063 19.9784C10.8229 19.6334 10.3477 19.0085 10.1849 18.2502L7.57476 21.5406L1.70023 22.6666Z"
                                        fill="#fff" />
                                    <path
                                        d="M24.6515 9.06246C26.5461 9.06246 28.0819 7.52664 28.0819 5.63212C28.0819 3.7376 26.5461 2.20178 24.6515 2.20178C22.757 2.20178 21.2212 3.7376 21.2212 5.63212C21.2212 7.52664 22.757 9.06246 24.6515 9.06246Z"
                                        fill="#fff" />
                                    <path
                                        d="M17.166 4.77294C16.8048 4.40191 16.4696 4.25546 16.1018 4.25546C15.9683 4.25546 15.8349 4.27498 15.6917 4.30753L9.80418 5.70375C8.99054 5.89577 8.48933 6.71267 8.68135 7.52306C8.84733 8.21954 9.46571 8.68821 10.1524 8.68821C10.2696 8.68821 10.3868 8.67519 10.504 8.6459L15.5193 7.45797C15.8447 7.81923 17.4753 9.58647 17.7714 9.89891C15.6983 12.1185 13.6251 14.3349 11.5519 16.5545C11.5194 16.5904 11.4901 16.6261 11.4608 16.6619C10.8554 17.4333 11.041 18.644 11.9522 19.1029L18.3084 22.3477L15.0083 27.695C14.5559 28.4306 14.7837 29.3939 15.5192 29.8495C15.7763 30.009 16.0595 30.0839 16.3394 30.0839C16.8634 30.0839 17.3776 29.8202 17.6738 29.3418L21.8657 22.5495C22.0968 22.1752 22.1586 21.7228 22.0382 21.303C21.9178 20.8799 21.6281 20.5284 21.2343 20.3299L16.9285 18.1395L21.4556 13.2967L24.8729 16.1933C25.1561 16.4341 25.5043 16.5513 25.8493 16.5513C26.2203 16.5513 26.5914 16.4146 26.881 16.1477L30.8028 12.4928C31.4147 11.9233 31.4504 10.9664 30.8809 10.3546C30.5815 10.0356 30.1779 9.87288 29.7743 9.87288C29.4066 9.87288 29.0355 10.0063 28.7459 10.2764L25.8102 13.007C25.8069 13.0103 18.4516 6.09104 17.166 4.77294Z"
                                        fill="#fff" />
                                </g>
                                <defs>
                                    <clipPath id="clip1">
                                        <rect width="30.8571" height="30.8571" fill="white"
                                            transform="translate(0.428711 0.714233)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <h4 class="fs-20 text-black mb-0">Coming Soon</h4>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary light btn-md" data-toggle="dropdown"
                            aria-expanded="false">
                            Action
                            <i class="fa fa-chevron-down ml-2" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">

                </div>
            </div>
        </div>

    </div>
@endsection
