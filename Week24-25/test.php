<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="" ent="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 

</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->

      <div class="sidebar-menu">
        <ul>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2>Over mij</h2>
      <hr>
      <div class="row">
        <div class="form-group col-md-12">
          <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework <br>            <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
              Github</a>, it contains more themes and background image option</p>
        </div>
      </div>
      <h5>More templates</h5>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="https://user-images.githubusercontent.com/25878302/53659076-e2204680-3c5a-11e9-8c00-0c10bcd945e6.jpg" class="card-img-top rounded-0" alt="Angular pro sidebar">
            <div class="card-body text-center">
                <h6 class="card-title">Angular Pro Sidebar</h6>
                <a href="https://github.com/azouaoui-med/angular-pro-sidebar" target="_blank" class="btn btn-primary btn-sm">Github</a>
                <a href="https://azouaoui-med.github.io/angular-pro-sidebar/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a>
            </div>
          </div>          
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">          
          <div class="card rounded-0 p-0 shadow-sm">
            <img src="https://user-images.githubusercontent.com/25878302/53659497-016ba380-3c5c-11e9-8dfd-4901ddaf090b.jpg" class="card-img-top rounded-0" alt="Angular pro sidebar">
            <div class="card-body text-center">
                <h6 class="card-title">Angular Dashboard</h6>
                <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


<style>
@keyframes swing {
  0% {
    transform: rotate(0deg);
  }
  10% {
    transform: rotate(10deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(-10deg);
  }
  50% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(5deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(-5deg);
  }
  100% {
    transform: rotate(0deg);
  }
}

@keyframes sonar {
  0% {
    transform: scale(0.9);
    opacity: 1;
  }
  100% {
    transform: scale(2);
    opacity: 0;
  }
}
body {
  font-size: 0.9rem;
}
.page-wrapper .sidebar-wrapper,
.sidebar-wrapper .sidebar-brand > a,
.sidebar-wrapper .sidebar-dropdown > a:after,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before,
.sidebar-wrapper ul li a i,
.page-wrapper .page-content,
.sidebar-wrapper input.search-menu,
.sidebar-wrapper .input-group-text,
.sidebar-wrapper .sidebar-menu ul li a,
#show-sidebar,
#close-sidebar {
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

/*----------------page-wrapper----------------*/

.page-wrapper {
  height: 100vh;
}

.page-wrapper .theme {
  width: 40px;
  height: 40px;
  display: inline-block;
  border-radius: 4px;
  margin: 2px;
}

.page-wrapper .theme.chiller-theme {
  background: #1e2229;
}

/*----------------toggeled sidebar----------------*/

.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}

@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}
/*----------------show sidebar button----------------*/
#show-sidebar {
  position: fixed;
  left: 0;
  top: 10px;
  border-radius: 0 4px 4px 0px;
  width: 35px;
  transition-delay: 0.3s;
}
.page-wrapper.toggled #show-sidebar {
  left: -40px;
}
/*----------------sidebar-wrapper----------------*/

.sidebar-wrapper {
  width: 260px;
  height: 100%;
  max-height: 100%;
  position: fixed;
  top: 0;
  left: -300px;
  z-index: 999;
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.sidebar-wrapper a {
  text-decoration: none;
}

/*----------------sidebar-content----------------*/

.sidebar-content {
  max-height: 100%;
  height: 100%;
  overflow-y: auto;
  position: relative;
}

.sidebar-content.desktop {
  overflow-y: hidden;
}

/*--------------------sidebar-brand----------------------*/

.sidebar-wrapper .sidebar-brand {
  padding: 10px 20px;
  display: flex;
  align-items: center;
}

.sidebar-wrapper .sidebar-brand > a {
  text-transform: uppercase;
  font-weight: bold;
  flex-grow: 1;
}

.sidebar-wrapper .sidebar-brand #close-sidebar {
  cursor: pointer;
  font-size: 20px;
}
/*--------------------sidebar-header----------------------*/

.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic {
  float: left;
  width: 60px;
  height: 60px;
  padding: 2px;
  border-radius: 12px;
  margin-right: 15px;
  overflow: hidden;
}

.sidebar-wrapper .sidebar-header .user-pic img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.sidebar-wrapper .sidebar-header .user-info {
  float: left;
}

.sidebar-wrapper .sidebar-header .user-info > span {
  display: block;
}

.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status {
  font-size: 11px;
  margin-top: 4px;
}

.sidebar-wrapper .sidebar-header .user-info .user-status i {
  font-size: 8px;
  margin-right: 4px;
  color: #5cb85c;
}


/*----------------------sidebar-menu-------------------------*/

.sidebar-wrapper .sidebar-menu {
  padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  padding: 15px 20px 5px 20px;
  display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: inline-block;
  width: 100%;
  text-decoration: none;
  position: relative;
  padding: 8px 30px 8px 20px;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  margin-right: 10px;
  font-size: 12px;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
}

.sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
  display: inline-block;
  animation: swing ease-in-out 0.5s 1 alternate;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  content: "\f105";
  font-style: normal;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  background: 0 0;
  position: absolute;
  right: 15px;
  top: 14px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
  padding-left: 25px;
  font-size: 13px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
  content: "\f111";
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
  font-style: normal;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-right: 10px;
  font-size: 8px;
}

.sidebar-wrapper .sidebar-menu ul li a span.label,
.sidebar-wrapper .sidebar-menu ul li a span.badge {
  float: right;
  margin-top: 8px;
  margin-left: 5px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
  float: right;
  margin-top: 0px;
}

.sidebar-wrapper .sidebar-menu .sidebar-submenu {
  display: none;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
  transform: rotate(90deg);
  right: 17px;
}


/*--------------------------page-content-----------------------------*/

.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
  padding-top: 20px;
}

.page-wrapper .page-content > div {
  padding: 20px 40px;
}

.page-wrapper .page-content {
  overflow-x: hidden;
}

</style>
<script>
jQuery(function ($) {

  $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});
</script>
</body>

</html>