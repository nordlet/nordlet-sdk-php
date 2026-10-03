<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsTaxPaymentsCreateRequestKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
