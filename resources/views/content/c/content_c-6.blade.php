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
                          
                            <a href="/contentc-1"><span class="font-head">  อาร์เรย์</span> </a>

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
                            <br>Array ในภาษา C ที่ใช้กันบ่อย จะแบ่งออกเป็น 2 ชนิด<br>
                                    1.อาเรย์ 1 มิติ <br>
                                    2.อาเรย์ 2 มิติ<br>
                           <br><span style="text-decoration:underline; font-weight:bold;font-size:35px">อาเรย์ 1 มิติ(Array)</span><br>
                                    Array ก็เหมือนกล่องๆหนึ่ง ที่เก็บค่าต่างๆไว้หลายๆตัว โดยที่ค่าต่างๆนั้นต้องมีชนิด (Type) เป็นชนิดเดียวกัน<br><br>
                            <span style=" font-weight:bold">► Syntax การประกาศ Array </span><br><br>
                                                <a href="http://www.mx7.com/view2/zuKdaDrcuVkEoQeL" target="_blank"><img border="0" src="http://www.mx7.com/i/b7b/bjVNhw.JPG" /></a><br><br>
                                    • DataType คือ ชนิดของข้อมูลใน Array<br>
                                    • ArrayName คือ ชื่อ Array <br>
                                    • number_element คือ ขนาดของ Array<br><br>

                                    เช่น 
                                    <div class="ex-codebox">int myarray[5]; </div><br>
                                        หน้าตาของเจ้า Array ที่เราสร้างด้านบนจะมีหน้าตาประมาณนี้ <br>
                                    <a href="http://www.mx7.com/view2/zuKidiGIBiCcPZml" target="_blank"><img border="0" src="http://www.mx7.com/i/c3e/sTUPoh.JPG" /></a>

                                   <br><br> การกำหนดค่าให้ Array ของเราสามารถทำได้ดังนี้ <br>
                                    <div class="ex-codebox">int myarray[5] = {1,2,3,4,5};</div><br>

                                        จากโค๊ดด้านบน เป็นการใส่ข้อมูลเข้าไปภายในกล่อง Array ของเรา  หน้าตาของ Array เราจะไปเปลี่ยนไปเป็นดังนี้ <br>
                                    <a href="http://www.mx7.com/view2/zuKjZy4ON10zRFVj" target="_blank"><img border="0" src="http://www.mx7.com/i/126/alphM9.JPG" /></a><br>
                                        <br>    จะเห็นว่า Array ของเราจากกล่องว่างๆ ก็จะมีข้อมูลอยู่แล้ว ซึ่งเป็นเลข 1 2 3 4 5 ตามลำดับ<br><br>
                                        
                                        <br><div class="panel panel-default">
                                        <img src="images/youtube.png"><span> YouTube</span>
                                        <div class="panel-heading" style=" background-color: #FF0033">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="font-content2">CLIP ► การสร้างและการดึงค่ามาใช้ </span></a></h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/LHJBdH3UN78?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        </div><br>



                                        <span style="text-decoration:underline; font-weight:bold">แล้วถ้าเราต้องการจะเอาค่าในกล่อง Array เราออกมาใช้ล่ะ ?</span><br>
                                            การจะเอาค่าใน Array มาใช้ต้องเรียกตำแหน่งที่อยู่ของกล่องย่อยออกมา 
                                        <br><span style=" font-weight:bold">► Syntax </span><br>
                                                    <a href="http://www.mx7.com/view2/zuKnsJaMUDxuHtO9" target="_blank"><img border="0" src="http://www.mx7.com/i/c6f/PycL2A.JPG" /></a><br><br>
                                           <span style="text-decoration:underline; font-weight:bold">โดยตำแหน่งของภายในกล่อง Array จะเป็นไปดังนี้</span> <br><br>
                                        <a href="http://www.mx7.com/view2/zuKogmcgBXkWTYBV" target="_blank"><img border="0" src="http://www.mx7.com/i/945/7C7b5q.JPG" /></a><br><br>
                                            <span style="text-decoration:underline; font-weight:bold">สำคัญ</span> ตำแหน่งของ Array ตำแหน่งแรกจะเริ่มต้นที่เลข <span style="text-decoration:underline; font-weight:bold">0</span> ตามด้วย 1 2 3.. ไปเรื่อยๆตามขนาดของกล่อง

                                        <br><br>ดังนั้น หากต้องการเอาค่าใน Array ออกมาใช้ สามารถทำได้ดังนี้
                                        <div class="ex-codebox"> int myarray[5]= {1,2,3,4,5};<br>
                                        printf("%d",myarray[0]); // สั่ง print array ช่องที่ 0 (ช่องแรก) </div><br>
                                        <span style="text-decoration:underline; font-weight:bold">ผลลัพธ์</span><br>
                                        <div class="ex-codebox"> 1 </div><br><br>


                                        <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree2"><span class="font-content2">CLIP ► การเปลี่ยนแปลงค่าภายใน Array </span></a></h4>
                                                </div>
                                                <div id="collapseThree2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                       <iframe width="1100" height="619" src="https://www.youtube.com/embed/J7vyziKQhQE?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                        </div>
                                         <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree3"><span class="font-content2">CLIP ► การใช้ Loop for กับ Array</span></a></h4>
                                                </div>
                                                <div id="collapseThree3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <iframe width="1100" height="619" src="https://www.youtube.com/embed/niFRm_LLLOs?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                        </div><br>


                                         <span style="font-weight:bold">ตัวอย่าง 1</span>
                                        <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                                int main() {<br>
                                                                    int SCORE[5]= {0, 10, 20, 30, 40};    // ประกาศ Array ชื่อ SCORE มี 5 ช่อง เก็บค่า 0 10 20 30 40 เอาไว้<br>
                                                                    int i,SUM = 0;                // ประกาศตัวแปร i ไว้สำหรับการวน loop และ sum=0 ไว้สำหรับเป็นตัวเก็บผลบวก <br>
                                                                    for ( i=0; i&lt5; i++) {        // วน loop for 5 รอบ (ตั้งแต่ 0 ถึง 4) ตามขนาดของ Array <br>  
                                                                        SUM = SUM + SCORE[i];     // แต่ละรอบของการวน loop นำค่าใน array SCORE บวกในค่า sum ที่สร้างไว้  <br>
                                                                        printf("SCORE[%d]=%d: SUM =%d\n", i, SCORE[i], SUM);    // print ค่า sum ในแต่ละรอบออกมา<br>
                                                                    }<br>
                                                                    printf("FINAL SUM = %d\n", SUM);        // print ค่า sum <br> 
                                                                }
                                        </div>

                                            <br>        จากโปรแกรมด้านบน เป็นโปรแกรมที่หาผลรวมของค่าใน Array ที่ชื่อ SCORE สังเกตว่า <br>
                                        เราสามารถนำ  <span style="text-decoration:underline; font-weight:bold">Loop for</span> มาใช้กับ Array ได้อย่างดีเลย เพราะว่า <span style="text-decoration:underline; font-weight:bold">Array มีขนาดที่คงที่และแน่นอน </span>
                                        การหาผลรวมของ Array 5 ช่อง ก็เป็นการวน Loop for ทั้งหมด 5 ครั้ง โดยแต่ครั้ง เรานำค่าใน Array แต่ละช่องบวกในค่า SUM เอาไว้<br>

                                        <span style="font-weight:bold">ผลลัพธ์</span>
                                        <div class="ex-codebox">SCORE[0]=0: SUM =0<br>
                                                        SCORE[1]=10: SUM =10<br>
                                                        SCORE[2]=20: SUM =30<br>
                                                        SCORE[3]=30: SUM =60<br>
                                                        SCORE[4]=40: SUM =100<br>
                                                        FINAL SUM = 100
                                        </div><br><br>

                                        <br><span style="text-decoration:underline; font-weight:bold;font-size:35px">อาเรย์ 2 มิติ(Array 2 Dimension)</span><br>
                                    <br>ลักษณะคล้ายๆกับ Array 1 มิติ ซับซ้อนกว่านิดหน่อย และคำสั่งในการสร้างและการเรียกค่าใน Array ไม่ต่างกันมาก<br><br>
                                    <span style=" font-weight:bold">► Syntax การประกาศ Array </span><br><br>
                                            <a href="http://www.mx7.com/view2/zuKxNiL9jmdxoHXJ" target="_blank"><img border="0" src="http://www.mx7.com/i/c37/4qVule.JPG" /></a><br><br>
                                        • DataType คือ ชนิดของข้อมูลใน Array<br>
                                        • ArrayName คือ ชื่อ Array <br>
                                        • number_rows คือ จำนวนแถว<br>
                                        • number_columns คือ จำนวนคอลัมน์<br><br>

                                     เช่น 
                                    <div class="ex-codebox">int myarray[3][5]; </div><br>
                                        หน้าตาของเจ้า Array 2 มิติ ที่เราสร้างด้านบนจะมีหน้าตาประมาณนี้ <br><br>
                                    <a href="http://www.mx7.com/view2/zuKAjhpe4WAnXb4p" target="_blank"><img border="0" src="http://www.mx7.com/i/984/Kdow7R.JPG" /></a>

                                    <br><br> การกำหนดค่าให้ Array 2 มิติของเราสามารถทำได้ดังนี้ <br>
                                    <div class="ex-codebox">int myarray[3][5] = { {1,2,3,4,5},{6,7,8,9,10},{11,12,13,14,15} };</div><br>

                                     หลังจากใส่ทำการใส่ข้อมูลให้ Array 2 มิติ ของเราแล้ว  หน้าตาของ Array 2 มิติ เราจะไปเปลี่ยนไปเป็นดังนี้ <br><br>
                                    <a href="http://www.mx7.com/view2/zuKCDUJtLW5kOoL3" target="_blank"><img border="0" src="http://www.mx7.com/i/c31/voVAOA.JPG" /></a><br><br>
                                        สังเกตว่า Array 2 มิติเราสามารถใส่ข้อมูลได้ถึง 15 ตัวเลยทีเดียว<br><br>

                                    <span style="text-decoration:underline; font-weight:bold">การเข้าถึงตำแหน่งของ Array 2 มิติ</span><br><br>
                                    <span style=" font-weight:bold">► Syntax </span><br>
                                        <a href="http://www.mx7.com/view2/zuKFK3d7sOKEowIN" target="_blank"><img border="0" src="http://www.mx7.com/i/b3d/hdDh8d.JPG" /></a><br><br>

                                    <span style="text-decoration:underline; font-weight:bold">ตำแหน่งของ Array 2 มิติ</span><br><br>
                                    <a href="http://www.mx7.com/view2/zuKEsDYlWyHP3edI" target="_blank"><img border="0" src="http://www.mx7.com/i/c8c/srs2Oq.JPG" /></a><br><br>

                                        สังเกตว่า ตำแหน่งของ Array 2 มิติถูกแบ่งตำแหน่งเป็น คอมลัมน์ และ แถว และมีการเริ่มต้นที่ตำแหน่ง 0 เหมือน Array 1 มิติ <br><br><br><br>



                                       <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree4"><span class="font-content2">CLIP ► การสร้างและการเข้าถึงตำแหน่งภายใน Array 2 มิติ</span></a></h4>
                                        </div>
                                        <div id="collapseThree4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <iframe width="1100" height="619" src="https://www.youtube.com/embed/5TjVIEtCP7A?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>
                                <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree5"><span class="font-content2">CLIP ► การใช้ Loop for กับ Array 2 มิติ</span></a></h4>
                                        </div>
                                        <div id="collapseThree5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               <iframe width="1100" height="619" src="https://www.youtube.com/embed/oRUqbziRq5M?list=PLMI8PHP_COJiPrSbtZi5Lh8BPaWY540ob" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                </div>

                                     <span style="font-weight:bold">ตัวอย่าง</span>
                                <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                        int main(){<br>
                                                            int myarray2D[3][5] = { {1,2,3,4,5},{6,7,8,9,10},{11,12,13,14,15} };<br>
                                                        }
                                </div>
                                <br>         หากต้องการพิมพ์<span style="text-decoration:underline; font-weight:bold">ค่าทั้งหมด</span>ภายใน Array 2 มิติออกมา สามารถทำได้ดังนี้<br><br>
                                 <div class="ex-codebox"> #include&ltstdio.h&gt<br>
                                                            int main() {<br>
                                                            int myarray2D[3][5] = { {1,2,3,4,5},{6,7,8,9,10},{11,12,13,14,15} };<br>
                                                            for(int i=0;i&lt3;i++){          // i&lt3 ตามจำนวนแถวที่มี 3 ( myarray2D<span style="text-decoration:underline; font-weight:bold">[3]</span>[5]) <br> 
                                                                for(int j=0;j&lt5;j++){      // j&lt5 ตามจำนวนคอลัมน์ที่มี 5 ( myarray2D[3]<span style="text-decoration:underline; font-weight:bold">[5]</span>)<br>
                                                                    printf("%d ",myarray2D[i][j]);    // print ค่าใน array 2 มิติ<br>
                                                                }<br>
                                                                printf("\n");        // หลังจาก print 1 แถวเสร็จ จะเว้นบรรทัด 1 บรรทัด<br> 
                                                        }<br>
                                                    }
                                       
                                </div><br>
                                       จะเห็นว่าการ print ค่าทั้งหมดของ Array 2 มิติ จำเป็นต้องใช้ Loop for ซ้อนกัน 2 Loop เพื่อให้สามารถเข้าถึงค่าถึงหมดได้<br>
                                    โดย Loop นอก ( Loop บน) ทำหน้าที่ควบคุมแถวว่ามีกี่แถว <br>
                                    Loop ใน ( Loop ล่าง ) ทำหน้าที่ควบคุมในส่วนของคอลัมน์ <br><br>
                                 <span style="font-weight:bold">ผลลัพธ์</span>
                                <div class="ex-codebox">1 2 3 4 5<br>
                                                        6 7 8 9 10<br>
                                                        11 12 13 14 15
                                                        </div><br><br>

                                    








                                                   














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
