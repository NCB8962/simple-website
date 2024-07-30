CREATE TABLE crud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chassis_name VARCHAR(255),
    engine_number VARCHAR(255),
    date DATE,
    status VARCHAR(50) DEFAULT 'Pending'
);

CREATE TABLE inspection (
    id INT AUTO_INCREMENT PRIMARY KEY,
    crud_id INT,
    inspection_detail TEXT,
    FOREIGN KEY (crud_id) REFERENCES crud(id)
);
