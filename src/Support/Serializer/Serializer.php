<?php

namespace Support\Serializer;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer as SymfonySerializer;

class Serializer
{
    private JsonEncoder $jsonEncoder;
    private ObjectNormalizer $objectNormalizer;
    private SymfonySerializer $serializer;

    public function __construct(JsonEncoder $jsonEncoder, ObjectNormalizer $objectNormalizer)
    {
        $this->jsonEncoder = $jsonEncoder;
        $this->objectNormalizer = $objectNormalizer;
        $this->serializer = new SymfonySerializer([$this->objectNormalizer], [$this->jsonEncoder]);
    }

    public function deserialize(array $data, string $className)
    {
        return $this->serializer->deserialize($data, $className, 'array');
    }

    /**
     * @throws ExceptionInterface
     */
    public function denormalize(array $data, string $classname)
    {
        return $this->serializer->denormalize($data, $classname);
    }
}
