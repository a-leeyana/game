
<!-- Header -->
<header id="top-header" class="header-home">
    <div class="grid">
        <div class="col-1-1">
            <div class="content">
                <div class="logo-wrap">
                    <a href="#0" class="logo">Siok Bah!</a>
                </div>
                <nav class="navigation">
                    <input type="checkbox" id="nav-button">
                    <label for="nav-button" onclick></label>
                    <ul class="nav-container">
                        <li><a class='nav-link' href="/">Home</a></li>
                        <li><a class='nav-link' href="/level">Play</a></li>
                        <li><a class='nav-link' href="/about">About</a></li>
                        
                        @auth
                        <li><a class='dropdown-menu'>Welcome back, {{ auth()->user()->first_name }}</a>
                            <ul class="sub-menu">
                                <li><a class='nav-link' href="/dashboard">My Dashboard</a></li>
                                <li><a class='nav-link' href="/viewAccount">My Profile</a></li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>                                            
                            </ul>
                        </li>
                        @else
                        <li><a class='dropdown-menu'>Login</a>
                            <ul class="sub-menu">
                                <li><a class='nav-link' href="/loginStudent">Student</a></li>
                                <li><a class='nav-link' href="/login">Teacher</a></li>                                            
                            </ul>
                        </li>
                        <li><a class='dropdown-menu'>Create Account</a>
                            <ul class="sub-menu">
                                <li><a class='nav-link' href="/registerStudent">Student</a></li>
                                <li><a class='nav-link' href="/register">Teacher</a></li>                         
                            </ul>
                        </li> 
                        @endauth                                   
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->