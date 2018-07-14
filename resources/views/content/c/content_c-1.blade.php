<!DOCTYPE html>
<html>
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
                            <a href="/contentc-1"><span class="font-head">  ตัวแปรกับชนิดของข้อมูล</span> </a>

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
                                <span style="font-weight:bold">► Syntax ของการประกาศตัวแปร </span> <br><br>
                                    <br><br>
                                        


                                        <span style="text-decoration:underline; font-weight:bold">หลักการตั้งชื่อตัวแปร</span><br>
                                        <ul style="list-style-type:disc">
                                        <li>ชื่อตัวแปรจะต้องขึ้นต้นด้วยตัวอักษรหรือเครื่องหมาย "_" เท่านั้น</li>
                                        <li>ภายในชื่อตัวแปรให้ใช้ตัวอักษร, ตัวเลข 0-9 หรือเครื่องหมาย "_"
                                        <li>ห้ามมีช่องว่างในชื่อตัวแปร
                                        <li>อักษรตัวพิมพ์เล็ก-ใหญ่ มีความแตกต่างกัน (case sensitive) เช่น Name, NAME และ name
                                        <li>ถือเป็นชื่อที่แตกต่างกัน
                                        <li>ห้ามซ้ำกับชื่อตัวแปรสงวน (reserved word)
                                        </ul>    <br><br>



                                                                                <span style="font-weight:bold">► คำสงวน</span> <br>
                                        <P>      <B>คำสงวน (Reserved Word)</B>  เป็นคำเฉพาะที่กำหนดขึ้นมา เพื่อใช้ในตัวภาษาโดยเฉพาะ ซึ่งไม่สามารถนำมาใช้เป็นชื่อได้ เช่น <ed>ไม่สามาถนำไปใช้เป็นตัวแปร (Variables)</ed> หรือ <ed>ชื่อโปรแกรมได้</ed> คำสงวนในภาษาซี มีทั้งหมด<ed><ef> 32 </ef></ed>ตัว </P>
                         


                                        <table class="table table-hover">



                                        <tr align = "left" bgcolor = "CCCCCC">
                                            <td><ed>auto</ed></td>

                                            <td><ed>double</ed></td>

                                            <td><ed>int</ed></td>

                                            <td><ed>struct</ed></td>
                                        </tr>

                                        <tr align = "left">
                                            <td><ed>break</ed></td>

                                            <td><ed>else</ed></td>

                                            <td><ed>long</ed></td>

                                            <td><ed>switch</ed></td>
                                        </tr>

                                        <tr align = "left" bgcolor = "CCCCCC">
                                            <td><ed>case</ed></td>

                                            <td><ed>enum</ed></td>

                                            <td><ed>register</ed></td>

                                            <td><ed>typedef</ed></td>
                                        </tr>

                                        <tr align = "left">
                                            <td><ed>char</ed></td>

                                            <td><ed>extern</ed></td>

                                            <td><ed>return</ed></td>

                                            <td><ed>union</ed></td>
                                        </tr>

                                        <tr align = "left" bgcolor = "CCCCCC">
                                            <td><ed>const</ed></td>

                                            <td><ed>float</ed></td>

                                            <td><ed>short</ed></td>

                                            <td><ed>unsigned</ed></td>
                                        </tr>

                                        <tr align = "left">
                                            <td><ed>continue</ed></td>

                                            <td><ed>for</ed></td>

                                            <td><ed>signed</ed></td>

                                            <td><ed>void</ed></td>
                                        </tr>

                                        <tr align = "left" bgcolor = "CCCCCC">
                                            <td><ed>default</ed></td>

                                            <td><ed>goto</ed></td>

                                            <td><ed>sizeof</ed></td>

                                            <td><ed>volatile</ed></td>
                                        </tr>

                                        <tr align = "left">
                                            <td><ed>do</ed></td>

                                            <td><ed>if</ed></td>

                                            <td><ed>static</ed></td>

                                            <td><ed>while</ed></td>
                                        </tr>


                                        </table><br><br>

                                        <span style=" font-weight:bold">► ชนิดของตัวแปร</span><br><br>

                                        <table class="table table-hover">
                                       
                                        <tr>
                                          <th>ชนิดของตัวแปร</td>

                                          <th>ขนาด (bits)</td>

                                          <th>ขอบเขต</td>

                                        <th>ข้อมูลที่เก็บ</td>
                                        </tr>
                                        <tr>
                                        <td>char</td>

                                        <td>8</td>

                                        <td>-128 ถึง 127</td>

                                        <td>ข้อมูลชนิดอักขระ ใช้เนื้อที่ 1 byte</td>
                                        </tr>
                                
                                        <tr>
                                          <td>int</td>

                                        <td>16</td>

                                        <td>-32,768 ถึง 32,767</td>

                                        <td>ข้อมูลชนิดจำนวนเต็ม ใช้เนื้อที่ 2 byte</td>
                                        </tr>
                                        
                                        <tr>
                                        <td>short</td>

                                        <td>8</td>

                                        <td>-128 ถึง 127</td>

                                        <td>ข้อมูลชนิดจำนวนเต็มแบบสั้น ใช้เนื้อที่ 1 byte</td>
                                        </tr>
                                       
                                        <tr>
                                        <td>long</td>

                                        <td>32</td>

                                        <td>-2,147,483,648 ถึง 2,147,483,649</td>

                                        <td>ข้อมูลชนิดจำนวนเต็มแบบยาว ใช้เนื้อที่ 4 byte</td>
                                        </tr>
                                       
                                        <tr>
                                        <td>float</td>

                                        <td>32</td>

                                        <td>3.4*10e(-38) ถึง 3.4*10e(38)</td>

                                        <td>ข้อมูลชนิดเลขทศนิยม ใช้เนื้อที่ 4 byte</td>
                                        </tr>
                                        <tr>
                                        <td>double</td>

                                        <td>64</td>

                                        <td>3.4*10e(-308) ถึง 3.4*10e(308)</td>

                                        <td>ข้อมูลชนิดเลขทศนิยม ใช้เนื้อที่ 8 byte</td>
                                        </tr>
                                        <tr>
                                        <td>long double</td>

                                        <td>128</</td>

                                        <td>3.4*10e(-4032) ถึง 1.1*10e(4032)</td>

                                        <td>ข้อมูลชนิดเลขทศนิยม ใช้เนื้อที่ 16 byte</td>
                                        </tr>
                                        
                                          
                                        
                                        </table>
                                        <span style="text-decoration:underline; font-weight:bold">หมายเหตุ</span> : หากมีการเติม unsigned ด้านหน้าตัวแปรจะเป็นการเพิ่มเนื้อที่เก็บข้อมูลอีก 2 เท่าเพราะ unsigned จะไม่เก็บค่าข้อมูลที่มีค่าที่น้อยกว่า 0 (ไม่คิดเครื่องหมายลบ)<br><br>
                                        

                                <div class="panel panel-default">
                                <img src="images/youtube.png"><span> YouTube</span>
                                        <div class="panel-heading" style=" background-color: #FF0033">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">CLIP ► ตัวแปรและชนิดของข้อมูล</span></a></h4>
                                        </div>
                                        <div id="collapseThree2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <iframe width="1100" height="619" src="https://www.youtube.com/embed/3t7AXJJzKOI?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>





                                        <br><span style=" font-weight:bold">ตัวอย่างการประกาศตัวแปร</span> <br>
                                        <div class="ex-codebox">
                                        int main(){<br>
                                            int a = 10;  // ประกาศตัวแปรชื่อ a มี type เป็น int(จำนวนเต็ม) มีข้อมูลคือ เลข 10 <br>
                                            float b = 5.8754; // ประกาศตัวแปรชื่อ b มี type เป็นfloat(ทศนิยม) มีข้อมูลคือ เลข 5.8754<br>
                                            double c = 13.71518; //ประกาศตัวแปรชื่อ c มี type เป็น double(ทศนิยมเช่นกัน แต่สามารถเก็บได้มากกว่า float) มีข้อมูลคือ เลข 13.71518<br>
                                            char d = 'a'; //ประกาศตัวแปรชื่อ d มีtypeเป็น char(ตัวอักษร 1 ตัว)  มีข้อมูลคือ ตัวอักษร a<br>
                                        }</div>

                                        <br><br> เราสามารถประกาศตัวแปร พร้อมกันทีเดียว ภายในบรรทัดเดียวได้ เช่น 
                                           <div class="ex-codebox">
                                            int main(){ <br>
                                                int a = 10,b = 10;<br>
                                                float c = 1.5,d = 5.6;  <br> 
                                            }
                                        </div>
                                            • สังเกตว่าตัวแปร a และ b หรือ c และ d ต้องมี Type เป็นชนิดเดียวกันถึงจะประกาศพร้อมกันได้ <br><br>

                                        <span style="text-decoration:underline; font-weight:bold">ข้อควรระวัง</span> เราไม่สามารถประกาศตัวแปรซ้ำกัน 2 ครั้งได้ <br>

                                        <div class="ex-codebox"> 
                                                int main(){<br>
                                                    int a = 10;<br>
                                                    int a = 20; // ผิด <br>
                                                }
                                        </div>
                                            • ตัวแปร a ถูกประกาศไว้แล้ว ไม่สามารถประกาศตัวแปรซ้ำได้ <br>
                                        แต่หากต้องการเปลี่ยนค่า a สามารถทำได้ดังนี้
                                        <div class="ex-codebox"> 
                                                int main(){<br>
                                                    int a = 10;<br>
                                                    a = 20; //  ไม่ต้องประกาศตัวแปรใหม่ แต่สามารถเปลี่ยนค่าของ a ได้เลย<br>
                                                }
                                        </div>
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