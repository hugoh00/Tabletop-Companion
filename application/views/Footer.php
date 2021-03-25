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
    }
    
}

function endGame() 
{
    //ending game hides game active container
    //shows the game start container
    $('#gameSetup').show();
    $('#gameActive').hide();
}
</script>