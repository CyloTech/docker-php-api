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

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Docker\\API\\Model\\BuildInfo' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'Docker\\API\\Model\\BuildInfo' === \get_class($data);
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
        $object = new \Docker\API\Model\BuildInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
            unset($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('stream', $data) && null !== $data['stream']) {
            $object->setStream($data['stream']);
            unset($data['stream']);
        } elseif (\array_key_exists('stream', $data) && null === $data['stream']) {
            $object->setStream(null);
        }
        if (\array_key_exists('error', $data) && null !== $data['error']) {
            $object->setError($data['error']);
            unset($data['error']);
        } elseif (\array_key_exists('error', $data) && null === $data['error']) {
            $object->setError(null);
        }
        if (\array_key_exists('errorDetail', $data) && null !== $data['errorDetail']) {
            $object->setErrorDetail($this->denormalizer->denormalize($data['errorDetail'], 'Docker\\API\\Model\\ErrorDetail', 'json', $context));
            unset($data['errorDetail']);
        } elseif (\array_key_exists('errorDetail', $data) && null === $data['errorDetail']) {
            $object->setErrorDetail(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
            unset($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('progress', $data) && null !== $data['progress']) {
            $object->setProgress($data['progress']);
            unset($data['progress']);
        } elseif (\array_key_exists('progress', $data) && null === $data['progress']) {
            $object->setProgress(null);
        }
        if (\array_key_exists('progressDetail', $data) && null !== $data['progressDetail']) {
            $object->setProgressDetail($this->denormalizer->denormalize($data['progressDetail'], 'Docker\\API\\Model\\ProgressDetail', 'json', $context));
            unset($data['progressDetail']);
        } elseif (\array_key_exists('progressDetail', $data) && null === $data['progressDetail']) {
            $object->setProgressDetail(null);
        }
        if (\array_key_exists('aux', $data) && null !== $data['aux']) {
            $object->setAux($this->denormalizer->denormalize($data['aux'], 'Docker\\API\\Model\\ImageID', 'json', $context));
            unset($data['aux']);
        } elseif (\array_key_exists('aux', $data) && null === $data['aux']) {
            $object->setAux(null);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('stream') && null !== $object->getStream()) {
            $data['stream'] = $object->getStream();
        }
        if ($object->isInitialized('error') && null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if ($object->isInitialized('errorDetail') && null !== $object->getErrorDetail()) {
            $data['errorDetail'] = new \ArrayObject($this->normalizer->normalize($object->getErrorDetail(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('progress') && null !== $object->getProgress()) {
            $data['progress'] = $object->getProgress();
        }
        if ($object->isInitialized('progressDetail') && null !== $object->getProgressDetail()) {
            $data['progressDetail'] = new \ArrayObject($this->normalizer->normalize($object->getProgressDetail(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        if ($object->isInitialized('aux') && null !== $object->getAux()) {
            $data['aux'] = new \ArrayObject($this->normalizer->normalize($object->getAux(), 'json', $context), \ArrayObject::ARRAY_AS_PROPS);
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
