<?php get_header(); ?>



<!-- ==== MENU ==== -->

<nav class="nav-bar">
    <ul>
        <li class="menu-item"> <a class="menu-item-txt" href="#home"> Home </a> <img id="menu-img-home" class="menu-item-img" src="<?php bloginfo('template_url'); ?>/Icons/menu-home.png" /></li>
        <li class="menu-item"> <a class="menu-item-txt" href="#about"> About Me </a> <img id="menu-img-about" class="menu-item-img" src="<?php bloginfo('template_url'); ?>/Icons/menu-about.png" /></li>
        <li class="menu-item"> <a class="menu-item-txt" href="#portfolio"> Portfolio </a> <img id="menu-img-portfolio" class="menu-item-img" src="<?php bloginfo('template_url'); ?>/Icons/menu-portfolio.png" /></li>
        <li class="menu-item"> <a class="menu-item-txt" href="#blog"> Blog </a> <img id="menu-img-blog" class="menu-item-img" src="<?php bloginfo('template_url'); ?>/Icons/menu-blog.png" /></li>
        <li class="menu-item"> <a class="menu-item-txt" href="#contact"> Contact </a> <img id="menu-img-contact" class="menu-item-img" src="<?php bloginfo('template_url'); ?>/Icons/menu-contact.png" /></li>
    
    </ul>
</nav>



<!-- ==== HEADER ==== -->

<header id="home">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/header_bg2.jpg">
    <div class="headertext">
        <h1><span ></span></h1>
        <?php
            $content_post = get_page_by_title('headertext');
            $content = $content_post->post_content;
            $content_lines = explode("\n",$content);
        ?>
        <p><?php echo $content_lines[0]; ?></p>
        </br>
        <p><?php echo $content_lines[1]; ?></p>
    </div>
</header>

<!-- ==== ABOUT ==== -->
<div id="about-all">

    <!-- ?php echo get_post_field('post_content', 20); ?> -->

    <section id="about">

        <?php
        $content_post = get_page_by_title('about');
        $content = $content_post->post_content;
        echo $content;
        ?>

    </section>

    <!-- ==== SECTION DIVIDER1 -->

    <section id="group1">

        <?php
        $content_post = get_page_by_title('group1');
        $content = $content_post->post_content;
        echo $content;
        ?>

    </section>

    <!-- ==== SECTION DIVIDER2 -->

    <section id="group2">

        <?php
        $content_post = get_page_by_title('group2');
        $content = $content_post->post_content;
        echo $content;
        ?>

    </section>

    <!-- ==== TEHCNICAL SKILLS-->

    <section id="skills" style="margin-top: 0px;">

        <br>
        <br>
        <h1 class="title pages-headline"> My Technical Skills New </h1>

        <div class="container">
            <div class="bar blue">
                <div class="num"><?php echo get_theme_mod('html_skills', '0'); ?><span>%</span></div>
                <div class="word">HTML</div>
            </div>
            <div class="bar red">
                <div class="num"><?php echo get_theme_mod('css_skills', '0'); ?><span>%</span></div>
                <div class="word">CSS</div>
            </div>
            <div class="bar brown">
                <div class="num"><?php echo get_theme_mod('js_skills', '0'); ?><span>%</span></div>
                <div class="word">JavaScript</div>
            </div>
            <div class="bar gray">
                <div class="num"><?php echo get_theme_mod('wp_skills', '0'); ?><span>%</span></div>
                <div class="word">WordPress</div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <hr color="#CCC9C9">

    </section>

    <!-- ?php echo get_post_field('post_content', 14); ?> -->

</div>

<!-- ==== PORTFOLIO ==== -->

<section id="portfolio">

    <br>
    <br>
    <br>
    <header>
        <br>
        <h1 class="pages-headline">I WORKED ON COOL STUFF</h1>
        <hr width="49%" ; color="#CCC9C9">
        <br>
    </header>

    <div id="wrapper-switch-portfolio">

        <div id="ph-switch-portfolio">
            <div name="ALL" class="switch-portfolio" onclick="updatePortfolio(this)">
                <p>ALL</p>
            </div>
            <?php
            $type = 'portfolio_item';
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'caller_get_posts'=> 1);

            $my_query = null;
            $my_query = new WP_Query($args);
            $titles = array();
            if( $my_query->have_posts() ) {
                while ($my_query->have_posts()) : $my_query->the_post();
                    $title = get_the_title($my_query->the_post());
                    if ($title != "" && !in_array($title, $titles)) {
                        $titles[] = $title;
                        echo '<div name="'. $title .'" class="switch-portfolio" onclick="updatePortfolio(this)">
										<p> '. $title .' </p>
									  </div>';
                    }
                endwhile;
            }
            wp_reset_query();
            ?>
        </div>


    </div>


    <div id="portfolio-links">

        <?php
        $type = 'portfolio_item';
        $args=array(
            'post_type' => $type,
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'caller_get_posts'=> 1);

        $my_query = null;
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <div name="<?php the_title() ?>" class="portfolio-part">
                    <figure>
                        <img class="portfolio-img" src="<?php the_post_thumbnail_url()?>" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title"><?php the_title() ?></h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal<?php print($my_query->current_post) ?>" >Take a Look</a>
                        </figcaption>
                    </figure>
                </div>
                <?php
            endwhile;
        }
        wp_reset_query();
        ?>
    </div>
    </div>
    <br>
    <br>

</section>

<section id="modal">
    <?php
    $type = 'portfolio_item';
    $args=array(
        'post_type' => $type,
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1);

    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <div id="myModal<?php print($my_query->current_post) ?>" class="info">
                <div class="info-content">
                    <header>
                        <h2><?php the_title() ?></h2>
                        <a class="button-close" href="#close">×</a>
                    </header>
                    <content>
                        <img class="info-img" src="<?php the_post_thumbnail_url() ?>" alt="">
                    </content>
                    <footer>
                        <p><?php the_content() ?></p>
                    </footer>
                </div>
            </div>
            <?php
        endwhile;
    }
    wp_reset_query();
    ?>

</section>

<!-- ==== BLOG ==== -->

<section id="blog">

    <br>

    <header class="blog-header">
        <br>
        <h1 class="pages-headline">MY PERSONAL BLOG</h1>
        <hr width="49%" color="#CCC9C9" />
        <br>
    </header>

    <div class="blog-content">
        <?php
        $args = array( 'numberposts' => '2' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){

            echo '<article class="blog-post" id="post'.$recent["ID"].'">

                <header class="post-info">
                    <br>             
                    <p>'.get_avatar( get_the_author_meta($recent["post_author"]), 60 ).'</p>
                    <h4>'.get_the_author_meta('display_name', $recent["post_author"]).'</h4>
                    <h5>Published '.date('M d',strtotime($recent["post_date"])).'.</h5>
                </header>

                <section class="post-content">

                    <h2>'.$recent["post_title"].'</h2>
                    <p>'.$recent["post_content"].'</p>

                    <br/>
                    <br/>
                    <br/>
                    <p><a class="news-link" href="#" onclick="zoomPost('.$recent["ID"].',post'.$recent["ID"].');return false;"> Read More</a></p>
                    <br>

                </section>

            </article>';

        }
        ?>

        <aside class="news-post">

            <?php
            $args = array( 'numberposts' => '5' );
            $recent_posts = array_slice(wp_get_recent_posts( $args ),2);

            foreach( $recent_posts as $recent ){

                echo '<div class="news" id="post'.$recent["ID"].'">

                    <p>'.$recent["post_title"].'</p>
                    <p>'.date('M Y',strtotime($recent["post_date"])).'</p>
                    <br/>

                    <p><a class="news-link" href="#" onclick="zoomPost('.$recent["ID"].',post'.$recent["ID"].');return false;"> Read More</a></p>
                </div>';

            }
            ?>

        </aside>
    </div>
</section>


<!-- ==== SECTION DIVIDER6 ==== -->

<section id="section-zurich">

    <?php
    $content_post = get_page_by_title('zurich');
    $content = $content_post->post_content;
    echo $content;
    ?>

</section>

<!-- ==== SECTION CONTACT ==== -->

<section id="contact">

    <header>

        <h1 class="pages-headline">THANKS FOR VISITING!</h1>
        <hr width="49%" ; color="#CCC9C9">
        <br>
        <br>

    </header>


    <div id="ph-contact">

        <section class="contact-div">
            <h3>Contact Information</h3>
            <br />
            <br />

            <!--<p><span></span> Paradeplatz, Zurich
                <br/>
                <span></span> +0041 9884 4893
                <br/>
                <span></span> +0041 9884 8893
                <br/>
                <span></span> <a href="#"> mrdesignrobot@inf.co</a>
                <br/>
                <span></span> <a href="#"> @mrdesignrobot </a>
                <br/>
                <span></span> <a href="#"> Mr Design Luigi</a>
                <br/>
            </p>-->

            <p>
                <?php echo get_theme_mod( 'address', 'unknown' ); ?><br/>
                <?php echo get_theme_mod( 'phone1', 'unknown' ); ?><br/>
                <?php echo get_theme_mod( 'phone2', 'unknown' ); ?><br/>
                <a href="#"><?php echo get_theme_mod( 'mail1', 'unknown' ); ?></a><br/>
                <a href="#"><?php echo get_theme_mod( 'mail2', 'unknown' ); ?></a><br/>
                <a href="#"><?php echo get_theme_mod( 'company', 'unknown' ); ?></a><br/>
            </p>

        </section>

        <section class="contact-div">
            <h3>Newsletter</h3>
            <br />
            <br />
            <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
            <p>
            <form role="form">
                <div>
                    <label for="inputEmail1" class="col-lg-4 control-label"></label>
                    <div>
                        <input type="email" id="inputEmail1" placeholder="Email">
                    </div>
                </div>
                <div>
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div>
                        <input type="text" id="text1" placeholder="Your Name">
                    </div>
                </div>
                <br>
                <div>
                    <div>
                        <button type="submit">Sign in</button>
                    </div>
                </div>
            </form>
            </p>
        </section>

        <section class="contact-div">
            <br />
            <h3>Support Us!</h3>
            <br />
            <br />
            <p>If you would like to support my work and my passion for web crafting please feel free to send me an email, or to share one of my project on tweeter or facebook. Any small little thing will be appreciated!</p>
        </section>

    </div>

</section>


<!-- ==== FOOTER ==== -->

<footer class="copyright">

    <div>
        <h4>Created by <a href="http://globis.co">globis</a> </h4>
    </div>

</footer>


<?php get_footer(); ?>
