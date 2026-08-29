<?php

namespace Nordlet\Reference\Types;

enum PostV1ReferenceEuVatRatesImportsListResponseRowsItemStatus: string
{
    case Running = "running";
    case Succeeded = "succeeded";
    case Failed = "failed";
}
