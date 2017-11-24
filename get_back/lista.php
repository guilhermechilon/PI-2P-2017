<?php
	session_start();
	include_once("../conexao.php");
    $id_usuario = $_SESSION['id_usuario'];
	$id_de = $id_usuario;
	$id_para = $_SESSION['id_para'];

	$emotions = array(":angry:", ":angry1:", ":bored:", ":bored1:", ":bored2:", ":confused:", ":confused1:", ":crying:", ":crying1:", ":embarrassed:", ":emoticons:", ":happy:", ":happy1:", ":happy2:", ":happy3:", ":happy4:", ":ill:", ":inlove:", ":kissing:", ":mad:", ":nerd:", ":ninja:", ":quiet:", ":sad:", ":secret:", ":smart:", ":smyle:", ":smiling:", ":surprised:", ":surprised1:", ":suspicious:", ":suspiciou1:", ":tongueout:", ":tongueout1:", ":unhappy:", ":wink:");
        $images   = array("<img src=\"imagens/emoticons/angry.png\" class=\"emoticons-size\" title=\":angry:\">", 
                "<img src=\"imagens/emoticons/angry-1.png\" class=\"emoticons-size\" title=\":angry1:\">", 
                "<img src=\"imagens/emoticons/bored.png\" class=\"emoticons-size\" title=\":bored:\">", 
                "<img src=\"imagens/emoticons/bored-1.png\" class=\"emoticons-size\" title=\":bored1:\">", 
                "<img src=\"imagens/emoticons/bored-2.png\" class=\"emoticons-size\" title=\":bored2:\">", 
                "<img src=\"imagens/emoticons/confused.png\" class=\"emoticons-size\" title=\":confused:\">", 
                "<img src=\"imagens/emoticons/confused-1.png\" class=\"emoticons-size\" title=\":confused1:\">", 
                "<img src=\"imagens/emoticons/crying.png\" class=\"emoticons-size\" title=\":crying:\">", 
                "<img src=\"imagens/emoticons/crying-1.png\" class=\"emoticons-size\" title=\":crying1:\">", 
                "<img src=\"imagens/emoticons/embarrassed.png\" class=\"emoticons-size\" title=\":embarrassed:\">", 
                "<img src=\"imagens/emoticons/emoticons.png\" class=\"emoticons-size\" title=\":emoticons:\">", 
                "<img src=\"imagens/emoticons/happy.png\" class=\"emoticons-size\" title=\":happy:\">", 
                "<img src=\"imagens/emoticons/happy-1.png\" class=\"emoticons-size\" title=\":happy1:\">", 
                "<img src=\"imagens/emoticons/happy-2.png\" class=\"emoticons-size\" title=\":happy2:\">", 
                "<img src=\"imagens/emoticons/happy-3.png\" class=\"emoticons-size\" title=\":happy3:\">", 
                "<img src=\"imagens/emoticons/happy-4.png\" class=\"emoticons-size\" title=\":happy4:\">", 
                "<img src=\"imagens/emoticons/ill.png\" class=\"emoticons-size\" title=\":ill:\">", 
                "<img src=\"imagens/emoticons/in-love.png\" class=\"emoticons-size\" title=\":inlove:\">", 
                "<img src=\"imagens/emoticons/kissing.png\" class=\"emoticons-size\" title=\":kissing:\">", 
                "<img src=\"imagens/emoticons/mad.png\" class=\"emoticons-size\" title=\":mad:\">", 
                "<img src=\"imagens/emoticons/nerd.png\" class=\"emoticons-size\" title=\":nerd:\">", 
                "<img src=\"imagens/emoticons/ninja.png\" class=\"emoticons-size\" title=\":minja:\">", 
                "<img src=\"imagens/emoticons/quiet.png\" class=\"emoticons-size\" title=\":quiet:\">", 
                "<img src=\"imagens/emoticons/sad.png\" class=\"emoticons-size\" title=\":sad:\">", 
                "<img src=\"imagens/emoticons/secret.png\" class=\"emoticons-size\" title=\":secret:\">", 
                "<img src=\"imagens/emoticons/smart.png\" class=\"emoticons-size\" title=\":smart:\">", 
                "<img src=\"imagens/emoticons/smile.png\" class=\"emoticons-size\" title=\":smile:\">", 
                "<img src=\"imagens/emoticons/smiling.png\" class=\"emoticons-size\" title=\":smiling:\">", 
                "<img src=\"imagens/emoticons/surprised.png\" class=\"emoticons-size\" title=\":surprised:\">", 
                "<img src=\"imagens/emoticons/surprised-1.png\" class=\"emoticons-size\" title=\":surprised1:\">", 
                "<img src=\"imagens/emoticons/suspicious.png\" class=\"emoticons-size\" title=\":suspicious:\">", 
                "<img src=\"imagens/emoticons/suspicious-1.png\" class=\"emoticons-size\" title=\":suspicious1:\">", 
                "<img src=\"imagens/emoticons/tongue-out.png\" class=\"emoticons-size\" title=\":tongueout:\">", 
                "<img src=\"imagens/emoticons/tongue-out-1.png\" class=\"emoticons-size\" title=\":tongueout1:\">", 
                "<img src=\"imagens/emoticons/unhappy.png\" class=\"emoticons-size\" title=\":unhappy:\">", 
                "<img src=\"imagens/emoticons/wink.png\" class=\"emoticons-size\" title=\":wink:\">");


    $sql = "SELECT * FROM (SELECT DATE_FORMAT(m.data_hora, '%d/%m/%Y %H:%i:%s') as data_hora,m.id_para,m.id_mensagem,m.mensagem,m.id_de,m.visualizado FROM mensagens as m WHERE (m.id_de = '$id_de' AND m.id_para = '$id_para') OR (m.id_de = '$id_para' AND m.id_para = '$id_de') ORDER BY m.id_mensagem DESC LIMIT 6) sub ORDER BY id_mensagem ASC";

    $resultado = mysqli_query($conn,$sql);
    $conta = mysqli_num_rows($resultado);

    if($conta <= 0){
        echo "<code>Envie uma mensagem para iniciar a conversa!!</code>";
    }else{
        while($row = mysqli_fetch_array($resultado)){
            $row['mensagem'] = str_replace($emotions, $images, $row['mensagem']); 

            if($row['id_de'] == $id_de){ ?>
                <div align="right"><div class="chat-i"><?php echo $row['mensagem']; ?><br><small style="font-size: 0.7em;"><?php echo $row['data_hora']; ?></small><?php if ($row['visualizado'] == '1') { ?> &nbsp;<small><i class="  glyphicon glyphicon-unchecked"></i></small> <?php }else{ ?> &nbsp;<small><i class="glyphicon glyphicon-check"></i></small> <?php } ?></div></div>
            <?php }else if($row['id_de'] != $id_de){ ?>
                <div align="left"><div class="chat-you"><?php echo $row['mensagem']; ?><br><small style="font-size: 0.7em;"><?php echo $row['data_hora']; ?></small><?php if ($row['visualizado'] == '1') { ?> &nbsp;<small><i class="  glyphicon glyphicon-unchecked"></i></small> <?php }else{ ?> &nbsp;<small><i class="glyphicon glyphicon-check"></i></small> <?php } ?></div></div>
            <?php $id_mensagem = $row['id_mensagem'];
                $sql2 = "UPDATE mensagens SET visualizado = '2' WHERE id_mensagem = $id_mensagem";
                  $resultado2 = mysqli_query($conn,$sql2); } 
        } 
    } ?>