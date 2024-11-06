@extends('layout')
@section('content')


    <!-- Hero Section -->
    <section id="hero" class="breadcrumb-hero" style="background-image: url('assets/images/Dumble.png')}}'); ">
        <div class="breadcrumb">
            <a href="#">Home</a> &gt; <a href="#">Services</a> &gt; <span>Disease Management</span>
        </div>
        <div class="hero-content">
            <h1>Comprehensive Disease Management Services for Your Health</h1>
            <p>Empowering patients through personalized care and support.</p>
            <a href="#services" class="cta-btn">Get Started</a>
        </div>
    </section>
    


    <div class="disease-management">

        <section class="disease-management__services">
            <h2>Our Services</h2>
            <div class="disease-management__service-cards">
                <div class="disease-management__service-card">
                    <div class="icon">
                       <img src="{{asset('assets/images/icon/professional-success.png')}}" alt="">
                    </div>
                    <h3>Chronic Diseases </h3>
                    <ul>
                        <li>
                            <p>Type 2 Diabetes</p>
                        </li>
                        <li>
                            <p>Osteoporosis </p>
                        </li>
                        <li>
                            <p>PCOS(Polycystic Ovary Syndrome)</p>
                        </li>
                        <li>
                            <p>HyperTension</p>
                        </li>
                    </ul>
                </div>
                <div class="disease-management__service-card">
                    <div class="icon">
                       
                        <img src="{{asset('assets/images/icon/Chronic Diseases.png')}}" alt="">
                    </div>
                    <h3>Disease Management</h3>
                    <ul>
                        <li><p>Custom plans designed to manage chronic diseases effectively.</p></li>
                        <li>  <p>Thorough evaluations to understand your unique health challenges and needs.</p></li>
                        <li><p>Medication management and adherence</p></li>
                        <li> <p>Lifestyle modifications (diet, exercise)</p></li>
                    </ul>
                </div>
                <div class="disease-management__service-card">
                    <div class="icon">
                        <img src="{{asset('assets/images/icon/lifestyle.png')}}" alt="">
                    </div>
                    <h3>Lifestyle and Nutrition Counseling</h3>
                    <ul>
                        <li><p>Personalized Nutrition Plans</p></li>
                        <li><p> Understanding Nutritional Needs</p></li>
                        <li><p> Behavior Modification Techniques</p></li>
                        <li><p>Monitoring Progress From Comfort Of Your Home</p></li>
                    </ul>
                </div>
                <div class="disease-management__service-card">
                    <div class="icon">
                        <img src="{{asset('assets/images/icon/protection.png')}}" alt="">
                    </div>
                    <h3>Telehealth Services</h3>
                    <ul>
                        <li><p>Convenient Access to Care</p></li>
                        <li><p>Flexible Appointment Scheduling</p></li>
                        <li><p>Comprehensive Health Monitoring</p></li>
                        <li><p>Expert Consultations
                        </p></li>
                    </ul>
                </div>
                <div class="disease-management__service-card">
                    <div class="icon">
                        <img src="{{asset('assets/images/icon/family.png')}}" alt="">
                    </div>
                    <h3>Patient Education and Support Groups</h3>
                   <ul>
                    <li><p> Empowering Patients with Knowledge</p></li>
                    <li><p>Peer Support Networks</p></li>
                    <li><p>Guidance from Healthcare Professionals</p></li>
                    <li><p>Skill-Building Workshops</p></li>
                   </ul>
                </div>
            </div>
        </section>


        <!-- Why Choose Us Section -->
        <section class="why-choose-us">
            <h2 class="why-heading">Why Choose Us?</h2>
            <div class="reasons-container">
                <div class="reason-card">
                    <div class="card-icon">
                       <img src="{{asset('assets/images/icon/gymtrainer1.png')}}" alt="">
                    </div>
                    <h3>Expert Trainers</h3>
                    <p>
                        Our certified trainers are dedicated to helping you achieve your
                        fitness goals with personalized training plans and constant support.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="card-icon">
                        <img src="{{asset('assets/images/icon/community.png')}}" alt="">
                    </div>
                    <h3>Community Support</h3>
                    <p>
                        Join a vibrant community of fitness enthusiasts who motivate and
                        inspire each other. Together, we achieve more!
                    </p>
                </div>

                <div class="reason-card">
                    <div class="card-icon">
                        <img src="{{asset('assets/images/icon/plan.png')}}" alt="">
                    </div>
                    <h3>Customized Plans</h3>
                    <p>
                        Receive tailored workout and nutrition plans that suit your
                        individual needs and preferences, ensuring maximum results.
                    </p>
                </div>

                <div class="reason-card">
                    <div class="card-icon">
                        <img src="{{asset('assets/images/icon/results.png')}}" alt="">
                    </div>
                    <h3>Proven Results</h3>
                    <p>
                        Our methods are backed by science and have helped countless clients
                        achieve their fitness goals. Your success is our priority!
                    </p>
                </div>
            </div>
        </section>

        <section class="testimonials" >
            <div class="container">
              <div class="title">
                <h5>Testimonials</h5>
                <h2>What our clients say</h2>
              </div>
              <div class="owl-carousel owl-theme testi owl-loaded owl-drag">
                <!-- Single Starts -->
                
                <!-- Single Ends -->
                
                
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 1959px;"><div class="owl-item active" style="width: 643px; margin-right: 10px;"><div class="item">
                  <div class="profile">
                    <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;h=153&amp;q=80" alt="">
                    <div class="information">
                      <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                      <p>Pradeep</p>
                      <span>Trainee</span>
                    </div>
                  </div>
                  <p>Thanks to your expert guidance and encouragement, I've achieved goals I never thought were possible</p>
                  <div class="icon">
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                  </div>
                </div></div><div class="owl-item active" style="width: 643px; margin-right: 10px;"><div class="item">
                  <div class="profile">
                    <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;h=153&amp;q=80" alt="">
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
                  <p>You always push me just the right amount, and I've seen incredible results in both strength and confidence</p>
                  <div class="icon">
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                  </div>
                </div></div><div class="owl-item" style="width: 643px; margin-right: 10px;"><div class="item">
                  <div class="profile">
                    <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;h=153&amp;q=80" alt="">
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
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio,
                    officiis deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores
                    impedit ducimus cum accusamus.</p>
                  <div class="icon">
                    <i class="fa fa-quote-right" aria-hidden="true"></i>
                  </div>
                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
            </div>
          </section>
<!-- Process -->
<section class="disease-management__process">
    <h2>Our Process</h2>
    <div class="disease-management__process-flow">
        <div class="disease-management__process-step">
            <div class="circle">
                <img src="{{asset('assets/images/icon/consultation.png')}}" alt="">
            </div>
            <h3>Initial Consultation</h3>
            <p>Assess your health needs and discuss your goals with our expert team.</p>
        </div>
        <div class="disease-management__process-arrow">→</div>
        <div class="disease-management__process-step">
            <div class="circle">
                <img src="{{asset('assets/images/icon/planning.png')}}" alt="Personalized Plan" />
            </div>
            <h3>Personalized Plan</h3>
            <p>Receive a customized management plan tailored to your specific condition.</p>
        </div>
        <div class="disease-management__process-arrow">→</div>
        <div class="disease-management__process-step">
            <div class="circle">
                <img src="{{asset('assets/images/icon/add-friend.png')}}" alt="Regular Follow-ups" />
            </div>
            <h3>Regular Follow-ups</h3>
            <p>Enjoy continuous monitoring and adjustments for optimal outcomes.</p>
        </div>
        <div class="disease-management__process-arrow">→</div>
        <div class="disease-management__process-step">
            <div class="circle">
                <img src="{{asset('assets/images/icon/woman.png')}}" alt="Empowerment and Education" />
            </div>
            <h3>Empowerment and Education</h3>
            <p>Access resources and support to empower you in managing your health.</p>
        </div>
    </div>
</section>



        <!-- Appointment -->
        <div class="appointment-section">
            <div class="appointment-content">
                <h2>Ready to Transform Your Life?</h2>
                <p>
                    At Fitness With Rajiv, we're dedicated to helping you achieve your
                    health and fitness goals. Our personalized approach ensures you get
                    the support you need.
                </p>
                <a href="#book-appointment" class="btn-appointment">Book Your Free Consultation</a>
            </div>
        </div>

        <!-- Faq -->
        <div class="faq-container">
            <div class="faq-header">
                <h3>FAQs</h3>
            </div>
            <div class="faq-accordion">
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>Why should I choose an ACE weight management specialist like
                            Rajiv?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            Rajiv is an ACE certified weight management specialist, ensuring
                            you receive evidence-based care and the best methods for weight
                            management.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>Does the program encourage you to take supplements?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            No, we do not encourage or prescribe supplements. We help you
                            obtain all necessary nutrients from home-cooked food.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>How long will it take to see results?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            Results vary by individual, but many clients begin to see changes
                            within a few weeks of following the program.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>What is the focus of your weight management program?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            Our program emphasizes sustainable lifestyle changes through
                            balanced nutrition, physical activity, and mental well-being.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>Can I customize my meal plan?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            Yes, our meal plans are personalized based on your preferences,
                            dietary restrictions, and nutritional needs.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>Do you offer online consultations?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            Yes, we provide online consultations to accommodate your schedule
                            and preferences.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>What if I have specific health concerns?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            We assess individual health concerns and tailor the program
                            accordingly, ensuring safety and effectiveness.
                        </p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-title" onclick="toggleAccordion(this)">
                        <span>How do I get started?</span>
                        <i class="arrow"></i>
                    </div>
                    <div class="faq-content">
                        <p>
                            Contact us to schedule a consultation, and we'll guide you through
                            the process of starting your journey.
                        </p>
                    </div>
                </div>
            </div>
        </div>


        @endsection()