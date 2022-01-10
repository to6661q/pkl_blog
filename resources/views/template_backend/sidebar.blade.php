<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
            <ul class="sidebar-menu">
              <li class="active"><a class="nav-link" href="{{ route('home') }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Menu</li>
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Post</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('posts.index') }}">Daftar Post</a></li>
                    <li><a class="nav-link" href="{{ route('posts.tampil_hapus') }}">Recycle Post</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-graduation-cap"></i> <span>Kategori</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.index') }}">Daftar Kategori</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i> <span>Tags</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tags.index') }}">Daftar Tags</a></li>
                  </ul>
                </li>

                <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">Daftar User</a></li>
                  </ul>
                </li>
        </aside>
      </div>