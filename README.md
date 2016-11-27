Gimei
================================================================================

[![Build Status](https://img.shields.io/travis/Tomohiro/gimei.svg?style=flat-square)](https://travis-ci.org/Tomohiro/gimei)

PHP port of [Gimei](https://github.com/willnet/gimei).


Description
--------------------------------------------------------------------------------

Random Japanese name generator.


Requirements
--------------------------------------------------------------------------------

- PHP 5.6 or 7.0 or higher


Usage
--------------------------------------------------------------------------------

### Name

```php
<?php
$name= Gimei::name();
$name->kanji;               // 野村 敏彦
$name->hiragana;            // のむら としひこ
$name->katakana;            // ノムラ トシヒコ

$name->firstName->kanji;    // 敏彦
$name->firstName->hiragana; // としひこ
$name->firstName->katakana; // トシヒコ

$name->lastName->kanji;     // 野村
$name->lastName->hiragana;  // のむら
$name->lastName->katakana;  // ノムラ
```


### Male / Female

```php
<?php
$name= Gimei::male();
$name->isMale();        // true
$name->isFemale();      // false
$name->kanji;           // 野村 敏彦

$name= Gimei::female();
$name->isMale();        // false
$name->isFemale();      // true
$name->kanji;           // 野村 杏里
```

### Address

```php
<?php
$address = Gimei::address();
$address->kanji;                // 岐阜県河内長野市西軽部
$address->hiragana;             // ぎふけんかわちながのしにしかるべ
$address->katakana;             // ギフケンカワチナガノシニシカルベ

$address->prefecture->kanji;    // 岐阜県
$address->prefecture->hiragana; // ぎふけん
$address->prefecture->katakana; // ギフケン

$address->city->kanji;          // 河内長野市
$address->city->hiragana;       // かわちながのし
$address->city->katakana;       // カワチナガノシ

$address->town->kanji;          // 西軽部
$address->town->hiragana;       // にしかるべ
$address->town->katakana;       // ニシカルベ
```


LICENSE
--------------------------------------------------------------------------------

&copy; 2016 Tomohiro Taira.

This project is licensed under the MIT license. See [LICENSE](LICENSE) for details.
