<?php

namespace Nordlet\Audit\Types;

enum PostV1AuditListRequestSortItemDir: string
{
    case Asc = "asc";
    case Desc = "desc";
}
