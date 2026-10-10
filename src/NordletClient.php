<?php

namespace Nordlet;

use Nordlet\Reference\ReferenceClient;
use Nordlet\Partners\PartnersClient;
use Nordlet\Leads\LeadsClient;
use Nordlet\Catalog\CatalogClient;
use Nordlet\Sales\SalesClient;
use Nordlet\OperationTypes\OperationTypesClient;
use Nordlet\DocumentSeries\DocumentSeriesClient;
use Nordlet\Purchases\PurchasesClient;
use Nordlet\Capture\CaptureClient;
use Nordlet\Peppol\PeppolClient;
use Nordlet\Declarations\DeclarationsClient;
use Nordlet\Ledger\LedgerClient;
use Nordlet\Officers\OfficersClient;
use Nordlet\PlatformSellers\PlatformSellersClient;
use Nordlet\Migration\MigrationClient;
use Nordlet\Assets\AssetsClient;
use Nordlet\Hr\HrClient;
use Nordlet\Fleet\FleetClient;
use Nordlet\Payroll\PayrollClient;
use Nordlet\Agreements\AgreementsClient;
use Nordlet\Inventory\InventoryClient;
use Nordlet\Production\ProductionClient;
use Nordlet\Ecommerce\EcommerceClient;
use Nordlet\Cash\CashClient;
use Nordlet\Projects\ProjectsClient;
use Nordlet\Transport\TransportClient;
use Nordlet\Pos\PosClient;
use Nordlet\Calendar\CalendarClient;
use Nordlet\Audit\AuditClient;
use Nordlet\Webhooks\WebhooksClient;
use Nordlet\Bank\BankClient;
use Nordlet\Files\FilesClient;
use Nordlet\Reports\ReportsClient;
use Nordlet\Consolidation\ConsolidationClient;
use Nordlet\Public_\PublicClient;
use Nordlet\Billing\BillingClient;
use Nordlet\Account\AccountClient;
use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;

class NordletClient
{
    /**
     * @var ReferenceClient $reference
     */
    public ReferenceClient $reference;

    /**
     * @var PartnersClient $partners
     */
    public PartnersClient $partners;

    /**
     * @var LeadsClient $leads
     */
    public LeadsClient $leads;

    /**
     * @var CatalogClient $catalog
     */
    public CatalogClient $catalog;

    /**
     * @var SalesClient $sales
     */
    public SalesClient $sales;

    /**
     * @var OperationTypesClient $operationTypes
     */
    public OperationTypesClient $operationTypes;

    /**
     * @var DocumentSeriesClient $documentSeries
     */
    public DocumentSeriesClient $documentSeries;

    /**
     * @var PurchasesClient $purchases
     */
    public PurchasesClient $purchases;

    /**
     * @var CaptureClient $capture
     */
    public CaptureClient $capture;

    /**
     * @var PeppolClient $peppol
     */
    public PeppolClient $peppol;

    /**
     * @var DeclarationsClient $declarations
     */
    public DeclarationsClient $declarations;

    /**
     * @var LedgerClient $ledger
     */
    public LedgerClient $ledger;

    /**
     * @var OfficersClient $officers
     */
    public OfficersClient $officers;

    /**
     * @var PlatformSellersClient $platformSellers
     */
    public PlatformSellersClient $platformSellers;

    /**
     * @var MigrationClient $migration
     */
    public MigrationClient $migration;

    /**
     * @var AssetsClient $assets
     */
    public AssetsClient $assets;

    /**
     * @var HrClient $hr
     */
    public HrClient $hr;

    /**
     * @var FleetClient $fleet
     */
    public FleetClient $fleet;

    /**
     * @var PayrollClient $payroll
     */
    public PayrollClient $payroll;

    /**
     * @var AgreementsClient $agreements
     */
    public AgreementsClient $agreements;

    /**
     * @var InventoryClient $inventory
     */
    public InventoryClient $inventory;

    /**
     * @var ProductionClient $production
     */
    public ProductionClient $production;

    /**
     * @var EcommerceClient $ecommerce
     */
    public EcommerceClient $ecommerce;

    /**
     * @var CashClient $cash
     */
    public CashClient $cash;

    /**
     * @var ProjectsClient $projects
     */
    public ProjectsClient $projects;

    /**
     * @var TransportClient $transport
     */
    public TransportClient $transport;

    /**
     * @var PosClient $pos
     */
    public PosClient $pos;

    /**
     * @var CalendarClient $calendar
     */
    public CalendarClient $calendar;

    /**
     * @var AuditClient $audit
     */
    public AuditClient $audit;

    /**
     * @var WebhooksClient $webhooks
     */
    public WebhooksClient $webhooks;

    /**
     * @var BankClient $bank
     */
    public BankClient $bank;

    /**
     * @var FilesClient $files
     */
    public FilesClient $files;

    /**
     * @var ReportsClient $reports
     */
    public ReportsClient $reports;

    /**
     * @var ConsolidationClient $consolidation
     */
    public ConsolidationClient $consolidation;

    /**
     * @var PublicClient $public_
     */
    public PublicClient $public_;

    /**
     * @var BillingClient $billing
     */
    public BillingClient $billing;

    /**
     * @var AccountClient $account
     */
    public AccountClient $account;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param string $token The token to use for authentication.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        string $token,
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'Authorization' => "Bearer $token",
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Nordlet',
        ];

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->reference = new ReferenceClient($this->client, $this->options);
        $this->partners = new PartnersClient($this->client, $this->options);
        $this->leads = new LeadsClient($this->client, $this->options);
        $this->catalog = new CatalogClient($this->client, $this->options);
        $this->sales = new SalesClient($this->client, $this->options);
        $this->operationTypes = new OperationTypesClient($this->client, $this->options);
        $this->documentSeries = new DocumentSeriesClient($this->client, $this->options);
        $this->purchases = new PurchasesClient($this->client, $this->options);
        $this->capture = new CaptureClient($this->client, $this->options);
        $this->peppol = new PeppolClient($this->client, $this->options);
        $this->declarations = new DeclarationsClient($this->client, $this->options);
        $this->ledger = new LedgerClient($this->client, $this->options);
        $this->officers = new OfficersClient($this->client, $this->options);
        $this->platformSellers = new PlatformSellersClient($this->client, $this->options);
        $this->migration = new MigrationClient($this->client, $this->options);
        $this->assets = new AssetsClient($this->client, $this->options);
        $this->hr = new HrClient($this->client, $this->options);
        $this->fleet = new FleetClient($this->client, $this->options);
        $this->payroll = new PayrollClient($this->client, $this->options);
        $this->agreements = new AgreementsClient($this->client, $this->options);
        $this->inventory = new InventoryClient($this->client, $this->options);
        $this->production = new ProductionClient($this->client, $this->options);
        $this->ecommerce = new EcommerceClient($this->client, $this->options);
        $this->cash = new CashClient($this->client, $this->options);
        $this->projects = new ProjectsClient($this->client, $this->options);
        $this->transport = new TransportClient($this->client, $this->options);
        $this->pos = new PosClient($this->client, $this->options);
        $this->calendar = new CalendarClient($this->client, $this->options);
        $this->audit = new AuditClient($this->client, $this->options);
        $this->webhooks = new WebhooksClient($this->client, $this->options);
        $this->bank = new BankClient($this->client, $this->options);
        $this->files = new FilesClient($this->client, $this->options);
        $this->reports = new ReportsClient($this->client, $this->options);
        $this->consolidation = new ConsolidationClient($this->client, $this->options);
        $this->public_ = new PublicClient($this->client, $this->options);
        $this->billing = new BillingClient($this->client, $this->options);
        $this->account = new AccountClient($this->client, $this->options);
    }
}
