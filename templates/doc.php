      <!-- site\plugins\heineref_helpsection\templates\doc.php -->
      <h1><?php echo $page->title(); ?></h1>
      <div class="intro">
        <?php echo str_replace('(\\', '(', $page->excerpt()->kirbytext()) ?>
      </div>
      <?php echo str_replace('(\\', '(', $page->text()->kirbytext()) ?>
