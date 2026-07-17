<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsGetResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
