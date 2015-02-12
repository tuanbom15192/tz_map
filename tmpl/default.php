<?php
/*------------------------------------------------------------------------

# ------------------------------------------------------------------------

# author    TuanNATemplaza

# copyright Copyright (C) 2012-2013 templaza.com. All Rights Reserved.

# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL

# Websites: http://www.templaza.com

# Technical Support:  Forum - http://templaza.com/Forum

-------------------------------------------------------------------------*/

//no direct access
defined('_JEXEC') or die();
$doc = JFactory::getDocument();
$doc->addScript('./modules/mod_tz_map/js/map.js');
$doc->addScript('./modules/mod_tz_map/js/oe-maps.js');
$style = $params->get('map_style');
$id = '';
$s = '';
if ($style == 'gray') {
    $id = 'map-gray';
    $s = 'gray';
} elseif ($style == 'blue') {
    $id = 'map-color-scheme';
    $s = 'blue';
} else {
    $id = 'map-standard';
}
?>
<?php if ($params->get('title')): ?>
    <h4 class="oe-non-space-top">
        <?php echo $params->get('title'); ?>
    </h4>
<?php endif; ?>

<div id="<?php echo $id; ?>" class="oe-maps"
    <?php if ($style != ''): ?>
        data-maps-style="<?php echo $s; ?>"
    <?php endif; ?>
     data-maps-lat="<?php echo $params->get('map_lat'); ?>"
     data-maps-lng="<?php echo $params->get('map_lng'); ?>"
     data-maps-zoom="15"
    <?php if ($params->get('map_marker')): ?>
        data-maps-marker="<?php echo JUri::root() . $params->get('map_marker'); ?>"
    <?php endif; ?>
    >
</div>

