<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsGetBankResponseStatus: string
{
    case Pending = "pending";
    case Active = "active";
    case Expired = "expired";
    case Revoked = "revoked";
    case Error = "error";
}
