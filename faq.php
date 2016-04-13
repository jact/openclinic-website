<?php
/**
 * faq.php
 *
 * FAQ page
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
  $nav = "faq";
  $title = "FAQ";

  /**
   * Show page
   */
  require_once("./header.php");
?>

<article>
  <h1>FAQ</h1>

  <p>
    We expect your questions at <a href="mailto:openclinic@gmail.com?subject=OpenClinic">openclinic at gmail dot com</a>!
  </p>
</article>

<article id="missing_language_linux">
  <h1>Missing language on Linux system</h1>

  <p>
    If you can not configure OpenClinic with some of the languages in which it is translated, try to run the <code>locale-gen</code> command to generate the language of your choice in the system.
  </p>

  <p>An example:</p>

  <pre><code>
$ sudo locale-gen es_ES
  </code></pre>

  <time datetime="2016-04-13">2016-04-13</time>
</article>

<article id="deleting_patient_problem">
  <h1>Deleting a medical problem or patient bug</h1>

  <p>
    In version 0.7 it happened an error when you try to delete a patient or a medical problem. It is caused by the lack of a field in the database. In order to solve this bug, it is necessary to execute the next <acronym>SQL</acronym> sentences with an user with permissions to alter the table structure:
  </p>

  <pre><code>
mysql&gt; <strong>ALTER TABLE deleted_patient_tbl</strong>
  -&gt;   <strong>ADD collegiate_number VARCHAR(20) AFTER id_member;</strong>
mysql&gt; <strong>ALTER TABLE deleted_problem_tbl</strong>
  -&gt;   <strong>ADD collegiate_number VARCHAR(20) AFTER id_member;</strong>
  </code></pre>

  <time datetime="2006-01-16">2006-01-16</time>
</article>

<article id="medical_tests_problem">
  <h1>Problem to see medical tests</h1>

  <p>
    There is a bug in 0.7 version that does not allow to see the medical test in a medical problem. Until it is fixed in the next version, you can mitigate its misworking following these two advices:
  </p>

  <ul>
    <li>The filenames of medical tests must be respect the guidelines shown in the section <q>Code Files Format</q> inside the document <a href="http://openclinic.sf.net/openclinic/coding_guidelines.html">Coding Guidelines</a>.</li>

    <li>
      Edit <code>medical/test_list.php</code> and remove the line:
      <pre><code>
#141:    <del title="removed code">$temp = urlencode($temp);</del>
      </code></pre>
    </li>
  </ul>

  <time datetime="2005-04-10">2005-04-10</time>
</article>

<article id="translate_date_entries">
  <h1>How to translate the date-relative entries</h1>

  <p>
    There are 2 entries in the file <code>.po</code> that can cause some problem in the way OpenClinic works. They are related with the dates (<code>'Y-m-d H:i:s'</code> y <code>'Y-m-d'</code>). By default they are in ISO format but they could be changed according to localization of every language.
  </p>

  <p>
    The syntax to follow is the one that is understand by the function <a href="http://www.php.net/date">date</a> of <acronym title="PHP: Hypertext Preprocessor">PHP</acronym>.
  </p>

  <p>
     To complete the translation of a language, it is possible, but not compulsory, to translate also the file <code>copyright.txt</code>. This file has inside a copy of the <acronym title="GNU General Public License">GPL</acronym> of the software application and it is shown choosing the option <strong>Home &raquo; License</strong>.
  </p>

  <time datetime="2005-04-06">2005-04-06</time>
</article>

<article id="staff_member_header">
  <h1>How to fix the Staff Member bug in 0.7 version</h1>

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

  <time datetime="2005-04-06">2005-04-06</time>
</article>

<article id="second_surname_not_compulsory">
  <h1>How to achieve that the second surname family name was not compulsory</h1>

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

  <time datetime="2005-04-04">2005-04-04</time>
</article>

<article id="install_authentication">
  <h1>Authentication dialogue to get access to install folder</h1>

  <p>
     The authentication dialogue is shown when you try to get access to folder <code>install</code> in previous versions to 0.7 and the following files are active <code>.htaccess</code> in Apache configuration.
  </p>

  <p>
     To fix this problem it is only necessary to delete the file <code>install/.htaccess</code>. This file is used in <a href="./openclinic/index.php">DEMO version hosted in SourceForge</a> but in later versions it is not used at all. So from 0.7 version it is not available.
  </p>

  <time datetime="2005-04-04">2005-04-04</time>
</article>

<article>
  <h1>PHP Configuration</h1>

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
</article>

<article>
  <h1>Characters allowed to passwords</h1>

  <p>
    The valid characters to be in passwords are letters ([a-zA-Z]), digits ([0-9]), white space and the next symbols: <code># * , ; : _ - + ! $ % &amp; / | ? { [ ( ) ] } =</code>
  </p>
</article>

<?php
  require_once("./footer.php");
?>
