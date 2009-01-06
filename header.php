<?php
/**
 * header.php
 *
 * Contains the common header of the web pages
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2009 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: header.php,v 1.7 2009/01/06 15:05:33 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  //error_reporting(E_ALL ^ E_NOTICE); // @debug
  /**
   * XHTML Start (XML prolog, DOCTYPE, title page and meta data)
   */
  require_once("./xhtml_start.php");
?>

<link rel="home" title="Home page" href="./index.php" />

<link href="mailto:openclinic&#64;gmail.com" rev="made" />

<link rel="icon" type="image/png" href="./i/miniopc.png" />

<link rel="shortcut icon" type="image/png" href="./i/miniopc.png" />

<link rel="bookmark icon" type="image/png" href="./i/miniopc.png" />

<link href="./c/openclinic.css" type="text/css" rel="stylesheet" title="OpenClinic Web Site" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="./feed.php" />
</head>
<body>
<div id="wrap">
  <div id="header">
    <p id="home_page">
      <a href="./index.php" title="Home page"><img id="logo" src="./i/openclinic_logo.png" width="291" height="58" alt="Home page" /></a>
    </p>

    <ul id="shortcuts">
      <li><a href="http://sourceforge.net/project/showfiles.php?group_id=70742" title="Shortcut to SourceForge download page"><img src="./i/download.png" width="48" height="48" title="Download" alt="Download" />Download</a></li>

      <li><a href="./openclinic/index.php" title="Shortcut to demo version"><img src="./i/demo.png" width="48" height="48" title="Demo" alt="Demo" />Demo</a></li>

      <li><a href="./faq.php"><img src="./i/faq.png" width="48" height="48" title="FAQ" alt="FAQ" />FAQ</a></li>
    </ul>
  </div>

  <hr id="separator" />

  <div id="main" class="line">
    <div id="content" class="item">
