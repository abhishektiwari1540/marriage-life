@extends('frontend.layouts.default')
@section('content')
<!-- BANNER -->
<section>
    <div class="str">
        <div class="ban-inn ab-ban pg-cont">
            <div class="container">
                <div class="row">
                    <div class="hom-ban">
                        <div class="ban-tit">
                            <span>We are here to assist you.</span>
                            <h1>Contact us</h1>
                            <p>Most Trusted and premium Matrimony Service in the World.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="ab-sec2 pg-cont">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <div class="we-here">
                            <h3>Our office</h3>
                            <p>Most Trusted and premium Matrimony Service in the World.</p>
                            <span><i class="fa fa-phone" aria-hidden="true"></i> +92 (8800) 68 - 8960</span>
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> help@company.com </span>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> 28800 Orchard Lake Road, Suite
                                180 Farmington Hills, U.S.A.</span>
                        </div>
                    </li>
                    <li>
                        <div class="we-cont">
                            <img src="{{ asset('frontend/images/icon/trust.png') }}" alt="">
                            <h4>Customer Relations</h4>
                            <p>Most Trusted and premium Matrimony Service in the World.</p>
                            <a href="#!" class="cta-rou-line">Get Support</a>
                        </div>
                    </li>
                    <li>
                        <div class="we-cont">
                            <img src="{{ asset('frontend/images/icon/telephone.png')}}" alt="">
                            <h4>WhatsApp Support</h4>
                            <p>Most Trusted and premium Matrimony Service in the World.</p>
                            <a href="#!" class="cta-rou-line">Talk to sales</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- REGISTER -->
<section>
    <div class="login pg-cont">
        <div class="container">
            <div class="row">

                <div class="inn">
                    <div class="lhs">
                        <div class="tit">
                            <h2>Now <b>Contact to us</b> Easy and fast.</h2>
                        </div>
                        <div class="im">
                            <img src="{{ asset('frontend/images/login-couple.png')}}" alt="">
                        </div>
                        <div class="log-bg">&nbsp;</div>
                    </div>
                    <div class="rhs">
                        <div>
                            <div class="form-tit">
                                <h4>Let's talk</h4>
                                <h1>Send your enquiry now </h1>
                            </div>
                            <div class="form-login">
                                <form class="cform fvali" method="post" action="https://rn53themes.net/themes/matrimo/mail/mail-contact.php">
                                    <div class="alert alert-success cmessage" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Name:</label>
                                        <input type="text" id="name" class="form-control"
                                            placeholder="Enter your full name" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Email:</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Enter email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Phone:</label>
                                        <input type="number" class="form-control" id="phone"
                                            placeholder="Enter phone number" name="phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="lb">Message:</label>
                                        <textarea name="message" class="form-control" id="message"
                                            placeholder="Enter message" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Enquiry</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END -->

<!-- START -->
<section>
    <div class="ab-team pg-abo-ab-team">
        <div class="container">
            <div class="row">
                <div class="home-tit">
                    <p>OUR PROFESSIONALS</p>
                    <h2><span>Meet Our Team</span></h2>
                    <span class="leaf1"></span>
                </div>
                <ul>
                    <li>
                        <div>
                            <img src="{{ asset('frontend/images/profiles/6.jpg')}}" alt="" loading="lazy">
                            <h4>Ashley Jen</h4>
                            <p>Marketing Manager</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('frontend/images/profiles/7.jpg')}}" alt="" loading="lazy">
                            <h4>Ashley Jen</h4>
                            <p>Marketing Manager</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('frontend/images/profiles/8.jpg')}}" alt="" loading="lazy">
                            <h4>Emily Arrov</h4>
                            <p>Creative Manager</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="{{ asset('frontend/images/profiles/9.jpg')}}" alt="" loading="lazy">
                            <h4>Julia sear</h4>
                            <p>Client Coordinator</p>
                            <ul class="social-light">
                                <li><a href="#!"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@stop
