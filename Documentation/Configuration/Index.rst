.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _configuration:

Configuration Reference
=======================

Here you will find a short overview on how to configure this extension.

Target group: **Administrators**


.. _configuration-rte:

RTE configuration
-----------------

All it takes to enable the plugin are the following changes in your e.g. *RTE.yam* with including the needed TsConfig and optional including the TypoScript configuration of `fs_code_snippet <https://extensions.typo3.org/extension/fs_code_snippet>`_.

1. Import the configuration from the extension in your RTE configuration:

::

      imports:
         - { resource: "EXT:rte_ckeditor_codesnippet/Configuration/RTE/Plugin.yaml" }



2. Enable the plugin in your RTE configuration:

::

      editor:
        config:
          extraPlugins:
            - codesnippet



3. Optional: include TypoScript constants and setup from fs_code_snippet in the configuration of your site package to render the code block in your website (frontend):

::

      # constants
      @import 'EXT:fs_code_snippet/Configuration/TypoScript/constants.txt'

      # setup
      @import 'EXT:fs_code_snippet/Configuration/TypoScript/setup.txt'



4. Check the results in the backend editor and in the frontend of your website.
