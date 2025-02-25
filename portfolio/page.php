<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header();
?>

  <main>
    <section class="hero" style="background-image: url(<?php the_field('hero_img') ?>);">
      <div class="hero__container">
        <div class="hero__social element-animation social social--vertical">
          <span class="social__title">Социальные сети</span>
          <ul class="social__list">
            <li class="social__item">
              <a class="social__link" href="https://ru-ru.facebook.com/">
                <svg width="20" height="20" viewBox="0 0 30 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M25.6055 0L4.39453 0C1.97159 0 0 1.97159 0 4.39453L0 25.6055C0 28.0284 1.97159 30 4.39453 30L13.2422 30L13.2422 19.3945L9.72656 19.3945L9.72656 14.1211H13.2422V10.5469C13.2422 7.63893 15.6077 5.27344 18.5156 5.27344L23.8477 5.27344V10.5469H18.5156L18.5156 14.1211H23.8477L22.9687 19.3945H18.5156V30H25.6055C28.0284 30 30 28.0284 30 25.6055L30 4.39453C30 1.97159 28.0284 0 25.6055 0Z" />
                </svg>
              </a>
            </li>
            <li class="social__item">
              <a class="social__link" href="https://www.instagram.com/">
                <svg width="20" height="20" viewBox="0 0 30 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M-9.01547e-07 9.375L-4.09794e-07 20.625C-1.83506e-07 25.8019 4.19812 30 9.375 30L20.625 30C25.8019 30 30 25.8019 30 20.625L30 9.375C30 4.19813 25.8019 7.79513e-07 20.625 1.0058e-06L9.375 1.49755e-06C4.19812 1.72384e-06 -1.12784e-06 4.19813 -9.01547e-07 9.375ZM20.625 2.8125C24.2437 2.8125 27.1875 5.75625 27.1875 9.375L27.1875 20.625C27.1875 24.2437 24.2437 27.1875 20.625 27.1875L9.375 27.1875C5.75625 27.1875 2.8125 24.2437 2.8125 20.625L2.8125 9.375C2.8125 5.75625 5.75625 2.8125 9.375 2.8125L20.625 2.8125Z" />
                  <path
                    d="M7.5 15C7.5 19.1419 10.8581 22.5 15 22.5C19.1419 22.5 22.5 19.1419 22.5 15C22.5 10.8581 19.1419 7.5 15 7.5C10.8581 7.5 7.5 10.8581 7.5 15ZM19.6875 15C19.6875 17.5837 17.5837 19.6875 15 19.6875C12.4144 19.6875 10.3125 17.5838 10.3125 15C10.3125 12.4163 12.4144 10.3125 15 10.3125C17.5837 10.3125 19.6875 12.4162 19.6875 15Z" />
                  <path
                    d="M7.93685 6.93715C7.93685 6.38521 7.48942 5.93777 6.93748 5.93777C6.38554 5.93777 5.93811 6.38521 5.93811 6.93715C5.93811 7.48909 6.38554 7.93652 6.93748 7.93652C7.48942 7.93652 7.93685 7.48909 7.93685 6.93715Z" />
                </svg>
              </a>
            </li>
            <li class="social__item">
              <a class="social__link" href="https://github.com/">
                <svg class="social__link-github" width="20" height="20" viewBox="0 0 19 20" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M-4.37114e-07 9.99951C-1.95608e-07 15.5245 4.36167 19.9995 9.74107 19.9995C14.0457 19.9995 17.6962 17.1345 18.9832 13.162C19.0749 12.662 18.7734 12.4787 18.5148 12.4787C18.2835 12.4787 17.6706 12.487 16.8585 12.4912C17.4459 15.2728 15.5517 15.8595 15.5517 15.8595C14.4274 16.3145 14.1267 16.972 14.1267 16.972C13.5228 17.8778 13.5352 16.902 13.5352 16.902C13.603 15.8978 14.5389 15.3703 14.5389 15.3703C16.0283 14.4787 15.5979 13.0295 15.3493 12.4578C14.719 12.3678 14.2903 12.1103 14.0466 11.8245C13.8029 14.0453 12.9652 16.3795 9.23304 16.3795C8.16988 16.3795 7.30085 15.992 6.61933 15.3503C6.37316 15.4628 5.3827 15.8003 4.04116 15.2628C4.04116 15.2628 3.78012 14.4253 5.03988 12.5128C4.82345 11.7128 4.71606 10.8628 4.7111 10.0128C4.71606 9.16284 4.82345 8.31285 5.03988 7.51284C3.78012 5.61285 4.04116 4.77535 4.04116 4.77535C5.3827 4.23785 6.37316 4.57534 6.61933 4.67535C7.30085 4.03785 8.16988 3.65035 9.23304 3.65035C12.9752 3.65035 13.7987 5.98784 14.0383 8.21284C14.3307 7.86284 14.928 7.53784 15.8408 7.53784C17.1444 7.53784 18.1918 7.55034 18.5082 7.55034C18.7635 7.55034 19.0683 7.37534 18.9708 6.86284C17.692 2.86201 14.0391 -0.000488895 9.74107 -0.000488707C4.36167 -0.000488472 -6.7851e-07 4.47701 -4.37114e-07 9.99951Z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>

        <div class="hero__content">
          <h1 class="hero__title">Меня зовут <?php the_field('hero_title'); ?></h1>
          <p class="hero__desc"><?php the_field('hero_description'); ?></p>
          <div class="hero__buttons">
            <a class="button button--portfolio active" href="#contacts">Портфолио</a>
            <a class="button button--portfolio" href="#aboutMe">Про меня</a>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutMe element-animation" id="aboutMe">
      <div class="aboutMe__container ">
        <div class="aboutMe__img">
          <img src="<?php the_field('about_img'); ?>" alt="">
        </div>
        <div class="aboutMe__content element-animation">
          <p class="aboutMe__title">Про меня</p>
          <h2 class="aboutMe__subtitle">Меня зовут <?php the_field('about_title') ?>)</h2>
          <p class="aboutMe__description">
          <?php the_field('about_description') ?>
          </p>
          <ul class="aboutMe__list aboutMe__skills">
          <?php
            // get the field value
            $slides = carbon_get_theme_option( 'portfolio_skills' );
            if( $slides ) {
              foreach( $slides as $slide ) {
            echo  '<li class="aboutMe__skill-item item">';
            echo ' <div class="item__icon"><img src="' .  $slide[ 'portfolio_skill_photo' ]  . '" alt="" class="item__img"></div>';
            echo    '<div class="item__text">';
            echo      '<b class="item__title">' .  esc_html( $slide[ 'portfolio_skill_title' ] ).'</b>';
            echo      '<p class="item__description">'. esc_html( $slide[ 'portfolio_skill_description' ] ). '</p>';
            echo    '</div>';
            echo ' </li>';
              }
            }
            ?>
          </ul>
        </div>
      </div>
    </section>
    <section class="benefit element-animation" id="benefit">
      <div class="benefit__content ">
        <div class="benefit__container element-animation">
          <p class="benefit__title">Опыт</p>
          <h2 class="benefit__subtitle">Чем я буду полезна</h2>
          <div class="benefit__grid">
            <div class="benefit__column education">
              <div class="education__title">Образование</div>
              <ul class="education__list">
              <?php
              $education_first = get_field('education_first');	
              if( $education_first ): ?>
              <li class="education__item item">
                  <div class="item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/University.svg" alt="">
                  </div>
                  <div class="item__text">
                    <b class="item__title"><?php echo $education_first['education_first_title']; ?></b>
                    <p class="item__subtitle">
                    <?php echo $education_first['education_first_subtitle']; ?>
                    </p>
                  </div>
                  <p class="item__description">
                  <?php echo $education_first['education_first_description']; ?>
                  </p>
                </li>
                <?php endif;
                $education_second = get_field('education_second');	
                if( $education_second ): ?>
                    <li class="education__item item">
                  <div class="item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/University.svg" alt="">
                  </div>
                  <div class="item__text">
                    <b class="item__title"><?php echo $education_second['education_second_title']; ?></b>
                    <p class="item__subtitle">
                    <?php echo $education_second['education_second_subtitle']; ?>
                    </p>
                  </div>
                  <p class="item__description">
                  <?php echo $education_second['education_second_description']; ?>
                  </p>
                </li>
                <?php endif; ?>
              </ul>
            </div>
            <div class="benefit__column experience">
              <div class="experience__title">Опыт работы</div>
              <ul class="experience__list">
              <?php 
              $experience_first = get_field('experience_first');	
                if( $experience_first): ?>
                    <li class="experience__item item">
                  <div class="item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Developer.svg"" alt="">
                  </div>
                  <div class="item__text">
                    <b class="item__title"><?php echo $experience_first['experience_first_title']; ?></b>
                    <p class="item__subtitle">
                    <?php echo $experience_first['experience_first_subtitle']; ?>
                    </p>
                  </div>
                  <p class="item__description">
                  <?php echo $experience_first['experience_first_description']; ?>
                  </p>
                </li>
                <?php endif;
              $experience_second = get_field('experience_second');
                if( $experience_second): ?>
                    <li class="experience__item item">
                  <div class="item__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/Developer.svg"" alt="">
                  </div>
                  <div class="item__text">
                    <b class="item__title"><?php echo $experience_second['experience_second_title']; ?></b>
                    <p class="item__subtitle">
                    <?php echo $experience_second['experience_second_subtitle']; ?>
                    </p>
                  </div>
                  <p class="item__description">
                  <?php echo $experience_second['experience_second_description']; ?>
                  </p>
                </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="skills element-animation" id="skills">
      <div class="skills__container">
        <p class="skills__title">Навыки</p>
        <h2 class="skills__subtitle">Что я использую в работе</h2>
        <ul class="skills__grid-cards cards__list">
        <?php
            // get the field value
            $tools = carbon_get_theme_option( 'portfolio_tools' );
            if( $tools ):
              foreach( $tools as $tool ):
                ?>
              <li class="card__item">
                <div class="card__img element-animation">
                  <img class="card__img-html" src="<?php echo $tool['portfolio_tool_photo']?>" alt="">
                </div>
                <b class="card__title"><?php echo $tool[ 'portfolio_tool_title' ]?></b>
                <p class="card__description">
                  <?php echo $tool[ 'portfolio_tool_description' ]?>
                </p>
                </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <ul class="skills_grid-progress progress__list">
        <?php
            // get the field value
            $progress_list = carbon_get_theme_option( 'progress__list' );
            if( $progress_list ):
              foreach( $progress_list as $item ):
                ?>
            <li class="progress__item">
            <p class="progress__caption"><?php echo $item['portfolio_progress_title']?>
              <span><?php echo $item['portfolio_progress_quantity']?>%</span>
            </p>
            <div class="progress__bar site element-animation"></div>
          </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
      </div>
    </section>
    <section class="portfolio element-animation" id="potfolio">
      <div class="portfolio__container">
      <p class="portfolio__title">Портфолио</p>
      <h2 class="portfolio__subtitle">Мои работы</h2>
      <div class="portfolio__grid">
     <div class="portfolio__grid-img img__uber element-animation">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/jpg_png/uber.jpg" alt="uber">
        </div>
          <div class="portfolio__grid-img img__pulse element-animation">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/jpg_png/pulse.jpg" alt="pulse">
        </div>
        <div class="portfolio__grid-img img__bread element-animation">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/jpg_png/bread.jpg" alt="bread">
        </div>
        <div class="portfolio__grid-img img__plans element-animation">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/jpg_png/plans.jpg" alt="plans">
        </div>
        <div class="portfolio__grid-img img__ipad element-animation">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/jpg_png/ipad.jpg" alt="ipad">
        </div>
        <div class="portfolio__grid-img img__mac element-animation">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/jpg_png/mac.jpg" alt="mac">
        </div>
      </div>
      </div> 
    </section>
    <section class="contacts element-animation" id="contacts">
        <div class="contacts__container">
          <div class="contacts__img">
            <img src="<?php the_field('contact_img'); ?>" alt="">
          </div>
          <div class="contacts__content">
            <p class="contacts__title">Контакты</p>
            <h2 class="contacts__subtitle">Свяжитесь со мной</h2>
            <p class="contacts__desc">Любым удобным для вас способом:</p>
            <ul class="contacts__social social__list">
              <li class="social__item">
                <a class="social__link social__link-facebook" href="https://ru-ru.facebook.com/">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M25.6055 0L4.39453 0C1.97159 0 0 1.97159 0 4.39453L0 25.6055C0 28.0284 1.97159 30 4.39453 30L13.2422 30L13.2422 19.3945L9.72656 19.3945L9.72656 14.1211H13.2422V10.5469C13.2422 7.63893 15.6077 5.27344 18.5156 5.27344L23.8477 5.27344V10.5469H18.5156L18.5156 14.1211H23.8477L22.9687 19.3945H18.5156V30H25.6055C28.0284 30 30 28.0284 30 25.6055L30 4.39453C30 1.97159 28.0284 0 25.6055 0Z" />
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link social__link-telegram" href="https://github.com/">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M15 30C23.2863 30 30 23.2863 30 15C30 6.71375 23.2863 0 15 0C6.71375 0 0 6.71375 0 15C0 23.2863 6.71375 30 15 30ZM6.86375 14.675L21.3263 9.09875C21.9975 8.85625 22.5837 9.2625 22.3662 10.2775L22.3675 10.2762L19.905 21.8775C19.7225 22.7 19.2337 22.9 18.55 22.5125L14.8 19.7487L12.9912 21.4913C12.7912 21.6913 12.6225 21.86 12.235 21.86L12.5013 18.0438L19.4513 11.765C19.7537 11.4987 19.3837 11.3488 18.985 11.6138L10.3963 17.0212L6.69375 15.8663C5.89 15.6112 5.8725 15.0625 6.86375 14.675Z" />
                  </svg>
                </a>
              </li>
              <li class="social__item">
                <a class="social__link" href="https://www.instagram.com/">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M-9.01547e-07 9.375L-4.09794e-07 20.625C-1.83506e-07 25.8019 4.19812 30 9.375 30L20.625 30C25.8019 30 30 25.8019 30 20.625L30 9.375C30 4.19813 25.8019 7.79513e-07 20.625 1.0058e-06L9.375 1.49755e-06C4.19812 1.72384e-06 -1.12784e-06 4.19813 -9.01547e-07 9.375ZM20.625 2.8125C24.2437 2.8125 27.1875 5.75625 27.1875 9.375L27.1875 20.625C27.1875 24.2437 24.2437 27.1875 20.625 27.1875L9.375 27.1875C5.75625 27.1875 2.8125 24.2437 2.8125 20.625L2.8125 9.375C2.8125 5.75625 5.75625 2.8125 9.375 2.8125L20.625 2.8125Z" />
                    <path
                      d="M7.5 15C7.5 19.1419 10.8581 22.5 15 22.5C19.1419 22.5 22.5 19.1419 22.5 15C22.5 10.8581 19.1419 7.5 15 7.5C10.8581 7.5 7.5 10.8581 7.5 15ZM19.6875 15C19.6875 17.5837 17.5837 19.6875 15 19.6875C12.4144 19.6875 10.3125 17.5838 10.3125 15C10.3125 12.4163 12.4144 10.3125 15 10.3125C17.5837 10.3125 19.6875 12.4162 19.6875 15Z" />
                    <path
                      d="M7.93685 6.93715C7.93685 6.38521 7.48942 5.93777 6.93748 5.93777C6.38554 5.93777 5.93811 6.38521 5.93811 6.93715C5.93811 7.48909 6.38554 7.93652 6.93748 7.93652C7.48942 7.93652 7.93685 7.48909 7.93685 6.93715Z" />
                  </svg>
                </a>
              </li>
            </ul>
            <p class="contacts__section-desc">Или оставьте ваши данные и я сама вам напишу:</p>
              <? global $wpcf7_contact_form;
              if ( ! ( $wpcf7_contact_form = wpcf7_contact_form( '78c1fe3' ) ) )
              return 'Contact form not found!';
              $form = $wpcf7_contact_form->form_html();
              echo $form; ?>
            <!-- <form action="#" method="post" class="contacts__form form">
              <div class="form__field">
                <label class="form__label name" for="name">Ваше имя</label>
                <input class="form__input element-animation" type="text" id="name" name="user_name" value="Иван" required>
              </div>
              <div class="form__field">
                <label for="email" class="form__label email">Ваша почта</label>
                <input class="form__input element-animation" type="email" id="email" name="user_email" placeholder=" " required >
              </div>
              <div class="form__field">
                <label class="form__label form__label-textarea" for="textarea">Ваше сообщение</label>
                <textarea class="contacts__textarea element-animation" id="textarea" name="textarea" cols="30" rows="10" value=""
                  required>
                </textarea>
              </div>
              <div class="form__field field__checkbox">
                <label class="form__label form__label-checkbox" for="checkbox">Я согласен(а) с <span>
                    политикой конфиденциальности
                  </span> </label>
                <input class="contacts__checkbox" type="checkbox" id="checkbox" name="textarea" required>
              </div>
              <button class="button contacts__button active" type="submit">Отправить сообщение</button>
            </form> -->
          </div>
        </div>
    </section>
  </main>

<?php
get_footer();
