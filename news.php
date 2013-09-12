<?php
/**
 * news.php
 *
 * News page
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2013 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: news.php,v 1.9 2013/09/12 14:10:42 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

  /**
   * Controlling vars
   */
  $nav = "news";
  $title = "News";

  /**
   * Show page
   */
  require_once("./header.php");
?>

<article class="last" id="released_0_8_1">
  <h1>OpenClinic 0.8.1 released!</h1>

  <p>Changes over previous version (0.8), are these:</p>

  <ul>
    <li>New italian translation thanks to Francesco Assisi</li>

    <li>Fixed deletion of staff (second surname issue)</li>

    <li>Fixed installation wizard problems in Chrome browsers</li>
  </ul>

  <p>Also, source code repository has been published on <a href="https://github.com/jact/openclinic/">GitHub</a>.</p>

  <time datetime="2013-09-12">2013-09-12</time>
</article>

<article id="released_0_8">
  <h1>OpenClinic 0.8 released after 8 years!</h1>

  <p>Although more versions have not been published since the end of 2004, OpenClinic development has not been standing all this time. The application has been completely rewritten and has a new graphical look. Changes in MySQL (the default storage is InnoDB now), have led me to publish a new version.</p>

  <p>More important changes since 0.7 version (for more details see <a href="./openclinic/changelog.html">Changelog</a>):</p>

  <ul>
    <li>Code compatibility with PHP5 (incompatible with PHP4) and MySQL 5.5</li>

    <li>The storage engine used in MySQL is MyISAM although the default is InnoDB</li>

    <li>Removed all CSS themes and only includes one by default (new page structure)</li>

    <li>Reorganization of directories and files in the project (very extensive and deep..., the code does not look anything like the previous version)</li>

    <li>CSRF and Session Fixation Protection</li>

    <li>Unobtrusive JavaScript in all pages</li>

    <li>Changed the structure of XML database dumps (based on Propel)</li>

    <li>The second surname is not required to fill in forms</li>
  </ul>

  <time datetime="2013-02-02">2013-02-02</time>
</article>

<article id="email_change">
  <h1>New mail address project</h1>

  <p>
    We have changed our mail address to get more space and better service to send mails (we have had many problems in this subject using the current mail address). The new mail address to contact us is <strong>&lt;openclinic at gmail dot com&gt;</strong>. Please do not sent any mail to the formes address. We have had too many problems until today.
  </p>

  <p>
    One more advice: to distinguish easily your mail from spam, we would be very please if you add in Subject the word <q><strong>OpenClinic</strong></q>. Thanks for your collaboration.
  </p>

  <time datetime="2005-04-10">2005-04-10</time>
</article>

<article id="new_language_packs">
  <h1>New language packs released</h1>

  <p>
    Dirk De Naegel has translated 0.6 and 0.7 versions to Dutch (nl_BE). Eric Tang has translated to traditional chinese (zh_TW BIG5) 0.7 version. Thank you very much to all of you. All of them are available at <a href="http://sourceforge.net/project/showfiles.php?group_id=70742">SourceForge download page</a>.
  </p>

  <p>
    We would like to remind you that you can keep on developing the project making new translations. Although there are also others ways. Inside <a href="./participate.php">Participate</a> you can check some of them.
  </p>

  <time datetime="2005-04-10">2005-04-10</time>
</article>

<article id="released_0_7">
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

  <time datetime="2004-12-07">2004-12-07</time>
</article>

<article id="upgrade_0_6">
  <h1>Upgrade from 0.6 version</h1>

  <p>
    After upgrade OpenClinic from 0.6 version is recommended check all patients and problems information (doctor you are assigned to, doctor who treated you). This is due to changes in database structure.
  </p>

  <time datetime="2004-12-07">2004-12-07</time>
</article>

<?php
  require_once("./footer.php");
?>
