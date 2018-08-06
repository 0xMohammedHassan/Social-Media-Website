        <style>
        .card {

            border-radius: 7px;
        }


        label {
            cursor: default;
    
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: bold;
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
            .navbar navbar-bright navbar-fixed-top{
                background-color: aqua;
            }
    
        .chatbox {
        position: fixed;
        bottom: 0;
        right: 30px;
        width: 200px;
        height: 250px;
        background-color: #fff;
        font-family: 'Lato', sans-serif;
    
        -webkit-transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
        transition: all 600ms cubic-bezier(0.19, 1, 0.22, 1);
    
        display: -webkit-flex;
        display: flex;
    
        -webkit-flex-direction: column;
        flex-direction: column;
    }
    
    
    .chatbox__title,
    .chatbox__body {
        border-bottom: none;
    }
    .chatbox__body {
        /* visibility: hidden; */
 
margin-bottom: 5px;    
    }

    
    .chatbox__title {
        min-height: 50px;
        padding-right: 10px;
        background-color: #295dad;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        cursor: pointer;
    
        display: -webkit-flex;
        display: flex;
    
        -webkit-align-items: center;
        align-items: center;
    }
    
    .chatbox__title h5 {
        height: 50px;
        margin: 0 0 0 15px;
        line-height: 50px;
        position: relative;
        padding-left: 20px;
    
        -webkit-flex-grow: 1;
        flex-grow: 1;
    }
    
    .chatbox__title h5 a {
        color: #fff;
        max-width: 195px;
        display: inline-block;
        text-decoration: none;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .chatbox__title h5:before {
        content: '';
        display: block;
        position: absolute;
        top: 50%;
        left: 0;
        width: 12px;
        height: 12px;
        background: #4CAF50;
        border-radius: 6px;
    
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    
    .chatbox__title__tray,
    .chatbox__title__close {
        width: 24px;
        height: 24px;
        outline: 0;
        border: none;
        background-color: transparent;
        opacity: 0.5;
        cursor: pointer;
    
        -webkit-transition: opacity 200ms;
        transition: opacity 200ms;
    }
    
    .chatbox__title__tray:hover,
    .chatbox__title__close:hover {
        opacity: 0.7;
    }
    
    .chatbox__title__tray span {
        width: 12px;
        height: 12px;
        display: inline-block;
        border-bottom: 2px solid #fff
    }
    
    .chatbox__title__close svg {
        vertical-align: middle;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke-width: 1.2px;
    }
    
    
        .form-control,
        .form-group .form-control {
            border: 0;
            background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
            background-size: 0 2px, 100% 1px;
            background-repeat: no-repeat;
            background-position: center bottom, center calc(100% - 1px);
            background-color: transparent;
            transition: background 0s ease-out;
            float: none;
            box-shadow: none;
            border-radius: 0;
            font-weight: 400;
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-block;
            vertical-align: middle;
            justify-content: space-around;
            padding: 3px 17%;
        }

        .image img {
            width: 100%;
        }

        .card-content {
            width: 100%;
            height: 70px;

        }
.footer .copyright {
    color: #777777;
    padding: 10px 15px;
    font-size: 14px;
    margin: 15px 3px;
    line-height: 20px;
    text-align: center;}    
        .fd li {
            overflow: hidden;
            float: left;
        }

        .list-group-item img {
            height: 50px;
            display: inline-block;
            width: 50px;
            border-radius: 50%;
            border-style: solid;
            border-color: white;
            border-width: 3px;

        }

        body {
            background-image: url(images/)
        }

        .nav-tabs-navigation {
            text-align: center;
            border-bottom: 1px solid #F1EAE0;
            margin-bottom: 30px;
        }

        .nav-tabs-navigation .nav>li>a {
            padding-bottom: 20px;
        }

        .avatar {

            width: 124px;
            height: 124px;
            border: 5px solid #FFFFFF;
            position: relative;
            margin-bottom: 15px;
            overflow: hidden;
            border-radius: 50%;
            margin-right: 5px;
            position: relative;
            left: 28%;
            top: -61px;

        }

        .title {
            text-align: center;
        }

        .navbar-nav li a img {
            display: inline-block;
        }

        .nav-tabs-wrapper {
            display: inline-block;
            margin-bottom: -6px;
            margin-left: 1.25%;
            margin-right: 1.25%;
            position: relative;
            width: auto;
        }

        .nav-tabs-navigation {
            text-align: center;
            border-bottom: 1px solid #F1EAE0;
            margin-bottom: 30px;
        }

        .nav-tabs-navigation .nav>li>a {
            padding-bottom: 20px;
        }

        .nav-tabs-navigation {
            text-align: center;
            border-bottom: 1px solid #F1EAE0;
            margin-bottom: 30px;
        }

        .nav-tabs-navigation .nav>li>a {
            padding-bottom: 20px;
        }

        .nav-tabs-wrapper {
            display: inline-block;
            margin-bottom: -6px;
            margin-left: 1.25%;
            margin-right: 1.25%;
            position: relative;
            width: auto;
        }

        .nav-tabs {
            border-bottom: 0 none;
            font-size: 16px;
            font-weight: 600;
        }

        .nav-tabs>li>a {
            border: 0 none;
            color: #A49E93;
        }
        .img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
    display: inline;
    max-width: 100%;
    height: auto;
}

        .nav-tabs>li>a:hover {
            color: #66615b;
        }
            .dropdown-menu>li>a {
    font-size: 16px;
    padding: 10px 15px;
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
.dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
            
.dropdown-menu > li > a {
    padding: 8px 20px;
    color: #333333;
}
.dropdown-menu > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
a {
    color: #2C93FF;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a {
    background-color: transparent;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

        .nav-tabs>li.active {
            color: #66615b;
            position: relative;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            background-color: transparent;
            border: 0 none;
        }
        .fm{
            display: grid;
            align-items: center;
            align-self: center;
            align-content: center;
  justify-content: space-between; 
        }
        .nav-tabs>li.active :after {
            border-bottom: 11px solid #FFFCF5;
            border-left: 11px solid transparent;
            border-right: 11px solid transparent;
            content: "";
            display: inline-block;
            position: absolute;
            right: 40%;
            bottom: -1px;
        }

        .nav-tabs>li.active :before {
            border-bottom: 11px solid #F1EAE0;
            border-left: 11px solid transparent;
            border-right: 11px solid transparent;
            content: "";
            display: inline-block;
            position: absolute;
            right: 40%;
            bottom: 1px;
        }

        .nav-tabs-wrapper {
            display: inline-block;
            margin-bottom: -6px;
            margin-left: 1.25%;
            margin-right: 1.25%;
            position: relative;
            width: auto;
        }

        .dropdown-menu>li>a {
            font-size: 16px;
            padding: 10px 15px;
            display: block;
            padding: 3px 20px;
            clear: both;
            font-weight: normal;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }
        .im{  display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;

        }
        
.navbar .navbar-brand {
    font-weight: 600;
    margin-top: 13px;
    margin-bottom: 13px;
    font-size: 20px;
}
            .navbar-brand {
    float: left;
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;


        }
            .serch{
                
                position: relative;
    top: 49%;
    margin-top: 14px;
    border-radius: 70px;
                border: 0;
    background-image: linear-gradient(#9c27b0, #9c27b0), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 0 2px, 100% 1px;
    background-repeat: no-repeat;
    background-position: center bottom, center calc(100% - 1px);
    background-color: transparent;
    transition: background 0s ease-out;
    float: none;
    box-shadow: none;
    border-radius: 0;
    font-weight: 400;
            }
            .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
            header {
    background: none repeat scroll 0 0 #34ACDC !important;
}
        .badge-danger{
            position: absolute;
            background-color: red;

        }
.navbar:not(.navbar-transparent).navbar-ct-blue {
    background-color: #34ACDC;
    background-color: rgba(52, 172, 220, 0.98);
}
    </style>
</head>
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container" style="">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<a class="navbar-brand navbar-brand-logo"  style="color: #FFFFFF;
    opacity: 0.95;"href="home.php">
                                <img src="landing/ico.ico" style="display: inline-block;"  class="img-circle img-responsive" alt="Creative Tim Logo" width="40px" height="40px" rel="tooltip" title="this application design by team" data-placement="bottom" data-html="true">
                                communication
        </a>    </div>
   <ul class="nav navbar-nav navbar-right"> 
       <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="Male%20User_25px.png" alt="">
                                   
                                    <p> Profile</p>
                                    </a>
                                        <ul class="dropdown-menu">
        
                                            <li>
                                                <a href="profile.php" class="dropdown-item ">
                                                  <img src="Male User_25px.png" class="img-circle img-responsive" alt="" width="40px" height="40px;">    Profile</a>
                                                    </li>
                                            <li>
                                                <a href="photos.php" class="dropdown-item">
                                                <img src="Google Photos_25px.png" class="img-circle img-responsive" alt="" width="40px" height="40px;"> Photos</a></li>
                                                <li>
                                                <a href="friends.php" class="dropdown-item">
                                                        <img src="Meeting_25px.png" class="img-circle img-responsive" alt="" width="40px" height="40px;">   Friends</a></li>

                                            <li>
                                                <a href="message.php" class="dropdown-item">
                                                    <img src="Message_25px.png" class="img-circle img-responsive" alt="" width="40px" height="40px;"> Message
                                                    </a></li>
        
                                            <li>
                                                <a href="logout.php" class="dropdown-item">
                                                    <img src="Logout Rounded Left_25px.png" class="img-circle img-responsive" alt="" width="40px" height="40px;">  Logout
                                                    </a></li>
        
                                        </ul>
        
        
                                    </li>       
      </ul>
  
		<div class="pull-right">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control serch"  id="span5" placeholder="Search">
            </form>
		</div>
   
    </nav>
  </div>
</header>