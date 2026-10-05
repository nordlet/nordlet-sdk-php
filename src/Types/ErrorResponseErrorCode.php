<?php

namespace Nordlet\Types;

enum ErrorResponseErrorCode: string
{
    case Validation = "validation";
    case Unauthorized = "unauthorized";
    case Forbidden = "forbidden";
    case NotFound = "not_found";
    case Conflict = "conflict";
    case IdempotencyKeyReuse = "idempotency_key_reuse";
    case IdempotencyInProgress = "idempotency_in_progress";
    case RateLimited = "rate_limited";
    case PaymentRequired = "payment_required";
    case Internal = "internal";
}
