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
                <table class="table table-bordered table-striped" id="productTable">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dynamic rows will be added here -->
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td colspan="2"><strong>Total Price</strong></td>
                            <td><strong id="totalPrice">0 DA</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
    
            <!-- Middle Part: Inputs and Buttons -->
            <div class="col-md-4">
                <h3 class="text-success mb-4">Actions</h3>
                <form id="productForm">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" id="productName" class="form-control" placeholder="Enter product name" required>
                    </div>
                    <div class="mb-3">
                        <label for="productQuantity" class="form-label">Quantity</label>
                        <input type="number" id="productQuantity" class="form-control" placeholder="Enter quantity" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Price</label>
                        <input type="number" id="productPrice" class="form-control" placeholder="Enter price" required>
                    </div>
                    <button type="button" class="btn btn-primary me-2" onclick="addProduct()">Add</button>
                    <button type="button" class="btn btn-success" onclick="generateBill()">Print</button>
                </form>
            </div>
    
            <!-- Right Part: Product Card -->
            <div class="col-md-2">
                <h3 class="text-warning mb-4">Product Card</h3>
                <div class="card text-center shadow-lg">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title text-dark">Product Name</h5>
                        <p class="card-text text-muted" id="cardProductPrice">25.00 DA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hidden Printable Bill Section -->
    <div id="printableBill" style="display: none; padding: 20px; border: 1px solid #ccc; margin-top: 20px; width: 300px;">
        <h4 class="text-center">ENPEI MARKET</h4>
        <hr>
        
        <div id="billContent">
            <!-- Bill content will be populated by JavaScript -->
        </div>
       
    </div>
    
    <script>
        let totalPrice = 0;
    
        // Function to add product to the table
        function addProduct() {
            const productName = document.getElementById('productName').value;
            const productQuantity = parseInt(document.getElementById('productQuantity').value);
            const productPrice = parseFloat(document.getElementById('productPrice').value);
    
            if (productName && productQuantity && productPrice) {
                // Create a new row in the table
                const tableBody = document.getElementById('productTable').getElementsByTagName('tbody')[0];
                const row = tableBody.insertRow();
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);
                const cell3 = row.insertCell(2);
    
                // Set the row data
                cell1.textContent = productName;
                cell2.textContent = productQuantity;
                cell3.textContent = `${(productQuantity * productPrice).toFixed(2)} DA`;
    
                // Update the total price
                totalPrice += productQuantity * productPrice;
                document.getElementById('totalPrice').textContent = `${totalPrice.toFixed(2)} DA`;
    
                // Clear the input fields
                document.getElementById('productName').value = '';
                document.getElementById('productQuantity').value = '';
                document.getElementById('productPrice').value = '';
            } else {
                alert('Please fill out all fields.');
            }
        }
    
        // Function to generate the printable bill
        function generateBill() {
            // Grab the table rows
            const tableRows = document.getElementById('productTable').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    
            let billContent = `
                <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">
                    <thead>
                        <tr>
                            <th style=" padding: 8px; text-align: left;">PRODUCT</th>
                            <th style=" padding: 8px; text-align: center;">QTY</th>
                            <th style=" padding: 8px; text-align: right;">U.P</th>
                            <th style=" padding: 8px; text-align: right;">Total</th>
                        </tr>
                        <hr>
                    </thead>
                    <tbody>
            `;

            let total = 0;

            // Loop through the rows and format the bill
            for (let row of tableRows) {
                const cells = row.getElementsByTagName('td');
                const productName = cells[0].textContent;
                const quantity = parseInt(cells[1].textContent);
                const price = parseFloat(cells[2].textContent.replace(' DA', '').replace('$', ''));

                billContent += `
                    <tr>
                        <td style=" padding: 5px; text-align: left;">${productName}</td>
                        <td style=" padding: 5px; text-align: center;">${quantity}</td>
                        <td style=" padding: 5px; text-align: right;">${price.toFixed(2)} DA</td>
                        <td style=" padding: 5px; text-align: right;">${(quantity * price).toFixed(2)} DA</td>
                    </tr>
                `;
                total += quantity * price;
            }

            // Close the table and add total
            billContent += `
                    </tbody>
                </table>
                <hr>
                <div style="text-align: right; font-weight: bold;">
                    Total: ${total.toFixed(2)} DA
                </div>
            `;

            // Set the content and total of the bill
            document.getElementById('billContent').innerHTML = billContent;

            // Show the printable bill and hide the table
            document.getElementById('printableBill').style.display = 'block';

            // Optionally, auto-trigger the print dialog
            window.print();
        }

    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>
