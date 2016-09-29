[![Build Status](https://travis-ci.org/skybluesofa/hashtagify.svg?branch=master)](https://travis-ci.org/skybluesofa/hashtagify) [![Code Climate](https://codeclimate.com/github/skybluesofa/hashtagify/badges/gpa.svg)](https://codeclimate.com/github/skybluesofa/hashtagify) [![Test Coverage](https://codeclimate.com/github/skybluesofa/hashtagify/badges/coverage.svg)](https://codeclimate.com/github/skybluesofa/hashtagify/coverage) [![Total Downloads](https://img.shields.io/packagist/dt/skybluesofa/hashtagify.svg?style=flat)](https://packagist.org/packages/skybluesofa/hashtagify) [![Version](https://img.shields.io/packagist/v/skybluesofa/hashtagify.svg?style=flat)](https://packagist.org/packages/skybluesofa/hashtagify) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

# hashtagify
Um...make hashtags from strings

## Usage:
You'll notice that these method names mirror the results that will be returned. However, there are standard 'camelcased' methods as well.

To generate lowercase hashtag:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::lowercase('The time is now!');
// "#thetimeisnow"
?>
```

To generate uppercase hashtag:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::UPPERCASE('The time is now!');
// "#THETIMEISNOW"
?>
```

To generate camelcase hashtag:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::camelCase('The time is now!');
// "#theTimeIsNow"
?>
```

To generate Pascal case hashtag:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::PascalCase('The time is now!');
// "#TheTimeIsNow"
?>
```

To generate hashtag using same case as what was entered:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::asIs('The time is now, Jim!');
// "#ThetimeisnowJim"
?>
```

To generate snake case hashtag with all words uppercased:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::Uppercase_Snake('The time is now!');
// "#The_Time_Is_Now"
?>
```

To generate snake case hashtag with all words lowercased:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::lowercase_snake('The time is now!');
// "#the_time_is_now"
?>
```

To generate snake case hashtag with all words uppercased, except the first, which is lowercased:

```php
<?php
use Skybluesofa\Hashtagify;

echo Hashtagify::camelcase_Snake('The time is now!');
// "#the_Time_Is_Now"
?>
```
