    <div class="container bg-gradient-danger" id="gamehosting"  style="background-color: #f4d032;">
        <!-- enter content here -->
        <!-- will be pushed into the main project once done-->
        <br>
        <h3 class="display-4" style="text-align:center;">Game Hosting</h3>
        <br>
        <br>

        <!-- select how many players -->
        <div class="container" id="gameSetup">
         <!-- Game Select -->
			<div class="form-group">
				<select class="form-control selectpicker mx-auto" style="width:50%;" id="playerSelect" name="playerSelect">
                    <option value="X">Select Amount of Players</option>
					<option value="2">2</option>
					<option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
				</select>	
                &nbsp;
                <!-- button to start game -->
                <div class="col text-center">
                    <button type="button" onclick="startGame()" class="btn btn-dark">Start Game</button>
                </div>
			</div>
        
        </div>
        <!-- overarching container that hides when game isnt started -->
        <div class="container" id="gameActive">
            <!-- digital dice to go here -->
            <div class="col text-center">
                <div id="digitaldice"> 
                    <div class="table-responsive-md">
                            <table class="table table-borderless" style="background-color:#f4d032;">
                                <tbody id="dice"></tbody>
                            </table>
                    </div>
                </div>
                <button type="button" onclick="rollDice()" class="btn btn-dark btn-lg">Roll Dice</button>
            </div>
            </br>
            <!-- storing the svgs for later use -->

                <!-- Player SVG -->
                <?php 
                    $player = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                    <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
                    <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
                    </svg>';
                ?>
                <!-- Brick SVG -->
                <?php 
                    $brick = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bricks" viewBox="0 0 16 16">
                    <path  d="M0 .5A.5.5 0 0 1 .5 0h15a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H14v2h1.5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5H2v-2H.5a.5.5 0 0 1-.5-.5v-3A.5.5 0 0 1 .5 6H2V4H.5a.5.5 0 0 1-.5-.5v-3zM3 4v2h4.5V4H3zm5.5 0v2H13V4H8.5zM3 10v2h4.5v-2H3zm5.5 0v2H13v-2H8.5zM1 1v2h3.5V1H1zm4.5 0v2h5V1h-5zm6 0v2H15V1h-3.5zM1 7v2h3.5V7H1zm4.5 0v2h5V7h-5zm6 0v2H15V7h-3.5zM1 13v2h3.5v-2H1zm4.5 0v2h5v-2h-5zm6 0v2H15v-2h-3.5z"/>
                    </svg>';
                ?>
                <!-- Grain SVG -->
                <?php 
                    $grain = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet-half" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                    </svg>';
                ?>
                <!-- Ore SVG -->
                <?php 
                    $ore = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-minecart" viewBox="0 0 16 16">
                    <path d="M4 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8-1a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM.115 3.18A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 14 12H2a.5.5 0 0 1-.491-.408l-1.5-8a.5.5 0 0 1 .106-.411zm.987.82l1.313 7h11.17l1.313-7H1.102z"/>
                    </svg>';
                ?>
                <!-- Lumber SVG -->
                <?php 
                    $lumber = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tree" viewBox="0 0 16 16">
                    <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
                    </svg>';
                ?>
                <!-- Wool SVG -->
                <?php 
                    $wool = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags" viewBox="0 0 16 16">
                    <path d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                    <path d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
                    </svg>';
                ?>
                
            <!-- dynamic table -->
            
            <div class="table-responsive-md">
                <table class="table table-dark">
                    <thead class="thead-dark">
                        <tr class="table-info">
                            <th scope="col">Player <?php echo $player;?>
                            </th>
                            <!-- resources -->
                            <th scope="col">Brick <?php echo $brick;?>
                            </th>
                            <th scope="col">Grain <?php echo $grain;?>
                            </th>
                            <th scope="col">Ore <?php echo $ore;?>
                            </th>
                            <th scope="col">Lumber <?php echo $lumber;?>
                            </th>
                            <th scope="col">Wool <?php echo $wool;?>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="populate">
                    </tbody>
                </table>
            </div>
            <!-- recipes for construction -->
            <div class="card text-white bg-dark mb-3" style="max-width: 100%;">
                <div class="card-header">Recipes</div>
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table table-dark">
                        <!-- Recipes
                        
                        Road 1 LUMBER 1 BRICK
                        Settlement 1 LUMBER 1 BRICK 1 GRAIN 1 WOOL
                        City 2 GRAIN 3 ORE
                        Development Card 1 GRAIN 1 WOOL 1 ORE
                        
                         -->
                            <tbody>
                                <tr>
                                    <th scope="row">Road</th>
                                    <td>1 <?php echo $lumber; ?> 1 <?php echo $brick;?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Settlement</th>
                                    <td>1 <?php echo $lumber; ?> 1 <?php echo $brick;?> 1 <?php echo $grain; ?> 1 <?php echo $wool;?></td>
                                </tr>
                                <tr>
                                    <th scope="row">City</th>
                                    <td>2 <?php echo $grain; ?> 3 <?php echo $ore;?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Development Card</th>
                                    <td>1 <?php echo $grain; ?> 1 <?php echo $wool;?> 1 <?php echo $ore;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-header">Player Construction</div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-dark">
                            <thead class="thead-dark">
                                <tr class="table-info">
                                    <th scope="col">Player <?php echo $player;?>
                                    </th>
                                    <!-- Construction -->
                                    <th scope="col">Road</th>
                                    <th scope="col">Settlement</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Development Card</th>
                                </tr>
                            </thead>
                            <tbody id="construction">
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- victory points -->
                <div class="card-header">Victory Points</div>
                <div class="card-body">
                    <div class="table-responsive-md">
                        <table class="table table-dark">
                            <thead class="thead-dark">
                                <tr class="table-info">
                                    <th scope="col"><?php echo $player;?>
                                    </th>
                                    <!-- Victory Points -->
                                    <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
                                    </svg></th>
                                </tr>
                            </thead>
                            <tbody id="victory">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        
            <!-- button to close game  -->
            <div class="col text-center">
                        <button type="button" onclick="endGame()" class="btn btn-block btn-dark">End Game</button>
            </div>
        </div>
        &nbsp;
    </div>