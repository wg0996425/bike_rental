<?php
function sqlAllCustomers() {
    return "
        SELECT * FROM customers 
        ORDER BY last_name, first_name;
    ";
}

function sqlAvailableBikes() {
    return "
        SELECT bike_id, model, type, hourly_rate FROM bikes 
        WHERE available = 1;
    ";
}

function sqlBikeRentals() {
    return "
        SELECT b.model, c.first_name, c.last_name, r.start_time, r.end_time FROM rentals r
        JOIN bikes b ON r.bike_id = b.bike_id
        JOIN customers c ON r.customer_id = c.customer_id;";
}

function sqlMorningRentals() {
    return "
        SELECT * FROM rentals 
        WHERE start_time < '12:00:00' 
        ORDER BY start_time;
    ";
}

function sqlTop3Bikes() {
    return "
        SELECT * FROM bikes 
        ORDER BY hourly_rate 
        DESC LIMIT 3;
    ";
}

function sqlOpenRentals() {
    return "
        SELECT r.rental_id, b.model, c.first_name, c.last_name, r.start_time FROM rentals r
        JOIN bikes b ON r.bike_id = b.bike_id
        JOIN customers c ON r.customer_id = c.customer_id
        WHERE r.end_time IS NULL;
    ";
}

function sqlAllJoins() {
    return "
        SELECT r.rental_id, b.model, b.type, b.hourly_rate, c.first_name, c.last_name, r.start_time, r.end_time FROM rentals r
        JOIN bikes b ON r.bike_id = b.bike_id
        JOIN customers c ON r.customer_id = c.customer_id
        ORDER BY r.start_time;
    ";
}

function sqlUpdateEndTime(int $rentalId) {
    return "
        UPDATE rentals 
        SET end_time = NOW() 
        WHERE rental_id = $rentalId;
    ";
}

function sqlUpdateBikeStatus(int $bikeId) {
    return "
        UPDATE bikes 
        SET available = 0 
        WHERE bike_id = $bikeId;
    ";
}
?>
