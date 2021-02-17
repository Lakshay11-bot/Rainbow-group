<?php
    
    if (isset($_POST["submit"])){
        
        try{
        
            $subject = "Message sent to TheRainbowGroup from " . $_POST["email"];
        
            $body = "From: " . $_POST["name"] . "(" . $_POST["email"] . ")\n";
            $body .= $_POST["message"];
            
            $headers = [
                "From" => "noreply@therainbowgroup.in"
            ];
            
            $forwardTo = "anshu@therainbowgroup.in";
        
            mail($forwardTo, $subject, $body, $headers);
            
            $sentMail = true;
            
        } catch(Exception $e){
            die("An error occurred. Please contact site administrator.");
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script type ="text/javascript" src="jquery.min.js"></script>
     <style text="text/css">
     
      

      body{


        font-family: 'Roboto', sans-serif;
      }
          #front{
              padding-top: 200px;
              padding-left:90px;
              text-align :right;
              background-color: cyan;
              background-image:linear-gradient(to bottom, rgba(255,255,255,0.6) 100%,rgba(255,255,255,0.9) 100%), url("images/FRONT.jpg");
              background-repeat: no-repeat;
              background-size: cover;
              height:400px;
          }
      
          #leeds{
              border-top: 5px solid violet; 
              padding-top:180px;
              text-align:right;
              margin-top: -32px;
              height: 370px;
              background-image:linear-gradient(to bottom, rgba(255,255,255,0.6) 0%,rgba(255,255,255,0.9) 90%), url("images/soles1.jpg");
              background-repeat: no-repeat;
              background-size: cover;
              color:black;
              
          }
          
          #button{
              
              color:black;
             
          }
          #button:hover{

            background-color:brown;
          }
          #rp{
              border-top: 5px solid indigo; 
              padding-left:40px;
              margin-top: -32px;
              text-align: right;
              height: 400px;
              color:black;
              background-image: url("images/black-and-green.png");
              background-color:white;
              background-repeat: no-repeat;
              
          }
          #ri{
              border-top: 5px solid blue; 
                padding-left:40px;
                margin-top: -30px;
                text-align: center;
                height: 350px;
                background-color:white;
                background-image:url("images/RI.jpg"),url("images/RI2.jpg");
                background-position: 0,105%;
                background-repeat: no-repeat;
                color:black;
            
            
                
              
              }
          #wc{
              border-top: 5px solid green; 
              margin-top:-32px;
              text-align: right;
              height: 350px;
              background-color:lightblue;
              background-image:linear-gradient(to bottom, rgba(255,255,255,0.6) 80%,rgba(255,255,255,0.9) 100%),url("images/wc.jpg");
              
              background-repeat: no-repeat;
             background-size:cover;
              color:black;
              font-weight: bolder;
              
              
          }
          
          
          #footer{
              border-top: 5px solid yellow;
              padding-top: 30px;
              margin-top: -32px;
              height: 240px;
              background-color: gainsboro;
              color:green;
              text-align: center;
          }
          
          
          
            #contact{
              border-top: 5px solid red;
              margin-top: -32px;
              height: 500px;
              background-color: black;
              background-image: url("images/map.png");
              color:white;
              padding-top: 40px;

          }
         
          
          .bg-light{


            background-color: transparent !important;
            font-weight: bolder !important;
          }

          .bg-light.scrolled{
              
            background-color: white !important;
            
          }

          #modal-bur{
            border:solid 1px black;
            margin: 50px 150px;
            height: 150px;
            width: 150px;

          }
        #modal-pap{
          border:solid 1px black;
            margin: 50px 130px;
            height: 200px;
            width: 200px;


        }          
         
        #modal-pvc{
          border:solid 1px black;
            margin: 50px 130px;
            height: 200px;
            width: 200px;
                    


        }  
        #modal-pvc1{
          border:solid 1px black;
            margin: 50px 130px;
            height: 200px;
            width: 300px;
                    


        }  
           
        .modal-header{


          background-color: black;
          color:white;
        }



        #modal-leeds{
          border:solid 1px black;
            margin: 50px 130px;
            height: 200px;
            width: 400px;
          }

        

        
        a{

          color:green;
        }
        
        #border{
            
            border-right:2px solid grey;
            
            margin-right:4px;
        }
        #red{
            color:red;
        }
        
        #animation{
            
             animation-name: example;
              animation-duration: 4s;
              animation-iteration-count:infinite;
        }
           @keyframes example{
            0%   {color: violet;}
             16%  {color: indigo;}
            32%  {color: blue;}
            48% {color: green;}
            65%{color:yellow;}
            82%{color:orangered;}
            100%{color:red;}
          }
          
         
      </style>

    <title>Rainbow Group</title>
    
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T6VH0B9P37"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T6VH0B9P37');
</script>      
      
  </head>
  <body data-spy="scroll" >
      <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light"  >
  <a class="navbar-brand" href="#">Rainbow Group</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsupportcontent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsupportcontent">
    <ul class="navbar-nav ml-auto">
      
      
     
     
        <li class="nav-item">
        <a class="nav-link" href="#ri">Rainbow International</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#rp">Rainbow polymers</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#wc">Win corp</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#leeds">Leeds corp</a>
      </li>
    </ul>
  </div>
</nav>



    <div class="jumbotron jumbotron-fluid" id="front">
  <div class="container">
    <h1 class="display-4">THE <span id="animation">RAINBOW</span> GROUP</h1>
    <p class="lead">Every deal demands Faith and Commitment!.</p>
  </div>
</div>
      

    
      <div class="jumbotron jumbotron-fluid" id="ri">
  <div class="container">
    <h1 class="display-4"><span id="animation">RAINBOW</span> INTERNATIONAL</h1>
    <p class="lead">Specialization in the recycling of EVA Polymer .</p>
      <button type="button" id="button" class="btn" data-toggle="modal" data-target="#exampleModal2">Know more</button>
  </div>
</div>


 <div class="jumbotron jumbotron-fluid" id="rp">
  <div class="container">
    <h1 class="display-4"><span id="animation">RAINBOW</span> POLYMERS</h1>
    <p class="lead"> Specialization in the recycling of rubber.</p>
      <button type="button" id="button" class="btn" data-toggle="modal" data-target="#exampleModal1">Know more</button>
  </div>
</div>
     <div class="jumbotron jumbotron-fluid" id="wc">
  <div class="container">
    <h1 class="display-4">WIN CORP</h1>
    <p class="lead">Deals in the trading of rubbers and plastic polymers.</p>
      <button type="button" id="button"  class="btn" data-toggle="modal" data-target="#exampleModal3">Know more</button>
  </div>
</div>
<div class="jumbotron jumbotron-fluid" id="leeds">
  <div class="container">
    <h1 class="display-4">LEEDS CORPORATION</h1>
    <p class="lead">Leeds corporations deals in the manufacturing of soles for shoes .</p>
      <button type="button" id="button" class="btn" data-toggle="modal" data-target="#exampleModal4">Know more</button>
  </div>
</div>


<div id="contact">
  <div class="container" >
    <form method="post" action="/">
        <?php if(isset($sentMail)):?>
            <script>
                alert("Your mail was sent!");
            </script>
        <?php endif; ?>
      <h1>Contact us</h1>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="YOUR NAME*" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="YOUR EMAIL*" required />
      </div>
      <div class="form-group" >
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="3" required></textarea>
      </div>
      <div>
        <button type="submit" name="submit" class="btn btn-primary">Submit!</button>
      </div>
    </form>

      
</div>
</div>









      
      <div id="footer">
            <div class="container">
          
                <p><img src="images/diadiem.png"> Head office: 12-13 Waryana Industrial complex , PTC street , Leather Complex Road , Jalandhar city , Pin -144021, Punjab (India). </p>
                <hr>
                <p><img src="images/cellphone.png"> Mobile:<a href="tel:+91-9815500783">+91-9815500783</a>,<a href="tel:9815700783">9815700783</a> <span id="border"></span> Telephone:<a href="tel: +91-181-2650783">+91-181-2650783</a>,<a href="tel:+91-181-2651783">2651783</a></p>
                <hr>
                <p><img src="images/mail.png"> <a href = "mailto: anshu@therainbowgroup.in">anshu@therainbowgroup.in</a>    
                <p>&copy; 2020 Designed by WebStylus</p>
          
          </div>
      </div>



      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">RAINBOW POLYMER</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="images/bur.jpg" id="modal-bur">
              <p>Rainbow polymer provides the recycled rubber material.</p>
              <p>In the above image you can see black recycled rubber graneuls (BURA)</p>
            </div>
            
          </div>
        </div>
      </div>


      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">RAINBOW INTERNATIONAL</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
              <img src="images/papad.jpg" id="modal-pap">
              </div>
              <div class="col-sm-4">
              <img src="images/pappad.jpg" id="modal-pap">
              </div>
              </div>
              <p>Rainbow International is the manufacturer of recycled EVA SHEETS used in making of slippers</p>
              <p>These EVA recycled sheets come in various colors and is supplied to the buyers as per their demands!
              </p>
            </div>
            
          </div>
        </div>
      </div>



      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">WIN CORP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class=row>
                    
              <div class="col-sm-4">
              <img src="images/WIN BACKGROUND.jpg" id="modal-pvc">
              </div>
               <div class="col-sm-4">
              <img  src="images/Polymers.jpg" id="modal-pvc1">
              </div>
              <p>Win Corp deals with the trading of rubber and plastic polymers.</p>
              <p>.......</p>
            </div>
            
          </div>
        </div>
      </div>
      </div>

    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">LEEDS CORP</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="images/LEEDS.jpg" id="modal-leeds">
              <p>leeds Corp is known for the manufacturing of shoes soles.</p>
              <p>.......</p>
            </div>
            
          </div>
        </div>
      </div>


      <script type="text/javascript">
      
      
      
       

        $(window).scroll(function(){
            $('nav').toggleClass('scrolled',$(this).scrollTop()>50);


        });
         function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
};
$("#submit-x").click(function(){
            
            var errormessage="";
    
            
            
            if($("#name").val()==""){
                
                errormessage +="please enter name\n"
            }
            if($("#email").val()==""){
                
                errormessage+="please enter email\n"
            }
            
            if($("#message").val()==""){
                
                errormessage +="please enter message\n "
            }
            if($("#email").val()!="")
            {
                
                if ((isEmail($("#email").val())== false))
                {
        
            errormessage+="Your email address is not valid\n"
    
            }
            }
            
    
    
        if(errormessage!=""){
            
            alert(errormessage);
        }
        else
        alert("thanks for submitting")
});
     

   
    
      </script>
      
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    
 
    
  </body>
</html>