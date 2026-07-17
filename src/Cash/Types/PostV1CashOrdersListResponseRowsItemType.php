<?php

namespace Nordlet\Cash\Types;

enum PostV1CashOrdersListResponseRowsItemType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
