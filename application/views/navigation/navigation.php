<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div id="main-wrapper">

    <div class="nav-header" style="position :fixed;">
        <div class="brand-logo w-100">
            <a href="<?php echo base_url(""); ?>" class="m-auto d-md-flex">
                <img src="https://image.flaticon.com/icons/svg/708/708949.svg" class="img-fluid mx-auto" alt="" width="50px" height="50px">
            </a>
        </div>
    </div>

    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><img src="https://image.flaticon.com/icons/svg/561/561184.svg"></i></span>
                </div>
            </div>
            <div class="header-left">
                <div class="input-group icons">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="fa fa-search d-none d-lg-block"></i></span>
                    </div>
                    <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                    <div class="drop-down animated flipInX d-md-none">
                        <form action="#">
                            <input type="text" class="form-control" placeholder="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix flex-row">
                    <li class="icons dropdown">
                        <span id="username">
                            <?php echo strtoupper($this->session->userdata("user")['name']); ?>
                        </span>
                    </li>

                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="https://image.flaticon.com/icons/svg/21/21104.svg" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="app-profile.html"><i class="fa fa-user"></i>
                                            <span>Profile</span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">
                                            <i class="fa fa-folder-open"></i> <span>Inbox</span>
                                            <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                        </a>
                                    </li>

                                    <hr class="my-2">
                                    <li>
                                        <a href="page-lock.html"><i class="fa fa-star-half"></i> <span>Lock
                                                Screen</span></a>
                                    </li>
                                    <li><a href="<?php echo base_url("auth/logout"); ?>"><i class="fa fa-window-close"></i> <span>Logout</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nk-sidebar" style="position: fixed;">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">PARK AND PARK</li>

                <li>
                    <a class="" href="<?php echo base_url("dashboard"); ?>" aria-expanded="false">
                        <i class="fa fa-tachometer"></i>
                        <span class="nav-text">DASHBOARD</span>
                    </a>
                </li>

                <li class="nav-label">ADMIN</li>

                <li class="">
                    <a href="<?php echo base_url("admin/vehicles"); ?>" class="">
                        <img src="https://image.flaticon.com/icons/svg/832/832964.svg" alt="" width="20px">
                        <span class="nav-text"> VEHICLES</span>
                    </a>
                </li>

                <li class="">
                    <a href="<?php echo base_url("admin/users"); ?>" class="">
                        <i class="fa fa-users"></i>
                        <span class="nav-text"> USERS </span>
                    </a>
                </li>

                <li class="">
                    <a href="<?php echo base_url("rates"); ?>" class="">
                        <i class="fa fa-dashboard"></i>
                        <span class="nav-text"> RATES </span>
                    </a>
                </li>

                <li class="">
                    <a href="<?php echo base_url("slots"); ?>" class="">
                        <i class="fa fa-align-right"></i>
                        <span class="nav-text"> SLOTS </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>