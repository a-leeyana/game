<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/">
              <span data-feather="home" class="align-text-bottom"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="server" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('viewAccount') ? 'active' : '' }}" aria-current="page" href="/viewAccount">
              <span data-feather="server" class="align-text-bottom"></span>
              My Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('questions*') ? 'active' : '' }}" href="/questions">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Questions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('questionsOptions') ? 'active' : '' }}" href="/questionsOptions">
              <span data-feather="file" class="align-text-bottom"></span>
              Questions Options
            </a>
          </li>
        </ul>
      </div>
    </nav>