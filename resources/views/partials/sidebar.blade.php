<div class="d-flex flex-column flex-shrink-0 p-4 bg-light">

    
  @guest
    <span class="fs-4 @guest text-secondary @endguest">Admin menu</span>
  @else
    <span class="fs-4">{{ Auth::user()->name }}</span>
  @endauth
    
  
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="{{route('admin.dashboard')}}" class="nav-link
      @guest text-black-50 @else text-dark @endauth
      {{Route::currentRouteName() == 'admin.dashboard'?'active text-white':''}}" aria-current="page">
        Dashboard
      </a>
    </li>
    <li>
      <a href="{{route('admin.projects.index')}}" class="nav-link 
      @guest text-black-50 @else text-dark @endauth
      {{Route::currentRouteName() == 'admin.projects.index'?'active text-white':''}}">
        Projects
      </a>
    </li>
  </ul>
</div>
  