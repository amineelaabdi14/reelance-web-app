<div id="sideBar" class="shadow-lg MyNavigation position-fixed bottom-0 start-0 d-flex flex-column justify-content-between"style="">
    <ul id="sideList" class="d-flex align-items-start flex-column p-0 ps-md-2">
        <li class="liLinks text-dark btn mb-3 mt-4 d-flex flex-column flex-md-row align-items-center" ><i class="fa-solid fa-user b- fs-5"></i><a href="/profile" class="ms-3 d-none d-md-inline fw-semibold ">Profile</a></li> 

        <li class="liLinks text-dark btn mb-3 mt-1 d-flex flex-column flex-md-row align-items-center "><i class="fa-solid fa-people-arrows fs-5"></i><a href="/dashboard" class="ms-3 d-none d-md-inline fw-semibold ">My Services</a></li> 
    </ul>
    <a id="signOutBtn" href="includes/signout.php?signout=1" class="d-block">
        <div class=" setRedColor d-flex flex-column flex-md-row justify-content-center align-items-center mb-5">
            <i class=" setRedColor fa-solid fa-right-from-bracket fs-5  m-auto m-md-0"></i>
            <span id="signOutText" class="setRedColor d-none d-md-inline ms-3" style="opacity: 0.9;">Sign Out</span>
        </div>
    </a>
    
</div>

<script>
    let element= {{$element}};
    document.querySelectorAll('li.liLinks > i')[element].style.color="#0c5ca0";
    document.querySelectorAll('li.liLinks > a')[element].style.color="#0c5ca0";
</script>