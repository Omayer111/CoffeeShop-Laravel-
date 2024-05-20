<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sip & Savor Café</title>


    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap"
        rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('css/vegas.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/tooplate-barista.css') }}" rel="stylesheet">

    <!--

Tooplate 2137 Barista Cafe

https://www.tooplate.com/view/2137-barista-cafe

Bootstrap 5 HTML CSS Template

-->
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="/">
                    <img src="images/coffee-beans.png" class="navbar-brand-image img-fluid" alt="Barista Cafe Template">
                    Sip & Savor Café
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Our Menu</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Contact</a>
                        </li>
                        <li class="nav-item">
                            @include('layouts.navigation')
                        </li>
                    </ul>



                    <div class="ms-lg-3">
                        <a class="btn custom-btn custom-border-btn" href="/reservation">
                            Reservation
                            <i class="bi-arrow-up-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>







        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12 mx-auto">
                        <em class="small-text"></em>

                        <h1>Sip & Savor Café</h1>

                        <p class="text-white mb-4 pb-lg-2">
                            Saving lives for decades
                        </p>

                        <a class="btn custom-btn custom-border-btn smoothscroll me-3" href="#section_2">
                            Our Story
                        </a>

                        <a class="btn custom-btn smoothscroll me-2 mb-2" href="#section_3"><strong>Check
                                Menu</strong></a>
                    </div>

                </div>
            </div>

            <div class="hero-slides"></div>
        </section>


        <section class="about-section section-padding" id="section_2">
            <div class="section-overlay"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-12">
                        <div class="ratio ratio-1x1">
                            <video autoplay="" loop="" muted="" class="custom-video" poster="">
                                <source src="videos/pexels-mike-jones-9046237.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>

                            <div class="about-video-info d-flex flex-column">
                                <h4 class="mt-auto">Brewing since 2004</h4>

                                <h4>Swing by between 8am - 10pm</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <em class="text-white">sipndsavorcoffee.com</em>

                        <h2 class="text-white mb-3">Sip & Savor Café</h2>

                        <p class="text-white">At Sip & Savor Café, we pride ourselves on creating an ambiance that feels
                            like home, where every guest is welcomed with warmth and hospitality. Whether you're seeking
                            a quick caffeine fix on your way to work or craving a leisurely breakfast with friends and
                            family, our café provides the perfect setting to relax and recharge.</p>

                        <p class="text-white">At Sip & Savor Café, we are committed to providing our guests with an
                            unparalleled culinary experience that delights the senses and nourishes the soul. Whether
                            you're stopping by for your daily dose of caffeine or treating yourself to a leisurely
                            breakfast, we invite you to join us at Sip & Savor Café and indulge in the simple pleasures
                            of great coffee and delicious food.</p>

                        <a href="#barista-team" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Meet
                            Baristas</a>
                    </div>

                </div>
            </div>
        </section>


        <section class="barista-section section-padding section-bg" id="barista-team">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                        <em class="text-white">Creative Baristas</em>

                        <h2 class="text-white">Meet People</h2>
                    </div>

                    @foreach ($chefs as $item)
                        <div class="col-lg-3 col-md-6 col-12 mb-4">
                            <div class="team-block-wrap">
                                <div class="team-block-info d-flex flex-column">
                                    <div class="d-flex mt-auto mb-3">
                                        <h4 style="color: rgb(61, 22, 22)" class="text-white mb-0">{{ $item->name }}
                                        </h4>

                                        <p class="badge ms-4"><em>{{ $item->position }}</em></p>
                                    </div>
                                </div>

                                <div class="team-block-image-wrap">
                                    <img src="images/team/{{ $item->image }}" class="team-block-image img-fluid"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>


        <section class="menu-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-4 pb-lg-2">
                                <em class="text-white">Delicious Menu</em>
                                <h4 class="text-white">Breakfast</h4>
                            </div>


                            @foreach ($bmenus as $item)
                                <div class="menu-block">
                                    <div class="d-flex">
                                        <h6>{{ $item->name }}</h6>

                                        <span class="underline"></span>

                                        <strong class="ms-auto">{{ $item->price }}</strong>
                                    </div>

                                    <div class="border-top mt-2 pt-2">
                                        <small
                                            style="color: whitesmoke;font-size:15px">{{ $item->description }}</small>
                                    </div>

                                    <br><br>
                                </div>
                            @endforeach




                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-4 pb-lg-2">
                                <em class="text-white">Favourite Menu</em>
                                <h4 class="text-white">Coffee</h4>
                            </div>
                            @foreach ($cmenus as $item)
                                <div class="menu-block">
                                    <div class="d-flex">
                                        <h6>{{ $item->name }}</h6>

                                        <span class="underline"></span>

                                        <strong class="ms-auto">{{ $item->price }}</strong>
                                    </div>

                                    <div class="border-top mt-2 pt-2">
                                        <small
                                            style="color: whitesmoke;font-size:15px">{{ $item->description }}</small>
                                        <br><br>
                                    </div>
                                </div>
                            @endforeach


                            {{-- <div class="menu-block my-4">
                                <div class="d-flex">
                                    <h6>
                                        White Coffee
                                        <span class="badge ms-3">Recommend</span>
                                    </h6>

                                    <span class="underline"></span>

                                    <strong class="ms-auto">$5.90</strong>
                                </div>

                                <div class="border-top mt-2 pt-2">
                                    <small>Brewed coffee and steamed milk</small>
                                </div>
                            </div>

                            <div class="menu-block">
                                <div class="d-flex">
                                    <h6>Chocolate Milk</h6>

                                    <span class="underline"></span>

                                    <strong class="ms-auto">$5.50</strong>
                                </div>

                                <div class="border-top mt-2 pt-2">
                                    <small>Rich Milk and Foam</small>
                                </div>
                            </div>

                            <div class="menu-block my-4">
                                <div class="d-flex">
                                    <h6>Greentea</h6>

                                    <span class="underline"></span>

                                    <strong class="ms-auto">$7.50</strong>
                                </div>

                                <div class="border-top mt-2 pt-2">
                                    <small>Fresh brewed coffee and steamed milk</small>
                                </div>
                            </div>

                            <div class="menu-block">
                                <div class="d-flex">
                                    <h6>Dark Chocolate</h6>

                                    <span class="underline"></span>

                                    <strong class="ms-auto">$7.25</strong>
                                </div>

                                <div class="border-top mt-2 pt-2">
                                    <small>Rich Milk and Foam</small>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="reviews-section section-padding section-bg" id="section_4">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                        <em class="text-white">Reviews by Customers</em>

                        <h2 class="text-white">Testimonials</h2>
                    </div>

                    <div class="timeline">
                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center">
                                        <img src="images/reviews/young-woman-with-round-glasses-yellow-sweater.jpg"
                                            class="reviews-block-image img-fluid" alt="">

                                        <div class="">
                                            <h6 class="text-white mb-0">Sandra</h6>
                                            <em class="text-white"> Customers</em>
                                        </div>
                                    </div>

                                    <div class="reviews-block-info">
                                        <p style="font-weight: bold">Sip & Savor Café is my new morning ritual! Their
                                            coffee is fantastic, and the
                                            breakfast options are top-notch. Love the cozy atmosphere and friendly
                                            staff!</p>

                                        <div class="d-flex border-top pt-3 mt-4">
                                            <strong class="text-white">4.5 <small
                                                    class="ms-2">Rating</small></strong>

                                            <div class="reviews-group ms-auto">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-right">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center">
                                        <img src="images/reviews/senior-man-white-sweater-eyeglasses.jpg"
                                            class="reviews-block-image img-fluid" alt="">

                                        <div class="">
                                            <h6 class="text-white mb-0">Don</h6>
                                            <em class="text-white"> Customers</em>
                                        </div>
                                    </div>

                                    <div class="reviews-block-info">
                                        <p style="font-weight: bold">Sip & Savor Café is a hidden gem! Their coffee is
                                            perfection, and the avocado
                                            toast is a must-try. Can't wait to go back!</p>

                                        <div class="d-flex border-top pt-3 mt-4">
                                            <strong class="text-white">4.5 <small
                                                    class="ms-2">Rating</small></strong>

                                            <div class="reviews-group ms-auto">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-container timeline-container-left">
                            <div class="timeline-content">
                                <div class="reviews-block">
                                    <div class="reviews-block-image-wrap d-flex align-items-center">
                                        <img src="images/reviews/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair.jpg"
                                            class="reviews-block-image img-fluid" alt="">

                                        <div class="">
                                            <h6 class="text-white mb-0">Olivia</h6>
                                            <em class="text-white"> Customers</em>
                                        </div>
                                    </div>

                                    <div class="reviews-block-info">
                                        <p style="font-weight: bold">Sip & Savor Café never disappoints! Great coffee,
                                            delicious breakfast, and
                                            wonderful service. Highly recommend for a tasty start to the day!</p>

                                        <div class="d-flex border-top pt-3 mt-4">
                                            <strong class="text-white">4.5 <small
                                                    class="ms-2">Rating</small></strong>

                                            <div class="reviews-group ms-auto">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="contact-section section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <em class="text-white">Say Hello</em>
                        <h2 class="text-white mb-4 pb-lg-2">Contact</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <form action="/" method="post" class="custom-form contact-form" role="form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <label for="name" class="form-label">Name <sup
                                            class="text-danger">*</sup></label>

                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Jackson" required="">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label for="email" class="form-label">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        class="form-control" placeholder="Jack@gmail.com" required="">
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">How can we help?</label>

                                    <textarea name="message" rows="4" class="form-control" id="message" placeholder="Message" required=""></textarea>

                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mx-auto mt-3">
                                <button type="submit" class="form-control">Send Message</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mx-auto mt-5 mt-lg-0 ps-lg-5">
                        <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;">
                            <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe
                                    style="height:100%;width:100%;border:0;" frameborder="0"
                                    src="https://www.google.com/maps/embed/v1/place?q=https://www.google.com/maps/place/Las+Vegas,+NV,+USA/@36.125,-115.175,11z/data=!3m1!4b1!4m6!3m5!1s0x80beb782a4f57dd1:0x3accd5e6d5b379a3!8m2!3d36.171563!4d-115.1391009!16zL20vMGN2M3c?entry=ttu&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                            </div><a class="embedded-map-code" href="https://www.bootstrapskins.com/themes"
                                id="grab-maps-authorization">premium bootstrap themes</a>
                            <style>
                                #g-mapdisplay img.text-marker {
                                    max-width: none !important;
                                    background: none !important;
                                }

                                img {
                                    max-width: none
                                }
                            </style>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 me-auto">
                        <em class="text-white d-block mb-4">Where to find us?</em>

                        <strong class="text-white">
                            <i class="bi-geo-alt me-2"></i>
                            las Vegas, Nevada, USA
                        </strong>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                        <em class="text-white d-block mb-4">Contact</em>

                        <p class="d-flex mb-1">
                            <strong class="me-2">Phone:</strong>
                            <a href="tel: 305-240-9671" class="site-footer-link">
                                (65)
                                305 2409 671
                            </a>
                        </p>

                        <p class="d-flex">
                            <strong class="me-2">Email:</strong>

                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                hello@barista.co
                            </a>
                        </p>
                    </div>


                    <div class="col-lg-5 col-12">
                        <em class="text-white d-block mb-4">Opening Hours.</em>

                        <ul class="opening-hours-list">
                            <li class="d-flex">
                                Monday - Friday
                                <span class="underline"></span>

                                <strong>9:00 - 18:00</strong>
                            </li>

                            <li class="d-flex">
                                Saturday
                                <span class="underline"></span>

                                <strong>11:00 - 16:30</strong>
                            </li>

                            <li class="d-flex">
                                Sunday
                                <span class="underline"></span>

                                <strong>Closed</strong>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-8 col-12 mt-4">
                        <p class="copyright-text mb-0">Copyright © Sip & Savor Café 2024

                        </p>
                    </div>
                </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/click-scroll.js"></script>
    <script src="js/vegas.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
