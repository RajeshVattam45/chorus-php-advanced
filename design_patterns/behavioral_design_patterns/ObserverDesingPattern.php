<?php

// Payment strategy interface defining a common pay method.
interface PaymentStrategy {
    public function pay($amount);
}

// CreditCard payment strategy.
class CreditCardPayment implements PaymentStrategy {

    public function pay($amount) {
        echo "Paid $" . $amount . " using Credit Card.<br>";
    }

}

// PayPal payment strategy.
class PayPalPayment implements PaymentStrategy {

    public function pay($amount) {
        echo "Paid $" . $amount . " using PayPal.<br>";
    }

}

// ShoppingCart class that can use any payment strategy.
class ShoppingCart {
    private $paymentStrategy;

    // Set the payment strategy.
    public function setPaymentStrategy(PaymentStrategy $strategy) {
        $this->paymentStrategy = $strategy;
    }

    // Pay the specified amount using the selected strategy.
    public function checkout($amount) {
        $this->paymentStrategy->pay($amount);
    }
}

// Create a shopping cart instance.
$cart = new ShoppingCart();

// Pay $100 using Credit Card.
$cart->setPaymentStrategy(new CreditCardPayment());
$cart->checkout(100);

// Pay $200 using PayPal.
$cart->setPaymentStrategy(new PayPalPayment());
$cart->checkout(200);
