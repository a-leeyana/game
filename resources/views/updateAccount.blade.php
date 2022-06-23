@extends('layouts.main')

@section('stream')
                <!-- View Section -->
                <div class="parallax-section parallax1" id="view">
                    <div class="grid grid-pad" >
                        <h2>Teacher's Profile</h2>
                         <div class="col-1-2" >
                            <div class="content">
                            <address>
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-user"></i>
                                        </div>
                                        <p>Full name : {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <p>Email : {{ auth()->user()->email }}</p>
                                    </div>
                                    
                                    <div>
                                        <div class="box-icon">
                                            <i class="icon-lock"></i>
                                        </div>
                                        <p>Password : {{ auth()->user()->password }}</p>
                                    </div>                                  
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End View Section -->
@endsection