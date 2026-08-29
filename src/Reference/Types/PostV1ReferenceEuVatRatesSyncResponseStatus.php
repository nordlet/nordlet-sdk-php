<?php

namespace Nordlet\Reference\Types;

enum PostV1ReferenceEuVatRatesSyncResponseStatus: string
{
    case Running = "running";
    case Succeeded = "succeeded";
    case Failed = "failed";
}
