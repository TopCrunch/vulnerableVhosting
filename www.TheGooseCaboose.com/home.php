<?php
session_start();
if($_SESSION['logged_in'] != '1') {
	echo "Unauthorized";
	exit;
} else {
	echo "<h1>Security vault PIN code: 15725925</h1>";
}
