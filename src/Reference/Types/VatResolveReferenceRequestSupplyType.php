<?php

namespace Nordlet\Reference\Types;

enum VatResolveReferenceRequestSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
