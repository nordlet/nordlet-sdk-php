<?php

namespace Nordlet\Billing\Types;

enum UsageListBillingResponseRowsItemMetric: string
{
    case ApiRequest = "api_request";
    case OcrPage = "ocr_page";
    case FileStorageBytes = "file_storage_bytes";
    case DatabaseBytes = "database_bytes";
}
