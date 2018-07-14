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
                           
                            <a href="/exercisesc-4"><span class="font-head">  If Statements</span> </a>

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
                                                    โปรแกรมต่อไปนี้เป็นโปรแกรมที่แสดงราคาตั๋วของ Siam Ocean World โดยราคาตั๋วมีเงื่อนไขดังนี้
                                                    <br>
                                                    1.
                                                    <br>
                                                    ความสูง : น้อยกว่าหรือเท่ากับ 120 เซนติเมตร
                                                    <br>
                                                    ราคา : 250 บาท
                                                    <br>
                                                    2.
                                                    <br>
                                                    ความสูง : มากกว่า 120 เซนติเมตร
                                                    <br>
                                                    ราคา : 350 บาท
                                                    <br>
                                                    <br>
                                                    <div class="ex-box">
                                                    <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง 1
                                                </span>
                                                    </div>
                                                    <div class="ex-codebox">
                                                    Please input your height : 150
                                                    <br>
                                                    Your ticket price is 350 bath.
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="ex-box">
                                                    <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง 2
                                                </span>
                                                    </div>
                                                    <div class="ex-codebox">
                                                    Please input your height : 110
                                                    <br>
                                                    Your ticket price is 250 bath.
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    จงเติมส่วนของโปรแกรมที่ขาดหายไป
                                                    </div>
                                                    <br>
                                                    <div class="ex-codebox">
                                                    int main()
                                                    <br>
                                                    {
                                                    <br>
                                                        ...(A)...//ประกาศตัวแปร
                                                    <br>
                                                        ...(B)...//แสดงข้อความ "Please input your height :" ทางหน้าจอ
                                                    <br>
                                                        ...(C)...//รับ input ตัวเลขของความสูงเป็น int
                                                    <br>
                                                        if(...(D)...)
                                                    <br>
                                                        printf("Your   ticket price is 350 bath.");
                                                    <br>
                                                        ...(E)...
                                                    <br>
                                                        printf("Your ticket price is 250 bath.");
                                                    <br>
                                                    }
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (A) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (B) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (C) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (D) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (E) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
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
                                            <div class="ex-box">
                                                    (A) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    int height;    
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (B) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    printf("Please input your height :");    
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (C) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    scanf("%d", &height);    
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (D) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                     height > 350   
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (E) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                     else   
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne2" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                ให้นักเรียนเขียนโปรแกรมในการคำนวณราคาสินค้าของสมาชิก โดยหากลูกค้าเป็นสมาชิกจะได้ลดราคา 10% ของราคาสินค้าตัวอย่าง
                                                <br>
                                                <br>
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง 1
                                                </span>
                                                </div>
                                                <div class="ex-codebox">
                                                Please input your item's price : 250
                                                <br>
                                                Are you my member? : N
                                                <br>
                                                Your price is 250 bath. Thank you.
                                                </div>
                                                <br>
                                                <br>
                                                <div class="ex-box">
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง 2
                                                </span>
                                                </div>
                                                <div class="ex-codebox">
                                                Please input your item's price : 300
                                                <br>
                                                Are you my member? : Y
                                                <br>
                                                Your discount is 30 bath.
                                                <br>
                                                Your price is 270. Thank you.
                                                </div>
                                                <br>
                                                <br>
                                                <div class="ex-codebox">
                                                int main()
                                                <br>
                                                {
                                                <br>
                                                    char member; float price;
                                                <br>
                                                    printf("Please input your price : ");
                                                <br>
                                                    scanf("%f", &price);
                                                <br>
                                                    ...(A)...//แสดงข้อความ "Are you my member? :" ทางหน้าจอ
                                                <br>
                                                    ...(B)...//รับ input เป็น char
                                                <br>
                                                    if(...(C)...)//กรณีไม่เป็นสมาชิก
                                                <br>
                                                        ...(D)...//แสดงข้อความแจ้งราคาสินค้าพร้อมทั้งแสดงคำขอบคุณ
                                                <br>
                                                    ...(E)...//กรณีเป็นสมาชิก
                                                <br>
                                                    ...(F)...//ต้องการใช้คำสั่งหลายคำสั่งในกรณีเดียวกันต้องใส่เครื่องหมายอะไรเร่มต้น
                                                <br>
                                                        ...(G)...//แสดงข้อความแจ้งส่วนลดของราคาสินค้า
                                                <br>
                                                        ...(H)...//แสดงข้อความแจ้งราคาสินค้าหลังลดพร้อมทั้งแสดงคำขอบคุณ
                                                <br>
                                                    ...(I)...//เมื่อเริ่มต้นเครื่องหมายไปแล้วก็ต้องเปิดท้ายด้วยเครื่องหมายอะไร
                                                <br>
                                                }
                                                </div>
                                                <div class="ex-box">
                                                จงเติมส่วนของโปรแกรมที่ขาดหายไป
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    (A) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (B) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (C) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (D) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (E) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    </div>
                                                    <div class="ex-box">
                                                    (F) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (G) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (H) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (I) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                        
                                                    </div>
                                                <br>

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
                                                    (A) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    printf("Are you my member? :");    
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (B) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    scanf("%c", &member);   
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (C) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    member != Y
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (D) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    printf("Your price is %f bath. Thank you.",price);
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (E) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    else
                                                    </div>
                                                    <div class="ex-box">
                                                    (F) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    {
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (G) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    printf("Your discount is %d bath.", price*(10/100));
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (H) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
                                                    printf("Your price is %d. Thank you.",price-price*(10/100));
                                                    </div>
                                                    <br>
                                                    <div class="ex-box">
                                                    (I) : ข้อความหรือคำสั่งที่ขาดหาย
                                                    </div>
                                                    <div class="ex-codebox">
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                จงพิจารณาโปรแกรมดังต่อไปนี้
                                                </div>
                                                <div class="ex-codebox">
                                                #include&ltstdio.h&gt
                                                <br>
                                                int main()
                                                <br>
                                                {
                                                <br>
                                                    int N;
                                                <br>
                                                    scanf("%d", &N);
                                                <br>
                                                    if(N < 0)
                                                <br>
                                                        printf("Negative Number");
                                                <br>
                                                    else
                                                <br>
                                                        printf("positive Number");
                                                <br>
                                                }
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                ให้นักเรียนรันโปรแกรมข้างต้นแล้วตอบคำถามต่อไปนี้
                                                <br>
                                                    ตัวแปร N ในบรรทัดที่ 5 จะต้องมีค่าเท่าใดเพื่อให้แสดงผลบนหน้าจอเป็น Negative Number และจงยกตัวอย่างตัวแปร N มาอย่างน้อย 3 ค่า

                                                </div>
                                                <div class="ex-codebox">
                                                    
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    ตัวแปร N ในบรรทัดที่ 5 จะต้องมีค่าเท่าใดเพื่อให้แสดงผลบนหน้าจอเป็น Positive Number และจงยกตัวอย่างตัวแปร N มาอย่างน้อย 3 ค่า
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    ถ้านักเรียนให้ค่า 0 แก่ตัวแปร N ในบรรทัดที่ 5 โปรแกรมแสดงผลลัพธ์ใดบนหน้าจอ
                                                </div>
                                                <div class="ex-codebox">
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    จงแก้ไขโปรแกรมข้างต้น โดยให้โปรแกรมแสดงผลเป็นคำว่า "Zero Number" ถ้าตัวแปร N มีค่าเป็น 0 ส่วน กรณีนอกเหนือจากนี้ให้แสดงผลตามเงื่อนไขเดิม ทั้งนี้นักเรียนเขียนโปรแกรมที่เปลี่ยนแปลงลงในช่องว่างดังต่อไปนี้
                                                </div>
                                                <div class="ex-codebox">
                                                #include&ltstdio.h&gt
                                                <br>
                                                int main()
                                                <br>
                                                {
                                                <br>
                                                    int N;
                                                <br>
                                                    scanf("%d", &N);
                                                <br>
                                                    if(N < 0)
                                                <br>
                                                        printf("Negative Number");
                                                <br>
                                                    else
                                                <br>
                                                        printf("positive Number");
                                                <br>
                                                }
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
                                            <div class="ex-box">
                                                <br>
                                                    ตัวแปร N ในบรรทัดที่ 5 จะต้องมีค่าเท่าใดเพื่อให้แสดงผลบนหน้าจอเป็น Negative Number และจงยกตัวอย่างตัวแปร N มาอย่างน้อย 3 ค่า

                                                </div>
                                                <div class="ex-codebox">
                                                -1  -2  -3
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    ตัวแปร N ในบรรทัดที่ 5 จะต้องมีค่าเท่าใดเพื่อให้แสดงผลบนหน้าจอเป็น Positive Number และจงยกตัวอย่างตัวแปร N มาอย่างน้อย 3 ค่า
                                                </div>
                                                <div class="ex-codebox">
                                                1   2   3
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    ถ้านักเรียนให้ค่า 0 แก่ตัวแปร N ในบรรทัดที่ 5 โปรแกรมแสดงผลลัพธ์ใดบนหน้าจอ
                                                </div>
                                                <div class="ex-codebox">
                                                Positive Number
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                    จงแก้ไขโปรแกรมข้างต้น โดยให้โปรแกรมแสดงผลเป็นคำว่า "Zero Number" ถ้าตัวแปร N มีค่าเป็น 0 ส่วน กรณีนอกเหนือจากนี้ให้แสดงผลตามเงื่อนไขเดิม ทั้งนี้นักเรียนเขียนโปรแกรมที่เปลี่ยนแปลงลงในช่องว่างดังต่อไปนี้
                                                </div>
                                                <div class="ex-codebox">
                                                #include&ltstdio.h&gt
                                                <br>
                                                int main()
                                                <br>
                                                {
                                                <br>
                                                    int N;
                                                <br>
                                                    scanf("%d", &N);
                                                <br>
                                                    if(N < 0)
                                                <br>
                                                        printf("Negative Number");
                                                <br>
                                                    else if(N == 0)
                                                <br>
                                                        printf("Zero Number");
                                                <br>
                                                    else
                                                <br>
                                                        printf("positive Number");
                                                <br>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4"><span class="font-content2">► โจทย์</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                จงพิจารณาโปรแกรมดังต่อไปนี้
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                #include&ltstdio.h&gt
                                                <br>
                                                int main()
                                                <br>
                                                {
                                                <br>
                                                    float x = 1, y = 2, z = 3;
                                                <br>
                                                    printf("Input y= ");
                                                <br>
                                                    scanf("%f", &y);
                                                <br>
                                                    if ((y >= 0) && (y < 0.5))
                                                <br>
                                                        printf("A");
                                                <br>
                                                    else if((y >= 0.5) && (y < 1))
                                                <br>
                                                        printf("B");
                                                <br>
                                                    else
                                                <br>
                                                        printf("C");
                                                <br>
                                                }
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                จงยกตัวอย่างค่า input 3 ค่า ที่เป็นผลให้โปรแกรมแสดงผลเป็นตัวอักษร A ออกมา
                                                </div>
                                                <div class="ex-codebox">
                                                    
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                จงยกตัวอย่างค่า input 3 ค่า ที่เป็นผลให้โปรแกรมแสดงผลเป็นตัวอักษร B ออกมา
                                                </div>
                                                <div class="ex-codebox">
                                                    
                                                </div>
                                                <div class="ex-box">
                                                จงยกตัวอย่างค่า input 3 ค่า ที่เป็นผลให้โปรแกรมแสดงผลเป็นตัวอักษร C ออกมา
                                                </div>
                                                <div class="ex-codebox">
                                                    
                                                </div>
                                                <div class="ex-box">
                                                หาก input คือ 0.49999999999999999999999999999999999999999999999 โปรแกรมจะแสดงผลอย่างไรและเหตุใดจึงเป็นเช่นนั้น
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree4"><span class="font-content2">► เฉลย</span></a></h4>
                                        </div>
                                        <div id="collapseThree4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="ex-box">
                                                จงยกตัวอย่างค่า input 3 ค่า ที่เป็นผลให้โปรแกรมแสดงผลเป็นตัวอักษร A ออกมา
                                                </div>
                                                <div class="ex-codebox">
                                                0.1     0.2     0.3    
                                                </div>
                                                <br>
                                                <div class="ex-box">
                                                จงยกตัวอย่างค่า input 3 ค่า ที่เป็นผลให้โปรแกรมแสดงผลเป็นตัวอักษร B ออกมา
                                                </div>
                                                <div class="ex-codebox">
                                                0.6     0.7     0.8    
                                                </div>
                                                <div class="ex-box">
                                                จงยกตัวอย่างค่า input 3 ค่า ที่เป็นผลให้โปรแกรมแสดงผลเป็นตัวอักษร C ออกมา
                                                </div>
                                                <div class="ex-codebox">
                                                1   2   3    
                                                </div>
                                                <div class="ex-box">
                                                หาก input คือ 0.49999999999999999999999999999999999999999999999 โปรแกรมจะแสดงผลอย่างไรและเหตุใดจึงเป็นเช่นนั้น
                                                </div>
                                                <div class="ex-codebox">
                                                แสดงผลเป็น B เพราะ ตัว complier จะปัดทศนิยมมากๆให้อัตโนมัติ
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->
                        <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne5"><span class="font-content2">► ฝึกเขียนโปรแกรมแสนสนุก</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne5" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                <div class="ex-box">
                                                Character Type chaeck
                                                <br>
                                                ให้นักเรียนเขียนโปรแกรมสำหรับตรวจสอบว่าตัวอักษรที่พิมพ์เข้ามาเป็นตัวอักษรชนิดตัวพิมพ์ใหญ่(Upper case letter)
                                                <br>
                                                ตัวพิมพ์เล็ก(Lower case letter) ตัวเลข(Digit) หรืออื่นๆ
                                                <br>
                                                (Hint : if((ch>='A')&&(ch<='Z'))//check ch is in[A,,Z]?)
                                                <br>
                                                <br>
                                                <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง
                                                </span>
                                                </div>
                                                <div class="ex-codebox">
                                                Input Char : p
                                                <br>
                                                Output : Lower case Letter.
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                Input Char : A
                                                <br>
                                                Output : Upper case Letter.
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                Input Char : 9
                                                <br>
                                                Output : Digit.
                                                </div>
                                                <br>
                                                <div class="ex-codebox">
                                                Input Char : $
                                                <br>
                                                Output : Other.
                                                </div>
                                                <br>

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
                                                <img src="images/c4.5.png">
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
                                                char ch;
                                            <br>
                                                scanf("%c",&ch);
                                            <br>
                                                if((ch>='A')&&(ch<='Z'))
                                            <br>
                                                    printf("Upper case letter");
                                            <br>
                                                else if((ch>='a')&&(ch<='z'))
                                            <br>
                                                    printf("Lower case letter");
                                            <br>
                                                else if((ch>='0')&&(ch<='9'))
                                            <br>
                                                    printf("Digit");
                                            <br>
                                                else
                                            <br>
                                                    printf("Others");
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
