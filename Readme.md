# TYPO3 Extension `rte_ckeditor_codesnippet`

This extension ships a simple plugin for the CkEditor to allow editors to insert coding tags inside text elements.
The plugin itself has been taken from the [CKEditor Inserting Code Snippet documentation](https://ckeditor.com/docs/ckeditor4/latest/features/codesnippet.html) without any changes.

At the moment it integrates the [plugin version 4.18.0](https://ckeditor.com/cke4/addon/codesnippet).

## Installation

Use `composer require ehaerer/rte-ckeditor-codesnippet` or download the extension from TER.

The extension requires the [fs_code_snippet](https://extensions.typo3.org/extension/fs_code_snippet) from TER or via Composer it will be required and installed automatically. fs_code_snippet is used to render the output in the frontend.

## Usage

All it takes to enable the plugin are the following changes in your `RTE.yaml`:

1. Import the configuration from the extension:

```yaml
imports:
    - { resource: "EXT:rte_ckeditor_codesnippet/Configuration/RTE/Plugin.yaml" }
```

2. Enable the plugin:

```yaml
editor:
  config:
    extraPlugins:
      - codesnippet
```

