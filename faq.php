<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: faq.php,v 1.1 2005/02/22 19:14:30 jact Exp $
 */

/**
 * faq.php
 ********************************************************************
 * FAQ page
 ********************************************************************
 * Author: jact <jachavar@terra.es>
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
    We expect your questions at <a href="mailto:jachavar@terra.es?subject=OpenClinic">jachavar@terra.es</a>!
  </p>
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
    The valid characters to be in passwords are the letters ([a-zA-Z]), digits ([0-9]), white space and the next symbols: <code># * , ; : _ - + ! $ % &amp; / | ? { [ ( ) ] } =</code>
  </p>
</div>

<?php
  require_once("./footer.php");
?>
