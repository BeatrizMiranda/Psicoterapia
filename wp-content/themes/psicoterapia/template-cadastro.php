<?php
  /* Template Name: cadastro */
  global $wpdb;
  $cadastros = $wpdb->get_results('select * from wp_cadastro');
?>
<!DOCTYPE html>
<html>
	<head>
	  <title>Cadastrados no Site</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Css-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" type="text/css" />

  </head>

  <body>
    <h1>Clientes Cadastrados</h1>
    <table border='1'>
      <thead>
        <tr>
          <th>Nome</td>
          <th>Telefone</td>
          <th>Email</td>
        </tr>
      </thead>
      <?php
        foreach ($cadastros as $value):
      ?>
      <tbody>
        <tr>
          <td>
            <?php
              echo $value->Nome;
            ?>
          </td>
          <td>
            <?php
              echo $value->Telefone;
            ?>
          </td>
          <td>
            <?php
              echo $value->Email;
            ?>
          </td>
        </tr>
      </tbody>
      <?php
        endforeach;
      ?>
    </table>
  </body>
</html>
