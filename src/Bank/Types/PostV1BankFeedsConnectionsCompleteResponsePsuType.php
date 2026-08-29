<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsCompleteResponsePsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
