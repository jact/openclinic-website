<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: xhtml_start.php,v 1.1 2005/04/04 19:28:00 jact Exp $
 */

/**
 * xhtml_start.php
 ********************************************************************
 * Contains the common XHTML content of the web pages (XML prolog, DOCTYPE, title page and meta data)
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  define("OPEN_CHARSET",  "ISO-8859-1");
  define("OPEN_ENCODING", "ISO-8859-1");
  define("OPEN_BUFFER",   false); // @fixme footer.php missing (by now)

  /**
   * Content negotiation
   *
   * Author: Tommy Olsson <http://autisticcuckoo.net/>
   */
  $xhtml = false;
  if (preg_match('/application\/xhtml\+xml(;q=(\d+\.\d+))?/i', $_SERVER['HTTP_ACCEPT'], $matches))
  {
    $xhtmlQ = isset($matches[2]) ? $matches[2] : 1;
    if (preg_match('/text\/html(;q=(\d+\.\d+))?/i', $_SERVER['HTTP_ACCEPT'], $matches))
    {
      $htmlQ = isset($matches[2]) ? $matches[2] : 1;
      $xhtml = ($xhtmlQ >= $htmlQ);
    }
    else
    {
      $xhtml = true;
    }
  }

  $contentType = ($xhtml) ? "application/xhtml+xml" : "text/html";
  $contentType .= "; charset=" . OPEN_CHARSET;

  header("Content-Type: " . $contentType);
  header("Vary: Accept");

  if (defined("OPEN_BUFFER") && OPEN_BUFFER)
  {
    if (eregi("gzip", $_SERVER['HTTP_ACCEPT_ENCODING']))
    {
      ob_start("ob_gzhandler");
    }
    else
    {
      ob_start();
    }
  }

  if (strpos($contentType, "application/xhtml+xml") !== false)
  {
    // To prevent 'short_open_tag = On' mistake
    echo '<?xml version="1.0" encoding="' . OPEN_ENCODING . '" standalone="no" ?>' . "\n";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr">
<head>
<title><?php
  echo "OpenClinic Project";
  if (isset($title) && !empty($title))
  {
    echo " : " . $title;
  }
?></title>

<?php
  if ( !$xhtml )
  {
    echo '<meta http-equiv="Content-Type" content="' . $contentType . '" />';
  }
?>

<meta http-equiv="imagetoolbar" content="no" />

<meta name="MSSmartTagsPreventParsing" content="TRUE" />

<meta name="robots" content="all" />

<meta name="keywords" content="OpenClinic, open source, gpl, healthcare, php, mysql, coresis" />

<meta name="description" content="OpenClinic is an easy to use, open source, medical records system written in PHP" />

<meta name="author" content="Jose Antonio Chavarría" />

<meta name="copyright" content="2002-2005 Jose Antonio Chavarría" />
