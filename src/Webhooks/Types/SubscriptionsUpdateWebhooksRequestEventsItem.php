<?php

namespace Nordlet\Webhooks\Types;

enum SubscriptionsUpdateWebhooksRequestEventsItem: string
{
    case AgreementInvoiceGenerated = "agreement.invoice_generated";
    case BankFeedSynced = "bank_feed.synced";
    case FilingFailed = "filing.failed";
    case FilingRejected = "filing.rejected";
    case GoodsReceiptPosted = "goods_receipt.posted";
    case IntercompanyInvoiceMirrored = "intercompany.invoice_mirrored";
    case ItemCreated = "item.created";
    case ItemDeleted = "item.deleted";
    case ItemUpdated = "item.updated";
    case LeadConverted = "lead.converted";
    case LeadCreated = "lead.created";
    case PartnerInquiryCreated = "partner_inquiry.created";
    case PayrollRunApproved = "payroll_run.approved";
    case PosReportCreated = "pos_report.created";
    case PriceListUpdated = "price_list.updated";
    case PurchaseInvoicePaid = "purchase_invoice.paid";
    case PurchaseInvoiceRegistered = "purchase_invoice.registered";
    case PurchaseOrderApproved = "purchase_order.approved";
    case PurchaseOrderReceived = "purchase_order.received";
    case RefundLiabilityActual = "refund_liability.actual";
    case RefundLiabilityTruedUp = "refund_liability.trued_up";
    case ReportCompleted = "report.completed";
    case ReportFailed = "report.failed";
    case RevenueRecognitionModified = "revenue_recognition.modified";
    case RevenueRecognitionPosted = "revenue_recognition.posted";
    case SaleInvoiceEinvoiceSent = "sale_invoice.einvoice_sent";
    case SaleInvoiceIssued = "sale_invoice.issued";
    case SaleInvoicePaid = "sale_invoice.paid";
    case SaleInvoicePeppolSent = "sale_invoice.peppol_sent";
    case SaleInvoiceSent = "sale_invoice.sent";
    case SalesOrderCreated = "sales_order.created";
    case SalesOrderFulfilled = "sales_order.fulfilled";
    case SettlementImported = "settlement.imported";
    case SettlementPosted = "settlement.posted";
    case SettlementUpdated = "settlement.updated";
    case StockChanged = "stock.changed";
    case StockReorderNeeded = "stock.reorder_needed";
    case VatReviewOpened = "vat_review.opened";
    case VatReviewResolved = "vat_review.resolved";
    case All = "*";
}
