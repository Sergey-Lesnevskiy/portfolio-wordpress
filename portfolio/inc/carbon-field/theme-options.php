<?php
if(!defined("ABSPATH")){
  exit;
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_tab( 'общие настройки',[
            Field::make( 'text', 'portfolio_text', 'Text Field' ),
            Field::make('image', 'portfolio-logo', 'Логотип сайта'),
            Field::make('text', 'portfolio-phone', 'Телефон'),
            Field::make('text', 'portfolio-vc', 'VC')
            ->set_width(33),
            Field::make('text', 'portfolio-youtube', 'YouTube')
            ->set_width(33),
            Field::make('text', 'portfolio-instagram', 'Instagram')
            ->set_width(33),
        ] )
        ->add_tab( 'My skills', [
          Field::make( 'complex', 'portfolio_skills', 'skills' )
          ->set_collapsed(true)
          ->add_fields( array(
            Field::make( 'text', 'portfolio_skill_title', 'Title skill' ),
            Field::make( 'text', 'portfolio_skill_description', 'Description skill' ),
            Field::make( 'image', 'portfolio_skill_photo', 'Image skill' )
            ->set_value_type( 'url' ),
          ) ),
          ] )
          ->add_tab( 'My tools', [
          Field::make( 'complex', 'portfolio_tools', 'tools' )
          ->set_collapsed(true)
          ->add_fields( array(
            Field::make( 'text', 'portfolio_tool_title', 'Title tool' ),
            Field::make( 'text', 'portfolio_tool_description', 'Description tool' ),
            Field::make( 'image', 'portfolio_tool_photo', 'Image tool' )
            ->set_value_type( 'url' ),
          ) ),
          ] )
          ->add_tab( 'My progress', [
          Field::make( 'complex', 'progress__list', 'progress' )
          ->set_collapsed(true)
          ->add_fields( array(
            Field::make( 'text', 'portfolio_progress_title', 'Title progress' ),
            Field::make( 'text', 'portfolio_progress_quantity', 'Quantity progress' ),
          ) ),
          ] );
}

