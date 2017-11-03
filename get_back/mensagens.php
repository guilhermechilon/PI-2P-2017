<?php include_once("seguranca.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>
	<body>
		<?php include("header.php"); ?>
		<br><br><br><br>
		<div class="container">
			<div class="row">
	            <div class="col-md-12 col-sm-12">
	            	<table class="table table-hover mb-none">
	            		<h3>Mensagens não visualizadas</h3><br>
	            		<thead>
	            			<tr>
	            				<td><strong></strong></td>
	            				<td><strong></strong></td>
	            				<td><strong>Prévia da Mensagem</strong></td>
	            				<td><strong>Enviada em</strong></td>
	            				<td><strong></strong></td>
	            			</tr>
	            		</thead>
		              	<tbody>
		              	<?php 
		              	$sql = mysqli_query($conn,"SELECT m.id_de FROM mensagens as m WHERE m.visualizado = '1' && m.id_para = '$id_usuario' GROUP BY m.id_de ORDER BY MAX(m.data_hora) DESC");
		              	$num = mysqli_num_rows($sql);
		              	if ($num != 0) { 
		              	while ($row = mysqli_fetch_array($sql)) {
		              		$id_usuario2 = $row['id_de'];
		              		$sql2 = mysqli_query($conn,"SELECT DATE_FORMAT(m.data_hora, '%d/%m/%Y %H:%i:%s') as data_hora, m.id_mensagem, m.id_de, m.id_para, m.mensagem, m.visualizado, u.nome, u.foto_perfil, u.id_usuario FROM `mensagens` as m INNER JOIN usuario as u ON u.id_usuario = m.id_de WHERE m.id_de = '$id_usuario2' && m.id_para = '$id_usuario' ORDER BY data_hora DESC LIMIT 1");
		              		$row2 = mysqli_fetch_object($sql2); ?>
		              		
	              		 	<tr>
								<td><img src="img_user/<?php echo $row2->foto_perfil;?>" style="border-radius: 100%;width: 75px;height: 75px;"></td>
								<td><b><?php echo $row2->nome;?></b></td>
								<td><?php echo nl2br(substr($row2->mensagem, 0, 25));?></td>
								<td><small><?php echo $row2->data_hora;?></small></td>
								<td><a href="chat.php?usuario=<?php echo $row2->id_de;?>" class="btn btn-primary" onclick="window.open(this.href,'galeria','width=680,height=630'); return false;" style="background-color: #dc0909;border-color: #dc0909;text-align: center;border-radius: 15px;">Responder</a></td>
							</tr>
		              		<?php } }else{ ?>
			              		
		              			<tr>
		              				<td></td>
		              				<td></td>
		              				<td>Nenhuma mensagem nova para você!! Loser!!</td>
		              				<td></td>
		              				<td></td>
		              			</tr>
		              			
							<?php } ?>
	              		</tbody>	
	              	</table>
	            </div>
	        </div>
	    </div>

		<?php include("script.php"); ?>

		<?php include("footer.php"); ?>
		
		<style type="text/css">.footer{color: black !important;margin-top: 8px;padding: 5px;position:absolute !important;}</style>
		
	</body>
</html>