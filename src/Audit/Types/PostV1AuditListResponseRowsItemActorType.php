<?php

namespace Nordlet\Audit\Types;

enum PostV1AuditListResponseRowsItemActorType: string
{
    case User = "user";
    case ApiKey = "api_key";
    case System = "system";
}
