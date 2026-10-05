<?php

namespace Nordlet\Reports\Types;

enum JobsCreateReportsRequestFormatsItem: string
{
    case Json = "json";
    case Xlsx = "xlsx";
    case Pdf = "pdf";
}
