Creating a notepad-like web application to save and retrieve data using PHP and SQL Server requires a few steps. Here, I'll guide you through the process. This example includes HTML for the frontend, PHP for the backend logic, and SQL Server for database storage.

**Testing the Website**
Save the PHP files (db.php and index.php) in a directory on your web server (e.g., htdocs in XAMPP).
Start your web server and SQL Server.
Access the notepad app in your browser, e.g., http://localhost/index.php.
Add a note and check if it appears in the saved notes list.

** Additional Notes **
Error Handling: Add proper error checks and friendly error messages for production environments.
Security: Use prepared statements (as shown in the example) to prevent SQL Injection.
Styling: You can enhance the visual appearance of the app with CSS.
Pagination: For large datasets, implement pagination to manage saved notes effectively.

**Folder Structure**
Ensure that your index.php, header.php, footer.php, and db.php files are in the same directory or adjust the include paths accordingly. Your folder structure might look like this:

**Code**
/htdocs
    /notepad_app
        - db.php
        - header.php
        - footer.php
        - index.php
         -header.php
         -footer.php
        
**Final Output**
The website now has a dynamic header and footer, styled with CSS.
The header contains the title of the app ("My Notepad App NeerWeb").
The footer displays copyright information, including the current year.
The main content shows the form to write notes and lists previously saved notes.

**Testing**
Open the index.php page in your browser.
Add some notes and verify that they are displayed under "Saved Notes."
The header and footer will remain consistent throughout the website.
made by Niraj Shukla - +91 8459280715 if any help on project.
