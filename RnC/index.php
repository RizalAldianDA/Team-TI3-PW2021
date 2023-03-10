<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes And Cooks</title>
    <link rel="icon" href="assets/images/logo2.png">
    <link href="assets/css/all.css" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/base-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/grids-responsive-min.css">

</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand"href="index.php"><img width="70" src="assets/images/logo2.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#ff9933 ">
            <span class="navbar-toggler-icon"style="visibility: hidden" ></span><img style="width: 30px" src="assets/images/menu.png">
        </button>
        <div class="collapse navbar-collapse "  id="navbarNav" style="padding-left: 70%">
            <ul class="navbar-nav" >
                <li class="nav-item active">
                    <a class="nav-link" style="color: #ff9933" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="dropdown nav-item ">
                    <a class="nav-link" style="color: #cccccc" href="#">Recipes</a>
                    <ul class="isi-dropdown">
                        <li><a href="foodrecipes.php">Foods</a></li>
                        <li><a href="snackrecipes.php">Snacks</a></li>
                        <li><a href="drinkrecipes.php">Drinks</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #cccccc" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #cccccc" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #cccccc" href="#" data-toggle="modal" 
                        data-target="#myModal">Admin</a>
                </li>
            </ul>
        </div>
</nav>
<div class="other1"></div>
<div class="row align-items-center mx-auto" >
    <div class="col-12 col-lg-8 col-sm-8 order-1 ">
        <h1 class="title-text">
        Recipes<br>
        and Cooks
        </h1>
    </div>

    <div class="col-4 col-lg-3 col-sm-3 order-2">
        <img width="200" class="pure-img-responsive" src="assets/images/logo2.png">
    </div>

    <div class="col-12 col-lg-8 col-sm-8 order-3"  >  
        <p class="description-text">
            <br>
            <br>
            Dewasa ini dunia kuliner semakin populer terutama yang berasal dari luar negeri dan
            informasi pun cepat menyebar melalui media sosial. Semua itu membuat orang Indonesia lebih
            mengenal masakan dari luar negeri dari pada masakan dalam negeri, oleh karena itu dibuat
            sistem berbasis web dengan nama Recipes and Cooks (R&C) untuk memperkenalkan masakan khas
            indonesia supaya generasi muda tetap bisa menikmati masakan khas indonesia dan tetap
            melestarikannya
        </p>
    </div>      
</div>

<div class="recipe">
        <h2 class="content-head is-center">Recipes</h2>
        <br>
        <br>
        <br>
        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3 pure-u-sm-1-1">
                <div>
                    <a href="foodrecipes.php"><img width="100%" src="assets/images/button-food.png"></a>
                </div> 
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3 pure-u-sm-1-1">
                <div >
                   <a href="snackrecipes.php"><img width="100%" src="assets/images/button-snack.png"></a> 
                </div>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-3 pure-u-sm-1-1">
                <div>
                   <a href="drinkrecipes.php"><img width="100%" src="assets/images/button-drink.png"></a> 
                </div>
            </div>
        </div>
</div>
<div class="content-bottom">
        <!--<h2 class="content-head is-center">Dolore magna aliqua. Uis aute irure.</h2>-->

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-lg-2-5 pure-u-md-2-4 pure-u-sm-2-4">
                <img class="logo-bottom" width="70" src="assets/images/logo2.png"> 
                <div class="pure-g">
                  <div class="l-box-lrg pure-u-1 pure-u-lg-1-5 pure-u-md-1-3 pure-u-sm-1-3">
                    <a href="https://www.facebook.com" class="fab fa-facebook"></a>
                  </div>
                  <div class="l-box-lrg pure-u-1 pure-u-lg-1-5 pure-u-md-1-3 pure-u-sm-1-3">
                    <a href="https://www.twitter.com" class="fab fa-twitter"></a>
                  </div>
                  <div class="l-box-lrg pure-u-1 pure-u-lg-1-5 pure-u-md-1-3 pure-u-sm-1-3">
                    <a href="https://www.instagram.com" class="fab fa-instagram"></a>
                  </div>
                </div>       
            </div>
           <div class="l-box-lrg pure-u-1 pure-u-lg-1-5 pure-u-md-1-4 pure-u-sm-1-4">
               <h5 class="title_bottom">Overview</h5>
               <ul class="link_bottom" >
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">Term of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="l-box-lrg pure-u-1 pure-u-lg-1-5 pure-u-md-1-4 pure-u-sm-1-4">
                <h5 class="title_bottom">Recipes</h5>
                <ul class="link_bottom" >
                    <li><a href="#">Foods</a></li>
                    <li><a href="#">Snacks</a></li>
                    <li><a href="#">Drinks</a></li>
                </ul>
            </div>
          <div class="l-box-lrg pure-u-1 pure-u-lg-1-5 pure-u-md-1-4 pure-u-sm-1-4">
                <form class="pure-form pure-form-stacked">
                    <h5 class="title_bottom">Feedbacks</h5>
                    <fieldset>
                        <table>
                        <tr>
                            <th>       
                                <label for="fname"></label>
                                <input id="fname" type="text" placeholder="First Name">
                            </th>
                            <th>
                                <label for="lname"></label>
                                <input id="lname" type="text" placeholder="Last Name">
                                </th>
                        </tr>

                        <tr>
                            <th colspan="2">
                                <label for="email"></label>
                                <input id="email" type="email" placeholder="Your Email">
                            </th>
                        </tr>

                        <tr>
                            <th colspan="2">
                                 <textarea name="" id="" cols="35" rows="10" placeholder="Comment"></textarea>
                            </th>
                        </tr>

                        </table>

                        <button type="submit" class="pure-button">SEND</button>
                    </fieldset>
                </form>
            </div>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" style="background-clolor: #333333;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>     
            
        </div>
      </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>