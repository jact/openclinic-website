<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: header.php,v 1.2 2005/04/04 19:28:46 jact Exp $
 */

/**
 * header.php
 ********************************************************************
 * Contains the common header of the web pages
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  ////////////////////////////////////////////////////////////////////
  // XHTML Start (XML prolog, DOCTYPE, title page and meta data)
  ////////////////////////////////////////////////////////////////////
  require_once("./xhtml_start.php");
?>

<link rel="home" title="Home page" href="./index.php" />

<link href="mailto:jachavar&#64;terra.es" rev="made" />

<link rel="shortcut icon" type="image/png" href="./i/miniopc.png" />

<!--link rel="bookmark icon" type="image/ico" href="./favicon.ico" /-->

<link href="./c/openclinic.css" type="text/css" rel="stylesheet" title="OpenClinic Web Site" />
</head>
<body>
<div id="heading">
  <div id="homePage">
    <a href="./index.php" title="Home page"><img id="logo" src="./i/openclinic_logo.png" width="291" height="58" alt="Home page" /></a>
  </div>

  <div id="shortcuts">
    <a href="http://sourceforge.net/project/showfiles.php?group_id=70742" title="Shortcut to SourceForge download page"><img src="./i/dumps.png" width="36" height="36" title="Download" alt="Download" />Download</a>

    <a href="./openclinic/index.php" title="Shortcut to demo version"><img src="./i/users.png" width="36" height="36" title="Demo" alt="Demo" />Demo</a>

    <a href="./faq.php"><img src="./i/logs.png" width="36" height="36" title="FAQ" alt="FAQ" />FAQ</a>
  </div>
</div>

<hr />

<div id="content">
