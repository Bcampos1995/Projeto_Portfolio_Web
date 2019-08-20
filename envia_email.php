 <?php
  //1 – Definimos Para quem vai ser enviado o email
  $para = "bcampos1995@gmail.com";
  //2 - resgatar o nome digitado no formulário e  grava na variavel $nome
  $Mensagem = $_POST['inputEmail'];
  $assunto = "Contato de Cliente ao Ver Portfolio";
   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:Cliente  </strong>";
  $mensagem .= /*"<br>  <strong>Mensagem: </strong>".*/$Mensagem;
 
//5 – agora inserimos as codificações corretas e  tudo mais.
  $headers =  "Content-Type:text/html; charset=UTF-8\n";
  $headers .= "From:  siteportfoliobruno.000webhostapp.com>\n"; //Vai ser //mostrado que  o email partiu deste email e seguido do nome
  $headers .= "X-Sender:  siteportfoliobruno.000webhostapp.com>\n"; //email do servidor //que enviou
  $headers .= "X-Mailer: PHP  v".phpversion()."\n";
  $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  $headers .= "Return-Path:  <sistema@dominio.com.br>\n"; //caso a msg //seja respondida vai para  este email.
  $headers .= "MIME-Version: 1.0\n";
 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.
  ?>