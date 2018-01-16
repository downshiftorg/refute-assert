RefuteAssert
============

<a href="http://phpunit.de">PHPUnit</a> is awesome. But remembering the **inversions of the assertions** is really difficult. I'm sure there's some sort of method to Sebastian's madness, but I can't figure out what it is. Take these examples:

```php
<?php

$this->assertNotContainsOnly();
$this->assertClassNotHasStaticAttribute();
$this->assertStringEndsNotWith();
```

Remembering where to put the `Not` is tough.

##Solution: Refute

<a href="https://github.com/downshift/refute-assert">RefuteAssert</a> aliases all of the `assert*Not*` assertion inversions to `refuteX`.  So, now we can type:


```php
<?php

$this->refuteContainsOnly();
$this->refuteClassHasStaticAttribute();
$this->refuteStringEndsWith();
```

This keeps the API perfectly consistent, reads very fluently, is much easier to remember, and has the added bonus that `assert` and `refute` have the same number of characters, so it makes your test methods look cleaner.  Props to <a href="https://github.com/busterjs">Buster.js</a> for the idea.

##Installation

Pull the package in through Composer.

```js
{
    "require": {
        "downshiftorg/refute-assert": "0.1.*"
    }
}
```

Then, just use the RefuteAssert trait in a TestCase class that extends `PHPUnit_Framework_TestCase`. If you don't already have such a class, create one, otherwise just add the trait to your existing child class. Here's an example:

```php
<?php

namespace Acme\Foo;

class MyTestCase extends \PHPUnit_Framework_Testcase {

	use \DownShift\RefuteAssert\RefuteAssert;

}
```
