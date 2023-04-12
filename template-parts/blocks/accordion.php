<div class="relative bg-beige">
  <div class="c-accordion md:max-w-7xl md:mx-auto py-24" id="accordion">
    <h1 class="text-center md:text-5xl text-3xl leading-normal font-medium pb-20"><?php echo get_field('header') ?></h1>
    <ul class="c-accordion__group border-t border-black">
    <?php if (have_rows('accordion') ):?>
      <?php while (have_rows('accordion')) : the_row(); ?>
        <li class="c-accordion__item border-b border-black pb-6">
          <h3 class="c-accordion__heading text-lg lg:text-2xl font-semibold py-6"><?php echo the_sub_field('item_header') ?></h3>
          <div class="c-accordion__body"><?php echo the_sub_field('item_body') ?></div>
        </li>
      <?php endwhile ?>
    <?php endif ?>
    </ul>
  </div>
  <img class="hidden md:inline-block absolute top-0 right-0" src="wp-content/themes/becks/assets/dist/images/whole-circle-trax.png" alt="trax graphic">
</div>

<script>
  var contents = $('.c-accordion__body');
    var titles = $('.c-accordion__item');

    titles.on('click', function () {
      var title = $(this);
      contents.filter(':visible').slideUp(function () {
        $('.c-accordion__group li').removeClass('is-opened');
      });
      
      var content = title.find('.c-accordion__body');

      if (!content.is(':visible')) {
        content.slideDown(function () { title.addClass('is-opened') });
      }
    });
</script>