<?php get_header(); ?>
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">
                        <?php              
                            if( is_category() ){
                                echo __('<small>Рубрика </small><br>') . get_queried_object()->name;
                            }
                            if( is_tag() ){
                                echo __('<small>Записи с меткой </small><br> ') . get_queried_object()->name;
                            }
                            if( is_author() ){
                                echo __('<small>Записи автора </small><br>') . get_the_author_meta('display_name');
                            }
                            if( is_date() ){
                                echo __('<small>Архив по дате </small><br>') . get_the_date('j F Y');
                            }
                        ?>
                    </h1>
                    <p>Полезные статьи про маркетинг и диджитал</p>
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
                                        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>" class="h6 text-uppercase"><?php the_author(); ?></a>
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
                                        <a href="<?php echo get_author_posts_url( get_the_author_meta('ID')); ?>" class="h6 text-uppercase"><?php the_author(); ?></a>
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
<?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>