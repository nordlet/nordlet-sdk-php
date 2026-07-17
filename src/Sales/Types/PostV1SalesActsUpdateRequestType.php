<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsUpdateRequestType: string
{
    case Goods = "goods";
    case Services = "services";
}
