<?php

namespace Nordlet\Declarations\Types;

enum RoEtransportStatusDeclarationsResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
