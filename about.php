<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: about.php,v 1.2 2005/04/11 17:57:24 jact Exp $
 */

/**
 * about.php
 ********************************************************************
 * About page
 ********************************************************************
 * Author: jact <openclinic@gmail.com>
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
    This site is designed to the lastest generation browsers like <a href="http://www.mozilla.org/">Mozilla</a> or <a href="http://www.mozilla.org/products/firefox/">Firefox</a>. In <acronym title="Microsoft Internet Explorer">MSIE</acronym> is possible that you cannot see it properly.
  </p>

  <p>
    You can email your suggestions about this site or this project at <a href="mailto:openclinic@gmail.com?subject=OpenClinic">openclinic@gmail.com</a>.
  </p>
</div>

<div class="notice">
  <h2>Developers information</h2>

  <dl>
    <dt>[jact] - Jose Antonio Chavarría <strong>&lt;openclinic at gmail dot com&gt;</strong></dt>

    <dd>
      <ul>
        <li>principal developer of OpenClinic project</li>

        <li>person in charge of OpenClinic's maintenance service since autumn 2002</li>

        <li>person in charge of the project <a href="http://sourceforge.net/project/showfiles.php?group_id=70742"><q xml:lang="es">Control y Seguimiento de Historias Clínicas: Diseño e implementación</q></a></li>
      </ul>
    </dd>

    <dt>[eco] - Emilio M. Cazcarra <strong>&lt;eco3d at yahoo dot es&gt;</strong></dt>

    <dd>
      <ul>
        <li>official beta-tester of OpenClinic project</li>

        <li>person in charge of the project <a href="http://sourceforge.net/project/showfiles.php?group_id=70742"><q xml:lang="es">Control y Seguimiento de Historias Clínicas: Diseño del sistema seguro</q></a></li>
      </ul>
    </dd>

    <dt>[pazoff] - Plamen Rumenov Vatev <strong>&lt;pazoff at yahoo dot com&gt;</strong></dt>

    <dd>
      <ul>
        <li>bulgarian (bg_BG) translator: 0.3, 0.4, 0.5 versions</li>
      </ul>
    </dd>

    <dt>[dirk] - Dirk De Naegel <strong>&lt;dirk dot de dot naegel at scarlet dot be&gt;</strong></dt>

    <dd>
      <ul>
        <li>dutch (nl_BE) translator: 0.6, 0.7 versions</li>
      </ul>
    </dd>

    <dt>[senz] - Eric Tang <strong>&lt;senzhk at gmail dot com&gt;</strong></dt>

    <dd>
      <ul>
        <li>traditional chinese (zh_TW BIG5) translator: 0.7 version</li>
      </ul>
    </dd>
  </dl>
</div>

<div class="notice">
  <h2>Farewell</h2>

  <p>
    Please, enjoy OpenClinic and remember that this is free <acronym title="GNU General Public License">GPL</acronym> software and comes without any warranty and without technical support.
  </p>

  <p>
    OpenClinic isn't perfect, but your suggestions, feedback and bug reports can help us to have a very well done medical records system!
  </p>

  <p>
    PS: Please, excuse my English, I'm not a native speaker, I'm Spanish, but for sure I'll read all emails I receive (English ones too).
  </p>

  <p class="sign">-- Jose Antonio Chavarría &lt;openclinic at gmail dot com&gt;</p>
</div>

<?php
  require_once("./footer.php");
?>
