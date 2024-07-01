<div class="navigation">
    <ul>
        <li>
            <a href="#" style="margin-top: 10px;">

                <span class="icon" style="margin-top: 5px;">
                    <!-- <ion-icon name="logo-apple"></ion-icon> -->
                    <img src="{{ asset('/imgs/logoDT.png') }}" alt="" style="width: 50px; height: 50px;">
                </span>
                <span class="title" style="font-size: 20px; line-height: 1.5; font-weight: 500;">Hệ thông quản lý
                    <br>
                    <span style="font-size: 25px; font-weight: 700;">Huyện Dầu Tiếng</span>

                </span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title">Customers</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="chatbubble-outline"></ion-icon>
                </span>
                <span class="title">Messages</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="help-outline"></ion-icon>
                </span>
                <span class="title">Help</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title">Settings</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">Password</span>
            </a>
        </li>

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>