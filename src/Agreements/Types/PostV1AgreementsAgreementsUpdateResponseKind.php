<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsUpdateResponseKind: string
{
    case Customer = "customer";
    case Supplier = "supplier";
    case Employment = "employment";
    case Bank = "bank";
    case Lease = "lease";
    case Insurance = "insurance";
    case Other = "other";
}
