<?php

namespace Nordlet\Cash\Types;

enum PostV1CashOrdersGetResponseType: string
{
    case Receipt = "receipt";
    case Disbursement = "disbursement";
}
