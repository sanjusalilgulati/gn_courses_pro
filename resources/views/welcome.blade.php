<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Guru Nank Education, Courses, Amritsar Courses, Best courses Center, Amritsar Best Course center, Nany Courses" />
    <meta name="description" content="At Gurunanak Education Courses, our commitment to empowering education excellence is the cornerstone of our philosophy."/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Guru Nanak Academy</title>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/memenu.css') }}">
    <!-- Styles -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

</head>

<body class="antialiased">
    <div class="header-info">
        <div class="container">
            <div class="header-top-in">

                <ul class="support">
                    <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope">
                            </i>admin@gurunanakedu.com</a></li>
                    <li><span><i class="glyphicon glyphicon-earphone" class="tele-in"> </i>(+91) 7508000377</span></li>
                </ul>
                <ul class=" support-right">
                    <!--<li><a href="account.html"><i class="glyphicon glyphicon-user" class="men"> </i>Login</a></li>-->
                    <!--<li><a href="register.html"><i class="glyphicon glyphicon-lock" class="tele"> </i>Create an Account</a></li>			-->
                </ul>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-top">

            <div class="header-bottom">
                <div class="container">
                    <div class="logo">
                        <h1><a href="index.html">Guru<span>Nanak Academy</span></a></h1>
                    </div>
                    <div class="top-nav">
                        {{-- <ul class="memenu skyblue"> --}}
                            {{-- <li class="active"><a href="index.html">Home</a></li> --}}
                            {{-- <li class="grid">
                                <div class="mepanel">
                                    <div class="row">
                                        <div class="col1 me-one">
                                            <h4>Shop</h4>
                                            <ul> --}}
                                                {{-- <li><a href="about.html">About</a></li> --}}
                                                <!--<li><a href="product.html">Men</a></li>-->
                                                <!--<li><a href="product.html">Women</a></li>-->
                                                <!--<li><a href="product.html">Accessories</a></li>-->
                                                <!--<li><a href="product.html">Kids</a></li>-->
                                                <!--<li><a href="product.html">login</a></li>-->
                                                <!--<li><a href="product.html">Brands</a></li>-->
                                                <!--<li><a href="product.html">My Shopping Bag</a></li>-->
                                            {{-- </ul>
                                        </div>
                                        <div class="col1 me-one">
                                            <h4>Style Zone</h4>
                                            <ul> --}}
                                                <!--<li><a href="product.html">Men</a></li>-->
                                                <!--<li><a href="product.html">Women</a></li>-->
                                                <!--<li><a href="product.html">Brands</a></li>-->
                                                <!--<li><a href="product.html">Kids</a></li>-->
                                                <!--<li><a href="product.html">Accessories</a></li>-->
                                                <!--<li><a href="product.html">Style Videos</a></li>-->
                                            {{-- </ul>
                                        </div> --}}
                                        <!--<div class="col1 me-one">-->
                                        <!--	<h4>Popular Brands</h4>-->
                                        <!--	<ul>-->
                                        <!--		<li><a href="product.html">Levis</a></li>-->
                                        <!--		<li><a href="product.html">Persol</a></li>-->
                                        <!--		<li><a href="product.html">Nike</a></li>-->
                                        <!--		<li><a href="product.html">Edwin</a></li>-->
                                        <!--		<li><a href="product.html">New Balance</a></li>-->
                                        <!--		<li><a href="product.html">Jack & Jones</a></li>-->
                                        <!--		<li><a href="product.html">Paul Smith</a></li>-->
                                        <!--		<li><a href="product.html">Ray-Ban</a></li>-->
                                        <!--		<li><a href="product.html">Wood Wood</a></li>-->
                                        <!--	</ul>	-->
                                        <!--</div>-->
                                    {{-- </div>
                                </div>
                            </li> --}}
                            <!--<li class="grid"><a href="#">Women</a>-->
                            <!--	<div class="mepanel">-->
                            <!--		<div class="row">-->
                            <!--			<div class="col1 me-one">-->
                            <!--				<h4>Shop</h4>-->
                            <!--				<ul>-->
                            <!--					<li><a href="about.html">About</a></li>-->
                            <!--					<li><a href="product.html">Men</a></li>-->
                            <!--					<li><a href="product.html">Women</a></li>-->
                            <!--					<li><a href="product.html">Accessories</a></li>-->
                            <!--					<li><a href="product.html">Kids</a></li>-->
                            <!--					<li><a href="product.html">login</a></li>-->
                            <!--					<li><a href="product.html">Brands</a></li>-->
                            <!--					<li><a href="product.html">My Shopping Bag</a></li>-->
                            <!--				</ul>-->
                            <!--			</div>-->
                            <!--			<div class="col1 me-one">-->
                            <!--				<h4>Style Zone</h4>-->
                            <!--				<ul>-->
                            <!--					<li><a href="product.html">Men</a></li>-->
                            <!--					<li><a href="product.html">Women</a></li>-->
                            <!--					<li><a href="product.html">Brands</a></li>-->
                            <!--					<li><a href="product.html">Kids</a></li>-->
                            <!--					<li><a href="product.html">Accessories</a></li>-->
                            <!--					<li><a href="product.html">Style Videos</a></li>-->
                            <!--				</ul>	-->
                            <!--			</div>-->
                            <!--			<div class="col1 me-one">-->
                            <!--				<h4>Popular Brands</h4>-->
                            <!--				<ul>-->
                            <!--					<li><a href="product.html">Levis</a></li>-->
                            <!--					<li><a href="product.html">Persol</a></li>-->
                            <!--					<li><a href="product.html">Nike</a></li>-->
                            <!--					<li><a href="product.html">Edwin</a></li>-->
                            <!--					<li><a href="product.html">New Balance</a></li>-->
                            <!--					<li><a href="product.html">Jack & Jones</a></li>-->
                            <!--					<li><a href="product.html">Paul Smith</a></li>-->
                            <!--					<li><a href="product.html">Ray-Ban</a></li>-->
                            <!--					<li><a href="product.html">Wood Wood</a></li>-->
                            <!--				</ul>	-->
                            <!--			</div>-->
                            <!--		</div>-->
                            <!--	</div>-->
                            <!--</li>-->
                            <!--<li class="grid"><a href="#">Kids</a>-->
                            <!--	<div class="mepanel">-->
                            <!--		<div class="row">-->
                            <!--			<div class="col1 me-one">-->
                            <!--				<h4>Shop</h4>-->
                            <!--				<ul>-->
                            <!--					<li><a href="about.html">About</a></li>-->
                            <!--					<li><a href="product.html">Men</a></li>-->
                            <!--					<li><a href="product.html">Women</a></li>-->
                            <!--					<li><a href="product.html">Accessories</a></li>-->
                            <!--					<li><a href="product.html">Kids</a></li>-->
                            <!--					<li><a href="product.html">login</a></li>-->
                            <!--					<li><a href="product.html">Brands</a></li>-->
                            <!--					<li><a href="product.html">My Shopping Bag</a></li>-->
                            <!--				</ul>-->
                            <!--			</div>-->
                            <!--			<div class="col1 me-one">-->
                            <!--				<h4>Style Zone</h4>-->
                            <!--				<ul>-->
                            <!--					<li><a href="product.html">Men</a></li>-->
                            <!--					<li><a href="product.html">Women</a></li>-->
                            <!--					<li><a href="product.html">Brands</a></li>-->
                            <!--					<li><a href="product.html">Kids</a></li>-->
                            <!--					<li><a href="product.html">Accessories</a></li>-->
                            <!--					<li><a href="product.html">Style Videos</a></li>-->
                            <!--				</ul>	-->
                            <!--			</div>-->
                            <!--			<div class="col1 me-one">-->
                            <!--				<h4>Popular Brands</h4>-->
                            <!--				<ul>-->
                            <!--					<li><a href="product.html">Levis</a></li>-->
                            <!--					<li><a href="product.html">Persol</a></li>-->
                            <!--					<li><a href="product.html">Nike</a></li>-->
                            <!--					<li><a href="product.html">Edwin</a></li>-->
                            <!--					<li><a href="product.html">New Balance</a></li>-->
                            <!--					<li><a href="product.html">Jack & Jones</a></li>-->
                            <!--					<li><a href="product.html">Paul Smith</a></li>-->
                            <!--					<li><a href="product.html">Ray-Ban</a></li>-->
                            <!--					<li><a href="product.html">Wood Wood</a></li>-->
                            <!--				</ul>	-->
                            <!--			</div>-->
                            <!--		</div>-->
                            <!--	</div>-->
                            <!--</li>-->
                            <!--<li class="grid"><a href="typography.html">Typo</a>-->

                            <!--</li>-->
                            <!--<li class="grid"><a href="contact.html">Contact</a>-->

                            {{-- </li> --}}
                        {{-- </ul> --}}
                        <div class="clearfix"> </div>
                    </div>
                    <!---->
                    <!--<div class="cart box_1">-->
                    <!--	<a href="checkout.html">-->
                    <!--	<h3> <div class="total">-->
                    <!--		<span class="simpleCart_total"> </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> </span>)</div>-->
                    <!--		<img src="images/cart2-2.png" alt=""/></h3>-->
                    <!--	</a>-->
                    <!--	<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>-->
                    <!--	<div class="clearfix"> </div>-->
                    <!--</div>-->

                    <div class="clearfix"> </div>
                    <!---->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="banner">
            <div class="banner-top">
                <h4 class="cert">Verify Certificate / Experience</h4>
                <div class="fit-search centre">
                    <div class="row">
                        <form method="POST" id="ajax-form" action="{{ Route('certificate') }}">
                            @csrf
                            <div class="col-md-9">
                                <input type="text" class="form-control input-lg" required name="cert"
                                    placeholder="Enter Certificate Number">
                                <span class="error" id="error-msg">! No Certificate Found</span>
                            </div>
                            <div class="col-md-3">
                                <input type="submit" class="btn btn-primary input-lg GFG" href="" target="_blank"
                                    value="Search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--<div class="now">-->
            <!--         <a class="morebtn" href="product.html">Explore</a>-->
            <!--         <a class="morebtn at-in" href="single.html">Shop Now</a>-->
            <!--         <div class="clearfix"> </div>-->
            <!--         </div>-->
        </div>
        <div class="clearfix"> </div>
    </div>
    <!---->
    <!---->
    <div class="sap_tabs">
        <div class="container">
            <label class="line"> </label>
            <h2>Guru Nanak Academy : Empowering Education Excelence</h2>
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <div class="col-md-6">
                    <h3>Empowering Education Excellence</h3>
                    <p class="paaragraph-text">
                        At Gurunanak Education Courses, our commitment to empowering education excellence is the cornerstone of our philosophy. We believe that quality education is the key to unlocking individual potential and driving societal progress. Our mission is to provide students with the highest standards of learning, equipping them with the knowledge, skills, and values needed to succeed in a rapidly evolving world.
                    </p>
                </div>

                <div class="col-md-6">
                    <h3>Nurturing Learning Environment</h3>
                    <p class="paaragraph-text">
                        At Gurunanak Education Courses, we believe that a nurturing learning environment is essential for academic success and personal growth. Our institution is designed to provide students with a supportive and inclusive atmosphere where they can thrive.

                        Our experienced and dedicated faculty are at the heart of our nurturing environment. They go beyond traditional teaching methods, offering personalized guidance and mentorship to each student.

                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="box_4">
            <div class="col-md-8 about_left">
                <h3>Education Training Services </h3>
                <img src="images/banner2.jpg" class="img-responsive" alt="" width=100%>
                <p>Providing quality education and training services to help students achieve their academic goals..</p>

            </div>
            <div class="col-md-4 sidebar">
                <h3>Testimonials</h3>
                <div class="testimonials">
                    <h5>Finibus Bonorum Malorum<span><a href="#">http://demolink.org</a></span></h5>
                    <p><span class="quotes"></span>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<span
                            class="quotes-down"></span></p>
                </div>
                <div class="testimonials">
                    <h5>Finibus Bonorum <span><a href="#">http://demolink.org</a></span></h5>
                    <p><span class="quotes"></span>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<span
                            class="quotes-down"></span></p>
                </div>
                <div class="testimonials">
                    <h5>H. Rackham<span><a href="#">http://demolink.org</a></span></h5>
                    <p><span class="quotes"></span>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<span
                            class="quotes-down"></span></p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="bottom-grid2">
        <div class="container">
            <h2 class="choose-us">Why Choose Us...</h2>
        </div>
        <div class="fit2">
            <div class="row">
                <div class="col-md-3 text-center">
                    <img class="icons " src="{{ asset('images/learn.png') }}">
                    <h3>Best Learning Centre</h3>
                    <p>Choose Gurunanak Education Courses, the Best Learning Centre for comprehensive, flexible, and career-oriented education. Empowering you with expert faculty and state-of-the-art facilities for a brighter future.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="icons" src="{{ asset('images/online.png') }}">
                    <h3>Top Courses</h3>
                    <p>Discover top courses at Gurunanak Education Courses, designed to provide cutting-edge knowledge and skills for today's competitive world. Enhance your career with our expertly crafted and comprehensive programs.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="icons" src="{{ asset('images/certificate.png') }}">
                    <h3>International Level Certificate</h3>
                    <p>Earn an International Level Certificate from Gurunanak Education Courses, recognized globally for its excellence. Boost your career prospects with credentials that meet international standards.</p>
                </div>
                <div class="col-md-3 text-center">
                    <img class="icons" src="{{ asset('images/best-training.png') }}">
                    <h3>Best Teachers</h3>
                    <p>Learn from the best at Gurunanak Education Courses, where our expert faculty bring real-world experience into the classroom. Benefit from their knowledge and guidance to achieve academic and professional success.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-12">
            <div class="faqs">
                <h4 class="text-center">Our Services</h4>
                <div class="text-padding">
                    <p class="text-center">At Gurunanak Education Courses, we offer a diverse range of programs designed to equip you with the skills and knowledge needed for success in various fields. Our courses are tailored to meet industry demands and provide practical, hands-on experience. Explore our offerings:</p>
                </div>

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="border border-dark">
                            <div class="panel panel-default">
                              <div class="panel-body text-center">
                                <h2>Nanny Courses</h2>
                                <p class="text-center">
                                    Gain the skills and certification needed to excel in the childcare industry. Our nanny courses cover child development, safety, nutrition, and professional conduct, ensuring you are fully prepared for a rewarding career as a professional nanny.
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-dark">
                            <div class="panel panel-default">
                              <div class="panel-body text-center">
                                <h2>Product Design</h2>
                                <p class="text-center">
                                    Learn the fundamentals of product design and development, from concept to market. This course covers design thinking, prototyping, user experience, and product lifecycle management, equipping you with the skills to create innovative and marketable products.
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-dark">
                            <div class="panel panel-default">
                              <div class="panel-body text-center">
                                <h2>Engineering</h2>
                                <p class="text-center">
                                    Our engineering courses provide comprehensive training in various engineering disciplines. With a focus on practical application and cutting-edge technology, these courses prepare you for careers in civil, mechanical, electrical, and other engineering fields.
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="bottom-grid1">
        <div class="container">
            <h2 class="cert">Contact US</h2>
        </div>
        <div class=" centre">
            <div class="container">
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control input-lg" id="name" aria-describedby="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control input-lg" id="email" autocomplete="off" aria-describedby="email" placeholder="Enter email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control input-lg" id="phone" autocomplete="off" aria-describedby="phone" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary contact-btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!--start-shoes-->

    <!--end-shoes-->
    <!---->
    <div class="footer">
        <div class="container">
            <div class="col-md-4 footer-middle">
                <div class="indo">
                    <ul class="social-footer ">
                        <li><span><i class="glyphicon glyphicon-earphone"> </i>(+91) 7508000377 </span></li>
                        <li><a href="mailto:info@example.com"><i class="glyphicon glyphicon-envelope" class="mes">
                                </i>admin@gurunanakedu.com</a></li>
                    </ul>
                    <a href="#"><img src="images/pa.png" alt=""></a>
                </div>

            </div>
            <div class="col-md-4 footer-middle">
                <h3>Education </h3>
                <h4>Education is the key to unlocking potential and driving progress. It empowers individuals with knowledge, skills, and opportunities for a brighter future.</h4>
            </div>
            <div class="col-md-4 footer-bottom">
                <div class="logo-footer">
                <img src="{{ asset('images/ME.png') }}" width="150px" alt="Ministry of Education logo" style="margin-top:18px;">
                </div><br>
                <div class="logo-footer">
                    <ul class="social">
                        <li><a href="#"><i class="fb"> </i> </a></li>
                        <li><a href="#"><i class="rss"> </i></a></li>
                        <li><a href="#"><i class="twitter"> </i></a></li>
                        <li><a href="#"><i class="dribble"> </i></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <div class="clearfix"> </div>
            <p class="footer-class">Copyrights © 2024 GuruNanak Edu. All rights reserved </p>
        </div>
    </div>

    <script type="text/javascript">
		$(document).ready(function() {
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#ajax-form').on('submit', function (e) {
        console.log($(this).attr('action'));
        e.preventDefault(); // Prevent the default form submission
         $.ajax({
            url: '{{ route('certificate') }}', // Form action URL
            method: 'POST', // Form method
            data: $(this).serialize(), // Serialize form data
            success: function (response) {
                if(response.file)
                {
                    window.open(response.file, "_blank");
                }else{
                    $("#error-msg").css({display : 'block'});
                }
                // Handle successful response
                $('#ajax-form')[0].reset(); // Optionally reset the form
            },
            error: function (xhr) {
                // Handle error response
                let errors = xhr;
                1
                // let errorMessage = '<p>Error occurred:</p><ul>';
                // $.each(errors, function (key, value) {
                //     errorMessage += '<li>' + value + '</li>';
                // });
                // errorMessage += '</ul>';
                // $('#response-message').html(errorMessage);
            }
         });
    });
});
</script>

</html>
