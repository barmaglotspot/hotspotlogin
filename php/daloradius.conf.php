<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 * Description:
 *              daloRADIUS Paypal registration codebase
 *
 * Modification Date:
 *              Sat Sep 13 03:14:23 EDT 2008
 *********************************************************************************************************
 */

$configValues['CONFIG_DB_ENGINE'] = 'mysql';
$configValues['CONFIG_DB_HOST'] = '127.0.0.1';
$configValues['CONFIG_DB_USER'] = 'ваш логин к базе mysql ';
$configValues['CONFIG_DB_PASS'] = 'ваш пароль к базе mysql';
$configValues['CONFIG_DB_NAME'] = 'radius';
$configValues['CONFIG_DB_TBL_RADCHECK'] = 'radcheck';
$configValues['CONFIG_DB_TBL_RADREPLY'] = 'radreply';
$configValues['CONFIG_DB_TBL_RADGROUPREPLY'] = 'radgroupreply';
$configValues['CONFIG_DB_TBL_RADGROUPCHECK'] = 'radgroupcheck';
$configValues['CONFIG_DB_TBL_RADUSERGROUP'] = 'usergroup';
$configValues['CONFIG_DB_TBL_RADNAS'] = 'nas';
$configValues['CONFIG_DB_TBL_RADPOSTAUTH'] = 'radpostauth';
$configValues['CONFIG_DB_TBL_RADACCT'] = 'radacct';
$configValues['CONFIG_DB_TBL_RADIPPOOL'] = 'radippool';
$configValues['CONFIG_DB_TBL_DALOOPERATOR'] = 'operators';
$configValues['CONFIG_DB_TBL_DALOBILLINGRATES'] = 'rates';
$configValues['CONFIG_DB_TBL_DALOHOTSPOTS'] = 'hotspots';
$configValues['CONFIG_DB_TBL_DALOUSERINFO'] = 'userinfo';
$configValues['CONFIG_DB_TBL_DALODICTIONARY'] = 'dictionary';
$configValues['CONFIG_DB_TBL_DALOREALMS'] = 'realms';
$configValues['CONFIG_DB_TBL_DALOPROXYS'] = 'proxys';
$configValues['CONFIG_DB_TBL_DALOBILLINGPAYPAL'] = 'billing_paypal';
$configValues['CONFIG_DB_TBL_DALOBILLINGPLANS'] = 'billing_plans';
$configValues['CONFIG_LANG'] = 'ru';
$configValues['CONFIG_LOG_FREE_SIGNUP_FILENAME'] = '/tmp/free-signup.log';
$configValues['CONFIG_SIGNUP_MSG_TITLE'] = "Мы предоставляем бесплатный сервис регистрации в Barmaglot HotSpot. <br/>".
					"Заполните форму и нажмите кнопку Зарегистрироваться или введите Логин и Пароль.";
$configValues['CONFIG_SIGNUP_SUCCESS_MSG_HEADER'] = "Добро пожаловать в Barmagot HotSpot.";
$configValues['CONFIG_SIGNUP_SUCCESS_MSG_BODY'] = "создано имя пользователя и пароль для вашего использования. <br/>".
					" to login to our system, and they are as follows:<br/><br/>";
$configValues['CONFIG_SIGNUP_SUCCESS_MSG_LOGIN_LINK'] = "<br/>Нажмите <b><a href='https://regtest.movieworx.co.uk/hotspotlogin/hotspotlogin.php'>here</a></b>".
					" вернуться к странице входа и начать заново.<br/><br/>";
$configValues['CONFIG_SIGNUP_FAILURE_MSG_FIELDS'] = "Вы не заполнили все поля, пожалуйста, заполните в форму снова.";
$configValues['CONFIG_SIGNUP_FAILURE_MSG_CAPTCHA'] = "Код проверки введен не правильно, попробуйте еще раз.";

