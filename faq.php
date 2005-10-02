<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: faq.php,v 1.5 2005/10/02 15:50:41 jact Exp $
 */

/**
 * faq.php
 ********************************************************************
 * FAQ page
 ********************************************************************
 * Author: jact <openclinic@gmail.com>
 */

  ////////////////////////////////////////////////////////////////////
  // Controlling vars
  ////////////////////////////////////////////////////////////////////
  $nav = "faq";

  ////////////////////////////////////////////////////////////////////
  // Show page
  ////////////////////////////////////////////////////////////////////
  $title = "FAQ";
  require_once("./header.php");
?>

<div class="notice">
  <h1>FAQ</h1>

  <p>
    We expect your questions at <a href="mailto:openclinic@gmail.com?subject=OpenClinic">openclinic@gmail.com</a>!
  </p>
</div>

<div class="notice" id="medical_tests_problem">
  <h2>Problem to see medical tests</h2>

  <p>
    There is a bug in 0.7 version that does not allow to see the medical test in a medical problem. Until it is fixed in the next version, you can mitigate its misworking following these two advices:
  </p>

  <ul>
    <li>The filenames of medical tests must be respect the guidelines shown in the section <q>Code Files Format</q> inside the document <a href="http://openclinic.sf.net/openclinic/coding_guidelines.html">Coding Guidelines</a></li>

    <li>
      Edit <code>medical/test_list.php</code> and remove the line:
      <pre><code>
#141:    <del title="removed code">$temp = urlencode($temp);</del>
      </code></pre>
    </li>
  </ul>

  <p class="sign">2005-04-10</p>
</div>

<div class="notice" id="translate_date_entries">
  <h2>How to translate the date-relative entries</h2>

  <p>
    There are 2 entries in the file <code>.po</code> that can cause some problem in the way OpenClinic works. They are related with the dates (<code>'Y-m-d H:i:s'</code> y <code>'Y-m-d'</code>). By default they are in ISO format but they could be changed according to localization of every language.
  </p>

  <p>
    The syntax to follow is the one that is understand by the function <a href="http://www.php.net/date">date</a> of <acronym title="PHP: Hypertext Preprocessor">PHP</acronym>.
  </p>

  <p>
     To complete the translation of a language, it is possible, but not compulsory, to translate also the file <code>copyright.txt</code>. This file has inside a copy of the <acronym title="GNU General Public License">GPL</acronym> of the software application and it is shown choosing the option <strong>Home &raquo; License</strong>.
  </p>

  <p class="sign">2005-04-06</p>
</div>

<div class="notice" id="staff_member_header">
  <h2>How to fix the Staff Member bug in 0.7 version</h2>

  <p>
    One of the improvements in 0.7 version was the profile removal. In the page aforementioned not all the profile references were deleted, that is the reason why there are a little misunderstanding between the content and the headers.
  </p>

  <p>
     To fix the problem by hand it is necessary to edit the file <code>admin/staff_list.php</code> and perform the following changes:
  </p>

  <pre><code>
$thead = array(
  _("Function") => array('colspan' => <del title="removed code">2</del><ins title="inserted code">3</ins>),
  _("First Name"),
  _("Surname 1"),
  _("Surname 2"),
  <del title="removed code">_("Profile"),</del>
  _("Login")
);
  </code></pre>

  <p class="sign">2005-04-06</p>
</div>

<div class="notice" id="second_surname_not_compulsory">
  <h2>How to achieve that the second surname family name was not compulsory</h2>

  <p>
     Many people have asked the <strong>Surname 2</strong> was not compulsory. We are building the next version so this feature can be set.
  </p>

  <p>
     By now we explain the way it can be fixed. You have to comment the lines in the next files <code>classes/Patient.php</code>, <code>classes/Staff.php</code>, <code>classes/User.php</code> at <code>validateData()</code> method so they remain this way::
  </p>

  <pre><code class="comment">
<ins title="inserted code">/*</ins> if ($this->_surname2 == "")
  {
    $valid = false;
    $this->_surname2Error = _("This is a required field.");
  }  <ins title="inserted code">*/</ins>
  </code></pre>

  <p class="sign">2005-04-04</p>
</div>

<div class="notice" id="install_authentication">
  <h2>Authentication dialogue to get access to install folder</h2>

  <p>
     The authentication dialogue is shown when you try to get access to folder <code>install</code> in previous versions to 0.7 and the following files are active <code>.htaccess</code> in Apache configuration.
  </p>

  <p>
     To fix this problem it is only necessary to delete the file <code>install/.htaccess</code>. This file is used in <a href="./openclinic/index.php">DEMO version hosted in SourceForge</a> but in later versions it is not used at all. So from 0.7 version it is not available.
  </p>

  <p class="sign">2005-04-04</p>
</div>

<div class="notice">
  <h2>PHP Configuration</h2>

  <p>
    How to configure PHP sessions. Edit your <code>php.ini</code> file and verify these values:
  </p>

  <ul>
    <li>
      <p>
        <code><var>session.use_cookies</var>=1</code>
      </p>

      <p>
        Shows if the module can use cookies to save the session id on the client side. By default it is set to 1 (activated).
      </p>
    </li>

    <li><code><var>session.auto_start</var>=0</code></li>

    <li><code><var>session.use_trans_id</var>=1</code></li>

    <li>
      <p>
        <code><var>session.save_path</var>=<em>an existing directory</em></code>
      </p>

      <p>
        If the length of the path of <var>session.save_path</var> is greater than 2, there will not be removed by garbage collector.
      </p>

      <p>
        If it is pointing to a read-only directory for the rest of users, as <code>/tmp</code> (by default), the rest of server users can hijack the sessions by catching the file list of that directory.
      </p>
    </li>
  </ul>
</div>

<div class="notice">
  <h2>Characters allowed to passwords</h2>

  <p>
    The valid characters to be in passwords are letters ([a-zA-Z]), digits ([0-9]), white space and the next symbols: <code># * , ; : _ - + ! $ % &amp; / | ? { [ ( ) ] } =</code>
  </p>
</div>

<?php
  require_once("./footer.php");
?>
