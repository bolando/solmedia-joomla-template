<?php
defined('_JEXEC') or die;
if ($this->error->getCode() == '404' || $this->error->getCode() == '500') {
	header("HTTP/1.0 404 Not Found");
	echo file_get_contents(JURI::root().'blad-404');
	exit;
}