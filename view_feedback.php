<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TechnoCase</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page" background="../images/about_bg.jpg">
       
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo1.png" alt="#" height="70" width="70" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About Institute</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="view_feedback.php">Feedback</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../login/Organiser_login.html">Organiser Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../login/participant_login.html">Paticipant Login</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="../login/judge_login.html">Jugde Login</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header><br>
      <!-- end header -->
      <!-- about -->
      <div class="abofut">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-20">
                  <div class="  text_align_center" style="color : orange">
                        <h1 style="color : black ; font-size : xxx-large ;"><b>PARTICIPANT FEEDBACK</b></h2><br>
                  <?php
                        $conn = mysqli_connect('127.0.0.1:3308', 'root', '', 'technocase');
                        $query="select * from feedback";
                        $result=mysqli_query($conn,$query);
                        if(mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_assoc($result)){
                                echo"<div class='text_align_center' style='font-weight: bold; font-size: x-large;'><table><hr color='white'>";
                                    echo "<td>";
                                    echo "<div><tr><b style ='color : skyblue'>Name : </b>" . $row['participantName'] . "</tr></div>";
                                    echo "<div><tr><b style ='color : skyblue'>Review : </b>" . $row['review'] . "</tr></div>";
                                    echo "<div><tr><b style ='color : skyblue'>Feedback : </b>" . $row['feedback'] . "</tr></div>";
                                    echo "<div><tr><b style ='color : skyblue'>Time : </b>" . $row['time'] . "</tr></div>";
                                    echo "</td>";
                            }
                            echo"</table></div>";
                        }
                        mysqli_close($conn);
                    ?>   
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- footer -->
      <footer>
         <div class="copyright text_align_left">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-6">
                     <p>© 2023 Technocase Event , IICMR  <a href="https://html.design/"> </a></p>
                  </div>
                  <div class="col-md-6">
                     <ul class="social_icon text_align_center">
                        <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
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
      <script src="js/custom.js"></script>
   </body>
</html>