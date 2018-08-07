<?php

if (!defined('MICROLIGHT')) die();

class Config {
	/*
	 * **Modify these variables before installing on your website:**
	 * If there are any settings you don't understand or know what to set
	 * to, leave them as the default.
	 */

	// DB File (string):
	// The location of the SQLite database file, relative to root.
	// default: 'microlight.db'
	const DB_FILE = 'microlight.db';

	// Posts Per Page (integer):
	// How many posts should be shown on the homepage or while searching
	// default: 20
	const POSTS_PER_PAGE = 20;

	// Theme (string):
	// The folder name of the theme you would like to use for this blog
	// default: 'uberlight'
	const THEME = 'uberlight';

	// Title Separator (string):
	// What splits up your name and the post name in the title bar
	// eg. "Your Name | Post Title"
	// default: ' | '
	const TITLE_SEPARATOR = ' | ';

	// Root (string):
	// Must start AND end with a slash.
	// Where your site is hosted relative to the absolute root. For example,
	// if your site's address is 'https://example.com/blog', ROOT would be
	// set to '/blog/'.
	// default: '/'
	const ROOT = '/';

	// Date Pretty (string):
	// A PHP date format string used to format the default ISO8601 published
	// date.
	// default: 'l jS F Y, h:i A'
	const DATE_PRETTY = 'l jS F Y, H:i';

	// Open Graph (boolean):
	// Whether you would like to automatically add Open Graph tags (eg. Link
	// previews for Facebook & Twitter) to your page.
	// default: true
	const OPEN_GRAPH = true;

	// IndieAuth Provider (string):
	// The URL pointing towards your preferred IndieAuth provider. This is
	// important and used for creating posts on your website.
	// default: 'https://indieauth.com/auth'
	const INDIEAUTH_PROVIDER = 'https://indieauth.com/auth';

	// IndieAuth Token Endpoint (string):
	// Similarly to the IndieAuth provider, this URL (which may or may not
	// be identical to the provider URL) is used to validate the token
	// received from the IndieAuth provider you specified above.
	// default: 'https://indieauth.com/auth'
	const INDIEAUTH_TOKEN_ENDPOINT = 'https://indieauth.com/auth';
}

/**********************************
 *  DO NOT EDIT BELOW THIS POINT  *
 **********************************/

require_once('lib/enum.php');
require_once('db.include.php');
require_once('network.include.php');
require_once('functions.include.php');
