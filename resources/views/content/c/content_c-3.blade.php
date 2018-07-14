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
                    
                            <a href="/contentc-1"><span class="font-head">  การรับและแสดงผลข้อมูล</span> </a>

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
                                <span style="text-decoration:underline; font-weight:bold;font-size:35px;">คําสั่งที่ใช้ในการแสดงผล</span><br><br>
                                        • การเขียนโปรแกรมจําเป็นต้องมีการแสดงผล เพื่อให้ผู้ใช้งานทราบว่าโปรแกรมสามารถทํางานอะไรจําเป็นต้องป้อนค่าอะไรบ้าง และเมื่อโปรแกรมทํางานเสร็จ ผลลัพธ์ที่ได้เป็นอย่างไร<br>
                                        • คําสั่งที่ใช้สําหรับการแสดงผลในภาษาซีมีหลายคําสั่ง แต่ที่นิยมใช้กัน คือ คําสั่ง printf<br><br>
                                        <span style="text-decoration:underline; font-weight:bold">การแสดงผลข้อความอย่างเดียว</span><br><br>
                                        <span style=" font-weight:bold">► Syntax</span><br>
                                        <a href="http://www.mx7.com/view2/zuC7y0sAUAiAdCM0" target="_blank"><img border="0" src="http://www.mx7.com/i/12e/W0Itxv.JPG" /></a><br>
                                 <br><span style="font-weight:bold">สัญลักษณ์ในการแสดงผล</span><br>
                                         <br><table class="table table-hover">
                                            <tr>
                                              <th>Symbols</td>
                                              <th>Output</td>                                           
                                            </tr>
                                            <tr>
                                                <td>\'</td>
                                                <td>Sigle Quote</td>
                                            </tr>
                                            <tr>
                                                <td>\"</td>
                                                <td>Double Quote</td>
                                            </tr>
                                            <tr>
                                                <td>\\</td>
                                                <td>Backlash<td>
                                            </tr>
                                            <tr>
                                                <td>\n</td>
                                                <td>New line<td>
                                            </tr>
                                            <tr>
                                                <td>\t</td>
                                                <td>Tap<td>
                                            </tr>
                                            <tr>
                                                <td>\b</td>
                                                <td>Back 1 character<td>
                                            </tr>
                                        </table>



                                <div class="panel panel-default">
                                <img src="images/youtube.png"><span> YouTube</span>
                                        <div class="panel-heading" style=" background-color: #FF0033">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">CLIP ► การแสดงผลข้อความอย่างเดียว </span></a></h4>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/wrvLNgAAlNQ" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
        

                                <span style="font-weight:bold">ตัวอย่าง</span>
                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            printf("Hello Word!,I love Programming!");<br>
                                                        }
                                </div>
                                <span style="font-weight:bold">ผลลัพธ์</span>
                                <div class="ex-codebox">Hello Word!,I love Programming!</div><br><br>

                                <span style="font-weight:bold">ตัวอย่าง2</span>
                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            printf("Hello Word! \nI love Programming!");<br>
                                                        }
                                </div>
                                <span style="font-weight:bold">ผลลัพธ์</span>
                                <div class="ex-codebox">Hello Word! <br>I love Programming!</div>
                                    • ใส่ \n ระหว่างข้อความเพื่อเว้นบรรทัดระหว่างข้อความ<br><br><br>





                                <span style="text-decoration:underline; font-weight:bold">การแสดงผลข้อความพร้อมตัวแปร</span><br><br>
                                        <span style=" font-weight:bold">► Syntax</span><br>
                                       <a href="http://www.mx7.com/view2/zuCdqMAmHoJSb2ZO" target="_blank"><img border="0" src="http://www.mx7.com/i/da1/W0btAu.JPG" /></a>
                                            <br>    • ชนิดของข้อความ ต้องเป็นชนิดเดียวกับตัวแปรที่นำมาใส่
                                            <br>    • ชื่อตัวแปรของตัวแปรที่ต้องการแสดงผล<br><br>

                                        <span style="font-weight:bold">ชนิดของข้อความ</span><br>
                                         <table class="table table-hover">
                                            <tr>
                                              <th>ตัวแปร</td>
                                              <th>ค่าที่แสดง</td>                                           
                                            </tr>
                                            <tr>
                                                <td>%c</td>
                                                <td>ตัวอักษร</td>
                                            </tr>
                                            <tr>
                                                <td>%d</td>
                                                <td>จำนวนเต็ม</td>
                                            </tr>
                                            <tr>
                                                <td>%f</td>
                                                <td>เลขทศนิยม<td>
                                            </tr>
                                            <tr>
                                                <td>%.2f</td>
                                                <td>เลขทศนิยม 2 ตำแหน่ง<td>
                                            </tr>
                                            <tr>
                                                <td>%s</td>
                                                <td>ประโยค<td>
                                            </tr>
                                        </table>
                                         <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="font-content2">CLIP ► การแสดงผลข้อความพร้อมตัวแปร</span></a></h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/R6LD1R-XtmA" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                                <span style="font-weight:bold">ตัวอย่าง</span>
                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int x = 20;<br>
                                                            printf("I'm %d years old",x);<br>
                                                        }
                                </div>
                                <span style="font-weight:bold">ผลลัพธ์</span>
                                <div class="ex-codebox">I'm 20 years old</div>
                                    • สังเกตว่าตัวแปร x มี type เป็น int (จำนวนเต็ม) ดังนั้นหากต้องการแสดงผลตัวแปรนี้ 
                                    จึงต้องใส่เป็น %d <br>( printf("I'm <span style="text-decoration:underline; font-weight:bold">%d</span> years old",x) ) <br> 
                                    • จากนั้น ตามด้วยชื่อตัวแปร x ที่ต้องการแสดงหลังเครื่องหมาย , ( printf("I'm %d years old",<span style="text-decoration:underline; font-weight:bold">x</span>) ) <br>

                                <br><br><span style="font-weight:bold">ตัวอย่าง2</span>
                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int x = 20;<br>
                                                            float y = 4;<br>
                                                            printf("number x : %d + number y : %.2f \nOutput is : %.2f" ,x,y,x+y);<br>
                                                        }
                                </div>
                                <span style="font-weight:bold">ผลลัพธ์</span>
                                <div class="ex-codebox">number x : 20 + number y : 4.00 <br>Output is : 24.00</div>
                                    • เราสามารถ แสดงผลหลายๆตัวแปรได้โดยการ เพิ่มเครื่องหมาย (,) ตามด้วยชื่อตัวแปรต่อหลังตัวแปรที่มีอยู่ ดังนี้ <br>

                                            <a href="http://www.mx7.com/view2/zuCtPPB0f4MCHA7n" target="_blank"><img border="0" src="http://www.mx7.com/i/de7/KkU3an.JPG" /></a><br>
                                    • ตัวแปร x มี type เป็น int (จำนวนเต็ม) ในส่วนด้านหน้าจึงต้องใส่ %d<br>
                                    • ตัวแปร y มี type เป็น float(ทศนิยม) ในส่วนด้านหน้าจึงใส่ %.2f ที่เป็น .2f เพราะต้องการให้แสดงผลทศนิยมแค่ 2 ตัวแหน่ง<br>
                                    • การแสดงผล x+y : x เป็น มี type เป็น int แต่ y มี type เป็น float สังเกตว่า y มีความละเอียดมากกว่า( เป็นหลักทศนิยม ) ทางด้านหน้าจึงต้องใส่ %.2f ตามค่า y<br><br><br>

                                    <span style="text-decoration:underline; font-weight:bold;font-size:35px;">คําสั่งที่ใช้ในการรับข้อมูล</span><br><br>
                                    <span style=" font-weight:bold">► Syntax</span><br>
                                                       <a href="http://www.mx7.com/view2/zuCw45iYPDHpnZC2" target="_blank"><img border="0" src="http://www.mx7.com/i/b09/qIbn3D.JPG" /></a>
                                                     <table class="table table-hover">
                                                        <tr>
                                                          <th>ชนิดของตัวแปร</td>
                                                          <th>ชนิดของการรับค่า</td>                                           
                                                        </tr>
                                                        <tr>
                                                            <td>%c</td>
                                                            <td>สำหรับข้อมูลที่เป็นตัวอักษรหรืออักขระ เช่น char</td>
                                                        </tr>
                                                        <tr>
                                                            <td>%d</td>
                                                            <td>สำหรับข้อมูลที่เป็นจำนวนเต็ม เช่น int, byte shot long</td>
                                                        </tr>
                                                        <tr>
                                                            <td>%f</td>
                                                            <td>สำหรับข้อมูลที่เป็นจำนวนทศนิยม เช่น float double<td>
                                                        </tr>
                              
                                                        <tr>
                                                            <td>%s</td>
                                                            <td>สำหรับข้อมูลที่เป็นข้อความ(string) เช่น array of char (char[ ])<td>
                                                        </tr>
                                                    </table>

                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3"><span class="font-content2">CLIP ► คําสั่งที่ใช้ในการรับข้อมูล</span></a></h4>
                                        </div>
                                        <div id="collapseThree3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/Z5nmSOItjy0?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                                  <span style="font-weight:bold">ตัวอย่าง</span>
                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main( ) {<br>
                                                            int x;<br>
                                                            printf("Please input: ");<br>
                                                            scanf("%d",&x);<br>
                                                            printf("Output is : %d",x);<br>
                                                        }
                                </div>
                                <span style="font-weight:bold">ผลลัพธ์</span>
                                <div class="ex-codebox">Please input: 10<br>Output is : 10</div>
                                    • หากต้องการรับค่าใส่ในตัวแปร x สังเกตว่าตัวแปร x มี type เป็น int คำสั่งในส่วนด้านหน้าจึงต้องเป็น %d     ► scanf("<span style="text-decoration:underline; font-weight:bold">%d</span>",&x)
                                     จากนั้นตามด้วย &x  ► scanf("%d",<span style="text-decoration:underline; font-weight:bold">&x</span>) 

                                    











                               
                        






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
