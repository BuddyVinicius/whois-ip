<?php
/*
Created by Buddy
VIDEO WHOIS - https://www.youtube.com/watch?v=b40pGTvXgrw
MY CHANNEL - https://www.youtube.com/channel/UC24YzBy_OmgWWpo7HmB9m6g
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>IP GET INFOS</title>
	<style type="text/css">
		.text{
			border: 1px solid #333;
			width: 250px;
			border-radius: 5px;
			height: 30px;
			outline: none;
		}
		.botao{
			border: 1px solid #333;
			width: 100px;
			border-radius: 5px;
			height: 30px;
			outline: none;
			background: limegreen;
			color: #fff;
		}
	</style>
</head>
<body>
<center>
<form method=get>
IP:<p><input type="text" name="ip" class="text"><p>
<input type="submit" name="submit" value="Submit" class="botao">
</form>

<?php
if (isset($_GET['submit'])) {
 	$ip = $_GET['ip'];
    
      /* Curl Start */
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, "http://ip-api.com/csv/".$ip."");
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
    $exec = curl_exec($c);
    curl_close($c);

    $exp    = explode(",", $exec);
    $pais   = $exp[1];
    $cidade = $exp[4];
    $cidade2= $exp[5]; /* Nao sei se é a cidade kkjkjk */
    $coordenadas = $exp[7];
    $coordenadas2 = $exp[8];
    $provedor = $exp[10];
    
    echo "País: ". $pais;
    echo "<p>";
    echo "Cidade: ". $cidade ."-".$cidade2;
    echo "<p>";
    echo "Coordenadas: ". $coordenadas." | ".$coordenadas2;
    echo "<p>";
    echo "Provedor: ". $provedor;
    echo "<p>";
    echo "Se Inscreva <3";

  



}
?>
</center>
</body>
</html>
