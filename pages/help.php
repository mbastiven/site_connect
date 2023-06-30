<?php include("../path.php");
include(ROOT_PATH . "/app/controllers/users.php");

?>

<head>

    <!-- Meta head -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Title -->
    <title>Evently || Get Help</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/X7ysz72W/dribble.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Bootstrap /JQuarry / Ajax Links  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        rossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    

    <!-- Page Main CSS File -->
 
    <!-- Page Main CSS File -->
    
    <link href="../assets/css/faq.css" rel="stylesheet"> 

    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style1.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="loader"></div>

    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <div class="po"></div>

<div class="container">
    <div class="accordion">
    <div class="image-box">
      <img src="https://i.postimg.cc/TYb4wMyT/mainImg.png" alt="">
    </div>
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">What and who is Evently?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloribus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question"> How do i create an account?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Does Evently have API for website integrations?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, necessitatibus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Can i create an event for free?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, labore.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">how ca i book an event?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, repudiandae!</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>

  </div>    <div class="po1"></div>
    <!--  Footer Section -->

    <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  
    <!--  End Footer Section -->
   <style></style>
   <style>
    .po{
      height: 50px !important;

margin-top: 15px;    }
.po1{
      height: 100px !important;

margin-top: 20px;    }
   </style>
  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>


  <script src="../assets/js/script.js"></script>

    <script src="../assets/js/loader.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>