
<style>
  /* Sidebar */

  .sidebar a.disabled {
  pointer-events: none;
  opacity: 0.4;
}

  .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 240px;
    background: #5955B3;
    color: #fff;
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: auto;
    z-index: 10;
  }

  .sidebar a {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    border-radius: 10px;
    margin: 4px 12px;
    transition: all 0.3s ease;
  }

  .sidebar a:hover {
    background-color: rgba(255, 255, 255, 0.15);
    transform: translateX(5px);
  }

  .sidebar a.active {
    background-color: rgba(255, 255, 255, 0.25);
    border-left: 4px solid #fff;
  }

  .sidebar-bottom {
    padding: 20px;
    font-size: 0.9rem;
    border-top: 1px solid rgba(255,255,255,0.1);
  }

  /* Responsive */
  @media (max-width: 992px) {
    .sidebar {
      width: 200px;
    }
  }

  @media (max-width: 768px) {
    .sidebar {
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }
    .sidebar.show {
      transform: translateX(0);
    }
  }
</style>

<div class="sidebar" id="sidebar">
  <div>
    <h5 class="text-center mb-4">🎓 Webstome</h5>
    <a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}"><i class="bi bi-house me-2"></i> Dashboard</a>

   

<a href="{{ route('preview') }}" target="_blank" class="{{ Request::is('preview') ? 'active' : '' }}">
  <i class="bi bi-eye me-2"></i> Preview
</a>

 <a href="{{ url('/tampilan') }}" class="{{ Request::is('tampilan') ? 'active' : '' }}"><i class="bi bi-columns-gap me-2"></i> Layout</a>
    <a href="{{ url('/menu') }}" class="{{ Request::is('menu') ? 'active' : '' }}"><i class="bi bi-columns-gap me-2"></i> Menu</a>


    <ul class="list-unstyled">
  @foreach($menus as $menu)
    <li class="nav-item">
      <a href="{{ url($menu->path) }}" 
      
         class="nav-link d-flex align-items-center {{ $menu->status === 'inactive' ? 'disabled text-muted' : '' }}">
        <i class="{{ $menu->icon }} me-2"></i> 
        {{ $menu->name }}
      </a>
    </li>
  @endforeach
</ul>
  </div>
  <div class="sidebar-bottom">


    <a href="{{ url('/logout') }}"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>


    






  </div>
</div>