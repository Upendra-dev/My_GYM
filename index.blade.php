@extends('layout')
@section('content')
    <!-- -------------------------------------------Hero START-------------------------------------------- -->
    <section class="hero">
        <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Carousel Indicators with Animation -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/tb.jpg') }}" class="carousel-img" alt="Image 1">
                    <div class="carousel-content-container">
                        <div class="carousel-content">
                            <h2>Welcome to Our Physiotherapy Clinic</h2>
                            <p>Your well-being is our priority. Experience personalized care.</p>
                            <a href="contact-us.html" class="join-now-btn">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/b2.png') }}" class="carousel-img" alt="Image 2">
                    <div class="carousel-content-container">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/b2b.png') }}" class="carousel-img" alt="Image 3">
                    <div class="carousel-content-container">
                        <div class="carousel-content">
                            <h2>Personalized Treatment Plans</h2>
                            <p>Tailored care to meet your individual rehabilitation goals.</p>
                            <a href="contact-us.html" class="join-now-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- -------------------------------------------Hero END -------------------------------------------- -->

    <!-- -------------------------------------------Services Section START -------------------------------------------- -->
    <div class="services-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Our Services</h2>
                    <p class="section-description">We offer a variety of services to help you achieve your fitness goals.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Service 1 -->
                <div class="col-xl-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/s1.jpg') }}" alt="Our Classes" class="service-image">
                        </div>
                        <div class="content-box">
                            <h6><a href="{{route('user.weight')}}">Weight Management</a></h6>
                            <p>Tailored nutrition plans for healthy weight management to achieve your fitness goals.</p>
                            <a href="{{route('user.weight')}}" class="btn-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-xl-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/s2.jpg') }}" alt="Our Trainers" class="service-image">
                        </div>
                        <div class="content-box">
                            <h6><a href="{{route('user.disease')}}">Disease Management</a></h6>
                            <p>Nutrition plans for managing diabetes, hypertension, and other conditions effectively.</p>
                            <a href="{{route('user.disease')}}" class="btn-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-xl-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/s3.jpg') }}" alt="Memberships" class="service-image">
                        </div>
                        <div class="content-box">
                            <h6><a href="{{route('user.pregnancy')}}">Pregnancy & Lactation</a></h6>
                            <p>Guidance for healthy nutrition during pregnancy and lactation support for mothers.</p>
                            <a href="{{route('user.pregnancy')}}" class="btn-link">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-xl-3 col-md-6 col-sm-6 mb-4">
                    <div class="service-box">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/s4.jpg') }}" alt="Our Timeline" class="service-image">
                        </div>
                        <div class="content-box">
                            <h6><a href="{{route('user.nutrition')}}">Nutrition</a></h6>
                            <p>Balanced diet plans to support growth and health effectively.</p>
                            <a href="{{route('user.nutrition')}}" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------------------Services Section END -------------------------------------------- -->
    <!-- -------------------------------------------About Start  -------------------------------------------- -->

    <section class="about-start">
        <div class="flex-container-mission">
            <div class="spinner-mission">
                <p>
                <div class="cube1-mission"></div>
                <div class="cube2-mission"></div>
                Loading...
                </p>
            </div>
            <div class="flex-slide-mission home-mission">
                <div class="flex-title-mission flex-title-home-mission">Vission</div>
                <div class="flex-about-mission flex-about-home-mission">
                    <p>It is my vision that people around the world will be empowered to lead healthier and happier lives.
                        Changing your daily routine can result in lasting change if you make minor, sustainable
                        improvements.

                        In order to achieve your fitness goals, you should consume a healthy diet and engage in regular
                        exercise.

                        It is my goal to provide you with flexible programs that will fit your busy schedule in order for
                        you to take charge of your health and achieve lasting results.</p>
                </div>
            </div>
            <div class="flex-slide-mission about-mission">
                <div class="flex-title-mission">Mission</div>
                <div class="flex-about-mission">
                    <p>
                    <ol>
                        <li>As a fitness company, our mission is to provide individuals with personalized training, support,
                            and motivation to help them reach their fitness goals.</li>
                        <li>The goal of our practice is to create an environment that fosters a sense of community and
                            accountability in order to help each client achieve their health goals.</li>
                        <li>With a focus on holistic wellness, we are dedicated to inspiring positive lifestyle changes and
                            cultivating a passion for fitness that lasts a lifetime.</li>
                    </ol>
                    </p>
                </div>
            </div>
            <div class="flex-slide-mission work-mission">
                <div class="flex-title-mission">Our Goal's</div>
                <div class="flex-about-mission">
                    <p>The primary goal of a personal trainer providing personal training is to help clients achieve their
                        fitness and health objectives through customized exercise programs, guidance, and support.
                        some specific goals a personal trainer might focus on:The primary goal of a personal trainer
                        providing personal training is to help clients achieve their fitness and health objectives through
                        customized exercise programs, guidance, and support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------About END -------------------------------------------- -->


    <!--  Story -->
    <section class="tranform-img">
        <div class="section-container container">
            <!-- Left Content Section -->
            <div class="text-content">
                <p class="subheading">Why Choose Us</p>
                <h3 class="main-heading">Transform Your Life with Our Coaching</h3>
                <p class="description">
                    We offer comprehensive health and fitness coaching services that are tailored to your unique needs,
                    ensuring
                    tangible results and a healthy lifestyle.
                </p>
                <!-- Key Points Split in 2 Parts -->
                <div class="key-points">
                    <ul class="column">
                        <li><i class="fa fa-check"></i> Certified Trainers</li>
                        <li><i class="fa fa-check"></i> Tailored Programs</li>
                        <li><i class="fa fa-check"></i> Online Flexibility</li>
                        <li><i class="fa fa-check"></i> Holistic Approach</li>
                        <li><i class="fa fa-check"></i> Affordable Prices</li>
                    </ul>
                    <ul class="column">
                        <li><i class="fa fa-check"></i> Long-term Support</li>
                        <li><i class="fa fa-check"></i> Regular Follow-ups</li>
                        <li><i class="fa fa-check"></i> Health Assessments</li>
                        <li><i class="fa fa-check"></i> Personalized Nutrition</li>
                        <li><i class="fa fa-check"></i> Mental Well-being Focus</li>
                    </ul>
                </div>
                <!-- Highlighted Content -->
                <p class="highlighted-content">Our expert team will guide you through every step of your fitness journey,
                    ensuring
                    sustainable and long-term health improvements.</p>
                <!-- View All Link -->
                <a href="#" class="view-all">View All Services</a>
            </div>

            <!-- Right Image Section -->
            <div class="image-section">
                <img id="changing-image" src="{{ asset('assets/images/transformation-12.jpg') }}" alt="Image 1">
            </div>
        </div>
    </section>

    <!-- Story ENd -->

    <!-- Price-Start -->
    <section class="main-particle">
        <div id="tsparticles"></div>
        <div class="price row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="content">
                    <h1>Best Offers </h1>
                    <p>Ready to take the next step in your fitness journey? Now's the perfect time! For a limited time only,
                        we're offering 10% off all gym memberships. Whether you're a beginner or a seasoned pro, our
                        state-of-the-art facility, expert trainers, and wide range of classes will help you achieve your
                        goals. Don’t miss out on this incredible deal – join today and start transforming your health and
                        fitness with us, all while saving big!
                    </p>
                    <button><a href="{{route('user.consultation')}}" class="text-white">Book Now</a></button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="swiper price-swiper price-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide price-box">
                            <img src="{{ asset('assets/images/weight training.jpg') }}" alt="">
                            <div class="cost">₹5000 </div>
                            <div class="overlay">
                                <h1>Weight Management</h1>
                                <p>Transform your body with our exclusive combo package for weight management and strength
                                    training—achieve your fitness goals today</p>
                                <div class="ratings">
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>100reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide price-box">
                            <img src="{{ asset('assets/images/muscule building.jpg') }}" alt="">
                            <div class="cost dark-text">₹5000 </div>
                            <div class="overlay">
                                <h1>Rehabilitation</h1>
                                <p>Recover stronger with our personalized rehabilitation programs tailored to your unique
                                    needs!</p>
                                <div class="ratings">
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>100reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide price-box">
                            <img src="{{ asset('assets/images/strength training.jpeg') }}" alt="">
                            <div class="cost">₹5000 </div>
                            <div class="overlay">
                                <h1>Combo</h1>
                                <p>Get the best of both worlds with our combo package: strength training and weight
                                    management for optimal results!</p>
                                <div class="ratings">
                                    <div class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <span>100reviews</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price-End -->

    <!-- Blog Section -->
    <section class="blog">
        <div class="blog-slider">
            <div class="blog-slider__wrp swiper-wrapper">
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759872/kuldar-kalvik-799168-unsplash.webp"
                            alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">2 July 2024</span>
                        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                            voluptate repellendus magni illo ea animi? </div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/jason-leung-798979-unsplash.webp"
                            alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">2 July 2024</span>
                        <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                            voluptate repellendus magni illo ea animi?</div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>
                <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1535759871/alessandro-capuzzi-799180-unsplash.webp"
                            alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code">2 July 2024</span>
                        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae
                            voluptate repellendus magni illo ea animi?</div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="blog-slider__pagination"></div>
        </div>
    </section>

    <!-- Blog End -->


    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="title">
                <h5>Testimonials</h5>
                <h2>What our clients say</h2>
            </div>
            <div class="owl-carousel owl-theme testi owl-loaded owl-drag">
                <!-- Single Starts -->

                <!-- Single Ends -->
                @if(!empty($feedback))
                        @foreach ($feedback as $item)

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1959px;">
                        <div class="owl-item active" style="width: 643px; margin-right: 10px;">
                            <div class="item">
                                <div class="profile">
                                    <img src="https://pxraja.com/wp-content/uploads/2024/07/no-dp_16.webp"
                                        alt="">
                                    <div class="information">
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <!-- Fatching name in DB --->
                                        <p>{{$item->name}}</p>
                                        <span>Trainee</span>
                                    </div>
                                </div>
                                <!-- Fatching Descriptin in Paragarf--->
                                <p>{{$item->description}}</p>
                                <div class="icon">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach   
                        @endif

                        {{-- <div class="owl-item active" style="width: 643px; margin-right: 10px;">
                            <div class="item">
                                <div class="profile">
                                    <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;h=153&amp;q=80"
                                        alt="">
                                    <div class="information">
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Reena Choudhary</p>
                                        <span>Trainee</span>
                                    </div>
                                </div>
                                <p>You always push me just the right amount, and I've seen incredible results in both
                                    strength and confidence</p>
                                <div class="icon">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 643px; margin-right: 10px;">
                            <div class="item">
                                <div class="profile">
                                    <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;h=153&amp;q=80"
                                        alt="">
                                    <div class="information">
                                        <div class="stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p>Alisha</p>
                                        <span>Trainer</span>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit
                                    distinctio,
                                    officiis deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis
                                    doloribus maiores
                                    impedit ducimus cum accusamus.</p>
                                <div class="icon">
                                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button
                        role="button" class="owl-dot"><span></span></button></div>
            </div>
        </div>
    </section>


    <!-- Form -->
   <!-- Form -->
  <section class="contact-form">
    <div class="appointment-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 appointment-info">
            <div class="heading-box">
              <h3 class="subheading">LET'S TALK</h3>
              <h2>Give <strong>Your Opinion</strong></h2>
              <p>Connect with our experts to schedule your appointment and discuss your goals. We offer personalized
                services to suit your needs.</p>
            </div>
            <div class="info-box">
              <h4>Why Choose Us?</h4>
              <ul>
                <li><i class="fa fa-check-circle"></i> Expert Consultation</li>
                <li><i class="fa fa-check-circle"></i> Personalized Nutrition Plans</li>
                <li><i class="fa fa-check-circle"></i> Dedicated Support</li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 appointment-form">
            <form action="#" method="post" id="feedback" class="form" aria-label="Contact form" novalidate="novalidate">
                @csrf()
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name *" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email *" required>
              </div>
              <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Your Contact No. *" required>
              </div>
              <div class="form-group">
               <textarea id="" name="description" rows="6" style="width: 100%;" ></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="submit-btn">Give Your Opinion</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

      {{-- Ajax for feedback form data sending --}}
    <script src=" {{asset('assets/js/feedback.js')}}"></script>
    
@endsection()
