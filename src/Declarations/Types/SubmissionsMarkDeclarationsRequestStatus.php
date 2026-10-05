<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsMarkDeclarationsRequestStatus: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
