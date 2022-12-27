<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#292929;">
    <ul class="navbar-nav">
        @role('writer')
        <li class="nav-item" id="nav-a">
          <a class="nav-link text-white {{ 'dashboard' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/' }}">Dashboard</a>
        </li>
        @endrole
        @role('admin')
        <li class="nav-item" id="nav-a">
          <a class="nav-link text-white {{ 'admin' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/admin' }}">Dashboard</a>
        </li>
        <li class="nav-item" id="nav-a">
          <a class="nav-link text-white {{ 'logs' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/logs' }}">Logs</a>
        </li>
        <li class="nav-item" id="nav-a">
        @endrole
          <a class="nav-link text-white {{ 'recentPost' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ '/recentPost' }}">Recent Posts</a>
        </li>
        @role('admin')
        <li class="nav-item" id="nav-a">
          <a class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}" id="hover-nav" href="{{ route('admin.users.index') }}">Users</a>
        </li>
        @endrole
      </ul>
      <div class="dropdown mx-auto">
                <a class="btn dropdown-toggle text-white" id="buttt" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="select3" style="background-color: white;">
                    <li class="nav-item  {{ 'create' == request()->path() ? 'active2' : '' }}"  id="nav-b">
                        <a style="margin-left: 20px" class="nav-link" href="/create">Create</a>
                    </li>
                    <li class="nav-item  {{ 'myPost' == request()->path() ? 'active2' : '' }}" id="nav-b">
                        <a style="margin-left: 20px"  class="nav-link" href="/myPost">My Post</a>
                    </li>
                    <li class="nav-item"  id="nav-b">
                        <a style="margin-left: 20px" href="{{ '/logout' }}" class="nav-link" style="text-decoration: none; margin-left: -0.1px;"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
                    </li>
                </div>
            </div>
</nav>

<style>
  #nav-a{
    margin-left: 50px;
  }
  #nav-a:hover {
    background-color:rgba(255,163,26);
  }
  #nav-b{
    padding: 10px;
  }
  #nav-b:hover {
    background-color:rgba(255,163,26);
  }
  #select3 {
    width: 250px;
    height: auto;
  }
  
  .active {
    background-color:rgba(255,163,26);

  }
  .active2 {
    background-color:rgba(255,255,255);
  }
</style>
