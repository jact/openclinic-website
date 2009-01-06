<?php
/**
 * participate.php
 *
 * Participate page
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2009 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: participate.php,v 1.3 2009/01/06 15:03:35 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 * @todo      change HTML scheme and review participation modes
 */

  /**
   * Controlling vars
   */
  $nav = "participate";
  $title = "Participate";

  /**
   * Show page
   */
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

  <h2>Multilingual support</h2>

  <p>
    OpenClinic offers multilingual support, based in <a href="http://www.gnu.org/manual/gettext/index.html">gettext</a>. So anyone who wants to contribute to language, can create a new .po file (portable object) and enjoy his/her own language. Every language that it is sent to me will be included in the next version and will be released as language pack.
  </p>

  <h2>HTML scheme</h2>

  <p>
    In case you want to make a <acronym title="Cascading Style Sheet">CSS</acronym> for OpenClinic, this is the scheme used in <acronym title="eXtensible HyperText Markup Language">XHTML</acronym> pages.
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
