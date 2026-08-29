<?php

namespace Nordlet\Reference\Types;

enum PostV1ReferenceEuVatRatesImportsListResponseRowsItemTrigger: string
{
    case Seed = "seed";
    case Scheduled = "scheduled";
    case Manual = "manual";
}
