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
    global $modal;
    $modal = true;
  }


// função para limitar palavras nas tumbs das noticias
  function custom_excerpt_length( $length ) {
    return 25;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length');
?>
