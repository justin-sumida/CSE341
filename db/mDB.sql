CREATE TABLE userReview(
    id SERIAL PRIMARY KEY,
    review INT NOT NULL,
    contentReview TEXT NOT NULL,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE contact(
    id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contact TEXT NOT NULL
);

CREATE TABLE last50Contacts(
    contact_id INT NOT NULL REFERENCES contact(id),
    description TEXT NOT NULL
);