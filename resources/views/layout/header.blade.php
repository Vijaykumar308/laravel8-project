<header>
    <ul class="navbar_icons">
        <li> <i class="fa-solid fa-s olid fa-bell"></i>  </li>

        <li class="dropdown">
            <i class="fa-solid fa-circle-user" id="userAccount"></i>
            <ul class="user_profile dropdown-content" id="userProfile">
                <a href="{{url('users/profile')}}"><li>View Profile</li></a>
                <a href="{{ asset('users/changePassword')}}"><li>change password</li></a>
                <a href="#"><li>Logout</li></a>
            </ul>
        </li>
    </ul>
</header>
