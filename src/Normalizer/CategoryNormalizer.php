<?php declare(strict_types=1);

namespace App\Normalizer;

use App\Entity\Category;
use ArrayObject;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CategoryNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    /**
     * @param Category $object
     */
    public function normalize(
        mixed $object,
        string $format = null,
        array $context = [],
    ): array|string|int|float|bool|ArrayObject|null {
        return [
            'id' => $object->id(),
            'label' => $object->label(),
        ];
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return $data instanceof Category;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
