<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsUpdateResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
