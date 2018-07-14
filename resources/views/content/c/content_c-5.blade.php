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
                            
                            <a href="/contentc-1"><span class="font-head"> Loop</span> </a>

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
                         <div class="content"><br>
                            Loop ในภาษา C จะมีทั้งหมด 3 Loop คือ <br>
                                1. Loop While <br>
                                2. Loop Do while<br>
                                3. Loop for <br><br>
                            
                            <span style="text-decoration:underline; font-weight:bold;font-size:35px">โครงสร้าง while ลูป</span><br>
                            <span style=" font-weight:bold">► Syntax</span><br>
                            <a href="http://www.mx7.com/view2/zuJ5Rr858ZbYwR4D" target="_blank"><img border="0" src="http://www.mx7.com/i/b1d/EWz1uD.JPG" /></a><br>
                                    • condition คือเงื่อนไขในการวนลูป <br>
                                    • Statement1 → StatementN คือคำสั่งต่างๆ ที่ต้องการให้โปรแกรมทำขณะอยู่ในลูป<br><br>
                                    <div style="text-align:center"><span style="text-decoration:underline; font-weight:bold">แผนภาพแสดง</span></div>
                            <div style="text-align:center"> <a href="http://www.mx7.com/view2/zuJum63JVBglaz1b" target="_blank"><img border="0" src="http://www.mx7.com/i/152/m5lavv.JPG" /></a></div><br>
                                    หลักการทำงานคือหากหลักการทำงานคือ โปรแกรมจะเริ่มเช็คที่เงื่อนไข Condition <br>
                                        หาก<span style="text-decoration:underline; font-weight:bold">เป็นจริง</span>โปรแกรมจะเข้ามาทำคำสั่งภายใน Loop while ทั้งหมด  จากนั้น จะวนกลับไปเช็ค Condition ที่ด้านบนใหม่<br>
                                        หาก<span style="text-decoration:underline; font-weight:bold">เป็นเท็จ</span>โปรแกรมจะข้ามคำสั่งภายใน Loop while ทั้งหมด หรือก็คือไม่เข้า Loop นั่นเอง<br><br>

                           
                            <div class="panel panel-default">
                            <img src="images/youtube.png"><span> YouTube</span>
                                        <div class="panel-heading" style=" background-color: #FF0033">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="font-content2">CLIP ► Loop While</span></a></h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/FGwPSoc3FrE?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>

                            <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span><br>
                            <div class="ex-codebox"> #include&ltstdio.h&gt <br>
                                                    int main()<br>
                                                    {<br>
                                                        int i,N;<br>
                                                        printf( "Enter N: " );<br>
                                                        scanf("%d",&N);<br>
                                                        i = 1;                // กำหนดให้ค่า i มีค่าเท่ากับ 1<br>
                                                        while (i <= N)        // เงื่อนไขว่า ค่า i ต้องมีค่าน้อยกว่าหรือเท่ากับ N<br>
                                                            printf("%d\n",i); // print ค่า i ออกไป<br>
                                                            i++;              // ให้ค่า i มีค่าเพิ่มขึ้น 1<br>
                                                        }<br>
                                                    }
                                                    </div><br>
                            <span style="text-decoration:underline; font-weight:bold">ผลลัพธ์</span><br>
                            <div class="ex-codebox">Please input N: 5<br>
                                                    1<br>
                                                    2<br>
                                                    3<br>
                                                    4<br>
                                                    5
                             </div>
                                 สังเกตว่าเมื่อค่า i ถูกเพิ่มขึ้นไปถึงเลข 6 จากคำสั่ง i++ เงื่อนไขใน Condition จึงเป็นเท็จ จาก i<=N (6 <= 5 เป็นเท็จ ) โปรแกรมจึงจบการทำงาน <br><br>
                             <span style="text-decoration:underline; font-weight:bold;font-size:35px">โครงสร้าง do...while ลูป</span><br>
                             <span style=" font-weight:bold">► Syntax</span><br>
                             <a href="http://www.mx7.com/view2/zuJEWYFtmRS0MGJm" target="_blank"><img border="0" src="http://www.mx7.com/i/119/tPbigW.JPG" /></a><br>
                                    ลักษณะของ Loop Do while มีลักษณะคล้าย Loop While มาก โดยหลักการทำงานเป็นดังนี้ <br>
                                <span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span>  โปรแกรมจะทำคำสั่งภายใน Do ก่อนโดยไม่สนใจเงื่อนไขใดๆ <br>
                                จากนั้นจึงลงไปเช็คเงื่อนไขตามปกติ โดยถ้าเงื่อนไขเป็นจริง โปรแกรมจะย้อนกลับขึ้นไปทำคำสั่งภายใน do แต่ถ้าเป็นเท็จก็จะออกจาก Loop do while
                            <br><div style="text-align:center"><a href="http://www.mx7.com/view2/zuJIKmyjEBE2UFCK" target="_blank"><img border="0" src="http://www.mx7.com/i/cef/6ktC2q.JPG" /></a></div><br><br>


                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">CLIP ► Loop Do While</span></a></h4>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/VY4qKKBC6xk?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                             <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span><br>
                            <div class="ex-codebox"> #include&ltstdio.h&gt <br>                                             
                                                    int main() {<br>
                                                        int i, N;<br>
                                                        printf("Enter N: ");<br>
                                                        scanf("%d",&N);<br>
                                                        i = 1;                   // กำหนดให้ i มีค่าเท่ากับ 1<br>
                                                        do{<br>
                                                            printf("%d\n",i);   // สั่ง print ค่า i ออกไป<br>
                                                            i++;                // กำหนดให้ค่า i มีค่าเพิ่มขึ้น 1<br>
                                                        }while(i<=N);           // เงื่อนไขว่า ค่า i ต้องมีค่าน้อยกว่าหรือเท่ากับ N<br>
                                                    }
                                                    </div><br>
                            <span style="text-decoration:underline; font-weight:bold">ผลลัพธ์</span><br>
                            <div class="ex-codebox">Please input N: 5<br>
                                                    1<br>
                                                    2<br>
                                                    3<br>
                                                    4<br>
                                                    5
                             </div>
                                    ขั้นแรกโปรแกรมจะเข้ามาทำในส่วนของ do ก่อนคือการ print ค่า i และให้ค่า i เพิ่มขึ้น 1 <br>
                                จากนั้น ค่อยไปทำการเช็คในเงื่อนไข <br><br>


                            <span style="text-decoration:underline; font-weight:bold;font-size:35px">โครงสร้าง For ลูป</span><br>
                             <span style=" font-weight:bold">► Syntax</span><br>
                                           <a href="http://www.mx7.com/view2/zuJSsEr1qBM0HFpi" target="_blank"><img border="0" src="http://www.mx7.com/i/15f/hL9Gwp.JPG" /></a><br>

                                        • init_runner คือ ตัวแปรเริ่มต้น <br>
                                        • condition คือ เงื่อนไขในการวนลูป <br>
                                        • update_runner คือ การเพิ่มค่าตัวแปรเริ่ม<br><br>
                                ลักษณะการทำงานของ Loop for จะเป็นไปตามค่า init_runner ( ตัวแปรเริ่มต้น ) ถ้าค่าตัวแปรเริ่มต้นมีค่าเกิน condition ที่ตั้งไว้ก็จะหยุดออกจาก loop โดยการเพิ่มขึ้นของ ตัวแปรเริ่มต้น เป็นไปตามค่า update_runner<br><br>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3"><span class="font-content2">CLIP ► Loop For </span></a></h4>
                                        </div>
                                        <div id="collapseThree3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/N5LCBqAjEHA?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                                 <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span><br>
                            <div class="ex-codebox"> #include&ltstdio.h&gt <br>                                             
                                                    int main()<br>
                                                    {<br>
                                                        int i;<br>
                                                        for(i=1;i<=20;i++){   // กำหนดให้ค่า i=1 และเงื่อนไขในการวนลูปคือ i<=20 และ ค่า i มีการเพิ่ม 1 ในทุกรอบที่วนลูป<br> 
                                                            printf("%d\n",i); // print ค่า i ออกไป <br>
                                                        }<br>
                                                    }<br>
                                                    </div><br>

                                                            มีการกำหนด <span style="text-decoration:underline; font-weight:bold">ตัวแปรเริ่มต้น</span> ค่า i ให้เป็น 1 <br>
                                                            <span style="text-decoration:underline; font-weight:bold">เงื่อนไข</span> ในการวนลูปคือ i<=20 <br>
                                                            <span style="text-decoration:underline; font-weight:bold">ตัวแปรเริ่มต้น ( i ) เพิ่มขึ้น</span> ทีละ 1 ทุกรอบของการวนลูป<br>
                                                        การทำงานคือ ในการวน 1 รอบจะทำการ print ค่า i ออกมา จากนั้นเมื่อ print เสร็จ ค่า i จะเพิ่มขึ้น 1 จากคำสั่ง  for(i=1;i<=20;<span style="text-decoration:underline; font-weight:bold">i++</span>) และเมื่อค่า i มีค่าเกิน เงื่อนไข  for(i=1; <span style="text-decoration:underline; font-weight:bold">i<=20</span>;i++) ลูปก็จะหยุดทำงาน<br>
                                                     

                            <span style="text-decoration:underline; font-weight:bold">ผลลัพธ์</span><br>
                            <div class="ex-codebox">1<br>
                                                    2<br>
                                                    3<br>
                                                    4<br>
                                                    5<br>
                                                    6<br>
                                                    7<br>
                                                    8<br>
                                                    9<br>
                                                    10<br>
                                                    11<br>
                                                    12<br>
                                                    13<br>
                                                    14<br>
                                                    15<br>
                                                    16<br>
                                                    17<br>
                                                    18<br>
                                                    19<br>
                                                    20
                             </div>
                                     <br>        สังเกตว่า โจทย์ต้องการที่จะ print ค่า i จำนวน 20 ตัว ซึ่งก็คือ เรารู้จำนวนรอบของ loop อยู่แล้วคือ 20 รอบ จึงมีการตั้งเงื่อนไขตามด้านบนนั่นเอง<br><br><br><br>


                             <span style="text-decoration:underline; font-weight:bold">จะรู้ได้อย่างไรว่าโจทย์ข้อไหน ต้องใช้ Loop แบบไหน?</span><br><br>
                                    • Loop while และ Do while <span style="text-decoration:underline; font-weight:bold">จะเป็นการวนค่าไปเรื่อยๆ</span> จนกว่าจะมีคำสั่งให้หยุด หรือ เงื่อนไขเป็นเท็จ เช่น โจทย์ข้อนี้ <br>
                                    <div class="ex-codebox"> จงเขียนโปรแกรมเพื่อวนรับตัวเลขจากผู้ใช้จนกว่าผู้ใช้จะป้อนค่าติดลบจึงจบการทำงาน </div>
                                        โจทย์ต้องการให้รับค่า ตัวเลขไปเรื่อยๆจนกว่าตัวเลขจะติดลบ สังเกตว่าเราไม่ทราบว่า<span style="text-decoration:underline; font-weight:bold">ผู้ใช้จะใส่ค่าติดลบมาตอนไหน</span> จึงจำเป็นต้องใช้ loop while หรือ do while วนรับค่าไปเรื่อยๆจนกว่าค่าที่รับจะติดลบ<br>

                                    <br>        • Loop for ลักษณะคือจะเป็นการวนค่า <span style="text-decoration:underline; font-weight:bold">ตามจำนวนรอบตามที่เราได้ตั้งไว้</span>เช่นโจทย์ข้อนี้ <br>
                                        <div class="ex-codebox"> จงเขียนโปรแกรมเพื่อทำการพิมพ์ตัวเลข 1, 2, 3, 4, ... , 30 บนจอ</div>
                                            โจทย์ต้องการให้พิมพ์เลข 1 ถึง 30 สังเกตว่า เรารู้อยู่แล้วว่ามีเลขที่ต้อง print ออกไปกี่ตัว การใช้ loop for จึงง่ายและสะดวกกว่า

                                    <br><br><span style="text-decoration:underline; font-weight:bold">ไม่จำเป็นว่าต้องทำตามเงื่อนไขนี้เสมอ เพราะโจทย์บางข้อสามารถใช้ได้ทั้ง Loop while และ for ขึ้นอยู่กับการเลือกใช้</span>






                               

                                    


                                    







                           






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
