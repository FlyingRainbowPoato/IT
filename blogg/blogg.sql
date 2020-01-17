CREATE TABLE post(
    id INTEGER AUTO_INCREMENT,
    time DATETIME DEFAULT NOW(),
    content TEXT,
    title VARCHAR(255),
    author INTEGER,
    media VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE author(
    id INTEGER AUTO_INCREMENT,
    name VARCHAR(255),
    password VARCHAR(255),
    username VARCHAR(255),
    epost VARCHAR(255),
    PRIMARY KEY(id)
);

ALTER TABLE post
ADD media VARCHAR(255);

INSERT INTO post(content,title,author) VALUES ('lorem ipsum dolorem sit amet', 'lorem ipsum', 1)