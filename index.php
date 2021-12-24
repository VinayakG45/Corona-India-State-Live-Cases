<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'Css/style.php'; ?>
</head>
<body onload="fetch()">
	
<div class="main.header">
	<div class="row w-100 h-100"> 
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order 2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center"> 
				<img src="images/eksath.jpg" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order 1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1> Let's Stay Safe & Fight Together Against Cor<span> <img src="images/corona.png" width="70" height="70"> 
				</span>na Virus</h1>
		</div>
	</div>
</div>	

<!-- ************************* Project Done Starts ******************************* -->

<section class="corona_update container-fluid"> 
	<div clas="mb-3" >
		<h3 class="text-uppercase text-center" style="font-size: 3rem;">COVID-19 LIVE UPDATES OF INDIA</h3>

	</div>

	<div class="table-respoonsive">
		<table class="table table-borderd table-striped text-center" id="tbval">
			<tr>
			<th class="text-capitalize">Lastupdatetime</th>
			<th class="text-capitalize">state</th>
			<th class="text-capitalize">confirmed</th>
			<th class="text-capitalize">active</th>
			<th class="text-capitalize">recovered</th>
			<th class="text-capitalize">deaths</th>									
			</tr>
<?php

$data = file_get_contents('https://data.covid19india.org/data.json');
$coronalive = json_decode($data, true);

$statescount = count($coronalive['statewise']);

$i=1;
while($i< $statescount){

	?>

	<tr>
		<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?></td>
		<td><?php echo $coronalive['statewise'][$i]['state'] ?></td>
		<td><?php echo $coronalive['statewise'][$i]['confirmed'] ?></td>
		<td><?php echo $coronalive['statewise'][$i]['active'] ?></td>
		<td><?php echo $coronalive['statewise'][$i]['recovered'] ?></td>
		<td><?php echo $coronalive['statewise'][$i]['deaths'] ?></td>

	</tr>
	

	<?php
	$i++;
	
}

	?>

		</table>	
</div>
</section>


<!-- ************************* Project Done Ends ******************************* -->

<!-- ******************************** Footer Part ******************** -->

<footer class="mt-5">
	<div class="footer_style bg-dark text-white container-fluid text-center"> 
		<p>copyright by GPM Students</p>
	</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>

$('.count').counterUp({
	delay:10,
	time:3000
})

//********************************* top arrow script ***************************

mybutton = document.getElementById("myBtn");
//When the ueser scrolls down 20px from the top of the document, show the button

window.oncscroll = function() { scrollFunction();}
function scrollFunction() {
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
	{
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}
//When the user clicks on the button, scroll to the top of the document 
function topFunction(){
	document.body.scrollTop = 0; //For Safari
	document.documentElement.scrollTop = 0; //For Chrome, Firefox, IE and Opera
}

</script>
</body>
</html>