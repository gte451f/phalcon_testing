<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('perform actions and see result');

//test that a page loads
$I->amOnPage('/');
$I->canSee('Congratulations!');

$I->amOnPage('/sample');
$I->canSee('Session: bar');
$I->canSee('Cookies: bar');