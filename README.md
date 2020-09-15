[T3v Content]
=============

[![Travis CI Status][Travis CI Status]][Travis CI]

**The content extension of [TYPO3voilà].**

A set of Grid-/ and Content Elements based on Grid Elements and Fluid template engine for Front-End output.

Installation
------------

1. Add T3v Content as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Content

Grid Elements
-------------

* Accordion Grid Element
* Accord Grid Element
* Card Grid Element
* Carousel Grid Element
* Slider Grid Element
* Timeline Grid Element
* Session Grid Element
* Time Slot Grid Element
* Event Grid Element

Content Elements
----------------

### Typical page content

* Header Only Content Element
* Regular Text Content Element
* Text & Images Content Element
* Images Only Content Element
* Text & Media Content Element
* Bullet List Content Element
* Table Content Element
* File Links Content Element

### Menu

* Abstracts Content Element
* Categorized content Content Element
* Categorized pages Content Element
* Pages Content Element
* Subpages Content Element
* Recently updated pages Content Element
* Related pages Content Element
* Section index Content Element
* Section index of subpages from selected pages Content Element
* Sitemap Content Element
* Sitemaps of selected pages Content Element
* Special Menus Content Element

### Special elements

* Plain HTML Content Element
* Divider Content Element
* Insert records Content Element

Dependencies
------------

* TYPO3 CMS 9.5 or greater
* Fluid Styled Content extension
* Grid Elements extension
* SMS Responsive Images extension
* VHS extension
* T3v Core extension

Development
-----------

### Setup

```
$ ./Scripts/Setup.sh
```

### Run Unit Tests

```
$ ./Scripts/Tests/Unit.sh
```

### Run Functional Tests

```
$ ./Scripts/Tests/Functional.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues and submit new
problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs. Specifically, if a minor
or patch version is released that breaks backward compatibility, that version should be immediately yanked and / or a new version should be
immediately released that restores compatibility.

Credits
-------

### Icons

Icons used made by [Alfredo Hernandez], [Freepik], [Smashicons] and [Vectors Market] from [Flaticon].

* [Accordion icon]
* [Archive icon]
* [Calendar event icon]
* [Timeline icon]

Icons made by [Alfredo Hernandez], [Freepik] and [Smashicons] from [Flaticon].

License
-------

T3v Content is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Accordion icon]: https://www.flaticon.com/free-icon/accordion_140208 "Accordion icon"
[Alfredo Hernandez]: https://www.flaticon.com/authors/alfredo-hernandez "Alfredo Hernandez"
[Archive icon]: https://www.flaticon.com/free-icon/archive_149014 "Archive icon"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[Calendar event icon]: https://www.flaticon.com/free-icon/calendar-event_395828 "Calendar event icon"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Flaticon]: https://www.flaticon.com "Flaticon"
[Freepik]: https://www.flaticon.com/authors/freepik "Freepik"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_content/issues "GitHub Issue Tracker"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_content/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[Smashicons]: https://www.flaticon.com/authors/smashicons "Smashicons"
[T3v Content]: https://t3v.github.io/t3v_content/ "The content extension of TYPO3voilà."
[Timeline icon]: https://www.flaticon.com/free-icon/timeline_292332 "Timeline icon"
[Travis CI]: https://travis-ci.org/t3v/t3v_content "T3v Content at Travis CI"
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_content.svg?style=flat "Travis CI Status"
[TYPO3voilà]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
