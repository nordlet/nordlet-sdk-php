<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsItSdiPurchaseSendResponseStatus: string
{
    case Sent = "sent";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
