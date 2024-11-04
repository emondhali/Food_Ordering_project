document.addEventListener('DOMContentLoaded', function () {
    const orderNowButtons = document.querySelectorAll('.order-now-btn');

    orderNowButtons.forEach(button => {
        button.addEventListener('click', function () {
            const menuItem = button.closest('.menu-item');
            const itemName = menuItem.getAttribute('data-name');
            const itemPrice = menuItem.getAttribute('data-price');

            // Fill in the "Your Order" input with the item name
            document.getElementById('order-item').value = itemName;

            // Scroll to the "Order Now" section
            document.getElementById('Order').scrollIntoView({ behavior: 'smooth' });
        });
    });
});
