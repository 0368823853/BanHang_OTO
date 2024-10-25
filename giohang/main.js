let cart = [];

        function addToCart(productName, price) {
            const product = {
                name: productName,
                price: price,
                quantity: 1
            };

            // Thêm sản phẩm vào giỏ hàng
            cart.push(product);

            // Cập nhật giao diện giỏ hàng
            updateCartUI();
        }

        function updateCartUI() {
            const cartItemsElement = document.getElementById('cart-items');
            cartItemsElement.innerHTML = '';

            cart.forEach((product, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${product.name}</td>
                    <td>${product.quantity}</td>
                    <td>$${product.price}</td>
                    <td>$${product.price * product.quantity}</td>
                    <td><button onclick="removeItem(${index})">Xóa</button></td>
                `;
                cartItemsElement.appendChild(row);
            });

            updateTotal();
        }

        function removeItem(index) {
            // Code để xóa sản phẩm khỏi giỏ hàng
            cart.splice(index, 1);

            // Cập nhật giao diện giỏ hàng
            updateCartUI();
        }

        function updateTotal() {
            const totalElement = document.getElementById('total');
            const totalPrice = cart.reduce((acc, product) => acc + product.price * product.quantity, 0);
            totalElement.textContent = `$${totalPrice.toFixed(2)}`;
        }

        function applyCoupon() {
            // Code để áp dụng mã giảm giá
            // Cập nhật giao diện giỏ hàng
        }

        function showQuickView(product) {
            // Code để hiển thị xem nhanh
            // Hiển thị modal với thông tin sản phẩm
        }

        document.getElementById('checkoutForm').addEventListener('submit', function(event) {
            event.preventDefault();
            // Code xử lý thanh toán
        });