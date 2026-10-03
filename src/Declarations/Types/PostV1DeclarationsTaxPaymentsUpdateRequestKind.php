<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsTaxPaymentsUpdateRequestKind: string
{
    case Advance = "advance";
    case Withholding = "withholding";
    case Final_ = "final";
    case Refund = "refund";
}
