<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsStartBankRequestPsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
