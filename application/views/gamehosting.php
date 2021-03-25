    <div class="container bg-gradient-danger" id="gamehosting"  style="background-color: #f4d032;">
        <!-- enter content here -->
        <!-- will be pushed into the main project once done-->
        <br>
        <h3 style="text-align:center;">Game Hosting</h3>
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
            <!-- dynamic table -->
            <table class="table table-hover">
				<thead class="thead-dark">
					<tr class="table-info">
						<th scope="col">Player</th>
                        <!-- resources -->
						<th scope="col">Brick</th>
                        <th scope="col">+/-</th>
                        <th scope="col">Ore</th>
                        <th scope="col">+/-</th>
                        <th scope="col">Lumber</th>
                        <th scope="col">+/-</th>
                        <th scope="col">Wool</th>
                        <th scope="col">+/-</th>
					</tr>
				</thead>
				<tbody id="populate">
                </tbody>
            </table>
            <!-- button to close game  -->
            <div class="col text-center">
                        <button type="button" onclick="endGame()" class="btn btn-dark">End Game</button>
            </div>
        </div>
        &nbsp;
    </div>