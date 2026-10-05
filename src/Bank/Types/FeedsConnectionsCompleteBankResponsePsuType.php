<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsCompleteBankResponsePsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
