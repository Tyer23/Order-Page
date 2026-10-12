# Restaurant Order Page

A web-based application developed using PHP, MySQL, HTML, and CSS. Users can select and order recipes, log in, add and manage admin + orders.

## Features

-**Order Management:** Store and retrieve customer order information, including customer names, menu selections, order costs, and order times.

-**Order Searching:** Search for orders by customer first name or menu item.

-**Order Filtering:** View all orders or filter orders by pending status.

-**Order Sorting:** Sort orders by cost in descending order.

-**Order Status Updates:** Update the status of customer orders.

-**Order Deletion:** Delete orders according to their status and the application's business rules.

-**Database Integration:** Use MySQL to store and manage order records.

-**Admin Interface:** Provide an interface for administrators to manage restaurant orders.

## Technologies Used

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Local Development:** XAMPP
- **Version Control:** Git and GitHub

## Getting Started

### Prerequisites

Install [XAMPP](https://www.apachefriends.org/) with Apache and MySQL.

### Installation

1. Clone or download this repository.
2. Copy the project folder into your XAMPP `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Open phpMyAdmin at `http://localhost/phpmyadmin/`.
5. Create a database using your name in lowercase form as its name.
6. Configure the database connection using the example configuration provided in settings.php.
7. Open `http://localhost/assign2/` in your browser.

### Database Setup

The application uses two tables:

- `orders` — stores orders details

- `table_admin` — stores admin details
  
**'orders'**: 
CREATE TABLE orders (
    Order_id INT AUTO_INCREMENT PRIMARY KEY,
    Order_time DATETIME NOT NULL,
    Fname VARCHAR(50) NOT NULL,
    Lname VARCHAR(50) NOT NULL,
    contactemail VARCHAR(100) NOT NULL,
    str_addr VARCHAR(255),
    suburb VARCHAR(100),
    state VARCHAR(50),
    postcode VARCHAR(10),
    phonenumber VARCHAR(20),
    contact VARCHAR(20),
    Types VARCHAR(50),
    Menu VARCHAR(100),
    qty INT,
    Order_cost DECIMAL(10,2),
    features TEXT,
    Order_status VARCHAR(30),
    delivery VARCHAR(20),
    CCtype VARCHAR(30),
    CCname VARCHAR(100),
    CCnumber VARCHAR(30),
    months VARCHAR(10),
    years VARCHAR(10),
    cvv VARCHAR(10)
);

**'table_admin':**
CREATE TABLE table_admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL UNIQUE,
    Pass VARCHAR(255) NOT NULL
);



