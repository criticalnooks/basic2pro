<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>เนื้อหา | C</title>
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
    <script src="x_login-register modal/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
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
                          
                            <a href="/contentc-2"><span class="font-head">  โอปาเรเตอร์และการดำเนินการต่างๆ</span> </a>

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
                        <div class="content">
                           <span style="text-decoration:underline; font-weight:bold">นิพจน์ทางคณิตศาสตร์</span><br><br>
                                    <table class="table table-hover">
                                            <tr>
                                              <th>ตัวดำเนินการ</td>

                                              <th>สัญลักษณ์ (bits)</td>

                                              <th>จำนวนพจน์ที่นำมาผสม</td>

                                                <th>ตัวอย่าง</td>
                                                <th>ค่าของพจน์เมื่อ x = 20</td>

                                            </tr>

                                            <tr>
                                            <td>บวก</td>
                                            <td>+</td>
                                            <td>2</td>
                                            <td>x+4</td>
                                            <td>24</td>

                                           
                                            </tr>
                                    
                                            <tr>
                                              <td>ลบ</td>

                                            <td>-</td>

                                            <td>2</td>

                                            <td> 32-x</td>
                                            <td>12 </td>
                                            </tr>
                                            
                                            <tr>
                                            <td>คูณ </td>
                                            <td> *</td>
                                            <td>2 </td>
                                            <td> x*2</td>
                                            <td> 40</td>
                                            </tr>
                                           
                                            <tr>
                                            <td>หาร</td>

                                            <td>/</td>

                                            <td>2</td>

                                            <td>x/2</td>
                                            <td> 10</td>
                                            </tr>
                                           
                                            <tr>
                                            <td>หารเอาเศษ</td>

                                            <td>%</td>

                                            <td>2</td>
                                            <td> x%6</td>

                                            <td> 2</td>
                                            </tr>
                                            <tr>
                                            <td>กลับเครื่องหมาย</td>

                                            <td>-</td>

                                            <td>1</td>
                                            <td> -x</td>

                                            <td>-20</td>
                                            </tr>
                                            <tr>
                                            <td>จัดกลุ่ม</td>

                                            <td>()</td>

                                            <td>N/A</td>

                                            <td>(x+2)*3</td>
                                            <td> 66</td>
                                            </tr>
                                        </table>
                                        <br><br>    หากหนึ่งสมการประกอบด้วยตัวดําเนินการมากกว่าหนึ่งตัว  โปรแกรมจะทําหารคํานวณค่าเรียงตามความสําคัญดังต่อไปนี้
                                        <table class="table table-hover">
                                            <tr>
                                              <th>ลำดับความสำคัญ</td>
                                              <th>ตัวดำเนินการ (bits)</td>                                          
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>()</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>*,/ และ %</td>
                                            </tr>
                                            <tr>
                                                <td>3 </td>
                                                <td> + และ -</td>
                                            </tr>
                                        </table>
                                             <span style="text-decoration:underline; font-weight:bold">หมายเหตุ</span> :  หากตัวดำเนินการมีความสำคัญเท่ากัน โปรแกรมจะทำการคำนวณจากซ้ายไปขวา<br><br><br>

                                            <span style="font-weight:bold">ตัวอย่าง 1</span><br>
                                            <div class="ex-codebox"> 
                                                    (10+2)/2+10
                                            </div>
                                            <span style="font-weight:bold">เฉลย</span>
                                            <div class="ex-codebox">คำตอบ : 16 </div>
                                                1. โปรแกรมจะคำนวณภายในวงเล็บก่อน    <span style="text-decoration:underline; font-weight:bold">(10+2)</span>/2+10  จะได้ <span style="text-decoration:underline; font-weight:bold">12</span>/2+10   <br>
                                                2. การคูณ/หาร มีลำดับความสำคัญมากกว่า การบวก/ลบ โปรแกรมจะทำการคำนวณ <span style="text-decoration:underline; font-weight:bold">12/2</span>+10 จะได้ <span style="text-decoration:underline; font-weight:bold">6</span>+10<br>
                                                3. 6+10 = 16


                                            <br><br><span style="font-weight:bold">ตัวอย่าง 2</span><br>
                                            <div class="ex-codebox"> 
                                                    9/5*(10-4)%2+15
                                            </div>
                                            <span style="font-weight:bold">เฉลย</span>
                                            <div class="ex-codebox">คำตอบ : 15 </div>
                                                1. โปรแกรมจะคำนวณภายในวงเล็บก่อน   9/5*<span style="text-decoration:underline; font-weight:bold">(10-4)</span>%2+15 จะได้ 9/5*<span style="text-decoration:underline; font-weight:bold">6</span>%2+15  <br>
                                                2. เมื่อการคูณ/หารมีลำดับความสำคัญเท่ากัน โปรแกรมจะทำจากซ้ายไปขวา <span style="text-decoration:underline; font-weight:bold">9/5</span>*6%2+15 จะได้ <span style="text-decoration:underline; font-weight:bold">1</span>*6%2+15<br>
                                                3. เมื่อการคูณ/หารมีลำดับความสำคัญเท่ากัน โปรแกรมจะทำจากซ้ายไปขวา  <span style="text-decoration:underline; font-weight:bold">1*6</span>%2+15 จะได้ <span style="text-decoration:underline; font-weight:bold">6</span>%2+15<br>
                                                4. การ % มีลำดับความสำคัญมากกว่า การบวก  <span style="text-decoration:underline; font-weight:bold">6%2</span>+15 จะได้ 0+15 <br>
                                                5. 0+15 = 15
                        </div>
                            
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
