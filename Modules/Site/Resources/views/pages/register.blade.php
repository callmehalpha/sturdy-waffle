
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name')}} - Bitcoin Investment HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--=== Reset Css ===-->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!--=== Bootstrap ===-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--=== Fontawesome icon ===-->
    <link rel="stylesheet" href="assets/css/font-awesome-5.10.2.min.css">
    <!--=== Owl-Carousel ===-->
    <link rel="stylesheet" href="assets/css/plugin/owl.carousel.min.css">
    <!--=== Magnific Popup===-->
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <!--=== nice-select ===-->
    <link rel="stylesheet" href="assets/css/plugin/nice-select.css">
    <!--=== Main Css ===-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--=== Responsive Css ===-->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<!-- ==========Preloader========== -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ==========Preloader========== -->


<div class="account-section" style="background-image: url('assets/img/account-bg.html');">
    <div class="container">
        <div class="account-title">
            <a href="index-2.html" class="back-home"><i class="fas fa-angle-left"></i><span>Back <span>To
                            {{config('app.name')}}</span></span></a>
            <a href="#0" class="logo">
                <img src="assets/img/logo.svg" alt="logo">
            </a>
        </div>
        <div class="account-wrapper">
            <div class="account-header">
                <h3 class="subtitle">Let's get started</h3>
            </div>

            <div class="account-body">
                <form class="account-form">
                    <div class="form-group">
                        <label for="sign-up">Your Email </label>
                        <input type="text" placeholder="Enter Your Email " id="sign-up">
                    </div>
                    <div class="form-group text-center">
                        <button class="button-1" type="submit">Try It Now</button>
                        <span class="d-block">Already have an account? <a href="{{route('login')}}">Sign
                                    In</a></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="invest">
            <h4 class="slider-heading lasthead ">Invest by over 1,000,000 people worldwide</h4>
        </div>
    </div>
</div>



<!--====== Scroll To Top Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top End ======-->



<!--==================================================================-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/proper-min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--=== All Plugin ===-->
<script src="assets/js/plugin/waypoint.min.js"></script>
<script src="assets/js/plugin/owl.carousel.min.js"></script>
<script src="assets/js/plugin/jquery.rcounter.js"></script>
<script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugin/jquery.nice-select.min.js"></script>

<!--=== All Active ===-->
<script src="assets/js/main.js"></script>


</body>

</html>
