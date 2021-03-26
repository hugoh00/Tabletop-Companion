<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
a, a:hover,a:visited, a:focus {
    text-decoration:none;
    color:white;
}
</style>

<body style="background-color: #be5830;">
<br/>
<!-- Template created 23/03/2021 -->
<!-- Change the ID to the view name and enter content within the div according to your design -->
   
    <div class="container bg-gradient-danger" id="mainContent" style="background-color: #f4d032;">
        <!-- enter content here -->
        <!-- will be pushed into the main project once done-->
        <h3 class="display-4">Settlers of Catan</h3>
        <!-- genre tags -->
        <span class="badge badge-pill badge-dark">Strategy</span> <span class="badge badge-pill badge-dark">Trading</span> <span class="badge badge-pill badge-dark">Family</span>
        <div class="container">
        </br>
            <div class="row">
                <div class="col">
                    <!-- game description -->
                <h4>Game Description</h4>
                <p class="lead text-justify"> 
                    The women and men of your expedition build the first two settlements.
                    Fortunately, the yet uninhabited land is rich in natural resources. You
                    build roads and new settlements that eventually become cities. Will you
                    succeed in gaining supremacy on Catan? Barter trade dominates the scene.
                    Some resources you have in abundance, other resources are scarce. Ore
                    for wool, brick for lumber - you trade according to what is needed for
                    your current building projects. Proceed strategically! If you found your
                    settlements in the right places and skillfully trade your resources,
                    then the odds will be in your favor. But your opponents are smart too.
                </p>
                </div>
                <div class="col">
                <img src="<?php echo base_url('public\images\Catan-2015-boxart.png') ?>" width="100%" height="80%" class="d-inline-block align-top" alt="">
                &nbsp;
                
                <!-- review scores -->
                <!-- php to hide and display items 
                low score red block 
                medium score yellow block 
                good score green block -->
                <?php
                    /*=============================================
                    *         Review Scores NEEDS CHANGINGS       *
                    =============================================*/
                    if ($variable >= 80) {
                        // good score
                        echo <<<_END
                        <div class="card border-success mb-3 bg-dark" style="text-align: center;">
                            <div class="card-header text-success">Review Score of $variable</div>
                        </div>
_END;
                    } elseif ($variable >= 40) {
                        // medium score
                        echo <<<_END
                        <div class="card border-warning mb-3 bg-dark" style="text-align: center;">
                            <div class="card-header text-warning">Review Score of $variable</div>
                        </div>
_END;
                    } else {
                        // bad score
                        echo <<<_END
                        <div class="card border-danger mb-3 bg-dark" style="text-align: center;">
                            <div class="card-header text-danger">Review Score of $variable</div>
                        </div>
_END;
                    }
                ?>

                <!-- button to buy the game links to amazon -->
                <button class="btn btn-dark btn-md btn-block"><a href="https://www.amazon.co.uk/Catan-CN3071-Board-Game-Multi-color/dp/B00U26V4VQ">Purchase</a></button>
                </div>
            </div>
        </div>
    &nbsp;
    </div>
</body>
	
