<!DOCTYPE html>
<html lang="en">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Fiche patient</title>
	</head>
	<body class="bodyh">



    <div class="container">
    	<div class="row">
    		<h2>Patients enregistrés</h2><br>
    <div class="bs-docs-example">

      <div class="container">
  	<div class="row">

          <div class="span4">
          <form class="form-search">
              <div class="input-append">
                  <input type="text" class="span2">
                  <button type="submit" class="btn">Search</button>
              </div>
          </form>
          </div>
      </div>
  </div>


    	</div>
    </div>


    <div class="row">
      <h2>Recherche consultations </h2><br>
  <div class="recherche">

    <div class="container">
	<div class="row">

        <div class="span4" >
        <form class="form-search">
            <div class="input-append">
                <input type="text" class="span2">
                <button type="submit" class="btn">Search</button>
            </div>
        </form>
        </div>
    </div>
</div>

    <div class="dateform"><p>Date</p>
 <input type="text" id="date" name="date" class="form-control" placeholder="date" required>

                        <br><br>
  <button type="submit" class="btn btn-primary" id="submit">OK</button>
</div>
    </div>
  </div>


        <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.js" />



		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
