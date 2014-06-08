<?php
/**
 * Smarty plugin
 *
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty limitlen modifier plugin
 *
 * Type:     modifier<br>
 * Name:     limitlen<br>
 * Purpose:  limitlen string for output
 *
 * @link http://www.smarty.net/manual/en/language.modifier.count.characters.php count_characters (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @param string  $string        input string
 * @param string  $len      limitlen
 * @return string limitlength input string
 */
function smarty_modifier_limitlen($string, $len = 0)
{
    $result_string = '';

    if ($len > 0) {
        $result_string = mb_substr($string, 0, $len - 6, 'utf-8');

        if ($string !== $result_string) {
            $result_string = $result_string.'...';
        }
    }

    return $result_string;
}

?>