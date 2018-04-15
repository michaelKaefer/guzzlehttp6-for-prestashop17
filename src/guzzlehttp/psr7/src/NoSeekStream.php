<?php
namespace MichaelKaefer\GuzzleHttp6ForPrestashop17\GuzzleHttp\Psr7;

use MichaelKaefer\GuzzleHttp6ForPrestashop17\Psr\Http\Message\StreamInterface;

/**
 * Stream decorator that prevents a stream from being seeked
 */
class NoSeekStream implements StreamInterface
{
    use StreamDecoratorTrait;

    public function seek($offset, $whence = SEEK_SET)
    {
        throw new \RuntimeException('Cannot seek a NoSeekStream');
    }

    public function isSeekable()
    {
        return false;
    }
}
