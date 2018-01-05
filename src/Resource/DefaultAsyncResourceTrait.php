<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait DefaultAsyncResourceTrait
{
    /**
     * Get `stdout` and `stderr` logs from a task.

     **Note**: This endpoint works only for services with the `json-file` or `journald` logging drivers.

     *
     * @param string $id         ID of the task
     * @param array  $parameters {
     *
     *     @var bool $details show task context and extra details provided to logs
     *     @var bool $follow return the logs as a stream

     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\TaskLogsNotFoundException
     * @throws \Docker\API\Exception\TaskLogsInternalServerErrorException
     * @throws \Docker\API\Exception\TaskLogsServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function taskLogs(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->addQueryParameter('details', false, ['bool'], false);
            $queryParam->addQueryParameter('follow', false, ['bool'], false);
            $queryParam->addQueryParameter('stdout', false, ['bool'], false);
            $queryParam->addQueryParameter('stderr', false, ['bool'], false);
            $queryParam->addQueryParameter('since', false, ['int'], 0);
            $queryParam->addQueryParameter('timestamps', false, ['bool'], false);
            $queryParam->addQueryParameter('tail', false, ['string'], 'all');
            $url = '/tasks/{id}/logs';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (101 === $response->getStatus()) {
                    return json_decode((yield $response->getBody()));
                }
                if (200 === $response->getStatus()) {
                    return json_decode((yield $response->getBody()));
                }
                if (404 === $response->getStatus()) {
                    throw new \Docker\API\Exception\TaskLogsNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatus()) {
                    throw new \Docker\API\Exception\TaskLogsInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatus()) {
                    throw new \Docker\API\Exception\TaskLogsServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }
}