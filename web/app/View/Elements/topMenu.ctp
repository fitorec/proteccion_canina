<header>
<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="container">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse"><span>Menu</span></button>
      <a href="#" class="pull-left menubutton hidden-xs"><i class="fa fa-bars"></i></a>
		  <!-- Site name for smallar screens -->
		  <a href="<?php echo Router::url('/'); ?>" class="navbar-brand">
        Protecci&oacute;n<span class="bold">Canina</span>
      </a>
		</div>

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         
        
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right user-data">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <img src="<?php echo Router::url('/'); ?>img/user1.png"> Fito <span class="bold">Rec</span> <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
              <li><a href="<?php
              echo Router::url('/users/login')
              ?>"><i class="fa fa-key"></i> Logout</a></li>
            </ul>
          </li>
          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cloud-upload"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Progress bar -->
                <p>Photo Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						<span class="sr-only">40% Complete</span>
					</div>
			    </div>

                <hr />

                <!-- Progress bar -->
                <p>Video Upload in Progress</p>
                <!-- Bootstrap progress bar -->
                <div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						<span class="sr-only">80% Complete</span>
					</div>
			    </div> 

                <hr />             

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>

          <!-- Sync to server link -->
          <li class="dropdown dropdown-big leftonmobile">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-refresh"></i></a>
            <!-- Dropdown -->
            <ul class="dropdown-menu">
              <li>
                <!-- Using "fa fa-spin" class to rotate icon. -->
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Photos to Server</p>
                <hr />
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                <!-- Dropdown menu footer -->
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-big leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-comments"></i><span class="label label-info">6</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-comments"></i> Chats</h5>
                    <!-- Use hr tag to add border -->                   
                  </li>
                  <li>
                    <hr />
                    <!-- List item heading h6 -->
                    <h6><a href="#">Hi :)</a> <span class="label label-warning pull-right">10:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">How are you?</a> <span class="label label-warning pull-right">20:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">What are you doing?</a> <span class="label label-warning pull-right">14:42</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li>
            
            <!-- Message button with number of latest messages count-->
            <li class="dropdown dropdown-big messages-dd leftonmobile">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i> <span class="label label-primary">3</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-envelope-alt"></i> Messages</h5>
                    <!-- Use hr tag to add border -->
                    
                  </li>
                  <li>
                    <hr /><!-- List item heading h6 -->
                    <h6><a href="#">Hello how are you?</a></h6>
                    <!-- List item para -->
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Today is wonderful?</a></h6>
                    <p>Quisque eu consectetur erat eget  semper...</p>
                    <hr />
                  </li>
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li>

            <!-- Members button with number of latest members count -->
            <li class="dropdown dropdown-big">
              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="fa fa-user"></i> <span class="label label-success">7</span> 
              </a>

                <ul class="dropdown-menu">
                  <li class="dropdown-header padless">
                    <!-- Heading - h5 -->
                    <h5><i class="fa fa-user"></i> Users</h5>
                    <!-- Use hr tag to add border -->                    
                  </li>
                  <li>
                    <hr />
                    <!-- List item heading h6-->
                    <h6><a href="#">John Doe</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Iron Man</a> <span class="label label-important pull-right">Premium</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>
                  <li>
                    <h6><a href="#">Salamander</a> <span class="label label-warning pull-right">Free</span></h6>
                    <div class="clearfix"></div>
                    <hr />
                  </li>                  
                  <li>
                    <div class="drop-foot">
                      <a href="#">View All</a>
                    </div>
                  </li>                                    
                </ul>
            </li> 
        </ul>
      </nav>

    </div>
  </div>
</header>
<!-- Main content starts -->
