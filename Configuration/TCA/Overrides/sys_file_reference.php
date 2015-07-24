<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = array(
    'type' => 'imageManipulation',
    'ratios' => array(
        '1.7777777777777777' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
    ),
);
