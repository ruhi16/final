    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{!! url('/home') !!}">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{!! url('/register') !!}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{!! url('/login') !!}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
      </div>
      </div>
    </nav>
