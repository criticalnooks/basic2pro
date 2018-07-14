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
                           
                            <a href="/contentc-1"><span class="font-head">  ฟังก์ชัน</span> </a>

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
                                    การเขียนโปรแกรมที่มีความซับซ้อนโดยนำคําสั่งทุกคำสั่งมาเขียนไว้ในฟังก์ชั่น main เพียงอย่างเดียวทำให้การตรวจสอบและแก้ไขมีความยุ่งยาก 
                            ดังนั้นวิธีการที่นำมาช่วยในการเขียนโปรแกรมที่ซับซ้อนนั้นคือการแบ่งโปรแกรมหรือปัญหาใหญ่ที่ต้องเขียนออกเป็นโปรแกรมย่อย ๆ เรียกว่า <span style="text-decoration:underline; font-weight:bold">ฟังก์ชั่น</span><br><br>
                            <span style=" font-weight:bold">► Syntax</span><br>
                                                <a href="http://www.mx7.com/view2/zuKTwnYIQSaxepDH" target="_blank"><img border="0" src="http://www.mx7.com/i/1f7/t2bLSB.JPG" /></a><br><br>
                                            • return_type คือ type ของค่าที่เราส่งกลับ<br>
                                            • function_name คือ ชื่อฟังก์ชั่น<br>
                                            • parameter_list คือ ตัวแปรที่ฟังก์ชั่นรับเข้ามา<br>
                                            • statement คือ คำสั่งภายในฟังก์ชั่น <br>
                                    ฟังก์ชั่นย่อยที่เราสร้างขึ้น เป็นเหมือนตัวช่วยการทำงานของ ฟังก์ชั่น main เพื่อลดความซับซ้อนและข้อผิดพลาดต่างๆ<br><br>
                            <div class="panel panel-default">
                            <img src="images/youtube.png"><span> YouTube</span>
                                        <div class="panel-heading" style=" background-color: #FF0033">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="font-content2"> CLIP ► ทำความรู้จักกับฟังก์ชั่น</span></a></h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/Cnoij0ULyjM?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>


                            <span style="text-decoration:underline; font-weight:bold">เปรียบเทียบการเขียนแบบมีและไม่มีฟังก์ชั่น</span>
                                    <br><br>    <span style="text-decoration:underline; font-weight:bold">คำสั่ง</span>  จงเขียนโปรแกรมที่แสดงค่า * จำนวน 5 บรรทัด บรรทัดละ 20 ตัว โดยใช้ loop for <br><br>
                                        <span style="text-decoration:underline; font-weight:bold">กรณีไม่มีฟังก์ชั่น</span><br>
                                        <div class="ex-codebox"> 
                                            #include&ltstdio.h&gt<br>
                                            int main() {<br>
                                                int i;<br>
                                                for (i = 0; i < 20; i++) {<br>
                                                    printf("*");<br>
                                               
                                                }<br>
                                                printf("\n");<br>
                                                for (i = 0; i < 20; i++) {<br>
                                                    printf("*");<br>
                                               
                                                }<br>
                                                printf("\n");<br>
                                                for (i = 0; i < 20; i++) {<br>
                                                    printf("*");<br>
                                               
                                                }<br>
                                                printf("\n");<br>
                                                for (i = 0; i < 20; i++) {<br>
                                                    printf("*");<br>
                                               
                                                }<br>
                                                printf("\n");<br>
                                                for (i = 0; i < 20; i++) {<br>
                                                    printf("*");<br>
                                               
                                                }<br>
                                                printf("\n");<br>
                                            }
                                        </div><br>
                                    <span style="font-weight:bold">ผลลัพธ์</span>
                                    <div class="ex-codebox">********************<br>
                                                            ********************<br>
                                                            ********************<br>
                                                            ********************<br>
                                                            ********************
                                    </div><br><br>
                                        จาก โค๊ดด้านบน จะเห็นว่าต้องเขียน loop for ทั้งหมด 5 ครั้ง เพื่อต้องการที่จะ print ดอกจันทร์ (*) 5 บรรทัด บรรทัดละ 20 ตัว 
                                    จะเห็นว่าโค๊ดมีความซับซ็อน และ เปลืองบรรทัด<br><br>


                                    <span style="text-decoration:underline; font-weight:bold">กรณีมีฟังก์ชั่น</span>
                                    <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                    void printdokjan() {<br>
                                                        int i;<br>
                                                        for (i = 0; i < 20; i++) {<br>
                                                            printf("*");<br>
                                                        }<br>
                                                        printf("\n");   <br>
                                                    }<br>
                                                    int main() {<br>
                                                        printdokjan();<br>
                                                        printdokjan();<br>
                                                        printdokjan();<br>
                                                        printdokjan();<br>
                                                        printdokjan();<br>
                                                    }


                                    </div>
                                      <span style="font-weight:bold">ผลลัพธ์</span>
                                    <div class="ex-codebox">********************<br>
                                                            ********************<br>
                                                            ********************<br>
                                                            ********************<br>
                                                            ********************
                                    </div><br><br>

                                            จะเห็นว่า จากโค๊ดด้านบนได้สร้างฟังก์ชั่น รายละเอียดดังนี้ <br>
                                                    • ฟังก์ชั่นชื่อว่า printdokjan  <br>
                                                    • มี return type เป็น void (ไม่มีการคืนค่า)<br>
                                                    • ไม่มีการรับพารามิเตอร์ <br>
                                                    • รายละเอียดในฟังก์ชั่น มี loop for ที่ print ดอกจันทร์ (*) จำนวน 20 ตัว 1 บรรทัด <br>
                                            และเมื่อเรียกใช้ ฟังก์ชั่น printdokjan โปรแกรมจะทำการ  print ดอกจันทร์ (*)  20 ตัว จำนวน 1 บรรทัด จะเห็นว่าใน main มีการเรียกใช้ 
                                            ฟังก์ชั่น printdokjan ทั้งหมด 5 ครั้ง หมายความจะมีการ print ดอกจันทร์ (*)  20 ตัว จำนวน 5 บรรทัด ซึ่งมีผลลัพธ์เหมือน กรณีที่ไม่มีฟังก์ชั่นช่วยเลย<br><br>

                                    <span style="text-decoration:underline; font-weight:bold">ประเภทของฟังก์ชั่น มี 2 ประเภท</span><br>
                                                • ฟังก์ชั่นแบบไม่คืนค่า <br>
                                                • ฟังก์ชั่นแบบคืนค่า <br><br>

                                                <span style="text-decoration:underline; font-weight:bold">ฟังก์ชั่นแบบไม่คืนค่า</span><br>
                                            เป็นฟังก์ชั่นที่มี return type เป็น void และไม่มีการ return ค่ากลับไป เช่น <br>
                                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                    void print() {  // return type เป็น void<br>
                                                        printf("I love programming");   <br>
                                                        // ไม่มีการ return อะไรกลับไปใน function<br>
                                                    }<br>
                                                    int main() {<br>
                                                        print();<br>
                                                    }<br>
                                                    </div>


                                                    <span style="text-decoration:underline; font-weight:bold">ฟังก์ชั่นแบบคืนค่า</span><br>
                                            เป็นฟังก์ชั่นที่มี return type เป็น type ต่างๆตามตัวแปรที่ return และมีการ return  ค่ากลับไป<br>
                                            โดยใช้คำสั่ง  return ตามด้วยค่าที่จะส่งกลับ  เช่น <br>
                                                    <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                                    int x_back() {<br>
                                                                        int x = 10;   <br>
                                                                        return x; <br>
                                                                    }<br>
                                                                    int main() {<br>
                                                                        int x = x_back();<br>
                                                                        printf("%d",x);<br>
                                                                    }<br>
                                                    </div>
                                                            <br>            ตามโค๊ดด้านบน อาจจะงงกันนิดหน่อย ขออธิบายด้วยภาพแล้วกัน <br> <br>   
                                                 <div style="text-align:center"> <a href="http://www.mx7.com/view2/zuLbJOfyhLsX4PnN" target="_blank"><img border="0" src="http://www.mx7.com/i/b09/kysG4H.JPG" /></a></div><br>
                                                 <div style="text-align:center"><span style=" font-weight:bold">return type กับ type ของตัวแปร x ต้องเป็น type เดียวกัน</span></div><br><br>
                                                <div style="text-align:center"><a href="http://www.mx7.com/view2/zuLgktbbZd3OEySg" target="_blank"><img border="0" src="http://www.mx7.com/i/dc7/YiLovY.JPG" /></a></div>
                                                <div style="text-align:center"><span style=" font-weight:bold">int x ถูกแทนที่ด้วยเลข 10 ที่ได้ return จาก ฟังก์ชั่น x_back </span></div><br>
                                                <span style="font-weight:bold">ผลลัพธ์</span>
                                            <div class="ex-codebox">10</div><br>    
                                            <div class="panel panel-default">
                                            <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">CLIP ► ฟังก์ชั่นแบบคืนค่าและไม่คืนค่า</span></a></h4>
                                                    </div>
                                                    <div id="collapseThree2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                           <iframe width="1100" height="619" src="https://www.youtube.com/embed/3pLS1dbGsQM?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                            </div><br><br>

                                            <span style="text-decoration:underline; font-weight:bold">ฟังก์ชั่นที่มีการรับพารามิเตอร์</span><br>

                                             <span style="font-weight:bold">ตัวอย่าง</span>
                                            <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                                    double TriangleArea(double w, double h) {<br>
                                                                        double area = w*h/2.0;<br>
                                                                        return area;<br>
                                                                    }<br><br>

                                                                    int main() {<br>
                                                                        double width,height;<br>
                                                                        printf("Enter width: ");<br>
                                                                        scanf("%lf",&width);<br>
                                                                        printf("Enter height: ");<br>
                                                                        scanf("%lf",&height);<br>
                                                                        printf("The area of the triangle is %.2lf.\n", TriangleArea(width, height));<br>
                                                                    }
                                            </div>
                                              <br>            ตามโค๊ดด้านบน อาจจะงงกันนิดหน่อย ขออธิบายด้วยภาพแล้วกัน <br><br><br>
                                              <div style="text-align:center"><a href="http://www.mx7.com/view2/zuLmcbmUVi35OlKb" target="_blank"><img border="0" src="http://www.mx7.com/i/d83/rGIp7g.JPG" /></a></div><br>
                                                <div style="text-align:center"><span style=" font-weight:bold">การรับ parameter</span></div><br><br>
                                                <div style="text-align:center"><a href="http://www.mx7.com/view2/zuLtzPVn0fm365wt" target="_blank"><img border="0" src="http://www.mx7.com/i/bd1/A1hFnF.JPG" /></a></div>
                                                <br><div style="text-align:center"><span style=" font-weight:bold">พารามิเตอร์ w และ h ที่ฟังก์ชั่น TriangleArea จะมีค่าเท่ากับ width และ height ที่ถูกส่งเข้าไปขณะเรียกฟังก์ชั่น <br>
                                                                                                                 หลังจากฟังก์ชั่น TriangleArea คำนวณเสร็จก็จะ return ค่ากลับไปแทนที่ TriangleArea(width, height) ใน main</span></div><br><br>
                                            <span style="font-weight:bold">ผลลัพธ์</span>
                                            <div class="ex-codebox">Enter width: 10<br>
                                                                    Enter height: 15<br>
                                                                    The area of the triangle is 75.00.</div>

                                                
                                        <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3"><span class="font-content2">CLIP ► ฟังก์ชั่นที่มีการรับพารามิเตอร์</span></a></h4>
                                                </div>
                                                <div id="collapseThree3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <iframe width="1100" height="619" src="https://www.youtube.com/embed/Gjfjy_D98FM?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                </div>
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
