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

## File Overview

- `Tracker.php`: Controller for handling download requests and rendering views
- `Tracker_Model.php`: Model for interacting with the database and managing download records
- `sidebar.php`: Sidebar UI component to show publication download stats

## Getting Started

### Prerequisites

- PHP 7.x or later
- MySQL
- A web server (e.g., Apache)
- CodeIgniter framework (optional but recommended)

### Installation

1. Clone or download this repository into your project folder.
2. Set up your MySQL database and configure credentials in your CodeIgniter configuration.
3. Ensure routes are correctly mapped to the `Tracker` controller.
4. Access the application in your browser.

## Usage

- The system expects publication downloads to be initiated using a `download_id` parameter.
- Downloads are logged automatically when users access the download endpoint.
- Use the sidebar component to view total and recent download statistics for each tracked publication.

## License

This project is open-source and available under the MIT License.

## Author
Created by Saurav Dhakal
