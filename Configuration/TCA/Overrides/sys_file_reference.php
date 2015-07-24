<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/*
    Defaults

    'ratios' => array(
        '1.7777777777777777' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
        '1.3333333333333333' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.4_3',
        '1' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.1_1',
        'NaN' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.free',
    ),

*/

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = array(
    'type' => 'imageManipulation',
    'ratios' => array(
        '1.7777777777777777' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
    ),
);
