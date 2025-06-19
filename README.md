# Download Tracker System

A lightweight PHP-based system for tracking downloads of publication files. It records and displays download activity by linking unique download identifiers with publication metadata.

## Features

- Tracks downloads using unique `download_id`
- Stores and retrieves download records via a model/controller structure
- Displays total downloads and detailed logs per publication
- Sidebar-based UI integration for display and interaction

## Technologies Used

- PHP (CodeIgniter-compatible structure)
- MySQL (via `Tracker_Model`)
- HTML/CSS (for basic UI elements)
- PHP 8.1
- MySQL
- Apache web server
- CodeIgniter framework

## File Overview

- `Tracker.php`: Controller for handling download requests and rendering views
- `Tracker_Model.php`: Model for interacting with the database and managing download records
- `sidebar.php`: Sidebar UI component to show publication download stats

## License

This project is open-source and available under the MIT License.

## Author
Created by Saurav Dhakal
