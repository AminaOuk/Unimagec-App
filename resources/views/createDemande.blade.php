<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<title>Unimagec |fiche de creation des articles </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/logo.ico" />

<link type="text/css" rel="stylesheet" href="css/components.css" />
<link type="text/css" rel="stylesheet" href="css/custom.css" />


<link type="text/css" rel="stylesheet" href="vendors/jquery-validation-engine/css/validationEngine.jquery.css" />
<link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker.min.css">
<link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker3.css">
<link type="text/css" rel="stylesheet" href="vendors/datetimepicker/css/DateTimePicker.min.css">
<link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />


<link type="text/css" rel="stylesheet" href="css/pages/form_validations.css" />
<link type="text/css" rel="stylesheet" href="#" id="skin_change" />

</head>
<body>
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
<div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
<img src="img/loader.gif" style=" width: 40px;" alt="loading...">
</div>
</div>
<div id="wrap">
<div id="top">

<nav class="navbar navbar-static-top">
<div class="container-fluid m-0">
<a class="navbar-brand" href="">
<h4><img src="img/Logo-Unimagec.png" class="admin_img" alt="logo"></h4>
</a>
<div class="menu mr-sm-auto">
<span class="toggle-left" id="menu-toggle">
<i class="fa fa-bars"></i>
</span>
</div>
<div class="top_search_box d-none d-md-flex">
<form class="header_input_search">
<input type="text" placeholder="Search" name="search">
<button type="submit">
<span class="font-icon-search"></span>
</button>
<div class="overlay"></div>
</form>
</div>
<div class="topnav dropdown-menu-right">
<div class="btn-group small_device_search" data-toggle="modal" data-target="#search_modal">
<i class="fa fa-search text-primary"></i>
</div>
<div class="btn-group">
<div class="notifications no-bg">
<a class="btn btn-default btn-sm messages" data-toggle="dropdown" id="messages_section"> <i class="fa fa-envelope-o fa-1x"></i>
<span class="badge badge-pill badge-warning notifications_badge_top">8</span>
</a>
<div class="dropdown-menu drop_box_align" role="menu" id="messages_dropdown">
<div class="popover-header">You have 8 Messages</div>
<div id="messages">
<div class="data">
<div class="row">
<div class="col-2">
 <img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data"><strong>hally</strong>
sent you an image.
<br>
<small>add to timeline</small>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data"><strong>Meri</strong>
invitation for party.
<br>
<small>add to timeline</small>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<strong>Remo</strong>
meeting details .
<br>
<small>add to timeline</small>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<strong>David</strong>
upcoming events list.
<br>
<small>add to timeline</small>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data"><strong>hally</strong>
sent you an image.
<br>
<small>add to timeline</small>
</div>
 </div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data"><strong>Meri</strong>
invitation for party.
<br>
<small>add to timeline</small>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<strong>Remo</strong>
meeting details .
<br>
<small>add to timeline</small>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<strong>David</strong>
upcoming events list.
<br>
<small>add to timeline</small>
</div>
</div>
</div>
</div>
<div class="popover-footer">
<a href="mail_inbox.html" class="text-white">Inbox</a>
</div>
</div>
</div>
</div>
<div class="btn-group">
<div class="notifications messages no-bg">
<a class="btn btn-default btn-sm" data-toggle="dropdown" id="notifications_section"> <i class="fa fa-bell-o"></i>
<span class="badge badge-pill badge-danger notifications_badge_top">9</span>
</a>
<div class="dropdown-menu drop_box_align" role="menu" id="notifications_dropdown">
<div class="popover-header">You have 9 Notifications</div>
<div id="notifications">
<div class="data">
<div class="row">
<div class="col-2">
 <img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>Remo</strong>
sent you an image
<br>
<small class="primary_txt">just now.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>clay</strong>
business propasals
<br>
<small class="primary_txt">20min Back.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>John</strong>
meeting at Ritz
<br>
<small class="primary_txt">2hrs Back.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>Luicy</strong>
Request Invitation
<br>
<small class="primary_txt">Yesterday.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>Remo</strong>
sent you an image
<br>
<small class="primary_txt">just now.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>clay</strong>
business propasals
<br>
<small class="primary_txt">20min Back.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>John</strong>
meeting at Ritz
<br>
<small class="primary_txt">2hrs Back.</small>
<br>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>Luicy</strong>
Request Invitation
<br>
<small class="primary_txt">Yesterday.</small>
<br>
 </div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-10 message-data">
<i class="fa fa-clock-o"></i>
<strong>Remo</strong>
sent you an image
<br>
<small class="primary_txt">just now.</small>
<br>
</div>
</div>
</div>
</div>
<div class="popover-footer">
<a href="#" class="text-white">View All</a>
</div>
</div>
</div>
</div>
<div class="btn-group">
<div class="notifications request_section no-bg">
<a class="btn btn-default btn-sm messages" id="request_btn"> <i class="fa fa-sliders" aria-hidden="true"></i>
</a>
</div>
</div>
<div class="btn-group">
<div class="user-settings no-bg">
<button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
<img src="img/user.png" class="admin_img2 img-thumbnail rounded-circle avatar-img" alt="avatar"> <strong>Amina Oukrich</strong>
<span class="fa fa-sort-down white_bg"></span>
</button>
<div class="dropdown-menu admire_admin">
<a class="dropdown-item title" href="#">
Resonsable de vente</a>
<a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
Account Settings</a>
<a class="dropdown-item" href="#">
<i class="fa fa-user"></i>
User Status
</a>
<a class="dropdown-item" href="mail_inbox.html"><i class="fa fa-envelope"></i>
Inbox</a>
<a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
Lock Screen</a>
<a class="dropdown-item" href="login2.html"><i class="fa fa-sign-out"></i>
Log Out</a>
</div>
</div>
</div>
</div>
</div>

</nav>


</div>

<div class="wrapper">
<div id="left">
<div class="menu_scroll">

<ul id="menu">
<li>
<a href="index1.html">
<i class="fa fa-home"></i>
<span class="link-title menu_hide">&nbsp;Dashboard </span>
</a>
</li>

<li>
<a href="index1.html">
<i class="fa fa-file"></i>
<span class="link-title menu_hide">&nbsp;Traiter les demandes</span>
</a>
</li>

<li class="dropdown_menu active">
<a href="javascript:;">
<i class="fa fa-pencil"></i>
<span class="link-title menu_hide">&nbsp; files</span>
<span class="fa arrow menu_hide"></span>
</a>
<ul>
<li>
<a href="form_elements.html">
<i class="fa fa-angle-right"></i>
&nbsp; create article
</a>
</li>
<li>
<a href="form_layouts.html">
<i class="fa fa-angle-right"></i>
&nbsp; create client
</a>
</li>
</ul>
</li>


</li>
</ul>

</div>
</div>

<div id="content" class="bg-container">
<header class="head">
<div class="main-bar">
<div class="row no-gutters">
<div class="col-sm-5 col-lg-6">
<h4 class="nav_top_align">
<i class="fa fa-pencil"></i>
Demande de création d'un article
</h4>
</div>
<div class="col-sm-7 col-lg-6">
<ol class="breadcrumb float-right nav_breadcrumb_top_align">
<li class="breadcrumb-item">
<a href="index1.html">
<i class="fa fa-home" data-pack="default" data-tags=""></i>
Home
</a>
</li>
<li class="breadcrumb-item">
<a href="#">Files</a>
</li>
<li class="active breadcrumb-item">Create Article Form</li>
</ol>
</div>
</div>
</div>
</header>
<div class="outer">
<div class="inner bg-container">
<div class="row">
<div class="col">
<div class="card">

<div class="card-body m-t-35">

<form action="createDemande" class="form-horizontal" method="POST">
  @csrf   
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> Désignation *</label>
</div>
<div class="col-lg-4">
<input type="text"  name="designation" class="form-control">
@error('designation')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="form-group row">
<div class="col-lg-4 text-lg-right">
<label  class="col-form-label">marque *</label>
</div>
<div class="col-lg-4">
<input type="text"  name="marque" class="form-control">
@error('marque')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
</div>
<div class="form-group row">
<div class="col-lg-4 text-lg-right">
<label for="password2" class="col-form-label">Unité de stock *</label>
</div>
<select class="form-control" style="width:320px ; margin-left:15px" name="unite_stock">
<option value="">Select</option> 
  <option value="COLIS">COLIS</option>
  <option value="ENS">ENS</option>
  <option value="KG">KG</option>
  <option value="LITRE">LITRE</option>
  <option value="M2">m2</option>
  <option value="M3">m3</option>
  <option value="METRE LINEAIRE">METRE LINEAIRE</option>
  <option value="PALETTE">PALETTE</option>
  <option value="PIECE">PIECE</option>
  <option value="Tonne">Tonne</option>
  <option value="Toure en bois">Toure en bois</option>
  </select>
  @error('unite_stock')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
  </div> 

<div class="form-actions form-group row">
<div class="col-xl-8 ml-auto">
<button class="btn btn-responsive layout_btn_prevent btn-primary" type="submit">Save</button>
<button class="btn btn-responsive layout_btn_prevent btn-warning">Cancel</button>



</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>




<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


<script type="text/javascript" src="vendors/jquery-validation-engine/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="vendors/jquery-validation-engine/js/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="vendors/datetimepicker/js/DateTimePicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>


<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/pages/form_validation.js"></script>

</body>

</html>
