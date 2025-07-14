@extends('frontend.layouts.default')
@section('content')
<section>
    <div class="db">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="db-nav">
                        <div class="db-nav-pro">
                            <img src="{{ asset('frontend/images/profiles/12.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="db-nav-list">
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.dashboard') }}">
                                        <i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="user-profile.html" class="act">
                                        <i class="fa fa-male" aria-hidden="true"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="user-interests.html">
                                        <i class="fa fa-handshake-o" aria-hidden="true"></i>Interests
                                    </a>
                                </li>
                                <li>
                                    <a href="user-chat.html">
                                        <i class="fa fa-commenting-o" aria-hidden="true"></i>Chat list
                                    </a>
                                </li>
                                <li>
                                    <a href="user-plan.html">
                                        <i class="fa fa-money" aria-hidden="true"></i>Plan
                                    </a>
                                </li>
                                <li>
                                    <a href="user-setting.html">
                                        <i class="fa fa-cog" aria-hidden="true"></i>Setting
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-8 db-sec-com">
                            <h2 class="db-tit">Profiles status</h2>
                            <div class="db-profile">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/profiles/12.jpg')}}" loading="lazy" alt="">
                                </div>
                                <div class="edit">
                                    <a href="{{ route('frontend.user_profile_edit') }}" class="cta-dark" target="_blank">Edit profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                            <h2 class="db-tit">Profiles status</h2>
                            <div class="db-pro-stat">
                                <h6>Profile completion</h6>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                        <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">Edid profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">View profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Profile visibility settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="db-pro-pgog">
                                    <span>
                                        <b class="count">90</b>%
                                    </span>
                                </div>
                                <ul class="pro-stat-ic">
                                    <li>
                                        <span>
                                            <i class="fa fa-heart-o like" aria-hidden="true"></i>
                                            <b>12</b>Likes
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-eye view" aria-hidden="true"></i>
                                            <b>12</b>Views
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-handshake-o inte" aria-hidden="true"></i>
                                            <b>12</b>Interests
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fa fa-hand-pointer-o clic" aria-hidden="true"></i>
                                            <b>12</b>Clicks
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 db-sec-com db-pro-stat-pg">
                            <h2 class="db-tit">Profiles views</h2>
                            <div class="db-pro-stat-view-filter cho-round-cor chosenini">
                                <div>
                                    <select class="chosen-select">
                                        <option value="">Current month</option>
                                        <option value="">Jan 2024</option>
                                        <option value="">Fan 2024</option>
                                        <option value="">Mar 2024</option>
                                        <option value="">Apr 2024</option>
                                        <option value="">May 2024</option>
                                        <option value="">Jun 2024</option>
                                    </select>
                                </div>
                            </div>
                            <div class="chartin">
                                <canvas id="Chart_leads"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
