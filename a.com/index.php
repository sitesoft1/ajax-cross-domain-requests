<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script src="jquery-3.6.0.min.js"></script>
</head>
<body>
	
<script>
//Первый вариант на jQuery:
//http://b.com
//https://daobot.sctest.ru/shopify_apps/rueckwand24
//https://birka.club/test/

$(document).ready(function(){

	$.ajax({
    url: "https://daobot.sctest.ru/shopify_apps/rueckwand24/",
    crossDomain: true,
	    success: function( response ) {
	      console.log(response);
	    }
  });

});



</script>


<!-- <script>
	//Второй вариант на чистом js:

    function receiver(data){
        console.log(data);
    }
</script>
<script src="https://birka.club/test/?callback=receiver"></script> -->


</body>
</html>