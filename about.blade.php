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

  <!-- ABou RAjiv -->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="about-title">
            <h2>Rajiv's Story: From Wrestling to Inspiring Coach</h2>
          </div>
          <div class="about-content">
            <p>
              Rajiv's journey from the wrestling mat to becoming a renowned
              coach is an inspiration. His dedication and passion have
              transformed the lives of many aspiring athletes.
            </p>
            <p>
              Through hard work and perseverance, Rajiv has developed a
              coaching philosophy that emphasizes resilience, discipline, and
              the importance of mental strength in sports.
            </p>
            <p>Whether you’re seeking guidance from the best weight loss coach online for a specific hypothyroidism diet plan or a diet plan for PCOS management, I’m here to help. Together, we will develop diet charts to make weight loss possible and a comprehensive weight loss management program based on your lifestyle.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 about-img">
          <img src="{{asset('assets/images/rajiv.JPG')}}" alt="Rajiv Coaching" />
        </div>
      </div>
    </div>
  </section>

  <!-- What He Did -->
  <section class="what-did">
    <div class="container">
      <div class="what-title">Here's what I did:</div>
      <div class="what-content">
        <p>
          <i class="fa-solid fa-caret-up"></i> Simple workouts at home, went
          to the gym, and even walked regularly.
        </p>
        <p>
          <i class="fa-solid fa-caret-up"></i> Ate all the foods I loved but
          practiced controlling portion sizes and choosing healthier options.
        </p>
        <p>
          So, that’s my story about weight loss. Let me tell you how “Pure-Fitness” was born.
        </p>
      </div>
    </div>

    <div class="counter-section" id="counterSection">
      <div class="counter-item">
        <img src="{{asset('assets/images/icon/quality.png')}}" alt="Experience" />
        <h3 class="counter" data-target="10">0+</h3>
        <p>Experience</p>
      </div>
      <div class="counter-item">
        <img src="{{asset('assets/images/icon/classes.png')}}" alt="Classes" />
        <h3 class="counter" data-target="50">0+</h3>
        <p>Classes Conducted</p>
      </div>
      <div class="counter-item">
        <img src="{{asset('assets/images/icon/goal.png')}}" alt="Success Stories" />
        <h3 class="counter" data-target="100">0+</h3>
        <p>Success Stories</p>
      </div>
      <div class="counter-item">
        <img src="{{asset('assets/images/icon/certificate.png')}}" alt="Certifications" />
        <h3 class="counter" data-target="5">0+</h3>
        <p>Certifications</p>
      </div>
      <div class="counter-item">
        <img src="{{asset('assets/images/icon/customer.png')}}" alt="Clients" />
        <h3 class="counter" data-target="200">0+</h3>
        <p>Clients</p>
      </div>
    </div>

    <div class="additional-content">
      <p>
        Fitness is not just about the numbers; it's about how you feel and the
        journey you take. I believe that with the right mindset, anyone can
        achieve their goals.
      </p>
      <p>
        Throughout this journey, I've learned the importance of consistency
        and dedication. Small daily efforts can lead to significant changes
        over time.
      </p>
      <p>
        Join me as we continue to inspire each other and reach new heights in
        our fitness journeys together!
      </p>
    </div>
  </section>

  <!-- Vision Section -->
  <section class="vision-section">
      <div class="vision-image">
          <img src="{{asset('assets/images/strength training.jpeg')}}" alt="Vision Image" />
      </div>
      <div class="vision-content">
          <h2>Vision with Rajiv</h2>
          <p>
            At Fitness with Rajiv, our vision is to empower individuals through fitness and well-being. We believe that everyone has the potential to achieve their fitness goals and lead a healthier, happier life. Our mission is to provide the essential tools, expert guidance, and a supportive community to inspire lasting transformation.
          </p>
          <p>
            We are dedicated to creating a positive and inclusive environment where every individual feels welcomed and motivated. Join us on this journey to unlock your true potential and redefine your limits!
          </p>
      </div>
  </section>
  
  <!-- Certificate Section -->
  {{-- <section class="certificates-section">
    <div class="certificates-title">Rajiv's Certifications</div>
    <div class="certificates-grid">
      <div class="certificate-item">
        <img
          src="{{asset('assets/images/s1.jpg')}}"
          alt="Certificate 1"
          onclick="openModal(this.src)"
        />
        <p>ABC</p>
      </div>
      <div class="certificate-item">
        <img
          src="{{asset('assets/images/s1.jpg')}}"
          alt="Certificate 2"
          onclick="openModal(this.src)"
        />
        <p>ABC</p>
      </div>
      <div class="certificate-item">
        <img
          src="{{asset('assets/images/s1.jpg')}}"
          alt="Certificate 3"
          onclick="openModal(this.src)"
        />
        <p>ABC</p>
      </div>
      <div class="certificate-item">
        <img
          src="{{asset('assets/images/s1.jpg')}}"
          alt="Certificate 4"
          onclick="openModal(this.src)"
        />
        <p>ABC</p>
      </div>
      <div class="certificate-item">
        <img
          src="{{asset('assets/images/s1.jpg')}}"
          alt="Certificate 5"
          onclick="openModal(this.src)"
        />
        <p>ABC</p>
      </div>
    </div>
  </section> --}}

<!-- Certificate Section -->
<section class="certificates-section">
  <div class="certificates-title">Rajiv's Certifications</div>
  <div class="certificates-grid">
    <div class="certificate-item">
      <img
        src="{{asset('assets/images/s1.jpg')}}"
        alt="Certificate 1"
        onclick="openModal(this.src)"
      />
      <p>ABC</p>
    </div>
    <div class="certificate-item">
      <img
       src="{{asset('assets/images/s1.jpg')}}"
        alt="Certificate 2"
        onclick="openModal(this.src)"
      />
      <p>ABC</p>
    </div>
    <div class="certificate-item">
      <img
        src="{{asset('assets/images/s1.jpg')}}"
        alt="Certificate 3"
        onclick="openModal(this.src)"
      />
      <p>ABC</p>
    </div>
    <div class="certificate-item">
      <img
       src="{{asset('assets/images/s1.jpg')}}"
        alt="Certificate 4"
        onclick="openModal(this.src)"
      />
      <p>ABC</p>
    </div>
    <div class="certificate-item">
      <img
        src="{{asset('assets/images/s1.jpg')}}"
        alt="Certificate 5"
        onclick="openModal(this.src)"
      />
      <p>ABC</p>
    </div>
  </div>
</section>

<div id="myModal" class="modal" onclick="closeModal()">
  <img id="modalImage" src="" alt="Certificate Modal" />
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





















  