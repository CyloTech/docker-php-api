<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ImageRootFSNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Docker\\API\\Model\\ImageRootFS' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'Docker\\API\\Model\\ImageRootFS' === $data::class;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Docker\API\Model\ImageRootFS();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Type', $data) && null !== $data['Type']) {
            $object->setType($data['Type']);
        } elseif (\array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }
        if (\array_key_exists('Layers', $data) && null !== $data['Layers']) {
            $values = [];
            foreach ($data['Layers'] as $value) {
                $values[] = $value;
            }
            $object->setLayers($values);
        } elseif (\array_key_exists('Layers', $data) && null === $data['Layers']) {
            $object->setLayers(null);
        }
        if (\array_key_exists('BaseLayer', $data) && null !== $data['BaseLayer']) {
            $object->setBaseLayer($data['BaseLayer']);
        } elseif (\array_key_exists('BaseLayer', $data) && null === $data['BaseLayer']) {
            $object->setBaseLayer(null);
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['Type'] = $object->getType();
        if (null !== $object->getLayers()) {
            $values = [];
            foreach ($object->getLayers() as $value) {
                $values[] = $value;
            }
            $data['Layers'] = $values;
        }
        if (null !== $object->getBaseLayer()) {
            $data['BaseLayer'] = $object->getBaseLayer();
        }

        return $data;
    }
}
