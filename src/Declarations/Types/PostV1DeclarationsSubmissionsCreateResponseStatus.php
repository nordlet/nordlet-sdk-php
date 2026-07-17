<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsSubmissionsCreateResponseStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
