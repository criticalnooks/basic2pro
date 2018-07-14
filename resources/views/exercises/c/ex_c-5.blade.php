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
                      
                            <a href="/exercisesc-5"><span class="font-head">  อาร์เรย์</span> </a>

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
                        <!--/#accordion-->
                        <div class="panel-group" id="accordion">       
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="font-content2">► โปรแกรมรับและแสดงข้อมูล</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                           <div class="ex-box"> จงเติมคําในช่องว่างต่อไปนี้ให้สมบูรณ์เพื่อให้โปรแกรมต่อไปนี้เป็นโปรแกรมที่รับข้อมูลเป็นเลขจํานวนเต็ม 5 จํานวนจากผู้ใช้ จากนั้นแสดงข้อมูลทั้ง 5 จํานวนนี้ทางหน้าจอ   </div><br>
                                                            <div class="ex-codebox">
                                                            #include&ltstdio.h&gt <br>
                                                            int  main()  <br>  
                                                            {      <br>  
                                                                int i;  <br>       
                                                                int  data[_____]; <br>  
                                                                for (______;______;______)  <br>  
                                                                    scanf(____________); <br>  
                                                                printf(____________); <br>  
                                                                for(______;______;______)  <br>  
                                                                    printf ("data[%d] = %d\n",____________);     <br>  
                                                            }
                                                            </div><br>
                                                            <div class="ex-box">
                                                            ตัวอย่าง
                                                            </div><br>
                                                            <div class="ex-codebox">
                                                                30  <br>
                                                                20 <br>
                                                                15 <br>
                                                                0 <br>
                                                                9<br>
                                                                Your data: <br>
                                                                data[1] = 30 <br>
                                                                data[2] = 20 <br>
                                                                data[3] = 15 <br>
                                                                data[4] = 0 <br>
                                                                data[5] = 9<br>
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
                                                <div class="panel-body"><br>
                                                    <div style="text-align:center"> <a href="https://www.mx7.com/view2/zuZbNmPISHlTYXqS" target="_blank"><img border="0" src="https://www.mx7.com/i/b57/DMuezi.JPG" /></a></div>
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
                                                <span class="font-content2">ผลลัพธ์ </span><br><br>
                                                <div class="ex-codebox">
                                                        #include&ltstdio.h&gt<stdio.h> <br>
                                                            int  main()  <br>  
                                                            {      <br>  
                                                                int i;  <br>       
                                                                int  data[5]; <br>  
                                                                for (i=0;i<5;i++)  <br>  
                                                                    scanf("%d",data[i]); <br>  
                                                                printf("Your data:\n"); <br>  
                                                                for(i=0;i<5;i++)  <br>  
                                                                    printf ("data[%d] = %d\n",data[i]);     <br>  
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne2"><span class="font-content2">► โปรแกรมคำนวณค่าเฉลี่ยเลขคณิต</span> </a> </h4>
                                        </div>
                                        <div id="collapseOne2" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                           <div class="ex-box">    จงเขียนโปรแกรมที่คํานวณค่าเฉลี่ยเลขคณิตของคะแนน ของนิสิตทั้งหมด 4 คน  โดยโปรแกรมจะแจ้งให้ผู้ใช้ทราบว่าจะต้องใส่คะแนน 4 ชุดก่อนในลําดับแรก จากนั้น จึงเริ่มถามคะแนนของนิสิตแต่ละคน เพื่อนํามาคํานวณหาคำเฉลี่ยของคะแนนของนิสิตทั้งหมด<br>ดังตัวอย่าง</div><br>
                                                            <div class="ex-codebox">
                                                                Input 4 students :  <br>
                                                                Score of student1 = 80.2  <br>
                                                                Score of student2 = 67.5 <br>
                                                                Score of student3 = 70 <br>
                                                                Score of student4 = 68.5 <br>
                                                                Average score = 71.55 <br>
                                                            </div>
                                                            
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
                                                        <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span><br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZlIpWYRC2ARlev" target="_blank"><img border="0" src="https://www.mx7.com/i/199/knSnKS.JPG" /></a></div>
                                                        
                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้และ ทำการรับค่า input <br><br>
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZoXLSlVy0b9c2m" target="_blank"><img border="0" src="https://www.mx7.com/i/d54/rmnVMS.JPG" /></a></div>

                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> ทำการหาค่า sum และ แสดงผลค่าเฉลี่ยของนักเรียน <br><br> 
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZrj79YbPjMK7Ub" target="_blank"><img border="0" src="https://www.mx7.com/i/c53/JhgMvl.JPG" /></a></div>

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
                                                <span class="font-content2">ผลลัพธ์ </span><br><br>
                                                <div class="ex-codebox">
                                                    #include&ltstdio.h&gt <br>
                                                    int main() { <br>
                                                        int i;   <br>
                                                        float  data[4]; <br>        
                                                        printf("Input 4 students :  \n");<br> 
                                                        for (i=0;i<4;i++)  <br>
                                                        {<br>
                                                            printf("Score of stuent%d = ",i+1); <br>
                                                            scanf("%f",&data[i]);<br>
                                                        }<br>
                                                        float sum=0;<br>
                                                        for(i=0;i<4;i++)  <br>
                                                            sum = sum+ data[i];   <br>
                                                        printf("Average score = %.2f",sum/4);<br>
                                                    }<br>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->


                        <div class="panel-group" id="accordion">       
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne3"><span class="font-content2">► ArrayAverage </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                           <div class="ex-box">   ทำการเพิ่มฟังก์ชั่นชื่อ ArrayAverage เพื่อทำการคำนวณหาค่าเฉลี่ยของค่าในอาเรย์ของข้อมูลชนิด float ให้เติมคำสั่งลงในบรรทัดที่เว้นไว้เพื่อให้โปรแกรมทำงานได้อย่างถูกต้องโดยใช้พื้นที่ไม่เกินสองบรรทัด ( คำแนะนำ : พยายามใช้ประโยชน์จากฟังก์ชั่น ArraySum ที่มีให้อยู่แล้ว )</div><br>
                                                            <div class="ex-codebox">
                                                                #include&ltstdio.h&gt <br>
                                                                float ArraySum(float  data[ ], int size) {    <br>
                                                                    int i;        <br>
                                                                    float sum = 0.0;   <br>     
                                                                    for (i=0; i< size; i++)  <br>         
                                                                        sum += data[i];       <br>   
                                                                    return sum;    <br>   
                                                                }<br>   
                                                                float ArrayAverage(float data[ ]) {  <br>                                                        
                                                                     // เติมโค๊ดที่นี่       <br>   
                                                                     // เติมโค๊ดที่นี่  <br>     
                                                                }<br>   
                                                                int main () { <br>   
                                                                    float myData[4]; <br>           
                                                                    int i, n;      <br>      
                                                                    printf("Enter 4 items:\n ");   <br>         
                                                                    for ( i = 0; i < 4; i++) {      <br>         
                                                                        printf("Enter item# %d: ", i+1); <br>               
                                                                        scanf("%f",&myData[i]);        <br>   
                                                                    }<br>   
                                                                    printf("Average = %.1f \n ", ArrayAverage(myData));   <br>    
                                                                } 
 
 
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
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZyPhcN4AlZvtzn" target="_blank"><img border="0" src="https://www.mx7.com/i/b1d/IOweRD.JPG" /></a></div>


                                                        <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> เติมส่วนของฟังก์ชั่น ArrayAverage ให้สมบูรณ์ <br><br> 
                                                        <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZG7g6kCnLHI648" target="_blank"><img border="0" src="https://www.mx7.com/i/d43/CgekiK.JPG" /></a></div>

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
                                                    #include&ltstdio.h&gt <br>
                                                                float ArraySum(float  data[ ], int size) {    <br>
                                                                    int i;        <br>
                                                                    float sum = 0.0;   <br>     
                                                                    for (i=0; i< size; i++)  <br>         
                                                                        sum += data[i];       <br>   
                                                                    return sum;    <br>   
                                                                }<br><br>   
                                                                float ArrayAverage(float data[ ]) {  <br>                                                        
                                                                     float Average = ArraySum(data,4)/4; <br>
                                                                     return Average;   
                                                                }<br> <br>     
                                                                int main () { <br>   
                                                                    float myData[4]; <br>           
                                                                    int i, n;      <br>      
                                                                    printf("Enter 4 items:\n ");   <br>         
                                                                    for ( i = 0; i < 4; i++) {      <br>         
                                                                        printf("Enter item# %d: ", i+1); <br>               
                                                                        scanf("%f",&myData[i]);        <br>   
                                                                    }<br>   
                                                                    printf("Average = %.1f \n ", ArrayAverage(myData));   <br>    
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne4"><span class="font-content2">► โปรแกรมรับและแสดงคาของอาเรย 2 มิติ  </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <div class="ex-box">    ให้นิสิตเติมคำในช่องว่างให้สมบูรณ์เพื่อให้ส่วนของโปรแกรมต่อไปนี้เป็นส่วนของโปรแกรมที่กำหนดค่าของ Matrix A มีค่าดังภาพด้านล่าง จากนั้นจะแสดงข้อมูลใน Matrix A ออกมาทางหน้าจอ <br> </div><br>
                                                    <div class="ex-codebox">        
                                                               #include&ltstdio.h&gt <br>
                                                                int main() {      <br>
                                                                    int i, j;     <br>
                                                                    _________________________________________    <br>
                                                                    _________________________________________  <br>   
                                                                    _________________________________________     <br>
                                                                    _________________________________________     <br>
                                                                    _________________________________________ <br>
                                                                    for( ________ ;  __________ ; ________ )  {  <br>   
                                                                        for( ________ ;  __________ ; ________ ) {  <br>  
                                                                            printf("%4d ",MatrixA[__][__]);      <br>
                                                                        }                <br>
                                                                        ____________________________;  <br>
                                                                    } <br>
                                                                } <br>
                                                                
                                                    </div><br>

                                                    <div class="ex-box">ตัวอย่าง output</div><br>

                                                    <div class="ex-codebox">
                                                        Matrix A is <br>
                                                        90    5     12  <br>
                                                        -8    15    -7  <br>
                                                        0     23    -8  <br>
                                                    </div><br>
                                                     <div class="ex-box">Note : กำหนดให้ค่าเริ่มต้นของ ตัวแปรแบบอาเรย์สอง มิติชื่อ MatrixA  ขนาด 3x3 เป็นไปตามด้านบน </div>
                                                </div>
                                        </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo4"> <span class="font-content2">► วิธีทำ </span></a> </h4>
                                        </div>
                                        <div id="collapseTwo4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZQcWA36HyuhgWI" target="_blank"><img border="0" src="https://www.mx7.com/i/da0/IkFCv4.JPG" /></a></div>
                                                    
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
                                                    int main() { <br>
                                                        int i, j; <br>
                                                        int MatrixA[3][3] = { { 90,5,12 },{ -8,15,-7 },{ 0,23,-8 } }; <br>
                                                        printf("Matrix A is \n");<br>
                                                        for( i=0 ; i<3 ; i++ ) { <br>
                                                            for( j=0 ; j<3 ; j++ ) { <br>
                                                                printf("%4d",MatrixA[i][j]); <br>
                                                            } <br>
                                                            printf("\n"); <br>
                                                        } <br>
                                                    } <br>

                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </div>
                        </div><!--/#accordion-->

                        
                         <div class="panel-group" id="accordion">       
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne6"><span class="font-content2">► ดีเทอร์มิแนนท์ของเมตริกซ์ขนาด 2x2 </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne6" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                           <div class="ex-box" >    ให้นิสิตเขียนโปรแกรมที่คำนวณค่าดีเทอร์มิแนนท์ของเมตริกซ์ขนาด 2x2 ซึ่งมีสูตรคำนวณดังนั้น <br> Det(A) = (A<span style = "font-size:14px">11</span>A<span style = "font-size:14px">22</span> – A<span style = "font-size:14px">12</span>A<span style = "font-size:14px">21</span>) </div><br>
                                                            <div class="ex-codebox">
                                                           <span style="text-decoration:underline; font-weight:bold">ตัวอย่าง</span>  <br>
                                                           Enter matrix A  <br>
                                                           Enter element[1,1]: 1 <br>
                                                           Enter element[1,2]: 2 <br>
                                                           Enter element[2,1]: 3 <br>
                                                           Enter element[2,2]: 4 <br>
                                                           The determenant of A is -2 <br>
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
                                                            <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span> <br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zuZXx3lGlRdrUQLj" target="_blank"><img border="0" src="https://www.mx7.com/i/d7a/oNythS.JPG" /></a></div>

                                                            <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้และ ทำการรับค่า input <br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv05kAlV8hYh8AOy" target="_blank"><img border="0" src="https://www.mx7.com/i/dd5/gZhfoA.JPG" /></a></div>

                                                            <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> ทำการหา det จากสูตรที่โจทย์กำหนดให้ <br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv0d2NFVEXTqSvcQ" target="_blank"><img border="0" src="https://www.mx7.com/i/da9/V2O8mm.JPG" /></a></div>


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
                                                <span class="font-content2">ผลลัพธ์ </span><br><br>
                                                <div class="ex-codebox">
                                                        #include&ltstdio.h&gt <br>
                                                        int main() {  <br>
                                                            int matrix[2][2];<br>
                                                            int i,j;<br>
                                                            printf("Enter matrix A \n");<br>
                                                            for(i=0;i < 2;i++ ){<br>
                                                                for(j=0;j < 2;j++){<br>
                                                                    printf("Enter element[%d,%d]: ",i+1,j+1);<br>
                                                                    scanf("%d",&matrix[i][j]);<br>
                                                                }    <br>
                                                            }<br>
                                                            int detA = matrix[0][0]*matrix[1][1]-matrix[0][1]*matrix[1][0];<br>
                                                            printf("The determenant of A is %d",detA);<br>
                                                        } <br>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                        </div><!--/#accordion-->

                        <div class="panel-group" id="accordion">       
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne7"><span class="font-content2">► ฟังก์ชั่นหาพื้นที่ของสามเหลี่ยม </span> </a> </h4>
                                        </div>
                                        <div id="collapseOne7" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                           <div class="ex-box" >    ให้นิสิตเขียนโปรแกรมหาพื้นที่ของสามเหลี่ยม โดยรับข้อมูลเป็นอาร์เรย์ซึ่งเก็บความยาวฐาน 
                                                                และ ส่วนสูงของสามเหลี่ยมไว้ และกำหนดให้มีฟังก์ชั่นชื่อ TriangleArea ซึ่งมีการรับพารามิเตอร์เป็น อาเรย์ และ รีเทิร์นกลับเป็นพื้นที่ของสามเหลี่ยม<br><br>
                                                         <span style="text-decoration:underline; font-weight:bold">ตัวอย่างของโปรแกรม</span>  </div><br>
                                                         <div class="ex-codebox">
                                                           
                                                            Input Base : 20 <br>
                                                            Input Height : 10 <br>
                                                            Area of Trisangel is : 100.00 
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
                                                            <span style="text-decoration:underline; font-weight:bold">วิเคราะห์โจทย์</span> <br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv0g1uBfoF6gx8Mx" target="_blank"><img border="0" src="https://www.mx7.com/i/944/6VupwZ.JPG" /></a></div>

                                                            <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นแรก</span> สร้างตัวแปรที่ต้องใช้และ ทำการรับค่า input <br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv0jwrACW8tlumlW" target="_blank"><img border="0" src="https://www.mx7.com/i/b0e/ucS2lB.JPG" /></a></div>

                                                            <br><br><span style="text-decoration:underline; font-weight:bold">ขั้นสอง</span> เขียนฟังก์ชั่น TriangleArea เพื่อคำนวนหาค่าพื้นที่ของสามเหลี่ยม <br><br> 
                                                            <div style="text-align:center"><a href="https://www.mx7.com/view2/zv0vilOQNfVHiAzI" target="_blank"><img border="0" src="https://www.mx7.com/i/199/qDEdnf.JPG" /></a></div>
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
                                                <span class="font-content2">ผลลัพธ์ </span><br><br>
                                                <div class="ex-codebox">
                                                       #include&ltstdio.h&gt <br>
                                                        float TriangleArea(float A[2]) { <br>
                                                            float area = (1/2.0)*A[0]*A[1];<br>
                                                            return area;<br>
                                                        } <br>
                                                        int main() { <br>
                                                            float array[2];<br>
                                                            printf("Input Base : ");<br>
                                                            scanf("%f",&array[0]);<br>
                                                            printf("Input Height : ");<br>
                                                            scanf("%f",&array[1]);  <br>
                                                            printf("Area of Triangle is : %.2f",TriangleArea(array)); <br>
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
