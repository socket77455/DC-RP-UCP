    <!--header navbar -->
      <nav style="background-color : rgba(0,0,0,0.8); border-bottom: <?php echo $topnavbarcolor; ?> 0.5em solid;" class="navbar navbar-inverse navbar-fixed-top" height="5">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Scroll the navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo $websitename; ?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
               
			  
			      <!--<li class="color-white"><a href="playerlist.php"><i class="fa fa-users"></i> List of connected players </a></li>-->
            </ul>
          </div>
        </div>
      </nav>

    <!-- main menu -->
      <nav style="background-color : rgba(0,0,0,0.8);" class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Scroll navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div id="navbar1" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="color-white"><a href="index.php?page=home"<i class="fa fa-home"> Home</a></li>
			  <li class="color-white"><a href="https://dc-rp.com/forum/"><i class="fa fa-comments"></i> Forums</a></li>
        <li class="color-white"><a href="index.php?page=server"><i class="fa fa-gamepad"></i> Server Information</a></li>
			  <li class="color-white"><a href="index.php?page=donate"><i class="fa fa-shopping-cart"></i> Donate</a></li>
			  <li class="color-white"><a href="index.php?page=staff"><i class="fa fa-star"></i> Staff</a></li>
         <!--<li class="color-white"><a href="faq.php"><i class="fa fa-question"></i> FAQ</a></li>-->
            </ul>
			      <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a id="start" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-sign-in"></i> Control Panel <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li class="dropdown-header"></li>
                  <?php 
                  
                  if(!IsLoggedIn())
                  {
                    echo '<li><a href="index.php?page=login"><img src="images/social/social_samp.jpg"/> Login</a></li>';
                  }
                  else
                  {
                    if($AdminLevel >= 1)
                    {
                      echo '<li><a href="index.php?page=acp&admin=main">Server Administrator</a></li>';    
                    }
                    echo '<li><a href="index.php?page=logout"><img src="images/social/social_samp.jpg"/> Logout</a></li>';
                  }
                  
                  ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>