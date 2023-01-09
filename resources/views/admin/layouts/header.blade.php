<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <!-- Search Bar -->
            <div class="search-bar flex-grow-1">
                <div class="position-relative search-bar-box">
                </div>
            </div>

            <!-- Top bar menu -->
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <!-- zoom -->
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="/zoom" id="menubar-clickJoinZoom"
                            role="button"> <img width="30" src="https://img.icons8.com/color/48/FFFFFF/zoom.png" />
                            <span class="header-text text-primary mb-0 ">Zoom</span>
                        </a>
                    </li>

                    <!-- không sử dụng, không xoá, nếu xoá sẽ lỗi -->
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 g-3 p-3">
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-notifications-list">
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-message-list">
                            </div>
                        </div>
                    </li>
                    <!-- không sử dụng, không xoá, nếu xoá sẽ lỗi -->

                </ul>
            </div>

            <div class="user-box dropdown float-end">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" class="user-img" alt="">
                    <div class="user-info ps-3">
                        <!-- Lấy ID ẩn vào thẻ tên -->
                        <p class="user-name mb-0 text-primary fw-bold">
                            Họ tên
                        </p>
                        <p class="designattion mb-0"> <span>email + user_id</span>
                        </p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:;"><i
                                class="lni lni-envelope"></i><span>email + user_id</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li><a class="dropdown-item" href="{{route('admin.logout')}}"><i
                                class='bx bx-log-out-circle'></i><span>Đăng xuất</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
