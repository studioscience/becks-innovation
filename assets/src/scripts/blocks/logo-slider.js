(function($){

  /**
   * initializeBlock
   *
   * Adds custom JavaScript to the block HTML.
   *
   * @date    15/4/19
   * @since   1.0.0
   *
   * @param   object $block The block jQuery element.
   * @param   object attributes The block attributes (only available when editing).
   * @return  void
   */
  var initializeBlock = function( $block ) {
      $block.find('.slides').slick({
          dots: false,
          infinite: true,
          slidesToShow: 5,
          autoplay: true,
          autoplayspeed: 10000,
          speed: 1000,
          cssEase: "linear",
      });     
  }

  // Initialize each block on page load (front end).
  $(document).ready(function(){
      $('.slider').each(function(){
          initializeBlock( $(this) );
      });
  });

  $('.slider').slick({
    slide: 'li'
    // other options
  })

  // Initialize dynamic block preview (editor).
  if( window.acf ) {
      window.acf.addAction( 'render_block_preview/type=slider', initializeBlock );
  }

})(jQuery);