</head>
<body>

<?php
  include_once("connection.php"); 
?>
      <div class="header-middle" style="background: url(images/header.jpg)"><!--header-middle-->
          <div class="container" >
              <div>
                  <div class="col-sm-6" >
                      <div class="logo pull-left" >
                          <a href="index.php">
                          <img src="images/logosportshop.jpg" width="200" height="70"></a>
                      </div>
                  </div>  
              </div>
          </div>
      </div><!--/header-middle-->
  
      <div class="header-bottom"><!--header-bottom-->
          <div class="container">
              <div class="row">
                  <div class="col-sm-9">
                      <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>
                      <div class="mainmenu pull-left">
                          <ul class="nav navbar-nav collapse navbar-collapse">
                              <li><a href="index.php" class="active">Home</a></li>
                              <li class="dropdown"><a href="#">Shoes of Supplier<i class="fa fa-angle-down"></i></a>
                                  <ul role="menu" class="sub-menu">
                                      <li><a href="?page=adidas">Adidas</a></li>
                                      <li><a href="?page=nike">Nike</a></li> 
                                      <li><a href="?page=puma">Puma</a></li>
                                      <li><a href="?page=jordan">Jordan</a></li> 
                                  </ul>
                              </li> 
                              <li class="dropdown"><a href="#">Management<i class="fa fa-angle-down"></i></a>
                                  <ul role="menu" class="sub-menu">
                                      <li><a href="?page=category_management">Supplier</a></li>
                                      <li><a href="?page=product_management">Product</a></li>
                                  </ul>
                              </li>
                              <?php
                              if(isset($_SESSION['us']) && $_SESSION['us'] != ""){
                              ?>
                              <li><a href="?page=update_customer"><i class="fa fa-lock"></i>Hi, <?php echo $_SESSION['us']?></a></li>
                              <li><a href="?page=logout"><i class="fa fa-crossharis"></i>Logout</a></li>
                              <?php
                              }
                              else{
                              ?>
                              <li><a href="?page=login">
                              <i class="fa fa-lock"></i>Login</a></li>
                              <li><a href="?page=register"><i class="fa fa-star"></i>Register</a></li>
                              <?php
                              }
                              ?>
                          </ul>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
      </div>
  </header>