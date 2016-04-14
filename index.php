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
                <p>A 2.0 web developer.</p>
                </br>
                <p>At your service</p>
            </div>
        </header>

        <!-- ==== ABOUT ==== -->
        <div id="about-all">

            <?php echo get_post_field('post_content', 20); ?>

            <!-- ==== SECTION DIVIDER1 -->

            <section id="group1">

                <div>
                    <br>
                    <h1 class="title pages-headline"> PART DESIGNER... </h1>
                    <hr width="34%" ; color="#CCC9C9">

                    <p class="text"> A web developer needs to have a good aesthetic eye on his product. </br>
                        For this reason part of my skills include user interface and </br>
                        interaction design. </p>
                    </br>
                    </br>
                    </br>
                </div>

            </section>

            <!-- ==== SECTION DIVIDER2 -->

            <section id="group2">

                <div>
                    <br>
                    <br>
                    <br>
                    <h1 class="title pages-headline"> PART CODER! </h1>
                    <hr width="49%" ; color="#CCC9C9">

                    <p class="text"> But a website cannot be just nice to see... It has to work! That's why we have JavaScript, PHP and CMS like WordPress </p>
                    </br>
                    </br>
                </div>

            </section>

            <!-- ==== TEHCNICAL SKILLS-->

          <?php
          //$my_postid = 14;
          //$content_post = get_post($my_postid);
          $content_post = get_page_by_title('skills');
          $content = $content_post->post_content;
          echo $content;
          ?>

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
                    <div class="switch-portfolio">
                        <p>ALL</p>
                    </div>
                    <div class="switch-portfolio">
                        <p> UI DESIGN </p>
                    </div>
                    <div class="switch-portfolio">
                        <p> ANDROID PAGE </p>
                    </div>
                </div>

            </div>


            <div id="portfolio-links">

                <!-- PORTFOLIO IMAGE 1 -->

                <div class="portfolio-part">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio01.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">UI DESIGN</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal1">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 2 -->

                <div class="portfolio-part">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio02.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">UI DESIGN</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal2">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 3 -->

                <div class="portfolio-part">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio03.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal3">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>

                <!-- PORTFOLIO IMAGE 4 -->

                <div class="portfolio-part">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio04.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal4">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 5-->

                <div class="portfolio-part">
                    <figure>
                        <img class="portfolio-img" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/folio05.jpg" alt="">
                        <figcaption class="portfolio-bottom">
                            <h5 class="portfolio-title">ANDROID PAGE</h5>
                            <a class="portfolio-link" data-toggle="modal" href="#myModal5">Take a Look</a>
                        </figcaption>
                    </figure>
                </div>


                <!-- PORTFOLIO IMAGE 6 -->

                <div class="portfolio-part">
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

            <article class="blog-post">

                <header class="post-info">
                    <br>
                    <p><img src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
                    <h4>Pinco Pallino</h4>
                    <h5>Published Feb 28.</h5>
                </header>

                <section class="post-content">

                    <h2>What Define Success</h2>
                    <p>No matter how old you are, where you’re from or what you do for a living, we all share something in common—a desire to be successful. .</p>
                    <p>Each person’s definition of success is different, however, as some may define success as being a loving and faithful spouse or a caring and responsible parent, while most people would equate success with wealth, fame, and power</p>

                    <br/>
                    <br/>
                    <br/>
                    <p><a class="news-link" href="#"> Read More</a></p>
                    <br>

                </section>

            </article>

            <article class="blog-post">

                <header class="post-info">
                    <br>
                    <p><img src="<?php bloginfo('template_url'); ?>/assets/img/team/u1.jpg" width="60px" height="60px"></p>
                    <h4>Pinco Pallino</h4>
                    <h5>Published Feb 02.</h5>
                </header>

                <section class="post-content">

                    <h2>A Beautiful Story</h2>
                    <p>One day, in a heavily crowded place, a young man was shouting at the crowd. “People look at me; I have the most beautiful heart in the world.”</p>
                    <p>Many people looked at him and were stunned to see the beautiful heart in a perfect shape, no little flaw, which looked quite amazing. Most of the people who saw his heart was mesmerized by the beauty of his heart and praised him. </p>

                    <br/>
                    <br/>
                    <br/>
                    <p><a class="news-link " href="#"> Read More</a></p>
                    <br>

                </section>

            </article>

            <aside class="news-post">

                <div class="news">

                    <p> Parallax Tutorial</p>
                    <p> Dec. 2015</p>
                    <br/>

                    <p><a class="news-link" href="#"> Read More</a></p>
                </div>
                <div class="news">

                    <p> Positioning in CSS</p>
                    <p> Nov. 2015</p>
                    <br/>

                    <p><a class="news-link" href="#"> Read More</a></p>
                </div>
                <div class="news">

                    <p> What is Node.js?</p>
                    <p> Sep. 2015</p>
                    <br />

                    <p><a class="news-link" href="#"> Read More</a></p>
                </div>
            </aside>
        </div>
    </section>


    <!-- ==== SECTION DIVIDER6 ==== -->

    <section id="section-zurich">

        <img src="<?php bloginfo('template_url'); ?>/assets/img/bg/divider661.jpg">
        <div id="zurich">
            <h1>CRAFTED IN ZURICH, SWITZERLAND.</h1>
            <hr width="49%" ; color="#CCC9C9">
            <p>Paradeplatz 987,</p>
            <p>+0041 9884 4893</p>
            <p>
                <a href="#"></a>
                <a href="#"></a>
            </p>
        </div>

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
