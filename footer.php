<?php
/**
 * footer.php
 *
 * Contains the common foot of the web pages
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2009 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: footer.php,v 1.8 2009/01/08 17:56:47 David Bowman Exp $
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

    <div id="navigation" class="item">
      <h3>Site navigation</h3>

<?php require_once("./navbar.php"); ?>

      <p class="w3c_button">
        <a href="http://validator.w3.org/check/referer" title="Valid XHTML 1.1"><span class="w3c">W3C</span> <span class="spec">XHTML 1.1</span></a>
      </p>

      <p class="w3c_button">
        <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Valid CSS"><span class="w3c">W3C</span> <span class="spec">CSS2</span></a>
      </p>

      <p class="w3c_button" id="rss">
        <a href="./feed.php" title="Really Simple Syndication 2.0 (News &amp; FAQ sections)"><span class="w3c">RSS</span> <span class="spec">2.0</span></a>
      </p>
    </div>

    <hr />

    <div id="extra" class="item">
      <h4>Documentation</h4>

      <p>
        Read about the project, releases and more things related to OpenClinic:
      </p>

      <ul>
        <li><a href="./openclinic/changelog.html">Changelog</a></li>

        <li><a href="./openclinic/coding_guidelines.html">Coding guidelines</a></li>

        <li><a href="./openclinic/install.html">Install instructions</a></li>

        <li><a href="./openclinic/demo_version.html">Demo version</a></li>
      </ul>

      <hr />

      <h4>SF's links</h4>

      <ul>
        <li><a href="http://sourceforge.net/projects/openclinic/">Project page</a></li>

        <li><a href="http://sourceforge.net/tracker/?group_id=70742&amp;atid=528857">Report bugs</a></li>

        <li><a href="http://sourceforge.net/forum/?group_id=70742">Forums</a></li>
      </ul>

      <hr />

      <p><a href="http://sourceforge.net/"><img src="./i/sf-logo.png" title="Project hosted in SourceForge.net" width="125" height="37" alt="SourceForge logo" /></a></p>

      <p><a href="http://www.coresis.com/"><img id="coresis" src="./i/coresis.png" title="Thanks Coresis" width="77" height="36" alt="Coresis logo" /></a></p>
    </div>
  </div>

  <hr />

  <div id="footer">
    <p id="copyright">Copyright &copy; 2002-<?php echo date("Y"); ?> <a href="mailto:openclinic@gmail.com?subject=OpenClinic" accesskey="9">Jose Antonio Chavarría</a>. This website is licensed under <a rel="license" href="http://creativecommons.org/licenses/by/2.0/" title="Creative Commons License">CC License</a>.</p>

    <p id="date">Last modified: 2009-01-08</p>
  </div>
</div>
</body>
</html>
<?php
  if (defined("OPEN_BUFFER") && OPEN_BUFFER)
  {
    ob_end_flush();
  }
?>
