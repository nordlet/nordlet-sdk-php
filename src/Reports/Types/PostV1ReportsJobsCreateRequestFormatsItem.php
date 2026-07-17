<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsJobsCreateRequestFormatsItem: string
{
    case Json = "json";
    case Xlsx = "xlsx";
    case Pdf = "pdf";
}
