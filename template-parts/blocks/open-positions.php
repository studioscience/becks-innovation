<?php
  $className = 'c-block';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<?php
  $the_query = new WP_Query(array(
    'post_type' => 'Jobs',
    'order_by' => 'date',
    'order' => 'desc',
  ));
  $posts = $the_query->posts;
?>
<div class="bg-grid-blue w-full bg-cover full-bleed pb-24 pt-32 px-4" id="open-positions">
  <h2 class="text-5xl font-medium text-galaxy sm:text-5xl mb-20 text-center">Join our team</h2>
  <?php foreach($posts as $post) : ?>
    <?php
    $fields = get_fields($post->ID);
    $location = $fields['location'];
    $department = $fields['department'];
    ?>
    <div class="mx-auto max-w-5xl pt-4 pb-12 px-3 lg:flex justify-between sm:px-2 lg:items-center lg:pt-5 lg:pb-12 lg:px-3 border-top-lightpurple">
      <div class="tracking-tight text-black md:text-lg">
        <span class="text-2xl font-medium leading-6 text-black block mb-2"><?php echo $post->post_title ?></span>
        <span class="uppercase text-base font-bold letter-spacing-lg text-brand-purple block"><?php echo $department.','.' '.$location; ?></span>
      </div>
      <div class="mt-4 flex lg:mt-0 lg:flex-shrink-0 justify-center sm:justify-start">
        <div class="inline-flex rounded-full">
          <a href="<?php echo get_home_url(null, '/', 'https').'/careers/'.$post->post_name; ?>" class="inline-flex items-center justify-center border-purple-grad px-3 py-3 text-base font-medium text-brand-purple hover:font-semibold ">Apply Now</a>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>