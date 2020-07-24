<?php

function addStyle($style)
{
	foreach($style as $key => $value)
	{
    echo'
		<link rel="stylesheet" href="'.$value.'" type="text/css"></br>
		';
	}
}

function addScript($pscript)
{
	foreach($pscript as $key => $value)
	{
    echo'
		<script src="'.$value.'"></script></br>
		';
	}
}