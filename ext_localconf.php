<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Example for adding Additional Functions to Searchbar
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['searchbar']['additionalFunctions']['tx_searchbarcolorpicker'] = array(
    'title' => 'Color Picker',
    'filePath' => t3lib_extMgm::extPath($_EXTKEY) . 'Classes/class.tx_searchbarcolorpicker.php'
);

?>