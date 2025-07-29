# Design-a-webpage-
# Elegant Webpage Project

## Overview
This project is a simple and elegant webpage that includes a form and a table. The form allows users to submit their name and age, and the table dynamically displays the submitted data. The project is designed to be visually appealing and user-friendly.

## Features
- **Responsive Design**: The webpage is styled to look great on all devices.
- **Dynamic Table**: Data submitted through the form is dynamically added to the table.
- **Toggle Status**: Each record in the table includes a toggle button to update its status.
- **Cross-Browser Compatibility**: The webpage is optimized to work seamlessly across different browsers.

## Technologies Used
- **HTML**: For the structure of the webpage.
- **CSS**: For styling and layout.
- **JavaScript**: For dynamic interactions and form handling.
- **PHP**: For backend processing and database interaction.
- **MySQL**: For storing and retrieving data.

## File Structure
- `index.html`: The main HTML file containing the form and table.
- `styles.css`: The CSS file for styling the webpage.
- `script.js`: The JavaScript file for handling form submissions and table updates.
- `submit.php`: Processes form data and inserts it into the database.
- `fetch.php`: Fetches records from the database to display in the table.
- `toggle.php`: Updates the status of records in the database.

## Setup Instructions
1. Clone the repository to your local machine.
2. Place the project folder in the `htdocs` directory if using XAMPP.
3. Start the Apache and MySQL services in XAMPP.
4. Create a MySQL database and table as required by the project.
5. Update the database connection details in the PHP files.
6. Open `index.html` in your browser or access it via `http://localhost/`.

## Usage
1. Fill out the form with your name and age, then click "Submit".
2. View the submitted data in the table below the form.
3. Use the toggle button to update the status of any record.

## License
This project is open-source and available under the [MIT License](LICENSE).
