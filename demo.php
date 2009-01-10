<?php
/**
 * demo.php
 *
 * Demo explanations page
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2009 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: demo.php,v 1.4 2009/01/10 14:33:26 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

  /**
   * Controlling vars
   */
  $nav = "demo";
  $title = "Demo";

  /**
   * Show page
   */
  require_once("./header.php");
?>

<div class="notice">
  <h2>About Demo version</h2>

  <p>
    Some failures can appear in the pages, because what can be seen in the <a href="./openclinic/index.php">DEMO version</a> that you are executing is usually also a development version. We apologize for the annoyance.
  </p>

  <p>
    A document can be found to check the <a href="./openclinic/demo_version.html"> new features of the DEMO version</a>. We recommend reading it before running the DEMO version.
  </p>

  <p>
    We would like to thank everybody for visiting the <a href="./openclinic/index.php">DEMO version</a> and also thank everybody that have worked looking for data to test (all data should be bogus...).
  </p>

  <p>
    That is why, we do feel very satisfied with the job done. It is very encouragement to know that there is somebody on the other side.
  </p>
</div>

<?php
  require_once("./footer.php");
?>
