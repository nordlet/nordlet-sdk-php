<?php

namespace Nordlet\Cash\Types;

enum OrdersListCashResponseRowsItemType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
