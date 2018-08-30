<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        html {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            font-family: 'Microsoft Yahei', '微软雅黑', '宋体', \5b8b\4f53, Tahoma, Arial, Helvetica, STHeiti;
            margin: 0;
        }

        .main-nav {
            margin-left: 1px;
        }

        .main-nav.nav-tabs.nav-stacked > li {
        }

        .main-nav.nav-tabs.nav-stacked > li > a {
            padding: 10px 8px;
            font-size: 12px;
            font-weight: 600;
            color: #4A515B;
            background: #E9E9E9;
            background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #FAFAFA), color-stop(100%, #E9E9E9));
            background: -webkit-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            background: -o-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            background: -ms-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            background: linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
            border: 1px solid #D5D5D5;
            border-radius: 4px;
        }

        .main-nav.nav-tabs.nav-stacked > li > a > span {
            color: #4A515B;
        }

        .main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
            color: #FFF;
            background: #3C4049;
            background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #4A515B), color-stop(100%, #3C4049));
            background: -webkit-linear-gradient(top, #4A515B 0%, #3C4049 100%);
            background: -o-linear-gradient(top, #4A515B 0%, #3C4049 100%);
            background: -ms-linear-gradient(top, #4A515B 0%, #3C4049 100%);
            background: linear-gradient(top, #4A515B 0%, #3C4049 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
            border-color: #2B2E33;
        }

        #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
            color: #FFF;
        }

        .main-nav.nav-tabs.nav-stacked > li {
            margin-bottom: 4px;
        }

        .nav-header.collapsed > span.glyphicon-chevron-toggle:before {
            content: "\e114";
        }

        .nav-header > span.glyphicon-chevron-toggle:before {
            content: "\e113";
        }

        footer.duomi-page-footer {
            background-color: white;
        }

        footer.duomi-page-footer .beta-message {
            color: #a4a4a4;
        }

        footer.duomi-page-footer .beta-message a {
            color: #53a2e4;
        }

        footer.duomi-page-footer .list-inline a, footer.authenticated-footer .list-inline li {
            color: #a4a4a4;
            padding-bottom: 30px;
        }

        footer.duomi-page-footer {
            background-color: white;
        }

        footer.duomi-page-footer .beta-message {
            color: #a4a4a4;
        }

        footer.duomi-page-footer .beta-message a {
            color: #53a2e4;
        }

        footer.duomi-page-footer .list-inline a, footer.authenticated-footer .list-inline li {
            color: #a4a4a4;
            padding-bottom: 30px;
        }

        /*********************************************自定义部分*********************************************/
        .secondmenu a {
            font-size: 12px;
            color: #4A515B;
            text-align: center;
            border-radius: 4px;
        }

        .secondmenu > li > a:hover {
            background-color: #6f7782;
            border-color: #428bca;
            color: #fff;
        }

        .secondmenu li.active {
            background-color: #6f7782;
            border-color: #428bca;
            border-radius: 4px;
        }

        .secondmenu li.active > a {
            color: #ffffff;
        }

        .navbar-static-top {
            background-color: #212121;
            margin-bottom: 5px;
        }

        .navbar-brand {
            background: url('http://static-res.ruyo.net/ruyo_net_w_32.png') no-repeat 10px 8px;
            display: inline-block;
            vertical-align: middle;
            padding-left: 50px;
            color: #fff;
        }

        .navbar-brand:hover {
            color: #fff;
        }

        .collapse.glyphicon-chevron-toggle, .glyphicon-chevron-toggle:before {
            content: "\e113";
        }

        .collapsed.glyphicon-chevron-toggle:before {
            content: "\e114";
        }
    </style>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">首页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{:url('login')}">退出</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul id="main-nav" class="main-nav nav nav-tabs nav-stacked" style="">
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-th-large"></i>
                        首页
                    </a>
                </li>
                <li>
                    <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-cog"></i>
                        系统管理

                        <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="systemSetting" class="nav nav-list secondmenu collapse" style="height: 0px;">
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;用户管理</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>&nbsp;菜单管理</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-asterisk"></i>&nbsp;角色管理</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-edit"></i>&nbsp;修改密码</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i>&nbsp;日志查看</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#configSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-credit-card"></i>
                        配置管理
                        <span class="pull-right glyphicon  glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="configSetting" class="nav nav-list secondmenu collapse in">
                        <li class="active"><a href="#"><i class="glyphicon glyphicon-globe"></i>&nbsp;全局缺省配置</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star-empty"></i>&nbsp;未开通用户配置</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i>&nbsp;退订用户配置</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-text-width"></i>&nbsp;试用用户配置</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-ok-circle"></i>&nbsp;开通用户配置</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#disSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-globe"></i>
                        分发配置
                        <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="disSetting" class="nav nav-list secondmenu collapse">
                        <li><a href="#"><i class="glyphicon glyphicon-th-list"></i>&nbsp;分发包配置</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#dicSetting" class="nav-header collapsed" data-toggle="collapse">
                        <i class="glyphicon glyphicon-bold"></i>
                        字典配置
                        <span class="pull-right glyphicon glyphicon-chevron-toggle"></span>
                    </a>
                    <ul id="dicSetting" class="nav nav-list secondmenu collapse">
                        <li><a href="#"><i class="glyphicon glyphicon-text-width"></i>&nbsp;关键字配置</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-fire"></i>
                        关于系统
                        <span class="badge pull-right">1</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-10">
            {block name="main"}主内容{/block}
        </div>
    </div>
</div>

<script src="/bootstrap/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
