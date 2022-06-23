@extends('layouts.main')

@section('stream')
                <!-- Contact Section -->
                <div class="parallax-section parallax1" id="loginTeacher">
                    <div class="grid grid-pad" >
                        <h2>Student Login</h2>
                    <div class="col-1-2" >
                            <div class="content address">
                            <h3>Come join us!</h3>
                                <p>Learn more about Sabah's traditional games</p>
                            </div>
                        </div>
                         <div class="col-1-2 pleft-25" >
                            <div class="content register-form">
                                <form class="form" action="/login" method="post">
                                    @csrf
                                    <input placeholder="Email" id="studentemail" name="studentemail" type="email" class="validate" autofocus required value="{{ old('studentemail') }}">
                                    <input placeholder="Password" id="studentpassword" name="studentpassword" type="password" class="validate" autofocus required>
                                    <input type="submit" value="Login" id="form-submit" class="btn submit comment-submit">
                                </form>
                                <small class="d-block text-right">Not Registered Yet?  <a href="/registerStudent">  Register Now!</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Section -->
@endsection