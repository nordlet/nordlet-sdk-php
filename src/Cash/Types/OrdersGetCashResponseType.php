<?php

namespace Nordlet\Cash\Types;

enum OrdersGetCashResponseType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
