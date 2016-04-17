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

    <div class="content">

        <!-- ==== HEADER ==== -->

        <header id="home">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/header_bg2.jpg">
            <div class="headertext">
                <h1><span ></span></h1>
                <?php
                    $content_lines = explode("\n",get_post_field('post_content', 25));
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
                        <div class="num">95<span>%</span></div>
                        <div class="word">HTML</div>
                    </div>
                    <div class="bar red">
                        <div class="num">80<span>%</span></div>
                        <div class="word">CSS</div>
                    </div>
                    <div class="bar brown">
                        <div class="num">90<span>%</span></div>
                        <div class="word">JavaScript</div>
                    </div>
                    <div class="bar gray">
                        <div class="num">80<span>%</span></div>
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
                    <div class="switch-portfolio" id="portfolio_all">
                        <p>ALL</p>
                    </div>
                    <div class="switch-portfolio" id="portfolio_uidesign">
                        <p> UI DESIGN </p>
                    </div>
                    <div class="switch-portfolio" id="portfolio_androidpage">
                        <p> ANDROID PAGE </p>
                    </div>
                </div>

            </div>


            <div id="portfolio-links">

                <!-- PORTFOLIO IMAGE 1 -->

                <div class="portfolio-part uidesign">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio01.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">UI DESIGN</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal1">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 2 -->

                <div class="portfolio-part uidesign">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio02.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">UI DESIGN</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal2">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 3 -->

                <div class="portfolio-part androidpage">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal3">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>

                <!-- PORTFOLIO IMAGE 4 -->

                <div class="portfolio-part androidpage">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal4">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 5-->

                <div class="portfolio-part androidpage">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal5">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 6 -->

                <div class="portfolio-part androidpage">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio06.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal6">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
    </div>
    <br>
    <br>

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

            echo '<article class="blog-post">

                <header class="post-info">
                    <br>             
                    <p>'.get_avatar( get_the_author_meta($recent["post_author"]), 60 ).'</p>
                    <h4>'.get_the_author_meta('display_name', $recent["post_author"]).'</h4>
                    <h5>Published '.date('M d',strtotime($recent["post_date"])).'.</h5>
                </header>

                <section class="post-content">

                    <h2>'.$recent["post_title"].'</h2>
                    <p>No matter how old you are, where you’re from or what you do for a living, we all share something in common—a desire to be successful. .</p>
                    <p>Each person’s definition of success is different, however, as some may define success as being a loving and faithful spouse or a caring and responsible parent, while most people would equate success with wealth, fame, and power</p>

                    <br/>
                    <br/>
                    <br/>
                    <p><a class="news-link" href="#"> Read More</a></p>
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
                 echo '<div class="news">

                    <p>'.$recent["post_title"].'</p>
                    <p>'.date('M Y',strtotime($recent["post_date"])).'</p>
                    <br/>

                    <p><a class="news-link" href="#"> Read More</a></p>
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
                <p><span></span> Paradeplatz, Zurich
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

    <!-- ==== MODAL ==== -->

    <section id="modal">

        <div id="myModal1" class="info">
            <div class="info-content">
                <header>
                    <h2> UI DESIGN </h2>
                    <a class="button-close" href="#close">×</a>
                </header>
                <content>
                    <img class="info-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio01.jpg" alt="">
                </content>
                <footer>
                    <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                </footer>
            </div>
        </div>

        <div id="myModal2" class="info">
            <div class="info-content">
                <header>
                    <h2> UI DESIGN </h2>
                    <a class="button-close" href="#close">×</a>
                </header>
                <content>
                    <img class="info-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio02.jpg" alt="">
                </content>
                <footer>
                    <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                </footer>
            </div>
        </div>

        <div id="myModal3" class="info">
            <div class="info-content">
                <header>
                    <h2> ANDROID PAGE </h2>
                    <a class="button-close" href="#close">×</a>
                </header>
                <content>
                    <img class="info-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
                </content>
                <footer>
                    <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                </footer>
            </div>
        </div>

        <div id="myModal4" class="info">
            <div class="info-content">
                <header>
                    <h2> ANDROID PAGE </h2>
                    <a class="button-close" href="#close">×</a>
                </header>
                <content>
                    <img class="info-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
                </content>
                <footer>
                    <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                </footer>
            </div>
        </div>

        <div id="myModal5" class="info">
            <div class="info-content">
                <header>
                    <h2> ANDROID PAGE </h2>
                    <a class="button-close" href="#close">×</a>
                </header>
                <content>
                    <img class="info-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
                </content>
                <footer>
                    <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                </footer>
            </div>
        </div>

        <div id="myModal6" class="info">
            <div class="info-content">
                <header>
                    <h2> ANDROID PAGE </h2>
                    <a class="button-close" href="#close">×</a>
                </header>
                <content>
                    <img class="info-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio06.jpg" alt="">
                </content>
                <footer>
                    <p>This project was crafted for Some Name corp. Detail here a little about your job requirements and the tools used. Tell about the challenges faced and what you and your team did to solve it.</p>
                </footer>
            </div>
        </div>

        <section>

            <!-- ==== FOOTER ==== -->

            <footer class="copyright">

                <div>
                    <h4>Created by <a href="http://globis.co">globis</a> </h4>
                </div>

            </footer>

            </div>
        </section>
        
        <?php get_footer(); ?>
