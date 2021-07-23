<?php

namespace App\DataExamples\Store;

/**
 * Class Inventory.
 *
 * @package App\DataExamples\Store
 */
class Inventory
{

    /**
     * Product identifier.
     *
     * @var int
     */
    private int $sdk;

    /**
     * Product size identifier.
     *
     * @var string
     */
    private string $sku;

    /**
     * Available stock in store.
     *
     * @var int
     */
    private int $stock;

    /**
     * StoreInventoryItem constructor.
     *
     * @param int $sdk
     *  Product identifier.
     * @param string $sku
     *  Product size identifier.
     * @param int $stock
     *  Available stock.
     */
    public function __construct(int $sdk, string $sku, int $stock)
    {
        $this->sdk = $sdk;
        $this->sku = $sku;
        $this->stock = $stock;
    }

    /**
     * Get product identifier.
     *
     * @return int
     *  Product identifier.
     */
    public function getSdk(): int
    {
        return $this->sdk;
    }

    /**
     * Get product size identifier.
     *
     * @return string
     *  Product size identifier.
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * Get product stock.
     *
     * @return int
     *  Available stock.
     */
    public function getStock(): int
    {
        return $this->stock;
    }
}
