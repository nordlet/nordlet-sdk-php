<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsLtGpm312ComputeRequestPayoutTiming: string
{
    case SameMonth = "same-month";
    case NextMonth = "next-month";
}
