<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: news.php,v 1.1 2005/02/22 19:14:30 jact Exp $
 */

/**
 * news.php
 ********************************************************************
 * News page
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "news";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "News";
  require_once("./header.php");
?>

<div class="notice">
  <h1>OpenClinic 0.7 released!</h1>

  <p>
    More important changes since 0.6 (for more details see <a href="./openclinic/changelog.html">Changelog</a>):
  </p>

  <ul>
    <li>DbConnection class: connection parameters are set in constructor function</li>

    <li>New file lib/debug_lib.php: new application constant OPEN_DEBUG (true | false)</li>

    <li>Suppression of javascript protocol in href attributes</li>

    <li>Fixed problems with inexistent things</li>

    <li>Changes in connect method of Query class to permit connection parameters</li>

    <li>DTD XHTML 1.1 in all project pages</li>

    <li>No GET values to *_del.php files (via POST now)</li>

    <li>If items per page equal to zero, searchs return all results without pagination</li>

    <li>New option CREATE DATABASE __dbname__ in MySQL dumps and table summary</li>

    <li>Redirections to avoid reload problem in insertions, updates or deletions processes</li>

    <li>Fixed problems with dumps as files (urldecode of data is unnecessary)</li>

    <li>Custom error handler for log to screen or/and to a file (new constants in read_settings.php file: OPEN_SCREEN_ERRORS, OPEN_LOG_ERRORS, OPEN_LOG_FILE)</li>

    <li>Record log process improvements: now is saved entire record data</li>

    <li>New constant in global_constants.php file: OPEN_SEPARATOR for implode(), explode() functions; OPEN_MSG_INFO, OPEN_MSG_WARNING, OPEN_MSG_ERROR for messages</li>

    <li>CSS2 table less based themes, changes in theme_tbl table and admin/theme_*.php files (new file admin/theme_preload_css.php)</li>
  </ul>

  <p class="sign">2004-12-07</p>
</div>

<div class="notice">
  <h1>Upgrade from 0.6 version</h1>

  <p>
    After upgrade OpenClinic from 0.6 version is recommended check all patients and problems information (doctor you are assigned to, doctor who treated you). This is due to changes in database structure.
  </p>

  <p class="sign">2004-12-07</p>
</div>

<?php
  require_once("./footer.php");
?>
