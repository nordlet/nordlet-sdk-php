<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsSubmissionsRetryResponseStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
