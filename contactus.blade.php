@extends('layout')
@section('content')
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

    <!-- Contact Page -->
    <div class="contact-page">
        <div class="contact-header">
            <h1>Feel Free to Contact Us</h1>
        </div>
        <div class="contact-container">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.827463418617!2d76.92197827429625!3d28.69480738125212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d09adaf494579%3A0xf0aefc2abbfbc332!2sAnytime%20Fitness!5e0!3m2!1sen!2sin!4v1728465818030!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="form-container">
                <form id="contectform"  >
                    @csrf()
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label>What's Your Goal?</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="goal[]" value="Weight Management" id="weight"> Weight
                                Management</label>
                            <label><input type="checkbox" name="goal[]" value="Strength" id="strength"> Strength</label>
                            <label><input type="checkbox" name="goal[]" value="Rehab" id="rehab"> Rehab</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date">Preferred Date</label>
                        <input type="date" id="date" name="preferred_date">
                    </div>
                    <div class="form-group">
                        <label for="time">Preferred Time</label>
                        <input type="time" id="time" name="preferred_time">
                    </div>
                    <div class="form-group">
                        <label>How Did You Find Us?</label>
                        <select id="referral" name="referral">
                            <option value="Instagram">Instagram</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Google">Google</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>


        <div class="contact-icons">
            <div class="icon">
                <i class="fas fa-envelope"></i>
                <span>Email: info@example.com</span>
            </div>
            <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
                <span>Location: 123 Street, City</span>
            </div>
            <div class="icon">
                <i class="fas fa-clock"></i>
                <span>Timing: Mon-Fri, 9 AM - 5 PM</span>
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
            <a href="#book-appointment" class="btn-appointment">Book Your Free Consultation</a>
        </div>
    </div>

    <script src=" {{asset('assets/js/contect.js')}}"></script>

    {{-- <script>
        $(document).ready(function() {
            // Handle form submission
            $(document).on('submit', '#contectform', function(ev) {
                ev.preventDefault(); // Prevent default form submission

                // Get the CSRF token
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: base_url + '/admin/contectdata/store', // The URL for the store route
                    type: 'POST',
                    data: $(this).serialize(), // Serialize form data
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Set the CSRF token in the headers
                    },
                    success: function(response) {
                        alert(response.success); // Show success message
                        $('#contactForm')[0].reset(); // Optionally reset the form
                    },
                    error: function(xhr) {
                        // Handle validation errors
                        var errors = xhr.responseJSON.errors;
                        for (var key in errors) {
                            alert(errors[key].join(', ')); // Show error messages
                        }
                    }
                });
            });
        });
    </script> --}}
@endsection()
