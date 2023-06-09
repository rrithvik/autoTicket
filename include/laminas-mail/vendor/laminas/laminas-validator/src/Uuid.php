<?php

namespace Laminas\Validator;

use function is_string;
use function preg_match;

/**
 * Uuid validator.
 */
final class Uuid extends AbstractValidator
{
    /**
     * Matches Uuid's versions 1 to 5.
     */
    public const REGEX_UUID = '/^[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}$/';

    public const INVALID    = 'valueNotUuid';
    public const NOT_STRING = 'valueNotString';

    /** @var array */
    protected $messageTemplates = [
        self::NOT_STRING => 'Invalid type given; string expected',
        self::INVALID    => 'Invalid UUID format',
    ];

    /**
     * Returns true if and only if $value meets the validation requirements.
     *
     * If $value fails validation, then this method returns false, and
     * getMessages() will return an array of messages that explain why the
     * validation failed.
     *
     * @param mixed $value
     * @return bool
     * @throws Exception\RuntimeException If validation of $value is impossible.
     */
    public function isValid($value)
    {
        if (! is_string($value)) {
            $this->error(self::NOT_STRING);
            return false;
        }

        $this->setValue($value);

        if (
            empty($value)
            || $value !== '00000000-0000-0000-0000-000000000000'
            && ! preg_match(self::REGEX_UUID, $value)
        ) {
            $this->error(self::INVALID);
            return false;
        }

        return true;
    }
}
