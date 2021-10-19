<?php get_header(); ?>
<!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Цены на услуги</h1>
              <p>Подберите подходящий тариф</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
      <!-- PRICE AREA START  -->
    <section id="pricing" class="section-padding bg-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 m-auto">
            <div class="section-heading">
              <h4 class="section-title">Доступные тарифы для вас</h4>
              <p>Подберите тот, который подходит вам больше всего</p>
            </div>
          </div>
        </div>
        <div class="row">
        <?php echo get_template_part('template-parts/content', 'price'); ?> 

          <!-- <div class="col-lg-4 col-sm-6">
            <div class="pricing-block">
              <div class="price-header">
                <i class="icofont-diamond"></i>

                <h4 class="price">15 000<small>₽</small></h4>
                <h5>ежемесячно</h5>
              </div>
              <div class="line"></div>
              <ul>
                <li>5 веб-сайтов</li>
                <li>Дизайн презентаций</li>
                <li>Видео-визитка</li>
                <li>Общий менеджер</li>
                <li>Упаковка маркетинг-кит</li>
                <li>Домен для сайта на год</li>
                <li>Поддержка в расширенное время</li>
                <li>Ежемесячный отчет</li>
              </ul>

              <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="pricing-block">
              <div class="price-header">
                <i class="icofont-rocket-alt-1"></i>

                <h4 class="price">25 000<small>₽</small></h4>
                <h5>ежемесячно</h5>
              </div>
              <div class="line"></div>
              <ul>
                <li>10 веб-сайтов</li>
                <li>Дизайн презентаций</li>
                <li>Видео-визитка</li>
                <li>Отдельный менеджер</li>
                <li>Упаковка маркетинг-кит</li>
                <li>Домен для сайта на год</li>
                <li>Поддержка в любое время</li>
                <li>Ежемесячный отчет</li>
              </ul>

              <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="pricing-block">
              <div class="price-header">
                <i class="icofont-light-bulb"></i>

                <h4 class="price">55 000<small>₽</small></h4>
                <h5>ежемесячно</h5>
              </div>
              <div class="line"></div>
              <ul>
                <li>1 веб-сайт</li>
                <li>Дизайн презентаций</li>
                <li>Видео-визитка</li>
                <li>Общий менеджер</li>
                <li>Упаковка маркетинг-кит</li>
                <li>Домен для сайта на год</li>
                <li>Поддержка в рабочее время</li>
                <li>Ежемесячный отчет</li>
              </ul>

              <a href="#" class="btn btn-hero btn-circled">выбрать тариф</a>
            </div>
          </div> -->

        </div>
      </div>
    </section>
    <!-- PRICE AREA END  -->
    <!--  TESTIMONIAL AREA START  -->
    <?php echo get_template_part('template-parts/content', 'testimonial', [
  'custom_title' => 'Клиенты, которые нам доверяют',
  'custom_description' => 'Отзывы постоянных клиентов'
]); ?> 
    <!--  TESTIMONIAL AREA END  -->
    <!--  PARTNER START  -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-md-3 text-center">
            <img src="images/clients/client01.png" alt="partner" class="img-fluid" />
          </div>
          <div class="col-lg-3 col-sm-6 col-md-3 text-center">
            <img src="images/clients/client06.png" alt="partner" class="img-fluid" />
          </div>
          <div class="col-lg-3 col-sm-6 col-md-3 text-center">
            <img src="images/clients/client04.png" alt="partner" class="img-fluid" />
          </div>
          <div class="col-lg-3 col-sm-6 col-md-3 text-center">
            <img src="images/clients/client05.png" alt="partner" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!--  PARTNER END  -->
<?php get_footer(); ?>