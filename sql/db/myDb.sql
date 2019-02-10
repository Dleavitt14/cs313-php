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
    group_name VARCHAR,
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
    favorite_color VARCHAR(25) NOT NULL,
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

INSERT INTO groups(group_name, ward, stake) VALUES
    ('Red', 'Rexburg 1st', 'Rexburg 6th'),
    ('Blue', 'Rexburg 2nd', 'Rexburg 6th'),
    ('Green', 'Rexburg 1st', 'Rexburg 6th'),
    ('Yellow', 'Rexburg 2nd', 'Rexburg 6th');

INSERT INTO users(group_id, first_name, last_name, birthday, favorite_color, hometown, group_leader, favorite_hobby, single, major, semester_in_school, photo) VALUES
    (1, 'Joe', 'Smith', '1/1/01', 'red', 'Boise, ID', true, 'Running', true, 'CIT', 4, 'img'),
    (2, 'Jane', 'Doe', '1/2/01', 'blue', 'Eagle, ID', false, 'Swimming', false, 'WDD', 2, 'img'),
    (3, 'John', 'Cox', '1/3/01', 'red', 'Vista, CA', false, 'Hiking', true, 'Computer Science', 1, 'img'),
    (2, 'Mike', 'Dale', '1/4/97', 'white', 'Bend, OR', false, 'Lifting', true, 'English', 1, 'img');

INSERT INTO events(group_id, prayer, thought, treat, activity_name, activity_description) VALUES
    (2, 'Jane', 'Joe', 'Sam', 'Games', 'Playing board games in the guys apartment'),
    (3, 'John', 'Bob', 'Bill', 'Sleding', 'Sleding at the sand dunes'),
    (3, 'Bill', 'Brett', 'Jill', 'Potluck', 'Everyone bring something to share with the rest of the group');