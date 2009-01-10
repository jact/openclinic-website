<?php
/**
 * about.php
 *
 * About page
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2009 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: about.php,v 1.4 2009/01/10 14:32:47 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

  /**
   * Controlling vars
   */
  $nav = "about";
  $title = "About";

  /**
   * Show page
   */
  require_once("./header.php");
?>

<div class="notice">
  <h2>About</h2>

  <p>
    OpenClinic logo is made by <a href="http://www.coresis.com/">Coresis</a>. Thanks a lot.
  </p>

  <p>
    This site is designed to the lastest generation browsers like <a href="http://www.opera.com/">Opera</a> or <a href="http://www.mozilla.org/products/firefox/">Firefox</a>. In <acronym title="Microsoft Internet Explorer">MSIE</acronym> is possible that you cannot see it properly.
  </p>

  <p>
    You can email your suggestions about this site or this project at <a href="mailto:openclinic@gmail.com?subject=OpenClinic">&lt;openclinic at gmail dot com&gt;</a>.
  </p>

  <h3>Developers information</h3>

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

  <h3>Farewell</h3>

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
