<?php

namespace Nordlet\Declarations\Types;

enum RoEtransportSubmitDeclarationsResponseState: string
{
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
