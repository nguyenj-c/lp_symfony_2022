<?php

declare(strict_types=1);

namespace App\Normalizer;

use App\Entity\Book;
use ArrayObject;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BookNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    public function __construct(private CategoryNormalizer $categoryNormalizer)
    {
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return $data instanceof Book;
    }

    public function normalize(
        mixed $object,
        string $format = null,
        array $context = [],
    ): array|string|int|float|bool|ArrayObject|null {
        /** @var Book $object */
        return [
            'id' => $object->id(),
            'isbn' => $object->isbn(),
            'label' => $object->label(),
            'category' => $this->categoryNormalizer->normalize($object->category()),
        ];
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
