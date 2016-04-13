<?php
/**
 * download.php
 *
 * Download explanations page
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
  $nav = "download";
  $title = "Download";

  /**
   * Show page
   */
  require_once("./header.php");
?>

<article>
  <h1>Download page</h1>

  <p>
    All OpenClinic versions can be found at <a href="http://sourceforge.net/project/showfiles.php?group_id=70742">SourceForge download page</a>. You can also find there the documents attached to the project.
  </p>

  <p>
    Source code project can be found at <a href="https://github.com/jact/openclinic/">GitHub</a>.
  </p>

  <h2>What is CSHC-DSS?</h2>

  <p>
    This project explains how the environment must be set where OpenClinic is to be on production. It is included different aspects: from the choice of operative system to how it must be set to be a web server and database.
  </p>

  <h2>What is CSHC-DI?</h2>

  <p>
    In this project it is shown the development proccess of the final design: the OpenClinic software. How the database has been designed, the classes, the different pages and why some decissions have been taken in the design. You can find also a detailed manual to use the application.
  </p>

  <p>
    All available documentation to download (0.1 version) is for 0.6 version of OpenClinic.
  </p>

  <h2>File signature to check its authenticity</h2>

  <p>
    In the next table, we provide you the signatures of the files that can be downloaded in md5 format. This way you can its good accuracy and authenticity.
  </p>

  <table>
    <thead>
      <tr>
        <th>File</th>

        <th>md5 signature</th>
      </tr>
    </thead>

    <tbody>
<?php
  $array = array(
    '2cbfce5b7b7d47dc76c0a4856db51723' => 'openclinic-0.8.2.tar.bz2',
    //'58c36f2c4515f0648fdd07d80d5c57ad' => 'openclinic-0.8.1.tar.bz2',
    //'25f7ecb0ca8a8cb376bb1576726afd5d' => 'openclinic-0.8.tar.bz2',
    '0338bd0e62ecc971d4a863a388cc1ad1' => 'openclinic-0.7.tar.bz2',
    '029f51523c202e2d1afff8837adb2df5' => 'openclinic-0.7.tar.gz',
    'a26aae34d4f9dd0f292d2e040b7c7f7b' => 'openclinic-0.6.tar.bz2',
    '6247d609212e492eb9e943624ca10962' => 'openclinic-0.6.tar.gz',
    //'9512485bd67b61e7ee29970b390c0c42' => 'openclinic-0.5.tar.bz2',
    //'c00c83e732394902f0dc2041e9d0d6cd' => 'openclinic-0.5.tar.gz',
    //'8275d2d29d9bddb09f2c0f10a90084fd' => 'openclinic-0.4.tar.bz2',
    //'9868a8ca4311590287dd88138a9e80f4' => 'openclinic-0.4.tar.gz',
    //'e39ffe06b0ba5d58d59cf1b1f9cca7e8' => 'openclinic-0.3.tar.gz',
    //'cf43efbd87203738b49216e9717951da' => 'openclinic-0.2.tar.gz',
    //'c70d407135246f7d064226a79cbb23f4' => 'openclinic-0.1.tar.gz',
    //'c28c1500c9e92ac7c40c272c3e47b6c9' => 'openclinic-lang-bulgarian-0.3.zip',
    '8faa4419ebffdee3a8792df79a1d2c57' => 'openclinic-lang-nl_BE-0.6.zip',
    '66938a130902dc763fb8f98a5e6a6aa5' => 'openclinic-lang-nl_BE-0.7.zip',
    'a387b15dda4de9062946b62c2844db5d' => 'openclinic-lang-zh_TW-0.7.zip',
    '592cdeca61f264ddd529871942a4cfc3' => 'cshc-di-html-0.1_es.zip',
    '90401fc077b46b306f019604b6673e7a' => 'cshc-di-pdf-0.1_es.zip',
    '9b65c6095d307d205d80ec6cfe69f6a2' => 'cshc-di-rtf-0.1_es.zip',
    '6a9623e9c6a824c8e1f66aa05d17b0f0' => 'cshc-di-slideshow-0.1_es.zip',
    '74ce94de590a28e0d5e8537de305cdb1' => 'cshc-di-xml-0.1_es.zip',
    '799402d463fb26bb43410f7d3170d2c1' => 'cshc-dss-chm-0.1_es.zip',
    'e5e2a16689f8b0548e29d8522c2827f6' => 'cshc-dss-html-0.1_es.zip',
    '23e71a0d70001d40b3ec101e99f6a979' => 'cshc-dss-pdf-0.1_es.zip',
    '30efd8e7b49f12677fa0cc851551cc02' => 'cshc-dss-rtf-0.1_es.zip',
    '564834bae00ccfb70407a26ce6a124d4' => 'cshc-dss-xhtml-0.1_es.zip',
    '6f8206ad4b98c9d7999139ed5dc5fe60' => 'cshc-dss-xml-0.1_es.zip'
  );

  foreach ($array as $key => $value)
  {
    echo "<tr>\n";
    echo '<td><code>' . $value . "</code></td>\n";
    echo '<td><code>' . $key . "</code></td>\n";
    echo "</tr>\n";
  }
?>
    </tbody>
  </table>
</article>

<?php
  require_once("./footer.php");
?>
