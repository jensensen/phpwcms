<?php
/**
 * phpwcms content management system
 *
 * @author Oliver Georgi <og@phpwcms.org>
 * @copyright Copyright (c) 2002-2023, Oliver Georgi
 * @license http://opensource.org/licenses/GPL-2.0 GNU GPL-2
 * @link http://www.phpwcms.org
 *
 **/

// ----------------------------------------------------------------
// obligate check for phpwcms constants
if (!defined('PHPWCMS_ROOT')) {
	die("You Cannot Access This Script Directly, Have a Nice Day.");
}
// ----------------------------------------------------------------

// Glossary module content part SQL UPDATE/INSERT
// usage:
// SQL .= "acontent_field = '".aporeplace($value)."', ";

if(isset($content['glossary']) && is_array($content['glossary'])) {

	$SQL .= "acontent_form = '".aporeplace(serialize($content['glossary']))."'";

}
