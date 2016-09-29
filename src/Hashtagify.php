<?php

namespace Skybluesofa\Hashtagify;

use URLify;

/*
Create a hashtag from a string of characters

1. Transliterate the characters in the string to Roman characters
2. Change the case of the characters depending on the result desired
3. Remove all non-alphanumeric characters
4. Add a hashtag at the beginning

Note the format of the method names are designed to indicate how the results
will be returned.
*/
class Hashtagify
{
  // Returns a hashtag without changing the case of any text; spaces are removed
  public static function asIs ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::asIs($string); }, $text);
    } else {
      $text = URLify::downcode($text, $language);
      return self::hashtagify($text);
    }
  }

  // Returns a hashtag with the first letter of all words being uppercased and
  // all other letters being lowercased; spaces are removed
  public static function PascalCase ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::PascalCase($string); }, $text);
    } else {
      $text = ucwords(strtolower(URLify::downcode($text, $language)));
      return self::hashtagify($text);
    }
  }

  // Returns a hashtag with the first letter of all words except for the first
  // being uppercased; all other letters being lowercased; spaces are removed
  public static function camelCase ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::camelCase($string); }, $text);
    } else {
      $text = lcfirst(ucwords(strtolower(URLify::downcode($text, $language))));
      return self::hashtagify($text);
    }
  }

  // Returns a hashtag with all other letters being lowercased; underscores are
  // used between words
  public static function lowercase_snake ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::lowercase_snake($string); }, $text);
    } else {
      $text = strtolower(URLify::downcode($text, $language));
      return self::hashtagify($text, "_");
    }
  }

  // Returns a hashtag with the first letter of all words except for the first
  // being uppercased; all other letters being lowercased; underscores are used
  // between words
  public static function camelcase_Snake ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::camelcase_Snake($string); }, $text);
    } else {
      $text = lcfirst(ucwords(strtolower(URLify::downcode($text, $language))));
      return self::hashtagify($text, "_");
    }
  }

  // Returns a hashtag with the first letter of all words being uppercased; all
  // other letters being lowercased; underscores are used between words
  public static function Uppercase_Snake ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::Uppercase_Snake($string); }, $text);
    } else {
      $text = ucwords(strtolower(URLify::downcode($text, $language)));
      return self::hashtagify($text, "_");
    }
  }

  // Returns a hashtag with all letters being lowercased and spaces removed
  public static function lowercase ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::lowercase($string); }, $text);
    } else {
      $text = strtolower(URLify::downcode($text, $language));
      return self::hashtagify($text);
    }
  }

  // Returns a hashtag with all letters being uppercased and spaces removed
  public static function UPPERCASE ($text, $language = "") {
    if (is_array($text)) {
      return array_map( function($string) { return Hashtagify::UPPERCASE($string); }, $text);
    } else {
      $text = strtoupper(URLify::downcode($text, $language));
      return self::hashtagify($text);
    }
  }

  // Remove all non-alphanumeric characters and add a octothorpe at the beginning
  private static function hashtagify($text, $spaceReplacement="") {
    $text = preg_replace("/[^A-Za-z0-9 ]/", "", $text);
    $text = str_replace(" ", $spaceReplacement, $text);
    return "#".$text;
  }
}
