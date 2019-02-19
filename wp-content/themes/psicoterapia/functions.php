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
  function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Leia mais</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
?>
