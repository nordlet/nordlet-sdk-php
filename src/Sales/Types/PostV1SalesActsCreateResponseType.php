<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsCreateResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
