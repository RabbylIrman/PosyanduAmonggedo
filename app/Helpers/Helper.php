<?php

use Illuminate\Http\Request;
/**
 * Return active if current path begins with path.
 *
 * @param string $path
 * @return string
 */
function active($path) {
    // return Request::is($path) ? 'active' :  '';
		return Request()->is($path) ? 'active' :  '';
}

function active_mobile($path) {
	// return Request::is($path) ? 'active' :  '';
	return Request()->is($path) ? 'bg-active' :  'bg-light';
}