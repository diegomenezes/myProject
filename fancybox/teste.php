<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<title>FancyBox 1.3.4 | Demonstration</title>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
	
	function fechar()
	{
$.fancybox.close();		
	}
	
		$(document).ready(function() {

 $("#finalizarpagamento").fancybox({'titlePosition': 'inside','transitionIn': 'none','transitionOut': 'none'});


$("#various0").fancybox({'titlePosition': 'inside','transitionIn': 'none','transitionOut': 'none'});


			$("#various2").fancybox();



			$("#various3").fancybox(

{
fitToView    : false,
width        : 905,
height        : 505,
autoSize    : false,
closeClick    : false,
ajax: {
    type: "POST",
    cache : false,
    url: "preview.php",
    data: $('#form1').serialize()
}
}

			);
			
			
			
			$("#various4").fancybox(

{
fitToView    : false,
width        : 905,
height        : 505,
autoSize    : false,
closeClick    : false,
ajax: {
    type: "POST",
    cache : false,
    url: "preview.php",
    data: $('#form1, #form2').serialize()
}
}

			);
			


		});


	</script>
</head>
<body>


<a id="single_image" href="image_big.jpg"><img src="image_small.jpg" alt=""/></a>





<div id="content">
<form name="form1" id="form1">
	<ul>
		<li><a id="various2" href="ajax.txt">Ajax</a></li>


		<li><a id="various3" href="teste.php">Ajax 3</a></li>

	</ul>


<a class="preview2" data-fancybox-type="iframe" href="teste.php" id="preview2">Preview</a>
<br><br>
<input type="text" name="a1" value="11111"><br>
<input type="text" name="a2" value="2222"><br>
<br>


<a id="various0" href="#inline1">xxxxxxxxxxxxxx</a>
<div style="display: none;">
		<div id="inline1" style="width:600px;height:300px;overflow:auto;">
		aaaaaaaaaaaaaaaaaaaaaaaaa
		</div>
</div>


</form>

<br><br>
<input type="button" onclick="ttt()" value="Fechar">


<script type="text/javascript">

function ttt() {
$('#various0').trigger('click');
}
</script>





	<a href="#ecffinalizarpagamentomodal" id="finalizarpagamento" style="text-decoration: none; color: black">Prosseguir Venda</a>

<div style="display: none;">
	<div id="ecffinalizarpagamentomodal" style="width:500px;height:300px;overflow:auto;">

teste
<form name="form2" id="form2">

<input type="text" name="a3" value="3333"><br>
<input type="text" name="a4" value="4444"><br>
<br>

		<li><a id="various4" href="teste.php">Enviar</a></li>

<input type="button" onclick="fechar()" value="Fechar">
<br><br>


</form>

	</div>
</div>

<?
echo "<pre>";
print_r($_REQUEST);
?>

</div>
</body>
</html>