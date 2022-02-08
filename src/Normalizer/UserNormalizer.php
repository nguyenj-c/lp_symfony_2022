<?php declare(strict_types=1);

namespace App\Normalizer;

use App\Entity\User;
use ArrayObject;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    /**
     * @param User $object
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
        ];
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return $data instanceof User;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
