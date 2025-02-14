<?php
session_start();
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load PHPMailer via Composer autoload

$info = '';
// print_r($_REQUEST);
if (isset($_REQUEST['name']) && isset($_REQUEST['email'])) {
    // Retrieve form data
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
    $vehicle_size = $_REQUEST['vehicle_size'] ?? null;
    $cabin_bags = $_REQUEST['cabin_bags'] ?? 0;
    $luggage_bags = $_REQUEST['luggage_bags'] ?? 0;
    $additional_info = $_REQUEST['additional_info'] ?? null;

    $outbound_pickup = $_REQUEST['outbound_pickup'] ?? 'No';
    $return_pickup = $_REQUEST['return_pickup'] ?? 'No';

    $add_from = $_REQUEST['add_from'] ?? [];
    $add_from_date = $_REQUEST['add_from_date'] ?? [];
    $add_from_time = $_REQUEST['add_from_time'] ?? [];
    $add_from_lat = $_REQUEST['add_from_lat'] ?? [];
    $add_from_lng = $_REQUEST['add_from_lng'] ?? [];

    $add_to = $_REQUEST['add_to'] ?? [];
    $add_to_date = $_REQUEST['add_to_date'] ?? [];
    $add_to_time = $_REQUEST['add_to_time'] ?? [];
    $add_to_lat = $_REQUEST['add_to_lat'] ?? [];
    $add_to_lng = $_REQUEST['add_to_lng'] ?? [];
    

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

    // Email content
    $email_body = "
    <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; }
                .header { background-color: #00263f; color: white; padding: 10px; text-align: center; }
                .section { margin: 20px 0; }
                .details { margin-left: 20px; }
            </style>
        </head>
        <body>
            <div class='header'><h2>Viacoach Booking Details</h2></div>
            <div class='section'>
                <strong>User Details</strong>
                <div class='details'>
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Phone:</strong> {$phone}</p>
                </div>
            </div>
            <div class='section'>
                <strong>Journey Details</strong>
                <div class='details'>
                    <p>No. of passengers: $passengers</p>
                </div>
            </div>
            <div class='section'>
                <strong>Pickup</strong>
                <div class='details'>$from ($from_map_link)</div>
            </div>
            <div class='section'>
                <strong>Drop-off</strong>
                <div class='details'>$to ($to_map_link)</div>
            </div>
            <div class='section'>
                <strong>Outbound Journey Details</strong>
                <div class='details'>
                    <p>Pickup Date & Time: $pickup_date at $pickup_time</p>
                    <p>Pickup address: $from</p>";

    // Include additional pickup details if applicable
    if ($outbound_pickup == 'Yes') {
        foreach ($add_from as $index => $address) {
            $add_from_map_link = !empty($add_from_lat) && !empty($add_from_lng)
                ? " | <a href='https://www.google.com/maps?q={$add_from_lat},{$add_from_lng}' target='_blank'>View on Map</a>"
                : " | Not available";
            $email_body .= "
                    <p>Extra pickup details " . ($index + 1) . ": $address on {$add_from_date[$index]} at {$add_from_time[$index]}{$add_from_map_link}</p>";
        }
    }

    $email_body .= "
                </div>
            </div>
            <div class='section'>
                <strong>Additional Info</strong>
                <div class='details'>
                    <p>Vehicle size: $vehicle_size</p>
                    <p>Purpose: $hire_reason</p>
                    <p>Small luggage: $cabin_bags</p>
                    <p>Large luggage: $luggage_bags</p>
                    <p>Additional Information: $additional_info</p>
                </div>
            </div>
            <div class='section'>
                <strong>Return Journey Details</strong>
                <div class='details'>
                    <p>Return Pickup Date & Time: $return_dropoff_date at $return_dropoff_time</p>
                    <p>Return Pickup address: $to ($to_map_link)</p>
                    <p>Drop-off address: ". $return_dropoff = (!empty($return_dropoff)) ? $return_dropoff : $from ."</p>";

    // Include additional drop-off details if applicable
    if ($return_pickup == 'Yes') {
        foreach ($add_to as $index => $address) {
            $add_to_map_link = !empty($add_to_lat) && !empty($add_to_lng)
                ? " | <a href='https://www.google.com/maps?q={$add_to_lat},{$add_to_lng}' target='_blank'>View on Map</a>"
                : " | Not available";

            $email_body .= "
                    <p>Extra drop-off details " . ($index + 1) . ": $address on {$add_to_date[$index]} at {$add_to_time[$index]}{$add_to_map_link}</p>";
        }
    }

    $email_body .= "
                </div>
            </div>
        </body>
    </html>";

    // echo $email_body;
    // Send email using PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'travelviacoach.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'webmaster@travelviacoach.com'; // Replace with your email
        $mail->Password = ',}{EnQ52w9N%';   // Replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('webmaster@travelviacoach.com', 'Viacoach'); // Sender email and name
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