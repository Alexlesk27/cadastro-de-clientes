<?php
  include("conexao.php");

  $nome=$_POST['nome'];
  $contatos=$_POST['contatos'];
  $email=$_POST['email'];
  $senha=password_hash($_POST['senha'],PASSWORD_DEFAULT);

  $sql="INSERT INTO clientes(Nome, telefone, email, senha)
      values('$nome','$contatos','$email','$senha')";
      if(mysqli_query($conexao, $sql)){
          echo "Usuario cadastrado com sucesso!";
      }

      else{
          echo"Usuario não cadastrado!".mysqli_connect_error($conexao);
      }

      mysqli_close($conexao);
?>