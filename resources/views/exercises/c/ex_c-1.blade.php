<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>แบบฝึกหัด | ภาษา C</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link href="x_login-register modal/bootstrap3/css/bootstrap.css" rel="stylesheet" />   

    <link href="x_login-register modal/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <script src="x_login-register modal/jquery/jquery-1.10.2.js" type="text/javascript"></script>
    
    <script src="x_login-register modal/login-register.js" type="text/javascript"></script>        
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
       <header id="header">      
        
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">
                        <h1><img src="images/logo2.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/"><span class="font-menu">Home</span></a></li>
                        <li class="dropdown"><a href="#"><span class="font-menu">เนื้อหา </span><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                               
                                <li><a href="/contentc-1"><span class="font-menu2">ตัวแปรกับชนิดของข้อมูล</span></a></li>
                                <li><a href="/contentc-2"><span class="font-menu2">โอปาเรเตอร์และการดำเนินการ</span></a></li>
                                <li><a href="/contentc-3"><span class="font-menu2">การรับและแสดงผลข้อมูล</span></a></li>
                                <li><a href="/contentc-4"><span class="font-menu2">If Statements</span></a></li>
                                <li><a href="/contentc-5"><span class="font-menu2">Loop</span></a></li>
                                <li><a href="/contentc-6"><span class="font-menu2">อาร์เรย์</span></a></li>
                                <li><a href="/contentc-7"><span class="font-menu2">ฟังก์ชัน</span></a></li>




                            </ul>
                        </li>                    
                        <li class="dropdown"><a href="#"><span class="font-menu">แบบฝึกหัด </span><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                             
                                <li><a href="/exercisesc-1"><span class="font-menu2">ตัวแปรกับชนิดของข้อมูล</span></a></li>
                                <li><a href="/exercisesc-2"><span class="font-menu2">โอปาเรเตอร์และการดำเนินการ </span></a></li>
                                <li><a href="/exercisesc-3"><span class="font-menu2">การรับและแสดงผลข้อมูล</span></a></li>
                                <li><a href="/exercisesc-4"><span class="font-menu2">If Statements</span></a></li>
                                <li><a href="/exercisesc-5"><span class="font-menu2">Loop</span></a></li>
                                <li><a href="/exercisesc-6"><span class="font-menu2">อาร์เรย์</span></a></li>
                                <li><a href="/exercisesc-7"><span class="font-menu2">ฟังก์ชัน</span></a></li>


                            </ul>
                        </li>
                        <li class="dropdown"><a href="#"><span class="font-menu">แบบทดสอบ</span> <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                           
                                <li><a href="/testc"><span class="font-menu2">ภาษา C</span></a></li>
                            </ul>
                        </li> 
                        <li class="active"><a href="/forums"><span class="font-menu">Forums</span></a></li>
                        @if (Auth::guest())
                        <li>
                            <!-- - -->

                        <form action="javascript:void(0)">
                            <button  type="submit" class="btn btn-default btn-lg" aria-label="Left Align" onclick="openLoginModal();">
                                <span style="font-family: 'Kanit'"  aria-hidden="true" ><img src="images/login.png"> Login</span>
                           </button>
                        </form>

                       <div class="modal fade login" id="loginModal">
                            <div class="modal-dialog login animated">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                    <div class="modal-body">  
                                        <div class="box">
                                            <div class="content">
                                                <div class="social">
                                                    
                                                </div>
                                                <div class="division">
                                                      <img src="images/logo2.png">
                                                </div>
                                                <div class="error"></div> 
                                                <div class="form loginBox">
                                                    <form method="post" action="/login" accept-charset="UTF-8">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                                        
                                                        

                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="password" class="form-control" id="password"   placeholder="Password" name="password">
                                                        

                                                        <input class="btn btn-default btn-login" type="submit" value="Login" onclick="loginAjax()">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box">
                                            <div class="content registerBox" style="display:none;">
                                                <div class="form">
                                                    <form method="post" html="{:multipart=>true}" data-remote="true" action="{{ route('register.store') }}" accept-charset="UTF-8">
                                                        
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                                        <input id="name" class="form-control" type="text" placeholder="Username" name="name">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                                        
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">        
                                                        <input class="btn btn-default btn-register"  value="Register" type="submit" value="Create account" name="commit">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="forgot login-footer">
                                          
                                                 <a href="javascript: showRegisterForm();">  <span class="font-menu">create an account</span></a>
                                           
                                        </div>
                                        <div class="forgot register-footer" style="display:none">
                                             <span class="font-menu">Already have an account?</span>
                                             <a href="javascript: showLoginForm();">  <span class="font-menu">Login</span></a>
                                        </div>
                                    </div>        
                                  </div>
                            </div>
                        </div>
                        </li> 
                        @else
                         <li class="dropdown">
                           <button  type="submit" class="btn btn-default btn-lg" aria-label="Left Align" onclick="openLoginModal();">
                                <span style="font-family: 'Kanit'"  aria-hidden="true" ><img src="images/user.png">   {{ $user->name }}</span>
                           </button>
                           <a href="#"></a>
                           <ul role="menu" class="sub-menu">
                                    <li>
                                    <a href="/logout">
                                    <img style=" margin-left: 45px;" src="\images\logout.png">
                                    <span class="font-menu2">Logout</span></a>
                                    </li>
                                </ul>

                        </li>

                            <!-- <li class="dropdown"><a href="#">
                                <button  type="submit" class="btn btn-default btn-lg" aria-label="Left Align" onclick="openLoginModal();">
                                   <img src="\images\user.png"> <span class="font-menu">{{ $user->name }}</span>
                                </button></a>
                           <ul role="menu" class="sub-menu">
                                    <li>
                                    <a href="/logout">
                                    <img style=" margin-left: 45px;" src="\images\logout.png">
                                    <span class="font-menu2">Logout</span></a>
                                    </li>
                                </ul>
                        </li> -->

                         <!-- <li class="dropdown"><a href="#"><span class="font-menu">แบบฝึกหัด </span><i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="/exercisespython"><span class="font-menu2">ไพธอน</span></a></li>
                                <li><a href="/exercisesc"><span class="font-menu2">ภาษา C</span></a></li>

                            </ul>
                        </li> -->

                        @endif 
                       
                    </ul>

                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

     <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                           
                            <a href="/exercisesc-1"><span class="font-head">  ตัวแปรกับชนิดของข้อมูล</span> </a>

                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>







    <!--/#action--> 
      <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio-items">
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse ">
                                                <div class="panel-body ">
                                                <div class="ex-box">
                                                        ให้เปลี่ยนกลุ่มคำ "XXX" ในบรรทัดที่ 4 ของโปรแกรมข้างต้นเป็นชื่อจัวระบุต่อไปนี้ <br>
                                                        จากนั้นบันทึกผลว่าชื่อตัวระบุถูกต้องตามกฎเกณฑ์การตั้งชื่อหรือไม่ หากถูกต้องให้อธิบายเหตุผล
                                                </div>
                                                <div class="ex-codebox">
                                                    #include&ltstdio.h&gt
                                                    <br>
                                                    int main() {
                                                    <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;int XXX;
                                                    <br>
                                                    }
                                                </div>
                                                <div class="ex-box">
                                                XXX
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                ???
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                _mckazine
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                box_2
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                room 3
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                rate-time
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                Country
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                cOUNTRY
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                wide*height
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                do
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                GO!!!!
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                600011Class
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                 <div class="ex-box">
                                                while
                                                </div>
                                                <div class="ex-codebox">
                                                </div>


                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
                                                </div>
                                        </div>
                                </div>

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                    <!--  ข้อมูลลลลลลลลลลลลลลลล -->
                                                <div class="ex-box">
                                                    <div class="ex-codebox">
                                                        XXX    ใช้ได้
                                                    </div>
                                                <br>
                                                <div class="ex-codebox">
                                                ???    ใช้ไม่ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                _mackazine    ใช้ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                box_2    ใช้ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                room 3    ใช้ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                rate-time    ใช้ไมไ่ด้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                Country    ใช้ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                cOUNRTY    ใช้ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                wide*hight    ใช้ไม่ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                do    ใช้ไม่ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                GO!!!!    ใช้ไมไ่ด้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                600011Class    ใช้ไม่ได้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                while    ใช้ไม่ได้
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne2" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                    เขียนคำสั่งในภาษา C เพื่อประกาศตัวแปรหรือค่าคงที่ตามที่กำหนดให้ โดยเลือกใช้ชนิดข้อมูลที่เหมาะสม
                                                </div>
                                                <div class="ex-box">
                                                ค่าคงที่ชื่อ my_height เพื่อใช้แทนความสูงของตัวนักเรียนเอง
                                                <br>
                                                <div class="ex-codebox">

                                                </div>
                                                <br>
                                                ตัวแปรชื่อ salary เพื่อใช้เก็บเงินเดือนพนักงานเอกชน
                                                <br>
                                                <div class="ex-codebox">
                                                
                                                </div>
                                                <br>
                                                ตัวแปรชื่อ temp_c เพื่อเก็บอุณหภูมิบริเวณขั้วโลกเป็นองศาเซลเซียส
                                                <br>
                                                <div class="ex-codebox">
                                                
                                                </div>
                                                <br>
                                                ตัวแปรชื่อ sun_distance เพื่อเก็บระยะทางจากโลกไปยังดวงอาทิตย์
                                                <br>
                                                <div class="ex-codebox">
                                                
                                                </div>
                                                <br>
                                                ค่าคงที่ชื่อ ID เพื่อเก็บรหัสประจำตัวนิสิต
                                                <br>
                                                <div class="ex-codebox">
                                                
                                                </div>
                                                </div>
                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
                                                </div>
                                        </div>
                                </div>

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                            <div class="ex-box">
                                            <div class="ex-codebox">
                                                const int my_height;
                                            </div>
                                            
                                            <br>
                                            <div class="ex-codebox">
                                            int salary;
                                            </div>
                                            <br>
                                            <div class="ex-codebox">
                                            float temp_c;
                                            </div>
                                            <br>
                                            <div class="ex-codebox">
                                            float sundistance;
                                            </div>
                                            <br>
                                            <div class="ex-codebox">
                                            const double ID;
                                            </div>
                                            </div>
                                                    <!--  ข้อมูลลลลลลลลลลลลลลลล -->
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                    เขียนคำสั่งเพื่อประกาศค่าคงที่ชื่อ PI โดยมีชนิดข้อมูลเป็นแบบ double เพื่อใช้แทนค่า 3.141592635
                                                </div>
                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
                                                </div>
                                        </div>
                                </div>

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="ex-codebox">
                                                    const float PI = 3.141592635;
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->
                        
                    </div>
                </div>
            </div>
        </section>


    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
              
            
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2014. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.themeum.com">Themeum</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
