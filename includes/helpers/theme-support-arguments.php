<?php

/**
 * Wordpress only accepts arguments at 'current_theme_supports' function for
 * it's own built-in functions. This function can be used for filtering custom 
 * theme supported functions
 *
 * Use:
 * add_filter( 'current_theme_supports-feature', 'ejo_theme_support_arguments', 10, 3 );
 *
 * Then use in theme:
 * add_theme_support( 'feature', array( 'item1', 'item2' ) );
 *
 * And check in plugin:
 * - require_if_theme_supports( 'feature', path );
 * - if (current_theme_supports( 'feature', 'item1' ))
 */
function ejo_theme_support_arguments($theme_support = true, $checked_arg = array(), $theme_support_args = true)
{
	//* Return true if no arguments are added to add_theme_support inside theme
	if ( !is_array($theme_support_args) )
		return true;

	//* Check if argument is supported by theme
    return in_array( $checked_arg[0], $theme_support_args[0] );
}
