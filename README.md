## Project Description

This project is a basic user authentication system built using PHP and MySQL. It allows users to register, log in, and manage their session. The application follows a Model-View-Controller (MVC) structure to separate the logic, user interface, and database interactions for better maintainability and scalability.

### Features:
- **User Registration**: Users can create an account by providing their name, email, and password. The system ensures that the email is unique and stores the password securely using hashing.
- **User Login**: Registered users can log in by providing their email and password. The system verifies the password against the stored hashed password.
- **Session Management**: Once logged in, the user is directed to a homepage where they can view a welcome message. The session is managed to ensure that users stay logged in during their browsing session.
- **Logout**: Users can log out, which will terminate their session and redirect them to the login page.

### Structure:
The project is organized into three main directories:
1. **Controllers**: Handles the logic for user registration, login, and session management.
2. **Models**: Interacts with the database to manage users and their data.
3. **Views**: Contains the HTML structure and user interface for login, registration, and home pages.

### Technologies:
- **PHP**: Server-side scripting language used for backend logic.
- **MySQL**: Database used to store user data.
- **Bootstrap**: Frontend framework used for responsive design.
- **PDO**: PHP Data Objects for secure database interactions.

The project is designed to be a simple and scalable user authentication system that can be expanded with additional features, such as password recovery, email verification, or user roles, as needed.