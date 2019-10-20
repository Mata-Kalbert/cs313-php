CREATE TABLE Authors (
    authorsid SERIAL PRIMARY KEY
,   authorname VARCHAR(100) NOT NULL
);

CREATE TABLE Books (
    booksid SERIAL PRIMARY KEY
,   authorsid INTEGER REFERENCES Authors(authorsid)
,   title VARCHAR(100) NOT NULL
,   genre VARCHAR(100) NOT NULL
,   reading_level INTEGER NOT NULL
,   check_out   DATE NOT NULL
,   due_date    DATE NOT NULL
,   finnish BOOLEAN NOT NULL
);

CREATE TABLE Reviews (
    reviewsid SERIAL PRIMARY KEY 
,   booksid INTEGER REFERENCES Books(booksid)
,   reviews_enter VARCHAR(255) NOT NULL
);

INSERT INTO Authors (authorName) VALUES ('Roald Dahl');
INSERT INTO Authors (authorName) VALUES ('Louisa May Alcott');
INSERT INTO Authors (authorName) VALUES ('Eleanor Estes');
INSERT INTO Books (authorsID, title, genre, reading_level, check_out, due_date, finnish )
   VALUES (1, 'Charlie and the Chocolate Factory', 'Fiction', '2', '2019-10-19', '2019-10-31', 'false');
INSERT INTO Books (authorsID, title, genre, reading_level, check_out, due_date, finnish )
   VALUES (2, 'Little Women', 'Fiction', '4', '2019-10-19', '2019-10-25', 'false');
INSERT INTO Books (authorsID, title, genre, reading_level, check_out, due_date, finnish )
   VALUES (3, 'The Hundred Dresses', 'Fiction', '3', '2019-10-19', '2019-10-27', 'false');
INSERT INTO Books (authorsID, title, genre, reading_level, check_out, due_date, finnish )
   VALUES (1, 'Matilda', 'Fiction', '2', '2019-10-19', '2019-10-27', 'false');
INSERT INTO Books (authorsID, title, genre, reading_level, check_out, due_date, finnish )
   VALUES (1, 'James and The Giant Peach', 'Fiction', '2', '2019-10-3', '2019-10-15', 'true');
INSERT INTO Books (authorsID, title, genre, reading_level, check_out, due_date, finnish )
   VALUES (3, 'The Moffats', 'Fiction', '3', '2019-10-3', '2019-10-12', 'true');
INSERT INTO Reviews (booksID, reviews_enter) VALUES (5, 'Such a fun book!');
INSERT INTO Reviews (booksID, reviews_enter) VALUES (6, 'Loved this book!');
SELECT title, authorname, genre, reading_level, check_out, due_date FROM Books AS b
JOIN Authors AS a
ON b.authorsID = a.authorsID
WHERE finnish = 'false';
SELECT title, authorname, genre, reading_level, check_out, due_date, reviews_enter FROM Books AS b
JOIN Reviews AS r ON b.booksID = r.booksID
JOIN Authors AS a ON b.authorsID = a.authorsID
WHERE finnish = 'true';