CREATE TABLE scripture(
    id SERIAL PRIMARY KEY,
    book VARCHAR(50),
    chapter VARCHAR(50),
    verse VARCHAR(10),
    content TEXT NOT NULL
);

INSERT INTO scripture(book, chapter, verse, content) VALUES ('John', '1' ,'5' , 'And the light shineth in darkness; and the darkness comprehendeth it not');
INSERT INTO scripture(book, chapter, verse, content) VALUES ('Doctrine and Covenants' , '88' , '49', 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.');
INSERT INTO scripture(book, chapter, verse, content) VALUES ('Doctrine and Covenants' , '93', '28', 'Man was also in the beginning with God. Intelligence, or the light truth, was not created or made, neither indeed can be.');
INSERT INTO scripture(book, chapter, verse, content) VALUES ('Mosiah', '16', '9', 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');