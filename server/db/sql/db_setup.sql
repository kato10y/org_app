CREATE TABLE IF NOT EXISTS plan (
    id INT PRIMARY KEY AUTO_INCREMENT,
    plan_name VARCHAR(30) NOT NULL,
    overview TEXT(255),
    start_date DATE NOT NULL,
    end_date DATE,
    plan_member INT(3) NOT NULL,
    plan_cost INT(10) DEFAULT 0,
    alone INT(1) DEFAULT 0,
    all_cost INT(10) DEFAULT 0,
    remarks VARCHAR(255),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS itinerary_move (
    id INT PRIMARY KEY AUTO_INCREMENT,
    plan_id INT NOT NULL,
    transportation VARCHAR(30) NOT NULL,
    starting_point VARCHAR(30) NOT NULL,
    end_point VARCHAR(30) NOT NULL,
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    reserve varchar(20) NOT NULL,
    reservation_person VARCHAR(30) NOT NULL,
    cost INT(10) DEFAULT 0,
    alone INT(1) DEFAULT 0,
    all_cost INT(10) DEFAULT 0,
    remarks VARCHAR(255),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_move_plan_id
    FOREIGN KEY (plan_id)
        REFERENCES plan(id)
        ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE IF NOT EXISTS itinerary_action (
    id INT PRIMARY KEY AUTO_INCREMENT,
    plan_id INT NOT NULL,
    content VARCHAR(30) NOT NULL,
    place VARCHAR(30) NOT NULL,
    start_time DATETIME NOT NULL,
    end_time DATETIME NOT NULL,
    reserve varchar(20) NOT NULL,
    reservation_person VARCHAR(30),
    cost INT(10) DEFAULT 0,
    alone INT(1) DEFAULT 0,
    all_cost INT(10) DEFAULT 0,
    remarks VARCHAR(255),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_action_plan_id
    FOREIGN KEY (plan_id)
        REFERENCES plan(id)
        ON DELETE RESTRICT ON UPDATE RESTRICT
);

CREATE TABLE IF NOT EXISTS itinerary_lodging (
    id INT PRIMARY KEY AUTO_INCREMENT,
    plan_id INT NOT NULL,
    lodging_place VARCHAR(30) NOT NULL,
    check_in DATETIME NOT NULL,
    check_out DATETIME NOT NULL,
    reserve varchar(20) NOT NULL,
    reservation_person VARCHAR(30),
    cost INT(10) DEFAULT 0,
    alone INT(1) DEFAULT 0,
    all_cost INT(10) DEFAULT 0,
    remarks VARCHAR(255),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_lodging_plan_id
    FOREIGN KEY (plan_id)
        REFERENCES plan(id)
        ON DELETE RESTRICT ON UPDATE RESTRICT
);
