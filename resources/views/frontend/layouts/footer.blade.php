
    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            <div class="row foot-supp">
                <h2><span>Free support:</span> +92 (8800) 68 - 8960 &nbsp;&nbsp;|&nbsp;&nbsp; <span>Email:</span>
                    info@example.com</h2>
            </div>
            <div class="row wed-foot-link wed-foot-link-1">
                <div class="col-md-4">
                    <h4>Get In Touch</h4>
                    <p>Address: 3812 Lena Lane City Jackson Mississippi</p>
                    <p>Phone: <a href="tel:+917904462944">+92 (8800) 68 - 8960</a></p>
                    <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>HELP &amp; SUPPORT</h4>
                    <ul>
                        <li><a href="{{  route('frontend.about') }}">About company</a>
                        </li>
                        <li><a href="#!">Contact us</a>
                        </li>
                        <li><a href="#!">Feedback</a>
                        </li>
                        <li><a href="{{  route('frontend.about') }}#faq">FAQs</a>
                        </li>
                        <li><a href="{{  route('frontend.about') }}#testimonials">Testimonials</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 fot-soc">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#!"><img src="{{ asset('frontend/images/social/1.png')}}" alt="" loading="lazy"></a></li>
                        <li><a href="#!"><img src="{{ asset('frontend/images/social/2.png')}}" alt="" loading="lazy"></a></li>
                        <li><a href="#!"><img src="{{ asset('frontend/images/social/3.png')}}" alt="" loading="lazy"></a></li>
                        <li><a href="#!"><img src="{{ asset('frontend/images/social/5.png')}}" alt="" loading="lazy"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row foot-count">
                <p>Company name Site - Trusted by over thousands of Boys & Girls for successfull marriage. <a
                        href="{{  route('frontend.sign_up') }}" class="btn btn-primary btn-sm">Join us today !</a></p>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- COPYRIGHTS -->
    <section>
        <div class="cr">
            <div class="container">
                <div class="row">
                    <p>Copyright © <span id="cry">2023</span> <a href="#!" target="_blank">Company.com</a> All
                        rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/select-opt.js')}}"></script>
    <script src="{{ asset('frontend/js/slick.js')}}"></script>
    <script src="{{ asset('frontend/js/custom.js')}}"></script>
    <script>
        //COMMON SLIDER
   $('.slider').slick({
       infinite: false,
       slidesToShow: 5,
       arrows: false,
       slidesToScroll: 1,
       autoplay: true,
       autoplaySpeed: 3000,
       dots: false,
       responsive: [{
           breakpoint: 992,
           settings: {
               slidesToShow: 3,
               slidesToScroll: 1,
               centerMode: false
           }
       }]

   });

   $('.count').each(function () {
   $(this).prop('Counter',0).animate({
       Counter: $(this).text()
   }, {
       duration: 4000,
       easing: 'swing',
       step: function (now) {
           $(this).text(Math.ceil(now));
       }
   });
});

var xValues = "0";
   var yValues = "50";

   new Chart("Chart_leads", {
       type: "line",
       data: {
           labels: xValues,
           datasets: [{
               fill: false,
               lineTension: 0,
               backgroundColor: "#f1bb51",
               borderColor: "#fae9c8",
               data: yValues
           }]
       },
       options: {
           responsive: true,
           legend: {display: false},
           scales: {
               yAxes: [{ticks: {min: 0, max: 100}}]
           }
       }
   });
   </script>
</body>

</html>
