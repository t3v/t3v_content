[T3v Content]
=============

**The content extension of [TYPO3voilà].**

Installation
------------

1. Add T3v Content as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Content

Dependencies
------------

### Core

* TYPO3 CMS 10.4 or greater
* Fluid Styled Content extension

### TYPO3voilà

* T3v Base extension

Overview
--------

### Grid elements *

* Accordion grid element
* Accord grid element
* Card grid element
* Carousel grid element
* Slider grid element
* Timeline grid element
* Session grid element
* Time slot grid element
* Event grid element

### Content elements

#### Typical page content

* Header only content element
* Regular text content element
* Text & images content element
* Images only content element
* Text & media content element
* Bullet list content element
* Table content element
* File links content element

#### Menu

* Abstracts content element
* Categorized content content element
* Categorized pages content element
* Pages content element
* Subpages content element
* Recently updated pages content element
* Related pages content element
* Section index content element
* Section index of subpages from selected pages content element
* Sitemap content element
* Sitemaps of selected pages content element
* Special menus content element

#### Special elements

* Plain HTML content element
* Divider content element
* Insert records content element

Development
-----------

### Setup

```sh
git clone https://github.com/t3v/t3v_content.git && cd t3v_content

./Scripts/Setup.sh
```

### Testing

```sh
./Scripts/Tests.sh
./Scripts/Tests/Unit.sh
./Scripts/Tests/Functional.sh
./Scripts/Tests/Migrate.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues and submit new
problems [here].

Versioning
----------

This project aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs. Specifically, if a minor
or patch version is being released that breaks backward compatibility, that version should be immediately yanked and / or a new version
should be immediately released that restores compatibility.

Credits
-------

### Icons

* [Accordion icon]
* [Archive icon]
* [Calendar event icon]
* [Timeline icon]

Icons used made by [Alfredo Hernandez], [Freepik] and [Smashicons] from [Flaticon].

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
[TYPO3voilà]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
