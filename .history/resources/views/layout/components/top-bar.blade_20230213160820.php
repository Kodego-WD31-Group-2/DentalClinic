<nav
      class="navbar navbar-expand-lg shadow-md py-2 bg-custom-1 relative flex items-center w-full justify-between"
    >
      <div class="px-6 w-full flex flex-wrap items-center justify-between">
        <div class="flex items-center">
          <button
            class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              class="w-5"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
              ></path>
            </svg>
          </button>
          <a class="navbar-brand text-blue-600 mr-10" href="">
          <div class="flex items-center">
              <img src="{{ asset('assets/img/logo-1.png')}}" class="w-10" alt="">            
            <div class="text-white">
              Smileville Dental Services
            </div>            
          </div>
        </a>
        </div>
        <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
          <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
            <li class="nav-item">
              <a
                class="nav-link block pr-2 lg:px-2 py-2 text-white rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:text-blue-900 transition duration-150 ease-in-out"
                href="/"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link block pr-2 lg:px-2 py-2 text-white rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:text-blue-900 transition duration-150 ease-in-out"
                href="/services"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link block pr-2 lg:px-2 py-2 text-white rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:text-blue-900 transition duration-150 ease-in-out"
                href="/doctors"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                >Doctors</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link block pr-2 lg:px-2 py-2 text-white rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:text-blue-900 transition duration-150 ease-in-out"
                href="#!"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                >Location</a
              >
            </li>
            @auth
            <li class="nav-item mb-2 lg:mb-0">
              <a
                class="nav-link block pr-2 lg:px-2 py-2 text-white rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:text-blue-900 transition duration-150 ease-in-out"
                href="/dashboard"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                >Dashboard</a
              >
            </li>
            @else
            <li class="nav-item mb-2 lg:mb-0">
              <a
                class="nav-link block pr-2 lg:px-2 py-2 text-white rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:text-blue-900 transition duration-150 ease-in-out"
                href="/contacts"
                data-mdb-ripple="true"
                data-mdb-ripple-color="light"
                >Contact Us</a
              >
            </li>
            @endauth

          </ul>
        </div>

          @auth

              <span class="font-bold uppercase text-white p-2 mx-3">Welcome, {{auth()->user()->name}}!</span>

          <a href="/appointment">
            <button
              type="button"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
              data-mdb-ripple="true"
              data-mdb-ripple-color="light"
            >
              Book an Appointment
            </button>
          </a>
          <li>
              <form class="inline" method="POST" action="/logout">
              @csrf
              <button type="submit"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                  Logout
              </button>
              </form>
          </li>
          @else     

        <div class="flex items-center lg:ml-auto">
          <a href="/login">
            <button
            type="button"
            class="inline-block px-6 py-2.5 mr-2 bg-white text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
          >
            Login
          </button>
        </a>
        <a href="/register">
          <button
            type="button"
            class="inline-block px-6 py-2.5 mr-2 bg-blue-300 text-white font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
          >
            Sign Up
          </button>

        </a>
        <a href="/appointment">
          <button
            type="button"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
          >
            Book an Appointment
          </button>
        </a>
          @endauth

        </div>
      </div>
    </nav>