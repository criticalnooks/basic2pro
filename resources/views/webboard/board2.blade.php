<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Basic2Pro</title>
   <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/css/lightbox.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">

    
    <!--  -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <link href="{{ asset('/x_login-register modal/bootstrap3/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/x_login-register modal/login-register.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">

  

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
                        <h1><img src="{{ asset('images/logo2.png') }}" alt="logo"></h1>
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
                                <span style="font-family: 'Kanit'"  aria-hidden="true" ><img src="{{ asset('images/login.png') }}"> Login</span>
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
                                                      <img src="{{ asset('images/logo2.png') }}">
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
                                <span style="font-family: 'Kanit'"  aria-hidden="true" ><img src="{{ asset('images/user.png') }}">   {{ $user->name }}</span>
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

     <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="portfolio-items">
                        <a href="/forums"><span style="font-family: 'Kanit';font-size:27px"> FORUMS </span> </a>
                        <span style="font-family: 'Kanit';font-size:27px">► </span>
                        <a href="/forums/board2"><span style="font-family:Kanit;font-size:27px">Programming Talk </span></a> <br><br>


                        @if (!Auth::guest())                                                 
                           
                               <a href="/forums/board2/post"> <button  type="submit" class="btn btn-default btn-lg" aria-label="Left Align">
                                    <span style="font-family: 'Kanit'"  aria-hidden="true" > POST</span>
                                    </button> </a><br><br>
                        @endif     

                         
                        <div class="modal fade login" id="loginModal">
                            <div class="modal-dialog login animated">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                    <div class="modal-body">  
                                        <div class="box">
                                            <div class="content">
                                               
                                                <div class="error"></div> 
                                                <div class="form loginBox">
                                                    <form method="post" action="/forums/board2" accept-charset="UTF-8">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input id="name" class="form-control" type="text" placeholder="ตั้งชื่อ Forums" name="name">
                                                        
                                                        

                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input id="content" class="form-control" type="text"   placeholder="เนื้อหา" name="content">
                                                        

                                                        <input class="btn btn-default btn-login" type="submit" value="Post" onclick="loginAjax()">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                  
                                  </div>
                            </div>
                        </div>
            <nav class="navbar navbar-default">
                                    <div class="row">
                                        <div class="col-sm-4 text-center">
                                                <span class="font-content2 navbar-brand" style="margin-left:50%">หัวข้อ</span>
                                            </div>
                                            <div class="col-sm-3 text-center bottom-separator">
                                                <span class="font-content2 navbar-brand " style="margin-left:50%">โดย</span><br><br>
                                            </div>
                                            <div class="col-sm-3 text-center bottom-separator">
                                                <span class="font-content2 navbar-brand" style="margin-left:50%">เมื่อ</span><br><br>
                                            </div>
                                            <div class="col-sm-2 text-center bottom-separator">
                                                <span class="font-content2 navbar-brand" style="margin-left:50%">ตอบ</span><br><br>
                                            </div>
                                </nav>
                <nav class="navbar navbar-default">
                        <div class="row">
                                            
                            @foreach($thread as $threads)                        
                                @if($threads->thread_type == 2)
                                    <div class="col-sm-4">
                                        <span class="font-content2 navbar-brand">
                                        <a href="{{ url('/forums/boardcontent',$threads->thread_id) }}"> <span class = "font-content2"> {{$threads->thread_name}} </span>  </a> </span>
                                    </div>
                                    <div class="col-sm-3 text-center bottom-separator">
                                        <span class = "font-content2 navbar-brand"  style="margin-left:25%">{{ $threads->thread_user }}</span>                                                                
                                    </div>
                                    <div class="col-sm-3 text-center bottom-separator">
                                        <span class = "font-content2 navbar-brand" style="margin-left:25%"> {{$threads->created_at}} </span> 
                                    </div>
                                    <div class="col-sm-2 text-center bottom-separator">
                                        <span class="font-content2 navbar-brand "style="margin-left:50%">
                                            <?php
                                                $sum = 0;
                                                    foreach($comment as $comments) {
                                                        if($comments->thread_id == $threads->thread_id)              
                                                            $sum = $sum + 1;                                                                   
                                                    }
                                            ?>
                                            {{ $sum }}
                                        </span><br><br>
                                    </div>                             
                                @endif
                             @endforeach 

                        </div>
                    </nav>




                    </div>
                </div>
            </div>
    </section>

               


     <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{ asset('images/home/under.png') }}" class="img-responsive inline" alt="">
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
     <script type="text/javascript" src="/js/jquery.js"></script> <?php // 1 รอบ ?>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script> <?php // bootstap อีก 1 รอบ ?>
    <script type="text/javascript" src="/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/js/lightbox.min.js"></script>
    <script type="text/javascript" src="/js/wow.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>    
    <script src="{{ asset('/x_login-register modal/login-register.js') }}"></script>
 
</body>
</html>
