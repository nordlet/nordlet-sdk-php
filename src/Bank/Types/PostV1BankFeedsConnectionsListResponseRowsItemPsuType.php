<?php

namespace Nordlet\Bank\Types;

enum PostV1BankFeedsConnectionsListResponseRowsItemPsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
