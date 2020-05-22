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

INSERT INTO userReview(review, contentReview, name) VALUES ('5', 'Kirk did a fantastic job on our lights, professional and on time. Left it clean too.', 'Jane Doe');
INSERT INTO userReview(review, contentReview, name) VALUES ('5', 'Kirk came early to the job, got out within 3 hours, and did a great job!', 'John Doe');
INSERT INTO userReview(review, contentReview, name) VALUES ('4', 'Very professional guy, one of the best in the business.', 'Jilly Joel');
INSERT INTO userReview(review, contentReview, name) VALUES ('5', 'Left our house cleaner than it was! Great.', 'LaFonda');

INSERT INTO contact(name, email, contact) VALUES('Billy Bob', 'bill@gmail.com', 'Hi, I was wondering how much it would be to...');
INSERT INTO contact(name, email, contact) VALUES('Jilly Jane', 'jill@gmail.com', 'How much would you charge to install 8 kitchen lights?');
INSERT INTO contact(name, email, contact) VALUES('Justin Sumida', 'sum18004@byui.edu' , 'Do you install QuietCool still?');


