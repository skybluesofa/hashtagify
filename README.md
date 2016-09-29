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
