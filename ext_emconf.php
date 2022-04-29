<?php /** @noinspection PhpUndefinedVariableInspection */

/* * *************************************************************
 * Extension Manager/Repository config file for ext "rte_ckeditor_codesnippet".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 * ************************************************************* */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Codesnippet plugin for CKEditor',
    'description' => 'Integrates the CKEditor codesnippet plugin',
    'category' => 'backend',
    'version' => '1.0.0',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '9.5.0-11.5.99',
                'rte_ckeditor' => '9.5.0-11.5.99',
                'fs_code_snippet' => '3.1.0-3.99.99',
            ],
            'conflicts' => [],
            'suggests' => [],
        ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => false,
    'clearCacheOnLoad' => false,
    'author' => 'Ephraim Härer',
    'author_email' => 'mail@ephra.im',
    'author_company' => 'private',
];

