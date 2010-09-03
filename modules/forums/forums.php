<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=module
[END_COT_EXT]
==================== */

/**
 * Forums module
 *
 * @package forums
 * @version 0.7.0
 * @author Neocrome, Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2010
 * @license BSD
 */

defined('SED_CODE') or die('Wrong URL');

sed_dieifdisabled($cfg['disable_forums']);

// Environment setup
define('SED_FORUMS', TRUE);
$location = 'Forums';

// Additional requirements
sed_require_api('extrafields');
sed_require('users');

// Mode choice
if (!in_array($m, array('topics', 'posts', 'editpost', 'newtopic')))
{
	$m = 'sections';
}

include sed_incfile($z, $m);
?>