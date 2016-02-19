<?php
/**
 * Created by PhpStorm.
 * User: DSD
 * Date: 19/02/2016
 * Time: 20:16
 */
	session_start ();

	session_unset ();

	session_destroy ();

	header ('location: index.php');