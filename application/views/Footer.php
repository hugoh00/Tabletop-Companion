</html>

<script type="text/javascript">

$(function(){
    $("#gameActive").hide();
});
//new column increase decrease 
// dynamic id multiple ifs to check which to increase/decrease

function increaseDecrease(i) 
{
    if (i == 1) {

    }
}
function startGame() 
{
    //starting game hides game start container
    //shows the game active container
   if ($('#playerSelect').val() == "X") {

    } else {
        $('#gameSetup').hide();
        $('#gameActive').show();

        var up = '<button class="btn btn-success" onclick="increaseDecrease()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z"></path></svg></button>';
        var down = '<button class="btn btn-danger" onclick="increaseDecrease()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg></button>';
   

        for (var i=1; i <= $('#playerSelect').val(); i++) 
        {
            //append rows
            //svg
            var up = '<button class="btn btn-success" onclick="increaseDecrease(' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z"></path></svg></button>';
            var down = '<button class="btn btn-danger" onclick="increaseDecrease(' + i + ')"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg></button>';
            //dynamic id setting
            var brick = "brick" + i;
            var ore = "ore" + i;
            var lumber = "lumber" + i;
            var wool = "wool" + i;
            var row = "<tr><td>"+ i + "</td> <td>5</td><td>" + up + down + "</td> <td>5</td><td>" + up + down + "</td><td>5</td><td>" + up + down + "</td><td>5</td><td>" + up + down + "</td></tr>";
            $('#populate').append(row);
        }
    }
    
}

function endGame() 
{
    //ending game hides game active container
    //shows the game start container
    $('#gameSetup').show();
    $('#gameActive').hide();

    // delete rows
}
</script>