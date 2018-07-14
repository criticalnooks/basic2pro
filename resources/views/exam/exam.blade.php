<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>แบบทดสอบ | ภาษา C</title>
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
    <script language="JavaScript">
          <!--

          var numQues = 40;
          var numChoi = 4;

          var answers = new Array(40);
          answers[0] = "ระดับกลาง";
          answers[1] = "ฟังก์ชัน library";
          answers[2] = "ก่อนฟังก์ชัน main";
          answers[3] = "เครื่องหมาย ;";
          answers[4] = "String";
          answers[5] = "Mean_x";
          answers[6] = "Char p = A;";
          answers[7] = "string x[10];";
          answers[8] = "float main[5][10];";
          answers[9] = "12 ไบต์";
          answers[10] = "ทศนิยม";
          answers[11] = "break";
          answers[12] = "++, * หรือ / , + หรือ –";
          answers[13] = "ส่วนประมวลผลก่อน";
          answers[14] = "จะตรวจสอบ case ที่อยู่ลำดับถัดไป";
          answers[15] = "Sum (15, b);";
          answers[16] = "char[ ]  a = “PROGRAM”;";
          answers[17] = "function_name(type arg, ….)";
          answers[18] = "double";
          answers[19] = "x + 2 = y + 3;";
          answers[20] = "&";
          answers[21] = "6";
          answers[22] = "อนั้นต์";
          answers[23] = "int i;   for( i = 0 ; i <= 9; i++)      printf(“%d”,i+1);   }";
          answers[24] = "ไม่มีข้อใดถูก";
          answers[25] = "662";
          answers[26] = "ไม่มีข้อถูก";
          answers[27] = "1";
          answers[28] = "30";
          answers[29] = "0";
          answers[30] = "9.00";
          answers[31] = "x = 50     y=75";
          answers[32] = "6.500000";
          answers[33] = "000";
          answers[34] = "29";
          answers[35] = "2";
          answers[36] = "^";
          answers[37] = "729";
          answers[38] = "23.12";
          answers[39] = "9 6 4  10 5 15 9 10 -10";

          function getScore(form) {
            var score = 0;
            var currElt;
            var currSelection;

            for (i=0; i<numQues; i++) {
              currElt = i*numChoi;
              for (j=0; j<numChoi; j++) {
                currSelection = form.elements[currElt + j];
                if (currSelection.checked) {
                  if (currSelection.value == answers[i]) {
                    score++;
                    break;
                  }
                }
              }
            }

            score = Math.round(score/numQues*100);
            form.percentage.value = score + "%";

            var correctAnswers = "";
            for (i=1; i<=numQues; i++) {
              correctAnswers += i + ". " + answers[i-1] + "\r\n";
            }
            form.solutions.value = correctAnswers;

          }

          // -->
          </script>
          </head>

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
    <!--/#header-->

     <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <a href="/exercisesc"><span class="font-head"> แบบทดสอบ ภาษา C  </span></a>


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
                       <!-- START START START START START START START START START START START START START START START START START START START START START START -->
                       <form name="quiz">

                       <div class="exam-box" text-align:center >1. ภาษาซีจัดเป็นภาษาระดับใด<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q1" value="ระดับต่ำ"> ระดับต่ำ<br>
                           <input type="radio" name="q1" value="ระดับกลาง"> ระดับกลาง<br>
                           <input type="radio" name="q1" value="ภาษาเครื่อง"> ภาษาเครื่อง<br>
                           <input type="radio" name="q1" value="ระดับสูง"> ระดับสูง<br>
                       <p></div><br>
<p class="dashed"></p><br>

                       <div class="exam-box">2. โปรแกรมภาษาซีจะเริ่มทำงานจากฟังก์ชันใด<br></div>
                       <div class="exam-box">
                           <input type="radio" name="q2" value="ฟังก์ชัน main"> ฟังก์ชัน main<br>
                           <input type="radio" name="q2" value="ฟังก์ชัน include"> ฟังก์ชัน include<br>
                           <input type="radio" name="q2" value="ฟังก์ชัน library"> ฟังก์ชัน library<br>
                           <input type="radio" name="q2" value="ฟังก์ชัน declare"> ฟังก์ชัน declare<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">3. การกำหนดฟังก์ชันต่าง ๆ ขึ้นใช้งานในภาษาซีโดยทั่วไปแล้วล้วจะกำหนดที่ส่วนใด<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q3" value="ก่อนฟังก์ชัน main"> ก่อนฟังก์ชัน main<br>
                           <input type="radio" name="q3" value="กำหนดไว้ภายในฟังก์ชัน main"> กำหนดไว้ภายในฟังก์ชัน main<br>
                           <input type="radio" name="q3" value="หลังฟังก์ชัน main"> หลังฟังก์ชัน main<br>
                           <input type="radio" name="q3" value="กำหนดได้ทั้งก่อนหรือหลังฟังก์ชัน main"> กำหนดได้ทั้งก่อนหรือหลังฟังก์ชัน main<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">4. ประโยคคำสั่งต่าง ๆ ในภาษาซี ต้องปิดท้ายแต่ละคำสั่งด้วยเครื่องหมายใด<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q4" value="เครื่องหมาย ."> เครื่องหมาย .<br>
                           <input type="radio" name="q4" value="เครื่องหมาย ,"> เครื่องหมาย ,<br>
                           <input type="radio" name="q4" value="เครื่องหมาย ;"> เครื่องหมาย ;<br>
                           <input type="radio" name="q4" value="เครื่องหมาย :"> เครื่องหมาย :<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">5. ข้อใดไม่ใช่ประเภทของข้อมูลในภาษาซี<br></div>
                        <div class="exam-box">
                           <input type="radio" name="q5" value="char"> char<br>
                           <input type="radio" name="q5" value="String"> String<br>
                           <input type="radio" name="q5" value="int"> int<br>
                           <input type="radio" name="q5" value="Float"> Float<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">6. ตัวแปรข้อใดที่ถูกต้อง<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q6" value="3sum"> 3sum<br>
                           <input type="radio" name="q6" value="sum-sc"> sum-sc<br>
                           <input type="radio" name="q6" value="main"> main<br>
                           <input type="radio" name="q6" value="Mean_x"> Mean_x<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">7. ข้อใดเป็นลักษณะการประกาศตัวแปรที่ไม่ถูกต้อง<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q7" value="short int m,n;"> short int m,n;<br>
                           <input type="radio" name="q7" value="long int m,n;"> long int m,n;<br>
                           <input type="radio" name="q7" value="double m,n;"> double m,n;<br>
                          <input type="radio" name="q7" value="Char p = A;"> Char p = A;<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">8. ข้อใดเป็นการประกาศตัวแปรชุด 1 มิติที่ไม่ถูกต้อง<br></div>
                         <div class="exam-box">
                                <input type="radio" name="q8" value="Char c[10];"> Char c[10];<br>
                                <input type="radio" name="q8" value="int n[10];"> int n[10];<br>
                                <input type="radio" name="q8" value="string x[10];"> string x[10];<br>
                                <input type="radio" name="q8" value="Float n[10];"> Float n[10];<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">9. ข้อใดเป็นการประกาศตัวแปรชุด 1 มิติที่ไม่ถูกต้อง<br></div>
                        <div class="exam-box">
                                <input type="radio" name="q9" value="int s[3]"> int s[3]<br>
                                <input type="radio" name="q9" value="score s[3][4];"> score s[3][4];<br>
                                <input type="radio" name="q9" value="char [5][10];"> char [5][10];<br>
                                <input type="radio" name="q9" value="float main[5][10];"> float main[5][10];<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">10. จากการประกาศตัวแปรชุด float f[2][3]; เป็นการจองเนื้อที่หน่วยความจำรวมทั้งสิ้นกี่ไบต์<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q10" value="5 ไบต์"> 5 ไบต์<br>
                           <input type="radio" name="q10" value="6 ไบต์"> 6 ไบต์<br>
                           <input type="radio" name="q10" value="12 ไบต์"> 12 ไบต์<br>
                           <input type="radio" name="q10" value="24 ไบต์"> 24 ไบต์<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">11. ถ้ามีการประกาศตัวแปรเป็น int i; float x; ดังนั้น ประเภทข้อมูลที่ได้จากนิพจน์ x+i จะเป็นประเภทใด<br></div>
                        <div class="exam-box">
                           <input type="radio" name="q11" value="อักขระ"> อักขระ<br>
                           <input type="radio" name="q11" value="จำนวนเต็ม"> จำนวนเต็ม<br>
                           <input type="radio" name="q11" value="สตริง"> สตริง<br>
                           <input type="radio" name="q11" value="ทศนิยม"> ทศนิยม<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">12. ข้อใดต่อไปนี้ คือคำสั่งที่ต้องใช้หยุดการทำซ้ำและออกจากลูปของโปรแกรมได้ ?<br></div>
                         <div class="exam-box">
                        <input type="radio" name="q12" value="continue"> continue<br>
                        <input type="radio" name="q12" value="break"> break<br>
                        <input type="radio" name="q12" value="while"> while<br>
                        <input type="radio" name="q12" value="for"> for<br> 
                       <p></div>><br>
<p class="dashed"></p><br>
                       <div class="exam-box">13. ข้อใดต่อไปนี้ ที่จัดลำดับความสำคัญก่อนหลังของตัวดำเนินการได้อย่างถูกต้อง ?<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q13" value="++, * หรือ / , + หรือ –"> ++, * หรือ / , + หรือ –<br>
                           <input type="radio" name="q13" value="*, /, +, -, ++ หรือ –"> *, /, +, -, ++ หรือ –<br>
                           <input type="radio" name="q13" value="++, /, +, % หรือ –"> ++, /, +, % หรือ –<br>
                           <input type="radio" name="q13" value=" /, -, % หรือ">  /, -, % หรือ<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">14. stdio.h จะพบได้ในส่วนใดของโครงสร้างโปรแกรมภาษซี ?<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q14" value="ส่วนฟังก์ชันที่กำหนดเอง"> ส่วนฟังก์ชันที่กำหนดเอง<br>
                           <input type="radio" name="q14" value="ส่วนฟังก์ชันหลัก"> ส่วนฟังก์ชันหลัก<br>
                           <input type="radio" name="q14" value="ส่วนประกาศตัวแปรส่วนกลาง"> ส่วนประกาศตัวแปรส่วนกลาง<br>
                           <input type="radio" name="q14" value="ส่วนประมวลผลก่อน"> ส่วนประมวลผลก่อน<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">15. ข้อใดต่อไปนี้คือผลของการไม่ใส่คำสั่ง break การตรวจสอบเงื่อนไขด้วย switch ?<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q15" value="โปรแกรมคอมไพล์ไม่ผ่าน"> โปรแกรมคอมไพล์ไม่ผ่าน<br>
                           <input type="radio" name="q15" value="เงื่อนไขแต่ละ case จะไม่ทำงาน"> เงื่อนไขแต่ละ case จะไม่ทำงาน<br>
                           <input type="radio" name="q15" value="จะตรวจสอบ case ที่อยู่ลำดับถัดไป"> จะตรวจสอบ case ที่อยู่ลำดับถัดไป<br>
                           <input type="radio" name="q15" value="ไม่เกิดอะไรขึ้น"> ไม่เกิดอะไรขึ้น<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">16. จากเมธอดต่อไปนี้<br></div>
                       <div class="examc-box">
                         void Sum (int x,int y)<br>
                         {<br>
                           for (int i = 1, y = 0;i <= x;i++)<br>
                               y += i;<br>
                         }<br>
                         </div><br>
                       <div class="exam-box">ข้อใดเป็นการเรียกใช้เมธอด Sum อยางถูกต้อง</p>

                           <input type="radio" name="q16" value="Sum (a,"b");"> Sum (a,"b");<br>
                           <input type="radio" name="q16" value="Sum (a,15,b);"> Sum (a,15,b);<br>
                           <input type="radio" name="q16" value="b = Sum (a,b);"> b = Sum (a,b);<br>
                           <input type="radio" name="q16" value="Sum (15, b);"> Sum (15, b);<br>
                       <p></div><br>

<p class="dashed"></p><br>
                       <div class="exam-box">17. ข้อใดมีรูปแบบการประกาศตัวแปรในภาษาซีที่ไม่ถูกต้อง<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q17" value="char  a;"> char  a;<br>
                           <input type="radio" name="q17" value="char  a = “A”;"> char  a = “A”;<br>
                           <input type="radio" name="q17" value="char[ ]  a = “PROGRAM”;"> char a[ ] = “PROGRAM”;<br>
                           <input type="radio" name="q17" value="char[7]  a = “PROGRAM”;"> char  a[7] = “PROGRAM”;<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">18. ข้อใดถูกต้องในการเขียนรูปแบบโครงสร้างของฟังก์ชันที่ไม่มีการส่งค่าไปและไม่มีการส่งค่ากลับ<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q18" value="int  function_name(type  arg, …)"> int  function_name(type  arg, …)<br>
                           <input type="radio" name="q18" value="void function_name(type arg, …)"> void function_name(type arg, …)<br>
                           <input type="radio" name="q18" value="function_name(type arg, ….)"> function_name(type arg, ….)<br>
                           <input type="radio" name="q18" value="function_name(type arg, ….)"> function_name(type arg, ….)<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">19. จากโค้ดด้านล่าง <br></div>
                        <div class="examc-box">

                               ___(1)___ Func(int a)
                               {<br>
                                  return (a / 2);<br>
                               }<br>
                         </div>
                       <div class="exam-box">
                          <br> หมายเลข 1 ควรมี Return Type เป็นอะไร<br>

                           <input type="radio" name="q19" value="int"> int<br>
                           <input type="radio" name="q19" value="double"> double<br>
                           <input type="radio" name="q19" value="void"> void<br>
                           <input type="radio" name="q19" value="public"> public<br>
                       <p></div></div><br>

<p class="dashed"></p><br>
                       <div class="exam-box">20. ให้ x และ y เป็นตัวแปรชนิด double และ p เป็นตัวแปรชนิด
                       boolean ข้อใดต่อไปนี้ถูกต้องตามหลักภาษาซี<br></div>
                       <div class="exam-box">
                           <input type="radio" name="q20" value="x + 2 = y + 3;"> x + 2 = y + 3;<br>
                           <input type="radio" name="q20" value="x = [(x / 5.0 + 2.0 / y) + x] * 4;"> x = [(x / 5.0 + 2.0 / y) + x] * 4;<br>
                           <input type="radio" name="q20" value="p = y - 5 == 2 * x;"> p = y - 5 == 2 * x;<br>
                           <input type="radio" name="q20" value="p = (x < 3.0) and (y > 4.0)"> p = (x < 3.0) and (y > 4.0)<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">21. ข้อใด  ไม่ใช่  สัญลักษณ์ของตัวดำเนินการคณิตศาสตร์<br></div>
                         <div class="exam-box">
                           <input type="radio" name="q21" value="%"> %<br>
                           <input type="radio" name="q21" value="/"> /<br>
                           <input type="radio" name="q21" value="&"> &<br>
                           <input type="radio" name="q21" value="*"> *<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box"> 22. จากโค้ดต่อไปนี้ </div>
                        <div class="examc-box">int main(){<br>
                          int i;<br>
                         for(int i=0;i<11;i++){<br>
                            if(++i%2=0)<br>
                                i++;<br>
                            else<br>
                                printf("hello");<br>
                             }<br>
                         }<br>
                         </div>
                         <div class="exam-box">
                       <br>หลังโปรแกรมทำงานเสร็จสิ้น คำว่า hello จะถูกแสดงผลกี่ครั้ง<br>

                           <input type="radio" name="q22" value="4"> 4<br>
                           <input type="radio" name="q22" value="5"> 5<br>
                           <input type="radio" name="q22" value="6"> 6<br>
                           <input type="radio" name="q22" value="7"> 7<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">23. จากโค้ดต่อไปนี้
                        <div class="examc-box">
                          int main () {<br>
                           int i = 0;<br>
                             while(1){<br>
                                if(i%2==0){<br>
                                   continue;<br>
                                }else{<br>
                                   break;<br>
                            }<br>
                                i++;<br>
                           }<br>
                           </div>
                      <div class="exam-box"><br>
                       หลังโปรแกรมทำงานเสร็จสิ้น เกิด loop การทำงานขึ้นกี่รอบ<br>

                           <input type="radio" name="q23" value="ไม่วน"> ไม่วน<br>
                           <input type="radio" name="q23" value="1ครั้ง"> 1ครั้ง<br>
                           <input type="radio" name="q23" value="1ครั้ง"> 1ครั้ง<br>
                           <input type="radio" name="q23" value="อนั้นต์"> อนั้นต์<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">24. จากโค้ดต่อไปนี้ </div>
                        <div class="examc-box">
                        int main () {<br>
                        int  i;<br>
                          i =1;<br>
                          while(i <= 10)<br>
                            {<br>
                               printf(“%d”,i);<br>
                               i =i+1;<br>
                             }<br>
                        }  <br>

                       <br></div>
                       <div class="exam-box"><br>
                       ข้อใดทำงานเหมือนกับ โค้ดตัวอย่างด้านบน<br>
                           <input type="radio" name="q24" value="int i;   for( i = 0 ; i <= 9; i++)      printf(“%d”,i+1);   }"><div class="examc-box">int i;<br>   for( i = 0 ; i <= 9; i++)<br>    printf(“%d”,i+1);   <br>}</div>
                           <input type="radio" name="q24" value="int i;   for( i = 0 ; i <= 10; i++)     printf(“%d”,i-1);   }"><div class="examc-box">int i;<br>   for( i = 0 ; i <= 10; i++)<br>    printf(“%d”,i-1);   <br>}</div>
                           <input type="radio" name="q24" value="int i;   for( i = 10 ; i >= 1; i--)     printf(“%d”,11-i);"><div class="examc-box">int i;<br>   for( i = 10 ; i >= 1; i--)<br>    printf(“%d”,11-i);<br>}</div>
                           <input type="radio" name="q24" value="int i;   for( i = 1 ; i <= 9; i++)    printf(“%d”,i+1);"><div class="examc-box">int i;<br>   for( i = 1 ; i <= 9; i++)<br>    printf(“%d”,i+1);<br>}</div><br>
                       </div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">25.<br>

                       <div class="examc-box">

                         int main(){<br><br>
                           int n = 6;<br>
                        int i,y,z,x ;<br><br>
                         if(n < 0)<br>
                            y = 0<br>
                        else<br>
                            {<br>
                                x = 0; y = 1;<br>
                                for( i = 1; i < n-1; i++) {<br>
                                  
                                       z = x+y;<br>
                                      x = y;<br>
                                      y =z;<br>
                            }<br>
                            }<br>
                          </div>
                            <div class="exam-box">
                             <br>เมื่อโปรแกรมทำงานเสร็จสิ้น ผลลัพธ์ที่ได้จากการทำงานตรงกับข้อใด<br>
                           <input type="radio" name="q25" value="3"> 3<br>
                           <input type="radio" name="q25" value="5"> 5<br>
                           <input type="radio" name="q25" value="8"> 8<br>
                           <input type="radio" name="q25" value="ไม่มีข้อใดถูก"> ไม่มีข้อใดถูก<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">26. จากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">
                        int main () {<br>
                        a = 414; b = 662;<br>
                        x = a;<br>
                        int y = b;<br>
                        int r;<br>
                        while(y  !< 0){<br>
                                r = x % y ;<br>
                                x = y;<br>
                                y = r;<br>
                            }<br>
                        }<br>
                        </div>


                       <div class="exam-box">
                       <br>หลังจากโปรแกรมคำนวณเสร็จสิ้น ค่าของ x มีค่าเท่ากับเท่าไร<br>
                           <input type="radio" name="q26" value="414"> 414<br>
                           <input type="radio" name="q26" value="662"> 662<br>
                           <input type="radio" name="q26" value="2"> 2<br>
                           <input type="radio" name="q26" value="ไม่มีคำตอบ"> ไม่มีคำตอบ<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">27. จากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">
                       int main () {<br>
                         int a,n = 5,m = 8,p,k,x;<br>
                       if (n < 0)<br>
                             a = -n;<br>
                        else<br>
                        {<br>
                            a = n;<br>
                            k = 0;<br>
                            x = 0;<br>
                        }<br>
                        while(k < a)<br>
                           {<br>
                              x = x+m ;<br>
                              k = k+1 ;<br>
                           }<br>
                          if (n < 0)<br>
                              p = -x;<br>
                          else<br>
                              p = x;<br>
                            }<br>
                            </div>


                       <div class="exam-box"><br>
                       ถ้า m = 8, n = 5 แล้ว ค่าผลลัพธ์สุดท้ายของค่า P มีค่าเท่าใด<br>
                           <input type="radio" name="q27" value="40"> 40<br>
                           <input type="radio" name="q27" value="-40"> -40<br>
                           <input type="radio" name="q27" value="13"> 13<br>
                           <input type="radio" name="q27" value="ไม่มีข้อถูก"> ไม่มีข้อถูก<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">28. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">
                         int main () {<br>
                        float  sum, i,j ;<br>
                       sum =0.0;<br>
                       j =1.0;<br>
                       i =2.0;<br>
                       while(i/j > 0.001)<br>
                                 {<br>
                           j = j+j;<br>
                           sum=sum+i/j;<br>
                           printf(“%f”,sum);<br>
                          }<br>
                        }<br>
                       </div>
                       <div class="exam-box"><br>
                       หลังจากโปรแกรมทำงานเสร็จสิ้น ค่าสุดท้ายจากการทำงาน ใกล้เคียงกับค่าคำตอบในข้อใด<br>
                           <input type="radio" name="q28" value="1"> 1<br>
                           <input type="radio" name="q28" value="2"> 2<br>
                           <input type="radio" name="q28" value="3"> 3<br>
                           <input type="radio" name="q28" value="4"> 4<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">29. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                        <div class="examc-box">
                        int main () {<br>
                        i =1;<br>
                          f =1;<br>
                          while( i < n)<br>
                          {<br>
                              i = i+1;<br>
                              f = f * i;<br>
                          }<br>
                             </div>
                             <div class="exam-box">
                             <br>ถ้า  n = 6 แล้ว  ค่าผลลัพธ์สุดท้ายของ  f   มีค่าเท่าใด<br>
                           <input type="radio" name="q29" value="30"> 30<br>
                           <input type="radio" name="q29" value="720"> 720<br>
                           <input type="radio" name="q29" value="120"> 120<br>
                           <input type="radio" name="q29" value="ไม่มีข้อใดถูก"> ไม่มีข้อใดถูก<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">30. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">
                        int main () {<br>
                        int  m = 0,n = 6,a,k,x;<br>
                        int question;<br>
                       if (n<0)<br>
                          a = n;<br>
                       else<br>
                          a = n;<br>
                          k = 0;<br>
                          x = 0;<br>
                        while(k < a)<br>
                           {<br>
                            x = x+m;<br>
                            k = k+1;<br>
                         }<br>
                        if (n < 0)<br>
                            question = -x<br>
                        else<br>
                            question  =  x<br>
                            printf("%d",question);<br>
                        }

                      </div>
                       <div class="exam-box">
                        <br>เมื่อ ค่า m = 0;  n = 6; แล้วเมื่อจบการทำงานของโปรแกรมแล้วค่าของ question มีค่าเท่าใด<br>
                           <input type="radio" name="q30" value="0"> 0<br>
                           <input type="radio" name="q30" value="12"> 12<br>
                           <input type="radio" name="q30" value="7"> 7<br>
                           <input type="radio" name="q30" value="ไม่มีข้อใดถูก"> ไม่มีข้อใดถูก<br>
                       <p></div></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">31. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                        <div class="examc-box">
                          int main () {<br>
                        double x = 3,y;<br>
                        if (x >=0)<br>
                         {<br>
                            if(x<10)<br>
                               {<br>
                                y = x*x;<br>
                                if(x<=5)<br>
                                   x = y/2;<br>
                                else<br>
                                   y = 5*x;<br>
                            }else{<br>
                                    y = x*x*x;<br>
                                printf(“%5.2f”,y);}<br>
                         }<br> 
                }<br>
                       </div>
                       <div class="exam-box">
                       <br>ค่า y ที่แสดงคือข้อใด<br>
                           <input type="radio" name="q31" value="3.0"> 3.0<br>
                           <input type="radio" name="q31" value="3.00"> 3.00<br>
                           <input type="radio" name="q31" value="9.00"> 9.00<br>
                           <input type="radio" name="q31" value="9.0"> 9.0<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">32. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">
int main () {<br>
int x,y;<br>
                        if( (x<=200)  ||  (y >=200) )<br>
                          if( (x<=100) && (y <= 100) )<br>
                            if ( (x<=50) && (y >= 50) )<br>
                              printf(“A”);}<br>
                            else<br>
                              printf(“B”);<br>
                          else<br>
                            printf(“C”);<br>
                        else{<br>
                          printf(“D”);<br>
}<br>
                      </div>

                           <div class="exam-box"><br> 
                           จากส่วนของโปรแกรม  ค่า  x และ  y  ในข้อใดที่ทำให้ผลลัพธ์พิมพ์  B  ออกมา<br>
                           <input type="radio" name="q32" value="x = 50       y=100"> x = 50       y=100<br>
                           <input type="radio" name="q32" value="x = 75     y=50"> x = 75     y=50<br>
                           <input type="radio" name="q32" value="x = 200     y=100"> x = 200     y=100<br>
                           <input type="radio" name="q32" value="x = 50     y=75"> x = 50     y=75<br>
                       <p></div><br>

<p class="dashed"></p><br>
                       <div class="exam-box">33. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                        <div class="examc-box">


                               float Average(int a, int b) {<br>
                                      return (float) (a + b) / 2;<br>
                               }<br>
                               void main() {<br>
                                   int num1;<br>
                                   int num2;<br>
                                   float ans;<br>
                                      printf("Enter first number : ");<br>
                                     scanf("%d", &num1);<br>
                                      printf("Enter second number : ");<br>
                                     scanf("%d", &num2);<br>
                                   ans = Average(num1, num2);<br>
                                      printf("Average = %f\n", ans);<br>
                               }<br></div>
                               <div class="exam-box"><br>
                                เมื่อทดลองใส่ เลข 5 และ 8 ลงในโปรแกรมด้านล่าง ค่าที่ได้จะเป็นเท่าไหร่<br>
                           <input type="radio" name="q33" value="6.5"> 6.5<br>
                           <input type="radio" name="q33" value="6.50"> 6.50<br>
                           <input type="radio" name="q33" value="6.5000"> 6.5000<br>
                           <input type="radio" name="q33" value="6.500000"> 6.500000<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">34. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">

                       int main() {<br>
                           int num;<br>
                             printf("Enter number : ");<br>
                             scanf("%d", &num);<br>
                           int l3 = (num % 8) / 4;<br>
                           int l2 = (num % 4) / 2;<br>
                           int l1 = num % 2;<br>
                             printf("%d%d%d\n", l3, l2, l1);<br>
                       }<br></div>
                       <div class="exam-box">
                            <br>จากโค้ดด้านบน เป็นโปรแกรม แปลงเลขฐาน 10 เป็นเลขฐานสอง
                       ถ้าใส่เลข 8 ในโปรแกรม เมื่อรันเสร็จ ผลลัพธ์ จะเป็นเช่นไร<br>
                           <input type="radio" name="q34" value="1000"> 1000<br>
                           <input type="radio" name="q34" value="01000"> 01000<br>
                           <input type="radio" name="q34" value="000"> 000<br>
                           <input type="radio" name="q34" value="0000"> 0000<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">35. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">


                       int isNum(int num) {<br>
                           int flag = 0;<br>
                           int i;<br>
                           for (i = 2; i <= num / 2; ++i) {<br>
                                 if (num % i == 0) {<br>
                                     flag = 1;<br>
                                     break;<br>
                                 }<br>
                           }<br>
                           return flag;<br>
                       }<br>
                       int main() {<br>
                           int n1, n2, i, flag;<br>
                             printf("Enter two numbers (intervals): ");<br>
                             scanf("%d %d", &n1, &n2);<br>
                             printf("Answer is: ", n1, n2);<br>
                           for (i = n1 + 1; i < n2; ++i) {<br>
                                flag = isNum(i);<br>
                               if (flag == 0)<br>
                                    printf("%d ", i);<br>
                           }<br>
                             printf("\n");<br>
                       }<br>

                      </div>
                       <div class="exam-box">
                       <br>จากโปรแกรมด้านบน เมื่อใส่ เลข 25 30  ผลลัพธ์หลังจากโปรแกรมทำงานเสร็จสิ้นแล้ว จะได้ค่าใดออกมา<br>
                           <input type="radio" name="q35" value="25"> 25<br>
                           <input type="radio" name="q35" value="26"> 26<br>
                           <input type="radio" name="q35" value="29"> 29<br>
                           <input type="radio" name="q35" value="30"> 30<br>
                       <p></div></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">36. จงตอบคำถามจากโค้ดต่อไปนี้  </div>
                       <div class="examc-box">


                       int factorial(int i) {<br>
                             if (i <= 1) {                                               (1)<br>
                                 return 1;<br>
                           }<br>
                             return i * factorial(i - 2);                                (2)<br>
                       }<br>
                       int main() {<br>
                           int n;<br>
                              printf("Enter number : ");<br>
                              scanf("%d", &n);                                            (3)<br>
                              printf("Factorial of %d is %d\n", n, factorial(n));         (4)<br>
                       }<br></div>
                       <div class="exam-box">
                    <br>โปรแกรมด้านบนเป็นโปรแกรม หา Factorial แต่โค้ดนี้ยังมีส่วนที่ผิดอยู่<br>
                                           ต้องแก้ไขบรรทัดใด โปรแกรมถึงจะทำงานถูกต้อง<br>
                           <input type="radio" name="q36" value="1"> 1<br>
                           <input type="radio" name="q36" value="2"> 2<br>
                           <input type="radio" name="q36" value="3"> 3<br>
                           <input type="radio" name="q36" value="4"> 4<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">37. จงตอบคำถามจากโค้ดต่อไปนี้   </div>
                        <div class="examc-box">


                       int main()<br>
                       {<br>
                           int loop = 9;<br>
                           int i;<br>
                           int j;<br>
                           int sloop;<br>

                           for(i = 1; i <= loop; i++){<br>

                                 sloop = loop-i;<br>

                               for(j = 1; j <= sloop; j++ ){<br>
                                     printf(" ");<br>
                               }<br>
                                 printf("%d", i);<br>

                               if(i == 1){<br>
                                     printf("\n");<br>
                                     continue;<br>
                               }<br>

                                 sloop = (i*2)-1;<br>

                               for(j = 2; j < sloop; j++ ){<br>
                                     printf(" ");<br>
                               }<br>

                                 printf("%d\n", i);<br>
                           }<br>

                             return 0;<br>
                       }<br></div>
                       <div class="exam-box"><br>
                       จากโปรแกรมด้านล่าง เมื่อทำงานเสร็จสิ้น จะได้ผลลัพธ์เป็นรูป ดังข้อใด<br>
                           <input type="radio" name="q37" value="^"> ^<br>
                           <input type="radio" name="q37" value="<"> <<br>
                           <input type="radio" name="q37" value=">"> ><br>
                           <input type="radio" name="q37" value="/\"> /\<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box">38. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                        <div class="examc-box">




                       int main()<br>
                       {<br>
                           int loop;<br>
                           int input;<br>
                           int i;<br>
                           int max;<br>

                             printf(" Count : ");<br>
                             scanf("%d", &loop);<br>
                             printf("\n");<br>

                           for(i = 0; i < loop; i++)<br>
                            {<br>
                                 printf("Enter Number #%d : ", i+1);<br>
                                 scanf("%d", &input);<br>

                                 if(i==0 || input > max)<br>
                                {<br>
                                     max = input;<br>
                                }<br>
                            }<br>

                             printf("\n Maximum is %d\n\n", max);<br>

                           return 0;<br>
                       }<br></div>
                       <div class="exam-box"><br>
                       จากโปรแกรมด้านบน หากใส่ค่า 5 แล้วตามด้วย 155 16 128 729 เข้าไป ผลลัพธ์ที่ได้จะเป็นค่าใด<br>
                           <input type="radio" name="q38" value="155"> 155<br>
                           <input type="radio" name="q38" value="16"> 16<br>
                           <input type="radio" name="q38" value="128"> 128<br>
                           <input type="radio" name="q38" value="729"> 729<br>
                       <p></div><br>

<p class="dashed"></p><br>
                       <div class="exam-box">
                       39. ถ้าหาก x มีค่าเท่ากับ 23.1234 และมีการทำคำสั่งต่อไปนี้ printf("%1.2f",x); ผลลัพธ์ที่ได้จะเท่ากับข้อใด<br></div>
                       <div class="exam-box">
                           <input type="radio" name="q39" value="2.31234"> 2.31234<br>
                           <input type="radio" name="q39" value="23.1234"> 23.1234<br>
                           <input type="radio" name="q39" value="23.12"> 23.12<br>
                           <input type="radio" name="q39" value="2.31"> 2.31<br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="exam-box"> 40. จงตอบคำถามจากโค้ดต่อไปนี้ </div>
                       <div class="examc-box">


                       int main()<br>
                       {<br>
                           int a = 10, b= 5 , c= 20;<br>
                            c = (a--) - (++b);<br>
                             printf("%d %d %d\n" ,a,b,c);<br>
                            c = (++a) + (--b);<br>
                             printf("%d %d %d\n" ,a,b,c);<br>
                           c = ++b;<br>
                           c = c-b++;<br>
                           b = c + --a;<br>
                           c = c - ++b;<br>
                             printf("%d %d %d\n" ,a,b,c);<br>
                       }<br>

                       </div>
                       <div class="exam-box">
                       จากผลลัพธ์ของโปรแกรมด้านบน ผลลัพธ์ออกมาดังข้อใด<br><br>
                           <input type="radio" name="q40" value="9 6 4  10 5 15 9 15 10"> 9 6 4<br>        10 5 15 <br>      9 15 10<br><br>
                           <input type="radio" name="q40" value="9 3 4  15 5 15 9 10 -10"> 9 3 4<br>        15 5 15<br>       9 10 -10<br><br>
                           <input type="radio" name="q40" value="9 6 4  10 5 15 9 10 -10"> 9 6 4<br>        10 5 15<br>       9 10 -10<br><br>
                           <input type="radio" name="q40" value="9 3 4  15 5 15 9 10 -10"> 9 3 4<br>        15 5 15 <br>      9 10 -10<br><br>
                       <p></div><br>
<p class="dashed"></p><br>
                       <div class="content">
                       <input type="button" value="ดูผลคะแนน" onClick="getScore(this.form)">
                       <input type="reset" value="ยกเลิก"><br><br>
                       ผลคะแนน = <input type=text size=15 name="percentage"><br><br>
                       เฉลยคำตอบ:<br></div>

                       <textarea name="solutions" wrap="virtual" rows="4" cols="80"></textarea>
                       </form>
<br><br><br><br><br>

                       <!-- STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP  -->
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
