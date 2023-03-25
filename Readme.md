## User Authentication and Activity Tracker
This is a simple web application that allows users to register, login, and logout, and tracks their activity (login and logout times). It also differentiates between regular users and admin users, with only admin users being able to see the activity data.

`Requirements`
A web server with PHP installed
A MySQL database server
Setup
Clone this repository to your web server.
Create a MySQL database for the application.
Import the users.sql file into the database to create the necessary tables.
Configure the database connection in the conn.php file.
Open the index.php file in a web browser to start using the application.
Features
User Registration
Users can register for an account by providing a username and password. The password is hashed using the password_hash() function before it is stored in the database.

User Login
Users can login by providing their username and password. The password is verified using the password_verify() function before the user is logged in. When a user logs in, their login time is recorded in the user_activity table.

User Logout
Users can logout by clicking the "Logout" button on the dashboard. When a user logs out, their logout time is recorded in the user_activity table.

Admin Access
If a user has the admin role, they can access the activity data page. This page shows a table of all the user activity data (login and logout times). Regular users cannot access this page.

Files
form.php
The main login page. Handles user input and displays error messages.

dashboard.php
The user dashboard page. Displays a welcome message and a "Logout" button.

logout.php
The logout page. Records the user's logout time and destroys the session.

admin_dashboard.php
The user activity data page. Displays a table of all the user activity data. Only accessible by admin users.

conn.php
The configuration file. Contains the database connection details.

createdb.sql
The SQL file containing the table schema for the users and user_activity tables.

Conclusion
This simple user authentication and activity tracker demonstrates how to securely manage user passwords using password hashing, track user activity using a database, and differentiate between different types of users with different privileges. This application could be extended to include more features such as email verification, password reset, and more.




