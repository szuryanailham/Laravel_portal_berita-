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
  </div>