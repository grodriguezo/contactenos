<html>
<head>
<title>contactenos facebook.com</title>
<h1>Contactenos</h1>
</head>
<body>
<form method="post" action="hoja2.php">
<table style="text-align: left; width: 100%;" cellpadding="3" rules="rows">
 <tbody>
<tr>
<td>Nombre:</td>
<td><input type="text" name="Nombre" id="nombre" /></td>
 </tr>
  <tr>
<td>Correo electr&oacute;nico:</td>
<td><input type="text" name="email1" id="email1" /></td>
</tr>
 <tr>
 <td>Repite tu correo:</td>
<td><input type="text" name="email2" id="email2" /></td>
</tr>
<tr>
<td>Tu pregunta es referente a:</td>
<td><label><input type="radio" name="referente" id="ref_web" value="web" /> 
La Web </label><br />
<label><input type="radio" name="referente" id="ref_fotos" value="fotos" /> 
Las fotos </label><br />
<label><input type="radio" name="referente" id="ref_amigos" value="amigos" /> 
 Amigos </label></td>
</tr><tr>
<td colspan="2">Escribe lo que quieres preguntarnos:</td>
</tr><tr>
<td class="centrado" colspan="2">
<textarea cols="50" rows="5" name="consulta" id="Consulta"></textarea></td>
</tr>
<tr>
<td class="centrado" colspan="2"><input type="submit" value="Enviar" />
<input type="reset" value="Restablecer" /></td>
</tr>
</tbody>
</table>
</form>
</body></html>