<?php

namespace Nordlet\Reference\Types;

enum PostV1ReferenceVatResolveRequestSupplyType: string
{
    case Goods = "goods";
    case Services = "services";
    case Digital = "digital";
}
