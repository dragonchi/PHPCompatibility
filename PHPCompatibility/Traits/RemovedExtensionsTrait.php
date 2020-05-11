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
trait RemovedExtensionsTrait
{

    /**
     * A list of removed extensions with their alternative, if any.
     *
     * The array lists : version number with false (deprecated) and true (removed).
     * If's sufficient to list the first version where the extension was deprecated/removed.
     *
     * Optionally, an `alternative` key can be added to add the name of an alternative which can be
     * used after this extension was removed from PHP Core.
     *
     * @since 10.0.0 This array in a slightly different form previously existed in the RemovedExtensionsSniff.
     *
     * @var array(string => array(string => bool|string|null))
     */
    public $removedExtensions = array(
        'dio' => array(
            '5.1'         => true,
            'alternative' => 'pecl/dio',
        ),
        'fam' => array(
            '5.1' => true,
        ),
        'fdf' => array(
            '5.3'         => true,
            'alternative' => 'pecl/fdf',
        ),
        'hwapi' => array(
            '5.2'         => true,
            'alternative' => 'pecl/hwapi',
        ),
        'mcrypt' => array(
            '7.1'         => false,
            '7.2'         => true,
            'alternative' => 'the sodium or openssl extensions (preferred) or pecl/mcrypt',
        ),
        'mcve' => array(
            '5.1'         => true,
            'alternative' => 'pecl/mcve',
        ),
        'mimetype' => array(
            '5.3'         => true,
            'alternative' => 'fileinfo',
        ),
        'ming' => array(
            '5.3'         => true,
            'alternative' => 'pecl/ming',
        ),
        'mnogosearch' => array(
            '5.1' => true,
        ),
        'ncurses' => array(
            '5.3'         => true,
            'alternative' => 'pecl/ncurses',
        ),
        'recode' => array(
            '7.4'         => true,
            'alternative' => 'iconv or mbstring',
        ),
        'yp' => array(
            '5.1' => true,
        ),
    );

    /**
     * Get an array of the non-PHP-version array keys used in a sub-array.
     *
     * By default, removed feature version arrays, contain an additional 'alternative' and a potential
     * 'extension' array key.
     *
     * @since 10.0.0
     *
     * @return array
     */
    protected function getNonVersionArrayKeys()
    {
        return array('alternative', 'extension');
    }


    /*
     * TODO:
     * - add function to check if an error message needs to be adjusted as something is a removed extension.
     * - add function to adjust the error message
     * - implement use of the trait in the relevant sniffs.
     */
}
