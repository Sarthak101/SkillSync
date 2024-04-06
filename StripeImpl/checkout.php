<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/dbconnection.php'; // Include your database connection file

$stripe_secret_key = "sk_test_51P24ufSFNMhoeFhC3Zucpbj1uMigOBINhgOGLujTqNLWos65dYFgIoMGbxI3ntiXNIAeC2hRd0zsaGhgClRHoFCZ00gyrOFpix";

\Stripe\Stripe::setApiKey($stripe_secret_key);

// Retrieve price from the form or database, for example
$price = $_POST['price'];
$personName =$_POST['empName'];
$desc =$_POST['description'];
// Create a Stripe Checkout Session
$checkout_session = \Stripe\Checkout\Session::create([
    "mode" => "payment",
    "success_url" => "http://localhost/skillsync/Stripeimpl/success.php",
    "cancel_url" => "http://localhost/skillsync/php/Customer/cust_explore.php",
    "line_items" => [
        [
            "price_data" => [
                "currency" => "inr",
                "unit_amount" => $price * 100, // Convert amount to cents
                "product_data" => [
                    "name" => "Skill Sync Service from " . $personName . " (" . $desc . ")"
                ]
            ],
            "quantity" => 1
        ]
    ]
]);

// Redirect the user to the checkout session
header("Location: " . $checkout_session->url);
exit;
?>
