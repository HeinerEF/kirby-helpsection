      <!-- site\plugins\heineref_helpsection\templates\cheatsheet.php -->
      <h1><?php echo $page->title(); ?></h1>
      <?php echo str_replace('(\\', '(', $page->text()->kirbytext()) . "\n"; ?>
