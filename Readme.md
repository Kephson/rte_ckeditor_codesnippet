# TYPO3 Extension `rte_ckeditor_codesnippet`

[![Latest Stable Version](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/v)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![Total Downloads](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/downloads)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![Latest Unstable Version](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/v/unstable)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![License](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/license)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)
[![PHP Version Require](http://poser.pugx.org/ehaerer/rte-ckeditor-codesnippet/require/php)](https://packagist.org/packages/ehaerer/rte-ckeditor-codesnippet)


This extension ships a simple plugin for the CkEditor to allow editors to insert coding tags inside text elements.
The plugin itself has been taken from the [CKEditor Inserting Code Snippet documentation](https://ckeditor.com/docs/ckeditor4/latest/features/codesnippet.html) without any changes.

At the moment it integrates the [plugin version 4.18.0](https://ckeditor.com/cke4/addon/codesnippet).

It suggests the extension [fs_code_snippet](https://extensions.typo3.org/extension/fs_code_snippet) to render the codesnippets in the frontend of your website.

Short overview:


## Installation

Use `composer require ehaerer/rte-ckeditor-codesnippet` or download the extension from TER.

The extension requires the extension [fs_code_snippet](https://extensions.typo3.org/extension/fs_code_snippet) from TER or via Composer it will be required and installed automatically. fs_code_snippet is used to render the output in the frontend.

## Usage

All it takes to enable the plugin are the following changes in your e.g. `RTE.yaml` with including the needed TsConfig and optional including the TypoScript configuration of [fs_code_snippet](https://extensions.typo3.org/extension/fs_code_snippet):

1. Import the configuration from the extension in your RTE configuration:

```yaml
imports:
    - { resource: "EXT:rte_ckeditor_codesnippet/Configuration/RTE/Plugin.yaml" }
```

2. Enable the plugin in your RTE configuration:

```yaml
editor:
  config:
    extraPlugins:
      - codesnippet
```

3. Optional: include TypoScript constants and setup from fs_code_snippet in the configuration of your site package to render the code block in your website (frontend):

```typoscript
# constants
@import 'EXT:fs_code_snippet/Configuration/TypoScript/constants.txt'

# setup
@import 'EXT:fs_code_snippet/Configuration/TypoScript/setup.txt'
```

4. Check the results in the backend editor and in the frontend of your website.
