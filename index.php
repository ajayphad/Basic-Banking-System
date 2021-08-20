<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="description" content="Bank Of SParks" />
    <meta name="author" content="Ajay Phad" />
    <meta name="keywords" content="Bank, Spark foundation, PHP, HTML, CSS, JavaScript" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    
    <title>Bank Of Sparks</title>  
</head>

<body style="background-color:powderblue;">
    <?php
      include 'header.php';
    ?>
    <?php
      include 'navbar.php';
    ?>

    <!-- Start Main area -->
    <section class="site-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">Bank Of Sparks</h3>
                    <h4 class="title-text">The Bank Of Sparks consists of many activities that can be done through a number of financial institutions that accept deposits from individuals and other entities, and then use this money to offer loans, and to invest and earn profit.</h4>
                </div>
                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="img\Bank1.jpg" alt="banner-img" class="img-fluid">
                    <hr>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main area -->
    
    <!-- Start Service area -->
    <section class="container" id="services">
        <h2 class="heading">Our Services</h2>
        <div class="container  text-center">
          <div class="row">
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
            <hr>
              <img src="img\view customer.jpeg" class="card-img-top mt-3 img" alt="Responsive image" >
              <div class="card-body">
                <h5 class="card-title">View Customers</h5>
                <p class="card-text">View all Customer's data</p><br><br>
                <a href="transfermoney.php" class="btn btn-primary">View Customers</a>
              </div>
            </div>
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="img\view transaction.jpeg" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title">View Transactions</h5>
                <p class="card-text">View all the past transactions happened between different accounts</p><br>
                <a href="transactionhistory.php" class="btn btn-primary">View Transactions</a>
              </div>
            </div>
            <div class="card col-md-3 mx-auto" style="width: 18rem;">
              <img src="img\Transaction.png" class="card-img-top mt-3 img" alt="Responsive image">
              <div class="card-body">
                <h5 class="card-title" id="harry">Transfer Money</h5>
                <p class="card-text"> Transfer Money between multiple accounts</p>
                <a href="transfermoney.php" class="btn btn-primary">Transfer Money</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
    <!-- End Service area -->

    <!-- Start About area -->
    <section id="about" class="site-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12  about-image">
                  <img src="img\Bank about.jpg" alt="banner-img" class="img-fluid">
                    
                </div>
                <div class="col-lg-6 col-md-12 about">
                  <h2>About</h2>
                  <p><strong>The Bank Of Sparks</strong> is just an project under the The sparks foundation as a part of intersnship. In which a dynamic website 
                    has to be created with dummy 10 users and transaction to be made between them.
			            <br>Here i have used HTML,CSS as a frontend and PHP as backend and MYSQL as a database.   
                  <br></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End About area -->

    <!-- Start Footer area -->   
    <?php
      include 'footer.php';
    ?>
    <!-- End Footer area -->
</body>
</html>
