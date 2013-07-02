<?php
/**
 * 获取系统时间
 * */
function getCurrentDate() {
	$date = date ( 'Y-m-d H:i:s' );
	return $date;
}

/**
 * 获取当前登录用户
 */
function getCurrentUser() {
	if (! empty ( $_SESSION ['user'] )) {
		$admin = $_SESSION ['user'];
		return $admin ['id'];
	} else {
		return '0';
	}
}
?>