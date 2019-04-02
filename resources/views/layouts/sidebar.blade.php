<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
        <div class="sidebar-brand">
            <a href="#">{{config('app.name')}}</a>
            <div id="close-sidebar">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-header">
            <div class="user-pic">
                <img class="img-responsive img-rounded"
                     src="https://api.adorable.io/avatars/285/infyom.png"
                     alt="User picture">
            </div>
            <div class="user-info">
          <span class="user-name">
            <strong>{!! Auth::user()->name !!}</strong>
          </span>
                <span class="user-role">Administrator</span>
                <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
            </div>
        </div>
        <div class="sidebar-menu" >
            <ul>
                @include('layouts.menu')
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
        <a href="#">
            <i class="fa fa-bell"></i>
            <span class="badge badge-pill badge-warning notification">3</span>
        </a>
        <a href="#">
            <i class="fa fa-envelope"></i>
            <span class="badge badge-pill badge-success notification">7</span>
        </a>
        <a href="#">
            <i class="fa fa-cog"></i>
            <span class="badge-sonar"></span>
        </a>
        <a href="{{ url('/logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off"></i>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </a>

    </div>
</nav>
