<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: navbar.php,v 1.2 2005/04/11 18:02:17 jact Exp $
 */

/**
 * navbar.php
 ********************************************************************
 * Contains the left side menu navigation links
 ********************************************************************
 * Author: jact <openclinic@gmail.com>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  echo "<ul>\n";

  echo ($nav == "home")
    ? '<li title="You are here"><strong>' . "Home" . '</strong>'
    : '<li><a href="./index.php">' . "Home" . '</a>';
  echo "</li>\n";

  echo ($nav == "news")
    ? '<li title="You are here"><strong>' . "News" . '</strong>'
    : '<li><a href="./news.php">' . "News" . '</a>';
  echo "</li>\n";

  echo ($nav == "download")
    ? '<li title="You are here"><strong>' . "Download" . '</strong>'
    : '<li><a href="./download.php">' . "Download" . '</a>';
  echo "</li>\n";

  /*echo ($nav == "docs")
    ? '<li title="You are here"><strong>' . "Docs" . '</strong>'
    : '<li><a href="./docs.php">' . "Docs" . '</a>';
  echo "</li>\n";*/

  echo ($nav == "demo")
    ? '<li title="You are here"><strong>' . "Demo" . '</strong>'
    : '<li><a href="./demo.php">' . "Demo" . '</a>';
  echo "</li>\n";

  echo ($nav == "participate")
    ? '<li title="You are here"><strong>' . "Participate" . '</strong>'
    : '<li><a href="./participate.php">' . "Participate" . '</a>';
  echo "</li>\n";

  echo ($nav == "faq")
    ? '<li title="You are here"><strong>' . "FAQ" . '</strong>'
    : '<li><a href="./faq.php">' . "FAQ" . '</a>';
  echo "</li>\n";

  echo ($nav == "about")
    ? '<li title="You are here"><strong>' . "About" . '</strong>'
    : '<li><a href="./about.php">' . "About" . '</a>';
  echo "</li>\n";

  echo "</ul>\n";
?>
