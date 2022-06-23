@extends('layouts.main')

@section('stream')
                <!-- Register Section -->
                <div class="parallax-section parallax1" id="contact">
                    <div class="grid grid-pad" >
                        <h2>Teacher Registration</h2>
                        <div class="col-1-2" >
                            <div class="content address">
                                <h3>Come join us!</h3>
                                <p>Learn more about Sabah's traditional games</p>
                                <!-- <address>
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-location"></i>
                                        </div>
                                        <span>Address:</span>
                                        <p>9983 City name, Street name, 232 Apartment C</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-clock"></i>
                                        </div>
                                        <span>Work Time:</span>
                                        <p>Monday - Friday from 9am to 5pm</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-phone"></i>
                                        </div>
                                        <span>Phone:</span>
                                        <p>595 12 34 567</p>
                                    </div>                                  
                                </address> -->
                            </div>
                        </div>
                         <div class="col-1-2 pleft-25" >
                            <div class="content register-form">
                                <form class="form" action="/register" method="post">
                                    @csrf
                                    <input placeholder="First Name" id="first_name" name="first_name" type="text" class="validate" autofocus required value="{{ old('first_name') }}">
                                    <input placeholder="Last Name" id="last_name" name="last_name" type="text" class="validate" autofocus required value="{{ old('last_name') }}">
                                    <input placeholder="Email" id="email" name="email" type="email" class="validate" autofocus required value="{{ old('email') }}">
                                    <input placeholder="Password" id="password" name="password" type="password" class="validate" autofocus required>
                                    <input type="submit" value="Register" id="form-submit" class="btn submit comment-submit" onclick="clicked(event)">
                                </form>
                                <small class="d-block text-right">Already Registered?  <a href="/login">  Login Now!</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Section -->
                
    <script>
        $(document).ready(function ()
        {
            $('select').formSelect();
        });
    </script>
    <script type="text/javascript">
        function clicked(e) {
          if(!confirm('Your account has been created!')) {
            e.preventDefault(); }
        }
    </script>
    <script>
        function myFunction() {
          const inpObj = document.getElementById("first_name", "last_name", "password", "email");
          if (!inpObj.checkValidity())
          {
            document.getElementById("first_name", "last_name", "password", "email").innerHTML = inpObj.validationMessage;
          } else
          {
            document.getElementById("first_name", "last_name", "password", "email").innerHTML = myFunction();
          } 
        } 
    </script>
    <script type = "text/javascript">
        function randomNumber(len) {
            var randomNumber;
            var n = '';
            
            for (var count = 0; count<len; count++){
                randomNumber = Math.floor(randomNumber = 1122 + Math.random()*3344);
                n = randomNumber.toString();
            }
            return n;
        }
        document.getElementById("studentid").value = randomNumber(9);
    </script>
@endsection