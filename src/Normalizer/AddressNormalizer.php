<?php

declare(strict_types=1);

namespace Docker\API\Normalizer;

use Docker\API\Runtime\Normalizer\CheckArray;
use Docker\API\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Docker\\API\\Model\\Address' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Docker\\API\\Model\\Address' === \get_class($data);
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
        $object = new \Docker\API\Model\Address();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Addr', $data) && null !== $data['Addr']) {
            $object->setAddr($data['Addr']);
            unset($data['Addr']);
        } elseif (\array_key_exists('Addr', $data) && null === $data['Addr']) {
            $object->setAddr(null);
        }
        if (\array_key_exists('PrefixLen', $data) && null !== $data['PrefixLen']) {
            $object->setPrefixLen($data['PrefixLen']);
            unset($data['PrefixLen']);
        } elseif (\array_key_exists('PrefixLen', $data) && null === $data['PrefixLen']) {
            $object->setPrefixLen(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('addr') && null !== $object->getAddr()) {
            $data['Addr'] = $object->getAddr();
        }
        if ($object->isInitialized('prefixLen') && null !== $object->getPrefixLen()) {
            $data['PrefixLen'] = $object->getPrefixLen();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
