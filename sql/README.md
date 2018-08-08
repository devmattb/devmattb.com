# DATABASE SETUP/TESTING HELP DOCUMENT
## How to manually enter the database console:
### Open XAMPP:
Start "Apache" and "MySQL".

### Open up the XAMPP Console:
Click on the "Shell" button with the console icon, to the right in the control panel.

### Login to MYSQL with your details:
By default, you can log in with the command "mysql -u root".
If that doesn't work, you will have to reset your mysql root account, or
this local copy of the website won't work. Make sure your username is "root",
and your password is blank ("").

### Create / Use the Database.
If this is the first local run of the program, you will need to run the following
command once logged in to the XAMPP console with MYSQL:

"CREATE DATABASE devmattbDB;"

Once that is done, or if the database has previously been created, run the following
command in the XAMPP console:

"USE devmattbDB;".

### Create all required Database Tables:
If this is the first local run of the program, you will need to run some
commands in to the XAMPP console with MySQL, to create the database tables.

To create all tables, please paste ALL the contents of the "create-tables.sql" in to
your XAMPP console while logged in to MySQL.

Make sure you have run the command "USE devmattbDB;" before this step.

### Done!
You can now run any and all SQL commands available to the MariaDB standard, and the
database is up and running. Please continue reading the original README.md file,
if you are setting up the program for the first time.
