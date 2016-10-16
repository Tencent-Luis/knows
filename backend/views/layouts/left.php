<?php
use yii\helpers\Url;
?>
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="/static/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    Sean Ngu
                    <small>Front end developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="has-sub">
                <a href="<?= Url::toRoute(['home/index']); ?>">
                    <i class="fa fa-map-marker"></i>
                    <span>站点导航</span>
                </a>
            </li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-laptop"></i> 
                    <span>站点管理</span>
                </a>
                <ul class="sub-menu">
                    <li class="active"><a href="<?= Url::toRoute(['sites/index']); ?>">站点列表</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-bars"></i>
                    <span>栏目管理</span> 
                </a>
                <ul class="sub-menu">
                    <li>栏目列表</li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-file-text-o"></i>
                    <span>内容管理</span> 
                </a>
                <ul class="sub-menu">
                    <li><a href="<?= Url::toRoute(['content/index']); ?>">内容列表</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-th"></i>
                    <span>资源管理</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="table_basic.html">资源组列表</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>