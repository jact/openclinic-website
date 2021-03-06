<?php
/**
 * index.php
 *
 * Home page
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Website
 * @copyright 2002-2016 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @author    jact <openclinic@gmail.com>
 */

  /**
   * Controlling vars
   */
  $nav = "home";
  $title = "What is OpenClinic?";

  /**
   * Show page
   */
  require_once("./header.php");
?>

<article>
  <h1>What is OpenClinic project?</h1>

  <p>
    OpenClinic is an easy to use, open source, medical records system written in <a href="http://www.php.net"><acronym title="PHP: Hypertext Preprocessor">PHP</acronym></a>. It has been mainly thougth for private clinics, surgeries and private doctors. It is platform independent and it has multilanguage architecture.
  </p>

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

        <li>Database Dumps</li>

        <li>Log Statistics</li>
      </ul>
    </li>
  </ul>

  <h2>Requirements</h2>

  <ul>
    <li>
      <p>For OpenClinic &gt; 0.7:</p>

      <ul>
        <li><a href="http://www.php.net/">PHP5</a> &gt;= 5.3.1 (incompatible with PHP4) <strong>compiled with MySQL support</strong>;</li>

        <li><a href="http://www.mysql.com/">MySQL</a> &gt; 5 (tested with 5.1 version)</li>
      </ul>
    </li>

    <li>
      <p>For OpenClinic &lt;= 0.7:</p>

      <ul>
        <li>PHP4 &gt;= 4.2 (due to session variable changes in PHP 4.2) compiled with MySQL support (tested with versions 4.2.x, 4.3.x and 4.4.x);</li>

        <li>MySQL (tested with versions 3.23.36, 3.23.49, 3.23.51, 3.23.52, 3.23.54, 3.23.55, 4.0.16, 4.0.18 and 4.0.26)</li>
      </ul>
    </li>
  </ul>

  <p>Common requirements for all versions:</p>

  <ul>
    <li>A web server prepared to execute <acronym title="PHP: Hypertext Preprocessor">PHP</acronym> code (like <a href="http://httpd.apache.org/">Apache</a>);</li>

    <li>and, of course, a web browser (with JavaScript and good <acronym title="Cascading Style Sheet level 2">CSS2</acronym> support). We recommend <a href="http://www.opera.com/">Opera</a>, <a href="http://www.mozilla.org/">Firefox</a> or <a href="http://download-chromium.appspot.com">Chromium</a>.</li>
  </ul>

  <h2>Features</h2>

  <dl>
    <dt>Environment</dt>
    <dd>Web Environment</dd>

    <dt>Intended Audience</dt>
    <dd>Education, Healthcare industry</dd>

    <dt>License</dt>
    <dd><a href="./openclinic/LICENSE">GNU General Public License (GPL)</a></dd>

    <dt>Language</dt>
    <dd>
        <ul>
            <li>English (all versions),</li>
            <li>Spanish (all versions),</li>
            <li>Bulgarian (from 0.3 to 0.5 version, both included),</li>
            <li>Dutch (0.6, 0.7 and 0.8 versions),</li>
            <li>Traditional Chinese (0.7 and 0.8 versions),</li>
            <li>Italian (0.8 versions)</li>
        </ul>
    </dd>

    <dt>Operating System</dt>
    <dd>OS Independent</dd>

    <dt>Programming Language</dt>
    <dd><a href="http://www.php.net">PHP</a>, <a href="http://www.ecma-international.org/publications/standards/Ecma-262.htm">JavaScript</a></dd>

    <dt>Topic</dt>
    <dd>Dynamic Content</dd>
  </dl>
</article>

<?php
  require_once("./footer.php");
?>
