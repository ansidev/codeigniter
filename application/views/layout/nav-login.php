        @if(!Auth::check())
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Login</button>
          </form>
        @else
        	<div class="navbar-text navbar-right">Welcome, {{ $user }}</div>
        @endif