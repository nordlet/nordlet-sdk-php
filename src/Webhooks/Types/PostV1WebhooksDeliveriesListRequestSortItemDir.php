<?php

namespace Nordlet\Webhooks\Types;

enum PostV1WebhooksDeliveriesListRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
