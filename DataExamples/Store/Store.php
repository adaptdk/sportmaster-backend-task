<?php

namespace App\DataExamples\Store;

/**
 * Class Store.
 *
 * @package App\DataExamples\Store
 */
class Store
{

    /**
     * Store id.
     *
     * @var int
     */
    private int $id;

    /**
     * Store name.
     *
     * @var string
     */
    private string $name;

    /**
     * Store inventory items.
     *
     * @var Inventory[]
     */
    private array $inventory;

    /**
     * Store constructor.
     *
     * @param int $id
     *  Store id.
     * @param string $name
     *  Store name.
     * @param Inventory[] $inventory
     *  Store inventory.
     */
    public function __construct(int $id, string $name, array $inventory)
    {
        $this->id = $id;
        $this->name = $name;
        $this->inventory = $inventory;
    }

    /**
     * Get store id.
     *
     * @return int
     *  Store iid.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get store name.
     *
     * @return string
     *  Store name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get store inventory.
     *
     * @return Inventory[]
     *  Store inventory.
     */
    public function getInventory(): array
    {
        return $this->inventory;
    }
}
