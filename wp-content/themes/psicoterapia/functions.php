<?php
  function registrarCadastro(){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $nomeTabela = 'wp_cadastro';

    global $wpdb;
    $wpdb->insert($nomeTabela, array(
      'nome'=> $nome,
      'telefone' => $telefone,
      'email' => $email
    ));
  }
  if(isset($_POST['cadastro'])){
    registrarCadastro();
  }
?>
