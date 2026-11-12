<?php

namespace Nordlet\Reference\Types;

enum VatResolveReferenceRequestSide: string
{
    case Sale = "sale";
    case Purchase = "purchase";
}
