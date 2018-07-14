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
                            
                            <a href="/contentc-1"><span class="font-head">If Statements</span> </a>

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
                        <span style="text-decoration:underline; font-weight:bold">คำสั่งเงื่อนไข (if statements)</span><br>
                        <span style=" font-weight:bold">► Syntax</span><br><br>
                        <a href="http://www.mx7.com/view2/zuD2HbZ77ZahIcI5" target="_blank"><img border="" r="0" src="http://www.mx7.com/i/c2b/ZCPUhn.JPG" /></a>

                        <br><br><span style="font-weight:bold">เครื่องหมายต่างๆใน condition</span><br><br>
                         <table class="table table-hover">
                                            <tr>
                                              <th>เครื่องหมาย</td>
                                              <th>ตัวอย่างการใช้งาน</td>    
                                              <th>ความหมาย </td>                                       
                                            </tr>
                                            <tr>
                                                <td>==</td>
                                                <td>x==y</td>
                                                <td>ค่าในตัวแปร x เท่ากับค่าในตัวแปร y จริงหรือไม่ ?</td>
                                            </tr>
                                            <tr>
                                                <td>!=</td>
                                                <td>x!=y</td>
                                                <td>ค่าในตัวแปร xไม่เท่ากับค่าในตัวแปร y จริงหรือไม่ ?</td>
                                            </tr>
                                            <tr>
                                                <td>></td>
                                                <td>x>y</td>
                                                <td>ค่าในตัวแปร x มากกว่าค่าในตัวแปร y จริงหรือไม่ ?</td>
                                            </tr>
                                             <tr>
                                                <td>>=</td>
                                                <td>x>=y</td>
                                                <td>ค่าในตัวแปร x มากกว่าหรือเท่ากับค่าในตัวแปร y จริงหรือไม่ ?</td>
                                            </tr>
                                             <tr>
                                                <td>&lt</td>
                                                <td>x&lty</td>
                                                <td>ค่าในตัวแปร x น้อยกว่าค่าในตัวแปร y จริงหรือไม่ ?</td>
                                            </tr>
                                             <tr>
                                                <td><=</td>
                                                <td>x<=y</td>
                                                <td>ค่าในตัวแปร x น้อยกว่าหรือเท่ากับค่าในตัวแปร y จริงหรือไม่ ?</td>
                                            </tr>
                                            <tr>
                                                <td>&& (และ)</td>
                                                <td>(x>1) && (x&lt10)</td>
                                                <td>จะมีค่าเป็นจริงเมื่อตัวแปร x มีค่าอยู่ระหว่าง 1 ถึง 10</td>
                                            </tr>
                                            <tr>
                                                <td>|| (หรือ)</td>
                                                <td>x>1 || x&lt10</td>
                                                <td>จะมีค่าเป็นจริงเมื่อตัวแปร x มีค่ามากกว่า 1 หรือ น้อยกว่า 10</td>
                                            </tr>
                                            <tr>
                                                <td>! (นิเสธ)</td>
                                                <td>!(x==1)</td>
                                                <td>จะมีค่าเป็นจริงเมื่อตัวแปร x มีค่าไม่เท่ากับ 1</td>
                                            </tr>
                                        </table><br>

                                        <div class="panel panel-default">
                                        <img src="images/youtube.png"><span> YouTube</span>
                                        <div class="panel-heading" style=" background-color: #FF0033">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="font-content2">CLIP ► คำสั่งเงื่อนไข (if statements) 1/2</span></a></h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/TCKPbS4B8Es?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">CLIP ► คำสั่งเงื่อนไข (if statements) 2/2</span></a></h4>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/FuejmCARbzM?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                                        <span style="font-weight:bold">ตัวอย่าง</span>
                                          
                                            <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int score;<br>
                                                            scanf("%d",&score);<br>
                                                            if(score>=50) // จะเป็นจริงเมื่อ score มีค่ามากกว่าหรือเท่ากับ 50 <br>
                                                                printf("PASSED");<br>
                                                            if(score&lt50) // จะเป็นจริงเมื่อ score มีค่าน้อยกว่า 50 <br>
                                                                printf("FAILED");<br>
                                                        }
                                            </div>
                                                โปรแกรมด้านบนมีการรับจำนวนเต็มมาใส่ในตัวแปร score และมีการเช็ค if ทั้งหมด 2 if <br>
                                                    • โดย if แรกคือ  if(score>=50) หรือไม่ ถ้า score ที่รับมามีค่ามากกว่าหรือเท่ากับ 50 จะแสดงผล PASSED ออกไป <br>
                                                    • หลังจากเช็คเงื่อนที่ if แรกสำเร็จแล้ว โปรแกรมจะทำการเช็ค if ที่ 2 คือ  if(score&lt50) โดยถ้า score ที่รับมามีค่าน้อยกว่า 50 ก็จะแสดงผล FAILED ออกไป 
                                            <br><br><div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int score;<br>
                                                            scanf("%d",&score);<br>
                                                            if(score>=50)<br>
                                                                printf("PASSED");<br>
                                                            else <br>
                                                                printf("FAILED");<br>
                                                        }
                                            </div>
                                                ส่วนโปรแกรมด้านบน มีการเช็ค if ทั้งหมด 1 if โดย <br>
                                                    • ทำการเช็คที่ if(score>=50) ถ้า score ที่รับมามีค่ามากกว่าหรือเท่ากับ 50 จะทำการแสดงผล PASSED ออกไป และข้ามส่วนของ else ไป <br>
                                                    • แต่ถ้าเงื่อนไข if ด้านบนเป็นเท็จ  โปรแกรมจะมาเข้าเงื่อนไข else และทำการแสดงผล FAILED ทันที และในทางกลับกัน ถ้าในส่วนของ if ด้านบนเป็นจริง ก็จะไม่มาทำในส่วนของ else<br><br><br><br>
                                                
                        <span style="text-decoration:underline; font-weight:bold">คำสั่งเงื่อนไขซ้อน (Nested IF)</span><br>
                        <span style=" font-weight:bold">► Syntax</span><br><br>            
                        <a href="http://www.mx7.com/view2/zuDeDJzNuLmKNRkw" target="_blank"><img border="0" src="http://www.mx7.com/i/dd9/4uW7Z4.JPG" /></a> <br>
                                หลักการทำงานคือ ถ้าเงื่อนไขระหว่าง if หรือ else if ไหน<span style="text-decoration:underline; font-weight:bold">เป็นจริง</span>เพียงหนึ่งอัน โปรแกรมจะไม่ทำการเช็คเงื่อนไขใน else if อันอื่นๆอีก ซึ่งต่างจาก if ตรงที่ ถึงแม้ เงื่อนไขใน if อันหนึ่งเป็นจริงแล้ว โปรแกรมก็จะยังทำการเช็คใน if อันอื่นๆต่อไปจนกว่าจะหมด<br><br>
                        
                        <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3"><span class="font-content2">CLIP ► คำสั่งเงื่อนไขซ้อน (Nested IF)</span></a></h4>
                                        </div>
                                        <div id="collapseThree3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/2gopz4is9ns?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>

                        <br><span style="font-weight:bold">ตัวอย่าง</span>
                                            <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int POINT;<br>
                                                            scanf("%d",&POINT);<br>
                                                            if (POINT<50) // ตำแหน่ง 1 จะเป็นจริงเมื่อ POINT มากกว่า 50<br>
                                                                printf("Grade F");<br>
                                                            else if ((50 <= POINT) && (POINT <60)) // ตัวแหน่ง 2 จะเป็นจริงเมื่อ POINT มีค่า ระหว่าง 50-59<br> 
                                                                printf("Grade D");<br>
                                                            else if ((60 <= POINT) && (POINT <70)) // ตำแหน่ง 3 จะเป็นจริงเมื่อ POINT มีค่า ระหว่าง 60-69<br> 
                                                                printf("Grade C");<br>
                                                            else if ((70 <= POINT) && (POINT <80)) // ตำแหน่ง 4 จะเป็นจริงเมื่อ POINT มีค่า ระหว่าง 70-79<br> 
                                                                printf("Grade B");<br>
                                                            else<br> 
                                                                printf("Grade A");<br>
                                                        }
                                            </div><br>
                                                • ในส่วนของตัวอย่าง มีการรับค่าจำนวนเต็มมาใส่ในตัวแปร POINT และมีการเช็คเงื่อนไขทั้งหมด 4 เงื่อนไข<br>
                                                    โดยวิธีการทำงานคือ โปรแกรมจะเช็คใน if หรือ else if ลงมาเรื่อยๆตั้งแต่ if แรก ถ้า if หรือ else if ระหว่างตำแหน่ง 1-4 ตำแหน่งไหนเป็นจริง โปรแกรมจะทำการแสดงค่าและจะไม่ไปทำการเช็คที่เงื่อนไขใดอีก<br>
                                                    แต่ถ้า  if หรือ else if ระหว่าง 1-4 เป็นเท็จทุกอัน โปรแกรมจะทำการพิมพ์ค่าในส่วนของ else แทน 






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
