<?php
/**
 * @version     1.0.0
 * @package     mod_dzproduct_categories
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <support@dezign.vn> - dezign.vn
 */
 
// no direct access
defined('_JEXEC') or die;
?>
<ul class="dzproduct_categories-module<?php echo $moduleclass_sfx; ?>">
<?php
require JModuleHelper::getLayoutPath('mod_dzproduct_categories', $params->get('layout', 'default').'_items');
?>
</ul>