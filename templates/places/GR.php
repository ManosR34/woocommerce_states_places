<?php

/**
 * $country places/cities/municipalities/districts
 * - $count places/cities/municipalities/districts
 * 
 * Source: 
 * - [Please add the source(s) link(s) to check the list of places]
 * 
 * @author  Manos Romanos <manosR34@gmail.com>
 * @version 1.0.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */

global $places;

// Replace 'XX' code for your Country Code. E.g. 'NG' for Nigeria, 'CO' for Colombia, 'VE' for Venezuela, etc.
// Please refer to WooCommerce country codes : https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php
$places['GR'] = array(
  // Replace 'AA' code with the code of the State you want to mapping this places  
  'AN' => array(
    // Add all the places of this State, one place per line
    'Location 1',
    'Location 2',
    'Location 3',
  ),
  'BB' => array(
    'Location 1',
    'Location 2',
    'Location 3',
  ),
  'CC' => array(
    'Location 1',
    'Location 2',
    'Location 3',
  ),
);
