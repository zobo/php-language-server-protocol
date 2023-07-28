<?php

namespace LanguageServerProtocol;

/**
 * Provide inline value as text.
 *
 * @since 3.17.0
 */
class InlineValueText
{
    /**
     * The document range for which the inline value applies.
     *
     * @var Range
     */
    public $range;

    /**
     * The text of the inline value.
     *
     * @var string
     */
    public $text;

    /**
     * @param Range $range Range
     * @param string $text Text
     */
    public function __construct($range = null, $text = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->range = $range;
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->text = $text;
    }
}
