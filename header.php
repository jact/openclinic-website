<?php
/**
 * header.php
 *
 * Contains the common header of the web pages
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2013 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: header.php,v 1.12 2013/09/12 14:10:01 David Bowman Exp $
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

<link rel="stylesheet" href="./c/openclinic.css?20130912" title="OpenClinic Web Site" />

<link rel="alternate" type="application/rss+xml" title="OpenClinic feed (RSS 2.0)" href="./feed.php" />
</head>
<body>
<div id="wrap">
  <header class="line">
    <h1 id="home_page" class="item mir">
      <a href="./index.php" title="Home page" accesskey="1">OpenClinic Project</a>
    </h1>

    <nav>
      <ul id="shortcuts" class="item">
        <li><a href="http://sourceforge.net/project/showfiles.php?group_id=70742" title="Shortcut to SourceForge download page" id="download">Download</a></li>

        <li><a href="./openclinic/index.php" title="Shortcut to demo version" id="demo">Demo</a></li>

        <li><a href="./faq.php" id="faq" title="Shortcut to Frequently Answers &amp; Questions">FAQ</a></li>
      </ul>
    </nav>
  </header>

  <hr />

  <div id="main" class="line">
    <div id="content" class="item">
