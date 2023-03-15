<?php
  $className = 'c-block my-5 lg:my-10';
  if (!empty($block['className'])) {
      $className .= ' ' . $block['className'];
  }

  if (!empty($block['align'])) {
      $className .= ' align' . $block['align'];
  }
?>

<section>
<?php
$proof = get_field('proof_card');
if( $proof ): ?>
  <div class="c-proof-card <?php echo esc_attr($className); ?> py-16 lg:py-24 text-white bg-purple-gradient bg-cover max-w-7xl mx-auto md:rounded-lg" id='proof card'>
    <div class="c-card-wrap px-4 sm:px-6 lg:px-14">
      <div class="c-proof-intro md:flex md:justify-between w-auto">
        <div>
          <div class="max-w-[200px]">
            <a href="<?php echo esc_url($proof['link']) ?>" target="_blank">
              <img class="max-h-[80px] w-auto hidden md:inline pb-4" src="<?php echo esc_url( $proof['proof_logo'] ); ?>" alt="<?php echo esc_url( $proof['proof_logo'] ); ?>">
            </a>
          </div>
          <h2 class="text-sm lg:text-xl font-bold"><?php echo $proof['proof_author'];?></h2>
          <p class="text-sm lg:text-l italic"c-proof-title><?php echo $proof['proof_author_title'];?></p>
          <p class="text-sm lg:text-l"c-proof-position><?php echo $proof['proof_author_position'];?></p>
        </div>
        <div class="c-proof-body md:max-w-2xl lg:max-w-3xl">
          <blockquote class="mt-10 md:mt-0">
            <p class="text-m sm:text-xl lg:text-2xl"><?php echo $proof['proof_quote']?></p>  
          </blockquote>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
</section>

