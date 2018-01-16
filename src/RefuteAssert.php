<?php


namespace DownShift\RefuteAssert;


trait RefuteAssert {


	public function refuteContains() {
		call_user_func_array([$this, 'assertNotContains'], func_get_args());
	}


	public function refuteArrayHasKey() {
		call_user_func_array([$this, 'assertArrayNotHasKey'], func_get_args());
	}


	public function refuteClassHasAttribute() {
		call_user_func_array([$this, 'assertClassNotHasAttribute'], func_get_args());
	}


	public function refuteClassHasStaticAttribute() {
		call_user_func_array([$this, 'assertClassNotHasStaticAttribute'], func_get_args());
	}


	public function refuteContainsOnly() {
		call_user_func_array([$this, 'assertNotContainsOnly'], func_get_args());
	}


	public function refuteCount() {
		call_user_func_array([$this, 'assertNotCount'], func_get_args());
	}


	public function refuteEmpty() {
		call_user_func_array([$this, 'assertNotEmpty'], func_get_args());
	}


	public function refuteEquals() {
		call_user_func_array([$this, 'assertNotEquals'], func_get_args());
	}


	public function refuteFalse() {
		call_user_func_array([$this, 'assertNotFalse'], func_get_args());
	}


	public function refuteFileEquals() {
		call_user_func_array([$this, 'assertFileNotEquals'], func_get_args());
	}


	public function refuteFileExists() {
		call_user_func_array([$this, 'assertFileNotExists'], func_get_args());
	}


	public function refuteInstanceOf() {
		call_user_func_array([$this, 'assertNotInstanceOf'], func_get_args());
	}


	public function refuteInternalType() {
		call_user_func_array([$this, 'assertNotInternalType'], func_get_args());
	}


	public function refuteNull() {
		call_user_func_array([$this, 'assertNotNull'], func_get_args());
	}


	public function refuteObjectHasAttribute() {
		call_user_func_array([$this, 'assertObjectNotHasAttribute'], func_get_args());
	}


	public function refuteRegExp() {
		call_user_func_array([$this, 'assertNotRegExp'], func_get_args());
	}


	public function refuteStringMatchesFormat() {
		call_user_func_array([$this, 'assertStringNotMatchesFormat'], func_get_args());
	}


	public function refuteStringMatchesFormatFile() {
		call_user_func_array([$this, 'assertStringNotMatchesFormatFile'], func_get_args());
	}


	public function refuteSame() {
		call_user_func_array([$this, 'assertNotSame'], func_get_args());
	}


	public function refuteStringEndsWith() {
		call_user_func_array([$this, 'assertStringEndsNotWith'], func_get_args());
	}


	public function refuteStringEqualsFile() {
		call_user_func_array([$this, 'assertStringNotEqualsFile'], func_get_args());
	}


	public function refuteStringStartsWith() {
		call_user_func_array([$this, 'assertStringStartsNotWith'], func_get_args());
	}


	public function refuteTrue() {
		call_user_func_array([$this, 'assertNotTrue'], func_get_args());
	}


	public function refuteXmlFileEqualsXmlFile() {
		call_user_func_array([$this, 'assertXmlFileNotEqualsXmlFile'], func_get_args());
	}


	public function refuteXmlStringEqualsXmlFile() {
		call_user_func_array([$this, 'assertXmlStringNotEqualsXmlFile'], func_get_args());
	}


	public function refuteXmlStringEqualsXmlString() {
		call_user_func_array([$this, 'assertXmlStringNotEqualsXmlString'], func_get_args());
	}


	public function assertContainsAll(array $needles, $haystack, $msg = '') {
		foreach ($needles as $needle) {
			$this->assertContains($needle, $haystack, $msg);
		}
	}


	public function refuteContainsAny(array $needles, $haystack, $msg = '') {
		foreach ($needles as $needle) {
			$this->assertNotContains($needle, $haystack, $msg);
		}
	}


	public function assertArray($mixed, $msg = '') {
		return $this->assertInternalType('array', $mixed, $msg);
	}


	public function refuteArray($mixed, $msg = '') {
		return $this->assertNotInternalType('array', $mixed, $msg);
	}


	public function assertString($mixed, $msg = '') {
		return $this->assertInternalType('string', $mixed, $msg);
	}


	public function refuteString($mixed, $msg = '') {
		return $this->assertNotInternalType('string', $mixed, $msg);
	}
}
