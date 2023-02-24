<?php

namespace RyanChandler\LaravelCloudflareTurnstile\Responses;

use Illuminate\Contracts\Support\Arrayable;

class SiteverifyResponse implements Arrayable
{
    public function __construct(
        public bool $success,
        public array $errorCodes,
    ) {
    }

    public function toArray(): array
    {
        return [
            'success' => $this->success,
            'error-codes' => $this->errorCodes,
        ];
    }
}
