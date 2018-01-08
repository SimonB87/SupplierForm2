<?php
include "process.php";
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='designer' content='Simon Buryan, simon.buryan@seznam.cz'>
  <meta name='date' content='Jan. 08, 2018'>
  <meta name="description" content="Purchase order">

	<title>ČEZ EP s.r.o. | Dotaznik na dodání nového dodavatele</title>

	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style2.css">
</head>

<body>


	<div class="navbar2 navbar-default navbar-fixed-top" style="background-color:#f4511e;">
	  <div class="container">
	   <div class="navbar-header">
		  <br>
      <a class="navbar2-brand" style="color:white; margin-left:10px ;font-size: 20px; letter-spacing: 4px; text-decoration: none"><a href="http://www.cezep.cz"><strong>Cez </strong> EP, s.r.o.</a></a>
      <p></p>
	 </div>
 </div>
 </div>



<!-- Title of the web -->
<div class="jumbotron">
	<div class="container">
		<br>
		<h2>ČEZ energetické Produkty, s.r.o.</h2>
		<h4>Dotaznik pro vložení nového dodavatele</h4>
		<h4>* ... Pole je povinné.</h4>
	<!-- PHP form -->
	<?php if (isset($msg)) { echo '<div id="formmessage"><p>', $msg , '</p></div>'; } ?> <!-- div to print out errors  -->
		<form id="myform" name="theform" accept-charset="utf-8" class="group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			<span id="formerror" class="error"></span> <!-- span to print out errors  -->

				<div class="col-sm-4 col-xs-12 form-group">
					<label for="myemail">Email zaměstnance ČEZ EP*</label>
					<input type="email" name="myemail" class="form-control" id="myemail" title="Please enter your email" placeholder="Vložte email cez.cz" required value="<?php if (isset($myemail)) { echo $myemail; } ?>" />
					<?php if (isset($err_myemail)) { echo $err_myemail; } ?>
	      </div>

				<div class="col-sm-4 col-xs-12 form-group">
					<label for="mycompany">Název dodavatele*</label>
					<input type="text" name="mycompany" class="form-control" id="mycompany" title="Please enter your company name" placeholder="Add company name." required value="<?php if (isset($mycompany)) { echo $mycompany; } ?>" />
	      </div>

				<div class="col-sm-4 col-xs-12 form-group">
					<label for="myid">IČO*</label>
					<input type="number" name="myid" class="form-control" id="myid" title="Please enter your company name"  required value="<?php if (isset($myid)) { echo $myid; } ?>" />
	      </div>

				<div class="col-sm-4 col-xs-12 form-group">
				 <label for="myadres">Adresa</label>
				 <input type="text" class="form-control" name="myadres" id="myadres" title="Zadejte adresu" placeholder="Zadejte adresu" value="<?php if (isset($myadres)) { echo $myadres; } ?>" />
			  </div>

			 <div class="col-sm-4 col-xs-12 form-group">
				<label for="corname">Jméno kontaktní osoby</label>
				<input type="text" class="form-control" name="corname" id="corname" title="Please enter your name" placeholder="Last, First" value="<?php if (isset($corname)) { echo $corname; } ?>" />
			 </div>

				<div class="col-sm-4 col-xs-12 form-group">
				 <label for="cormail">Email kontaktní osoby</label>
				 <input type="email" class="form-control" name="cormail" id="cormail" title="Please enter your name" placeholder="Kontaktní email dodavatele" value="<?php if (isset($cormail)) { echo $cormail; } ?>" />
			  </div>

			 <div class="col-sm-4 col-xs-12 form-group">
				 <label for="corfone">Telefon Kontaktní osoby</label>
				 <input type="number" name="corfone" class="form-control" id="corfone" title="Please enter contact phone number."  value="<?php if (isset($corfone)) { echo $corfone; } ?>" />
			 </div>

			 <div class="col-sm-4 col-xs-12 form-group">
				<label for="corcena">Cenová nabídka</label>
				<input type="text" class="form-control" name="corcena" id="corcena" title="Please enter ..." placeholder="Put price offer here." value="<?php if (isset($corcena)) { echo $corcena; } ?>" />
			 </div>

			<div class="col-sm-12 col-xs-12 form-group">
				<label for="mycomments">Komentář: (html není povoleno)</label>
				<textarea name="mycomments" class="form-control" id="mycomments" rows="5"><?php if (isset($mycomments)) { echo $mycomments; } ?></textarea>
			</div>

			<button type="submit" name="action" value="submit" class="btn btn-default pull-right">Odeslat žádost</button>
		</form>
	</div>
</div>

</body>
</html>
