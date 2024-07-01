@vite([ 'resources/js/app.js'])
<div class="topbar">
    <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
    </div>

    <div class="search">
        <label>
            <input type="text" placeholder="Tìm Kiếm">
            <ion-icon name="search-outline"></ion-icon>
        </label>
    </div>

    <div class="nav-name">
        <!-- <img src="assets/imgs/customer01.jpg" alt=""> -->
        <span id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            Xin chào! {{ Auth::user()->name }}
        </span>
        <div class="dropdown-menu dropdown-menu-end"
            style="background: white; border-radius: 5px; border: 1px solid rgb(4 4 4 / 38%);"
            aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="">
                    <ion-icon name="log-out-outline" style="font-size: 14px;"></ion-icon>
                </span>
                <span class="" style="font-size: 16px;">Đăng xuất</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</div>