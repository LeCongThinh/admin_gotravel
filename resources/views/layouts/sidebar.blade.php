<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">
                    @auth()
                      {{Auth::user()->name}}
                    @endauth()
                  
                  </span>
                  <span class="text-secondary text-small">
                    @auth
                      {{ Auth::user()->role == 1 ? 'Admin' : 'Nhân viên' }}
                    @endauth

                  </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="dashboard">
                <span class="menu-title">Trang chủ</span>

                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tour">
                <span class="menu-title">Quản lý tour</span>
                <i class="mdi mdi-airplane menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Quản lý loại tour</span>
                <i class="mdi mdi-format-list-bulleted-type menu-icon"></i>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Quản lý bài viết</span>
                <i class="mdi mdi-newspaper menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Quản lý tài khoản</span>
                <i class="mdi mdi-account menu-icon"></i>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="login">
                <span class="menu-title">Đăng xuất</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a class="nav-link" href="#" onclick="confirmLogout()">
                <span class="menu-title">Đăng xuất</span>
                <i class="mdi mdi-logout menu-icon"></i>
              </a>
            </li> -->
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <a class="nav-link" href="#" onclick="confirmLogout()">
                <span class="menu-title">Đăng xuất</span>
                  <i class="mdi mdi-logout menu-icon"></i>
             
                </a>
                
              </form>
            </li>
          </ul>
        </nav>

        <script>
          function confirmLogout() {
            var result = confirm("Bạn có chắc chắn muốn đăng xuất không?");
            if (result) {
              // Nếu người dùng xác nhận, chuyển hướng đến trang đăng xuất
              window.location.href = "login";
            }
            if (!result) {
              window.location.current();
            }
          }
        </script>
