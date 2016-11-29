 <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
               <!-- .User Profile --> 
               <div class="user-profile">
                  <div class="dropdown user-pro-body">
                     <div>


              
                      <img src="{{ Auth::user()->avatar != null ? asset('uploads/avatars/'. Auth::user()->avatar) : asset('placeholder.png') }}" alt="user-img" class="img-circle">

                      
                      </div>
                     <a href="starter-page.html#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{Auth::user()->getName()}} <span class="caret"></span></a>
                     <ul class="dropdown-menu animated flipInY">
                        <li><a href={{url("profil", Auth::user()->id )}}><i class="ti-user"></i> My Profile</a></li>
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
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
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

                  {{--<li><a href="javascript:void(0)" class="waves-effect"><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i> <span class="hide-menu">Messages<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">6</span></span></a>
                    <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-email fa-fw"></i>Compose</a></li>
                            <li><a href="javascript:void(0)"><i class="icon-notebook fa-fw"></i>Inbox <span class="label label-rouded label-danger pull-right">2</span></a></li>
                    </ul>--}}
                  </li>

                  <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-users fa-fw"></i> <span class="hide-menu">Manage Groups<span class="fa arrow"></span></span></a>
                     <ul class="nav nav-second-level">
                        <li><a href="{{url('groups')}}">My groups<span class="label label-rouded label-danger pull-right">3</span></a></li>
                        <li><a href="{{url('ingroups')}}">Member</a></li>
                     </ul>
                  </li>
                  <li><a href="{{url('contacts')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i> <span class="hide-menu">Contacts
                      
                      {{-- <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">6</span> --}}
                      </span></a>
{{-- 
                   <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-user fa-fw"></i> <span class="hide-menu">Contacts<span class="fa arrow"></span></span></a>
                      <ul class="nav nav-second-level">
                        <li><a href="javascript:void(0)"><i class="fa ti-list fa-fw"></i>Contacts</a></li>
                        <li><a href="javascript:void(0)"><i class="fa icon-user-follow fa-fw"></i>Requests <span class="label label-rouded label-danger pull-right">1</span></a></li>
                     </ul> 
                  </li> --}}

                  <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-wechat fa-fw"></i> <span class="hide-menu">Reminders<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">2</span></span></a>
                     <ul class="nav nav-second-level">
                        <li><a href="{{url('remind')}}"><i class="ti-alarm-clock fa-fw"></i>Send</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-align-left fa-fw"></i>Manage</a></li>
                     </ul>
                  </li>

                  <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="" class="fa fa-commenting fa-fw"></i> <span class="hide-menu">Chat</span></a>
                  </li>



                  {{-- <li>
                     <a href="javascript:void(0)" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Multi Dropdown<span class="fa arrow"></span></span></a>
                     <ul class="nav nav-second-level">
                        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                        <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                        <li>
                           <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                           <ul class="nav nav-third-level">
                              <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                              <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                              <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                              <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                           </ul>
                        </li>
                     </ul>
                  </li> --}}
               </ul>
            </div>
         </div>