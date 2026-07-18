<?php

namespace Nordlet\Ledger\Types;

enum PostV1LedgerPostingRulesUpdateRequestRulesItemKey: string
{
    case SalesReceivable = "sales.receivable";
    case SalesRevenueProducts = "sales.revenueProducts";
    case SalesRevenueServices = "sales.revenueServices";
    case SalesVatPayable = "sales.vatPayable";
    case SalesAdvancesReceived = "sales.advancesReceived";
    case PurchasesPayables = "purchases.payables";
    case PurchasesVatReceivable = "purchases.vatReceivable";
    case PurchasesGoodsForResale = "purchases.goodsForResale";
    case PurchasesDefaultExpense = "purchases.defaultExpense";
    case InventoryCogs = "inventory.cogs";
    case InventoryStock = "inventory.stock";
    case BankFxGain = "bank.fxGain";
    case BankFxLoss = "bank.fxLoss";
    case SettlementsFees = "settlements.fees";
    case SettlementsCommissionRevenue = "settlements.commissionRevenue";
    case SettlementsSellerPayable = "settlements.sellerPayable";
    case SettlementsSuspense = "settlements.suspense";
    case RevenueDeferredIncome = "revenue.deferredIncome";
    case RevenueContractAsset = "revenue.contractAsset";
    case RevenueRefundLiability = "revenue.refundLiability";
}
