<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsListDeclarationsResponseRowsItemStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
