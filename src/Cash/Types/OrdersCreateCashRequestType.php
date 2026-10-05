<?php

namespace Nordlet\Cash\Types;

enum OrdersCreateCashRequestType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
