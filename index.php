<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: index.php,v 1.1 2005/02/22 19:14:30 jact Exp $
 */

/**
 * index.php
 ********************************************************************
 * Home page
 ********************************************************************
 * Author: jact <jachavar@terra.es>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "home";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "Home page";
  require_once("./header.php");
?>

<div class="notice">
  <h1>What is OpenClinic project?</h1>

  <p>
    OpenClinic is an easy to use, open source, medical records system written in <a href="http://www.php.net">PHP</a>. It has been mainly thougth for private clinics, surgeries and private doctors. It is platform independent and it has multilanguage architecture.
  </p>

  <hr />

  <p>
    Currently, OpenClinic has the following options:
  </p>

  <ul>
    <li>
      <p>Medical Records</p>

      <p>Use this option to manage your patient's medical records.</p>

      <p>
        Patient's Administration:
      </p>

      <ul>
        <li>Search, new, delete, edit</li>

        <li>Social Data</li>

        <li>Clinic History</li>

        <li>Problem Reports</li>
      </ul>
    </li>

    <li>
      <p>Admin</p>

      <p>Use this option to manage administrative options.</p>

      <ul>
        <li>Config settings</li>

        <li>Theme editor</li>

        <li>Staff members</li>

        <li>System Users</li>

        <li>Dumps</li>

        <li>Log Statistics</li>
      </ul>
    </li>
  </ul>
</div>

<div class="notice">
  <h2>Requirements</h2>

  <ul>
    <li><a href="http://www.php.net/">PHP4</a> &gt;= 4.2 (due to session variable changes in PHP 4.2) compiled with MySQL support (tested with versions 4.2.x and 4.3.x);</li>

    <li><a href="http://www.mysql.com/">MySQL</a> (tested with versions 3.23.36, 3.23.49, 3.23.51, 3.23.52, 3.23.54, 3.23.55, 4.0.16 and 4.0.18);</li>

    <li>a web server prepared to execute PHP code (like <a href="http://httpd.apache.org/">Apache</a>);</li>

    <li>and, of course, a web browser (with JavaScript and good CSS2 support). We recommend <a href="http://www.mozilla.org/">Mozilla</a> or <a href="http://www.mozilla.org/products/firefox/">FireFox</a>.</li>
  </ul>
</div>

<div class="notice">
  <h2>Features</h2>

  <ul>
    <li><strong>Environment:</strong> Web Environment</li>

    <li><strong>Intended Audience:</strong> Education, Healthcare industry</li>

    <li><strong>License:</strong> <a href="./openclinic/LICENSE">GNU General Public License (GPL)</a></li>

    <li><strong>Language:</strong> English (all versions), Spanish (all versions), Bulgarian (from 0.3 to 0.5 version, both included), Dutch (0.6 and 0.7 versions), Traditional Chinese (0.7 version)</li>

    <li><strong>Operating System:</strong> OS Independent</li>

    <li><strong>Programming Language:</strong> <a href="http://www.php.net">PHP</a></li>

    <li><strong>Topic:</strong> Dynamic Content</li>
  </ul>
</div>

<?php
  require_once("./footer.php");
?>
