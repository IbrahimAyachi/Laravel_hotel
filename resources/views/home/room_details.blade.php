<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Keto</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

         <style type="text/css">
         
         label{
            display: inline-block;
            width: 200px;
         }
         input{
            width: 100%;
         }

         </style>

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
        @include('home.header')
      </header>



      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>

           <div class="row">
  
      <div class="col-md-8">
         <div id="serv_hover" class="room">
            <div style="padding: 20px" class="room_img">
               <figure><img style="height: 300px; width: 100%; object-fit: cover;" src="/room/{{$room->image}}" alt="#"/></figure>
            </div>
            <div class="bed_room">
               <h3>{{$room->room_title}}</h3>
               <p style="padding: 12px">{{$room->description}}</p>
               <h4 style="padding: 12px">Free wifi:{{$room->room_title}}</h4>
               <h4 style="padding: 12px">Room Type:{{$room->room_type}}</h4>
               <h3 style="padding: 12px">Price:{{$room->price}} DT/per night</h3>
            </div>
         </div>
      </div>
      
<div class="col-md-4">

   <h1 style="font-size: 40px!important;">Book Room</h1>

   <div>

   @if (session()->has('message'))

   <div class="alert alert-success">

      <button type="button" class="close" data-bs-dismiss="alert">x</button>

      {{session()->get('message')}}
   </div>
   @endif

   </div>

   @if ($errors)

   @foreach($errors->all() as $errors)

   <li style="color: red">
      {{$errors}}
   </li>

   @endforeach
      
   @endif

<form action="{{url('add_booking',$room->id)}}" method="POST">

   @csrf

   <div>
      <label>Name</label>
      <input type="text" name="name">   
   </div>   
   
   <div>
      <label>Email</label>
      <input type="email" name="email">  
   </div>   
   
   <div>
      <label>Phone</label>
      <input type="number" name="phone">    
   </div>   
   
   <div>
      <label>Start Date</label>
      <input type="date" name="startDate" id="startDate">   
   </div>   
   
   <div>
      <label>End Date</label>
      <input type="date" name="endDate" id="endDate">   
   </div>   

   <div style="padding-top: 20px;">
      <input type="submit" class="btn btn-primary" value="Book Room">
   </div>

</form>

</div>   




           </div>
            </div>
         </div>
</body>
</html>



      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
     
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about.html"> about</a></li>
                        <li><a href="room.html">Our Room</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        
                        <p>
                        © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                        <br><br>
                        Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
      
      $(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;

    var day = dtToday.getDate();

    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();

    if(day < 10)
     day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#startDate').attr('min', maxDate);
    $('#endDate').attr('min', maxDate);

});
      
      </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" 
      crossorigin="anonymous"></script>

   </body>
</html>