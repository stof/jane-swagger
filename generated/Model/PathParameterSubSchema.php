<?php

namespace Joli\Jane\Swagger\Model;

class PathParameterSubSchema
{
    /**
     * @var bool
     */
    protected $required;
    /**
     * @var string
     */
    protected $in;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $format;
    /**
     * @var PrimitivesItems
     */
    protected $items;
    /**
     * @var string
     */
    protected $collectionFormat;
    /**
     * @var mixed
     */
    protected $default;
    /**
     * @var float
     */
    protected $maximum;
    /**
     * @var bool
     */
    protected $exclusiveMaximum;
    /**
     * @var float
     */
    protected $minimum;
    /**
     * @var bool
     */
    protected $exclusiveMinimum;
    /**
     * @var int
     */
    protected $maxLength;
    /**
     * @var int
     */
    protected $minLength;
    /**
     * @var string
     */
    protected $pattern;
    /**
     * @var int
     */
    protected $maxItems;
    /**
     * @var int
     */
    protected $minItems;
    /**
     * @var bool
     */
    protected $uniqueItems;
    /**
     * @var mixed[]
     */
    protected $enum;
    /**
     * @var float
     */
    protected $multipleOf;
    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * @param bool $required
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }
    /**
     * @return string
     */
    public function getIn()
    {
        return $this->in;
    }
    /**
     * @param string $in
     *
     * @return self
     */
    public function setIn($in)
    {
        $this->in = $in;

        return $this;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * @param string $format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
    /**
     * @return PrimitivesItems
     */
    public function getItems()
    {
        return $this->items;
    }
    /**
     * @param PrimitivesItems $items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
    /**
     * @return string
     */
    public function getCollectionFormat()
    {
        return $this->collectionFormat;
    }
    /**
     * @param string $collectionFormat
     *
     * @return self
     */
    public function setCollectionFormat($collectionFormat)
    {
        $this->collectionFormat = $collectionFormat;

        return $this;
    }
    /**
     * @return mixed
     */
    public function getDefault()
    {
        return $this->default;
    }
    /**
     * @param mixed $default
     *
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }
    /**
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
    }
    /**
     * @param float $maximum
     *
     * @return self
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }
    /**
     * @return bool
     */
    public function getExclusiveMaximum()
    {
        return $this->exclusiveMaximum;
    }
    /**
     * @param bool $exclusiveMaximum
     *
     * @return self
     */
    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;

        return $this;
    }
    /**
     * @return float
     */
    public function getMinimum()
    {
        return $this->minimum;
    }
    /**
     * @param float $minimum
     *
     * @return self
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }
    /**
     * @return bool
     */
    public function getExclusiveMinimum()
    {
        return $this->exclusiveMinimum;
    }
    /**
     * @param bool $exclusiveMinimum
     *
     * @return self
     */
    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;

        return $this;
    }
    /**
     * @return int
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }
    /**
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;

        return $this;
    }
    /**
     * @return int
     */
    public function getMinLength()
    {
        return $this->minLength;
    }
    /**
     * @param int $minLength
     *
     * @return self
     */
    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;

        return $this;
    }
    /**
     * @return string
     */
    public function getPattern()
    {
        return $this->pattern;
    }
    /**
     * @param string $pattern
     *
     * @return self
     */
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }
    /**
     * @return int
     */
    public function getMaxItems()
    {
        return $this->maxItems;
    }
    /**
     * @param int $maxItems
     *
     * @return self
     */
    public function setMaxItems($maxItems)
    {
        $this->maxItems = $maxItems;

        return $this;
    }
    /**
     * @return int
     */
    public function getMinItems()
    {
        return $this->minItems;
    }
    /**
     * @param int $minItems
     *
     * @return self
     */
    public function setMinItems($minItems)
    {
        $this->minItems = $minItems;

        return $this;
    }
    /**
     * @return bool
     */
    public function getUniqueItems()
    {
        return $this->uniqueItems;
    }
    /**
     * @param bool $uniqueItems
     *
     * @return self
     */
    public function setUniqueItems($uniqueItems)
    {
        $this->uniqueItems = $uniqueItems;

        return $this;
    }
    /**
     * @return mixed[]
     */
    public function getEnum()
    {
        return $this->enum;
    }
    /**
     * @param mixed[] $enum
     *
     * @return self
     */
    public function setEnum($enum)
    {
        $this->enum = $enum;

        return $this;
    }
    /**
     * @return float
     */
    public function getMultipleOf()
    {
        return $this->multipleOf;
    }
    /**
     * @param float $multipleOf
     *
     * @return self
     */
    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;

        return $this;
    }
}
