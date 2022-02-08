<?php declare(strict_types=1);

namespace App\Normalizer;

use App\Entity\Author;
use ArrayObject;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AuthorNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    /**
     * @param Author $object
     */
    public function normalize(
        mixed $object,
        string $format = null,
        array $context = [],
    ): array|string|int|float|bool|ArrayObject|null {
        return [
            'id' => $object->id(),
            'first_name' => $object->firstName(),
            'last_name' => $object->lastName(),
            'birth_date' => $object->birthDate()->format('Y-m-d'),
        ];
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return $data instanceof Author;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
