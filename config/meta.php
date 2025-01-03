<?php
/*
 * This file contains setup for <meta> tags inside the head element from the env file.
 */

return [
		'title_suffix' => env("DEFAULT_TITLE_SUFFIX", "– Michal Škoula"),
		'description' => env("DEFAULT_DESCRIPTION", "This is a webpage!"),
];