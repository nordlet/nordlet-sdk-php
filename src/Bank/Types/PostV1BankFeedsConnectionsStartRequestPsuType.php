<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsStartRequestPsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
