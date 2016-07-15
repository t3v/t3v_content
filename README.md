[TYPO3voila Content]
====================

**The [TYPO3voila] Content extension.**

Installation
------------

1. Add `t3v_content` to the [Composer] configuration (`composer.json`):

    ```json
    {
      "repositories": [
        { "type": "git", "url": "git@t3v[at]bitbucket.org:t3v/t3v_content.git" }
      ],

      "require": {
        "t3v/t3v_content": "~1.2.0"
      }
    }
    ```

2. Run `composer update` to install all dependencies with Composer

3. Include the TypoScript for `t3v_content` in the main TypoScript template

Bug Reports
-----------

Bitbucket Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[here]: https://bitbucket.org/t3v/t3v_content/issues "Bitbucket Issue Tracker"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[TYPO3voila Content]: https://bitbucket.org/t3v/t3v_content "The TYPO3voila Content extension."
[TYPO3voila]: # "UH LÁLÁ, TYPO3!"