<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: download.php,v 1.2 2005/04/04 19:29:21 jact Exp $
 */

/**
 * download.php
 ********************************************************************
 * Download explanations page
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "download";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "Download";
  require_once("./header.php");
?>

<div class="notice">
  <h1>Download page</h1>

  <p>
    All OpenClinic versions can be found at <a href="http://sourceforge.net/project/showfiles.php?group_id=70742">SourceForge download page</a>. You can also find there the documents attached to the project.
  </p>
</div>

<div class="notice">
  <h2>What is CSHC-DSS?</h2>

  <p>
    This project explains how the environment must be set where OpenClinic is to be on production. It is included different aspects: from the choice of operative system to how it must be set to be a web server and database.
  </p>
</div>

<div class="notice">
  <h2>What is CSHC-DI?</h2>

  <p>
    In this project it is shown the development proccess of the final design: the OpenClinic software. How the database has been designed, the classes, the different pages and why some decissions have been taken in the design. You can find also a detailed manual to use the application.
  </p>

  <p>
    All available documentation to download (0.1 version) is for 0.6 version of OpenClinic. Right now it has been upgrading to fit 0.7 version.
  </p>
</div>

<?php
  require_once("./footer.php");
?>
