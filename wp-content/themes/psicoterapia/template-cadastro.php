<?php
  /* Template Name: cadastro */
  global $wpdb;
  $cadastros = $wpdb->get_results('select * from wp_cadastro');
?>
<table>
  <th>
    <td>Nome</td>
    <td>Telefone</td>
    <td>Email</td>
  </th>
  <?php
    foreach ($cadastros as $value):
  ?>
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
  <?php
    endforeach;
  ?>
</table>
