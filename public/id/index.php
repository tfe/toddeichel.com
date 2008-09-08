<?php
// IF YOU HAVE NOT DONE SO, PLEASE READ THE README FILE FOR DIRECTIONS!!!

/**
 * phpMyID - A standalone, single user, OpenID Identity Provider
 *
 * @package phpMyID
 * @author CJ Niemira <siege (at) siege (dot) org>
 * @copyright 2006-2008
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @url http://siege.org/projects/phpMyID
 * @version 2
 */


/**
 * User profile
 * @name $profile
 * @global array $GLOBALS['profile']
 */
$GLOBALS['profile'] = array(
        # Basic Config - Required
        'auth_username' => 'tfe',
        'auth_password' => $_SERVER["PHPMYID_AUTH_PASSWORD"],

        # Optional Config - Please see README before setting these
#        'microid'        =>        array('user@site.com', 'http://delegator.url'),
#        'pavatar'        =>        'http://your.site.com/path/pavatar.img',

        # Advanced Config - Please see README before setting these
#        'allow_gmp'        =>        false,
#        'allow_test'        =>         false,
        'auth_realm'        =>        'toddeichel.com',
#        'force_bigmath'        =>        false,
#        'idp_url'        =>        'http://toddeichel.com/id/index.php',
#        'lifetime'        =>        1440,
#        'paranoid'        =>        false, # EXPERIMENTAL

        # Debug Config - Please see README before setting these
#        'debug'                =>        false,
#        'logfile'        =>        '/tmp/phpMyID.debug.log',
);

/**
 * Simple Registration Extension
 * @name $sreg
 * @global array $GLOBALS['sreg']
 */
$GLOBALS['sreg'] = array (
        'nickname'                => 'tfe',
        'email'                        => 'accounts+openid@toddeichel.com',
        'fullname'                => 'Todd Eichel',
        'dob'                        => '1986-06-22',
        'gender'                => 'M',
        'postcode'                => '98029',
        'country'                => 'US',
        'language'                => 'en',
        'timezone'                => 'America/Vancouver'
);

require('MyID.php');
?>