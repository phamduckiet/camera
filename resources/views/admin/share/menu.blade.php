<div class="sidebar-wrapper">
    <div>
      <div class="logo-wrapper">
            <h1 class="text-center">Jerry</h1>
        <div class="back-btn">
          <i class="fa fa-angle-left"></i>
        </div>
        {{-- <div class="toggle-sidebar">
          <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
        </div> --}}
      </div>
      <div class="logo-icon-wrapper">
        <a href="index.html">
          <img class="img-fluid" src="/admin/assets/images/logo/logo-icon.png" alt="">
        </a>
      </div>
      <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
          <i data-feather="arrow-left"></i>
        </div>
        <div id="sidebar-menu">
          <ul class="sidebar-links" id="simple-bar">
            <li class="back-btn">
              <a href="index.html">
                <img class="img-fluid" src="/admin/assets/images/logo/logo-icon.png" alt="">
              </a>
              <div class="mobile-back text-end">
                <span>Back</span>
                <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
              </div>
            </li>
            <br>
            <li class="sidebar-list">
              <label class="badge badge-success">Admin</label>
              <a class="sidebar-link sidebar-title" href="#">
                <i data-feather="home"></i>
                <span>Thiêt Bị</span>
              </a>
              <ul class="sidebar-submenu">
                <li>
                  <a href="{{Route('viewthietbi')}}">Tạo Mới</a>
                </li>
                <li>
                  <a href="{{Route('dsthietbi')}}">Danh Sách</a>
                </li>
              </ul>
            </li>
            <li class="sidebar-list">
              <label class="badge badge-danger">New</label>
              <a class="sidebar-link sidebar-title" href="#">
                <i data-feather="box"></i>
                <span>Sản Phẩm </span>
              </a>
              <ul class="sidebar-submenu">
                <li>
                  <a href="">Tạo Mới</a>
                </li>
                <li>
                  <a href="">Danh Sách</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="right-arrow" id="right-arrow">
          <i data-feather="arrow-right"></i>
        </div>
      </nav>
    </div>
</div>
