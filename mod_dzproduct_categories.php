<?php
/**
 * @version     1.0.0
 * @package     mod_dzproduct_categories
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <support@dezign.vn> - dezign.vn
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list = ModDZProductCategoriesHelper::getList($params);
if (!empty($list))
{
    $moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
    $startLevel = reset($list)->getParent()->level;
    // Display template
    require JModuleHelper::getLayoutPath('mod_dzproduct_categories', $params->get('layout', 'default'));
}

