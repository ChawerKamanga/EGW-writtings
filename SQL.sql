CREATE TABLE books (
    Code VARCHAR (10) PRIMARY KEY,
    Title VARCHAR (50) NOT NULL,
    Category VARCHAR (50) NOT NULL
);

SELECT * FROM books
WHERE Title LIKE '%The%';


INSERT INTO books (Code, Title, Category) VALUES('DA', 'The Desire of Ages', 'Gospel');
INSERT INTO books (Code, Title, Category) VALUES('GC', 'Great Controversy', 'Prophecy');
INSERT INTO books (Code, Title, Category) VALUES('MH', 'Ministry of Healing', 'Health');
INSERT INTO books (Code, Title, Category) VALUES('MYP', 'Messages to Young People', 'Counselling');
INSERT INTO books (Code, Title, Category) VALUES('SC', 'Steps to Christ', 'Gospel');

