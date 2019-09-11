<!doctype html>
<html lang="en">

@include('layouts.directaaus.head')

<body>
    <header>
        <div class="jumbotron da-jumbotron jumbotron-fluid mx-auto">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src={{ asset('/directaaus/img/logo.svg') }} width=30 height=30 alt="Logo"> Directaa </a>
                    <button class="custom-toggler navbar-toggler" type=button data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="#how">How it works</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact us</a></li>
                            <li class="nav-item"><a class="nav-link" href="/mission">About us</a></li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link get-start" href="//www.directaaus.com.au/register" data-toggle="modal" data-target="#signup">Get Started</a></li>
                            <div class="top-right links"></div>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row da-hero pt-4 pt-md-5">
                    <div class="col-md-6 mt-5 pt-3">
                        <h1 class="hero-title">Helping migrants<br> and refugees to resettle <br>comfortably in Australia </h1>
                        <p class="mt-4 mb-4"> Are you new to Australia? Directa will help
                            <br> you find your path and build your future. </p><a href="#services" class="btn btn-primary explore-btn"> Explore Now <i class="explore-icon"></i></a></div>
                    <div class="col-md-6 mt-md-5 mt-lg-0 d-md-block d-none"><img src="{{ asset('/directaaus/img/graphic.svg') }}" width=500 alt="" class="img-fluid hero-graphic"></div>
                </div>
            </div>
        </div>
    </header>
    <div id="services">
        <div class="container pt-5 mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="info"><img src={{ asset('/directaaus/img/innovation.svg') }} alt="icon" class="icon">
                        <h2 class="mt-2">Find your passion</h2>
                        <p> What do you want to do? We help you
                            <br> find your why. That's the how you
                            <br> discover your <b>Passion</b>. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info"><img src={{ asset('/directaaus/img/overcome.svg') }} alt="icon" class="icon">
                        <h2 class="mt-2">Get inspired</h2>
                        <p> You want to follow your <b>Passion</b>? We help
                            <br> you stay inspired and comminted.
                            <br> You can do it. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info"><img src="{{ asset('/directaaus/img/development.svg') }}" alt="icon" class="icon">
                        <h2 class="mt-2">Build your empire</h2>
                        <p> Don't live average. Time never
                            <br> waits for anyone to feel perfectly ready.
                            <br> Just build your <b>Empire</b></p>
                    </div>
                </div>
            </div>
            <div class="row mission mt-5 mb-5">
                <div class="col-md-6">
                    <div class="mission-img"><img src="{{ asset('/directaaus/img/sydney.svg') }}" alt="what direcataa does" class="img-responsive"></div>
                </div>
                <div class="col-md-6">
                    <div class="mission-text">
                        <h1>Who are we?</h1>
                        <p> We’re an online directory that connects migrants and refugees to information and services that helps kick-start their lives in Australia. </p>
                        <p> In our eyes, migrants and refugees aren’t any less than anybody else in the country. We strongly believe people, no matter their age, gender or background, have the right to be given equal support. </p><b> That’s why Directa exists. We’re here to help. </b></div>
                </div>
            </div>
            <div class="row mission mt-5 mb-5">
                <div class="col-md-6 order-md-last">
                    <div class="mission-img"><img src="{{ asset('/directaaus/img/goals.svg') }}" alt="what direcataa does" class="img-responsive"></div>
                </div>
                <div class="col-md-6 order-md-first">
                    <div class="mission-text">
                        <h2>Our mission</h2>
                        <p> To create a sense of belonging for everybody. </p><b> Our goals</b>
                        <ul>
                            <li> Improve the global system of refugee resettlement </li>
                            <li> Empower migrants and refugees to reach their full potential </li>
                            <li> Provide easy and efficient access to settlement services, free workshops, programs and training for educational and employment purposes </li>
                            <li> Inspire migrants and refugees to connect within communities </li>
                            <li> Assist the government to identify key issues that could help further solve existing problems </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="how">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h3 class="mt-5">How it works</h3>
                    <p> We make it easy for you to uderstand how Directa works </p>
                </div>
            </div>
            <div class="how-it-works">
                <div class="row">
                    <div class="col-md-4 order-lg-last order-xl-last"><img src="{{ asset('/directaaus/img/australia-on-map.svg') }}" alt="Australia" class="img-responsive img-steps"></div>
                    <div class="col-md-4 order-lg-first new-australia order-xl-first">
                        <h4 class="mt-5">New to Australia</h4>
                        <p> You just came to Australia and don't have enough information about the country and what you should do! </p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-3 order-lg-3 order-xl-3"><img src="{{ asset('/directaaus/img/directa-circle.svg') }}" alt="Australia" class="img-responsive img-steps directa"></div>
                    <div class="col-md-3 directa order-lg-4 order-xl-4">
                        <h4>Join Directa</h4>
                        <p> You join Directa for free. It's where your journey starts. </p>
                    </div>
                    <div class="col-md-3 community-svg order-lg-2 order-xl-2"><img src="{{ asset('/directaaus/img/people.svg') }}" alt="Australia" class="img-responsive img-steps community"></div>
                    <div class="col-md-3 community order-lg-1 order-xl-1">
                        <h4>We're a community</h4>
                        <p> Directa is a community of people like you who wants to get inspire. </p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-3 mt-5"><img src="{{ asset('/directaaus/img/resource.svg') }}" alt="Australia" class="img-responsive img-steps resources-svg"></div>
                    <div class="col-md-3 resources">
                        <h4>Discover Resources</h4>
                        <p> We provide you the best free services and resources about settlement in Australia. </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 goal text-center"><img src={{ asset('/directaaus/img/success.svg') }} alt="Success" class="img-responsive img-steps">
                        <h4>Achieve your goal</h4>
                        <p> Now, you have achieved your goals and ready to find job, education etc.. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <div class="contact-form">
                        <h2 class="mb-3">Get in Touch</h2>
                        <form action="//www.directaaus.com.au/contact" method="POST">
                            <input type=hidden name=_token value="JdWIuy91W0g7f6FeTGJVpuyprncLQy9HgLtyaPIL">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text user-icon"></span></div>
                                <input type=text required="true" name=name placeholder="Your nice name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span class="input-group-text email-icon"></span></div>
                                <input type=email required="true" name=email placeholder="Your email address" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="form-group mb-3">
                                <textarea name=message required="true" id="message" placeholder="Your message" class="form-control" cols="20" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type=submit class="btn btn-primary send-btn"> Send <i class="send-icon"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="subscribe">
            <div class="container">
                <h3 class="text-white pt-5 text-center">Be the first person who get notification when we launch</h3>
                <div class="row justify-content-center ">
                    <div class="col-md-4">
                        <div id="mc_embed_signup">
                            <form action="//upplanet.us18.list-manage.com/subscribe/post?u=992af1fc4b81a5461e339d59b&amp;id=b72da56d9a" method="post" id="mc-embedded-subscribe-form" name=mc-embedded-subscribe-form class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="form-group mt-4">
                                        <input type=email value="" name=EMAIL class="email form-control" id="mce-EMAIL" placeholder="email address" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="page_speed_1680151773" aria-hidden="true">
                                            <input type=text name=b_992af1fc4b81a5461e339d59b_b72da56d9a tabindex="-1" value="">
                                        </div>
                                        <div class="clear text-center">
                                            <input type=submit value="Subscribe" name=subscribe id="mc-embedded-subscribe" class="btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-white copyright">
            <div class="d-flex align-content-end flex-wrap">
                <div class="mr-auto p-2">
                    <ul class="footer-nav pl-0">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="p-2"> &COPY; 2018 - All right reserved </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class='col-12 modal-title text-center'> Sign up <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button></h3></div>
                <div class="modal-body">
                    <div class="social-auth-links text-center m-3 mt-0"><a href="//www.directaaus.com.au/auth/facebook" class="btn btn-block btn-primary"><i class="fa fa-facebook mr-2"></i> Sign in using Facebook </a><a href="//www.directaaus.com.au/auth/google" class="btn btn-block btn-danger"><i class="fa fa-google-plus mr-2"></i> Sign in using Google+ </a><a href="//www.directaaus.com.au/register" class="btn btn-block btn-success"><i class="fa fa-envelope mr-2"></i></i> Sign in using Email </a></div>
                </div>
                <div class="modal-footer">
                    <div class="text-center w-100">
                        <p class="text-center"> Already a member? <a href="//www.directaaus.com.au/login"> Log in.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src={{ asset('/directaaus/js/script.js') }}></script>
</body>

</html>