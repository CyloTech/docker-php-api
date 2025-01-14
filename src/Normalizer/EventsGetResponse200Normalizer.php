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

class EventsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Docker\\API\\Model\\EventsGetResponse200' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Docker\\API\\Model\\EventsGetResponse200' === \get_class($data);
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
        $object = new \Docker\API\Model\EventsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Type', $data) && null !== $data['Type']) {
            $object->setType($data['Type']);
            unset($data['Type']);
        } elseif (\array_key_exists('Type', $data) && null === $data['Type']) {
            $object->setType(null);
        }
        if (\array_key_exists('Action', $data) && null !== $data['Action']) {
            $object->setAction($data['Action']);
            unset($data['Action']);
        } elseif (\array_key_exists('Action', $data) && null === $data['Action']) {
            $object->setAction(null);
        }
        if (\array_key_exists('Actor', $data) && null !== $data['Actor']) {
            $object->setActor($this->denormalizer->denormalize($data['Actor'], 'Docker\\API\\Model\\EventsGetResponse200Actor', 'json', $context));
            unset($data['Actor']);
        } elseif (\array_key_exists('Actor', $data) && null === $data['Actor']) {
            $object->setActor(null);
        }
        if (\array_key_exists('time', $data) && null !== $data['time']) {
            $object->setTime($data['time']);
            unset($data['time']);
        } elseif (\array_key_exists('time', $data) && null === $data['time']) {
            $object->setTime(null);
        }
        if (\array_key_exists('timeNano', $data) && null !== $data['timeNano']) {
            $object->setTimeNano($data['timeNano']);
            unset($data['timeNano']);
        } elseif (\array_key_exists('timeNano', $data) && null === $data['timeNano']) {
            $object->setTimeNano(null);
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
        if ($object->isInitialized('type') && null !== $object->getType()) {
            $data['Type'] = $object->getType();
        }
        if ($object->isInitialized('action') && null !== $object->getAction()) {
            $data['Action'] = $object->getAction();
        }
        if ($object->isInitialized('actor') && null !== $object->getActor()) {
            $data['Actor'] = new \ArrayObject($this->normalizer->normalize($object->getActor(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('time') && null !== $object->getTime()) {
            $data['time'] = $object->getTime();
        }
        if ($object->isInitialized('timeNano') && null !== $object->getTimeNano()) {
            $data['timeNano'] = $object->getTimeNano();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
