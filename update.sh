#!/bin/bash

updatevar="
INSERT INTO Authors (name)
	VALUES ('V M Putinas');
INSERT INTO Authors (name)
	VALUES ('G Orwell');
INSERT INTO Authors (name)
	VALUES ('J Joyce');
INSERT INTO Books (AuthorId,title,year)
	VALUES (8, 'Altoriu Sesely', 1933);
INSERT INTO Books (AuthorId,title,year)
	VALUES (9, '1984', 1949);
INSERT INTO Books (AuthorId,title,year)
	VALUES (10, 'Ulysses', 1918);

UPDATE Books SET authorId = 5 WHERE bookId = 6;
DELETE FROM Authors WHERE authorId >7;
DELETE FROM Books WHERE authorId IS NULL;
ALTER TABLE Books ADD genre VARCHAR(20);

CREATE TABLE daug_su_daug (
authorId INT NOT NULL,
bookId INT NOT NULL);

UPDATE Books SET genre = 'IT' WHERE bookId < 7;
UPDATE Books SET genre = 'Fiction' WHERE bookId > 7;

ALTER TABLE Books DROP COLUMN authorId;

INSERT INTO daug_su_daug(authorId, bookId)
VALUES(1,1);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(1,2);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(2,2);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(3,3);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(3,4);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(3,5);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(4,4);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(6,6);
INSERT INTO daug_su_daug(authorId, bookId)
VALUES(7,6);

 EXIT"

mysql --user=root --password= testas << eof
$updatevar
eof