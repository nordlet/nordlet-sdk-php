<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsCompleteResponseStatus: string
{
    case Pending = "pending";
    case Active = "active";
    case Expired = "expired";
    case Revoked = "revoked";
    case Error = "error";
}
