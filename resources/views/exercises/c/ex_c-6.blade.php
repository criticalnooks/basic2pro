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
                           
                            <a href="/exercisesc-6"><span class="font-head"> Loop</span> </a>

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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="font-content2">► โปรแกรมหาผลรวมเฉพาะเลขคู่</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                         <div class="ex-box">   แก้ไขโปรแกรมจากโค๊ดที่กำหนดให้ด้านล่าง ให้โปรแกรมทําการคํานวณหาผลรวมเฉพาะเลขคู่ที่ถูกป้อนเข้า มาเท่านั้น และตัวเลขติดลบตัวสุดท้ายต้องไม่ถูกนําไปคํานวณ </div>
                                                         <div class="ex-codebox">  
                                                            #include&ltstdio.h&gt<br>
                                                            int main() {   <br>
                                                                int N = 0,sum; <br>
                                                                __________;  <br>
                                                                while (N >= 0) { <br>
                                                                    printf("Please input N: ");  <br> 
                                                                    scanf("%d",&N);     <br>
                                                                    __________________________  <br>
                                                                    __________________________  <br>
                                                                    __________________________  <br>
                                                                    __________________________  <br>

                                                                }  <br>
                                                                __________________________;  <br>
                                                                printf("Bye Bye!!!\n");  <br>
                                                            }
                                                            </div><br> 
                                                            <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่างการทํางาน</span></div><br>
                                                            <div class="ex-codebox"> 
                                                                Please input N: 4 <br>
                                                                Please input N: 2 <br>
                                                                Please input N: 599 <br>
                                                                Please input N: 1024 <br>
                                                                Please input N: -1 <br>
                                                                Sum even = 1030 <br>
                                                                Bye Bye!!! <br>
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
                                                        <span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span>  สร้างเงื่อนไข ที่ทำให้โปรแกรม บวกเฉพาะเลขคู่  <br><br>
                                                          <div style="text-align:center"> <a href="http://www.mx7.com/view2/zuQRgzha34fcZdBL" target="_blank"><img border="0" src="http://www.mx7.com/i/c9a/r5TGLd.JPG" /></a></div>
                                                        <br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span>  สร้างเงื่อนไขที่ให้หยุดรับค่า เมื่อ N ที่รับมา ติดลบ  <br><br>
                                                        <div style="text-align:center"><a href="http://www.mx7.com/view2/zuQTsH72W2ey26W9" target="_blank"><img border="0" src="http://www.mx7.com/i/bfb/zHZiZN.JPG" /></a></div>
                                                         <br><span style="text-decoration:underline; font-weight:bold">ขั้นสาม</span> หลังจาก break การทำงานภายใน Loop แล้ว ทำการ print ค่า sum ออกไป <br><br>
                                                         <div style="text-align:center"><a href="http://www.mx7.com/view2/zuQUBARrEgTIkHVk" target="_blank"><img border="0" src="http://www.mx7.com/i/95e/rdYsKW.JPG" /></a></div>
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
                                                       #include&ltstdio.h&gt <br>
                                                        int main() { <br>
                                                            int N = 0,sum; <br>
                                                            sum = 0;<br>
                                                            while (N >= 0) { <br>
                                                                printf("Please input N: "); <br>
                                                                scanf("%d",&N); <br>
                                                                if( N < 0)    <br>
                                                                    break;<br>
                                                                if(N%2==0)<br>
                                                                    sum = sum+N;    <br>    
                                                            } <br>
                                                            printf("Sum even = %d\n",sum);<br>
                                                            printf("Bye Bye!!!\n");<br> 
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3"><span class="font-content2">► ผึกเขียนโปรแกรมแสนสนุก #1</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                         <div class="ex-box"> จงเขียนโปรแกรมที่รับคะแนนสอบของนักเรียน โดยจะหยุดรับคะแนนสอบเมื่อผู้ใช้พิมพ์คะแนนที่มีค่าเป็น -1 จากนั้นให้โปรแกรมแสดง จำนวนนักเรียนทั้งหมด คะแนนเฉลี่ย คะแนนสูงสุดและตํ่าสุด โดยใช้ทศนิยมสองตําแหน่งเช่นกัน   </div><br>
                                                            <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>
                                                            <div class="ex-codebox"> 
                                                                Score of student1, or -1 to quit: 76 <br>
                                                                Score of student2, or -1 to quit: 56.7 <br>
                                                                Score of student3, or -1 to quit: 87.4 <br>
                                                                Score of student4, or -1 to quit: 53.5 <br>
                                                                Score of student5, or -1 to quit: 90.8 <br>
                                                                Score of student6, or -1 to quit: 99 <br>
                                                                Score of student7, or -1 to quit: -1 <br>
                                                                Number of students is 6 <br>
                                                                Average score is 77.23 <br>
                                                                Min score is 53.50 <br>
                                                                Max score is 99.00 <br>
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
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์ก่อน</span><br>
                                                        <div style="text-align:center"> <a href="http://www.mx7.com/view2/zuRiZwc92UgeTceO" target="_blank"><img border="0" src="http://www.mx7.com/i/17a/DxeyEf.JPG" /></a></div>
                                                         <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> ทำการกำหนดตัวแปรที่จำเป็น และสร้าง Loop รับค่า Score<br><br>
                                                        <div style="text-align:center"><a href="http://www.mx7.com/view2/zuRorHULz7VPyaDf" target="_blank"><img border="0" src="http://www.mx7.com/i/965/TvcaqZ.JPG" /></a></div>
                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> ทำเงื่อนไขการออก Loop , บวกค่า sum ใน Loop และแสดงจำนวนนักเรียนทั้งหมดและค่าเฉลี่ยของคะแนน<br><br>
                                                        <div style="text-align:center"><a href="http://www.mx7.com/view2/zuRsSrrjkiSAyFOS" target="_blank"><img border="0" src="http://www.mx7.com/i/de6/2aszGP.JPG" /></a></div>
                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสาม</span>  ทำการหาค่า min/max และแสดงผลค่า min/max ออกมา<br><br>
                                                        <div style="text-align:center"><a href="http://www.mx7.com/view2/zuRzkjsBbGkjxF6K" target="_blank"><img border="0" src="http://www.mx7.com/i/10a/EfjnoN.JPG" /></a></div>
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
                                                        int main(){<br>
                                                            float score=0 , sum = 0, min , max ;<br>
                                                            int count = 1;<br>
                                                            while(score!= -1){<br>
                                                                printf("Score of student%d, or -1 to quit: ",count);<br>
                                                                scanf("%f",&score);<br>
                                                                if( score == -1 ) {<br>
                                                                    break;<br>
                                                                }<br>
                                                                if(count == 1) {<br>
                                                                    min = score;<br>
                                                                    max = score;<br>
                                                                }<br>
                                                                else {<br>
                                                                    if(score > max)<br>
                                                                        max = score;<br>
                                                                    if(score < min)<br>
                                                                        min = score;<br>
                                                                }<br>
                                                                sum = sum + score;<br>
                                                                count = count +1;  <br> 
                                                            }<br>
                                                            printf("Number of student is %d\n",count-1);<br>
                                                            printf("Average score is %.2f\n",sum/(count-1));<br>
                                                            printf("Min score is %.2f\n",min);<br>
                                                            printf("Max score is %.2f",max);<br>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4"><span class="font-content2">► หารร่วมมาก </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box"> จงเขียนโปรแกรมที่รับค่า input เป็นเลขจํานวนเต็มสองจํานวน โดยโปรแกรมจะคํานวณหาค่าของ ห.ร.ม. ของ ตัวเลขสองจํานวนนี้ ดังตัวอย่าง </div><br>
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>
                                                        <div class="ex-codebox">  
                                                            Input A = 15 <br>
                                                            Input B = 25 <br>
                                                            Output : 5  <br>
                                                        </div><br> <br>   
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Input A = 1024 <br>
                                                                Input B = 3584 <br>
                                                                Output : 512<br>
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
                                                         <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์ก่อน</span><br>
                                                         <div class="ex-codebox">ห.ร.ม ของ A และ B คือ เลขที่มากที่สุดที่สามารถหารทั้ง A และ B ลงตัว <br>
                                                                      หมายความว่า เราต้องไล่ลำดับเลขตั้งแต่เลข 1 เป็นต้นไป แล้วลองนำไปหารทั้ง A และ B หากไล่ลำดับเลข ( ตัวหาร ) ไปจนถึงค่าของ A หรือ B แล้วยังไม่มีเลขตัวใดมาหารลงตัว หมายความว่าเลขนั้นคือ ห.ร.ม ของ A และ B<br>
                                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง 15 และ 25</span>  วิธีการคือ<br>
                                                                    เราเริ่มนำเลข 1 ไปหารทั้ง A และ B ปรากฏว่าหารลงตัว ( 15%1 == 0 และ 25%1 ==0 )<br>
                                                                ดังนั้นขณะนี้ ห.ร.ม คือ 1 <br>
                                                                    จากนั้นเราเพิ่มค่าตัวหาร เป็น 2 ( 15%2==1 และ 25%2==1 ) ซึ่งไม่ลงตัว <br>
                                                                ดังนั้นขณะนี้ ห.ร.ม ยังคงเป็น 1 เหมือนเดิม<br>
                                                                    เราทำการเพิ่มค่าไปจนเจอ ห.ร.ม ตัวใหม่ซึ่งก็คือเลข 5 (15%5 == 0 และ 25%5 == 0)<br>
                                                                ดังนั้นขณะนี้ ห.ร.ม ตัวใหม่ คือ 5<br>
                                                                    พบว่าหากเราเพิ่มตัวหารไปจนถึงเลข 15 หรือ 25 แล้วก็ยังไม่มีตัวหารร่วมตัวใหม่ <br>
                                                                ดังนั้น ห.ร.ม ของ 15 และ 25 คือ เลข 5 นั่นเอง<br>
                                                         
                                                                <span style="text-decoration:underline; font-weight:bold">หมายเหตุ</span> : ถ้า A < B เราควรเพิ่มตัวหารไปจนถึงค่า A ก็เพียงพอ เพราะ ค่าที่เกินค่า A จะหารตัว A ไม่ลงตัวแล้ว เป็นการทำให้โปรแกรมมีประสิทธิภาพขึ้น<br>
                                                            </div>    
                                                         
                                                                 <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้และ ทำการรับค่า input <br><br>
                                                                 <div style="text-align:center"><a href="https://www.mx7.com/view2/zuSrdN543sIo8aIc" target="_blank"><img border="0" src="https://www.mx7.com/i/bb6/wTlF2g.JPG" /></a></div>
                                                                <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> หาว่าตัวแปร A กับ B ตัวไหนมีค่ามากกว่ากัน และ สร้าง Loop มาหาค่า หารร่วมมาก ของ A และ B <br><br>
                                                                <div style="text-align:center"> <a href="https://www.mx7.com/view2/zuSwlM0OpyZS0MDT" target="_blank"><img border="0" src="https://www.mx7.com/i/15d/CiH03n.JPG" /></a></div>
                                                         
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
                                                        int main(){<br>
                                                            int a,b,i,gcd = 0;<br>
                                                            printf("Input A = ");<br>
                                                            scanf("%d",&a);<br>
                                                            printf("Input B = ");<br>
                                                            scanf("%d",&b);<br>
                                                            if(a>b){<br>
                                                                int min = b;<br>
                                                                b = a;<br>
                                                                a = min;<br>
                                                            }<br>
                                                            for(i=1;i<=a;i++){<br>
                                                                if(a%i == 0 and b%i == 0){<br>
                                                                    gcd = i;<br>
                                                                }<br>
                                                            }<br>
                                                            printf("Output : %d",gcd);<br>
                                                        }

                                                    </div>
                                                    <br><span style="text-decoration:underline; font-weight:bold">โปรแกรมสามารถเขียนได้ด้วย Loop while เช่นกันดังนี้</span><br><br>
                                                    <div class="ex-codebox"> 
                                                    #include&ltstdio.h&gt<br>
                                                    int main(){<br>
                                                        int a,b,i,gcd = 0;<br>
                                                        printf("Input A = ");<br>
                                                        scanf("%d",&a);<br>
                                                        printf("Input B = ");<br>
                                                        scanf("%d",&b);<br>
                                                        if(a>b){<br>
                                                            int min = b;<br>
                                                            b = a;<br>
                                                            a = min;<br>
                                                        }<br>
                                                        i = 1;<br>
                                                        while(i < a) {<br>
                                                            if(a%i == 0 and b%i == 0){<br>
                                                                gcd = i;<br>
                                                            }<br>
                                                            i=i+1;<br>
                                                        }<br>
                                                        printf("Output : %d",gcd);<br>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5"><span class="font-content2">► จํานวนเฉพาะ (Prime Number)  </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne5" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box"> ให้ทําการเขียนโปรแกรมเพื่อรับจํานวนเต็มบวก N และตรวจสอบว่า N เป็นจํานวนเฉพาะหรือไม่  </div><br>
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>
                                                        <div class="ex-codebox">  
                                                            Enter N: 10  <br>
                                                            10 is not a prime.<br>
                                                        </div><br> <br>   
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Enter N: 19 <br>
                                                                19 is a prime. <br>
                                                            </div>
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Enter N: 1 <br>
                                                                1 is not a prime. <br>
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
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์ก่อน</span><br>
                                                        <div class="ex-codebox"> 
                                                            จำนวนเฉพาะ คือ จำนวนที่มีแค่เลข 1 และตัวมันเองเท่านั้นที่หารลงตัว <br>
                                                                ดังนั้น วิธีการจะคล้ายกับการหา ห.ร.ม คือ เราต้องไล่ลำดับตัวเลขตั้งแต่เลข 1 แล้วลองนำไปหาร<br>
                                                            หากไล่ลำดับเลขไปจนถึงจำนวนนั้นแล้ว มีแค่ 2 ตัวที่หารลงตัว คือ 1 กับ ตัวมันเอง ดังนั้นจำนวนนั้นเป็นจำนวนเฉพาะ
                                                        </div>
                                                         <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้และ ทำการรับค่า input <br><br>
                                                                <div style="text-align:center"><a href="https://www.mx7.com/view2/zuSE1vu2WZBmbFJ8" target="_blank"><img border="0" src="https://www.mx7.com/i/b68/MkZxlN.JPG" /></a> </div>

                                                                 <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> สร้าง Loop ที่ไว้ใช้สำหรับหาว่า a เป็นจำนวนเฉพาะหรือไม่ <br><br>
                                                                <div style="text-align:center"><a href="https://www.mx7.com/view2/zuSG43TwbpZNnD8w" target="_blank"><img border="0" src="https://www.mx7.com/i/cbc/DTaoXY.JPG" /></a></div>
                                                               
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
                                                    int main(){<br>
                                                        int a,i,count = 0;<br>
                                                        printf("Enter N : ");<br>
                                                        scanf("%d",&a);<br>
                                                        for(i=1;i<=a;i++){<br>
                                                            if(a%i == 0 ) {<br>
                                                                count = count + 1; <br> 
                                                            }<br>
                                                        }<br>
                                                        if(count == 2 ){<br>
                                                            printf("%d is a prime.",a);<br>
                                                        }<br>
                                                        else {<br>
                                                            printf("%d is not a prime.",a);<br>
                                                        }<br>
                                                    }

                                                    </div>
                                                     <br><span style="text-decoration:underline; font-weight:bold">โปรแกรมสามารถเขียนได้ด้วย Loop while เช่นกันดังนี้</span><br><br>
                                                    <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int a,i,count = 0;<br>
                                                            printf("Enter N : ");<br>
                                                            scanf("%d",&a);<br>
                                                            i = 1;<br>
                                                            while(i<=a) {<br>
                                                                if(a%i == 0 ) {<br>
                                                                    count = count + 1;  <br>
                                                                }<br>
                                                                i = i+1;<br>
                                                            }<br>
                                                            if(count == 2 ){<br>
                                                                printf("%d is a prime.",a);<br>
                                                            }<br>
                                                            else {<br>
                                                                printf("%d is not a prime.",a);<br>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne6"><span class="font-content2">► โปรแกรมผลบวกของตัวประกอบ  </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne6" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box">  จงเขียนโปรแกรมที่คำนวณผลบวกของตัวประกอบของ N </div><br>
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>
                                                        <div class="ex-codebox">  
                                                            Please input N : 12 <br>
                                                            Factor of n : 1 2 3 4 6 12 <br>
                                                            Sumation of factor is 28. <br>
                                                        </div><br> <br>   
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>   
                                                            <div class="ex-codebox"> 
                                                                Please input N : 50 <br>
                                                                Factor of n : 1 2 5 10 25 50 <br>
                                                                Sumation of factor is 93.<br>
                                                            </div>
                                                       

                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo6"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo6" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์ก่อน</span><br>
                                                        <div class="ex-codebox"> 
                                                        <span style="text-decoration:underline; font-weight:bold">ตัวประกอบทั้งหมดของ N</span> คือจำนวนทั้งหมด ตั้งแต่ 1 ถึง N ที่หารด้วย N ลงตัว<br>
                                                            วิธีทำก็ไม่ต่างจาก การหา ห.ร.ม และ การหาจำนวนเฉพาะมาก นั่นคือ เราต้องไล่ลำดับตัวเลขตั้งแต่เลข 1 จนถึงค่า N แล้วลองนำแต่ละตัวไปหารตัวด้วย N ดู<br>
                                                            หากจำนวนไหนหารด้วยค่า N ลงตัว จำนวนนั้นก็จะเป็นตัวประกอบของ N  จากนั้น ทำการ print ตัวประกอบนั้นออกมา พร้อมกับบวกค่าตัวประกอบนั้นไปใน ค่า sum ที่สร้างขึ้นก็ได้<br><br>
                                                            <div style="text-align:center"> <a href="https://www.mx7.com/view2/zuSV00mSQZbqjTag" target="_blank"><img border="0" src="https://www.mx7.com/i/cdf/nAb10I.JPG" /></a></div>

                                                        </div>
                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้และ ทำการรับค่า input <br><br>                                      
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuSYcau7mI7dt7FH" target="_blank"><img border="0" src="https://www.mx7.com/i/ba1/25hDbG.JPG" /></a></div>

                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้าง loop for สำหรับหาตัวประกอบของ n และผลรวมของตัวประกอบ<br><br>                                      
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuT1gT31VhteFjBV" target="_blank"><img border="0" src="https://www.mx7.com/i/17d/zwfj7d.JPG" /></a></div>
                                                        
                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree6"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                    <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int n,i,sum = 0;<br>
                                                            printf("Please input N : ");<br>
                                                            scanf("%d",&n);<br>
                                                            printf("Factor of n : ");<br>
                                                            for(i=1;i<=n;i++){<br>
                                                                if(n%i == 0 ) {<br>
                                                                    sum = sum + i;<br>
                                                                    printf("%d ",i);<br>
                                                                }<br>
                                                            }<br>
                                                            printf("\nSumation of factor is %d.",sum);<br>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne7"><span class="font-content2">► โปรแกรมผลบวกของตัวประกอบ V2  </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne7" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                        <div class="ex-box">จากโจทย์โปรแกรมผลบวกของตัวประกอบ หากต้องการให้โปรแกรมรับ input N พร้อมทั้งแสดงผลไปเรื่อย ๆ จนกว่าค่า N ที่ ได้รับจากผู้ใช้จะเป็นเลข -1 จะต้องเขียนโปรแกรมเป็นเช่นไร  </div><br>
                                                        <div class="ex-box"><span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span></div><br>
                                                        <div class="ex-codebox">  
                                                            Please input N : 12 <br>
                                                            Factor of n : 1 2 3 4 6 12 <br>
                                                            Sumation of factor is 28. <br><br>
                                                                
                                                            Please input N : 6 <br>
                                                            Factor of n : 1 2 3 6 <br>
                                                            Sumation of factor is 12.<br> <br>
                                                             
                                                            Please input N : 15 <br>
                                                            Factor of n : 1 3 5 15 <br>
                                                            Sumation of factor is 24.<br><br> 
                                                             
                                                            Please input N : -1 <br><br>
                                                            Program End.<br>
                                                        </div> 
                                                
                                                        

                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo7"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo7" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="content">
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์ก่อน</span><br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuT58SEJTyDQy7o9" target="_blank"><img border="0" src="https://www.mx7.com/i/15c/cbj3tK.JPG" /></a></div>
                                                        
                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้าง Loop while ครอบทับโปรแกรมเก่าของเรา <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuT8LDb7FSNOyMLK" target="_blank"><img border="0" src="https://www.mx7.com/i/b68/1THQeu.JPG" /></a></div>

                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> ปรับเปลี่ยนตัวแปรบางส่วน และ สร้างเงื่อนไขการออกจากโปรแกรม <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuTcPk5l0hGbVHYw" target="_blank"><img border="0" src="https://www.mx7.com/i/b40/BpBGd5.JPG" /></a></div>

                                                    </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree7"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree7" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                    <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int n,i,sum = 0;<br>
                                                            n = 0;<br>
                                                            while(n!=-1) {<br>
                                                                printf("Please input N : ");<br>
                                                                scanf("%d",&n);<br>
                                                                if(n == -1){<br>
                                                                    printf("Program End.");<br>
                                                                    break;<br>
                                                                }<br>
                                                                printf("Factor of n : ");<br>
                                                                for(i=1;i<=n;i++){<br>
                                                                    if(n%i == 0 ) {<br>
                                                                        sum = sum + i;<br>
                                                                        printf("%d ",i);<br>
                                                                    }<br>
                                                                }<br>
                                                                printf("\nSumation of factor is %d.\n\n",sum);<br>
                                                                sum = 0;<br>
                                                            }<br>
                                                        }<br>
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
