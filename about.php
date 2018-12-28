                   <!DOCTYPE html>
<html lang="en">
<head>
  <title>IMS VJTI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
	  margin-bottom: 50px;
      border-radius: 0;
    }
	
	
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 100%}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      height: 100%;
    }

	h1 {font-size: 70px}

	h2 {font-size: 40px}

	p {font-size: 25px }

	body
    {
     background-image:url("bg.jpg");
     background-size:100%;
     background-repeat:no-repeat;
	 background-attachment:fixed;
    }
       @media (max-width: 300px) {
  .carosel-item {
    width: 100%;
  }
}
@media (min-width: 300px) {
  .carosel-item {
    width: 50%;
  }
}
@media (min-width: 500px) {
  .carosel-item {
    width: 33.333%;
  }
}
@media (min-width: 768px) {
  .carosel-item {
    width: 25%;
  }
}
.carosel {
  position: relative;
  background-color: none;
}
.carosel-inner {
  white-space: nowrap;
  overflow: hidden;
  font-size: 0;
}
.carosel-item {
  display: inline-block;
}
.carosel-control {
  position: absolute;
  top: 50%;
  padding: 15px;
  box-shadow: 0 0 10px 0px rgba(0, 0, 0, 0.5);
  transform: translateY(-50%);
  border-radius: 50%;
  color: rgba(0, 0, 0, 0.5);
  font-size: 30px;
  display: inline-block;
}
.carosel-control-left {
  left: 15px;
}
.carosel-control-right {
  right: 15px;
}
.carosel-control:active,
.carosel-control:hover {
  text-decoration: none;
  color: rgba(0, 0, 0, 0.8);
}

  </style>
  <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    function goBack()
    {
    window.history.back()
    }
</script>

</head>
<body>

<nav class="navbar navbar-inverse" style="height: 90px; font-size: 25px">
  <div class="container-fluid" style="padding-bottom:20px; padding-top:20px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <img src="logo.png" class="pull-left" height="50px">
      <a class="navbar-brand" href="#" style="margin-left: 5px; font-size: 25px">INTEGRATED MANAGEMENT SYSTEM VJTI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">

		<li><a href="about.php">About </a></li>
                <li><a href="contact.php">Contact us</a></li>
    </div>
  </div>
</nav>

<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-md-12 text-center">
       <h1>Welcome</h1>
       <p> This is basically an online booking system to reduce the hassle that everybody goes through while booking offline. There is a major chaos and we face it ourselves being students of VJTI college. Therefore we decided to design this site and make it easy for us as well as everyone around us</p>
       <p> We have provided a login for user using which they can book a slot as per their wish and make use of the facilities provided. An admin will be in charge of everything and will have full control over the functioning of the site. He has the power to cancel, update bookings. </p>
       <p> Hope you have a great experience using this site and if you face any issues please feel free to contact us. </p>
    </div>
    	<div class="col-md-12 text-left" style="margin-top: 50px;">
            <div class="carosel" id="carosel1">
  <div class="carosel-inner">
    <img class="carosel-item" src="tt.jpg" />
    <img class="carosel-item" src="audi.jpg" />
    <img class="carosel-item" src="chess.jpg" />
    <img class="carosel-item" src="hall.jpg" />
  </div>
</div>

  </div>
</div>

</body>
</html>
