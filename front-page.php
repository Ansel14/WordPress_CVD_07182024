<?php get_header() ?>
<main data-barba="container" data-barba-namespace="home">

    <!-- HOME BANNER -->
    <section class="homeBanner">
      <div class="container">
        <div class="homeBanner__wrapper">
          <div class="homeBanner__text">
            <h1>
              <?php the_field('title') ?>
            </h1>
            <p>
              <?php the_field('description') ?>
            </p>
            <div class="homeBanner__btn">
              <a href="" class="btn bg--primary">EXPLORE MORE</a>
            </div>
          </div>
          <div class="homeBanner__img">
            <img src="<?php the_field('banner_image') ?>" alt="banner image" />
          </div>
        </div>
      </div>
    </section>

    <!-- HOME SKILL BANNER-->
    <section class="homeSkill">
      <div class="container">
        <div class="homeSkill__wrapper">
          <div class="homeSkill__card">
            <?php 
                $services = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => 3,
                ))
            ?>
            <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post() ?>
            <div class="homeSkill__card--text">
            <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    } 
                ?>
              <h5><?php the_title() ?></h5>
              <p>
                <?php echo wp_trim_words(get_the_content(), 10) ?>
              </p>
              <div class="homeSkill__card--btn" >
                <a href="" class="btn bg--primary">GET A QUOTE</a>
            </div>
            </div>
            <?php endwhile;
                else :
                endif;
                wp_reset_postdata();
            
            ?>

          </div>
        </div>
      </div>
    </section>

    <!-- HOME ABOUT -->
    <section class="homeAbout">
      <div class="container">
        <div class="homeAbout__wrapper">
          <div class="homeAbout__img">
            <img
              class="homeAbout__img--inside"
              src="<?php the_field('about_image') ?>"
              alt="about pic"
            />
            <img
              class="homeAbout__img--outside"
              src="<?php the_field('about_image_overlay') ?>"
              alt="ellipse"
            />
          </div>
          <div class="homeAbout__text">
            <h3>About Me</h3>
            <?php the_field('about_description') ?>
          </div>
        </div>
      </div>
    </section>

    <!-- HOME LATEST TRENDS -->
    <section class="homeTrends">
      <div class="container">
        <div class="homeTrends__title">
          <h2>Latest Trends</h2>
          <p>Latest Happenings in virtual space</p>
        </div>
        <div class="homeTrends__wrapper">
            
            <?php 
                $trend = new WP_Query(array(
                    'post_type' => 'trends',
                    'posts_per_page' => 3,
                    'orderby' => 3
                ))
            ?>
            <?php if($trend->have_posts()) : while($trend->have_posts()) : $trend->the_post() ?>
          <div class="homeTrends__card">
          <img src="<?php the_field('trends_image') ?>" alt="trend 1" />
            <div class="homeTrends__text">
              <h4><?php the_title() ?></h4>
                <?php the_excerpt() ?>
              <a href="">Read more...</a>
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
<?php get_footer() ?>