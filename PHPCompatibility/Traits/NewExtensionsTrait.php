<?php
/**
 * PHPCompatibility, an external standard for PHP_CodeSniffer.
 *
 * @package   PHPCompatibility
 * @copyright 2012-2020 PHPCompatibility Contributors
 * @license   https://opensource.org/licenses/LGPL-3.0 LGPL3
 * @link      https://github.com/PHPCompatibility/PHPCompatibility
 */

namespace PHPCompatibility\Traits;

/**
 *
 */
trait NewExtensionsTrait
{

    /**
     * A list of new PHP extensions.
     *
     * The array lists : version number with false (available in PECL) and true (shipped with PHP).
     * If's sufficient to list the first version where the extension was introduced.
     *
     * Optionally, an `alternative` key can be added to add the name of an alternative which can be
     * used before this extension became available in PHP Core.
     *
     * @since 10.0.0
     *
     * @var array(string => array(string => bool|string|null))
     */
    public $newExtensions = array(
        'csprng' => array(
            '7.0'         => true,
            'alternative' => 'https://github.com/paragonie/random_compat',
        ),
        'ffi' => array(
            '7.4' => true,
        ),
        'opcache' => array(
            '5.5'         => true,
            'alternative' => 'pecl/opcache',
        ),
        'phar' => array(
            '5.3'         => true,
            'alternative' => 'pecl/phar',
        ),
        'phpdbg' => array(
            '5.6' => true,
        ),
    );

    /**
     * Get an array of the non-PHP-version array keys used in a sub-array.
     *
     * By default, new feature version arrays, contain a potential 'extension' array key.
     *
     * @since 10.0.0
     *
     * @return array
     */
    protected function getNonVersionArrayKeys()
    {
        return array('extension');
    }

    /*
     * TODO:
     * - add function to check if an error message needs to be adjusted as something is a new extension.
     * - add function to adjust the error message
     * - implement use of the trait in the relevant sniffs.
     */
}
