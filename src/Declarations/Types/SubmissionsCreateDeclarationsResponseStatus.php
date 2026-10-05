<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsCreateDeclarationsResponseStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
