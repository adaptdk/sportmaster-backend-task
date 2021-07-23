# Backend task

Our client has more than 100 physical stores, which will be converted to mini warehouses. Each store will be responsible to ship products to customers.
Create an algorithm which will allocate responsibilities to stores with least shipments required.

# Acceptance criterias
1. Stores are stored in the priority list. (Only when assigning single product)
3. If there is multiple stores which can deliver same products, responsible store should be chosen randomly. Example: Store 1 and Store 2 can ship Product 1 and Product 2 to customer. Algorithm should chose either Store 1 or Store 2. (Only when assigning more than one product)
4. Use any PHP framework.
5. Algorithm preformance is very import.
6. Code should be fully covered by Unit tests.
7. Upload code to github and share a link with us.

# Data examples

### Store (TODO, create object)
  1. Store ID (identifier)
  2. Store name
  3. Inventory list

### Store product inventory item  (TODO, create object)
  1. Product sdk (identifier)
  2. Product sku (size identifier)
  3. Quantity

### Cart  (TODO, create object)
  1. List of products in cart (NOTE: list is not grouped by quantity)

### Product in cart  (TODO, create object)
  1. Product sdk (identifier)
  2. Product sku (size identifier)
  3. Store (responsible store for shipping the item)

# Examples
1. Example Nr. 1 (Simple responsability alocation - priority list)  (TODO, create example)
2. Example Nr. 2 (Random store allocation - when products could be grouped)  (TODO, create example)
3. Example Nr. 3......




