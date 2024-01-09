<?php

declare(strict_types=1);

namespace Jane\Component\OpenApi3\Guesser\OpenApiSchema;

use Jane\Component\JsonSchema\Generator\Naming;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareInterface;
use Jane\Component\JsonSchema\Guesser\ChainGuesserAwareTrait;
use Jane\Component\JsonSchema\Guesser\Guess\MultipleType;
use Jane\Component\JsonSchema\Guesser\Guess\Type;
use Jane\Component\JsonSchema\Guesser\GuesserInterface;
use Jane\Component\JsonSchema\Guesser\GuesserResolverTrait;
use Jane\Component\JsonSchema\Guesser\TypeGuesserInterface;
use Jane\Component\JsonSchema\Registry\Registry;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jane\Component\OpenApi3\JsonSchema\Model\Schema;
use Symfony\Component\Serializer\SerializerInterface;

class OneOfReferencefGuesser implements ChainGuesserAwareInterface, GuesserInterface, TypeGuesserInterface
{
    use ChainGuesserAwareTrait;
    use GuesserResolverTrait;

    protected $schemaClass;
    protected $naming;

    public function __construct(SerializerInterface $serializer, Naming $naming, string $schemaClass)
    {
        $this->serializer = $serializer;
        $this->schemaClass = $schemaClass;
        $this->naming = $naming;
    }

    public function supportObject($object): bool
    {
        return $object instanceof Schema && \is_array($object->getOneOf()) && $object->getOneOf()[0] instanceof Reference;
    }

    public function guessType($object, string $name, string $reference, Registry $registry): Type
    {
        $type = new MultipleType($object);
        if ($object instanceof Schema) {
            foreach ($object->getOneOf() as $index => $oneOf) {
                if ($oneOf === null) {
                    continue;
                }
                $oneOfSchema = $oneOf;
                $oneOfReference = $reference . '/oneOf/' . $index;

                if ($oneOf instanceof Reference) {
                    $oneOfReference = (string) $oneOf->getMergedUri();

                    if ((string) $oneOf->getMergedUri() === (string) $oneOf->getMergedUri()->withFragment('')) {
                        $oneOfReference .= '#';
                    }

                    $oneOfSchema = $this->resolve($oneOfSchema, $this->schemaClass);
                }
                if (null !== $oneOfSchema->getType()) {
                    $oneOfType = $this->chainGuesser->guessType($oneOfSchema, $name, $oneOfReference, $registry);
                    $type->addType($oneOfType);
                }
            }
        }

        return $type;
    }
}
