document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("checkout-form");
    const resultDiv = document.getElementById("checkout-details");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const product = form.elements.product.value;
        const quantity = form.elements.quantity.value;
        const name = form.elements.name.value;
        const contact = form.elements.contact.value;
        const address = form.elements.address.value;
        const paymentMethod = form.elements["payment-method"].value;

        const resultHTML = `
            <p>Product: ${product}</p>
            <p>Quantity: ${quantity}</p>
            <p>Name: ${name}</p>
            <p>Contact Number: ${contact}</p>
            <p>Address: ${address}</p>
            <p>Payment Method: ${paymentMethod}</p>
        `;

        resultDiv.innerHTML = resultHTML;
        form.reset();
    });
});
