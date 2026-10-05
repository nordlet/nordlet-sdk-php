<?php

namespace Nordlet\Declarations\Types;

enum PlKsefReceiptDeclarationsResponseState: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
