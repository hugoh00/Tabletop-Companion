</html>

<script type="text/javascript">

$(function(){
    $("#gameActive").hide();
    var gameplay = [
        [0, 0, 0, 0, 0],
        //1
        [5, 5, 5, 5, 5],
        //2
        [5, 5, 5, 5, 5],
        //3
        [5, 5, 5, 5, 5],
        //4
        [5, 5, 5, 5, 5],
        //5
        [5, 5, 5, 5, 5],
        //6
        [5, 5, 5, 5, 5],
    ];
});
//new column increase decrease 
// dynamic id multiple ifs to check which to increase/decrease

function increase(resourceName, i) 
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
function decrease(resourceName, i) 
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
    for (var i=1; i <= $('#playerSelect').val(); i++) 
        {
            //append rows
             //dynamic id setting
            var brick = "brick" + i;
            var grain = "grain" + i;
            var ore = "ore" + i;
            var lumber = "lumber" + i;
            var wool = "wool" + i;
            var row = "<tr><td>"+ i + "</td> <td id=" + brick + ">" + gameplay[i][0] +"</td><td id='plusminusBrick'>" + up('\'brick\'', i) + down('\'brick\'', i) + "</td><td id=" + grain + ">" + gameplay[i][1] +"</td><td id='plusminusGrain'>" + up('\'grain\'', i) + down('\'grain\'', i) + "</td> <td id=" + ore + ">" + gameplay[i][2] +"</td><td id='plusminusOre'>" +  up('\'ore\'', i) + down('\'ore\'', i) + "</td><td id=" + lumber + ">" + gameplay[i][3] +"</td><td id='plusminusLumber'>" + up('\'lumber\'', i) + down('\'lumber\'', i) + "</td><td id=" + wool + ">" + gameplay[i][4] +"</td><td id='plusminusWool'>" +  up('\'wool\'', i) + down('\'wool\'', i) + "</td></tr>";
            $('#populate').append(row);
    }
}
function resetArray() 
{
    gameplay = [
        [0, 0, 0, 0, 0],
        [5, 5, 5, 5, 5],
        [5, 5, 5, 5, 5],
        [5, 5, 5, 5, 5],
        [5, 5, 5, 5, 5],
        [5, 5, 5, 5, 5],
        [5, 5, 5, 5, 5],
        [5, 5, 5, 5, 5]
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
             //dynamic id setting
            var brick = "brick" + i;
            var grain = "grain" + i;
            var ore = "ore" + i;
            var lumber = "lumber" + i;
            var wool = "wool" + i;
            var row = "<tr><td>"+ i + "</td> <td id=" + brick + ">" + gameplay[i][0] +"</td><td id='plusminusBrick'>" + up('\'brick\'', i) + down('\'brick\'', i) + "</td><td id=" + grain + ">" + gameplay[i][1] +"</td><td id='plusminusGrain'>" + up('\'grain\'', i) + down('\'grain\'', i) + "</td> <td id=" + ore + ">" + gameplay[i][2] +"</td><td id='plusminusOre'>" +  up('\'ore\'', i) + down('\'ore\'', i) + "</td><td id=" + lumber + ">" + gameplay[i][3] +"</td><td id='plusminusLumber'>" + up('\'lumber\'', i) + down('\'lumber\'', i) + "</td><td id=" + wool + ">" + gameplay[i][4] +"</td><td id='plusminusWool'>" +  up('\'wool\'', i) + down('\'wool\'', i) + "</td></tr>";
            $('#populate').append(row);
        }
    }
    
}

function up(resourceName, i) {
    return '<button class="btn btn-success btn-sm" onclick="increase(' + resourceName + ',' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z"></path></svg></button>';

}

function down(resourceName, i) {
    return '<button class="btn btn-danger btn-sm" onclick="decrease(' +  resourceName + ',' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="20" height="20"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg></button>';
    
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