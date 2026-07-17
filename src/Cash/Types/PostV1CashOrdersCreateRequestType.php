<?php

namespace Nordlet\Cash\Types;

enum PostV1CashOrdersCreateRequestType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
