<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: participate.php,v 1.1 2005/02/22 19:14:30 jact Exp $
 */

/**
 * participate.php
 ********************************************************************
 * Participate page
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "participate";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "Participate";
  require_once("./header.php");
?>

<div class="notice">
  <h1>Participate</h1>

  <p>
    You can participate in OpenClinic in some ways:
  </p>

  <ul>
    <li>Translating to others languages.</li>

    <li>Making CSS2 <em>tableless</em> themes.</li>

    <li>Testing application and reporting bugs.</li>
  </ul>
</div>

<div class="notice">
  <h2>Multilingual support</h2>

  <p>
    OpenClinic offers multilingual support, based in <a href="http://www.gnu.org/manual/gettext/index.html">gettext</a>. So anyone who wants to contribute to language, can create a new .po file (portable object) and enjoy his/her own language. Every language that it is sent to me will be included in the next version and will be released as language pack.
  </p>
</div>

<div class="notice">
  <h2>HTML scheme</h2>

  <p>
    In case you want to make a CSS for OpenClinic, this is the scheme used in HTML pages.
  </p>

  <pre>
body
|
|-- #header
|   |
|   |-- #subHeader
|   |   |
|   |    -- #headerInformation
|   |
|   |-- .menuBar
|   |   |
|   |    -- #tabs
|   |
|    -- #sourceForgeLinks
|
|-- #sideBar
|   |
|   |- .sideBarLogin
|   |
|   |- .linkList
|   |   |
|   |    -- [.subnavbar]
|   |
|    -- #sideBarLogin
|
|-- #mainZone
|
 -- #footer
    |
     -- #footerLinks
  </pre>

  <p>
    and this way is how they are place each element inside the web design. Different colors means different depth levels.
  </p>

  <p class="center">
    <img src="./i/html_scheme_2d.png" alt="Scheme positioning" width="464" height="474" />
  </p>
</div>

<?php
  require_once("./footer.php");
?>
