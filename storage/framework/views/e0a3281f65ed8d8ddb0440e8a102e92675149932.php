 <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
               <!-- .User Profile --> 
               <div class="user-profile">
                  <div class="dropdown user-pro-body">
                     <div>


              
                      <img src="<?php echo e(Auth::user()->avatar != null ? asset('uploads/avatars/'. Auth::user()->avatar) : asset('placeholder.png')); ?>" alt="user-img" class="img-circle">

                      
                      </div>
                     <a href="starter-page.html#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo e(Auth::user()->getName()); ?> <span class="caret"></span></a>
                     <ul class="dropdown-menu animated flipInY">
                        <li><a href=<?php echo e(url("profil", Auth::user()->id )); ?>><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="starter-page.html#"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="starter-page.html#"><i class="ti-email"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="starter-page.html#"><i class="ti-settings"></i> Account Setting</a></li>
                        <li role="separator" class="divider"></li>
                        
                        <li><a  onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                     </ul>
                  </div>
               </div>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
               <!-- .User Profile --> 
               <ul class="nav" id="side-menu">
                  <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                     <!-- / Search input-group this is only view in mobile-->
                     <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span> 
                     </div>
                     <!-- /input-group -->
                  </li>
                  <li class="nav-small-cap m-t-10">--- Main Menu</li>
                  <li><a href="javascript:void(0)" class="waves-effect"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i> <span class="hide-menu">Dashboard</span></a></li>

                  
                  </li>

                  <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-users fa-fw"></i> <span class="hide-menu">Manage Groups<span class="fa arrow"></span></span></a>
                     <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(url('groups')); ?>">My groups<span class="label label-rouded label-danger pull-right">3</span></a></li>
                        <li><a href="<?php echo e(url('ingroups')); ?>">Member</a></li>
                     </ul>
                  </li>
                  <li><a href="<?php echo e(url('contacts')); ?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> <span class="hide-menu">Contacts
                      
                      
                      </span></a>


                  <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-wechat fa-fw"></i> <span class="hide-menu">Reminders<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">2</span></span></a>
                     <ul class="nav nav-second-level">
                        <li><a href="<?php echo e(url('remind')); ?>"><i class="ti-alarm-clock fa-fw"></i>Send</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-align-left fa-fw"></i>Manage</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-commenting fa-fw"></i> <span class="hide-menu">Chat</span></a>
                  </li>



                  
               </ul>
            </div>
         </div>