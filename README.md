
<br><h1>database scama like  is  : </h1><br>


<b> Payments tabels</b>
<img width="1497" height="307" alt="Screenshot 2025-12-30 180653" src="https://github.com/user-attachments/assets/1205a073-f455-417b-97a3-bad30fbf22f7" />

<pre>CREATE TABLE payments (
    id INT(11) NOT NULL AUTO_INCREMENT,
    user_id INT(11) DEFAULT NULL,
    amount DECIMAL(10,2) DEFAULT NULL,
    payment_method VARCHAR(50) DEFAULT NULL,
    status VARCHAR(20) DEFAULT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
</pre>

<br><br>

<b> User tabels </b>
<img width="1450" height="229" alt="Screenshot 2025-12-30 180710" src="https://github.com/user-attachments/assets/1eb14921-df35-43d3-95be-0b3a7386a95f" />
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) DEFAULT NULL,
    email VARCHAR(100) DEFAULT NULL,
    password VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
