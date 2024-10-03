<?php

// In this example, we'll have three subsystems: Inventory, Payment, and Shipping.
// We'll create a Facade to handle the complete process of placing an order.

// Subsystem 1: Product.
class Product {

    // Method to check the stock of an item.
    public function checkStock(string $item): bool {
        echo 'Checking stock for item: ' . $item . '<br>';
        return true;
    }

}

// Subsystem 2: Payment.
class Payment {

    // Method to process payment for the order.
    public function processPayment(float $payment): bool {
        echo 'Payment successful: $' . $payment . '<br>';
        return true;
    }

}

// Subsystem 3: Shipping.
class Shipping {

    // Method to handle shipping of the item.
    public function checkShipping(string $item) {
        echo 'Shipping item: ' . $item . '<br>';
    }

}

// Facade: PlaceOrder.
class PlaceOrder {

    private $product;
    private $payment;
    private $shipping;

    // Constructor initializes all subsystems.
    public function __construct() {
        $this->product = new Product();
        $this->payment = new Payment();
        $this->shipping = new Shipping();
    }

    // Method to handle the complete order process.
    public function processOrder(string $item, int $amount) {
        echo 'Placing order for ' . $item . '<br>';

        // Check if the item is in stock.
        if (!$this->product->checkStock($item)) {
            echo 'Item out of stock<br>';
            return;
        }

        // Process the payment.
        if (!$this->payment->processPayment($amount)) {
            echo 'Payment failed<br>';
            return;
        }

        // Ship the item.
        $this->shipping->checkShipping($item);

        // If everything is successful, confirm the order.
        echo 'Order placed successfully<br>';
    }

}

// Client code to test the facade.
function clientCode() {

    $client = new PlaceOrder();
    $client->processOrder('Laptop', 23000);

}
clientCode();
