
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cashier Dashboard') }}
        </h2>
    </x-slot>

    <!-- Add Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container my-5">
        <div class="row">
            <!-- Left Part: Table -->
            <div class="col-md-6">
                <h3 class="text-primary mb-4">Product Table</h3>
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Example Product</td>
                            <td>2</td>
                            <td>$10</td>
                        </tr>
                        <tr>
                            <td>Another Product</td>
                            <td>1</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>Another Product</td>
                            <td>1</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>Another Product</td>
                            <td>1</td>
                            <td>$20</td>
                        </tr>
                        <tr>
                            <td>Another Product</td>
                            <td>1</td>
                            <td>$20</td>
                        </tr>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td colspan="2"><strong>Total Price</strong></td>
                            <td><strong>$30</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Middle Part: Inputs and Buttons -->
            <div class="col-md-4">
                <h3 class="text-success mb-4">Actions</h3>
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" id="productName" class="form-control" placeholder="Enter product name">
                </div>
                <div class="mb-3">
                    <label for="productQuantity" class="form-label">Quantity</label>
                    <input type="number" id="productQuantity" class="form-control" placeholder="Enter quantity">
                </div>
                <button class="btn btn-primary me-2">Add</button>
                <button class="btn btn-success">Print</button>
            </div>

            <!-- Right Part: Product Card -->
            <div class="col-md-2">
                <h3 class="text-warning mb-4">Product Card</h3>
                <div class="card text-center shadow-lg">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Product Name</h5>
                        <p class="card-text text-muted">$25.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
