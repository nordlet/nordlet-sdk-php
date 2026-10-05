<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsRetryDeclarationsResponseStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
