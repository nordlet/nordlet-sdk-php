<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsGetResponsePsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
