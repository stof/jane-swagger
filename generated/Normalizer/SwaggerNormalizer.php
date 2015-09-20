<?php

namespace Joli\Jane\Swagger\Normalizer;

use Joli\Jane\Reference\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class SwaggerNormalizer extends SerializerAwareNormalizer implements DenormalizerInterface, NormalizerInterface
{
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Joli\\Jane\\Swagger\\Model\\Swagger') {
            return false;
        }

        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Joli\Jane\Swagger\Model\Swagger) {
            return true;
        }

        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (empty($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['rootSchema'] ?: null);
        }
        $object = new \Joli\Jane\Swagger\Model\Swagger();
        if (!isset($context['rootSchema'])) {
            $context['rootSchema'] = $object;
        }
        if (isset($data->{'swagger'})) {
            $object->setSwagger($data->{'swagger'});
        }
        if (isset($data->{'info'})) {
            $object->setInfo($this->serializer->deserialize($data->{'info'}, 'Joli\\Jane\\Swagger\\Model\\Info', 'raw', $context));
        }
        if (isset($data->{'host'})) {
            $object->setHost($data->{'host'});
        }
        if (isset($data->{'basePath'})) {
            $object->setBasePath($data->{'basePath'});
        }
        if (isset($data->{'schemes'})) {
            $values = array();
            foreach ($data->{'schemes'} as $value) {
                $values[] = $value;
            }
            $object->setSchemes($values);
        }
        if (isset($data->{'consumes'})) {
            $values_0 = array();
            foreach ($data->{'consumes'} as $value_1) {
                $values_0[] = $value_1;
            }
            $object->setConsumes($values_0);
        }
        if (isset($data->{'produces'})) {
            $values_2 = array();
            foreach ($data->{'produces'} as $value_3) {
                $values_2[] = $value_3;
            }
            $object->setProduces($values_2);
        }
        if (isset($data->{'paths'})) {
            $values_4 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'paths'} as $key => $value_5) {
                if (preg_match('/^x-/', $key) && isset($value_5)) {
                    $values_4[$key] = $value_5;
                    continue;
                }
                if (preg_match('/^\//', $key) && is_object($value_5)) {
                    $values_4[$key] = $this->serializer->deserialize($value_5, 'Joli\\Jane\\Swagger\\Model\\PathItem', 'raw', $context);
                    continue;
                }
            }
            $object->setPaths($values_4);
        }
        if (isset($data->{'definitions'})) {
            $values_6 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'definitions'} as $key_8 => $value_7) {
                $values_6[$key_8] = $this->serializer->deserialize($value_7, 'Joli\\Jane\\Swagger\\Model\\Schema', 'raw', $context);
            }
            $object->setDefinitions($values_6);
        }
        if (isset($data->{'parameters'})) {
            $values_9 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'parameters'} as $key_11 => $value_10) {
                $value_12 = $value_10;
                if (is_object($value_10) and isset($value_10->{'name'}) and (isset($value_10->{'in'}) and $value_10->{'in'} == 'body') and isset($value_10->{'schema'})) {
                    $value_12 = $this->serializer->deserialize($value_10, 'Joli\\Jane\\Swagger\\Model\\BodyParameter', 'raw', $context);
                }
                if (is_object($value_10) and (isset($value_10->{'in'}) and $value_10->{'in'} == 'header') and isset($value_10->{'name'}) and (isset($value_10->{'type'}) and ($value_10->{'type'} == 'string' or $value_10->{'type'} == 'number' or $value_10->{'type'} == 'boolean' or $value_10->{'type'} == 'integer' or $value_10->{'type'} == 'array'))) {
                    $value_12 = $this->serializer->deserialize($value_10, 'Joli\\Jane\\Swagger\\Model\\HeaderParameterSubSchema', 'raw', $context);
                }
                if (is_object($value_10) and (isset($value_10->{'in'}) and $value_10->{'in'} == 'formData') and isset($value_10->{'name'}) and (isset($value_10->{'type'}) and ($value_10->{'type'} == 'string' or $value_10->{'type'} == 'number' or $value_10->{'type'} == 'boolean' or $value_10->{'type'} == 'integer' or $value_10->{'type'} == 'array' or $value_10->{'type'} == 'file'))) {
                    $value_12 = $this->serializer->deserialize($value_10, 'Joli\\Jane\\Swagger\\Model\\FormDataParameterSubSchema', 'raw', $context);
                }
                if (is_object($value_10) and (isset($value_10->{'in'}) and $value_10->{'in'} == 'query') and isset($value_10->{'name'}) and (isset($value_10->{'type'}) and ($value_10->{'type'} == 'string' or $value_10->{'type'} == 'number' or $value_10->{'type'} == 'boolean' or $value_10->{'type'} == 'integer' or $value_10->{'type'} == 'array'))) {
                    $value_12 = $this->serializer->deserialize($value_10, 'Joli\\Jane\\Swagger\\Model\\QueryParameterSubSchema', 'raw', $context);
                }
                if (is_object($value_10) and (isset($value_10->{'in'}) and $value_10->{'in'} == 'path') and isset($value_10->{'name'}) and (isset($value_10->{'type'}) and ($value_10->{'type'} == 'string' or $value_10->{'type'} == 'number' or $value_10->{'type'} == 'boolean' or $value_10->{'type'} == 'integer' or $value_10->{'type'} == 'array'))) {
                    $value_12 = $this->serializer->deserialize($value_10, 'Joli\\Jane\\Swagger\\Model\\PathParameterSubSchema', 'raw', $context);
                }
                $values_9[$key_11] = $value_12;
            }
            $object->setParameters($values_9);
        }
        if (isset($data->{'responses'})) {
            $values_13 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'responses'} as $key_15 => $value_14) {
                $values_13[$key_15] = $this->serializer->deserialize($value_14, 'Joli\\Jane\\Swagger\\Model\\Response', 'raw', $context);
            }
            $object->setResponses($values_13);
        }
        if (isset($data->{'security'})) {
            $values_16 = array();
            foreach ($data->{'security'} as $value_17) {
                $values_18 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_17 as $key_20 => $value_19) {
                    $values_21 = array();
                    foreach ($value_19 as $value_22) {
                        $values_21[] = $value_22;
                    }
                    $values_18[$key_20] = $values_21;
                }
                $values_16[] = $values_18;
            }
            $object->setSecurity($values_16);
        }
        if (isset($data->{'securityDefinitions'})) {
            $values_23 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'securityDefinitions'} as $key_25 => $value_24) {
                $value_26 = $value_24;
                if (is_object($value_24) and (isset($value_24->{'type'}) and $value_24->{'type'} == 'basic')) {
                    $value_26 = $this->serializer->deserialize($value_24, 'Joli\\Jane\\Swagger\\Model\\BasicAuthenticationSecurity', 'raw', $context);
                }
                if (is_object($value_24) and (isset($value_24->{'type'}) and $value_24->{'type'} == 'apiKey') and isset($value_24->{'name'}) and (isset($value_24->{'in'}) and ($value_24->{'in'} == 'header' or $value_24->{'in'} == 'query'))) {
                    $value_26 = $this->serializer->deserialize($value_24, 'Joli\\Jane\\Swagger\\Model\\ApiKeySecurity', 'raw', $context);
                }
                if (is_object($value_24) and (isset($value_24->{'type'}) and $value_24->{'type'} == 'oauth2') and (isset($value_24->{'flow'}) and $value_24->{'flow'} == 'implicit') and isset($value_24->{'authorizationUrl'})) {
                    $value_26 = $this->serializer->deserialize($value_24, 'Joli\\Jane\\Swagger\\Model\\Oauth2ImplicitSecurity', 'raw', $context);
                }
                if (is_object($value_24) and (isset($value_24->{'type'}) and $value_24->{'type'} == 'oauth2') and (isset($value_24->{'flow'}) and $value_24->{'flow'} == 'password') and isset($value_24->{'tokenUrl'})) {
                    $value_26 = $this->serializer->deserialize($value_24, 'Joli\\Jane\\Swagger\\Model\\Oauth2PasswordSecurity', 'raw', $context);
                }
                if (is_object($value_24) and (isset($value_24->{'type'}) and $value_24->{'type'} == 'oauth2') and (isset($value_24->{'flow'}) and $value_24->{'flow'} == 'application') and isset($value_24->{'tokenUrl'})) {
                    $value_26 = $this->serializer->deserialize($value_24, 'Joli\\Jane\\Swagger\\Model\\Oauth2ApplicationSecurity', 'raw', $context);
                }
                if (is_object($value_24) and (isset($value_24->{'type'}) and $value_24->{'type'} == 'oauth2') and (isset($value_24->{'flow'}) and $value_24->{'flow'} == 'accessCode') and isset($value_24->{'authorizationUrl'}) and isset($value_24->{'tokenUrl'})) {
                    $value_26 = $this->serializer->deserialize($value_24, 'Joli\\Jane\\Swagger\\Model\\Oauth2AccessCodeSecurity', 'raw', $context);
                }
                $values_23[$key_25] = $value_26;
            }
            $object->setSecurityDefinitions($values_23);
        }
        if (isset($data->{'tags'})) {
            $values_27 = array();
            foreach ($data->{'tags'} as $value_28) {
                $values_27[] = $this->serializer->deserialize($value_28, 'Joli\\Jane\\Swagger\\Model\\Tag', 'raw', $context);
            }
            $object->setTags($values_27);
        }
        if (isset($data->{'externalDocs'})) {
            $object->setExternalDocs($this->serializer->deserialize($data->{'externalDocs'}, 'Joli\\Jane\\Swagger\\Model\\ExternalDocs', 'raw', $context));
        }

        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSwagger()) {
            $data->{'swagger'} = $object->getSwagger();
        }
        if (null !== $object->getInfo()) {
            $data->{'info'} = $this->serializer->serialize($object->getInfo(), 'raw', $context);
        }
        if (null !== $object->getHost()) {
            $data->{'host'} = $object->getHost();
        }
        if (null !== $object->getBasePath()) {
            $data->{'basePath'} = $object->getBasePath();
        }
        if (null !== $object->getSchemes()) {
            $values_29 = array();
            foreach ($object->getSchemes() as $value_30) {
                $values_29[] = $value_30;
            }
            $data->{'schemes'} = $values_29;
        }
        if (null !== $object->getConsumes()) {
            $values_31 = array();
            foreach ($object->getConsumes() as $value_32) {
                $values_31[] = $value_32;
            }
            $data->{'consumes'} = $values_31;
        }
        if (null !== $object->getProduces()) {
            $values_33 = array();
            foreach ($object->getProduces() as $value_34) {
                $values_33[] = $value_34;
            }
            $data->{'produces'} = $values_33;
        }
        if (null !== $object->getPaths()) {
            $data->{'paths'} = $object->getPaths();
        }
        if (null !== $object->getDefinitions()) {
            $values_35 = new \stdClass();
            foreach ($object->getDefinitions() as $key_37 => $value_36) {
                $values_35->{$key_37} = $this->serializer->serialize($value_36, 'raw', $context);
            }
            $data->{'definitions'} = $values_35;
        }
        if (null !== $object->getParameters()) {
            $values_38 = new \stdClass();
            foreach ($object->getParameters() as $key_40 => $value_39) {
                $value_41 = $value_39;
                if (is_object($value_39)) {
                    $value_41 = $this->serializer->serialize($value_39, 'raw', $context);
                }
                if (is_object($value_39)) {
                    $value_41 = $this->serializer->serialize($value_39, 'raw', $context);
                }
                if (is_object($value_39)) {
                    $value_41 = $this->serializer->serialize($value_39, 'raw', $context);
                }
                if (is_object($value_39)) {
                    $value_41 = $this->serializer->serialize($value_39, 'raw', $context);
                }
                if (is_object($value_39)) {
                    $value_41 = $this->serializer->serialize($value_39, 'raw', $context);
                }
                $values_38->{$key_40} = $value_41;
            }
            $data->{'parameters'} = $values_38;
        }
        if (null !== $object->getResponses()) {
            $values_42 = new \stdClass();
            foreach ($object->getResponses() as $key_44 => $value_43) {
                $values_42->{$key_44} = $this->serializer->serialize($value_43, 'raw', $context);
            }
            $data->{'responses'} = $values_42;
        }
        if (null !== $object->getSecurity()) {
            $values_45 = array();
            foreach ($object->getSecurity() as $value_46) {
                $values_47 = new \stdClass();
                foreach ($value_46 as $key_49 => $value_48) {
                    $values_50 = array();
                    foreach ($value_48 as $value_51) {
                        $values_50[] = $value_51;
                    }
                    $values_47->{$key_49} = $values_50;
                }
                $values_45[] = $values_47;
            }
            $data->{'security'} = $values_45;
        }
        if (null !== $object->getSecurityDefinitions()) {
            $values_52 = new \stdClass();
            foreach ($object->getSecurityDefinitions() as $key_54 => $value_53) {
                $value_55 = $value_53;
                if (is_object($value_53)) {
                    $value_55 = $this->serializer->serialize($value_53, 'raw', $context);
                }
                if (is_object($value_53)) {
                    $value_55 = $this->serializer->serialize($value_53, 'raw', $context);
                }
                if (is_object($value_53)) {
                    $value_55 = $this->serializer->serialize($value_53, 'raw', $context);
                }
                if (is_object($value_53)) {
                    $value_55 = $this->serializer->serialize($value_53, 'raw', $context);
                }
                if (is_object($value_53)) {
                    $value_55 = $this->serializer->serialize($value_53, 'raw', $context);
                }
                if (is_object($value_53)) {
                    $value_55 = $this->serializer->serialize($value_53, 'raw', $context);
                }
                $values_52->{$key_54} = $value_55;
            }
            $data->{'securityDefinitions'} = $values_52;
        }
        if (null !== $object->getTags()) {
            $values_56 = array();
            foreach ($object->getTags() as $value_57) {
                $values_56[] = $this->serializer->serialize($value_57, 'raw', $context);
            }
            $data->{'tags'} = $values_56;
        }
        if (null !== $object->getExternalDocs()) {
            $data->{'externalDocs'} = $this->serializer->serialize($object->getExternalDocs(), 'raw', $context);
        }

        return $data;
    }
}
