@extends('layout')
@section('content')

    <!-- Hero Section -->
   <section id="hero" class="breadcrumb-hero" style="background-image: url('assets/images/Dumble.png'); ">
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
    <div class="nutrition-benefits-section">
      <div class="row">
        <div class="column">
          <figure>
           <img src="{{asset('assets/images/icon/no-food.png')}}" alt="">
          </figure>
          <h3>Poor Nutrition</h3>
          <p>
            Poor nutrition, due to inadequate or excessive nutrient intake, can impair immune function, cause fatigue, and increase the risk of chronic diseases like obesity and heart disease. A balanced diet is essential to prevent these health issues and support well-being.
          </p>
        </div>

        <div class="column">
          <figure>
           <img src="{{asset('assets/images/icon/nutritional-supplements.png')}}" alt="">
          </figure>
          <h3>Nutritional Deficiencies</h3>
          <p>
            Nutritional deficiency occurs when the body lacks essential nutrients, leading to health issues such as fatigue, weakness, anemia, and weakened immunity. Common deficiencies include vitamins (e.g., D and B12), minerals (e.g., iron and calcium), and proteins. Addressing these deficiencies requires a balanced diet or appropriate supplementation to restore optimal health.
          </p>
        </div>

        <div class="column">
          <figure>
            <img src="{{asset('assets/images/icon/time.png')}}" alt="">
          </figure>
          <h3>Sedentary Lifestyle</h3>
          <p>
            A sedentary lifestyle, marked by prolonged physical inactivity, is linked to increased risks of obesity, cardiovascular disease, type 2 diabetes, and poor mental health. Regular physical activity is essential to mitigate these health risks and enhance overall well-being.
          </p>
        </div>
      </div>
    </div>

    <!-- Featured -->
    <section class="nutrition-program-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="left-image">
                        <img src="{{asset('assets/images/s2.jpg')}}" alt="Nutrition Program" class="img-fluid rounded shadow" />
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="right-content card p-4 shadow">
                        <h2 class="program-title text-primary">Transform Your Health with Our Nutrition Program</h2>
                        <p>
                            Our nutrition program offers tailored meal plans and expert support to help you achieve your health goals. 
                            Experience the benefits of personalized nutrition designed for your lifestyle.
                        </p>
                        <ul class="program-features list-unstyled mt-3">
                            <li><i class="fas fa-utensils"></i> Personalized Meal Plans</li>
                            <li><i class="fas fa-chalkboard-teacher"></i> Expert Guidance from Nutritionists</li>
                            <li><i class="fas fa-chart-line"></i> Progress Tracking Tools</li>
                            <li><i class="fas fa-users"></i> Interactive Workshops</li>
                            <li><i class="fas fa-comments"></i> Supportive Community</li>
                            <li><i class="fas fa-clock"></i> Flexible Scheduling</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Nutrition and Diets Section -->
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
          <p class="plan-price">₹29/month</p>
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
          <p class="plan-price">₹49/month</p>
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
          <p class="plan-price">₹69/month</p>
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
              obtain all necessary nutrients from -cooked food.
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
    <!-- Footer -->

    @endsection()