<?php

namespace Nordlet\Cash\Types;

enum PostV1CashOrdersCreateResponseType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
