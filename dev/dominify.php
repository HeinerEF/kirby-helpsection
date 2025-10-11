<?php // site\plugins\heineref_helpsection\dev\dominify.php

/**
 * Minify CSS Function
 * @author    HeinerEF
 * @link      https://github.com/HeinerEF/heineref_helpsection
 * @return    CSS
 * @version   1.0.0
 * @created   2025-09-29 by HeinerEF
 */

  // Set file paths.
  $CSS    = realpath(__DIR__ . '/index.css');
  $minCSS = realpath(__DIR__ . '/../index.css');

  // time stamp
  $stamp = '/* Last update ' . date("Y-m-d") . ' by HeinerEF */' . "\n";

  // Place CSS file in buffer.
  $buffer = file_get_contents($CSS);

  $minifypath = realpath(__DIR__ . '/minify.php');

  // Minify the CSS even further.
  require_once $minifypath;
  $buffer = minifyCSS($buffer);

  // Write minified CSS file.
  file_put_contents($minCSS, $stamp . $buffer);
