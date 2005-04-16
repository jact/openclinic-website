<?php
/**
 * This file is part of OpenClinic Web Site
 *
 * Copyright (c) 2002-2005 jact
 * Licensed under the Creative Commons License.
 * For full terms see the URL http://creativecommons.org/licenses/by/2.0/.
 *
 * $Id: ocw_rss2.php,v 1.1 2005/04/16 18:35:43 jact Exp $
 */

/**
 * ocw_rss2.php
 ********************************************************************
 * Really Simple Syndication of OpenClinic Web Site (News and FAQ)
 * PHP 4 (uses domxml extension)
 * Does not work in PHP 5 (todo)
 ********************************************************************
 * Author: jact <openclinic@gmail.com>
 */

/**
 * Functions:
 *  void appendNotices(DOMDocument &$element, array &$notices, string $category)
 */

  $author = utf8_encode('Jose Antonio Chavarría');
  $email = 'openclinic@gmail.com';
  $format = 'D, j M Y H:i:s O';
  $host = 'http://openclinic.sourceforge.net';

  $dom = domxml_new_doc('1.0');

  $rss = $dom->append_child($dom->create_element('rss'));
  $rss->set_attribute('version', '2.0');

  $channel = $rss->append_child($dom->create_element('channel'));

  $e = $channel->append_child($dom->create_element('title'));
  $e->append_child($dom->create_text_node('OpenClinic Project'));

  $e = $channel->append_child($dom->create_element('link'));
  $e->append_child($dom->create_text_node('http://openclinic.sourceforge.net'));

  $e = $channel->append_child($dom->create_element('description'));
  $e->append_child($dom->create_text_node('OpenClinic is an easy to use, open source, medical records system written in PHP. It has been mainly thougth for private clinics, surgeries and private doctors. It is platform independent and it has multilanguage architecture.'));

  $e = $channel->append_child($dom->create_element('pubDate'));
  $e->append_child($dom->create_text_node(date($format, mktime(20, 21, 3, 4, 11, 2005)))); // h, i, s, m, d, y

  $e = $channel->append_child($dom->create_element('generator'));
  $e->append_child($dom->create_text_node('OpenClinic Web Site'));

  $e = $channel->append_child($dom->create_element('language'));
  $e->append_child($dom->create_text_node('en'));

  $e = $channel->append_child($dom->create_element('webMaster'));
  $e->append_child($dom->create_text_node($email . ' (' . $author . ')'));

  $e = $channel->append_child($dom->create_element('managingEditor'));
  $e->append_child($dom->create_text_node($email . ' (' . $author . ')'));

  $e = $channel->append_child($dom->create_element('copyright'));
  $e->append_child($dom->create_text_node('Copyright 2002-2005, ' . $author));

  $e = $channel->append_child($dom->create_element('docs'));
  $e->append_child($dom->create_text_node('http://blogs.law.harvard.edu/tech/rss'));

  $e = $channel->append_child($dom->create_element('ttl'));
  $e->append_child($dom->create_text_node('60'));

  $news = array( // guid_fragment => array(title, pubDate)
    'email_change' => array('New mail address project', date($format, mktime(20, 1, 3, 4, 10, 2005))),
    'new_language_packs' => array('New language packs released', date($format, mktime(21, 1, 3, 4, 10, 2005))),
    'released_0_7' => array('OpenClinic 0.7 released!', date($format, mktime(23, 31, 32, 12, 7, 2004))),
    'upgrade_0_6' => array('Upgrade from 0.6 version', date($format, mktime(23, 11, 45, 12, 7, 2004)))
  );

  $channel->append_child($dom->create_comment('News category'));
  appendNotices($channel, $news, 'News');

  $faq = array( // guid_fragment => array(title, pubDate)
    'medical_tests_problem' => array('Problem to see medical tests', date($format, mktime(20, 1, 3, 4, 10, 2005))),
    'translate_date_entries' => array('How to translate the date-relative entries', date($format, mktime(20, 15, 52, 4, 6, 2005))),
    'staff_member_header' => array('How to fix the Staff Member bug in 0.7 version', date($format, mktime(19, 57, 25, 4, 6, 2005))),
    'second_surname_not_compulsory' => array('How to achieve that the second surname family name was not compulsory', date($format, mktime(21, 3, 14, 4, 4, 2005))),
    'install_authentication' => array('Authentication dialogue to get access to install folder', date($format, mktime(19, 22, 56, 4, 4, 2005)))
  );

  $channel->append_child($dom->create_comment('FAQ category'));
  appendNotices($channel, $faq, 'FAQ');

  header("Content-Type: text/xml");
  echo $dom->dump_mem(true, 'ISO-8859-1');

/**
 * void appendNotices(DOMDocument &$element, array &$notices, string $category)
 ********************************************************************
 * Append items with notices to element node
 ********************************************************************
 * @param DOMDocument &$element
 * @param array &$notices
 * @param string $category
 * @return void
 * @access public
 */
function appendNotices(&$element, &$notices, $category)
{
  global $host, $email, $dom;

  foreach ($notices as $key => $value)
  {
    $link = $host . '/news.php#' . $key;
    $item = $element->append_child($dom->create_element('item'));

    $e = $item->append_child($dom->create_element('title'));
    $e->append_child($dom->create_text_node($value[0]));

    $e = $item->append_child($dom->create_element('link'));
    $e->append_child($dom->create_text_node($link));

    $e = $item->append_child($dom->create_element('author'));
    $e->append_child($dom->create_text_node($email));

    $e = $item->append_child($dom->create_element('pubDate'));
    $e->append_child($dom->create_text_node($value[1]));

    $e = $item->append_child($dom->create_element('category'));
    $e->append_child($dom->create_text_node($category));

    $e = $item->append_child($dom->create_element('guid'));
    $e->append_child($dom->create_text_node($link));
  }
}
?>
