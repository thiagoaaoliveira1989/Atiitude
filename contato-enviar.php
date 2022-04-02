<?php

   
    use PHPMailer\PHPMailer\PHPMailer;
    
    require("PHPMailer-master/src/PHPMailer.php");
    require("PHPMailer-master/src/SMTP.php");
    require("PHPMailer-master/src/Exception.php");
    
        
  
        
            $mail = new PHPMailer(true);   
            
            
            $nome = filter_input(INPUT_POST, 'nome');
            $telefone = filter_input(INPUT_POST, 'telefone');
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $mensagem = filter_input(INPUT_POST, 'mensagem');
            $arquivo= 
            "===================================" ."<br/>"."\r\n"
            . "Formulario de Contato" ."<br/>"."\r\n"
            . "===================================" ."<br/>"."\r\n"
            . "Nome: " . $nome ."<br/>"."\r\n"
            . "Telefone: " . $telefone ."<br/>". "\r\n"
            . "Email: "  . $email ."<br/>"."\r\n"
            . "Mensagem: " . $mensagem ."<br/>"."\r\n"
            . "===================================" ."<br/>". "\r\n";
            $alert="";
            
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0;// debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->CharSet = 'UTF-8';
            $mail->Host = 'smtp.titan.email';
            $mail->Username = 'thiagoaraujo@atitudeglass.com';
            $mail->Password = '123456789';
            $mail->Port = 465;
            $mail->setFrom('thiagoaraujo@atitudeglass.com', 'Atendimento');
            $mail->addAddress('thiagoaraujo@atitudeglass.com');
            
            $mail->isHTML(true);                                 
            $mail->Subject = 'Formulário de Contato';
            $mail->Body = $arquivo;
           

           
            
            if($mail->send()){
            $alert= '<div class="alert-success">
            <span>Mensagem Enviado</span>
            </div>';
            } else{
            $alert= '<div class="alert-error">
            <span>'.$e->getMessage().'</span>
            </div>';    
            }
            
            header('location: contato.html');
            
   
            
      
         
    
        ?>
