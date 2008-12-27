<?php
class SetupTest extends WebTestCase {
	function testAuth() {
        $this->get(TEST_BASE.'/setup');
		$this->assertResponse(403);
		$this->assertTitle("Permission Denied");

		$this->assertText("Login");
		$this->setField('user', USER_NAME);
		$this->setField('pass', USER_PASS);
		$this->click("Log In");
        $this->get(TEST_BASE.'/setup');
		$this->assertResponse(403);
		$this->assertTitle("Permission Denied");
		$this->click('Log Out');

		$this->assertText("Login");
		$this->setField('user', ADMIN_NAME);
		$this->setField('pass', ADMIN_PASS);
		$this->click("Log In");
        $this->get(TEST_BASE.'/setup');
		$this->assertTitle("Shimmie Setup");
		$this->assertText("General");
		$this->click('Log Out');
	}
}
?>