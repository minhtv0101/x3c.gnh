<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src=" {{ asset('/backend/assets/images/favicon/logo-icon.png') }} " class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">X3NS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">Trang chủ</li>
        <li>
            <a href="/">
                <div class="parent-icon">
                    <i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Trang chủ</div>
            </a>
        </li>
        <li>
            <a class="user-30d hidden" href="/zoom">
                <div class="parent-icon">
                    <img width="25" src="https://img.icons8.com/color/48/FFFFFF/zoom.png" />
                </div>
                <div class="menu-title">Vào ZOOM</div>
            </a>
        </li>

        <li class="menu-label user-30d hidden">Báo cáo</li>
        <li class="user-30d hidden">
            <a href="/thoiquen">
                <div class="parent-icon">
                    <i class="bx bx-check-circle"></i>
                </div>
                <div class="menu-title">4 Ảnh CHIẾN TÍCH</div>
            </a>
        </li>
        <li class="user-30d hidden">
            <a href="/30d/forms/checkindnt">
                <div class="parent-icon">
                    <i class="bx  bx bx-user-check"></i>
                </div>
                <div class="menu-title">Checkin ĐNT</div>
            </a>
        </li>
        <li>
                <a class="user-30d hidden" href="/thoiquen/lichsu">
                    <div class="parent-icon">
                        <i class="bx bx-history"></i>
                    </div>
                    <div class="menu-title">Lịch sử Thói quen</div>
                </a>
        </li>
        <!-- menu dành riêng cho học viên 30d -->
        <div id="nav30d" class="user-30d hidden">

            <li class="menu-label">Khoá 30 day</li>
            <li>
                <a href="/30d/">
                    <div class="parent-icon">
                        <i class="bx bx-calendar"></i>
                    </div>
                    <div class="menu-title">Tổng quan 30D</div>
                </a>
            </li>
            <!-- Xem lại 3 ngày -->
            <li>
                <a href="/3d/xemlai.php">
                    <div class="parent-icon">
                        <i class="bx bx-video"></i>
                    </div>
                    <div class="menu-title">Xem lại video 3D</div>
                </a>
            </li>
            <!-- ADMIN -->
            <li class="user-admin hidden">
                <a href="/30d/admin">
                    <div class="parent-icon">
                        <i class="bx bx-user-x"></i>
                    </div>
                    <div class="menu-title">Admin/BTC</div>
                </a>
            </li>
            <!-- Mentor -->
            <li class="user-30d-mentor hidden">
                <a href="/30d/mentor">
                    <div class="parent-icon">
                        <i class="bx bx-user-plus"></i>
                    </div>
                    <div class="menu-title">Trang học tập Mentor</div>
                </a>
            </li>
            <!-- Mentee -->
            <li class="user-30d-mentee hidden">
                <a href="/30d/mentee">
                    <div class="parent-icon">
                        <i class="bx bx-user-minus"></i>
                    </div>
                    <div class="menu-title">Trang học tập Mentee</div>
                </a>
            </li>

        </div>
        <li class="menu-label">Quản lý thành viên</li>
        <li>
            <a href="/dangnhap/dangxuat.php">
                <div class="parent-icon">
                    <i class="bx bx-log-out"></i>
                </div>
                <div class="menu-title">Đăng xuất</div>
            </a>

        </li>

    </ul>
    <!--end navigation-->
</div>
