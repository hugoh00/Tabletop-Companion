<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">	
	<link rel='stylesheet' href="<?php echo base_url('public\css\bootstrap.css') ?>"/>
	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
    <script src="<?php echo base_url('public\javascript\bootstrap.js') ?>"></script>
	<title>Template</title>
</head>

<body style="background-color: #be5830;">

<!-- Template created 23/03/2021 -->
<!-- Change the ID to the view name and enter content within the div according to your design -->
   
    <div class="container bg-gradient-danger" id="ENTER VIEW NAME" style="background-color: #f4d032;">
        <!-- enter content here -->
        <!-- will be pushed into the main project once done-->
        <h3>Settlers of Catan</h3>
        <div class="container">
            <div class="row">
                <div class="col">
                <h6>Game Description</h6>
                <p class="lead"> Settlers of Catan is a strategy game where you
                 have discovered new an uncharted island named Catan,
                 but you aren’t the only ones to land here, race other players to settle the island.
                  You build roads and new settlements that eventually become cities.  </p>
                </div>
                <div class="col">
                <img src="<?php echo base_url('public\images\Catan-2015-boxart.png') ?>" width="100%" height="80%" class="d-inline-block align-top" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
	
</html>