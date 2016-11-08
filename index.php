<!DOCTYPE html>
<html>
  <head>
  <style>
div.wrapper {
            position:  absolute;
            top : 150px;
            left: 568px;
            width: 300px;
            height:300px;
            
        }
</style>
  
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="jquery-ui.min.css">
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script>

<script>

$(document).ready(function(){

	
$("#query").autocomplete({
	source : 'search.php',
	select : function(event,ui){
		$("#result").html(ui.item.value);
	}
})

	


});

</script>
    <meta charset="UTF-8">
    <h2>MotherlessMotos!!!</h2>

  </head>
  <body>
 <h2 style="color:white; text-align:center;">MOTHERLESS MOTOS!!!</h2>
<img src="http://i64.tinypic.com/ouprm8.jpg" alt="Motherless Motos!!!" style="width:304px;height:220px;position:fixed; left: 20px;top:20px;">


<div class='wrapper'>
  <input type="text" id="query"/>
  <div id="result"></div>
  </div>
  </body>
</html>