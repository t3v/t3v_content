[T3v Content]
=============

[![Travis CI Status][Travis CI Status]][Travis CI]

**The [TYPO3voila] Content extension.**

Dependencies
------------

* TYPO3 CMS 7.6 or greater
* Grid Elements extension
* T3v Core extension

Installation
------------

1. Add T3v Content (`t3v_content`) as dependency to the [Composer] configuration (`composer.json`)
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Content

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

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

Sponsors
--------

The following people / organizations have provided sponsorship to this project by way of direct donations or for paid
development as part of a development project:

* [Hilger u. Kern GmbH]

Credits
-------

### Icons

* [Accordion free icon]
* [Archive free icon]
* [Browser free icon]

Icons made by [Madebyoliver] from [Flaticon] is licensed by [CC 3.0 BY].

License
-------

T3v Content is released under the [MIT License (MIT)], see [LICENSE].

[Accordion free icon]: http://www.flaticon.com/free-icon/accordion_140208 "Accordion free icon"
[Archive free icon]: http://www.flaticon.com/free-icon/archive_149014 "Archive free icon"
[Browser free icon]: http://www.flaticon.com/free-icon/browser_140796 "Browser free icon"
[CC 3.0 BY]: http://creativecommons.org/licenses/by/3.0/ "Creative Commons BY 3.0"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Flaticon]: http://www.flaticon.com "Flaticon"
[here]: https://github.com/t3v/t3v_content/issues "GitHub Issue Tracker"
[Hilger u. Kern GmbH]: http://www.hilger-kern.de "Hilger u. Kern GmbH"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_content/master/LICENSE "License"
[Madebyoliver]: http://www.flaticon.com/authors/madebyoliver "Madebyoliver"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[T3v Content]: https://t3v.github.io/t3v_content/ "The content extension of TYPO3Voila."
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_content.svg?style=flat "Travis CI Status"
[Travis CI]: https://travis-ci.org/t3v/t3v_content "T3v Content at Travis CI"
[TYPO3voila]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"