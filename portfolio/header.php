<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/f.ico" rel="shortcut icon" />
  <link type="Image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/ico/f.ico" rel="icon" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <?php wp_head(); ?>
  <title>Portfolio</title>
</head>

<body>
  <div class="menu__burger">
    <span class="menu__burger-icon"></span>
  </div>
  <aside class="menu">
    <span class="menu__cross"></span>
    <!-- <nav class="menu__nav"> -->
      <!-- <ul class="menu__list">
        <li class="menu__item"><a href="#aboutMe">ПРО МЕНЯ</a></li>
        <li class="menu__item"><a href="#benefit">МОЙ ОПЫТ</a></li>
        <li class="menu__item"><a href="#skills">МОИ НАВЫКИ</a></li>
        <li class="menu__item"><a href="#portfolio">МОИ РАБОТЫ</a></li>
        <li class="menu__item"><a href="/">ПРАЙС-ЛИСТ</a></li>
        <li class="menu__item"><a href="#contacts">КОНТАКТЫ</a></li>
      </ul> -->
      <?php wp_nav_menu( [
	'theme_location'  => 'top',
	'menu'            => 'top menu',
	'container'       => 'nav',
	'container_class' => 'menu__nav',
	'container_id'    => '',
	'menu_class'      => 'menu__list',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] );
?>
    <!-- </nav> -->
    <div class="menu__socials social">
      <ul class="social__list">
        <li class="social__item">
          <a class="social__link" href="https://ru-ru.facebook.com/">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M25.6055 0L4.39453 0C1.97159 0 0 1.97159 0 4.39453L0 25.6055C0 28.0284 1.97159 30 4.39453 30L13.2422 30L13.2422 19.3945L9.72656 19.3945L9.72656 14.1211H13.2422V10.5469C13.2422 7.63893 15.6077 5.27344 18.5156 5.27344L23.8477 5.27344V10.5469H18.5156L18.5156 14.1211H23.8477L22.9687 19.3945H18.5156V30H25.6055C28.0284 30 30 28.0284 30 25.6055L30 4.39453C30 1.97159 28.0284 0 25.6055 0Z" />
            </svg>
          </a>
        </li>
        <li class="social__item">
          <a class="social__link" href="https://www.instagram.com/">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
          <a class="social__link social__link-github" href="https://github.com/">
            <svg class="social__link-github" width="30" height="30" viewBox="0 0 19 20" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M-4.37114e-07 9.99951C-1.95608e-07 15.5245 4.36167 19.9995 9.74107 19.9995C14.0457 19.9995 17.6962 17.1345 18.9832 13.162C19.0749 12.662 18.7734 12.4787 18.5148 12.4787C18.2835 12.4787 17.6706 12.487 16.8585 12.4912C17.4459 15.2728 15.5517 15.8595 15.5517 15.8595C14.4274 16.3145 14.1267 16.972 14.1267 16.972C13.5228 17.8778 13.5352 16.902 13.5352 16.902C13.603 15.8978 14.5389 15.3703 14.5389 15.3703C16.0283 14.4787 15.5979 13.0295 15.3493 12.4578C14.719 12.3678 14.2903 12.1103 14.0466 11.8245C13.8029 14.0453 12.9652 16.3795 9.23304 16.3795C8.16988 16.3795 7.30085 15.992 6.61933 15.3503C6.37316 15.4628 5.3827 15.8003 4.04116 15.2628C4.04116 15.2628 3.78012 14.4253 5.03988 12.5128C4.82345 11.7128 4.71606 10.8628 4.7111 10.0128C4.71606 9.16284 4.82345 8.31285 5.03988 7.51284C3.78012 5.61285 4.04116 4.77535 4.04116 4.77535C5.3827 4.23785 6.37316 4.57534 6.61933 4.67535C7.30085 4.03785 8.16988 3.65035 9.23304 3.65035C12.9752 3.65035 13.7987 5.98784 14.0383 8.21284C14.3307 7.86284 14.928 7.53784 15.8408 7.53784C17.1444 7.53784 18.1918 7.55034 18.5082 7.55034C18.7635 7.55034 19.0683 7.37534 18.9708 6.86284C17.692 2.86201 14.0391 -0.000488895 9.74107 -0.000488707C4.36167 -0.000488472 -6.7851e-07 4.47701 -4.37114e-07 9.99951Z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <div class="menu__overlay"></div>



