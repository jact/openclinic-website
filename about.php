<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: about.php,v 1.1 2005/02/22 19:14:30 jact Exp $
 */

/**
 * about.php
 ********************************************************************
 * About page
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "about";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "About";
  require_once("./header.php");
?>

<div class="notice">
  <h1>About</h1>

  <p>
    OpenClinic logo is made by <a href="http://www.coresis.com/">Coresis</a>. Thanks a lot.
  </p>

  <p>
    This site is designed to the lastest generation browsers like <a href="http://www.mozilla.org/">Mozilla</a> or <a href="http://www.mozilla.org/products/firefox/">FireFox</a>. In MSIE is possible that you cannot see it properly.
  </p>

  <p>
    You can email your suggestions about this site or this project at <a href="mailto:jachavar@terra.es?subject=OpenClinic">jachavar@terra.es</a>.
  </p>
</div>

<div class="notice">
  <h2>Farewell</h2>

  <p>
    Please, enjoy OpenClinic and remember that this is free GPL software and comes without any warranty and without technical support.
  </p>

  <p>
    OpenClinic isn't perfect, but your suggestions, feedback and bug reports can help us to have a very well done medical records system!
  </p>

  <p>
    PS: Please, excuse my English, I'm not a native speaker, I'm Spanish, but for sure I'll read all emails I receive (English ones too).
  </p>

  <p class="sign">-- Jose Antonio Chavarría &lt;jachavar@terra.es&gt;</p>
</div>

<?php
  require_once("./footer.php");
?>
