CREATE TABLE web_devs (
    client_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR (50),
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    date_of_birth VARCHAR (50),
    country TEXT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE projects (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    order_name VARCHAR (50),
    technologies_used TEXT,
    client_id INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


