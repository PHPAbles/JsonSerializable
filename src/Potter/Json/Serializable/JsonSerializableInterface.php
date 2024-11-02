<?php

declare(strict_types=1);

namespace Potter\Json\Serializable;

use JsonSerializable;

interface JsonSerializableInterface extends JsonSerializeable
{
    public function jsonSerialize(): mixed;
}
