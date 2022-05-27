<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<title>Unimagec  | Create article </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="img/logo1.ico" />

<link type="text/css" rel="stylesheet" href="css/components.css" />
<link type="text/css" rel="stylesheet" href="css/custom.css" />


<link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.css" />
<link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />


<link type="text/css" rel="stylesheet" href="css/pages/tables.css" />
<link type="text/css" rel="stylesheet" href="#" id="skin_change" />

<style>
.button {
  display: flex;
  height: 33px;
  width: 40px;
  margin: 2px;
  padding: 0;
  background: #009578;
  border: none;
  outline: none;
  border-radius: 5px;
  overflow: hidden;
  font-family: "Quicksand", sans-serif;
  font-size: 16px;
  font-weight: 500;
  cursor: pointer;
}

.button:hover {
  background: #008168;
}

.button:active {
  background: #006e58;
}

.button__text,
.button__icon {
  display: inline-flex;
  align-items: center;
  padding: 8px;
  color: #fff;
  height: 100%;
}

.button__icon {
  font-size: 1.5em;
  background: rgba(0, 0, 0, 0.08);
  
}
</style>
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
<a href="/listeDemande">
<i class="fa fa-file"></i>
<span class="link-title menu_hide">&nbsp;Traiter les demandes</span>
</a>
</li>

<li class="dropdown_menu">
<a href="javascript:;">
<i class="fa fa-pencil"></i>
<span class="link-title menu_hide">&nbsp;Files</span>
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





</div>
</div>

<div id="content" class="bg-container">
<header class="head">
<div class="main-bar">
<div class="row no-gutters">
<div class="col-lg-6 col-md-4 col-sm-4">
<h4 class="nav_top_align">
<i class="fa fa-pencil"></i>
Create Article Form
</h4>
</div>
<div class="col-lg-6 col-md-8 col-sm-8">
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
<li class="breadcrumb-item active">Create Article Form</li>
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

<div class="card-body">
<div class="m-t-35" style="overflow-x:auto;">
<table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
  <thead>
    <tr>
      <th>id demande </th>
      <th>Désignation</th>
      <th>Unité stock</th>
      <th>Marque</th>
      <th>Type d'article</th>
      <th>Famille</th>
      <th>Sous Famille</th>
      <th>S.Sous Famille</th>
      <th>S.S.Sous Famille</th>
      <th>S.S.S.Sous Famille</th>
      <th> Famille Comptable</th>
      <th>TVA</th>
      <th> Options </th>
    </tr>
  </thead>
  <tbody>
  <form>
  @foreach($articles as $article)
<tr>
<td> <input style= "border:none" type="text" value=" {{$article['id_article']}}" disabled></td>
<td> <input style= "border:none" type="text" value=" {{$article['designation']}}" disabled></td>
<td> <input style= "border:none" type="text" value="{{$article['unite_stock']}}" disabled></td>
<td> <input style= "border:none" type="text" value=" {{$article['marque']}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->type_article ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->famille ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->subfamille ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->Ssubfamille ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->SSsubfamille ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->SSSsubfamille ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->familleComptable ?? ''}}" disabled></td>
<td> <input style= "border:none" type="text"  value="{{$article->families->TVA  ?? ''}}" disabled></td>
 <td style=" display: flex;">
    <button type="button" class="button" style ="background: blue" onclick="document.getElementById('article-id-inp').value={{$article['id_article']}}" data-toggle="modal" data-target="#myModal"><span class="button__icon"> <ion-icon name="save-outline"></ion-icon> </span></button>
    <button type="button" class="button edit " value="{{$article->families->id_subfamilies ?? ''}}"><span class="button__icon"> <ion-icon name="create-outline"></ion-icon> </span></button>
    <button type="button" class="button"><span class="button__icon" style ="background: red "> <ion-icon name="trash-outline"></ion-icon> </span></button>
  </td>
    
</tr>
@endforeach
</form>
</tbody>
</table>
</div>
</div>

{{$articles->links("partials.my_paginate") }}

</div>
</div>
</div>


<div id="request_list">
<div class="request_scrollable">
<ul class="nav nav-tabs m-t-15">
<li class="nav-item">
<a class="nav-link active text-center" href="#settings" data-toggle="tab">Settings</a>
</li>
<li class="nav-item">
<a class="nav-link text-center" href="#favourites" data-toggle="tab">Favorites</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="settings">
<div id="settings_section">
<div class="layout_styles mx-3">
<div class="row">
<div class="col-12 m-t-35">
<h4>Layout settings</h4>
</div>
</div>
<form autocomplete="off">
<div class="row">
<div class="col-12">
<div class="float-left m-t-20">Fixed Header</div>
<div class="float-right m-t-15">
<div id="setting_fixed_nav">
<input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox" data-size="small">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="float-left m-t-20">Fixed Menu</div>
<div class="float-right m-t-15">
 <div id="setting_fixed_menunav">
<input class="make-switch" data-on-text="ON" data-off-text="OFF" name="radioBox" type="checkbox" data-size="small">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="float-left m-t-20">No Breadcrumb</div>
<div class="float-right m-t-15">
<div id="setting_breadcrumb">
<input class="make-switch" data-on-text="ON" data-off-text="OFF" type="checkbox" data-size="small">
</div>
</div>
</div>
</div>
</form>
</div>
<div class="mx-3">
<div class="row">
<div class="col-12 m-t-35">
<h4 class="setting_title">General Settings</h4>
</div>
</div>
<div class="data m-t-5">
<div class="row">
<div class="col-2"><i class="fa fa-bell-o setting_ions text-info"></i></div>
<div class="col-7">
<span class="chat_name">Notifications</span><br />
Get new notifications
</div>
<div class="col-2 checkbox float-right">
<label class="text-info">
<input type="checkbox" value="" checked>
<span class="cr"><i class="cr-icon fa fa-check"></i></span>
</label>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2"><i class="fa fa-envelope-o setting_ions text-danger"></i>
</div>
<div class="col-7">
<span class="chat_name">Messages</span><br />
Get new messages
</div>
<div class="col-2 checkbox float-right">
<label class="text-danger">
<input type="checkbox" value="" checked>
<span class="cr"><i class="cr-icon fa fa-check"></i></span>
</label>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<i class="fa fa-exclamation-triangle setting_ions text-warning"></i>
</div>
<div class="col-7">
<span class="chat_name">Warnings</span><br />
Get new warnings
</div>
<div class="col-2 checkbox float-right">
<label class="text-warning">
<input type="checkbox" value="" checked>
<span class="cr"><i class="cr-icon fa fa-check"></i></span>
</label>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<i class="fa fa-calendar texlayout_stylest-primary setting_ions"></i>
</div>
<div class="col-7">
<span class="chat_name">Events</span><br />
Show new events
</div>
<div class="col-2 checkbox float-right">
<label class="text-primary">
<input type="checkbox" value="">
<span class="cr"><i class="cr-icon fa fa-check"></i></span>
</label>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="favourites">
<div id="requests" class="mx-3">
<div class="m-t-35">
<h4 class="setting_title">Favorites</h4>
</div>
<div class="data m-t-10">
<div class="row">
<div class="col-2">
<img src="img/images1.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-8 message-data"><span class="chat_name">Philip J. Webb</span><br />
Available
</div>
<div class="col-1">
<i class="fa fa-circle text-success"></i>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/8.jpg" class="message-img avatar rounded-circle" alt="avatar1">
</div>
<div class="col-8 message-data">
<span class="chat_name">Nancy T. Strozier</span><br />
Away
</div>
<div class="col-1">
<i class="fa fa-circle text-warning"></i>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/3.jpg" class="message-img avatar rounded-circle" alt="avatar1">
</div>
<div class="col-8 message-data">
<span class="chat_name">Robbinson</span><br />
Offline
</div>
<div class="col-1">
<i class="fa fa-circle"></i>
</div>
</div>
</div>
 <h4 class="setting_title">Contacts</h4>
<div class="data m-t-10">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/7.jpg" class="message-img avatar rounded-circle" alt="avatar1">
</div>
<div class="col-8 message-data">
<span class="chat_name">Chester Hardesty</span><br />
Busy
</div>
<div class="col-1">
<i class="fa fa-circle text-warning"></i>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/2.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-8 message-data">
<span class="chat_name">Peter</span><br />
Online
</div>
<div class="col-1">
<i class="fa fa-circle text-warning"></i>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/6.jpg" class="message-img avatar rounded-circle" alt="avatar1">
</div>
<div class="col-8 message-data">
<span class="chat_name">Devin Hartsell</span><br />
Available
</div>
<div class="col-1">
<i class="fa fa-circle text-success"></i>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/4.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-8 message-data">
<span class="chat_name">Kimy Zorda</span><br />
Available
</div>
<div class="col-1">
<i class="fa fa-circle text-success"></i>
</div>
</div>
</div>
<div class="data">
<div class="row">
<div class="col-2">
<img src="img/mailbox_imgs/5.jpg" class="message-img avatar rounded-circle" alt="avatar1"></div>
<div class="col-8 message-data">
<span class="chat_name">Jessica Bell</span><br />
Offline
</div>
<div class="col-1">
<i class="fa fa-circle"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id="right">
<div class="right_content">
<div class="well-small dark m-t-15">
<div class="row m-0">
<div class="col-lg-12 p-d-0">
<div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.html','css')">
<div class="skin_blue skin_size b_t_r"></div>
<div class="skin_blue_border skin_shaddow skin_size b_b_r"></div>
</div>
<div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.html','css')">
<div class="skin_green skin_size b_t_r"></div>
<div class="skin_green_border skin_shaddow skin_size b_b_r"></div>
</div>
<div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.html','css')">
<div class="skin_purple skin_size b_t_r"></div>
<div class="skin_purple_border skin_shaddow skin_size b_b_r"></div>
</div>
<div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.html','css')">
<div class="skin_orange skin_size b_t_r"></div>
<div class="skin_orange_border skin_shaddow skin_size b_b_r"></div>
</div>
<div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.html','css')">
<div class="skin_red skin_size b_t_r"></div>
<div class="skin_red_border skin_shaddow skin_size b_b_r"></div>
</div>
<div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.html','css')">
<div class="skin_mint skin_size b_t_r"></div>
<div class="skin_mint_border skin_shaddow skin_size b_b_r"></div>
</div>

<div class="skin_btn skinsingle_btn skin_blue b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('blue_skin.html','css')"></div>
<div class="skin_btn skinsingle_btn skin_green b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('green_skin.html','css')"></div>
<div class="skin_btn skinsingle_btn skin_purple b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('purple_skin.html','css')"></div>
<div class="skin_btn  skinsingle_btn skin_orange b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('orange_skin.html','css')"></div>
<div class="skin_btn skinsingle_btn skin_red b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('red_skin.html','css')"></div>
<div class="skin_btn skinsingle_btn skin_mint b_r height_40 skin_shaddow" onclick="javascript:loadjscssfile('mint_skin.html','css')"></div>
</div>
<div class="col-lg-12 text-center m-t-15">
<button class="btn btn-dark button-rounded" onclick="javascript:loadjscssfile('black_skin.html','css')">Dark
</button>
<button class="btn btn-secondary button-rounded default_skin" onclick="javascript:loadjscssfile('default.html','css')">Default
</button>
</div>
</div>
</div>
</div>
</div>
</div>

<!--  add Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">informations d'article </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="createArticleAdmin" class="form-horizontal" method="POST">
  @csrf   
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> Type d'article *</label>
</div>
<div class="col-lg-4">
<input type="text"  name="type_article" class="form-control">
</div>
</div>
<input style= "border:none"  type="hidden" value="{{$article['id_article']}}" name="id_article" id="article-id-inp" >
<div class="form-group row">
<div class="col-lg-4 text-lg-right">
<label  class="col-form-label">TVA *</label>
</div>
<div class="col-lg-4">
<input type="text"  name="TVA" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-lg-4 text-lg-right">
<label  class="col-form-label">famille comptable *</label>
</div>
<div class="col-lg-4">
<input type="text"  name="familleComptable" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="famille" id="famille">
<option selected>Select famille</option> 
  @foreach($familles as $famille)
  <option  value="{{$famille->id_famille}}:{{$famille->famille}}" name="famille">{{$famille->famille}}</option>
  @endforeach
  </select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> Sous  famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="subfamille" id="subfamille">
</select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> S.Sous famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="Ssubfamille" id="S_subfamille">

  </select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label">S.S.sous famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="SSsubfamille" id="S_S_subfamille">

  </select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> S.S.S.sous famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="SSSsubfamille" id="S_S_Ssubfamille">

</select>
</div>
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
<!-- end add Modal -->

<!-- edit Modal -->
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">update admin informations  </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body"> 
      <form action="updateAdminInfo/{{$article->id_subfamilies}}" class="form-horizontal" method="POST" id="editform">
      @method('PUT')
      @csrf
      
      <div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> Type d'article *</label>
</div>
<div class="col-lg-4">
<input type="text" id="type_article" name="type_article" class="form-control">
</div>
</div>
<input style= "border:none"  type="hidden" value="{{$article->families->id_subfamilies ?? ''}}" name="id_subfamilies" id="id_subfamilies" >
<div class="form-group row">
<div class="col-lg-4 text-lg-right">
<label  class="col-form-label">TVA *</label>
</div>
<div class="col-lg-4">
<input type="text" id="TVA" name="TVA" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-lg-4 text-lg-right">
<label  class="col-form-label">famille comptable *</label>
</div>
<div class="col-lg-4">
<input type="text"  id="familleComptable" name="familleComptable" class="form-control">
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="famille" id="famille">
<option selected>Select famille</option> 
  @foreach($familles as $famille)
  <option  value="{{$famille->id_famille}}:{{$famille->famille}}" name="famille" {{ $article->families->famille ??'' ==$famille->famille ? 'selected' : '' }}>{{$famille->famille}}</option>
  @endforeach 
  </select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> Sous  famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="subfamille" id="subfamille">
</select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> S.Sous famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="Ssubfamille" id="S_subfamille">

  </select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label">S.S.sous famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="SSsubfamille" id="S_S_subfamille">

  </select>
</div>
</div>
<div class="form-group row">
<div class="col-lg-4  text-lg-right">
<label class="col-form-label"> S.S.S.sous famille *</label>
</div>
<div class="col-lg-4">
<select class="form-control" style="width:140px ; margin-left:-1px" name="SSSsubfamille" id="S_S_Ssubfamille">

</select>
</div>
</div>

<div class="form-actions form-group row">
<div class="col-xl-8 ml-auto">
<button class="btn btn-responsive layout_btn_prevent btn-primary" type="submit">Update</button>
<button class="btn btn-responsive layout_btn_prevent btn-warning">Cancel</button>


</div>
</div>
</form>
      </div>

     

    </div>
  </div>
</div>
<!-- end edit Modal -->



<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


<script type="text/javascript" src="vendors/select2/js/select2.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.js"></script>


<script type="text/javascript" src="js/pages/advanced_tables.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<script type="text/javascript">
        $(document).ready(function () {
            $('#famille').on('change', function () {
                var id_famille = this.value;
                $('#subfamille').html('');
                $.ajax({  
                    url: "/get_Subfamilles?id_famille= "+id_famille,
                    type: 'get',
                    success: function (res) {
                        $('#subfamille').html('<option value="">Select subfamille</option>');
                        $.each(res, function (key, value) {
                            $('#subfamille').append('<option value="' + value
                                .id_sousfamille +':'+ value.sousfamille +'">' + value.sousfamille + '</option>');
                        });
                        $('#Ssubfamille').html('<option value="">Select S.sousfamille</option>');
                    }
                });
            });
            $('#subfamille').on('change', function () {
                var id_sousfamille = this.value;
                $('#S_subfamille').html('');
                $.ajax({
                    url: "/get_Ssubfamilles?id_sousfamille= "+id_sousfamille,
                    type: 'get',
                    success: function (res) { 
                        $('#S_subfamille').html('<option value="">Select S.sousfamille </option>');
                        $.each(res, function (key, value) {
                            $('#S_subfamille').append('<option value="' + value.
                            id_S_sousfamille +':'+ value.S_sousfamille  + '">' + value.S_sousfamille + '</option>');
                        });
                        $('#S_S_subfamille').html('<option value="">Select S.S.sousfamille</option>');
                        
                    }
                });
            });

            $('#S_subfamille').on('change', function () {
                var id_S_sousfamille= this.value;
                $('#S_S_subfamille').html('');
                $.ajax({
                    url: "/get_S_Ssubfamilles?id_S_sousfamille= "+id_S_sousfamille,
                    type: 'get',
                    success: function (res) { 
                        $('#S_S_subfamille').html('<option value="">Select S.S.sousfamille </option>');
                        $.each(res, function (key, value) {
                            $('#S_S_subfamille').append('<option value="' + value.
                            id_S_S_sousfamille + '">' + value.S_S_sousfamille + '</option>');
                        });
                        $('#S_S_Ssubfamille').html('<option value="">Select S.S.S.sousfamille</option>');
                        
                    }
                });
            });
            $('#S_S_subfamille').on('change', function () {
                var id_S_S_S_sousfamille= this.value;
                $('#S_S_Ssubfamille').html('');
                $.ajax({
                    url: "/get_S_S_Ssubfamilles?id_S_S_S_sousfamille= "+id_S_S_S_sousfamille,
                    type: 'get',
                    success: function (res) { 
                        $('#S_S_Ssubfamille').html('<option value="">Select S.S.S.sousfamille </option>');
                        $.each(res, function (key, value) {
                            $('#S_S_Ssubfamille').append('<option value="' + value.
                            id_S_S_S_sousfamille + '">' + value.S_S_S_sousfamille + '</option>');
                        });
                        
                    }
                });
            });
        });
    </script>

<script type="text/javascript">

$(document).ready(function(){

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('click', '.edit', function() { 
    var id_subfamilies = $(this).val();
    $('#editModal').modal('show');

    $.ajax({
    type : "GET", 
    url : "/updateAdminInfo/"+id_subfamilies,
     success: function (response){ 
      $('#type_article').val(response.subfamilie.type_article);
      $('#TVA').val(response.subfamilie.TVA);
      $('#familleComptable').val(response.subfamilie.familleComptable);
      $('#famille').val(response.subfamilie.famille);
      $('#subfamille').val(response.subfamilie.subfamille);
      $('#S_subfamille').val(response.subfamilie.Ssubfamille);
      $('#S_S_subfamille').val(response.subfamilie.SSsubfamille);
      $('#S_S_Ssubfamille').val(response.subfamilie.SSSsubfamille);
      $('#id_subfamilies').val(id_subfamilies);
    }
  });
});
}); 
 

</script>

</body>


</html>