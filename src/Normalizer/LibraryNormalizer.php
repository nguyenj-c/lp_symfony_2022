<?php declare(strict_types=1);

namespace App\Normalizer;

use App\Entity\Book;
use App\Entity\Library;
use ArrayObject;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LibraryNormalizer implements NormalizerInterface, CacheableSupportsMethodInterface
{
    public function __construct(private BookNormalizer $bookNormalizer)
    {
    }

    /**
     * @param Library $object
     */
    public function normalize(
        mixed $object,
        string $format = null,
        array $context = [],
    ): array|string|int|float|bool|ArrayObject|null {
        if ($context['with_books'] ?? false) {
            return [
                'id' => $object->id(),
                'name' => $object->name(),
                'books' => array_map(fn (Book $book) => $this->bookNormalizer->normalize($book), $object->books()->toArray()),
            ];
        }
        return [
            'id' => $object->id(),
            'name' => $object->name(),
        ];
    }

    public function supportsNormalization(mixed $data, string $format = null): bool
    {
        return $data instanceof Library;
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
