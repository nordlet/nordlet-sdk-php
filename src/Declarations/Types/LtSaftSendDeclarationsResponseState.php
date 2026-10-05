<?php

namespace Nordlet\Declarations\Types;

enum LtSaftSendDeclarationsResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
