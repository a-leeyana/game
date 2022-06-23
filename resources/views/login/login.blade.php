@extends('layouts.main')

@section('stream')
                <!-- Contact Section -->
                <div class="parallax-section parallax1" id="loginTeacher">
                    <div class="grid grid-pad" >
                        <h2>Teacher Login</h2>
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
                                <form class="form" action="/login" method="post">
                                    @csrf
                                    <input placeholder="Email" id="email" name="email" type="email" class="validate" autofocus required value="{{ old('email') }}">
                                    <input placeholder="Password" id="password" name="password" type="password" class="validate" autofocus required>
                                    <input type="submit" value="Login" id="form-submit" class="btn submit comment-submit">
                                </form>
                                <small class="d-block text-right">Not Registered Yet?  <a href="/register">  Register Now!</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Section -->
@endsection