<?php

namespace Nordlet\Bank\Types;

enum FeedsConnectionsListBankResponseRowsItemPsuType: string
{
    case Business = "business";
    case Personal = "personal";
}
