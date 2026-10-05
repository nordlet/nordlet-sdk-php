<?php

namespace Nordlet\Cash\Types;

enum OrdersCreateCashResponseType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
