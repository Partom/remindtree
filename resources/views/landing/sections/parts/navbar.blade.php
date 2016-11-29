<style>
.searchbardiv{
	display: block;
	position: fixed;
	background: #7D1935 ;
	top: 50px;
	right: 0px;
	z-index: 1001;
	width: 100%;
	max-width: 100%;
	padding: 10px;
	margin: 0px;
}
.buttonsearch{
	position: fixed;
	top :18px;
	float: right;
	right: 0px;
	margin-right: 10px;
	background-color: transparent;
	border: 0px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.buttonsearch:hover{
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border: 0px;

}
.buttonsearch:focus{
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border: 0px;

}
#formsearch{
	display: none;
}
.glyphicon.glyphicon-search {
	font-size: 18px;
}
#searchbox {
	
	box-shadow: none;
	padding: 8px 14px;
}
#searchbox:hover {
	box-shadow: none;
}

.form-control:focus {
	border-color: #ccc;
	}



.navbar-toggle {
	margin-right: 35px;
	border: none;
	background: transparent !important;
}
.navbar-toggle:hover {
	background: transparent !important;
}
.navbar-toggle .icon-bar {
	width: 22px;
	transition: all 0.2s;
}
.navbar-toggle .top-bar {
	transform: rotate(45deg);
	transform-origin: 10% 10%;
}
.navbar-toggle .middle-bar {
	opacity: 0;
}
.navbar-toggle .bottom-bar {
	transform: rotate(-45deg);
	transform-origin: 10% 90%;
}
.navbar-toggle.collapsed .top-bar {
	transform: rotate(0);
}
.navbar-toggle.collapsed .middle-bar {
	opacity: 1;
}
.navbar-toggle.collapsed .bottom-bar {
	transform: rotate(0);
}

.margright {
        margin-right: 10%;
    }
.margleft {
        margin-left: 50px;
}

.navbar-nav #drp {
    border-radius: 5px;
	margin-top: 4px;
	padding: 11px 11px 11px 11px;
    background: #007EE5;
    text-transform: uppercase;
    font-weight: 400;
    letter-spacing: 1px;
    color: #ffffff;
    border: 0px;


}
.shadow {
 -webkit-box-shadow: 0px 3px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow:    0px 3px 0px rgba(0, 0, 0, 0.3);
    box-shadow:         0px 3px 0px rgba(0, 0, 0, 0.3);
}


.tts:hover {
	color:black;
}
@media only screen and (max-width: 480px) {
    #removemargin {margin-right:000px;}
}
@media only screen and (min-width: 480px) and (max-width: 768px) {
    #removemargin {margin-right:000px;}
}





</style>




<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="margleft">
      <a class="navbar-brand navbar-left " href="{{url('/')}}">LOGO HERE</a>
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right margright" id="removemargin">
        <li class=""><a href="#" data-scroll-nav="15" id="features">Features <span class="sr-only">(current)</span></a></li>
        <li><a href="#">FAQ</a></li>
		 <li><a href="#" data-toggle="modal" data-target="#myModalContact">Contact Us</a></li>
		 @if(Auth::guest())
        <li class="dropdown active">
          <a href="#" id="drp" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">SIGNUP <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('pregister')}}">Personal account</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{url('bregister')}}">Business account</a></li>
          </ul>
        </li>
		@else
		<li><a id="drp"  href="{{url('dashboard')}}" class="btn btn-default button" >Dashboard</a></li>
		@endif



      </ul>
    </div><!-- /.navbar-collapse -->
   
  </div><!-- /.container-fluid -->
 
</nav>
