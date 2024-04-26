@extends('layouts._default.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-sm-12 col-12">

            <div class="profile-header">
                <h1>Selamat Datang, {{ auth()->user()->name }}</h1>
                <div class="profile-header-content">
                    <div class="profile-header-tiles">
                        <div class="row gutters">
                            <div class="col-sm-4 col-12">
                                <div class="profile-tile">
                                    <span class="icon">
                                        <i class="bi bi-pentagon"></i>
                                    </span>
                                    <h6>Name - <span>{{ auth()->user()->name }}</span></h6>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="profile-tile">
                                    <span class="icon">
                                        <i class="bi bi-pin-angle"></i>
                                    </span>
                                    <h6>NIM - <span>{{ auth()->user()->nim }}</span></h6>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="profile-tile">
                                    <span class="icon">
                                        <i class="bi bi-telephone"></i>
                                    </span>
                                    <h6>Phone - <span>1234567890</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-avatar-tile">
                        <img
                            src="{{ auth()->user()->photo ? asset('storage/' . auth()->user()->photo) : asset('icon/default.png') }}"
                            class="img-fluid"
                            alt="Bootstrap Gallery"
                        />
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->

    <!-- Row start -->
    <div class="row gutters">
        <div class="col-lg-8 col-sm-12 col-12">
            <!-- Row start -->
            <div class="row gutters">
                <div class="col-sm-12 col-12">
                    <!-- Card start -->
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Aktivitas</div>
                        </div>
                        <div class="card-body">
                            {{-- <div class="scroll300">
                                <div class="timeline-activity">
                                    <div class="activity-log">
                                        <p class="log-name">Corey Haggard<small class="log-time">- 9
                                                mins ago</small></p>
                                        <div class="log-details">University dashboard has been
                                            created<span class="text-success ml-1"> #New</span>
                                        </div>
                                    </div>
                                    <div class="activity-log">
                                        <p class="log-name">Gleb Kuznetsov<small class="log-time">-
                                                4 hrs ago</small></p>
                                        <div class="log-details">
                                            Farewell day photos uploaded.
                                            <div class="stacked-images mt-1">
                                                <img
                                                    class="sm"
                                                    src="{{ asset('arise/design') }}/assets/images/user6.png"
                            alt="Admin Dashboards"
                            >
                            <img
                                class="sm"
                                src="{{ asset('arise/design') }}/assets/images/user2.png"
                                alt="Admin Dashboards"
                            >
                            <img
                                class="sm"
                                src="{{ asset('arise/design') }}/assets/images/user3.png"
                                alt="Admin Dashboards"
                            >
                            <img
                                class="sm"
                                src="{{ asset('arise/design') }}/assets/images/user7.png"
                                alt="Admin Dashboards"
                            >
                            <span class="plus sm">+5</span>
                        </div>
                    </div>
                </div>
                <div class="activity-log">
                    <p class="log-name">Emily Russell<small class="log-time">- 7
                            hrs ago</small></p>
                    <div class="log-details">Developed 30 multipurpose Bootstrap
                        4 Admin Templates</div>
                </div>
                <div class="activity-log">
                    <p class="log-name">Nathan James<small class="log-time">- 9
                            hrs ago</small></p>
                    <div class="log-details">Best Design Award</div>
                </div>
                <div class="activity-log">
                    <p class="log-name">Gleb Kuznetsov<small class="log-time">-
                            4 hrs ago</small></p>
                    <div class="log-details">
                        Farewell day photos uploaded.
                        <div class="stacked-images mt-1">
                            <img
                                class="sm"
                                src="{{ asset('arise/design') }}/assets/images/user5.png"
                                alt="Admin Dashboards"
                            >
                            <img
                                class="sm"
                                src="{{ asset('arise/design') }}/assets/images/user.png"
                                alt="Admin Dashboards"
                            >
                            <span class="plus sm">+7</span>
                        </div>
                    </div>
                </div>
                <div class="activity-log">
                    <p class="log-name">Emily Russell<small class="log-time">- 3
                            hrs ago</small></p>
                    <div class="log-details">Developed 30 multipurpose Bootstrap
                        4 Admin Templates</div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- Card end -->
</div>
</div>
<!-- Row end -->
</div>
<div class="col-lg-4 col-sm-12 col-12">
    <!-- Row start -->
    <div class="row gutters">
        {{-- <div class="col-sm-6 col-12">
            <!-- Card start -->
            <div class="award-tile shade-green">
                <div class="award-icon">
                    <i class="bi bi-receipt"></i>
                </div>
                <h3>2</h3>
                <h4>Certifications</h4>
            </div>
            <!-- Card end -->
        </div>
        <div class="col-sm-6 col-12">
            <!-- Card start -->
            <div class="award-tile shade-blue">
                <div class="award-icon">
                    <i class="bi bi-gem"></i>
                </div>
                <h3>7</h3>
                <h4>Awards</h4>
            </div>
            <!-- Card end -->
        </div> --}}
        <div class="col-sm-12 col-12">
            <!-- Card start -->
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Kelola</div>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-6 col-lg-6">
                            <a
                                href="{{ route('profile.change-profile') }}"
                                class="d-grid btn btn-sm btn-warning"
                            >Edit Biodata</a>
                        </div>
                        <div class="col-sm-12 col-6 col-lg-6">
                            <a
                                href="{{ route('profile.change-password') }}"
                                class="d-grid btn btn-sm btn-warning"
                            >Ubah Password</a>
                        </div>
                    </div>
                    {{-- <div class="polls-container">
                        <p>Whats your favorite programming language?</p>
                        <div class="poll-block">
                            <div class="poll-block-header">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="inlineRadioOptions"
                                        id="inlineRadio1"
                                        value="option1"
                                    >
                                    <label
                                        class="form-check-label"
                                        for="inlineRadio1"
                                    >Angular</label>
                                </div>
                                <div class="score">180 votes</div>
                            </div>
                            <div class="progress">
                                <div
                                    class="progress-bar progress-bar-striped progress-bar-animated"
                                    role="progressbar"
                                    aria-valuenow="75"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                    style="width: 75%"
                                ></div>
                            </div>
                        </div>
                        <div class="poll-block m-0">
                            <div class="poll-block-header">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="inlineRadioOptions"
                                        id="inlineRadio2"
                                        value="option2"
                                    >
                                    <label
                                        class="form-check-label"
                                        for="inlineRadio2"
                                    >React</label>
                                </div>
                                <div class="score">125 votes</div>
                            </div>
                            <div class="progress">
                                <div
                                    class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                    role="progressbar"
                                    aria-valuenow="45"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                    style="width: 45%"
                                ></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
    <!-- Row end -->
</div>
</div>
<!-- Row end -->

</div>

@endsection
