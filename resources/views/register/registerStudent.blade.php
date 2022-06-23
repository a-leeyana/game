@extends('layouts.main')

@section('stream')
                <!-- Register Section -->
                <div class="parallax-section parallax1" id="contact">
                    <div class="grid grid-pad" >
                        <h2>Student Registration</h2>
                        <div class="col-1-2" >
                            <div class="content address">
                                <h3>Come join us!</h3>
                                <p>Learn more about Sabah's traditional games</p>
                            </div>
                        </div>
                         <div class="col-1-2 pleft-25" >
                            <div class="content register-form">
                                <form class="form" action="/register" method="post">
                                    @csrf
                                    <input placeholder="First Name" id="studentfirst_name" name="studentfirst_name" type="text" class="validate" autofocus required value="{{ old('studentfirst_name') }}">
                                    <input placeholder="Last Name" id="studentlast_name" name="studentlast_name" type="text" class="validate" autofocus required value="{{ old('studentlast_name') }}">
                                    <input placeholder="Email" id="studentemail" name="studentemail" type="email" class="validate" autofocus required value="{{ old('studentemail') }}">
                                    <input placeholder="Password" id="studentpassword" name="studentpassword" type="password" class="validate" autofocus required>
                                    <input type="submit" value="Register" id="form-submit" class="btn submit comment-submit" onclick="clicked(event)">
                                </form>
                                <small class="d-block text-right">Already Registered?  <a href="/loginStudent">  Login Now!</a></small>
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
          const inpObj = document.getElementById("studentfirst_name", "studentlast_name", "studentpassword", "studentemail");
          if (!inpObj.checkValidity())
          {
            document.getElementById("studentfirst_name", "studentlast_name", "studentpassword", "studentemail").innerHTML = inpObj.validationMessage;
          } else
          {
            document.getElementById("studentfirst_name", "studentlast_name", "studentpassword", "studentemail").innerHTML = myFunction();
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