<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsSubmissionsMarkRequestStatus: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
