<?php
  // Get the current day of the week (1 for Monday, 7 for Sunday)
  $currentDay = date('N'); // 'N' returns 1 (for Monday) through 7 (for Sunday)

  // Define colors for specific days
  $filterClasses = [
    1 => 'filter-brightness', // Monday
    2 => 'filter-none', // Tuesday
    3 => 'filter-grayscale-60', // Wednesday
    4 => 'filter-none', // Thursday
    5 => 'filter-grayscale-80', // Friday
    6 => 'filter-saturate', // Saturday
    7 => 'filter-sepia'  // Sunday
  ];

  // Set the background color based on the current day
  $filterClass = $filterClasses[$currentDay] ?? ''; // Default to white if not defined