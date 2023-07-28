<?php

namespace LanguageServerProtocol;

/**
 * Provide inline value through a variable lookup.
 *
 * If only a range is specified, the variable name will be extracted from
 * the underlying document.
 *
 * An optional variable name can be used to override the extracted name.
 *
 * @since 3.17.0
 */
class InlineValueVariableLookup
{
    /**
     * The document range for which the inline value applies.
	 * The range is used to extract the variable name from the underlying
	 * document.
     *
     * @var Range
     */
    public $range;

    /**
     * If specified the name of the variable to look up.
     * 
     * @var string|null
     */
    public $variableName;

    /**
     *  How to perform the lookup.
     * 
     * @var bool
     */
    public $caseSensitiveLookup;

    /**
     * @param Range $range Range
     * @param string|null $variableName variableName
     * @param bool $caseSensitiveLookup caseSensitiveLookup
     */
    public function __construct($range = null, $variableName = null, $caseSensitiveLookup = null)
    {
        /** @psalm-suppress PossiblyNullPropertyAssignmentValue */
        $this->range = $range;
        $this->variableName = $variableName;
        $this->caseSensitiveLookup = $caseSensitiveLookup;
    }
}
