<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: footer.php,v 1.1 2005/02/22 19:14:30 jact Exp $
 */

/**
 * footer.php
 ********************************************************************
 * Contains the common foot of the web pages
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  // End #content
?>
</div>

<div id="leftSide">
  <h3 class="noPrint">Site navigation</h3>

<?php require_once("./navbar.php"); ?>

  <div class="w3cButton">
    <a href="http://validator.w3.org/check/referer"><span class="w3c">W3C</span> <span class="spec">XHTML 1.1</span></a>
  </div>

  <div class="w3cButton">
    <a href="http://jigsaw.w3.org/css-validator/check/referer"><span class="w3c">W3C</span> <span class="spec">CSS2</span></a>
  </div>
</div>

<div id="rightSide">
  <h4>Documentation</h4>

  <p>
    Read about the project, releases and more things related to OpenClinic:
  </p>

  <ul>
    <li><a href="./openclinic/changelog.html">Changelog</a></li>

    <li><a href="./openclinic/coding_guidelines.html">Coding guidelines</a></li>

    <li><a href="./openclinic/install.html">Install instructions</a></li>

    <li><a href="./openclinic/demo_version.html">Demo version</a></li>
  </ul>

  <hr />

  <p><a href="http://sourceforge.net/"><img src="./i/sf-logo.png" title="Project hosted in SourceForge.net" width="125" height="37" alt="SourceForge logo" /></a></p>

  <p><a href="http://www.coresis.com/"><img id="coresis" src="./i/coresis.png" title="Thanks Coresis" width="77" height="36" alt="Coresis logo" /></a></p>

  <hr />
</div>

<div id="footer">
  <span class="left">Copyright &copy; 2002-2005 <a href="mailto:jachavar@terra.es">Jose Antonio Chavarría</a>. This website is licensed under <a href="http://creativecommons.org/licenses/by/2.0/" title="Creative Commons License">CC License</a></span>

  <div class="right">Last modified: 2005-02-20</div>
</div>
</body>
</html>
