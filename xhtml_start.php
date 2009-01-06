<?php
/**
 * xhtml_start.php
 *
 * Contains the common XHTML content of the web pages (XML prolog, DOCTYPE, title page and meta data)
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2009 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: xhtml_start.php,v 1.6 2009/01/06 15:03:52 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  define("OPEN_CHARSET",  "UTF-8");
  define("OPEN_ENCODING", "UTF-8");
  define("OPEN_BUFFER",   true);

  /**
   * string _convert2Utf8(string $buffer)
   *
   * Callback function for ob_start
   *
   * @param string $buffer
   * @return string $buffer ut8 converted
   * @access private
   */
  function _convert2Utf8($buffer)
  {
    return utf8_encode($buffer);
  }

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
    /*if (eregi("gzip", $_SERVER['HTTP_ACCEPT_ENCODING']))
    {
      ob_start("ob_gzhandler");
    }
    else*/
    {
      ob_start("_convert2Utf8");
    }
  }

  // I hate MSIE (compatMode disabled in 6.0 to get same look & feel)
  if (strpos($contentType, "application/xhtml+xml") !== false || strpos($_SERVER['HTTP_USER_AGENT'], "MSIE 6.0"))
  {
    // To prevent 'short_open_tag = On' mistake
    echo '<?xml version="1.0" encoding="' . OPEN_ENCODING . '" standalone="no" ?>' . "\n";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" dir="ltr">
<head>
<?php
  //if ( !$xhtml )
  {
    echo "\n" . '<meta http-equiv="Content-Type" content="' . $contentType . '" />' . "\n";
  }
?>

<title><?php
  if (isset($title) && !empty($title))
  {
    echo $title . " : ";
  }
  echo "OpenClinic Project";
?></title>

<meta http-equiv="imagetoolbar" content="no" />

<meta name="MSSmartTagsPreventParsing" content="TRUE" />

<meta name="robots" content="all" />

<meta name="keywords" content="OpenClinic, open source, gpl, healthcare, php, mysql, coresis" />

<meta name="description" content="OpenClinic is an easy to use, open source, medical records system written in PHP" />

<meta name="author" content="Jose Antonio Chavarría" />

<meta name="copyright" content="2002-<?php echo date("Y"); ?> Jose Antonio Chavarría" />
