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
                    <a href="/forums"><span style="font-family: 'Kanit';font-size:27px"> FORUMS </span> </a>
                    <span style="font-family: 'Kanit';font-size:27px">► </span>
                    @if( $thread->thread_type == 1) 
                        <a href="/forums/board1"><span style="font-family: 'Kanit';font-size:27px">Announcement </span> </a>
                    @else
                        <a href="/forums/board2"><span style="font-family: 'Kanit';font-size:27px">Programming Talk </span> </a>
                    @endif
                    <span style="font-family: 'Kanit';font-size:27px">► </span>
                    <a href="javascript:window.location.href=window.location.href"><span style="font-family: 'Kanit';font-size:27px">{{ $thread->thread_name }}</span></a><br><br>
                    @if (!Auth::guest())
                       
                          <a href="{{ url('/forums/boardcontent/comment',$thread->thread_id) }}"> <button  class="btn btn-default btn-lg" aria-label="Left Align">
                                    <span style="font-family: 'Kanit'"  aria-hidden="true" > Comment</span>
                                    </button> </a><br><br>

                    @endif
                
                    <div class="portfolio-items">
                    <!-- กล่องโพส -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{$thread->thread_name}}</h3>
                            </div>
                            <div class="panel-body">
                                <div style="padding-bottom:20px">
                                    <textarea readonly class="font-content2" style="height: 200px;width:100%;  resize: vertical;padding: 20px;"  name="content" cursor="Arrow"  >{{ $thread->thread_content }}</textarea>
           
                                    
                                   </div> 
                                

                                <!-- user time-->
                                <button class="btn btn-default" aria-label="Left Align" >
                                    <span aria-hidden="true" style="font-family: 'Kanit'"><img src="{{ asset('images/post_user.png') }}">
                                    {{ $thread->thread_user}}
                                        
                                    </span>
                                </button>
                                <div  style="display:inline-block; padding-left:10px">
                                               <span style="font-family:'Kanit' ;font-size:15px"> เวลา : {{ $thread->created_at}} </span>
                                            </div>
                                <!-- user time-->
                                <!-- Edit -->
                                  @if( Auth::id() == $thread->id ||  Auth::id() == 1 )
                                
                                    <div style="display:inline-block; float:right ;padding-left : 10px">
                                        <a href="{{ url('/forums/boardcontent/edit',$thread->thread_id) }}"> 
                                            <button class="btn btn-default" aria-label="Left Align" style="margin-top: 1%">
                                            <span aria-hidden="true" style="font-family: 'Kanit'"><img src="{{ asset('images/edit.png')}}">
                                            Edit</span>
                                            </button>
                                        </a>
                                    </div>
                                       
                                    <!-- Edit -->
                                    <!-- Delete -->
                                    <div style="display:inline-block; float:right ;  ">
                                        <form action="{{ url('/forums/boardcontent',$thread->thread_id) }} " method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="type" value="thread">
                                            <button class="btn btn-default" aria-label="Left Align" style="margin-top: 1%">
                                                <span aria-hidden="true" style="font-family: 'Kanit'"><img src="{{ asset('images/delete.png')}}">
                                                Delete</span>
                                            </button>
                                        </form>
                                    </div>
                               
                                @endif
                                <!-- Delete -->
                            </div>
                            
                        </div>
                    <!-- กล่องโพส -->
            
                    <!-- กล่องคอมเม้น -->
                    @foreach( $comment as $comments)
                    
                        @if($comments->thread_id == $thread->thread_id )
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Comment</h3>
                                </div>
                                <div class="panel-body">
                                    <div style="padding-bottom:20px">
                                    <textarea readonly class="font-content2" style="height: 150px;width:100%;  resize: vertical;padding:20px"  name="content" cursor="Arrow"  >{{ $comments->comment_content}}</textarea>
                                    </div>
                                    <!-- user time-->
                                    <button class="btn btn-default" aria-label="Left Align">
                                        <span aria-hidden="true" style="font-family: 'Kanit'"><img src="{{ asset('images/post_user.png') }}">
                                        {{ $comments->comment_user}}
                                            
                                        </span>
                                    </button>
                                    <div  style="display:inline-block; padding-left:10px">
                                               <span style="font-family:'Kanit' ;font-size:15px"> เวลา : {{ $comments->created_at}} </span>
                                            </div>
                                    <!-- user time-->
                                    <!-- Edit -->
                                    @if( Auth::id() == $comments->id ||  Auth::id() == 1 )
                                     <div style="display:inline-block; float:right ;padding-left:10px">
                                         <form action="{{ url('/forums/boardcontent/edit2',$comments->comment_id) }}" method="get">
                                                <button class="btn btn-default" aria-label="Left Align" style="margin-top: 1%">
                                                <input type="hidden" name="thread_id" value="{{ $thread->thread_id }}">
                                                <span aria-hidden="true" style="font-family: 'Kanit'"><img src="{{ asset('images/edit.png')}}">
                                                Edit</span>
                                                </button>
                                            </a>
                                        </form>
                                    </div>
                                        <!-- Edit -->
                                        <!-- Delete -->
                                    <div style="display:inline-block; float:right ; ">
                                        <form action="{{ url('/forums/boardcontent',$comments->comment_id) }} " method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="type" value="comment">
                                            <button class="btn btn-default" aria-label="Left Align" style="margin-top: 1%">
                                            <span aria-hidden="true" style="font-family: 'Kanit'"><img src="{{ asset('images/delete.png') }}">
                                                Delete</span>
                                            </button>
                                        </form>
                                    </div>
                                        
                                    @endif
                                    <!-- Delete -->
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- กล่องคอมเม้น -->
                    </div>
                </div>
            </div>
    </section>
                 


     <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="{{ asset('/images/home/under.png') }}" class="img-responsive inline" alt="">
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
