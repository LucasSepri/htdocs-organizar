<?php
    include_once("conexao.php");
    $nome_usuario = $_POST['txt_nome_usuario'];
    $email_usuario = $_POST['txt_email_usuario'];
    //echo "$nome_usuario - $email_usuario";
    
    $result_usuario = "INSERT INTO usuarios(nome, email) VALUES ('$nome_usuario','$email_usuario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
         
       
        echo "<script>alert('Cadastrado com sucesso');location.href=\"index.php\";</script>"; 
            }
?>