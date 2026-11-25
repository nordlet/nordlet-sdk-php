<?php

namespace Nordlet\Reports\Types;

enum VatAccountsReportsResponseAccountsItemRulesItem: string
{
    case SalesVatPayable = "sales.vatPayable";
    case SalesOssVatPayable = "sales.ossVatPayable";
    case PurchasesVatReceivable = "purchases.vatReceivable";
}
