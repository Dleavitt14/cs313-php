DROP TABLE IF EXISTS
groups
CASCADE;

DROP TABLE IF EXISTS
users
CASCADE;

DROP TABLE IF EXISTS
events
CASCADE;

CREATE TABLE groups
(
    id SERIAL PRIMARY KEY,
    ward VARCHAR(100) NOT NULL,
    stake VARCHAR(100) NOT NULL
);

CREATE TABLE users
(
    id SERIAL PRIMARY KEY,
    group_id INT NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    birthday VARCHAR(25) NOT NULL,
    fovorite_color VARCHAR(25) NOT NULL,
    hometown VARCHAR(200) NOT NULL,
    group_leader BOOLEAN NOT NULL,
    favorite_hobby VARCHAR NOT NULL,
    single BOOLEAN NOT NULL,
    major VARCHAR(100) NOT NULL,
    semester_in_school SMALLINT NOT NULL,
    photo VARCHAR(500) NOT NULL,
    FOREIGN KEY (group_id) REFERENCES groups (id)
);

CREATE TABLE events
(
    id SERIAL PRIMARY KEY,
    group_id INT NOT NULL,
    prayer VARCHAR(100) NOT NULL,
    thought VARCHAR(100) NOT NULL,
    treat VARCHAR(100) NOT NULL,
    activity_name VARCHAR(100) NOT NULL,
    activity_description VARCHAR NOT NULL,
    FOREIGN KEY (group_id) REFERENCES groups (id)
);