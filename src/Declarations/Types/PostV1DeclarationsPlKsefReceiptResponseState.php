<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsPlKsefReceiptResponseState: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
