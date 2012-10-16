<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_I18n
 */

namespace Zend\I18n\Validator;

use Zend\I18n\Filter\Alpha as AlphaFilter;

/**
 * @category   Zend
 * @package    Zend_I18n
 * @subpackage Validator
 */
class Alpha extends Alnum
{
    const INVALID      = 'alphaInvalid';
    const NOT_ALPHA    = 'notAlpha';
    const STRING_EMPTY = 'alphaStringEmpty';

    /**
     * Alphabetic filter used for validation
     *
     * @var AlphaFilter
     */
    protected static $filter = null;

    /**
     * Validation failure message template definitions
     *
     * @var array
     */
    protected $messageTemplates = array(
        self::INVALID      => "Invalid type given. String expected",
        self::NOT_ALPHA    => "The input contains non alphabetic characters",
        self::STRING_EMPTY => "The input is an empty string"
    );

    /**
     * Options for this validator
     *
     * @var array
     */
    protected $options = array(
        'allowWhiteSpace' => false,  // Whether to allow white space characters; off by default
    );

    /**
     * Returns true if and only if $value contains only alphabetic characters
     *
     * @param  string $value
     * @return boolean
     */
    public function isValid($value)
    {
        if (!is_string($value)) {
            $this->error(self::INVALID);
            return false;
        }

        $this->setValue($value);

        if ('' === $value) {
            $this->error(self::STRING_EMPTY);
            return false;
        }

        if (null === self::$filter) {
            self::$filter = new AlphaFilter();
        }

        //self::$filter->setAllowWhiteSpace($this->allowWhiteSpace);
        self::$filter->setAllowWhiteSpace($this->options['allowWhiteSpace']);

        if ($value !== self::$filter->filter($value)) {
            $this->error(self::NOT_ALPHA);
            return false;
        }

        return true;
    }

}
