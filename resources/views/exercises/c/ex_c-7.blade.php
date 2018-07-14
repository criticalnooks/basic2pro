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
                    
                            <a href="/exercisesc-7"><span class="font-head"> ฟังก์ชั่น</span> </a>

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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2"><span class="font-content2">► CircleArea   </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne2" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box">    จงเขียนฟังก์ชั่น CircleArea ให้สมบูรณ์ โดยฟังก์ชั่นนี้จะทำการคำนวณพื้นที่ของวงกลม  โดยรับค่ารัศมีของวงกลมจากผู้ใช้ (กำหนดให้ค่า PI = 3.14159)</div><br>
                    
                                                        <div class="ex-codebox">  
                                                           #include&ltstdio.h&gt<br><br>

                                                            _____ CircleArea(_______) {<br>
                                                                _________________________<br>
                                                                _________________________<br>
                                                                _________________________<br>
                                                                _________________________<br>
                                                            }<br><br>
                                                             
                                                            void Main() {  <br>
                                                                double radius;  <br>
                                                                printf("Enter radius: ");  <br>
                                                                scanf("%lf",&radius);   <br>
                                                                printf("The area of the circle is %.2lf.\n", CircleArea(radius));<br> 
                                                            } 
                                                        </div><br> <br>   
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Enter radius: 32 <br>
                                                                The area of the circle is 3216.99. 
                                                            </div><br>
                                                           

                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo2"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                           <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span>  <br><br> 
                                                           <div style="text-align:center"><a href="https://www.mx7.com/view2/zv0REqHrwK8ts6cm" target="_blank"><img border="0" src="https://www.mx7.com/i/db5/jjAi8W.JPG" /></a></div> 

                                                            <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span>เติมโค๊ดให้สมบูรณ์<br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv0Vjj5V0vFCLNGf" target="_blank"><img border="0" src="https://www.mx7.com/i/9f9/s5Lba0.JPG" /></a></div>
                                                    </div>
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
                                                    <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<br>
                                                        double CircleArea(double radius) {<br>
                                                            double area = 3.14159*radius*radius;<br>
                                                            return area;<br>
                                                        }<br><br>

                                                        int main() { <br>
                                                            double radius; <br>
                                                            printf("Enter radius: "); <br>
                                                            scanf("%lf",&radius); <br>
                                                            printf("The area of the circle is %.2lf.\n", CircleArea(radius));<br>
                                                        }
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->

                         <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3"><span class="font-content2">► อนุกรมฮาโมนิค    </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box">    จงเขียนฟังก์ชั่น f ให้สมบูร์ เพื่อหาผลรวม n พจน์แรก ของ อนุกรมฮาโมนิค<br>
                                                            โดยสมการของอนุกรมฮาโมนิคเป็นดังนี้    <a href="http://www.mx7.com/view2/zudYu0vHdHpPH56u" target="_blank"><img border="0" src="http://www.mx7.com/i/119/NHZyrU.JPG" /></a>   </div><br>
                                                        
                                                        <div class="ex-codebox">  
                                                                    #include&ltstdio.h&gt <br>
                                                                    double f(int n) {  <br>
                                                                        _________________________<br>
                                                                        _________________________<br>
                                                                        _________________________<br>
                                                                        _________________________ <br>
                                                                    } <br>
                                                                    int main() {  <br>
                                                                        int x;  <br>
                                                                        printf(" x | f(x)\n");  <br>
                                                                        printf("---+------\n");  <br>
                                                                        for (x = 1; x <= 15; x++) { <br>  
                                                                            printf("%2d | %.3lf\n", x, f(x));  <br>
                                                                        }<br>
                                                                    } 
                                                        </div><br> <br>   
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                x | f(x) <br>
                                                                --+------  <br>
                                                                 1| 1.000  <br>
                                                                 2| 1.500  <br>
                                                                 3| 1.833  <br>
                                                                 4| 2.083  <br>
                                                                 5| 2.283  <br>
                                                                 6| 2.450  <br>
                                                                 7| 2.593  <br>
                                                                 8| 2.718  <br>
                                                                 9| 2.829 <br>
                                                                10| 2.929 <br>
                                                                11| 3.020 <br>
                                                                12| 3.103 <br>
                                                                13| 3.180 <br>
                                                                14| 3.252 <br>
                                                                15| 3.318 
                                                            </div>
                                                        

                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo3"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span>  <br><br> 
                                                           <div style="text-align:center"><a href="https://www.mx7.com/view2/zv14QXCah8KmZWXh" target="_blank"><img border="0" src="https://www.mx7.com/i/1d7/vPYnGG.JPG" /></a></div> 

                                                           <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> เติมโค๊ดให้สมบูรณ์ <br><br> 
                                                           <div style="text-align:center"><a href="https://www.mx7.com/view2/zv1ELc753nqryIqa" target="_blank"><img border="0" src="https://www.mx7.com/i/cd7/7JmP4A.JPG" /></a></div>

                                                    </div>
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
                                                        #include&ltstdio.h&gt<br>
                                                        double f(int n) { <br>
                                                            int i;<br>
                                                            double sum=0;<br>
                                                            for(i=1;i<=n;i++){<br>
                                                                sum = sum + (1.0/i);<br>
                                                            }<br>
                                                            return sum;<br>
                                                        } <br>
                                                        int main() { <br>
                                                            int x; <br>
                                                            printf(" x | f(x)\n"); <br>
                                                            printf("---+------\n"); <br>
                                                            for (x = 1; x <= 15; x++) { <br>
                                                                printf("%2d | %.3lf\n", x, f(x)); <br>
                                                            }<br>
                                                        }
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->


                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="font-content2">► PlotChar  </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box">    จงเขียนเติมส่วนของฟังก์ชั่น PlotChar ให้สมบูรณ์ ซึ่งฟังก์ชั่นนี้รับพารามิเตอร์สองตัวคือ c เป็นชนิด char และ dist เป็นชนิด int 
                                                                            ซึ่งฟังก์ชั่นนี้จะทําการพิมพ์ช่องว่างเป็นจํานวน dist – 1 ตัวอักษร และทําการพิมพ์อักขระในพารามิเตอร์ c ปิดท้าย เพียงตัวเดียวพร้อมทั้งขึ้นบรรทัดใหม่ เพื่อให้โปรแกรมแสดงผลตามผลลัพธ์ที่แสดงไว้ด้านล่าง โดย ห้ามแก้ไขส่วนของฟังก์ชั่น main โดยเด็ดขาด  </div><br>
                                                        <div class="ex-codebox">  
                                                           #include&ltstdio.h&gt <br>
                                                            void PlotChar(char c, int dist) {  <br>
                                                                ________________________________________________  <br>
                                                                ________________________________________________  <br>
                                                                ________________________________________________  <br>
                                                                ________________________________________________ <br>
                                                            } <br>
                                                            int main(){  <br>
                                                                PlotChar('x', 1);  <br>
                                                                PlotChar('-', 2);  <br>
                                                                PlotChar('+', 3);  <br>
                                                                PlotChar('o', 6); <br>
                                                            }   
                                                        </div><br> <br>   
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                            |x<br>
                                                            | -<br>
                                                            |  +<br>
                                                            |     o <br>
                                                            </div>
                                                        

                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span> <br><br>
                                                        <div class="ex-codebox">โจทย์ต้องการให้เติมส่วนของฟังก์ชั่น Plotchar ให้สมบูรณ์ โดยห้ามปรับเปลี่ยนโค๊ดในฟังก์ชั่น main<br>
                                                            <span style="text-decoration:underline; font-weight:bold">ฟังก์ชั่น Plotchar</span> จะทําการพิมพ์ช่องว่างเป็นจํานวน dist – 1 ตัวอักษร และทําการพิมพ์อักขระในพารามิเตอร์ c ปิดท้าย เพียงตัวเดียวพร้อมทั้งขึ้นบรรทัดใหม่<br>
                                                                <span style="font-weight:bold">ทําการพิมพ์ช่องว่างเป็นจํานวน dist – 1 ตัวอักษร :</span> print ช่องว่าง dist-1 หมายความเราต้องใช้ Loop for ในการวน print เพราะเรารู้จำนวนรอบของ Loop อย่างแน่นอนแล้ว ( dist-1 รอบ )<br>
                                                                <span style="font-weight:bold">และทําการพิมพ์อักขระในพารามิเตอร์ c ปิดท้าย เพียงตัวเดียวพร้อมทั้งขึ้นบรรทัดใหม่ :</span> หลังจากทำการวน Loop for print ช่องว่างแล้ว ให้ทำการ print ค่า c ที่รับมาออกไปพร้อมขึ้นบรรทัดใหม่ </div>

                                                            <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> ทำการเติมส่วนของโค๊ดให้สมบูรณ์ <br><br>
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv6slhI5oxSi7ivt" target="_blank"><img border="0" src="https://www.mx7.com/i/da8/t721Nx.JPG" /></a></div>

                                                    </div>
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
                                                    <div class="ex-codebox">
                                                            #include&ltstdio.h&gt<br>
                                                            void PlotChar(char c, int dist) { <br>
                                                                int i;<br>
                                                                for(i=1 ; i<=dist-1 ; i++){<br>
                                                                    printf(" ");<br>
                                                                    }<br>
                                                                    printf("%c\n",c);<br>
                                                            } <br>
                                                            int main(){ <br>
                                                                    PlotChar('x', 1); <br>
                                                                    PlotChar('-', 2); <br>
                                                                    PlotChar('+', 3); <br>
                                                                    PlotChar('o', 6); <br>
                                                            }
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->


                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4"><span class="font-content2">► โปรแกรมแสนสนุก #1  </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <div class="ex-box">ทำการเขียนฟังก์ชั่น f(x) ให้สมบูรณ์ โดยฟังก์ชั่น f(x) จะทำการวาดกราฟอย่างง่ายของฟังก์ชั่น โดยที่ x มีค่าตั้งแต่ 0 ถึง 20 <br>

                                                                    <a href="http://www.mx7.com/view2/zue3nOiaeJI5eczM" target="_blank"><img border="0" src="http://www.mx7.com/i/9d6/G58BKY.JPG" /></a><br>
                                                          <br>
                                                        <span style="text-decoration:underline; font-weight:bold">แนะนำ</span>  <br>      1. ทำการ #include&ltmath.h&gt เพื่อให้สามารถใช้ฟังก์ชั่น sin ได้  <br>      2. ในการวาดรูปกราฟใช้ หลักการเดียวกับข้อ PlotChar<br>      3. กำหนดให้ค่า PI = 3.14159

                                                        </div><br>
                                                        <span style="text-decoration:underline; font-weight:bold">เติมโปรแกรมให้สมบูรณ์</span><br><br>
                                                        <div class="ex-codebox"> 
                                                            #include&ltstdio.h&gt<br>
                                                            #include&ltmath.h&gt<br>
                                                            void f(int x){<br>
                                                                    ______________________<br>
                                                                    ______________________<br>
                                                                    ______________________<br>
                                                                    ______________________<br>
                                                                    ______________________<br>
                                                                    ______________________<br>
                                                            }<br>
                                                            int main() { <br>
                                                                    int x; <br>
                                                                    printf(" x | f(x)\n"); <br>
                                                                    printf("---+----------------------------------> y\n"); <br>
                                                                    for (x = 0; x <= 20; x++) {<br> 
                                                                            printf("%2d |",x); <br>
                                                                            _______________<br>
                                                                    }<br>
                                                            }
                                                        </div>


                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ตัวอย่างการ Output</span><br><br>
                                                        <div class="ex-codebox">  
                                                           x  | f(x) <br>
                                                            --+-------------------------------------> y <br>
                                                             0|                    *  <br>
                                                             1|                        *  <br>
                                                             2|                          *  <br>
                                                             3|                             *  <br>
                                                             4|                              *  <br>
                                                             5|                              *  <br>
                                                             6|                              *  <br>
                                                             7|                            *  <br>
                                                             8|                          *  <br>
                                                             9|                       * <br>
                                                             10|                    * <br>
                                                             11|                 * <br>
                                                             12|              * <br>
                                                             13|            * <br>
                                                             14|           * <br>
                                                             15|           * <br>
                                                             16|           * <br>
                                                             17|             * <br>
                                                             18|               * <br>
                                                             19|                  * <br>
                                                             20|                     *<br>
                                                            
                                                        </div><br>  
                                                        
                                                        
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo4"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span> <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv6JmYp3QzmE1AKP" target="_blank"><img border="0" src="https://www.mx7.com/i/d45/PHINmC.JPG" /></a></div> 

                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> ทำการเติมส่วนโค๊ดในฟังก์ชั่น f ให้สมบูรณ์ <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv6MsoVkYeKfdckv" target="_blank"><img border="0" src="https://www.mx7.com/i/c1a/VdVYMd.JPG" /></a></div>






                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree4"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                    <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<br>
                                                        #include&ltmath.h&gt<br>
                                                            void f(int x){<br>
                                                                float i;<br>
                                                                float fx = 20+10*sin(x/3.14159);<br>
                                                                for(i = 1 ; i<=fx-1 ; i++){<br>
                                                                    printf(" ");<br>
                                                                }<br>
                                                                printf("*\n");<br>
                                                            }<br>
                                                            int main() { <br>
                                                                    int x; <br>
                                                                    printf(" x | f(x)\n"); <br>
                                                                    printf("---+----------------------------------> y\n"); <br>
                                                                    for (x = 0; x <= 20; x++) {<br> 
                                                                        printf("%2d |",x); <br>
                                                                        f(x);<br>
                                                                    }<br>
                                                            }
                                                    </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->

                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5"><span class="font-content2">► เครื่องคิดเลข   </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne5" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box">        ให้นิสิตเขียนโปรแกรมทําหน้าที่เสมือนเครื่องคิดเลขโดยเริ่มต้นโปรแกรมจะถามค่าเริ่มต้นในการคํานวณ จากนั้น โปรแกรมจะถามตัวดําเนินการ (+, -, * หรือ /)
                                                                             และตัวถูกดําเนินการ (ตัวเลข) ไปเรื่อย ๆ จนกว่าผู้ใช้จะป้อนตัวดําเนินการ เป็นอักขระอื่นที่ไม่ใช่ ‘+’, ‘-‘, ‘*’ และ 
                                                                             ‘/’ ทั้งนี้โปรแกรมจะสรุปค่าสุดท้ายของการคํานวณก่อนจบโปรแกรมดังตัวอย่าง  <br>        ข้อบังคับให้นักเรียนเขียนฟังก์ชั่น Calculate 
                                                                             ที่รับพารามิเตอร์สามตัวประกอบด้วย ตัวเลข 2 ค่า และอักษรของตัว ดําเนินการ โดยฟังก์ชั่นนี้คืนค่าของตัวเลขทั้งสองที่ได้ บวก, ลบ, คูณ หรือหาร กันตามอักษรของตัวดําเนินการ  </div><br>
                                            
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Initial Value : 10 <br><br>
 
                                                                Input Operator : + <br>
                                                                Input Number : 5 <br>
                                                                Present Value = 15.00 <br><br>
                                                                 
                                                                Input Operator : - <br>
                                                                Input Number : 3 <br>
                                                                Present Value = 12.00 <br><br>
                                                                 
                                                                Input Operator : / <br>
                                                                Input Number : 2 <br>
                                                                Present Value = 6.00<br><br>
                                                                 
                                                                Input Operator : @ <br><br>
                                                                 
                                                                Finish Calculation.    <br>
                                                                End Value is 6.00 
                                                            </div> <br> <br>
                                                            <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Initial Value : 9.87 <br><br>
 
                                                                Input Operator : * <br>
                                                                Input Number : 3 <br>
                                                                Present Value = 29.61<br><br>
                                                                 
                                                                Input Operator : $ <br><br>
                                                                 
                                                                Finish Calculation. <br>
                                                                End Value is 29.61
                                                            </div>
                                                        

                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo5"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span> <br><br>
                                                        <span style="text-align:center; font-weight:bold">        ► 1 วิเคราะห์หาตัวแปร</span>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv7lpMX2G26OaezI" target="_blank"><img border="0" src="https://www.mx7.com/i/bff/zmE3qI.JPG" /></a></div><br>

                                                        <br><span style="text-align:center; font-weight:bold">        ► 2 วิเคราะห์หลักการทำงาน</span>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv7p79ci8VyxqsbE" target="_blank"><img border="0" src="https://www.mx7.com/i/b87/Xcl6Ax.JPG" /></a></div>

                                                        <br><span style="text-align:center; font-weight:bold">        ► 3 วิเคราะห์ฟังก์ชั่น Calculate ที่โจทย์บังคับให้สร้าง</span><br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv7tKDXo71pUkXOy" target="_blank"><img border="0" src="https://www.mx7.com/i/102/FCg7sy.JPG" /></a></div>


                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้   <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv7vFKOxogv4Im2j" target="_blank"><img border="0" src="https://www.mx7.com/i/193/U65O61.JPG" /></a></div>

                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> สร้าง Loop while วนรับค่าต่างๆ <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv7yOn8X3ZQq8DtR" target="_blank"><img border="0" src="https://www.mx7.com/i/de1/44e8QX.JPG" /></a></div>

                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสาม</span> สร้างฟังก์ชั่น Calculate <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zv7CkK33JXMOOe6h" target="_blank"><img border="0" src="https://www.mx7.com/i/97c/PmgpaC.JPG" /></a></div>


                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree5"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                    <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<br>
                                                        float Calculate(float a,float b,char c){<br>
                                                            float ans;<br>
                                                            if(c == '+'){<br>
                                                                ans = a+b;<br>
                                                            }<br>
                                                            if(c == '-'){<br>
                                                                ans = a-b;<br>
                                                            }<br>
                                                            if(c == '*'){<br>
                                                                ans = a*b;<br>
                                                            }<br>
                                                            if(c == '/'){<br>
                                                                ans = a/b;<br>
                                                            }<br>
                                                            return ans;<br>
                                                        }<br><br>

                                                        int main(){<br>
                                                            char c;<br>
                                                            float presentvalue,number;<br>
                                                            printf("Initial Value : ");<br>
                                                            scanf("%f",&presentvalue);<br>
                                                            
                                                            while(true){<br>
                                                                getchar();<br>
                                                                printf("\nInput Operator : ");<br>
                                                                scanf("%c",&c);<br>
                                                                
                                                                if(c != '+' and c != '-' and c!= '*' and c!= '/'){<br>
                                                                    printf("\nFinish Calculation.\nEnd Value is %.2f",presentvalue);<br>
                                                                    break;<br>
                                                                }<br>
                                                                
                                                                printf("Input Number : ");<br>
                                                                scanf("%f",&number);<br><br>
                                                                
                                                                presentvalue = Calculate(presentvalue,number,c);<br>
                                                                
                                                                printf("Present Value = %.2f \n",presentvalue);  <br>  
                                                            }<br>
                                                            
                                                        }
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
