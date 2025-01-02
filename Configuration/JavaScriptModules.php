<?php

return [
    'dependencies' => ['backend'],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        /* Plugin from https://ckeditor.com/docs/ckeditor5/latest/features/code-blocks.html#installation */
        '@ehaerer/rte-ckeditor-codesnippet' => 'EXT:rte_ckeditor_codesnippet/Resources/Public/JavaScript/Plugin/codesnippet.js',
    ],
];