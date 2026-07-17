<?php

namespace Nordlet\Webhooks\Types;

enum PostV1WebhooksSubscriptionsListRequestFilterItemOp: string
{
    case Eq = "eq";
    case Ne = "ne";
    case Contains = "contains";
    case Gte = "gte";
    case Lte = "lte";
    case In = "in";
}
