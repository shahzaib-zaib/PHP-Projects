CREATE Table student(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    city VARCHAR(10) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (city) REFERENCES City (cid)
);




ALTER Table table_name
    ADD FOREIGN KEY (city) REFERENCES City (cid);