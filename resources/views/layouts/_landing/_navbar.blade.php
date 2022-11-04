 <!-- Navbar Start -->
 <div class="container-fluid bg-light position-relative shadow">
     <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
         <a href="{{ route('landing.index') }}" class="navbar-brand font-weight-bold text-secondary"
             style="font-size: 35px;">
             <img style="margin: auto;" src="{{ asset('vendor/tadika/img/logo.png') }}" height="45"
                 alt="{{ config('app.name') }}">
             <span class="text-primary">{{ config('app.name') }}</span>
         </a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
             <div class="navbar-nav font-weight-bold mx-auto py-0">
                 <a href="{{ route('landing.index') }}"
                     class="nav-item nav-link {{ set_active(['landing.index']) }}">Home</a>
                 {{-- <a href="about.html" class="nav-item nav-link">About</a> --}}
                 {{-- <a href="class.html" class="nav-item nav-link">Classes</a> --}}
                 <a href="{{ route('blog.home') }}"
                     class="nav-item nav-link {{ set_active(['blog.home']) }}">Article</a>
                 {{-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> --}}
                 <a href="{{ route('landing.contact') }}"
                     class="nav-item nav-link {{ set_active(['landing.contact']) }}">Contact</a>
             </div>
         </div>
     </nav>
 </div>
 <!-- Navbar End -->
