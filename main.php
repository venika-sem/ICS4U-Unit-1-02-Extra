/*
 * This program calculates the energy of an object
 * By Venika Sem
 * Date: Feb 2024
 */

<?php
  function calculateEnergy($mass_kg) {
      // Speed of light (m/s)
      $speed_of_light = 299792458;

      // Calculate rest energy (E) in joules
      $rest_energy = $mass_kg * pow($speed_of_light, 2);

      return $rest_energy;
  }

  // Get user input for mass
  echo "Enter the mass of an object in kilograms: ";
  $mass_kg = floatval(trim(fgets(STDIN))); // Read user input

  // Calculate energy
  $energy_joules = calculateEnergy($mass_kg);

  // Display the result
  echo "The mass of {$mass_kg} kg produces {$energy_joules} J in energy.\n";
  ?>
