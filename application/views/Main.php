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
        <span class="badge badge-pill badge-dark"><h6>Strategy</h6></span> <span class="badge badge-pill badge-dark"><h6>Trading</h6></span> <span class="badge badge-pill badge-dark"><h6>Family</h6></span>
        <span class="badge badge-pill badge-dark"><h6>Adventure</h6></span> <span class="badge badge-pill badge-dark"><h6>Exploration</h6></span> <span class="badge badge-pill badge-dark"><h6>Luck</h6></span>
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
                <img src="<?php echo base_url('public\images\Catan-2015-boxart.png') ?>" class="rounded mx-auto d-block" alt="">
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
                <button class="btn btn-primary btn-md btn-block"><a href="https://www.amazon.co.uk/Catan-CN3071-Board-Game-Multi-color/dp/B00U26V4VQ">Purchase at <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 1100 1000"><path d="M2 776c3.333-5.333 8.666-5.667 16-1 166.666 96.667 348 145 544 145 130.666 0 259.666-24.333 387-73 3.333-1.333 8.166-3.333 14.5-6 6.333-2.667 10.833-4.667 13.5-6 10-4 17.833-2 23.5 6 5.666 8 3.833 15.333-5.5 22-12 8.667-27.334 18.667-46 30-57.334 34-121.334 60.333-192 79-70.667 18.667-139.667 28-207 28-104 0-202.334-18.167-295-54.5C162.333 909.167 79.333 858 6 792c-4-3.333-6-6.667-6-10 0-2 .666-4 2-6zm301-285c0-46 11.333-85.333 34-118 22.666-32.667 53.666-57.333 93-74 36-15.333 80.333-26.333 133-33 18-2 47.333-4.667 88-8v-17c0-42.667-4.667-71.333-14-86-14-20-36-30-66-30h-8c-22 2-41 9-57 21s-26.334 28.667-31 50c-2.667 13.333-9.334 21-20 23l-115-14c-11.334-2.667-17-8.667-17-18 0-2 .333-4.333 1-7 11.333-59.333 39.166-103.333 83.5-132C451.833 19.333 503.666 3.333 563 0h25c76 0 135.333 19.667 178 59a190.52 190.52 0 0 1 18.5 21.5c5.666 7.667 10.166 14.5 13.5 20.5 3.333 6 6.333 14.667 9 26 2.666 11.333 4.666 19.167 6 23.5 1.333 4.333 2.333 13.667 3 28 .666 14.333 1 22.833 1 25.5v242c0 17.333 2.5 33.167 7.5 47.5s9.833 24.667 14.5 31c4.666 6.333 12.333 16.5 23 30.5 4 6 6 11.333 6 16 0 5.333-2.667 10-8 14-55.334 48-85.334 74-90 78-8 6-17.667 6.667-29 2-9.334-8-17.5-15.667-24.5-23s-12-12.667-15-16-7.834-9.833-14.5-19.5c-6.667-9.667-11.334-16.167-14-19.5-37.334 40.667-74 66-110 76-22.667 6.667-50.667 10-84 10-51.334 0-93.5-15.833-126.5-47.5S303 549 303 491zm172-20c0 26 6.5 46.833 19.5 62.5S525 557 547 557c2 0 4.833-.333 8.5-1 3.666-.667 6.166-1 7.5-1 28-7.333 49.666-25.333 65-54 7.333-12.667 12.833-26.5 16.5-41.5 3.666-15 5.666-27.167 6-36.5.333-9.333.5-24.667.5-46v-25c-38.667 0-68 2.667-88 8-58.667 16.667-88 53.667-88 111zm420 322c1.333-2.667 3.333-5.333 6-8 16.666-11.333 32.666-19 48-23 25.333-6.667 50-10.333 74-11 6.666-.667 13-.333 19 1 30 2.667 48 7.667 54 15 2.666 4 4 10 4 18v7c0 23.333-6.334 50.833-19 82.5-12.667 31.667-30.334 57.167-53 76.5-3.334 2.667-6.334 4-9 4-1.334 0-2.667-.333-4-1-4-2-5-5.667-3-11 24.666-58 37-98.333 37-121 0-7.333-1.334-12.667-4-16-6.667-8-25.334-12-56-12-11.334 0-24.667.667-40 2-16.667 2-32 4-46 6-4 0-6.667-.667-8-2-1.334-1.333-1.667-2.667-1-4 0-.667.333-1.667 1-3z"/></svg>  </a></button>
                </div>
            </div>
        </div>
        </div>
	
