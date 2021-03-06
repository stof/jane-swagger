<?php

namespace Joli\Jane\Swagger\Guesser\SwaggerSchema;

use Joli\Jane\Guesser\JsonSchema\ItemsGuesser as BaseItemsGuesser;
use Joli\Jane\Swagger\Model\Schema;

class ItemsGuesser extends BaseItemsGuesser
{
    /**
     * {@inheritDoc}
     */
    public function supportObject($object)
    {
        return (
            ($object instanceof Schema)
            && (
                $object->getItems() instanceof Schema
                ||
                (
                    is_array($object->getItems())
                    &&
                    count($object->getItems()) > 0
                )
            )
        );
    }
}
 