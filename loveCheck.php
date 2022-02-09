<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: black;
			color: white;
		}
form{
	background-color: purple;
	border:2px solid blue;
	width: 40%;
	height: 20%;
	text-transform: capitalize;
	font-size: 21px;
	box-shadow: 10px 10px 10px gray;
	margin-top: 200px;
	margin-left: 400px;
	padding: 10px;
	border-radius: 10px;
}
input[type="submit"]
{
	width: 70%;
	margin-left: 80px;
	padding: 10px;
	text-transform: capitalize;
	font-size: 21px;
	background-color: darkblue;
	color: white;



}
input{
	padding: 7px;
	border-radius: 6px;
	text-transform: capitalize;
	width: 300px;


}
h3{
	color:white;
	
	padding: 8px;
	animation: khumraj 1s linear infinite;




}		

@keyframes khumraj
{
0%
{
	color: red;
}
20%{

	color: blue;
}

40%{
	color: orange;
}

60%{
	color: #fffddd;
}

80%{

	color: green;
}
100%{
	color: blue;
}

}


}
	</style>
	<title>hey coding lovers</title>
</head>
<body>
<form method="post">
	<label>your name</label><br>
	<input type="text" name="yname"><br><br>
	<label>your parter name</label><br>
	<input type="text" name="pname"><br><br>
	<input type="submit" name="submit" value="submit">


	<br><br>


	<?php 


	if (isset($_POST['submit'])) {
	$yourName = $_POST['yname'];
	$parterName	= $_POST['pname'];
	if ($yourName=="" && $parterName=="") {
		echo "please enter the couples name here::";
	}


else{
	$radom = mt_rand(100,100);
	echo "<h3>congrats ! ". $yourName. " " ."you love your parter". " "  .  $parterName. " ". $radom. "%". "</h3>";




}


	}





	 ?>
	 <br><br>


</form>





</body>
</html>