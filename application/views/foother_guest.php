

<!--small footer start -->
<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-7 pdl">
                <div class="row">
                    <div class="col-sm-4 pdl widget">
                        <h3 class="entry-title">Get to know us</h3>
                        <ul class="entry-list">
                            <li><a href="<?php echo base_url(); ?>page/about">About us</a></li>
                            <li><a href="<?php echo base_url(); ?>page/ourmission">Our Mission</a></li>
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">How it Works</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-4 widget ">
                        <h3 class="entry-title">Explore</h3>
                        <ul class="entry-list">
                            <li><a href="<?php echo base_url(); ?>home/registration">Registration</a></li>
                            <li><a href="<?php echo base_url(); ?>home/login">Login</a></li>
                            <li><a href="<?php echo base_url(); ?>home/forgotpassword">Forget Password</a></li>
                            <li><a href="#">Support</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-4 widget pdr">
                        <h3 class="entry-title">Resources</h3>
                        <ul class="entry-list">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Blog</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 pdr">
                <div class="newsletter-widget widget">
                    <h3 class="entry-title">Subscribe to latest News from allstudentdoctors</h4>
                        <form class="form-inline">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter Email Address">
                            <button type="submit" class="btn btn-blue">Sign up now</button>
                        </form>
                </div>
                <div class="row">
                    <ul class="social-list">
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <p class="copyright">© 2017 allstudentdoctors.com. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>  <!--footer wrapper-->
<!-- Main jumbotron for a primary marketing message or call to action -->

<script src="<?php echo base_url(); ?>comp/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url(); ?>comp/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>comp/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>comp/js/main.js"></script>
<script src="<?php echo base_url(); ?>backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>comp/js/text-slider.js"></script>
<script>
    $(document).ready(function () {
        $('.slide').textSlider();
    });
</script>
<script>
    $(function () {
        $('.progress-bar').each(function () {
            var t = $(this);
            var barPercentage = t.data('percentage');

            // add a div for the label text
            t.children('.label').append('<div class="label-text"></div>');

            // add some "gimme" percentage when data-percentage is <2
            if (parseInt((t.data('percentage')), 10) < 2) barPercentage = 2;

            // set up the left/right label flipping
            if (barPercentage > 50) {
                t.children('.label').css("right", (100 - barPercentage) + '%');
                t.children('.label').css("margin-right", "-10px");
            }
            if (barPercentage < 51) {
                t.children('.label').css("left", barPercentage + '%');
                t.children('.label').css("margin-left", "-20px");
            }

            // fill in bars and labels
            t.find('.label-text').text(t.attr('data-percentage') + '%');
            t.children('.bar').animate({
                width: barPercentage + '%'
            }, 500);
            t.children('.label').animate({
                opacity: 1
            }, 1000);
        });
    });

</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        //Date picker
        $('#datepicker2').datepicker({
            autoclose: true
        });
        $('#datepicker').datepicker({
            autoclose: true
        });

    });


</script>



</body>
</html>



