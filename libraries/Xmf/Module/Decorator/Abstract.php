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
 * @author          trabis <lusopoemas@gmail.com>
 * @version         $Id$
 */

defined('XMF_EXEC') or die('Xmf was not detected');

abstract class Xmf_Module_Decorator_Abstract
{
    /**
     * @var XoopsModule
     */
    protected $module;

    /**
     * @param XoopsModule $module
     */
    public function __construct(XoopsModule $module)
    {
        $this->module = $module;
        $this->init();
    }

    abstract public function init();
}