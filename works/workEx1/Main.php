<?php

require 'Gun.php';

$mainWeapon = new Gun("AK47", 29);

$mainWeapon->echoStatus();

$mainWeapon->reload();
$mainWeapon->echoStatus();

$mainWeapon->fire();
$mainWeapon->fire();
$mainWeapon->fire();
$mainWeapon->fire();

$mainWeapon->setExtendedMagazine(10);
$mainWeapon->reload();
$mainWeapon->echoStatus();

$mainWeapon->unsetExtendedMagazine();
$mainWeapon->echoStatus();