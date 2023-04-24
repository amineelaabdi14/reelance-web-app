<!DOCTYPE html>
<html lang="en">
    <x-head :title="'Service.ma'" />
<body id="loginContent">
    <x-navbar />
    <div class="hasNavBar">
        @if($errors->all())
          <x-alert :type="'danger'" :message="$errors->all()[0]"  />
            <script>
                myAlert.style.width="100%";
            </script>
        @endif
        <div id="elements-container" class="d-flex flex-column-reverse flex-lg-row align-items-center justify-content-lg-around w-100 mt-5">
            
            <div id="first-container">
                <img src="images/landing.png" id="landing-logo" alt="Freelancer.ma" class="mt-4">
            </div>
    
            <div id="LoginformContainer" class=" mt-5 mt-lg-0">
                <img src="images/logo.png" alt="service.ma" class="mt-4 logoContainer">
                <form id="auth-form" action="{{route('login')}}" class="form d-flex flex-column " method="POST">
                    @csrf
                    <div id="emailFormContainer">
                        <label for="email" class="MyLabels">EMAIL</label><br>
                        <input type="email" name="email"  class="MyInputs" oninput="validateEmail()" autocomplete="off">
                        <div id="emailError" class="text-danger"></div>
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="MyLabels">PASSWORD</label><br>
                        <input type="password" name="password" class="MyInputs">
                        <div id="comfirEmailError" class="text-danger mb-0 "></div>
                    </div>
                    <div id="fullName"></div>
                    <div class="d-flex justify-content-between align-items-center mt-3" style="">
                        <span><a href="#" onclick="createAccount()">Create an account</a></span>
                        <button id="login-btn" type="submit"  name="signMeIn" >Sign In</button>
                    </div>
                </form>
            </div>
            <script src="{{ URL::asset('js/main.js') }}"></script>
        </div>
    </div>
    <x-footer />
</body>
</html>