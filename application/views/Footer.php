</html>

<script type="text/javascript">

$(function(){
    $("#gameActive").hide();
});

function startGame() 
{
    //starting game hides game start container
    //shows the game active container
   if ($('#playerSelect').val() == "X") {

    } else {
        $('#gameSetup').hide();
        $('#gameActive').show();

        var up = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M3.22 9.78a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0l4.25 4.25a.75.75 0 01-1.06 1.06L8 6.06 4.28 9.78a.75.75 0 01-1.06 0z"></path></svg>';
        var down = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M12.78 6.22a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06 0L3.22 7.28a.75.75 0 011.06-1.06L8 9.94l3.72-3.72a.75.75 0 011.06 0z"></path></svg>';
   

        for (var i=1; i <= $('#playerSelect').val(); i++) 
        {
            //append rows
            //dynamic id setting
            var row = "<tr><td>"+ i + "</td> <td>5 " + up + down + "</td> <td>5" + up + down + "</td><td>5" + up + down + "</td><td>5" + up + down + "</td></tr>";
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