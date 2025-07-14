@extends('frontend.layouts.default')
@section('content')
    <!-- LOGIN -->
    <section>
        <div class="db">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="db-nav">
                            <div class="db-nav-pro"><img src="{{ asset('frontend/images/profiles/12.jpg')}}" class="img-fluid" alt=""></div>
                            <div class="db-nav-list">
                                <ul>
                                    <li><a href="user-dashboard.html" class="act"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                                    <li><a href="user-profile.html"><i class="fa fa-male" aria-hidden="true"></i>Profile</a></li>
                                    <li><a href="user-interests.html"><i class="fa fa-handshake-o" aria-hidden="true"></i>Interests</a></li>
                                    <li><a href="user-chat.html"><i class="fa fa-commenting-o" aria-hidden="true"></i>Chat list</a></li>
                                    <li><a href="user-plan.html"><i class="fa fa-money" aria-hidden="true"></i>Plan</a></li>
                                    <li><a href="user-setting.html"><i class="fa fa-cog" aria-hidden="true"></i>Setting</a></li>
                                    <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="col-md-12 db-sec-com db-new-pro-main">
                            <h2 class="db-tit">New Profiles Matches</h2>
                            <ul class="slider">
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/16.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <div class="pro-ave" title="User currently available">
                                            <span class="pro-ave-yes"></span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/2.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/3.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/4.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/5.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/6.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <div class="pro-ave" title="User currently available">
                                            <span class="pro-ave-yes"></span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="db-new-pro">
                                        <img src="{{ asset('frontend/images/profiles/14.jpg')}}" alt="" class="profile">
                                        <div>
                                            <h5>Julia ann</h5>
                                            <span class="city">New york</span>
                                            <span class="age">22 Years old</span>
                                        </div>
                                        <div class="pro-ave" title="User currently available">
                                            <span class="pro-ave-yes"></span>
                                        </div>
                                        <a href="profile-details.html" class="fclick" target="_blank">&nbsp;</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                                <h2 class="db-tit">Profiles status</h2>
                                <div class="db-pro-stat">
                                    <h6>Profile completion</h6>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                          <li><a class="dropdown-item" href="#">View profile</a></li>
                                          <li><a class="dropdown-item" href="#">Profile visibility settings</a></li>
                                        </ul>
                                      </div>
                                    <div class="db-pro-pgog">
                                        <span><b class="count">90</b>%</span>
                                    </div>
                                    <ul class="pro-stat-ic">
                                        <li><span><i class="fa fa-heart-o like" aria-hidden="true"></i><b>12</b>Likes</span></li>
                                        <li><span><i class="fa fa-eye view" aria-hidden="true"></i><b>12</b>Views</span></li>
                                        <li><span><i class="fa fa-handshake-o inte" aria-hidden="true"></i><b>12</b>Interests</span></li>
                                        <li><span><i class="fa fa-hand-pointer-o clic" aria-hidden="true"></i><b>12</b>Clicks</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 col-xl-4 db-sec-com">
                                <h2 class="db-tit">Plan details</h2>
                                <div class="db-pro-stat">
                                    <h6 class="tit-top-curv">Standard plan</h6>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                          <li><a class="dropdown-item" href="#">View profile</a></li>
                                          <li><a class="dropdown-item" href="#">Plan change</a></li>
                                          <li><a class="dropdown-item" href="#">Download invoice now</a></li>
                                        </ul>
                                    </div>
                                    <div class="db-plan-card">
                                        <img src="{{ asset('frontend/images/icon/plan.png')}}" alt="">
                                    </div>
                                    <div class="db-plan-detil">
                                        <ul>
                                            <li>Plan name: <strong>Standard</strong></li>
                                            <li>Validity: <strong>6 Months</strong></li>
                                            <li>Valid till <strong>24 June 2024</strong></li>
                                            <li><a href="#" class="cta-3">Upgrade now</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-4 db-sec-com">
                                <h2 class="db-tit">Recent chat list</h2>
                                    <div class="db-pro-stat">
                                        <div class="db-inte-prof-list db-inte-prof-chat">
                                            <ul>
                                                <li>
                                                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/2.jpg')}}" alt=""> </div>
                                                    <div class="db-int-pro-2">
                                                        <h5>Julia Ann</h5> <span>Illunois, United States</span> </div>
                                                </li>
                                                <li>
                                                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/16.jpg')}}" alt=""> </div>
                                                    <div class="db-int-pro-2">
                                                        <h5>Julia Ann</h5> <span>Illunois, United States</span> </div>
                                                </li>
                                                <li>
                                                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/13.jpg')}}" alt=""> </div>
                                                    <div class="db-int-pro-2">
                                                        <h5>Julia Ann</h5> <span>Illunois, United States</span> </div>
                                                </li>
                                                <li>
                                                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/14.jpg')}}" alt=""> </div>
                                                    <div class="db-int-pro-2">
                                                        <h5>Julia Ann</h5> <span>Illunois, United States</span> </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 db-sec-com">
                                <h2 class="db-tit">Interest request</h2>
                                <div class="db-pro-stat">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="dropdown">
                                            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="#">Edid profile</a></li>
                                          <li><a class="dropdown-item" href="#">View profile</a></li>
                                          <li><a class="dropdown-item" href="#">Plan change</a></li>
                                          <li><a class="dropdown-item" href="#">Download invoice now</a></li>
                                        </ul>
                                    </div>
                                    <div class="db-inte-main">

                                          <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                              <a class="nav-link active" data-bs-toggle="tab" href="#home">New requests</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" data-bs-toggle="tab" href="#menu1">Accept request</a>
                                            </li>
                                            <li class="nav-item">
                                              <a class="nav-link" data-bs-toggle="tab" href="#menu2">Denay request</a>
                                            </li>
                                          </ul>
                                          <!-- Tab panes -->
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <div class="db-inte-prof-list">
            <ul>
                <li>
                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/men1.jpg')}}" alt=""> <span class="badge bg-primary user-pla-pat">Platinum user</span></div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5>
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
                <li>
                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/men2.jpg')}}" alt=""> <span class="badge bg-primary user-pla-gold">Gold user</span></div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5>
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
                <li>
                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/men3.jpg')}}" alt=""> <span class="badge bg-primary user-pla-free">Free user</span></div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5>
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
                <li>
                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/men4.jpg')}}" alt=""> </div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5>
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
        <div class="db-inte-prof-list">
            <ul>
                <li>
                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/men5.jpg')}}" alt=""> </div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5>
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                            <li>Accept on: 3:000 PM, 21 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-outline-danger btn-sm">Denay</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        <div class="db-inte-prof-list">
            <ul>
                <li>
                    <div class="db-int-pro-1"> <img src="{{ asset('frontend/images/profiles/men1.jpg')}}" alt=""> </div>
                    <div class="db-int-pro-2">
                        <h5>John Smith</h5>
                        <ol class="poi">
                            <li>City: <strong>Illunois</strong></li>
                            <li>Age: <strong>21</strong></li>
                            <li>Height: <strong>5.7</strong></li>
                            <li>Job: <strong>Working</strong></li>
                        </ol>
                        <ol class="poi poi-date">
                            <li>Request on: 10:30 AM, 18 August 2024</li>
                            <li>Denay on: 3:000 PM, 21 August 2024</li>
                        </ol>
                        <a href="profile-details.html" class="cta-5" target="_blank">View full profile</a>
                    </div>
                    <div class="db-int-pro-3">
                        <button type="button" class="btn btn-success btn-sm">Accept</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 db-sec-com">
                                <h2 class="db-tit">Profiles views</h2>
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
    <!-- END -->


@stop
