      <!-- site\plugins\heineref_helpsection\templates\cheatsheet_item.php -->
      <h1><?php echo $page->title(); ?></h1>
      <div class="intro">
        <?php echo str_replace('(\\', '(', $page->excerpt()->kirbytext()) . "\n"; ?>
      </div>
      <div class="text">
        <?php echo str_replace('(\\', '(', $page->text()->kirbytext()) . "\n"; ?>
      </div>
