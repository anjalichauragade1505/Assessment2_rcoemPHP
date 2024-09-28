<?php

// Autoload dependencies using Composer
require 'vendor/autoload.php';

// Fetch all contacts from the 'contacts' table
$rows = selectAll('contacts');

// Include the view for displaying the contacts
include 'views/index.view.php';
