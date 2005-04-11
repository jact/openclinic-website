<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: faq.php,v 1.2 2005/04/11 18:09:04 jact Exp $
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

<div class="notice">
  <h2>Problema al visualizar medical tests</h2>

  <p>
    Hay un bug en la versión 0.7 que impide ver las medical tests de un medical problem. Hasta que se resuelva en una próxima versión, es posible mitigar sus efectos si se siguen estas 2 recomendaciones:
  </p>

  <ul>
    <li>The filenames of medical tests must be respect the guidelines descritas en el apartado <q>Code Files Format</q> del documento <a href="http://openclinic.sf.net/openclinic/coding_guidelines.html">Coding Guidelines</a></li>

    <li>
      Edit <code>medical/test_list.php</code> and remove the line:
      <pre><code>
#141:    <del title="removed code">$temp = urlencode($temp);</del>
      </code></pre>
    </li>
  </ul>

  <p class="sign">2005-04-10</p>
</div>

<div class="notice">
  <h2>Cómo se traducen las cadenas relativas a las fechas</h2>

  <p>
    Hay 2 cadenas en el fichero <code>.po</code> que pueden causar algún problema en el funcionamiento de OpenClinic. Son las relacionadas con las fechas (<code>'Y-m-d H:i:s'</code> y <code>'Y-m-d'</code>). Por defecto tienen formato ISO pero se pueden cambiar según la localización de cada lenguaje.
  </p>

  <p>
    La sintaxis a seguir es la que entiende la función <a href="http://www.php.net/date">date</a> de <acronym title="PHP: Hypertext Preprocessor">PHP</acronym>.
  </p>

  <p>
    Para completar la traducción de un lenguaje, es posible traducir (no es obligatorio) también el fichero <code>copyright.txt</code>. Este archivo contiene una copia de la licencia <acronym title="GNU General Public License">GPL</acronym> de la aplicación y se muestra en la opción <strong>Home &raquo; License</strong>.
  </p>

  <p class="sign">2005-04-06</p>
</div>

<div class="notice">
  <h2>Cómo arreglar el bug de la página Staff Members en la versión 0.7</h2>

  <p>
    Uno de los cambios en la versión 0.7 fue la eliminación de los perfiles. En la página citada no se eliminaron totalmente todas las referencias a los perfiles y esa es la razón por la hay una pequeña descoordinación entre contenidos y encabezados.
  </p>

  <p>
    Para corregir manualmente el problema es necesario editar el fichero <code>admin/staff_list.php</code> y hacer los siguientes cambios:
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

<div class="notice">
  <h2>Cómo hacer que el segundo apellido no sea obligatorio</h2>

  <p>
    Han sido varias las personas que han pedido una forma para que el <strong>Surname 2</strong> no sea obligatorio. Estamos estudiando para la próxima versión que esta funcionalidad sea configurable.
  </p>

  <p>
    Por el momento enumeramos los cambios mínimos que son necesarios. Hay que comentar las líneas siguientes en los archivos <code>classes/Patient.php</code>, <code>classes/Staff.php</code>, <code>classes/User.php</code> at <code>validateData()</code> method para que queden así:
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

<div class="notice">
  <h2>Diálogo de validación al acceder al directorio install</h2>

  <p>
    El diálogo de validación aparece cuando se intenta acceder al directorio <code>install</code> en versiones anteriores a la 0.7 y se tienen activados los archivos <code>.htaccess</code> en la configuración de Apache.
  </p>

  <p>
    Para solucionar este problema sólo es necesario borrar el archivo <code>install/.htaccess</code>. Este fichero desempeña su función en la <a href="http://localhost/ocw/openclinic/index.php">versión DEMO alojada en SourceForge</a> pero en las versiones normales no tiene razón de ser. Por eso, a partir de la versión 0.7 ya no está disponible.
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
