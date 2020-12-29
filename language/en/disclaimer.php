<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DISCLAIMER'				=> 'Disclaimer',
	'DISCLAIMER_TEXT'			=> '<h3>Board Disclaimer</h3>
	<p>The views and comments posted in these fora are personal and do not necessarily represent those of the Management of %1$s.<br><br>The Management of the %1$s does not, under any circumstances whatsoever, accept any responsibility for any advice, or recommendations, made by, or implied by, any member or guest visitor of %1$s that results in any loss whatsoever in any manner to a member of %1$s, or to any other person.<br><br>Furthermore, the Management of %1$s is not, and cannot be, responsible for the content of any other Internet site(s) that have been linked to from %1$s.</p>',
));
