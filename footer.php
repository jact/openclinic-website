<?php
/**
 * footer.php
 *
 * Contains the common foot of the web pages
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2013 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: footer.php,v 1.13 2013/09/14 20:01:36 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

  if (str_replace("\\", "/", __FILE__) == $_SERVER['SCRIPT_FILENAME'])
  {
    header("Location: ./index.php");
    exit();
  }

  // End #content
?>
    </div>

    <hr />

    <nav class="item">
      <h1>Site navigation</h1>

<?php require_once("./navbar.php"); ?>

      <h1>Validation links</h1>

      <ul id="validation">
        <li>
          <a href="http://validator.w3.org/check/referer" title="Valid HTML5"><span class="w3c">W3C</span> <span class="spec">HTML5</span></a>
        </li>

        <li>
          <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Valid CSS"><span class="w3c">W3C</span> <span class="spec">CSS3</span></a>
        </li>

        <li id="rss">
          <a href="./feed.php" title="Really Simple Syndication 2.0 (News &amp; FAQ sections)"><span class="w3c">RSS</span> <span class="spec">2.0</span></a>
        </li>
      </ul>
    </nav>

    <hr />

    <aside class="item">
      <p>
        Read about the project, releases and more things related to OpenClinic:
      </p>

      <nav>
        <h1>Documentation</h1>

        <ul>
          <li><a href="./openclinic/changelog.html">Changelog</a></li>

          <li><a href="./openclinic/coding_guidelines.html">Coding guidelines</a></li>

          <li><a href="./openclinic/install.html">Install instructions</a></li>

          <li><a href="./openclinic/demo_version.html">Demo version</a></li>
        </ul>
      </nav>

      <nav>
        <h1>SF's links</h1>

        <ul>
          <li><a href="http://sourceforge.net/projects/openclinic/">Project page</a></li>

          <li><a href="http://sourceforge.net/tracker/?group_id=70742&amp;atid=528857">Report bugs</a></li>

          <li><a href="http://sourceforge.net/forum/?group_id=70742">Forums</a></li>
        </ul>
      </nav>

      <nav>
        <h1>Advertising</h1>

        <ul id="ads">
          <li><a href="http://sourceforge.net/"><img src="./i/sf-logo.png" title="Project hosted in SourceForge.net" width="125" height="37" alt="SourceForge logo" /></a></li>

          <li><a href="http://www.coresis.com/"><img id="coresis" src="./i/coresis.png" title="Thanks Coresis" width="77" height="36" alt="Coresis logo" /></a></li>
        </ul>
      </nav>
    </aside>
  </div>

  <hr />

  <footer>
    <p id="copyright">Copyright &copy; 2002-<?php echo date("Y"); ?> <a href="mailto:openclinic@gmail.com?subject=OpenClinic" accesskey="9">Jose Antonio Chavarría</a>. This website is licensed under <a rel="license" href="http://creativecommons.org/licenses/by/2.0/" title="Creative Commons License">CC License</a>.</p>

    <time datetime="2013-09-12">Last modified: 2013-09-12</time>
  </footer>
</div>
</body>
</html>
<?php
  if (defined("OPEN_BUFFER") && OPEN_BUFFER)
  {
    ob_end_flush();
  }
?>
