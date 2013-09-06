<?php
/**
 * about.php
 *
 * About page
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2013 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: about.php,v 1.6 2013/09/06 10:25:21 David Bowman Exp $
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

<article>
  <h1>About</h1>

  <p>
    OpenClinic logo is made by <a href="http://www.coresis.com/">Coresis</a>. Thanks a lot.
  </p>

  <p>
    This site is designed to the lastest generation browsers like <a href="http://www.opera.com/">Opera</a>, <a href="http://www.mozilla.org/products/firefox/">Firefox</a> or <a href="http://download-chromium.appspot.com/">Chromium</a>.
  </p>

  <p>
    You can email your suggestions about this site or this project at <a href="mailto:openclinic@gmail.com?subject=OpenClinic">&lt;openclinic at gmail dot com&gt;</a>.
  </p>

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
        <li>dutch (nl_BE) translator: 0.6, 0.7 and 0.8 versions</li>
      </ul>
    </dd>

    <dt>[senz] - Eric Tang <strong>&lt;senzhk at gmail dot com&gt;</strong></dt>

    <dd>
      <ul>
        <li>traditional chinese (zh_TW BIG5) translator: 0.7 and 0.8 versions</li>
      </ul>
    </dd>

    <dt>Francesco Assisi <strong>&lt;fra dot assisi at gmail dot com&gt;</strong></dt>

    <dd>
      <ul>
        <li>italian (it_IT) translator: 0.8 version</li>
      </ul>
    </dd>
  </dl>

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
</article>

<?php
  require_once("./footer.php");
?>
