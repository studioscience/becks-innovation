<?php

//add_action('init', 'sundaysky_custom_blocks');

  if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');

    function register_acf_block_types() {
      acf_register_block_type ( 
        array(
          'name' => 'stat-row',
          'title' => 'Stat Row',
          'description' => 'A row displaying 3 stats and descriptions',
          'render_template' => 'template-parts/blocks/stat-row.php',
          'icon' => '',
          'keywords' => array('statistic', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'split-content',
          'title' => 'Split Content',
          'description' => 'A split(img l/r) display of any header, body, img, and link',
          'render_template' => 'template-parts/blocks/split-content.php',
          'icon' => '',
          'keywords' => array('split', 'content'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'about-us',
          'title' => 'About Us',
          'description' => 'repeater section with cards' ,
          'render_template' => 'template-parts/blocks/about-us.php',
          'icon' => '',
          'keywords' => array('about', 'card'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'proof-card',
          'title' => 'Proof Card',
          'description' => 'testimonial on card.',
          'render_template' => 'template-parts/blocks/proof-card.php',
          'icon' => '',
          'keywords' => array('testimonial', 'proof','card'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'feature-grid',
          'title' => 'Feature Grid',
          'description' => 'a grid displaying features with a header and icons.',
          'render_template' => 'template-parts/blocks/feature-grid.php',
          'icon' => '',
          'keywords' => array('statistic', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'premium-hero',
          'title' => 'Premium Hero',
          'description' => 'Hero for the homepage and solutions pages only',
          'render_template' => 'template-parts/blocks/heros/premium-hero.php',
          'icon' => '',
          'keywords' => array('Hero', 'group'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'company-hero',
          'title' => 'Company Hero',
          'description' => 'Hero for the Company page only',
          'render_template' => 'template-parts/blocks/heros/company-hero.php',
          'icon' => '',
          'keywords' => array('Hero', 'group'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'logo-cloud',
          'title' => 'Logo Cloud',
          'description' => 'A row logos on a slider',
          'render_template' => 'template-parts/blocks/logo-cloud.php',
          'icon' => '',
          'keywords' => array('statistic', 'row'),
          'enqueue_assets'    => function(){
            wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1' );
            wp_enqueue_style( 'slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1' );
            wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );

            wp_enqueue_style( 'block-slider', get_template_directory_uri() . '/assets/dist/css/gutenberg.css', array(), '1.0.0' );
            wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/assets/dist/js/gutenberg.js', array(), '1.0.0', true );
          },
      ));

      acf_register_block_type ( 
        array(
          'name' => 'pull-quote',
          'title' => 'Pull Quote',
          'description' => 'block wuote with team mepmber and image',
          'render_template' => 'template-parts/blocks/pull-quote.php',
          'icon' => '',
          'keywords' => array('statistic', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'hero',
          'title' => 'Hero',
          'description' => 'Hero group for heros on most pages',
          'render_template' => 'template-parts/blocks/heros/hero.php',
          'icon' => '',
          'keywords' => array('hero', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'callout',
          'title' => 'Callout',
          'description' => 'card to call out available media',
          'render_template' => 'template-parts/blocks/callout.php',
          'icon' => '',
          'keywords' => array('media', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'brand-story',
          'title' => 'Brand Story ',
          'description' => 'A module with cityscape background image telling the AS Story ',
          'render_template' => 'template-parts/blocks/brand-story.php',
          'icon' => '',
          'keywords' => array('brand story', 'group'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'value-props',
          'title' => 'Value Props',
          'description' => 'a module display the value As brings',
          'render_template' => 'template-parts/blocks/value-props.php',
          'icon' => '',
          'keywords' => array('value props', 'repeater rows'),
        )
      );

      // register a testimonial block.
      acf_register_block_type(array(
        'name'              => 'slider',
        'title'             => __('Slider'),
        'description'       => __('A custom slider block.'),
        'render_template'   => 'template-parts/blocks/slider/slider.php',
        'category'          => 'formatting',
        'icon'              => 'images-alt2',
        'align'             => 'full',
        // 'enqueue_assets'    => function(){
        //   // Check for needed files for Image Carousel Block
        //   // Check if " slick.min.js " is "enqueued", if so next step, else, register it
        //   $handle = 'slick_JS';
        //   $list = 'enqueued';
        //   if (!wp_script_is( $handle, $list )) {
        //       wp_register_script( 'slick_JS', 'cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
        //       wp_enqueue_script( 'slick_JS' );
        //   }
        //   // Check if " slick.css " is "enqueued", if so next step, else, register it 
        //       $handle_css = 'slick-css'; 
        //       $list_css = 'enqueued'; 
        //       if(!wp_style_is($handle_css, $list_css)){
        //           wp_enqueue_style( 'slick-css',  'cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' ); 
        //       }

            
        //             },
      ));
      
      acf_register_block_type ( 
        array(
          'name' => 'job-form',
          'title' => 'Job Form',
          'description' => 'A form synced with advanced forms plugin and acf fields.',
          'render_template' => 'template-parts/blocks/job-form.php',
          'icon' => '',
          'keywords' => array('Forms', 'acf'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'styled-3-col',
          'title' => 'Styled 3 Col',
          'description' => 'A row displaying 3 columns with section header.',
          'render_template' => 'template-parts/blocks/3-col-grid.php',
          'icon' => '',
          'keywords' => array('grid', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'form-temp',
          'title' => 'Form temp',
          'description' => 'A temporary block to style forms',
          'render_template' => 'template-parts/blocks/form-temp.php',
          'icon' => '',
          'keywords' => array('statistic', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'open-positions',
          'title' => 'Open Positions',
          'description' => 'A section header and list of job titles, each with CTA.',
          'render_template' => 'template-parts/blocks/open-positions.php',
          'icon' => '',
          'keywords' => array('open positions', 'career'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'team-grid',
          'title' => 'Team Grid',
          'description' => 'A grid display 4 col 2 rows of names and titles linked to indeed.',
          'render_template' => 'template-parts/blocks/team-grid.php',
          'icon' => '',
          'keywords' => array('team', 'indeed'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'investors-grid',
          'title' => 'Investors Grid',
          'description' => 'A grid display 4 col 2 rows of names and titles linked to indeed.',
          'render_template' => 'template-parts/blocks/investors-grid.php',
          'icon' => '',
          'keywords' => array('investors', 'indeed'),
        )
      );

       acf_register_block_type ( 
        array(
          'name' => 'tabs',
          'title' => 'Tabs',
          'description' => '3 tabs containing cards',
          'render_template' => 'template-parts/blocks/tabs.php',
          'icon' => '',
          'keywords' => array('statistic', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'secondary-cta',
          'title' => 'Secondary CTA',
          'description' => 'CTA that is not full width with a gradient background',
          'render_template' => 'template-parts/blocks/secondary-cta.php',

          'icon' => '',
          'keywords' => array('statistic', 'row'),
        )
      );

       acf_register_block_type ( 
        array(
          'name' => 'faq-accordion',
          'title' => 'FAQ Accordion',
          'description' => 'accordion',
          'render_template' => 'template-parts/blocks/accordion.php',
          'icon' => '',
          'keywords' => array('accordion', 'row'),
        )
      );

       acf_register_block_type ( 
        array(
          'name' => 'footer-cta',
          'title' => 'Footer Cta',
          'description' => 'full width cta with background image',
          'render_template' => 'template-parts/blocks/footer-cta.php',
          'icon' => '',
          'keywords' => array('footer', 'cta'),
        )
      );

       acf_register_block_type ( 
        array(
          'name' => 'partnership-process',
          'title' => 'Partnership Process',
          'description' => 'A module with heading, blurb and interactive image',
          'render_template' => 'template-parts/blocks/partnership.php',
          'icon' => '',
          'keywords' => array('partnership', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'schedule-call',
          'title' => 'Schedule Call',
          'description' => 'header, cards and calendly embed',
          'render_template' => 'template-parts/blocks/schedule.php',
          'icon' => '',
          'keywords' => array('schedule', 'row'),
        )
      );

      acf_register_block_type ( 
        array(
          'name' => 'testimonial-slider',
          'title' => 'Testimonial Slider',
          'description' => 'slider displaying customer testimonials',
          'render_template' => 'template-parts/blocks/testimonial-slider.php',
          'icon' => '',
          'keywords' => array('testimonial', 'slider'),
        )
      );
      
    }
  } 
?>