# TYPO3 Extension `rte_ckeditor_codesnippet`

[![Latest Stable Version](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/v)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![Total Downloads](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/downloads)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![Latest Unstable Version](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/v/unstable)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![License](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/license)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![PHP Version Require](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/require/php)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)

Current main branch only supports TYPO3 v12 with CKEditor 5.

[Older branches](https://github.com/Kephson/rte_ckeditor_codesnippet/tree/TYPO3_11) and [releases](https://github.com/Kephson/rte_ckeditor_codesnippet/releases/tag/1.0.1) support also TYPO3 v11 and before. 

This extension ships a simple plugin for the CkEditor to allow editors to insert coding tags inside text elements.
The plugin itself has been taken from the [CKEditor Inserting Code Snippet documentation](https://ckeditor.com/docs/ckeditor5/latest/features/code-blocks.html#demo) without any changes.

At the moment it integrates the [codeblocks for CKEditor 5](https://ckeditor.com/docs/ckeditor5/latest/features/code-blocks.html#demo).

It suggests the extension [fs_code_snippet](https://extensions.typo3.org/extension/fs_code_snippet) to render the codesnippets in the frontend of your website.

Short overview:

![First impression - what does it do?](/Documentation/Images/Introduction/introduction.gif)


## Installation

Use `composer require ehaerer/rte-ckeditor-codesnippet` or download the extension from TER.

The extension suggests the extension [fs_code_snippet](https://extensions.typo3.org/extension/fs_code_snippet) from TER or via Composer it will be required and installed automatically. fs_code_snippet is used to render the output in the frontend.

## Usage

All it needs is to install the extension.
