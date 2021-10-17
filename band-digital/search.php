<?php get_header(); ?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">
                        <?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Результаты поиска по&nbsp;фразе: %s', 'band-digital' ), '<span>' . get_search_query() . '</span>' );
					?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <?php $cnt = 0;
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $cnt++;
                    switch($cnt){
                        case '3': ?>
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <?php
                                if( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'post-thumbnail', array(
                                    'class' => "img-fluid w-100",
                                ));
                                }
                                else {
                                    echo '<img class="img-fluid w-100" src="'. get_template_directory_uri() .'/images/blog/blog-1.jpg" />';
                                } 
                                 ?>
                               
                                <!-- <img src="images/blog/blog-1.jpg" alt="" class="img-fluid"> -->
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase"><?php the_author(); ?></span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span><?php the_time('j F Y'); ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                                <p class="mt-3"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <?php
                        break;
                        default: ?>
<div class="col-lg-6">
                            <div class="blog-post">
                                <?php
                                if( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'post-thumbnail', array(
                                    'class' => "img-fluid w-100",
                                ));
                                }
                                else {
                                    echo '<img class="img-fluid w-100" src="'. get_template_directory_uri() .'/images/blog/blog-1.jpg" />';
                                } 
                                 ?>
                               
                                <!-- <img src="images/blog/blog-1.jpg" alt="" class="img-fluid"> -->
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase"><?php the_author(); ?></span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span><?php the_time('j F Y'); ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                                <p class="mt-3"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <?php break; } endwhile; else: ?>
                    Записей нет.
                <?php endif; ?>
                <div class="col-lg-12">
                    <?php the_posts_pagination( array(
                        'prev_text'    => __('<span class="p-2 border">« Предыдущие посты</span>'),
	                    'next_text'    => __('<span class="p-2 border">Следующие посты »</span>'),
                        'before_page_number' => '<span class="p-2 border">',
                    	'after_page_number'  => '</span>'
                    )); ?>
                </div>
                </div>
                    <!-- <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <img src="images/blog/blog-1.jpg" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">Михаил Третьяков</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>20 июня 2020</span>
                                    </div>
                                </div>
                                <a href="blog-single.html" class="h4 ">Маркетинговые фишки для нового сайта</a>
                                <p class="mt-3">Как внедрить несколько значимых фишек на своем новом сайте и выйти в топ, даже если вы до этого не занимались SEO.</p>
                                <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="blog-post">
                                <img src="images/blog/blog-2.jpg" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">Олег Торпяков</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>12 апреля 2020</span>
                                    </div>
                                </div>
                                <a href="blog-single.html" class="h4 ">Использовать шаблоны — плохо? </a>
                                <p class="mt-3">Отвечаю на больной вопрос от наших клиентов: стоит ли использовать шаблоны для сайта в своих проектах.</p>
                                <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <img src="images/blog/blog-lg.jpg" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">Марина Цветкова</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>30 марта 2020</span>
                                    </div>
                                </div>
                                <a href="blog-single.html" class="h4 ">Провал в стратегии продвижения</a>
                                <p class="mt-3">Что делать, если вы наняли некомпетентного специалиста для продвижения? Можно ли спасти проект, который попал в теневой бан или нет.</p>
                                <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-post">
                                <img src="images/blog/blog-3.jpg" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">Оксана Вальнова</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>1 декабря 2019</span>
                                    </div>
                                </div>
                                <a href="blog-single.html" class="h4 ">Пять способов обойти конкурентов</a>
                                <p class="mt-3">Поисковая выдача — это всегда конкуренция. Но что делать, чтобы конкуренты остались позади вас? Отвечаю в статье</p>
                                <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>

                            <div class="col-lg-6">
                            <div class="blog-post">
                                <img src="images/blog/blog-4.jpg" alt="" class="img-fluid">
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <span class="h6 text-uppercase">Мишель Ким</span>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span>10 ноября 2019</span>
                                    </div>
                                </div>
                                <a href="blog-single.html" class="h4 ">Лучшие сервисы для продвижения вашего сайта</a>
                                <p class="mt-3">Существуют сервисы, котоорые могут помочь продвинуть сайт по СЕО, но есть и мошенники, которые могут оставить вас без денег.</p>
                                <a href="blog-single.html" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div> -->

            </div>
            <div class="col-lg-4">
                      <div class="row">
                        <div class="col-lg-12">
                            <div class="sidebar-widget search">
                                <?php get_search_form(); ?>
                            </div>
                            <?php if (! dynamic_sidebar('sidebar-blog') ) : ?>
                                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                                <?php endif; ?>
                        </div>

                        <div class="col-lg-12">
                            <div class="sidebar-widget about-bar">
                                <h5 class="mb-3">О нас</h5>
                                <p>Мы — маркетинговое агентство полного цикла, которое оказывает диджитал услуги стартапам и крупным компаниям</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="sidebar-widget category">
                                <h5 class="mb-3">Рубрики</h5>
                                <ul class="list-styled">
                                    <li>Маркетинг</li>
                                    <li>Диджитал</li>
                                    <li>SEO</li>
                                    <li>Веб-дизайн</li>
                                    <li>Разработка</li>
                                    <li>Видео</li>
                                    <li>Подкаст</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="sidebar-widget tag">
                                <a href="#">web</a>
                                <a href="#">development</a>
                                <a href="#">seo</a>
                                <a href="#">marketing</a>
                                <a href="#">branding</a>
                                <a href="#">web deisgn</a>
                                <a href="#">Tutorial</a>
                                <a href="#">Tips</a>
                                <a href="#">Design trend</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-widget download">
                                <h5 class="mb-4">Полезные файлы</h5>
                                <a href="#"> <i class="fa fa-file-pdf"></i>Презентация Promodise</a>
                                <a href="#"> <i class="fa fa-file-pdf"></i>10 источников бесплатного SEO</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
        </div>
    </div>
</section>
<?php get_footer(); ?>