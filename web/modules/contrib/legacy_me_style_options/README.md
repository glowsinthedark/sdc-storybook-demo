# Legacy Mercury Editor Style Options

In Mercury Editor 2.2.x releases, layout and style option plugins have been
removed as part of an effort to make it possible to uninstall ME without
consequences (other than loosing the authoring enhancements directly provided
by the module).

The legacy_me_style_options module provides support for the legacy style options
removed from Mercury Editor.

## To use this module:

* Add the repo to composer: `composer config repositories.legacy_me_style_options vcs https://github.com/AtenDesignGroup/legacy_me_style_options.git`
* Install the module with composer: `composer require atendesigngroup/legacy_me_style_options`
* Enable the module: `drush en legacy_me_style_options`
* Upgrade Mercury Editor with composer: `composer require drupal/mercury_editor:^2.2`
* Clear the cache: `drush cr`
* Replace any references in your themes/modules from `mercury_editor/style_options` to `legacy_me_style_options/style_option`.
* Test and verify all layouts and paragraphs are rendering correctly.

