 <?php get_header(); global $modal; ?>

<section id="sobre_nos">
  <div class="row sobre-nos">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center botao-cabecalho">
          <a class="vem-conhecer" href="#sobre-nos-titulo">Vem conhecer!</a>
        </div>

        <div class="col-xs-12 text-center">
          <h1 class="titulo tituloSessoes" id="sobre-nos-titulo">Sobre nós</h1>
        </div>

        <div class="col-md-5 col-sm-6 col-md-offset-1 col-xs-12">
          <h2 class="como-surgiu-tit">  Como surgiu? </h2>

          <div class="text-justify como-surgiu-texto">
            O projeto surgiu a partir da iniciativa de um grupo de profissionais que constataram que apesar da grande procura
            pela psicoterapia, muitos clientes não aderiram por limitações financeiras.
          <br>
            Como enfrentamento dessa problemática, pretendemos estruturar uma rede de profissionais engajados na cauda da saúde
            mental e que compreendam a realidade de nossa população.
          </div>
        </div>
        <div class="col-md-5 col-sm-6 col-xs-11 text-justify container-dados-oms">
          <span class="texto-dados-oms">
            Temos uma demanda social bastante urgente, conforme apontam os dados fornecidos pela <abbr title="Organização Mundial da Saúde">OMS</abbr> no Brasil.

            A depressão atinge 11,5 milhões de pessoas (5.8% da população), enquanto distúrbios relacionados a ansiedade afetam mais de 18.6 milhões de Brasilleiros (9.3% da população).
          </span>
        </div>

      </div>
    </div>
    <br/>
  </div>
</section>

<section id="comoComeco">
  <div class="container">
    <h1 class="tituloSessoes text-center">Como começo?</h1>
    <div class="row caixaComoComeco">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div>
          <h2>Quem pode participar?</h2>
          <br>
          <span>
          Qualquer cidadão brasileiro de baixa renda (Classe B1 - C2). De todas as faixas etárias.
          <br>
          É necessário comprovar sua renda por meio de um questionário socioeconômico e apresentar a documentação exigida ao lado.
          </span>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div>
          <h2>Quais são os documentos obrigatórios?</h2>
          <span>
          <ul>
            <li>- Xerox do RG e do CPF,</li>
            <li>- Comprovante de endereço,</li>
            <li>- Xerox carteira de trabalho ou recibos salariais.</li>
          </ul>
        </span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="comoInscrevo" class="azulClarinho">
  <div class="container">
    <h1 class="tituloSessoes text-center"> Como me inscrevo? </h1>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <span>
            <p>
              A triagem é gratuita, para que você possa conhecer o profissional, apresentar a
              documentação, tirar dúvidas e juntos planejarem o processo terapêutico.
            </p>
          </span>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 linkFormulario">
          <span>
            <p>
              Basta deixar um meio de contato (celular, telefone ou e-mail) e o mais breve possível
              um de nossos profissionais entrará em contato para agendar a triagem.
              <br><br>
              <a href="#cadastre" >Clique aqui</a> para ir ao formulário.
            </p>
          </span>
        </div>

      </div>

  </div>
</section>

<section id="consultas">
  <h1 class="tituloSessoes text-center"> Consultas </h1>
  <div class="container">
    <div class="row">
      <?php
        $args = array(
          'category_name' => 'consultas',
          'orderby'     => 'date'
        );

        $custom_query = new WP_Query( $args );

        if (have_posts()):
          while ($custom_query->have_posts()): $custom_query->the_post();
      ?>

      <div class="col-md-4 col-sm-6 col-xs-12 caixaConsulta">
        <div>

          <h3 class="text-center"> <?php the_title(); ?> </h3>

          <span>
          <?php the_excerpt();?>
        </span>
        </div>
      </div>

      <?php endwhile; endif ?>
    </div>
  </div>
</section>

<section id="cadastre" class="corpo-cadastre">
  <h1 class="text-center"> Cadastre-se </h1>
  <div class="container">
    <div class="row caixaCadastre">

          <div class="col-md-6 col-sm-6 col-xs-12">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border">
                <span>Inscrição</span>
                </legend>
              <p class="text-center">
                <span>Faça o seu cadastro que entraremos em contato!</span>
              </p>

              <div class="row">
                <form id="formulario" action="" method="post">

                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label for="nome"> <span>Nome:</span> </label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" required="required">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label for="telefone"> <span>Telefone:</span> </label>
                    <input type="text" name="telefone" class="form-control telefone" id="telefone" placeholder="Telefone" required="required">
                  </div>
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <label for="email"><span>E-mail:</span> </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
                  </div>
                  <button id="botaoFormulario" type="submit"  name="cadastro" class="btn btn-primary botao col-md-offset-8 col-md-3 col-xs-6 col-xs-offset-3">Enviar</button>
                </form>
              </div>
            </fieldset>
          </div>


          <div class="col-md-6 col-sm-6 col-xs-12">
            <fieldset class="scheduler-border">
              <legend class="scheduler-border"> <span>Alguma Dúvida?</span></legend>
              <div class="row contato">

                <div class="col-xs-12" style="padding-top: 20px;">
                  <img class=" col-md-2 col-xs-3 icon" src="<?php echo get_stylesheet_directory_uri();?>/img/whatsapp.svg" alt="ícone de telefone">
                  <p class="col-md-10 col-xs-12 text-center"><span>Ligue ou mande uma mensagem:</span> <br> <a href="tel:11950302017">(11) 95030-2017 </a>- Vivo  </p>
                </div>

                <div class="col-xs-12" style="padding-top: 15px;">
                  <img class=" col-md-2 col-xs-3 icon" style="padding-top: 10px;"
                       src="<?php echo get_stylesheet_directory_uri();?>/img/email.svg" alt="ícone de email">
                  <p class="col-md-10 col-xs-12 text-center" > <span>Mande um email:</span> </p>
                  <p class="col-md-10 col-xs-12 text-center emailLink"> <a  href="mailto:psicoterapia.todos@outlook.com"><span>psicoterapia.todos@outlook.com</span></a></p>
                </div>

                <div class="col-xs-12">
                  <img class=" col-md-2 col-xs-3 icon" style="padding-top: 10px;"
                       src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.svg" alt="ícone do facebook">
                  <p class="col-md-10 col-xs-12 text-center" style="padding-top: 20px;" >Acesse nosso facebook: </p>
                  <p class="col-md-10 col-xs-12 text-center"><a target="_blank" href="https://www.facebook.com/projetopsicoterapiaparatodos/?ref=br_rs"><span>Projeto Psicoterapia para Todos</span></a> </p>
                </div>

              </div>
            </fieldset>
          </div>

    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="submitModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <span>Seu cadastro foi realizado com sucesso!</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<div id="valores">
  <section class="container">

    <h1 class="text-center valores-titulo"> O que guia o projeto? </h1>

    <div class="row">

      <div class="col-md-4 col-xs-12">
        <h1 class="text-center">Missão</h1>
        <span>Tornar a psicoterapia acessível para maior faixa da população, levando conscientização sobre a importância dos cuidados com a saúde mental.</span>
      </div>

      <div class="col-md-4 col-xs-12">
        <br/>
        <img src="<?php echo get_stylesheet_directory_uri();?>/img/pessoas.png" width="200" alt="Imagem ilustativa de pessoas"/>
      </div>

      <div class="col-md-4 col-xs-12">
        <h1 class="text-center">Visão</h1>
        <span>Ser reconhecido pela excelência de serviço, conduta ética e comprometimento com a causa da saúde mental.</span>
      </div>

    </div>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6 col-xs-12">
        <h1 class="text-center">Valores</h1>
        <span>
          - Compreensão do ser humano como ser biopsicossocial.<br/>
          - Comprometimento com as causas sociais.<br/>
          - Respeito às subjetividades.<br/>
        </span>
      </div>
      <div class="col-md-3"></div>

    </div>

  </section>
</div>

<?php get_footer(); ?>
