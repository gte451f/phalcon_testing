<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

//test that a page loads
$I->amOnPage('/');
$I->canSee('Congratulations!');