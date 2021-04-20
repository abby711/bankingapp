


<!DOCTYPE html>
<html>
<head>
	<title>XYZ BANKING APPLICATION</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="home.css">
	<script type="text/javascript">
		$(function() {

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

});
	</script>
</head>
<body style="background: #7777ff">
	<nav class="navbar navbar-default navbar-fixed-top"style="background-color:">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top"><b>BANKING SYSTEM</b></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#customers"><b>VIEW CUSTOMERS</b></a>
                </li>
                <li class="page-scroll">
                    <a href="#transactions"><b>TRANSACTIONS</b></a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header id="page-top" style="background-color: #18bc9c">
    <div class="container" style="">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="http://ironsummitmedia.github.io/startbootstrap-freelancer/img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">XYZ BANKING APPLICATION</span>
                    <hr class="star-light">
                    <p class="skills">By Abirami Somasundaram</p>

                </div>
            </div>
        </div>
    </div>
</header>
<div class="content-wrapper">

	<section class="primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>A simple web application that merely transfers credits from one existing user to other.</p>
                </div>
                <div class="col-lg-4">
                    <p>Developed using HTML, CSS, Php and MySql as database.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="success" id="customers" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Customers</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="btn-toolbar">

</div>
<a href="customers.php" style="text-decoration: none;">
	<button class="btn btn-lg btn-default " style="background-color: #fff;  margin:0 auto; display:block; ">Tap to view all customers</button></a>

        </div>
    </section>
    <section class="primary" id="transactions" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Transaction History</h2>
                    <hr class="star-light">
                </div>
            </div>

            <a href="history.php" style="text-decoration: none;">
							<button class="btn btn-lg btn-default " style="background-color: #18bc9c;  margin:0 auto; display:block; ">Tap to view all Transactions</button></a>
</div>



    </section>


</div>

</body>
</html>
