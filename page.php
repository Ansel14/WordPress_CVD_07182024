<?php get_header() ?>

<?php if(is_page('about')) {?>
<main data-barba="container" data-barba-namespace="about">
    <!-- ABOUT BANNER -->
    <section class="aboutBanner">
      <div class="container">
        <div class="aboutBanner__wrap">
          <div class="aboutBanner__wrapper">
            <div class="aboutBanner__text">
              <div class="aboutBanner__text--title">
                <h2>Things you need to know</h2>
                <h1>About Me</h1>
              </div>
              <div class="aboutBanner__text--details">
                <?php the_field('about_description') ?>
              </div>
              <ul class="aboutBanner__icons">
                <li>
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                  <a href=""><i class="fa-brands fa-youtube"></i></a>
                </li>
              </ul>
            </div>
            <div class="aboutBanner__img">
              <img src="<?php the_field('about_image') ?>" alt="about banner" />
            </div>
          </div>
          <div class="aboutBanner__arrowdown">
            <a href="#aboutProjects"
              ><i class="fa-solid fa-chevron-down"></i
            ></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT RECENT PROJECTS -->
    <section class="aboutProjects" id="aboutProjects">
      <div class="container">
        <div class="aboutProjects__title">
          <h2>My Recent Projects</h2>
        <p>
          <?php the_field('recent_project_description') ?>
        </p>
        </div>
        <div class="aboutProjects__wrapper">
            <?php 
                $project = new WP_Query(array(
                    'post_type' => 'projects',
                    'posts_per_page' => 6
                ))
            ?>
            <?php if($project->have_posts()) : while($project->have_posts()) : $project->the_post() ?>
          <div class="aboutProjects__card">
            <div class="aboutProjects__card--img">
                <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>
            </div>
            <div class="aboutProjects__card--text">
              <h3><?php the_title() ?></h3>
              <?php echo wp_trim_words(get_the_content(), 20) ?>
            </div>
          </div>
          <?php endwhile;
                else :
                endif;
                wp_reset_postdata();
            
            ?>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/part', 'cta') ?>
</main>
<?php }?>



<?php if(is_page('update')) {?>
<main data-barba="container" data-barba-namespace="update">   
     <!-- UPDATE -->
     <section class="update">
      <div class="container">
        <div class="update__title">
          <h1>Latest Trends</h1>
          <p><?php echo get_the_content() ?></p>
        </div>
        <div class="update__wrapper">
          <div class="update__left">
            <?php 
                $latest = new WP_Query(array(
                    'post_type' => 'latests',
                    'posts_per_page' => 2,
                ))
            ?>
            <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post() ?>
            <div class="update__content">
              <img
                src="<?php the_field('latest_image') ?>"
                alt="update 1"
              />
              <ul>
                <li><i class="fa-solid fa-user"></i> <?php the_field('author') ?></li>
                <li><i class="fa-solid fa-calendar"></i><?php echo get_the_date() ?></li>
                <li><i class="fa-solid fa-tag"></i><?php the_field('category') ?></li>
              </ul>
              <h3><?php the_title() ?></h3>
              <p>
                <?php the_excerpt() ?>
              </p>
              <a href="">Read more...</a>
            </div>
            <?php endwhile;
                else :
                endif;
                wp_reset_postdata();
            
            ?>
          </div>
          <div class="update__right">
            <div class="update__categories">
              <h3>CATEGORIES</h3>
              <table>
                <tr>
                  <td>Web Design</td>
                  <td>(2)</td>
                </tr>
                <tr>
                  <td>Web Development</td>
                  <td>(3)</td>
                </tr>
                <tr>
                  <td>Wire Frame</td>
                  <td>(1)</td>
                </tr>
                <tr>
                  <td>Vector & Logo</td>
                  <td>(5)</td>
                </tr>
                <tr>
                  <td>Social Media</td>
                  <td>(2)</td>
                </tr>
              </table>
            </div>
            <div class="update__recent">
              <h3>RECENT POST</h3>
              <?php 
                $recent = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                ))
                ?>
            <?php if($recent->have_posts()) : while($recent->have_posts()) : $recent->the_post() ?>
              <div class="update__recent--details">
                <img
                  src="<?php the_field('recent_image') ?>"
                  alt="recent 1"
                />
                <div class="update__recent--text">
                  <h4>
                    <?php the_title() ?>
                  </h4>
                  <p><?php echo get_the_date() ?></p>
                </div>
              </div>
              <?php endwhile;
                else :
                endif;
                wp_reset_postdata();
            
                ?>
            </div>
            <div class="update__tags">
              <h3>TAGS</h3>
              <div class="update__tags--details">
                <a href="" class="btn bg--light">WEB DESIGN</a>
                <a href="" class="btn bg--light">WIRE FRAME</a>
              </div>
              <div class="update__tags--details">
                <a href="" class="btn bg--light">WEB DEVELOPMENT</a>
                <a href="" class="btn bg--light">LOGO</a>
              </div>
              <div class="update__tags--details">
                <a href="" class="btn bg--light">VECTOR</a>
                <a href="" class="btn bg--light">SOCIAL MEDIA</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/part', 'cta') ?>
</main>
<?php }?>

<?php if(is_page('contact')) {?>
<main data-barba="container" data-barba-namespace="contact">
    <!-- CONTACT -->
    <section class="contact">
      <div class="container">
        <div class="contact__wrapper">
          <div class="contact__info">
            <h2>Contact</h2>
            <p>
              <?php the_field('contact_text') ?>
            </p>
            <h4>
              <i class="fa-solid fa-phone"></i>
              <p><?php the_field('contact_number') ?></p>
            </h4>
            <h4>
              <i class="fa-solid fa-envelope"></i>
              <p><?php the_field('contact_email') ?></p>
            </h4>
            <h4>
              <i class="fa-solid fa-map-pin"></i>
              <p><?php the_field('contact_address') ?></p>
            </h4>
            <ul class="contact__info--icons">
              <li>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
              </li>
              <li>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
              </li>
            </ul>
          </div>
          <form class="contact__form">
            <input type="text" placeholder="NAME" />
            <input type="text" placeholder="EMAIL" />
            <textarea
              name="Message"
              id="contact__message"
              placeholder="MESSAGE"
            ></textarea>
            <div class="form__btn">
            <a href="" class="btn bg--primary">SEND MESSAGE</a>
          </div>
          </form>
        </form>
          
        </div>
        
      </div>
    </section>
</main>
<?php }?>

<?php get_footer() ?>
