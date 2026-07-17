<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesActsCancelResponseType: string
{
    case Goods = "goods";
    case Services = "services";
}
