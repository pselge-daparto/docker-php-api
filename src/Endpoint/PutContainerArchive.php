<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Endpoint;

class PutContainerArchive extends \Docker\API\Runtime\Client\BaseEndpoint implements \Docker\API\Runtime\Client\Endpoint
{
    protected $id;

    /**
     * Upload a tar archive to be extracted to a path in the filesystem of container id.
     *
     * @param string                                            $id              ID or name of the container
     * @param string|resource|\Psr\Http\Message\StreamInterface $inputStream     The input stream must be a tar archive compressed with one of the
     * @param array                                             $queryParameters {
     *
     *     @var string $path path to a directory in the container to extract the archive’s contents into
     *     @var string $noOverwriteDirNonDir If `1`, `true`, or `True` then it will be an error if unpacking the
     *     @var string $copyUIDGID If `1`, `true`, then it will copy UID/GID maps to the dest file or
    dir

     * }
     */
    public function __construct(string $id, $inputStream, array $queryParameters = [])
    {
        $this->id = $id;
        $this->body = $inputStream;
        $this->queryParameters = $queryParameters;
    }

    use \Docker\API\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/containers/{id}/archive');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], $this->body];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['path', 'noOverwriteDirNonDir', 'copyUIDGID']);
        $optionsResolver->setRequired(['path']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('path', ['string']);
        $optionsResolver->setAllowedTypes('noOverwriteDirNonDir', ['string']);
        $optionsResolver->setAllowedTypes('copyUIDGID', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Docker\API\Exception\PutContainerArchiveBadRequestException
     * @throws \Docker\API\Exception\PutContainerArchiveForbiddenException
     * @throws \Docker\API\Exception\PutContainerArchiveNotFoundException
     * @throws \Docker\API\Exception\PutContainerArchiveInternalServerErrorException
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType)
    {
        if (200 === $status) {
            return null;
        }
        if (400 === $status) {
            throw new \Docker\API\Exception\PutContainerArchiveBadRequestException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (403 === $status) {
            throw new \Docker\API\Exception\PutContainerArchiveForbiddenException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (404 === $status) {
            throw new \Docker\API\Exception\PutContainerArchiveNotFoundException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Docker\API\Exception\PutContainerArchiveInternalServerErrorException($serializer->deserialize($body, 'Docker\\API\\Model\\ErrorResponse', 'json'));
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
