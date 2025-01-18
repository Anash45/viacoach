<?php
session_start();
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer via Composer autoload

$info = '';
// print_r($_REQUEST);
if (isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
    // Retrieve form data with fallback defaults
    $name = $_REQUEST['name'] ?? null;
    $email = $_REQUEST['email'] ?? null;
    $phone = $_REQUEST['phone'] ?? null;
    $hire_reason = $_REQUEST['hire_reason'] ?? null;
    $from = $_REQUEST['from'] ?? null;
    $from_lat = $_REQUEST['from_lat'] ?? null;
    $from_lng = $_REQUEST['from_lng'] ?? null;
    $to = $_REQUEST['to'] ?? null;
    $to_lat = $_REQUEST['to_lat'] ?? null;
    $to_lng = $_REQUEST['to_lng'] ?? null;
    $pickup_date = $_REQUEST['pickup_date'] ?? null;
    $pickup_time = $_REQUEST['pickup_time'] ?? null;
    $return_dropoff = $_REQUEST['return_dropoff'] ?? null;
    $return_lat = $_REQUEST['return_lat'] ?? null;
    $return_lng = $_REQUEST['return_lng'] ?? null;
    $return_dropoff_date = $_REQUEST['return_dropoff_date'] ?? null;
    $return_dropoff_time = $_REQUEST['return_dropoff_time'] ?? null;
    $passengers = $_REQUEST['passengers'] ?? 0;
    $return_passengers = $_REQUEST['return_passengers'] ?? 0;
    $vehicle_size = $_REQUEST['vehicle_size'] ?? null;
    $extra_stops = $_REQUEST['extra_stops'] ?? null;
    $cabin_bags = $_REQUEST['cabin_bags'] ?? 0;
    $luggage_bags = $_REQUEST['luggage_bags'] ?? 0;
    $additional_info = $_REQUEST['additional_info'] ?? null;

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;

    // Build Google Maps links
    $from_map_link = !empty($from_lat) && !empty($from_lng)
        ? "<a href='https://www.google.com/maps?q={$from_lat},{$from_lng}' target='_blank'>View on Map</a>"
        : "Not available";

    $to_map_link = !empty($to_lat) && !empty($to_lng)
        ? "<a href='https://www.google.com/maps?q={$to_lat},{$to_lng}' target='_blank'>View on Map</a>"
        : "Not available";

    $return_map_link = !empty($return_lat) && !empty($return_lng)
        ? "<a href='https://www.google.com/maps?q={$return_lat},{$return_lng}' target='_blank'>View on Map</a>"
        : "Not available";

    // Build email content
    $email_body = "
    <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
                .container { max-width: 600px; margin: 20px auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
                .header { background-color: rgb(0, 31, 63); padding: 20px; text-align: center; color: #ffffff; border-radius: 8px 8px 0 0; }
                .content { padding: 20px; color: #333333; }
                .footer { text-align: center; font-size: 12px; margin-top: 10px; color: #777777; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>Viacoach</h2>
                </div>
                <div class='content'>
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Phone:</strong> {$phone}</p>
                    <p><strong>Hire Reason:</strong> {$hire_reason}</p>
                    <p><strong>Pickup Location:</strong> {$from} {$from_map_link}</p>
                    <p><strong>Dropoff Location:</strong> {$to} {$to_map_link}</p>
                    <p><strong>Pickup Date & Time:</strong> {$pickup_date} at {$pickup_time}</p>
                    <p><strong>Passengers:</strong> {$passengers}</p>
                    <p><strong>Vehicle Size:</strong> {$vehicle_size}</p>
                    <p><strong>Extra Stops:</strong> {$extra_stops}</p>
                    <p><strong>Cabin Bags:</strong> {$cabin_bags}</p>
                    <p><strong>Luggage Bags:</strong> {$luggage_bags}</p>
                    <p><strong>Additional Info:</strong> {$additional_info}</p>";
    if (!empty($return_dropoff)) {
        $email_body .= "
                    <p><strong>Return Dropoff:</strong> {$return_dropoff} {$return_map_link}</p>
                    <p><strong>Return Dropoff Date & Time:</strong> {$return_dropoff_date} at {$return_dropoff_time}</p>
                    <p><strong>Return Passengers:</strong> {$return_passengers}</p>";
    }
    $email_body .= "
                </div>
                <div class='footer'>
                    <p>&copy; Viacoach. All rights reserved.</p>
                </div>
            </div>
        </body>
    </html>";

    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'getquotenow.travelviacoach.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'webmaster@getquotenow.travelviacoach.com'; // Replace with your email
        $mail->Password = ',}{EnQ52w9N%';   // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('webmaster@getquotenow.travelviacoach.com', 'Viacoach'); // Sender email and name
        $mail->addAddress('futuretest45@gmail.com');
        $mail->addAddress('info@travelviacoach.com');
        $mail->addAddress('info@f4futuretech.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Viacoach - New Booking Request';
        $mail->Body = $email_body;

        $mail->send();
        // JSON response success
        echo json_encode([
            "status" => "success",
            "message" => "Email sent successfully."
        ]);
    } catch (Exception $e) {
        // JSON response failed
        echo json_encode([
            "status" => "error",
            "message" => "Failed to send email.",
            "error" => $e->getMessage() // Optional: Include the actual error message
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request."
    ]);
}
?>