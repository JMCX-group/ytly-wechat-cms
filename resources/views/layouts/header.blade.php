<?php
/**
 * Created by PhpStorm.
 * User: mvp_xuan
 * Date: 2016-4-4
 * Time: 19:21
 */
?>

<header class="main-header">
    <a href="{{ url('http://cms.medi-link.cn/') }}" class="logo">
        <img src="../images/logo.png" style="width: 80px;">
        {{--<b>医者脉连</b>--}}
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="{{ url('/auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
