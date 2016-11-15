Gimei
================================================================================

PHP port of [Gimei](https://github.com/willnet/gimei).


Description
--------------------------------------------------------------------------------

Random Japanese name generator.


Requirements
--------------------------------------------------------------------------------

- PHP 5.6 or 7.0 or higher


Usage
--------------------------------------------------------------------------------

```php
<?php
$person = Gimei::person();
$person->kanji;    // 野村 敏彦
$person->hiragana; // のむら としひこ
$person->katakana; // ノムラ トシヒコ

$person->firstName->kanji;    // 野村
$person->firstName->hiragana; // のむら
$person->firstName->katakana; // ノムラ

$person->lastName->kanji;    // 敏彦
$person->lastName->hiragana; // としひこ
$person->lastName->katakana; // トシヒコ
```


LICENSE
--------------------------------------------------------------------------------

&copy; 2016 Tomohiro Taira.

This project is licensed under the MIT license. See [LICENSE](LICENSE) for details.
