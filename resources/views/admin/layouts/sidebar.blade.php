<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="/img/ecs-logo.png" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text fs-6">ECS Admin</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    
    <li class="{{ Request::is('/admin') ? 'mm-active' : '' }}">
      <a href="/admin">
        <div class="parent-icon"><i class="bi bi-house-door"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    <li class="{{ Request::is('/admin/course') ? 'mm-active' : '' }}">
      <a href="/admin/course">
        <div class="parent-icon"><i class="bi bi-book"></i>
        </div>
        <div class="menu-title">Course Lists</div>
      </a>
    </li>
    {{-- <li class="{{ Request::is('admin/shortlink**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-link-45deg"></i>
        </div>
        <div class="menu-title">Short Links</div>
      </a>
      <ul class="mm-collapse {{ Request::is('admin/shortlink**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('admin/shortlink') ? 'mm-active' : '' }}""> 
          <a href="/admin/shortlink"><i class="bi bi-arrow-right-short"></i>
            Semua Link
          </a>
        </li>
        <li class="{{ Request::is('admin/shortlink/create') ? 'mm-active' : '' }}"> 
          <a href="/admin/shortlink/create"><i class="bi bi-arrow-right-short"></i>
            Buat Link
          </a>
        </li>
      </ul>
    </li> --}}

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->