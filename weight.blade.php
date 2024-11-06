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

    <!-- Services Overview Section -->
    <section class="services-overview py-6 mt-4">
      <h2 class="services-heading section-title text-center py-6 mt-4 mb-4">
        Our Services
      </h2>
      <div class="services-row">
        <div class="service-item">
          <img
            src="{{asset('assets/images/s2.jpg')}}"
            alt="Weight Training"
            class="service-image"
          />
          <div class="service-content">
            <h3>Weight Training</h3>
            <p>
              Build strength and muscle with our expert weight training programs
              tailored to your fitness level. Our programs are designed for
              individuals of all ages and experience levels, ensuring everyone
              can benefit from weight training.
            </p>
            <h4>Key Exercises:</h4>
            <div class="exercise-list-container">
              <ul class="exercise-list">
                <li>Bench Press</li>
                <li>Deadlifts</li>
                <li>Squats</li>
                <li>Overhead Press</li>
                <li>Barbell Rows</li>
              </ul>
              <ul class="exercise-list">
                <li>Leg Press</li>
                <li>Lat Pulldowns</li>
                <li>Dumbbell Flys</li>
                <li>Tricep Dips</li>
                <li>Core Workouts</li>
              </ul>
            </div>
            <p>
              Our certified trainers will guide you through each exercise,
              ensuring you use the correct form to maximize results and minimize
              the risk of injury. Join us today and start your journey towards a
              stronger, healthier you!
            </p>
            <a href="#" class="learn-more-btn">Learn More</a>
          </div>
        </div>
        <div class="service-item">
          <div class="service-content">
            <h3>Strength Training</h3>
            <p>
              Develop full-body strength and endurance with our comprehensive
              strength training sessions. These workouts focus on functional
              movements that improve your daily life and athletic performance.
            </p>
            <h4>Key Exercises:</h4>
            <div class="exercise-list-container">
              <ul class="exercise-list">
                <li>Pull-Ups</li>
                <li>Push-Ups</li>
                <li>Lunges</li>
                <li>Plank Variations</li>
                <li>Kettlebell Swings</li>
              </ul>
              <ul class="exercise-list">
                <li>Medicine Ball Slams</li>
                <li>Farmers Walk</li>
                <li>Box Jumps</li>
                <li>Russian Twists</li>
                <li>Burpees</li>
              </ul>
            </div>
            <p>
              With a focus on building strength in multiple planes of motion,
              our strength training sessions will enhance your overall fitness
              and prepare you for any challenge. Experience the benefits of our
              tailored programs and achieve your personal fitness goals!
            </p>
            <a href="#" class="learn-more-btn">Learn More</a>
          </div>
          <img
            src="{{asset('assets/images/s1.jpg')}}"
            alt="Strength Training"
            class="service-image strength-image"
          />
        </div>
      </div>
    </section>

    <!-- Nutrition and Diets Section with Cards and SVGs -->
    <section class="nutrition-diets">
      <h2 class="nutrition-heading">Nutrition & Diets: Fuel Your Body Right</h2>
      <div class="nutrition-container">
        <!-- Nutrition Card 1 -->
        <div class="nutrition-card">
          <div class="card-icon">
           <img src="{{asset('assets/images/icon/healthy-food.png')}}" alt="">
          </div>
          <h3>Healthy Eating</h3>
          <p>
            Fuel your body with a balanced diet rich in nutrients, vitamins, and
            minerals. A proper diet plays a vital role in muscle growth, energy
            levels, and overall health.
          </p>
          <a href="#" class="read-more">Learn More</a>
        </div>

        <!-- Nutrition Card 2 -->
        <div class="nutrition-card">
          <div class="card-icon">
            <img src="{{asset('assets/images/icon/whey.png')}}" alt="">
          </div>
          <h3>Protein Intake</h3>
          <p>
            Protein is essential for muscle recovery and growth. Incorporating
            lean meats, beans, and nuts into your diet will ensure you get the
            necessary building blocks.
          </p>
          <a href="#" class="read-more">Learn More</a>
        </div>

        <!-- Nutrition Card 3 -->
        <div class="nutrition-card">
          <div class="card-icon">
            <img src="{{asset('assets/images/icon/water-bottle.png')}}" alt="">
          </div>
          <h3>Hydration</h3>
          <p>
            Stay hydrated to maintain performance and recovery. Drinking enough
            water before, during, and after workouts is crucial for staying
            energized and reducing fatigue.
          </p>
          <a href="#" class="read-more">Learn More</a>
        </div>

        <!-- Nutrition Card 4 -->
        <div class="nutrition-card">
          <div class="card-icon">
           <img src="{{asset('assets/images/icon/carbohydrates.png')}}" alt="">
          </div>
          <h3>Carbohydrates</h3>
          <p>
            Carbohydrates are your body's primary source of energy. Eating whole
            grains, fruits, and vegetables helps sustain energy levels for
            intense workouts.
          </p>
          <a href="#" class="read-more">Learn More</a>
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
    <!-- Pricing Plans Section -->
    <section class="pricing-plans">
      <h2 class="pricing-heading">Our Pricing Plans</h2>
      <div class="plans-container">
        <!-- Beginner Plan -->
        <div class="plan-card beginner-plan">
          <h3>Beginner Plan</h3>
          <p class="plan-price">$29/month</p>
          <ul class="plan-features">
            <li>3 Workout Sessions per Week</li>
            <li>Nutrition Guidance</li>
            <li>Access to Group Classes</li>
            <li>Online Support</li>
          </ul>
          <a href="#" class="btn">Get Started</a>
        </div>

        <!-- Intermediate Plan -->
        <div class="plan-card intermediate-plan">
          <h3>Intermediate Plan</h3>
          <p class="plan-price">$49/month</p>
          <ul class="plan-features">
            <li>5 Workout Sessions per Week</li>
            <li>Personalized Nutrition Plan</li>
            <li>Access to All Classes</li>
            <li>1-on-1 Training Session</li>
            <li>Weekly Progress Tracking</li>
          </ul>
          <a href="#" class="btn">Get Started</a>
        </div>

        <!-- Advanced Plan -->
        <div class="plan-card advanced-plan">
          <h3>Advanced Plan</h3>
          <p class="plan-price">$69/month</p>
          <ul class="plan-features">
            <li>Unlimited Workout Sessions</li>
            <li>Customized Nutrition Plan</li>
            <li>Access to VIP Classes</li>
            <li>Monthly Fitness Assessment</li>
            <li>24/7 Online Coaching</li>
          </ul>
          <a href="#" class="btn">Get Started</a>
        </div>
      </div>
    </section>
  
    <!-- Faq -->
    <div class="faq-container">
      <div class="faq-header">
        <h3>FAQs</h3>
      </div>
      <div class="faq-accordion">
        <div class="faq-item">
          <div class="faq-title" onclick="toggleAccordion(this)">
            <span
              >Why should I choose an ACE weight management specialist like
              Rajiv?</span
            >
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
      <!-- Appointment -->
      <div class="appointment-section">
        <div class="appointment-content">
          <h2>Ready to Transform Your Life?</h2>
          <p>
            At Fitness With Rajiv, we're dedicated to helping you achieve your
            health and fitness goals. Our personalized approach ensures you get
            the support you need.
          </p>
          <a href="#book-appointment" class="btn-appointment"
            >Book Your Free Consultation</a
          >
        </div>
      </div>


      
      @endsection()