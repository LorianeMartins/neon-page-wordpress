<?php
    // Template name: Home
?>

<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <section class="s-hero">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h3>Abra sua conta, é só baixar o app!</h3>
        <h1>A conta digital certa pra cuidar bem do seu dinheiro</h1>
        <button class="btn-primary">Abra sua conta digital</button>
        <ul>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-anuidade.svg"
                alt="Ícone de cartão sem anuidade"
              />
            </div>
            <span>Cartão sem <br />anuidade</span>
          </li>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-conta-digital.svg"
                alt="Ícone de conta digital"
              />
            </div>
            <span>Conta digital <br />100% grátis</span>
          </li>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-dinheiro.svg"
                alt="Ícone de dinheiro"
              />
            </div>
            <span>Seu dinheiro <br />rendendo mais</span>
          </li>
        </ul>
      </div>
      <div class="area-image">
        <h2 data-aos="fade-left">Banco 100% digital</h2>
        <div class="image" data-aos="zoom-in">
          <img
            class="card-front"
            src="<?php echo get_template_directory_uri()?>/assets/img/card-neon-frnt.png"
            alt="Card front"
          />
          <img
            class="card-back"
            src="<?php echo get_template_directory_uri()?>/assets/img/card-neon-back.png"
            alt="Card back"
          />
          <img
            class="circle"
            src="<?php echo get_template_directory_uri()?>/assets/img/circle-cards-neon.svg"
            alt="Circle cards"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="s-card-neon">
    <div class="container">
      <div class="left-area">
        <div class="ilustra-mockup">
          <img
            src="<?php echo get_template_directory_uri()?>/assets/img/circle-mockup.svg"
            class="circle"
            alt="Círculo mockup"
            data-aos="fade-left"
          />
          <img
            src="<?php echo get_template_directory_uri()?>/assets/img/mockup.svg"
            class="mockup"
            alt="Mockup"
            data-aos="flip-right"
          />
        </div>
        <div class="text" data-aos="fade-up">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-neon.svg" alt="Ícone neon" />
          </div>
          <div class="info-text">
            <h3>Baixe nosso app</h3>
            <p>
              Que tal abrir uma conta digital para ver como a gente faz a sua
              vida muito mais simples?
            </p>
            <ul>
              <li>
                <a href="" target="_blank">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/apple-store.svg" alt="Apple store" />
                </a>
              </li>
              <li>
                <a href="" target="_blank">
                  <img src="<?php echo get_template_directory_uri()?>/assets/img/google-play.svg" alt="Google play" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="right-area">
        <div class="main-text" data-aos="fade-left">
          <h2>Resolva sua vida direto pelo app Neon!</h2>
          <ul>
            <li>
              <div class="info">
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-cartao-credito.svg"
                  class="icon"
                  alt=""
                />
                <div class="text">
                  <h3>Cartão de crédito sem anuidade</h3>
                  <p>
                    Conta digital com cartão de crédito sem anuidade e sem
                    complicação
                  </p>
                </div>
              </div>
              <div class="arrow-wight">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/arrow-right.svg" alt="Arrow right" />
              </div>
            </li>
            <li>
              <div class="info">
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-taxas.svg"
                  class="icon"
                  alt="Ícone taxas"
                />
                <div class="text">
                  <h3>Sem taxas</h3>
                  <p>
                    Transferências, boletos de depósito e outros serviços
                    gratuitos
                  </p>
                </div>
              </div>
              <div class="arrow-wight">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/arrow-right.svg" alt="Arrow right" />
              </div>
            </li>
            <li>
              <div class="info">
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-investimentos.svg"
                  class="icon"
                  alt="Ícone investimentos"
                />
                <div class="text">
                  <h3>Mais investimentos</h3>
                  <p>
                    Rendem mais que a poupança e você resgata quando quiser
                  </p>
                </div>
              </div>
              <div class="arrow-wight">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/arrow-right.svg" alt="Arrow right" />
              </div>
            </li>
          </ul>
          <a class="btn" href="">Conheça outros produtos</a>
        </div>
        <div class="box-card" data-aos="fade-left">
          <div class="text">
            <h2>Neon Pejota</h2>
            <h3>Contas digitais PJ gratuitas para decolar seu negócio!</h3>
            <p>
              As melhores contas para fazer pagamentos, compras e receber dos
              seus clientes.
            </p>
            <div class="btns">
              <button class="btn-primary">Sou MEI</button>
              <button class="btn-primary">Sou ME</button>
            </div>
          </div>
          <img
            src="<?php echo get_template_directory_uri()?>/assets/img/card-front-pj.svg"
            class="image"
            alt="Card pj"
          />
        </div>
      </div>
    </div>
  </section>

  <section class="s-card-evidences">
    <div class="container">
      <div class="top" data-aos="fade-right">
        <h2>
          <span>Prático, fácil, moderno</span> Você resolve tudo sem estresse
          😊
        </h2>
        <div class="swiper-pagination"></div>
      </div>

      <div class="swiper slide-evidences" data-aos="fade-up">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="card-brief">
              <div class="user">
                <strong>@marciogurka</strong>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                  alt="Ícone twiiter"
                />
              </div>
              <p>
                Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                Muito amor por esse banco #bancoNeon
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-brief">
              <div class="user">
                <strong>@marciogurka</strong>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                  alt="Ícone twiiter"
                />
              </div>
              <p>
                Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                Muito amor por esse banco #bancoNeon
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-brief">
              <div class="user">
                <strong>@marciogurka</strong>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                  alt="Ícone twiiter"
                />
              </div>
              <p>
                Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                Muito amor por esse banco #bancoNeon
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-brief">
              <div class="user">
                <strong>@marciogurka</strong>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                  alt="Ícone twiiter"
                />
              </div>
              <p>
                Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                Muito amor por esse banco #bancoNeon
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-brief">
              <div class="user">
                <strong>@marciogurka</strong>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                  alt="Ícone twiiter"
                />
              </div>
              <p>
                Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                Muito amor por esse banco #bancoNeon
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card-brief">
              <div class="user">
                <strong>@marciogurka</strong>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/img/icon-twiiter.svg"
                  alt="Ícone twiiter"
                />
              </div>
              <p>
                Valeu @banconenon! Linda embalagem e o cartão tbm é lindo!
                Muito amor por esse banco #bancoNeon
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="s-digital-account">
    <div class="container">
      <div class="text" data-aos="fade-right">
        <h2>
          <span>Aproveite</span>Domine o seu dinheiro com uma conta 100%
          digital
        </h2>
        <ul>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-cartao-internacional.svg"
                alt="Ícone cartão internacional"
              />
            </div>
            <div class="info">
              <h4>Cartão visa internacional</h4>
              <p>Tenha facilidades e benefícios para o seu dia a dia.</p>
            </div>
          </li>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-taxa-zero.svg"
                alt="Ícone taxa zero"
              />
            </div>
            <div class="info">
              <h4>Zero mensalidade e anuidade</h4>
              <p>Não gaste grana pagando taxas desnecessárias.</p>
            </div>
          </li>
          <li>
            <div class="icon">
              <img
                src="<?php echo get_template_directory_uri()?>/assets/img/icon-poupanca.svg"
                alt="Ícone de poupança"
              />
            </div>
            <div class="info">
              <h4>Investimento que rende mais que a poupança</h4>
              <p>Invista o seu dinheiro de maneira mais rentável.</p>
            </div>
          </li>
        </ul>
        <button class="btn-primary">Ative sua conta digital</button>
      </div>
      <div class="images">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/mockup-01.svg" class="mockup-01" alt=""
        data-aos="fade-up" / > 
        <img src="<?php echo get_template_directory_uri()?>/assets/img/mockup-02.png"
        class="mockup-02" alt="" data-aos="fade-down" / >
        <img
          src="<?php echo get_template_directory_uri()?>/assets/img/circle-conta-digital.svg"
          class="circle"
          alt=""
          data-aos="zoom-in"
        />
      </div>
    </div>
  </section>

  <?php endwhile; else: endif; ?>

<?php get_footer(); ?>
