<?php snippet('header') ?>

<section class="container">
  <?php $i = 0;?>
  <?php foreach($page->children()->sortBy('date', 'desc') as $album) { ?>
    <?php if ($album->template()=="album") { ?>
      <?= snippet('album',array('album' => $album, 'number' => $i)) ?>
    <?php } elseif ($album->template()=="video") { ?>
      <?= snippet('video',array('video' => $album, 'number' => $i)) ?>
    <?php } ?>
    <?php $i++; ?>
  <?php } ?>
</section>

<?php snippet('footer') ?>
