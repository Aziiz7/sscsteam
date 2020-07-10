<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SSC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          @if (Auth::user())
          @can('manage-users')
         <li><a href="/students">Students</a></li>
         <li><a href="/">Dashboard</a></li>
         <li><a href="/SendEmail">Send Email</a></li>
          <li><a href="/about">About</a></li>
         <li><a href="/newrequest">New Message</a></li>
         <li><a href="{{ route('admin.users.index') }}">Users Management</a></li>
          @endcan
          @cannot('manage-users')
            <li><a href="/">Dashboard</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/newrequest">New Message</a></li>
            <li><a href="/SendEmail">Send Email</a></li>
          @endcannot
          @else
          @guest
          <li><a href="/about">About</a></li>
          @endguest
          @endif
          </ul>
        </div>
      </div>
    </nav>
