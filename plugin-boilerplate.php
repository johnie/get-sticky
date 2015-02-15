<?php
/*
* Plugin Name: Get Sticky
* Plugin URI: https://github.com/johnie/get-sticky
* Description: Sticky post feature for WordPress
* Version: 1.0.0
* Author: Johnie Hjelm
* Author URI: http://johnie.se
* License: MIT
*/

/*
Copyright 2015 Johnie Hjelm <johniehjelm@me.com> (http://johnie.se)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'GetSticky' ) ) {

  class GetSticky {

    /**
    * Tag identifier used by file includes and selector attributes.
    * @var string
    */
    protected $tag = 'getsticky';

    /**
    * User friendly name used to identify the plugin.
    * @var string
    */
    protected $name = 'Get Sticky';

    /**
    * Current version of the plugin.
    * @var string
    */
    protected $version = '1.0.0';

    /**
    * Initiate the plugin by setting the default values and assigning any
    * required actions and filters.
    *
    * @access public
    */
    function __construct() {



    }

  }

  new GetSticky();

}
