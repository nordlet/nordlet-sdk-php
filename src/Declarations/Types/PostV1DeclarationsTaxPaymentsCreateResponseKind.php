<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsTaxPaymentsCreateResponseKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
