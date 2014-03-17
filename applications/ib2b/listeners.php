<?php
Event::listen('testEvent', function($name)
{
	echo $name;
	return false;
});