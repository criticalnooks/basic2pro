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
                      
                            <a href="/exercisesc-3"><span class="font-head">  การรับและแสดงผลข้อมูล</span> </a>

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
                                                <div class="panel-body">
                                               <div class="ex-box">
                                                ให้นักเรียนเขียนโปรแกรมคำนวณหาพื้นที่ผิวและปริมาตรของทรงกลม โดยรับค่า input เป็นความยาวของรัศมีของทรงกลมจากผู้ใช้ ผลลัพธ์แสดงเป็นเลขทศนิยม 2 ตำแหน่ง
                                                <br>
                                                Hint พื้นที่ผิวของทรงกลม = 4πr^2
                                                <br>
                                                     ปริมาตรของทรงกลม = (4/3)πr^3
                                                <br>
                                                <br>
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง
                                                </span>
                                               </div>
                                               <div class="ex-codebox">
                                                Please input r : 5
                                                <br>
                                                The surface area of sphere is 314.16
                                                <br>
                                                The volume of sphere is 523.60
                                               </div>
                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                                    <img src="images/c3.1.png">
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
                                            #include&ltstdio.h&gt
                                            <br>
                                            int main()
                                            <br> 
                                            {
                                            <br>
                                                int r;
                                            <br>
                                                printf("Please input r : ");
                                            <br>
                                                scanf("%d",&r);
                                            <br>
                                                printf("The surface area of sphere is %.2f\n", 4*3.14159*r*r);
                                            <br>
                                                printf("The volume of sphere is %.2f",(4.0/3.0)*3.14159*r*r*r);
                                            <br>
                                            }
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                เขียนโปรแกรมที่รับ input เป็นเลขจำนวนเต็ม 2 จำนวน ประกอบด้วยตัวตั้ง <br>กับตัวหารโดยโปรแกรม แสดง output เป็นผลหารและเศษที่เหลือจากการหาร
                                                <br>
                                                <br>
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง
                                                </span>
                                                <br>
                                                <div class="ex-codebox">
                                                input Dividend : 35
                                                <br>
                                                input Divisor : 4
                                                <br>
                                                Quotient of 35/4 is 8 and remainder is 3
                                                </div>

                                                </div>
                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                                <img src="images/c3.2.png">
                                                    <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                            #include&ltstdio.h&gt
                                            <br>
                                            int main()
                                            <br>
                                            {
                                            <br>
                                                int a,b;
                                            <br>
                                                printf("Input Divided : ");
                                            <br>
                                                scanf("%d",&a);
                                                <br>
                                                printf("Input Divisor : ");
                                                <br>
                                                scanf("%d",&b);
                                                <br>
                                                printf("Quotient of %d/%d is %d and remainder is %d",a,b,a/b,a%b);
                                                <br>
                                            }
                                                
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne5" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                เขียนโปรแกรมที่รับ input เป็นอุณหภูมิในหน่วยองศาเซลเซียส โดยโปรแกรมจะคำนวณ<br>และแสดง output เป็นหน่วยองศาฟาเรนไฮต์ ตามสูตร Fahrenheit = (9/5)x(Celsius) + 32
                                                <br>
                                                <br>
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง
                                                </span>
                                                <br>
                                                <div class="ex-codebox">
                                                input a temperature in degree Celsius : 28
                                                <br>
                                                28 degrees Celsius is equivalent to 82.4 degrees Fahrenheit
                                                </div>
                                                </div>
                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                                <img src="images/c3.3.png">
                                                    <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                            #include&ltstdio.h&gt
                                            <br>
                                            int main()
                                            <br> 
                                            {
                                            <br>
                                                int celsius;
                                            <br>
                                                printf("Input a temperature in degree Celsius: ");
                                            <br>
                                                scanf("%d",&celsius);
                                            <br>
                                                printf("%d degrees Celsius is equivalent to %.1f degrees Fahrenheit",celsius,(9.0/5)*celsius+32);
                                            <br>
                                            }
                                                
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne6"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne6" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                เขียนโปรแกรมที่รับ input เลขทศนิยมใดๆที่ไม่ต่ำกว่า -999 และไม่เกิน 1000 มา 3 ค่า <br>แสดงผลทั้ง 3 ค่านั้นบรรทัดละ 1 ค่า โดยมีจุดทศนิยม 4 ตำแหน่ง จัดเรียงอย่างสวยงาม
                                                <br>
                                                <br>
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง
                                                </span>
                                                <br>

                                                </div>
                                                <div class="ex-codebox">
                                                input1: 323.228
                                                <br>
                                                input2: 0.1
                                                <br>
                                                input3: -35.44
                                                <br>
                                                output
                                                <br>
                                                 323.2280
                                                <br>
                                                   0.1000
                                                <br>
                                                 -35.4400
                                                </div>
                                                           <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                                <img src="images/c3.4.png">
                                                    <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
                                                #include&ltstdio.h&gt
                                                <br>
                                                int main()
                                                <br>
                                                {
                                                <br>
                                                    float input1,input2,input3;
                                                    <br>
                                                    printf("input1: ");
                                                    <br>
                                                    scanf("%f",&input1);
                                                    <br>
                                                    printf("input2: ");
                                                    <br>
                                                    scanf("%f",&input2);
                                                    <br>
                                                    printf("input3: ");
                                                    <br>
                                                    scanf("\n%f",&input3);
                                                    <br>
                                                    printf("output\n");
                                                    <br>
                                                    printf("%.4f\n",input1);
                                                    <br>
                                                    printf("%.4f\n",input2);
                                                    <br>
                                                    printf("%.4f\n",input3);
                                                    <br>
                                                }
                                            </div>
                                                    <!--  ข้อมูลลลลลลลลลลลลลลลล -->
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
