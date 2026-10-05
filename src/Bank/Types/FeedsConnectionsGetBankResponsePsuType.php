<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsGetBankResponsePsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
