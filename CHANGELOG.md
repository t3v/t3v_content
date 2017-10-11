Changelog
=========

Notable changes will be documented in this file. The project adheres to [Semantic Versioning].

Unreleased
----------

* Updated dependencies
* Updated AppVeyor configuration

3.0.0
-----

* Implemented Document Section Grid Element
* Updated Fluid Styled Content layouts, templates and partials (TYPO3 8.7)
* Fixed translations
* Updated icons
* Updated Travis CI and AppVeyor configuration

2.2.4
-----

* Improved partials (Fluid Styled Content)
* Use Icon Identifier for icons
* Updated database fixtures
* Updated dependencies
* Updated AppVeyor configuration

2.2.3
-----

* Fixed `MediaGallery` partial

2.2.2
-----

* Replaced `v:if stack` with `f:if`
* Formatted code and cleanup
* Updated Composer configuration
* Updated AppVeyor configuration

2.2.1
-----

* Reformatted code and cleanup

2.2.0
-----

* Improved Media Gallery
* Added `3 Columns Layout` Grid Element
* Added `75% 25%` spread to `2 Columns Layout` Grid Element
* Added VHS as dependency
* Updated dependencies
* Updated Travis CI and AppVeyor configuration

2.1.0
-----

* Defined namespace in `ext_localconf.php` and `ext_tables.php`
* Added `default` breakpoint (`2 Columns Layout` GridElement)
* Cleaned up `ContentElementController`
* Improved partials, use `t3v:page.visible`
* Updated extension icon
* Updated scripts

2.0.1
-----

* Updated Composer configuration

2.0.0
-----

* Compatibility for TYPO3 8.7
* Added configuration for AppVeyor
* Use `nimut/testing-framework` as testing framework

1.9.3
-----

* Set `Top` as default table header position instead of `No header` (Table Content Element)
* Updated Composer dependencies
* Updated scripts
* Cleaned up

1.9.2
-----

* Cleaned up

1.9.1
-----

* Fixed Spacer Content Element

1.9.0
-----

* Implemented Viewport Grid Element
* Implemented Spacer Content Element
* Cleaned up

1.8.0
-----

* Fixed `HeadlineLinkViewHelper` and `HeadlineViewHelper`
* Improved Fluid Styled Content Menus
* Added T3v DataMapper as dependency
* Added `HeaderIfViewHelper`
* Improved View Helper
* Use `call_user_func` in `ext_localconf.php` and `ext_tables.php`
* Updated FlexForms
* Configured Travis CI
* Added unit and functional tests
* Updated Composer configuration / dependencies
* New icon
* Updated claim
* Updated comments

1.7.2
-----

* Improved FlexForms
* Use `lib.parseFunc` as `parseFuncTSPath` (Fluid Styled Content Headers)
* Updated Composer dependencies

1.7.1
-----

* Wrap TCA overrides in user function
* Updated Composer configuration
* Updated `ext_emconf.php`

1.7.0
-----

* Allow HTML tags like `<b>` in Fluid Styled Content Headers
* Updated translations
* Bugfixing
* Cleaned up

1.6.0
-----

* Updated icons
* Released under the MIT License
* Switched to GitHub

1.5.0
-----

* New naming schema

1.4.0
-----

* Don't wrap `Shortcut` content elements

1.3.0
-----

* Added `T3vContentAccordion` and `T3vContentAccord`
* Added `HeadlineLinkViewHelper`
* Improved `HeadlineViewHelper`
* Added `FileSizeViewHelper`
* Updated View Helper to extend from `\T3v\T3vCore\ViewHelpers\AbstractViewHelper`
* Added `ContentElementController`
* Updated `Table` template (`ce__caption`)
* Updated CSS classes
* Namespaced layouts, partials, etc.
* Cleaned up

1.2.0
-----

* Added `HeadlineViewHelper`
* Added `ViewColumnViewHelper`
* Minor changes

1.1.0
-----

* Implemented `T3vContentColumnLayout2Columns`
* Cleaned up structure

1.0.0
-----

* Imported private resources from Fluid Styled Content (`fluid_styled_content`)
* First implementation
* Added common files

[Semantic Versioning]: http://semver.org "Semantic Versioning"