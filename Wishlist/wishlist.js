// Add your JavaScript code for handling wishlist interactions
document.addEventListener('DOMContentLoaded', function() {
    // Remove item from wishlist
    var removeButtons = document.getElementsByClassName('remove-btn');
    Array.from(removeButtons).forEach(function(button) {
        button.addEventListener('click', function() {
            var itemId = this.getAttribute('data-id');
            removeItemFromWishlist(itemId);
        });
    });

    // Add item to wishlist
    var addToWishlistForm = document.getElementById('add-to-wishlist-form');
    addToWishlistForm.addEventListener('submit', function(event) {
        event.preventDefault();
        var productName = this.querySelector('input[name="product_name"]').value;
        addItemToWishlist(productName);
        this.reset();
    });

    // Function to remove item from wishlist using AJAX
    function removeItemFromWishlist(itemId) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'wishlist_controller.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Item removed successfully, update the wishlist display
                // You can add your own logic here to update the UI
            }
        };
        xhr.send('action=remove&item_id=' + itemId);
    }

    // Function to add item to wishlist using AJAX
    function addItemToWishlist(productName) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'wishlist_controller.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Item added successfully, update the wishlist display
                // You can add your own logic here to update the UI
            }
        };
        xhr.send('action=add&product_name=' + encodeURIComponent(productName));
    }
});