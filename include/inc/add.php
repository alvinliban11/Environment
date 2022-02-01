<?php
include 'workshopDb.php';
$participantName = $_POST['participantName'];
$learnerId = $_POST['learnerId'];
$workshop_id = $_POST['workshop_id'];
$sql = "INSERT INTO workshop(participant_name,learner_id,workshop_id) VALUE(?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sii", $participantName, $learnerId, $workshop_id);
$stmt->execute();