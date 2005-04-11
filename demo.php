<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: demo.php,v 1.2 2005/04/11 17:57:51 jact Exp $
 */

/**
 * demo.php
 ********************************************************************
 * Demo explanations page
 ********************************************************************
 * Author: jact <openclinic@gmail.com>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "demo";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "Demo";
  require_once("./header.php");
?>

<div class="notice">
  <h1>About Demo version</h1>

  <p>
    Some failures can appear in the pages, because what can be seen in the <a href="./openclinic/index.php">DEMO version</a> that you are executing is usually also a development version. We apologize for the annoyance.  </p>

  <hr />

  <p>
    A document can be found to check the <a href="./openclinic/demo_version.html"> new features of the DEMO version</a>. We recommend reading it before running the DEMO version.
  </p>

  <hr />

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
