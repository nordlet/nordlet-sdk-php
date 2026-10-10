<?php

namespace Nordlet\Declarations\Types;

enum EuDigitalReportingListDeclarationsResponseTransactionsItemDirection: string
{
    case Supply = "supply";
    case Acquisition = "acquisition";
}
