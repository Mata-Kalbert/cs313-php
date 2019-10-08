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