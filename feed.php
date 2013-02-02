<?php
/**
 * feed.php
 *
 * Really Simple Syndication of OpenClinic Web Site (News and FAQ)
 *
 * Licensed under the Creative Commons License
 *
 * @package   OpenClinic Web Site
 * @copyright 2002-2013 jact
 * @license   http://creativecommons.org/licenses/by/2.0/
 * @version   CVS: $Id: feed.php,v 1.2 2013/02/02 20:02:00 David Bowman Exp $
 * @author    jact <openclinic@gmail.com>
 */

/**
 * Functions:
 * string appendNotices(array &$notices, string $category, string $page)
 */

  if (version_compare(phpversion(), '5.0.0') > 0)
  {
    date_default_timezone_set('Europe/Madrid');
  }

  $author = /*utf8_encode*/('Jose Antonio Chavarría');
  $email = 'openclinic@gmail.com';
  $format = 'D, j M Y H:i:s O';
  $host = 'http://openclinic.sourceforge.net';

  $feed = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
  $feed .= '<rss version="2.0">';
  $feed .= '<channel>';

  $feed .= '<title>' . 'OpenClinic Project' . '</title>';
  $feed .= '<link>' . 'http://openclinic.sourceforge.net' . '</link>';

  $feed .= '<description>';
  $feed .= 'OpenClinic is an easy to use, open source, medical records system written in PHP. It has been mainly thougth for private clinics, surgeries and private doctors. It is platform independent and it has multilanguage architecture.';
  $feed .= '</description>';

  $feed .= '<pubDate>' . date($format, mktime(20, 46, 10, 2, 2, 2013)) . '</pubDate>'; // h, i, s, m, d, y
  $feed .= '<generator>' . 'OpenClinic Web Site' . '</generator>';
  $feed .= '<language>' . 'en' . '</language>';
  $feed .= '<webMaster>' . $email . ' (' . $author . ')' . '</webMaster>';
  $feed .= '<managingEditor>' . $email . ' (' . $author . ')' . '</managingEditor>';
  $feed .= '<copyright>' . 'Copyright 2002-' . date('Y') . ', ' . $author . '</copyright>';
  $feed .= '<docs>' . 'http://blogs.law.harvard.edu/tech/rss' . '</docs>';
  $feed .= '<ttl>' . '60' . '</ttl>';

  $news = array( // guid_fragment => array(title, pubDate)
    'released_0_8' => array(
      'OpenClinic 0.8 released after 8 years!',
      date($format, mktime(20, 46, 10, 2, 2, 2013))
    ),
    'email_change' => array(
      'New mail address project',
      date($format, mktime(20, 1, 3, 4, 10, 2005))
    ),
    'new_language_packs' => array(
      'New language packs released',
      date($format, mktime(21, 1, 3, 4, 10, 2005))
    ),
    'released_0_7' => array(
      'OpenClinic 0.7 released!',
      date($format, mktime(23, 31, 32, 12, 7, 2004))
    ),
    'upgrade_0_6' => array(
      'Upgrade from 0.6 version',
      date($format, mktime(23, 11, 45, 12, 7, 2004))
    ),
  );

  $feed .= '<!-- News category -->';
  $feed .= appendNotices($news, 'News', 'news.php');

  $faq = array( // guid_fragment => array(title, pubDate)
    'deleting_patient_problem' => array(
      'Deleting a medical problem or patient bug',
      date($format, mktime(21, 19, 10, 1, 16, 2006))
    ),
    'medical_tests_problem' => array(
      'Problem to see medical tests',
      date($format, mktime(20, 1, 3, 4, 10, 2005))
    ),
    'translate_date_entries' => array(
      'How to translate the date-relative entries',
      date($format, mktime(20, 15, 52, 4, 6, 2005))
    ),
    'staff_member_header' => array(
      'How to fix the Staff Member bug in 0.7 version',
      date($format, mktime(19, 57, 25, 4, 6, 2005))
    ),
    'second_surname_not_compulsory' => array(
      'How to achieve that the second surname family name was not compulsory',
      date($format, mktime(21, 3, 14, 4, 4, 2005))
    ),
    'install_authentication' => array(
      'Authentication dialogue to get access to install folder',
      date($format, mktime(19, 22, 56, 4, 4, 2005))
    ),
  );

  $feed .= '<!-- FAQ category -->';
  $feed .= appendNotices($faq, 'FAQ', 'faq.php');

  $feed .= '</channel>';
  $feed .= '</rss>';

  header("Content-Type: application/rss+xml");
  //echo $dom->dump_mem(true, 'UTF-8');
  echo $feed;

/**
 * string appendNotices(array &$notices, string $category, string $page)
 *
 * Append items with notices to element node
 *
 * @param array &$notices
 * @param string $category
 * @param string $page
 * @return string
 * @access public
 */
function appendNotices(&$notices, $category, $page)
{
  global $host, $email, $dom;

  $text = '';
  foreach ($notices as $key => $value)
  {
    $link = $host . '/' . $page . '#' . $key;
    $text .= '<item>';
    $text .= '<title>' . '[' . $category . '] ' . $value[0] . '</title>';
    $text .= '<link>' . $link . '</link>';
    $text .= '<author>' . $email . '</author>';
    $text .= '<pubDate>' . $value[1] . '</pubDate>';
    $text .= '<category>' . $category . '</category>';
    $text .= '<guid>' . $link . '</guid>';
    $text .= '</item>';
  }

  return $text;
}
?>
