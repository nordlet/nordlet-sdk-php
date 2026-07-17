<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsCreateRequestType: string
{
    case Goods = "goods";
    case Services = "services";
}
