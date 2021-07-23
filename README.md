# Backend task

Our client has more than 100 physical stores, which will be converted to mini warehouses. When order is placed online, each store will be responsible to ship products to customers.
Create an algorithm which will allocate responsibilities to stores with the least shipments required.

# Acceptance criteria
1. Stores are stored in the priority list. (Use priority when assigning single product)
2. If there are multiple stores which can deliver same products, responsible store should be chosen randomly. Example: Store 1 and Store 2 can ship Product 1 and Product 2 to customer. Algorithm should choose either Store 1 or Store 2. (Only when assigning more than one product)
3. Products without assigned store, should be removed from cart.
4. Use any PHP framework.
5. Algorithm performance is very important.
6. Code should be fully covered by Unit tests.
7. Upload code to github and share a link with us.

# Data examples

### [Store](https://github.com/adaptdk/sportmaster-backend-task/blob/main/DataExamples/Store/Store.php)
  1. Store ID (identifier)
  2. Store name
  3. Inventory list

### [Store product inventory item](https://github.com/adaptdk/sportmaster-backend-task/blob/main/DataExamples/Store/Store.php)
  1. Product sdk (identifier)
  2. Product sku (size identifier)
  3. Quantity

### [Cart](https://github.com/adaptdk/sportmaster-backend-task/blob/main/DataExamples/Cart/Cart.php)
  1. List of products in cart (NOTE: list is not grouped by quantity)

### [Cart product](https://github.com/adaptdk/sportmaster-backend-task/blob/main/DataExamples/Cart/Product.php)
  1. Product sdk (identifier)
  2. Product sku (size identifier)
  3. Store (responsible store for shipping the item)

**NOTE: These are only examples, improvisation is allowed.*

# Examples
1. Example Nr. 1 (Simple responsibility allocation - priority list)  (TODO, create example)
2. Example Nr. 2 (Random store allocation - when products could be grouped)  (TODO, create example)
3. Example Nr. 3......




