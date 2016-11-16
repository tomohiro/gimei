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

### Generate a name

```php
<?php
$name= Gimei::name();
$name->kanji;               // 野村 敏彦
$name->hiragana;            // のむら としひこ
$name->katakana;            // ノムラ トシヒコ
$name->firstName->kanji;    // 野村
$name->firstName->hiragana; // のむら
$name->firstName->katakana; // ノムラ
$name->lastName->kanji;     // 敏彦
$name->lastName->hiragana;  // としひこ
$name->lastName->katakana;  // トシヒコ
```


LICENSE
--------------------------------------------------------------------------------

&copy; 2016 Tomohiro Taira.

This project is licensed under the MIT license. See [LICENSE](LICENSE) for details.
