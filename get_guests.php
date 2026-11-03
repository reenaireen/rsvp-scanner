<?php
header('Content-Type: application/json');
include 'db.php';

try {
    // Ambil senarai id, nama, sekolah, kategori, token dan rsvp
    $stmt = $pdo->query("SELECT id, full_name AS name, school_name AS school, category, qr_token AS token, rsvp_status AS rsvp FROM guests");
    $guests = $stmt->fetchAll();
    
    echo json_encode($guests);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>