<nav id="" class="navbar position-fixed top-0 w-100 shadow-lg   bg-white d-flex flex-column align-content-center pe-4">
    <div class="d-flex flex-row justify-content-between w-100">
        <a href="{{route('home')}}">
          <img id="navLogo" src="/images/logo.png" alt="service.ma" alt="" class="ms-4 mt-1 d-none d-sm-inline" >
        </a>
        <div class="input-group d-flex flex-row align-content-center searchbar">
            <div class="form-outline ms-3" style="width:82%">
              <input type="search" id="form1" class="form-control" placeholder="Search in services" />
            </div>
            <button type="button" class="btn">
              <i class="fas fa-search"></i>
            </button>
          </div>

        <div class="dropdown me-2">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="/images/defaultAvatar.jpg" class="rounded-circle" alt="" style="width:30px;">
           </button>
          <ul class="dropdown-menu me-5">
            <li><a class="dropdown-item" href="/profile">Profile</a></li>
            <li><a class="dropdown-item" href="/my-services">My Services</a></li>
          </ul>
        </div>
    </div>
      <div class="w-100 mt-3 navbar-category">
        <ul class="d-flex flex-row justify-content-around" style="list-style: none;">
          @foreach($categories as $category)
          <li class="mx-4"><a href="">{{$category['name']}}</a></li>
          @endforeach
        </ul>
      </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</nav>