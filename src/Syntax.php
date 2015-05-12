<?php
namespace Thunder\Shortcode;

/**
 * @author Tomasz Kowalczyk <tomasz@kowalczyk.cc>
 */
final class Syntax
    {
    private $openingTag;
    private $closingTag;
    private $closingTagMarker;
    private $parameterValueSeparator;
    private $parameterValueDelimiter;

    public function __construct($openingTag = null, $closingTag = null, $closingTagMarker = null,
                                $parameterValueSeparator = null, $parameterValueDelimiter = null)
        {
        $this->openingTag = $openingTag ?: '[';
        $this->closingTag = $closingTag ?: ']';
        $this->closingTagMarker = $closingTagMarker ?: '/';
        $this->parameterValueSeparator = $parameterValueSeparator ?: '=';
        $this->parameterValueDelimiter = $parameterValueDelimiter ?: '"';
        }

    public static function create()
        {
        return new self();
        }

    public static function createStrict()
        {
        return new self();
        }

    public function getOpeningTag()
        {
        return $this->openingTag;
        }

    public function getClosingTag()
        {
        return $this->closingTag;
        }

    public function getClosingTagMarker()
        {
        return $this->closingTagMarker;
        }

    public function getParameterValueSeparator()
        {
        return $this->parameterValueSeparator;
        }

    public function getParameterValueDelimiter()
        {
        return $this->parameterValueDelimiter;
        }
    }
