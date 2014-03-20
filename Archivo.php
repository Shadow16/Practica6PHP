<html>
	<table border="1"; cellpadding="5"; cellspacing="5" >
		<tr>
			<td>Producto</td>
			<td>Precio</td>
		</tr>
		<tr>
			<td><?php $nombre1=$_POST["nombre1"]; echo $nombre1; ?></td>
			<td><?php $precio1=$_POST["precio1"]; echo $precio1; ?></td>
		</tr>
		<tr>
			<td><?php $nombre2=$_POST["nombre2"]; echo $nombre2; ?></td>
			<td><?php $precio2=$_POST["precio2"]; echo $precio2;?></td>
		</tr>
		<tr>
			<td><?php $nombre3=$_POST["nombre3"]; echo $nombre3; ?></td>
			<td><?php $precio3=$_POST["precio3"]; echo $precio3; ?></td>
		</tr>
		<tr>
			<td>Subtotal</td>
			<td><?php $sub = $precio1 + $precio2 + $precio3; echo "$sub"; ?></td>
		</tr>
		<tr>
			<td>IVA</td>
			<td><?php $iva = $sub * 0.16; echo "$iva"; ?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td><?php $total = $sub + $iva; echo "$total";?></td>
		</tr>
	</table>
</html>
