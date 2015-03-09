<?php


class RefuteAssertTestCase extends \PHPUnit_Framework_TestCase {
	use \NetRivet\RefuteAssert\RefuteAssert;
}


class RefuteAssertTest extends RefuteAssertTestCase {


	/** @dataProvider refuteContainsAnyProvider */
	function testRefuteContainsAny($needles, $haystack) {
		$this->refuteContainsAny($needles, $haystack);
	}


	function refuteContainsAnyProvider() {
		return [
			[
				['a', 'b', 'c'],
				'lmnop'
			],

			[
				['a', 'b', 'c'],
				['l', 'm', 'n', 'o'],
			]
		];
	}


	/** @expectedException PHPUnit_Framework_ExpectationFailedException
	 *  @dataProvider refuteContainsAnyFailProvider */
	function testRefuteContainsAnyFail($needles, $haystack) {
		$this->refuteContainsAny($needles, $haystack);
	}


	function refuteContainsAnyFailProvider() {
		return [
			[
				['a', 'b', 'c'],
				'almnop'
			],

			[
				['a', 'b', 'c'],
				['l', 'm', 'a', 'o'],
			]
		];
	}


	/** @dataProvider containsAllProvider */
	function testContainsAll($needles, $haystack) {
		$this->assertContainsAll($needles, $haystack);
	}


	function containsAllProvider() {
		return [
			[
				['a', 'b', 'c'],
				'abcd'
			],

			[
				['a', 'b', 'c'],
				['a', 'b', 'c', 'd'],
			]
		];
	}


	/** @expectedException PHPUnit_Framework_ExpectationFailedException
	 *  @dataProvider containsAllFailProvider */
	function testContainsAllFail($needles, $haystack) {
		$this->assertContainsAll($needles, $haystack);
	}


	function containsAllFailProvider() {
		return [
			[
				['a', 'b', 'c'],
				'foobar'
			],

			[
				['a', 'b', 'c'],
				['a', 'c', 'd'],
			]
		];
	}


	/** @dataProvider refuteContainsProvider */
	function testRefuteContains($needle, $haystack) {
		$this->refuteContains($needle, $haystack);
	}


	function refuteContainsProvider() {
		return [
			[1, [2, 3]],
			['foo', ['bar', 'baz']],
			['foo', 'not found']
		];
	}

	/** @expectedException PHPUnit_Framework_ExpectationFailedException
	 *  @dataProvider refuteContainsFailProvider */
	function testRefuteContainsFailure($needle, $haystack) {
		$this->refuteContains($needle, $haystack);
	}


	function refuteContainsFailProvider() {
		return [
			[1, [1, 2, 3]],
			['foo', ['foo', 'bar', 'baz']],
			['foo', 'afoobar']
		];
	}
}