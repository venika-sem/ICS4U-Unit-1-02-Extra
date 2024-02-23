<?php
/*
 * This program calculates the energy of an object
 * By Venika Sem
 * Date: Feb 2024
 */

// Function to validate if input is a number
function isValidNumber($input) {
    return is_numeric($input);
}

function calculateEnergy($mass_kg) {
    // Speed of light (m/s)
    $speed_of_light = 299792458;

    // Calculate rest energy (E) in joules
    $rest_energy = $mass_kg * pow($speed_of_light, 2);

    return $rest_energy;
}

// Get user input for mass
echo "Enter the mass of an object in kilograms: ";
$mass_kg = trim(fgets(STDIN)); // Read user input

// Validate the input
if (isValidNumber($mass_kg) && $mass_kg >= 0) {
    // Calculate energy
    $energy_joules = calculateEnergy(floatval($mass_kg));

    // Display the result
    echo "The mass of {$mass_kg} kg produces {$energy_joules} J in energy.\n";
} else {
    echo "Error: Please enter a valid non-negative number for the mass.\n";
}

// End program
echo "Done.\n";
?>
