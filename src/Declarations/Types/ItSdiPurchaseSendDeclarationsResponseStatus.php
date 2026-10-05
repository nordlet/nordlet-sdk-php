<?php

namespace Nordlet\Declarations\Types;

enum ItSdiPurchaseSendDeclarationsResponseStatus: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
