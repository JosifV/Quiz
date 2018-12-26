
<?php
   // session_start();
   // error_reporting(0);

   $deoba = 1;
   $_SESSION["deljenje"] = $deoba;
   ?>
<?php
if(isset($_POST['imeMejl']) && isset($_POST['porukaMejl'])){
   $imeNaMejlu = $_POST['imeMejl'];
   $porukaNaMejlu = $_POST['porukaMejl'];
   
   $to      = 'josifvacic@gmail.com';
   $subject = 'Poruka sa web kviza';
   $message = 'Od '.$imeNaMejlu.'<br>'.$porukaNaMejlu;
   $headers = 'From: webmaster@example.com' . "\r\n" .
       'Reply-To: webmaster@example.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
   
   mail($to, $subject, $message, $headers);
}
   ?> 
      <?php
      include 'unosPodataka.php';
      // include 'obrisi.php';
      ?>
<!DOCTYPE html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Data entry</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
   <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
   </script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script> -->
</head>
<body>
   <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-angle-double-up'></i></button>
   <div class="container-fluid" id="wrapper">
      <div class="jumbotron" id="header">
         <div id="backDr">
            <div id='headerCont'>
               <h1 class="display-1 font-weight-bold">Take our quiz</h1>
               <p class="font-weight-bold">Take this quiz to check your knowledge about general science!</p>
               <p class="font-weight-bold">Questions are a mix between physics, biology, chemistry, astronomy and material technology. </p>
               <p class="font-weight-bold">Have a blast!</p>
            </div>
         </div>
      </div>
      <div id="layout">
         <div id="content">
            <div id="inner-content">
               <div id="kvizzz">
                  <?php
                     if($deoba % 2 == 1){
                        include 'kviz.php';
                     }
                     ?>
               </div>
            </div>
         </div>
         <div id="right-sidebar">
            <div id="sidebarCont">
               <?php
                  include 'listaj.php';
                  ?>
            </div>
         </div>
      </div>

      <div class="container-fluid" id="footer">
         <div class="row">
            <div class="col-md-6">
               <a href="https://cv-josifv.firebaseapp.com/indexGreenEn.html" target="_blank" id="potpisss">Made by Josif Vacic <i class='fas fa-external-link-alt'></i></a><br>
               <a href="https://www.linkedin.com/in/josif-vaci%C4%87-657660165/" target="_blank"><i
                  class='fab'>&#xf08c;</i></a>
               <a href="https://stackoverflow.com/users/9685324/jozev" target="_blank">
               <i class='fab'>&#xf16c;</i></a>
               <a href="https://github.com/JosifV" target="_blank"> <i class='fab'>&#xf092;</i></a>
               <h6>Email: josifvacic@gmail.com</h6>
<!--                <div id="editor"></div>
               <br>
               <button id="cmd" class="btn btn-success btn-block btn-lg">Download Results PDF</button> -->
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
               <form action="#" method="POST">
                  <h4>Conect with me</h4>
                  <input name="imeMejl" class="form-control" type="text" placeholder="Your name"/><br>
                  <textarea name="porukaMejl" class="form-control" placeholder="Your message"></textarea>
                  <br>
                  <button class="btn btn-primary btn-lg btn-block" type="submit" >Send</button>
               </form>
            </div>
         </div>
      </div>
   </div>

<!--    <script>
      var doc = new jsPDF();
      var specialElementHandlers = {
         '#editor': function (element, renderer) {
            return true;
         }
      };

      $('#cmd').click(function () {
         doc.fromHTML($('#rezultati').html(), 15, 15, {
            'width': 170,
                  'elementHandlers': specialElementHandlers
         });
         doc.save('MyQuizResults.pdf');
      });
      </script>  -->
</body>
</html>

