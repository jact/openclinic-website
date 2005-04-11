<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: news.php,v 1.2 2005/04/11 18:03:19 jact Exp $
 */

/**
 * news.php
 ********************************************************************
 * News page
 ********************************************************************
 * Author: jact <openclinic@gmail.com>
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
  <h1>Cambio de la dirección de correo del proyecto</h1>

  <p>
    Con objeto de conseguir una cuenta de correo con más espacio y mejor eficiencia en los envíos (hemos tenido muchos problemas en este aspecto con la dirección actual), la nueva cuenta para contactar con nosotros es <strong>&lt;openclinic at gmail dot com&gt;</strong>. Os rogamos que ya no escribais a la anterior. Demasiados problemas nos ha proporcionado hasta ahora.
  </p>

  <p>
    Y una recomendación más: para evitar confundir vuestros mensajes con el spam que acosará a esta nueva cuenta, os agradeceríamos que como Subject del correo siempre apareciera la palabra <q><strong>OpenClinic</strong></q>. Muchas gracias por vuestra colaboración.
  </p>

  <p class="sign">2005-04-10</p>
</div>

<div class="notice">
  <h1>New language packs released</h1>

  <p>
    Dirk De Naegel ha traducido las versiones 0.6 y 0.7 de OpenClinic al holandés (nl_BE). Eric Tang se ha encargado de traducir al chino tradicional (zh_TW BIG5) la versión 0.7. Muchas gracias a los dos. Todas ellas están disponibles en la <a href="http://sourceforge.net/project/showfiles.php?group_id=70742">SourceForge download page</a> de OpenClinic.
  </p>

  <p>
    Os recordamos que podeis contribuir aportando nuevas traducciones. Aunque también de otras formas. En el apartado <a href="./participate.php">Participate</a> podeis consultar algunas de ellas.
  </p>

  <p class="sign">2005-04-10</p>
</div>

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
