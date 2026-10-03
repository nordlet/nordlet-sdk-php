<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsTaxPaymentsUpdateResponseKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
