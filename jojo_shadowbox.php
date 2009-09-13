<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */

class JOJO_Plugin_jojo_shadowbox extends JOJO_Plugin
{
    function shadowbox($content)
    {
        if (strpos($content, '[[shadowbox]]') === false) {
            return $content;
        }
        global $smarty;
        return str_replace('[[shadowbox]]', $smarty->fetch('jojo_shadowbox.tpl'), $content);
    }

    function _getContent()
    {
        global $smarty;

        $content = array();
        $content['content'] = $smarty->fetch('jojo_shadowbox.tpl');
        return $content;
    }
}
