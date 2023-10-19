<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link {{ Request::is('dashboard')?'active':'' }} d-flex align-items-center gap-2 active" aria-current="page" href="#">
          <svg class="bi"><use xlink:href="#house-fill"/></svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="/dashboard/posts" class="nav-link {{ Request::is('dashboard/posts')?'active':'' }} d-flex align-items-center gap-2" href="#">
          <svg class="bi"><use xlink:href="#file-earmark"/></svg>
         My Post
        </a>
      </li>
      <li>
          <div class="nav-item text-nowrap">
              <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3">
                  <li class="bi bi-box-arrow-right" style="color: black"></li>
                  Logout
              </button>
              </form>
            </div>
      </li>
    </ul> 
    @can('admin')
    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
      <span>Administrator </span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a href="/dashboard/categories" class="nav-link {{ Request::is('dashboard/categories*')?'active':'' }} d-flex align-items-center gap-2" >
          <i class="bi bi-grid"></i>
        Post Categories
        </a>
      </li>
    </ul>
    @endcan
  </div>