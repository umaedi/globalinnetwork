<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/cms/dashboard" class="app-brand-link">
        <img lazy="loading" src="{{ asset('assets/img/logo/logo-global-innetwork.png') }}" alt="Logo" width="50px">
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item {{ Request::is('cms/dashboard' ? 'active' : '') }}">
        <a href="/cms/dashboard" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Master Berita</span>
      </li>
      <li class="menu-item  {{ Request::is('cms/berita*') ? 'active' : '' }}">
        <a href="/cms/berita" class="menu-link">
          <i class='menu-icon bx bx-news'></i>
          <div data-i18n="Basic">Berita</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('cms/kategori*') ? 'active' : '' }}">
        <a href="/cms/kategori" class="menu-link">
          <i class='menu-icon bx bx-category'></i>
          <div data-i18n="Basic">Kategori berita</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" onclick="return confirm('Belum bisa digunakan!')" class="menu-link">
          <i class='menu-icon bx bx-station'></i>
          <div data-i18n="Basic">Statistik berita </div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" onclick="return confirm('Belum bisa digunakan!')" class="menu-link">
          <i class='menu-icon bx bx-conversation'></i>
          <div data-i18n="Basic">Komentar</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('cms/menu*') ? 'active' : '' }}">
        <a href="/cms/menu" class="menu-link">
          <i class='menu-icon bx bx-food-menu'></i>
          <div data-i18n="Basic">Menu</div>
        </a>
      </li>
      <li class="menu-item {{ Request::is('cms/halaman*') ? 'active' : '' }}">
        <a href="#" onclick="return confirm('Belum bisa digunakan!')" class="menu-link">
          <i class='menu-icon bx bx-receipt'></i>
          <div data-i18n="Basic">Halaman</div>
        </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Tenant</span>
        <li class="menu-item {{ Request::is('cms/user*') ? 'active' : '' }}">
          <a href="/cms/user" class="menu-link">
            <i class='menu-icon bx bxs-user-detail'></i>
            <div data-i18n="Basic">User</div>
          </a>
      </li>
        <li class="menu-item {{ Request::is('cms/subdomain*') ? 'active' : '' }}">
          <a href="/cms/subdomain" class="menu-link">
            <i class='menu-icon bx bx-intersect'></i>
            <div data-i18n="Basic">Subdomain</div>
          </a>
      </li>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pengaturan</span>
      </li>
      <li class="menu-item {{ Request::is('cms/pengaturan*') ? 'active' : '' }}">
        <a href="#" onclick="return confirm('Belum bisa digunakan!')" class="menu-link">
          <i class='menu-icon bx bx-cog'></i>
          <div data-i18n="Basic">Pengaturan Web</div>
        </a>
    </ul>
  </aside>