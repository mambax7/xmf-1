<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         Xmf
 * @since           0.1
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

defined('XMF_EXEC') or die('Restricted access on ' . __FILE__);

/**
 * Wrapper for Xmf_Language
 *
 * @param string $string
 * @param string $default
 * @return void
 */
function _ee($string, $default = null)
{
    echo Xmf_Locale::translate($string, $default);
}

/**
 * Wrapper for Xmf_Language
 *
 * @param string $string
 * @param string $default
 * @return mixed|string
 */
function _tt($string, $default = null)
{
    return Xmf_Locale::translate($string, $default);
}