</html>

<script type="text/javascript">

$(function(){
    //hide views for navbar
    $("#strategy").hide();
    $("#gamehosting").hide();


    //gamehosting view
    $("#gameActive").hide();
    $("#digitaldice").hide();
    //add more if planning on adding capability of more players
    //or future get a dynamic array
    var gameplay = [
        [0, 0, 0, 0, 0, 0],
        //1
        [5, 5, 5, 5, 5, 0],
        //2
        [5, 5, 5, 5, 5, 0],
        //3
        [5, 5, 5, 5, 5, 0],
        //4
        [5, 5, 5, 5, 5, 0],
        //5
        [5, 5, 5, 5, 5, 0],
        //6
        [5, 5, 5, 5, 5, 0],
    ];
    //gamehosting view end
});
// function for rules
// pass in a parameter then check against some ifs
function gamehostingshow() {
    if($("#gamehosting").is(":visible")){
        $("#gamehosting").hide();
    } else{
        $("#strategy").hide();
        $("#gamehosting").show();
    }
    
}
function strategyshow() {
    if($("#strategy").is(":visible")){
        $("#strategy").hide();
    } else{
        $("#strategy").show();
        $("#gamehosting").hide();
    }
}
//new column increase decrease 
// dynamic id multiple ifs to check which to increase/decrease
function increaseVictory(i)
{
    gameplay[i][5] += 1;
    updateTable();
}
function decreaseVictory(i)
{
    gameplay[i][5] -= 1;
    if (gameplay[i][5] < 0) {
        gameplay[i][5] = 0;
    }  
    updateTable();
}
function increaseResource(resourceName, i) 
{
    //plusminusResourcename
    // var brick = "brick" + i;
    //         var grain = "grain" + i;
    //         var ore = "ore" + i;
    //         var lumber = "lumber" + i;
    //         var wool = "wool" + i;
    gameplay[i][checkResource(resourceName)] += 1;
    updateTable();
}
function decreaseResource(resourceName, i) 
{
    //plusminusResourcename
    gameplay[i][checkResource(resourceName)] -= 1;
    if (gameplay[i][checkResource(resourceName)] < 0) {
        gameplay[i][checkResource(resourceName)] = 0;
    }  
    updateTable();
}
function checkResource(resourceName) 
{
    if (resourceName=='brick') {
        return 0;
    } else if (resourceName=='grain') {
        return 1;
    } else if (resourceName=='ore') {
        return 2;
    } else if (resourceName=='lumber') {
        return 3;
    } else if (resourceName=='wool') {
        return 4;
    }   
}
function updateTable() 
{
    $("#populate tr").remove();
    $("#victory tr").remove();
    for (var i=1; i <= $('#playerSelect').val(); i++) 
        {
             //append rows
            // svg for plus minus
            var plusminus = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-contract" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M3.646 13.854a.5.5 0 0 0 .708 0L8 10.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708zm0-11.708a.5.5 0 0 1 .708 0L8 5.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708z"/></svg>';
             //dynamic id setting
            var brick = "brick" + i;
            var grain = "grain" + i;
            var ore = "ore" + i;
            var lumber = "lumber" + i;
            var wool = "wool" + i;
            var row = "<tr><td>"+ i + "</td> <td id=" + brick + ">" + gameplay[i][0] + " " +  plusminus + " " + up('\'brick\'', i) + down('\'brick\'', i) + "</td><td id=" + grain + ">" + gameplay[i][1] + " " +  plusminus + " " + up('\'grain\'', i) + down('\'grain\'', i) + "</td> <td id=" + ore + ">" + gameplay[i][2] + " " +  plusminus + " " +  up('\'ore\'', i) + down('\'ore\'', i) + "</td><td id=" + lumber + ">" + gameplay[i][3] + " " +  plusminus + " " + up('\'lumber\'', i) + down('\'lumber\'', i) + "</td><td id=" + wool + ">" + gameplay[i][4] + " " +  plusminus + " " +  up('\'wool\'', i) + down('\'wool\'', i) + "</td></tr>";
            $('#populate').append(row);
            var row = '<tr><td>' + i + '</td><td>' + gameplay[i][5]  + victoryUp(i) + victoryDown(i) + '</td></tr>';
            $('#victory').append(row);
    }
}
function resetArray() 
{
    $("#construction tr").remove();
    $("#victory tr").remove();
    $("#dice tr").remove();
    gameplay = [
        [0, 0, 0, 0, 0, 0],
        [5, 5, 5, 5, 5, 0],
        [5, 5, 5, 5, 5, 0],
        [5, 5, 5, 5, 5, 0],
        [5, 5, 5, 5, 5, 0],
        [5, 5, 5, 5, 5, 0],
        [5, 5, 5, 5, 5, 0],
        [5, 5, 5, 5, 5, 0]
    ];
}
function startGame() 
{   
    //starting game hides game start container
    //shows the game active container
   if ($('#playerSelect').val() == "X") {

    } else {
        $("#populate tr").remove();
        resetArray();
        $('#gameSetup').hide();
        $('#gameActive').show();

        for (var i=1; i <= $('#playerSelect').val(); i++) 
        {
            //append rows
            // svg for plus minus
            var plusminus = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-expand" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z"/></svg>';
             //dynamic id setting
            var brick = "brick" + i;
            var grain = "grain" + i;
            var ore = "ore" + i;
            var lumber = "lumber" + i;
            var wool = "wool" + i;

            var row = "<tr><td>"+ i + "</td> <td id=" + brick + ">" + gameplay[i][0] + " " +  plusminus + " " + up('\'brick\'', i) + down('\'brick\'', i) + "</td><td id=" + grain + ">" + gameplay[i][1] + " " +  plusminus + " " + up('\'grain\'', i) + down('\'grain\'', i) + "</td> <td id=" + ore + ">" + gameplay[i][2] + " " +  plusminus + " " +  up('\'ore\'', i) + down('\'ore\'', i) + "</td><td id=" + lumber + ">" + gameplay[i][3] + " " +  plusminus + " " + up('\'lumber\'', i) + down('\'lumber\'', i) + "</td><td id=" + wool + ">" + gameplay[i][4] + " " +  plusminus + " " +  up('\'wool\'', i) + down('\'wool\'', i) + "</td></tr>";
            $('#populate').append(row);


            var row = '<tr><td>' + i + '</td><td><button class="btn btn-outline-light btn-block" onclick="build(0,' + i + ')">Build</button></td><td><button class="btn btn-outline-light btn-block" onclick="build(1,' + i + ')">Build</button></td><td><button class="btn btn-outline-light btn-block" onclick="build(2,' + i + ')">Build</button></td><td><button class="btn btn-outline-light btn-block" onclick="build(3,' + i + ')">Build</button></td></tr>';
            $('#construction').append(row);

            var row = '<tr><td>' + i + '</td><td>' + gameplay[i][5]  + "&nbsp;" + victoryUp(i) + victoryDown(i) + '</td></tr>';
            $('#victory').append(row);
        }
    }
    
}
function build(recipe, i) 
{
                        
                        // Road 1 LUMBER 1 BRICK
                        // Settlement 1 LUMBER 1 BRICK 1 GRAIN 1 WOOL
                        // City 2 GRAIN 3 ORE
                        // Development Card 1 GRAIN 1 WOOL 1 ORE
    // 0 Road 1 Settlement 2 City 3 Dev Card     
    if (recipe == 0) {
        if (gameplay[i][0] >= 1 && gameplay[i][3] >= 1) 
        {
            gameplay[i][0] -= 1;
            gameplay[i][3] -= 1;
        }  
    } else if (recipe == 1) {
        if (gameplay[i][3] >= 1 && gameplay[i][0] >= 1 && gameplay[i][1] >= 1 && gameplay[i][4] >= 1) 
        {
            gameplay[i][3] -= 1;
            gameplay[i][0] -= 1;
            gameplay[i][1] -= 1;
            gameplay[i][4] -= 1;
        } 

    } else if (recipe == 2) {
        if (gameplay[i][1] >= 2 && gameplay[i][2] >= 3) 
        {
            gameplay[i][1] -= 2;
            gameplay[i][2] -= 3;
        } 
        
    } else if (recipe == 3) {
        if (gameplay[i][1] >= 1 && gameplay[i][4] >= 1 && gameplay[i][2] >= 1) 
        {
            gameplay[i][1] -= 1;
            gameplay[i][4] -= 1;
            gameplay[i][2] -= 1;
        } 
        
    } 
    
    updateTable();
}
function victoryUp(i) 
{
    return '<button class="btn btn-success btn-sm" onclick="increaseVictory(' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z"></path></svg></button>';

}
function victoryDown(i) 
{
    return '<button class="btn btn-danger btn-sm" onclick="decreaseVictory(' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg></button>';
    
}
function up(resourceName, i) {
    return '<button class="btn btn-success btn-sm" onclick="increaseResource(' + resourceName + ',' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z"></path></svg></button>';

}

function down(resourceName, i) {
    return '<button class="btn btn-danger btn-sm" onclick="decreaseResource(' +  resourceName + ',' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg></button>';
    
}
function rollDice() 
{
    // random number generator
    $("#dice tr").remove();
    // first roll
    var firstRoll = Math.floor(Math.random() * Math.floor(6));
    firstRoll += 1;
    //second roll
    var secondRoll = Math.floor(Math.random() * Math.floor(6));
    secondRoll += 1;

    var row = "<tr><td>" + getDiceFace(firstRoll) + "</td><td>" + getDiceFace(secondRoll) + "</td></tr>"
    $("#digitaldice").show();
    $('#dice').append(row);

}
function getDiceFace(x) 
{
    if (x == 1) {
        var row = '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dice-1-fill" viewBox="0 0 16 16"><path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm5 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>';
    } else if (x == 2) {
        var row = '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dice-2-fill" viewBox="0 0 16 16"><path d="M0 3a3 3 0 0 1 3-3h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V3zm5.5 1a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm6.5 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>';
    } else if (x == 3) {
        var row = '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dice-3-fill" viewBox="0 0 16 16"><path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>';
    } else if (x == 4) {
        var row = '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dice-4-fill" viewBox="0 0 16 16"><path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm1 5.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm8 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm1.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM4 13.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>';
    } else if (x == 5) {
        var row = '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dice-5-fill" viewBox="0 0 16 16"><path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm2.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM12 13.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM8 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>';
    } else if (x == 6) {
        var row = '<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-dice-6-fill" viewBox="0 0 16 16"><path d="M3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3zm1 5.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm8 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm1.5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM12 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5.5 12a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM4 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/></svg>';
    }
    return row;
}
function endGame() 
{
    resetArray();
    //ending game hides game active container
    //shows the game start container
    $('#gameSetup').show();
    $('#gameActive').hide();

    // delete rows
}
</script>