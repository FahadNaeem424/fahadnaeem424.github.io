<?php

function isMachineIdPresent($machineId) {
    // List of existing machine IDs
    $existingMachineIds = array(
        "machine1",
        "machine2",
        "machine3",
        "machine4"
        // Add more machine IDs here if needed
    );

    // Check if the machineId exists in the list
    if (in_array($machineId, $existingMachineIds)) {
        return true;
    } else {
        return false;
    }
}

// Get the machineId from the request parameter
$machineId = isset($_GET['machineId']) ? $_GET['machineId'] : '';

// Check if machineId is provided
if (!empty($machineId)) {
    // Check if machineId is present in the list
    if (isMachineIdPresent($machineId)) {
        echo "true";
    } else {
        echo "false";
    }
} else {
    echo "Please provide a machineId parameter.";
}

?>
