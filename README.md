# Form_Handling

## Description
This project is a simple web-based application built using PHP for backend form handling and CSS for styling. It includes forms for inserting, updating, and deleting user accounts.


## Features

- Insert a new account
- Update an existing account
- Delete an account

## Requirements

- A web server with PHP support (e.g., Apache, Nginx, XAMPP)
- A modern web browser

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/form-handling.git

2. **Navigate to the project directory:**

   ```bash
   cd calculator-project
   
3. **Deploy the project on your web server:**
   If you're using XAMPP, move the project directory to the htdocs folder inside your XAMPP installation directory.
   
5. **Navigate to the project directory:**
   Ensure your web server (e.g., Apache) is running.
   
7. **Navigate to the project directory:**
   Open your web browser and go to the appropriate URL based on your server setup.

## Usage

1. Open the application in your web browser.
2. Use the forms to insert, update, or delete an account:
    - Insert account: Fill in the username, password, and email fields, then click "Insert".
    - Update account: Fill in the username, password, and email fields, then click "Update".
    - Delete account: Fill in the username and password fields, then click "Delete".

## File Details

- index.html

   This file contains the HTML code for displaying the forms. It includes three forms for inserting, updating, and deleting accounts.

- css/style.css

   This file contains the CSS rules to style the forms, making them visually appealing and user-friendly.

- includes/formhandler.inc.php

   This file contains the PHP script to handle the insertion of new accounts.

- includes/userupdate.inc.php

   This file contains the PHP script to handle the updating of existing accounts.

- includes/userdelete.inc.php

  This file contains the PHP script to handle the deletion of accounts.
