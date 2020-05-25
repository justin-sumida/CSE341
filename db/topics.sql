CREATE TABLE topics(
    id SERIAL PRIMARY KEY NOT NULL,
    name VARCHAR(50) NOT NULL
);

INSERT INTO topics (name) VALUES ('Faith');
INSERT INTO topics (name) VALUES ('Sacrifice');
INSERT INTO topics (name) VALUES ('Charity');

CREATE TABLE scripture_topic(
    scripture_id int NOT NULL REFERENCES scripture(id),
    topic_id int NOT NULL REFERENCES topics(id)
);