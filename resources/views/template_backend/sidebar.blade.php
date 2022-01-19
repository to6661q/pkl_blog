<div class="main-sidebar">
  <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
              <a href="{{ route('home') }}">
              <img src="{{ asset('public/frontend/img/Logo_kabupaten_serang.png') }}" 
              alt="" weight="42px" height="53px">	</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">
              <img src="{{ asset('public/frontend/img/Logo_kabupaten_serang.png') }}"
            alt="" weight="21px" height="26px"></a>
          </div>
            <ul class="sidebar-menu">
              <li class="active"><a class="nav-link" href="{{ route('home') }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-landmark"></i><span>Profil</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('profilposts.index') }}">Daftar Postingan Profil</a></li>
                    <li><a class="nav-link" href="{{ route('profilcategory.index') }}">Kategori Postingan Profil</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown"> 
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Berita</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('posts.index') }}">Daftar Berita</a></li>
                    <li><a class="nav-link" href="{{ route('category.index') }}">Kategori Berita</a></li>
                    <li><a class="nav-link" href="{{ route('tags.index') }}">Tags Berita</a></li>
                    <li><a class="nav-link" href="{{ route('posts.tampil_hapus') }}">Recycle Berita</a></li>
                  </ul>
              </li>
              <li class="nav-item dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Admin</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('user.index') }}">Daftar Admin</a></li>
                  </ul>
              </li>
            </ul>
  </aside>
</div>