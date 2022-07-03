CREATE TABLE Users (
    Id_U INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(70) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    PRIMARY KEY(Id_U)
);

CREATE TABLE Authors (
    Id_A INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(70) NOT NULL,
    Country VARCHAR(100) NOT NULL,
    PRIMARY KEY(Id_A)
);

CREATE TABLE Books (
    Id_B INT NOT NULL AUTO_INCREMENT,
    Title VARCHAR(50) NOT NULL,
    PRIMARY KEY(Id_B)
);

CREATE TABLE BooksAuthors (
    AuthorId INT NOT NULL,
    BookId  INT NOT NULL,
    FOREIGN KEY (AuthorId) REFERENCES Authors(Id_A) ON DELETE CASCADE,
    FOREIGN KEY (BookId) REFERENCES Books(Id_B) ON DELETE CASCADE
);

CREATE TABLE UserBooks (
    UserId INT NOT NULL,
    BookId  INT NOT NULL,
    LoanDate Date,
    ExDate Date,
    PRIMARY KEY (UserId,UserBooks,LoanDate),
    FOREIGN KEY (UserId) REFERENCES Users(Id_U) ON DELETE CASCADE,
    FOREIGN KEY (BookId) REFERENCES Books(Id_B) ON DELETE CASCADE
);


INSERT INTO Users
    (Name, Email)
VALUES
    ('Andrés Jimenez', 'ajimenez@gmail.com'),
    ('Daniel Sotelo', 'dsotelo@gmail.com'),
    ('Sofia Austen', 'sausten@gmail.com'),
    ('David Benavides', 'dbenavides@gmail.com'),
    ('Patricia Martinez', 'pmartinez@gmail.com'),
    ('Lizet Mena', 'lmena@gmail.com'),
    ('Eduardo Melo', 'emelo@gmail.com'),
    ('Christian Solarte', 'csolarte@gmail.com'),
    ('Laura Gomez', 'lgomez@gmail.com'),
    ('Katherine España', 'kespaña@gmail.com'),
    ('Camila Ortega', 'cortega@gmail.com'),
    ('Johan Rosero', 'jrosero@gmail.com'),
    ('Paola Cadena', 'pcadena@gmail.com'),
    ('Daniela Delgado', 'ddelgado@gmail.com'),
    ('Gabriel Figueroa', 'gfigueroa@gmail.com'),
    ('Javier Bravo', 'jbravo@gmail.com'),
    ('Alexander Burbano', 'aburbano@gmail.com'),
    ('Elizabet Navia', 'enavia@gmail.com'),
    ('Sebastian Castillo', 'scastillo@gmail.com'),
    ('Diana Garcia', 'dgarcia@gmail.com'),
    ('Luisa Lopez', 'llopez@gmail.com')
;


INSERT INTO Authors
    (Name, Country)
VALUES
    ('J.D. Salinger', 'USA'),
    ('F. Scott. Fitzgerald', 'USA'),
    ('Jane Austen', 'UK'),
    ('Scott Hanselman', 'USA'),
    ('Jason N. Gaylord', 'USA'),
    ('Pranav Rastogi', 'India'),
    ('Todd Miranda', 'USA'),
    ('Christian Wenz', 'USA'),
    ('Jorge Luis Borges', 'Argentina'),
    ('Julio Cortázar', 'Argentina'),
    ('Howard P. Lovecraft', 'USA'),
    ('Haruki Murakami', 'Japón'),
    ('Isaac Asimov', 'Rusia'),
    ('Mario Benedetti', 'Argentina'),
    ('Fiodor Dostoievski', 'Rusia'),
    ('Pablo Neruda', 'Chile'),
    ('Oscar Wilde', 'Irlanda'),
    ('Edgar Allan Poe', 'USA'),
    ('Charles Dickens', 'Inglaterra'),
    ('Mark Twain', 'Usa'),
    ('Bram Stoker', 'Irlanda')
;

INSERT INTO Books
    (Title)
VALUES
    ( 'The Catcher in the Rye'),
    ( 'Nine Stories'),
    ( 'Franny and Zooey'),
    ( 'The Great Gatsby'),
    ( 'Tender id the Night'),
    ( 'Pride and Prejudice'),
    ( 'Professional ASP.NET 4.5 in C# and VB'),
    ( 'El Aleph'),
    ( 'Ficciones'),
    ( 'Rayuela'),
    ( 'Historias de cronopios y de famas'),
    ( 'Los mitos de Cthulhu'),
    ( 'Tokio Blues'),
    ("El fin de la eternidad"),
    ( "La tregua"),
    ( 'Noches blancas'),
    ( 'Veinte poemas de amor y una canción desesperada'),
    ( 'El retrato de Dorian Gray'),
    ( 'El cuervo'),
    ( 'Cuento de navidad'),
    ( 'Las aventuras de Tom Sawyer'),
    ( 'Dracula')
;

INSERT INTO BooksAuthors
    (BookId, AuthorId)
VALUES
    (1, 1),
    (2, 1),
    (3, 1),
    (4, 2),
    (5, 2),
    (6, 3),
    (7, 4),
    (7, 5),
    (7, 6),
    (7, 7),
    (7, 8),
    (8,9),
    (9,9),
    (10,10),
    (11,10),
    (12,11),
    (13,12),
    (14,13),
    (15,14),
    (16,15),
    (17,16),
    (18,17),
    (19,18),
    (20,19),
    (21,20),
    (22,21)
;

UserId INT NOT NULL,
    BookId  INT NOT NULL,
    LoanDate Date,
    ExDate Date,

INSERT INTO UserBooks
    (UserId, BookId, LoanDate, ExDate)
VALUES
    (1, 1, "2022-06-23", "2022-07-23"),
    (2, 1, "2022-06-23", "2022-07-23"),
    (3, 1, "2022-06-23", "2022-07-23"),
    (4, 2, "2022-06-23", "2022-07-23"),
    (5, 2, "2022-06-23", "2022-07-23"),
    (22,21,"2022-06-23", "2022-07-23")
;

