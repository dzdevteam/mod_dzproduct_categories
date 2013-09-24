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

require_once JPATH_SITE.'/components/com_dzproduct/helpers/route.php';

abstract class modDZProductCategoriesHelper
{
    public static function getList(&$params)
    {
        $categories = JCategories::getInstance('dzproduct.items');
        $category = $categories->get($params->get('parent', 'root'));

        if ($category != null)
        {
            $items = $category->getChildren();
            if ($params->get('count', 0) > 0 && count($items) > $params->get('count', 0))
            {
                $items = array_slice($items, 0, $params->get('count', 0));
            }
            return $items;
        }
    }
}
