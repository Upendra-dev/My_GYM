@extends('layout')
@section('content')

    <!-- Form -->
    <div class="mentee-form-container">
        <h2>Mentee Enquiry Form</h2>
        <form id="consultingform" method="post">
          @csrf()
    
            <label for="name">Name *</label>
            <input type="text" id="name" name="name" >
    
            <label for="age">Age *</label>
            <input type="number" id="age" name="age" >
    
            <label for="sex">Sex *</label>
            <div>
                <input type="radio" id="male" name="sex" value="Male" >
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female">
                <label for="female">Female</label>
            </div>
    
            <label for="weight">Weight *</label>
            <input type="number" id="weight" name="weight" >
    
            <label for="height">Height *</label>
            <input type="number" id="height" name="height" >
    
            <label for="job">Current Job/Role *</label>
            <input type="text" id="job" name="job" >
    
            <label for="goal">Your Goal *</label>
            <select id="goal" name="goal" >
                <option value="Fat loss">Fat loss</option>
                <option value="Muscle gain">Muscle gain</option>
                <option value="Other">Other (please specify in next question)</option>
            </select>
    
            <label for="current_activity">Current activities and details *</label>
            <textarea id="current_activity" name="activity" rows="4" ></textarea>
    
            <label for="workout_days">How many days do you work out? *</label>
            <input type="number" id="workout_days" name="workout" >
    
            <label for="sleep_time">At what time do you go to bed? *</label>
            <input type="text" id="sleep_time" name="sleep" >
    
            <label for="exercise_type">What type of exercises are you currently doing? *</label>
            <textarea id="exercise_type" name="exercise" rows="4" ></textarea>
    
            <label for="health_conditions">Are you suffering from any health conditions? *</label>
            <div>
                <input type="radio" id="pcos" name="health" value="PCOS">
                <label for="pcos">PCOS</label>
                <input type="radio" id="thyroid" name="health" value="Thyroid">
                <label for="thyroid">Thyroid</label>
                <input type="radio" id="none" name="health" value="None" >
                <label for="none">None</label>
            </div>
    
            <label for="current_meals">Current meals and details *</label>
            <textarea id="current_meals" name="meals" rows="4" ></textarea>
    
            <label for="allergic">Are you allergic to anything? *</label>
            <textarea id="allergic" name="allergic" rows="2" ></textarea>
    
            <label for="food_preference">Any particular food you avoid? *</label>
            <textarea id="food_preference" name="food" rows="2" ></textarea>
    
            <label for="cheat_meals">Do you consume cheat meals? *</label>
            <textarea id="cheat_meals" name="cheat" rows="2" ></textarea>
    
            <label for="preference">Your Preference on Training *</label>
            <select id="preference" name="preference" >
                <option value="12 weeks Fat loss Challenge">12 weeks Fat loss Challenge</option>
                <option value="8-10 sessions">8-10 sessions</option>
                <option value="Customized Plan">Customized Plan</option>
            </select>
    
            <label for="contact">Contact Number/WhatsApp *</label>
            <input type="text" id="contact" name="contact" >
    
            <label for="email">Email ID *</label>
            <input type="email" id="email" name="email" >
    
            <input type="submit" value="Submit">
        </form>
    </div>

          {{-- Ajax for consulting form data sending --}}
          <script src=" {{asset('assets/js/consulting.js')}}"></script>

   
    @endsection()