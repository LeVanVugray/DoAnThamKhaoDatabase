<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mobile Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('admin/images/logo.png') }}" type="image/icon type">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap-responsive.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/uniform.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/matrix-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/matrix-media.css') }}" />
    <link href="{{ asset('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }
        ul.pagination li.active {
            font-weight: bold;
        }
        ul.pagination li {
            display: flex;
            padding: 10px;
        }


#header h1 {
    margin: 0;
}

#header img {
    height: 70px; /* hoặc 40px nếu muốn nhỏ hơn */
    object-fit: contain;
}

    </style>
</head>
<body>
    <!--Header-part-->
    <div id="header">
        <h1><a href="#"><img src="{{ asset('admin/images/logo_shose.png') }}" alt=""></a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
        <ul class="nav">
            <li class="dropdown" id="profile-messages">
                <a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle">
                    <i class="icon icon-user"></i>
                    <span class="text">Welcome Super Admin</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ url('logout') }}"><i class="icon-key"></i> Log Out</a></li>
                </ul>
            </li>
            <li class="dropdown" id="menu-messages">
                <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle">
                    <i class="icon icon-envelope"></i>
                    <span class="text">Messages</span>
                    <span class="label label-important">5</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                    <li class="divider"></li>
                    <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                    <li class="divider"></li>
                    <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
                </ul>
            </li>
            <li><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
            <li><a title="" href="{{ url('logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
        </ul>
    </div>

    <!-- start-top-search-->
    <!-- <div id="search">
        <form action="{{ route('usersadmin') }}" method="get">
            <input type="text" name="keyword" id="cate" placeholder="Search here..." />
            <button type="submit" class="tip-bottom" title="Search">
                <i class="icon-search icon-white"></i>
            </button>
        </form>
    </div> -->
    <!--close-top-search -->
