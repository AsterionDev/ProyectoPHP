CREATE TABLE Users (
    Id_U INT NOT NULL,
    Name VARCHAR(70) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    PRIMARY KEY(Id_U)
);

CREATE TABLE Authors (
    Id_A INT NOT NULL,
    Name VARCHAR(70) NOT NULL,
    Country VARCHAR(100) NOT NULL,
    PRIMARY KEY(Id_A)
);

CREATE TABLE Books (
    Id_B INT NOT NULL,
    Title VARCHAR(50) NOT NULL,
    PRIMARY KEY(Id_B)
);

CREATE TABLE BooksAuthors (
    AuthorId INT NOT NULL,
    BookId  INT NOT NULL,
    FOREIGN KEY (AuthorId) REFERENCES Authors(Id_A),
    FOREIGN KEY (BookId) REFERENCES Books(Id_B)
);

CREATE TABLE UserBooks (
    UserId INT NOT NULL,
    BookId  INT NOT NULL,
    FOREIGN KEY (UserId) REFERENCES Users(Id_U),
    FOREIGN KEY (BookId) REFERENCES Books(Id_B)
);


INSERT INTO Users
    (Id_U, Name, Email)
VALUES
    (00,'Andrés Jimenez', 'ajimenez@gmail.com'),
    (01,'Daniel Sotelo', 'dsotelo@gmail.com'),
    (02,'Sofia Austen', 'sausten@gmail.com'),
    (03,'David Benavides', 'dbenavides@gmail.com'),
    (04,'Patricia Martinez', 'pmartinez@gmail.com'),
    (05,'Lizet Mena', 'lmena@gmail.com'),
    (06,'Eduardo Melo', 'emelo@gmail.com'),
    (07,'Christian Solarte', 'csolarte@gmail.com'),
    (08,'Laura Gomez', 'lgomez@gmail.com'),
    (09,'Katherine España', 'kespaña@gmail.com'),
    (10,'Camila Ortega', 'cortega@gmail.com'),
    (11,'Johan Rosero', 'jrosero@gmail.com'),
    (12,'Paola Cadena', 'pcadena@gmail.com'),
    (13,'Daniela Delgado', 'ddelgado@gmail.com'),
    (14,'Gabriel Figueroa', 'gfigueroa@gmail.com'),
    (15,'Javier Bravo', 'jbravo@gmail.com'),
    (16,'Alexander Burbano', 'aburbano@gmail.com'),
    (17,'Elizabet Navia', 'enavia@gmail.com'),
    (18,'Sebastian Castillo', 'scastillo@gmail.com'),
    (19,'Diana Garcia', 'dgarcia@gmail.com'),
    (20,'Luisa Lopez', 'llopez@gmail.com')
;


INSERT INTO Authors
    (Id_A, Name, Country)
VALUES
    (1,'J.D. Salinger', 'USA'),
    (2,'F. Scott. Fitzgerald', 'USA'),
    (3,'Jane Austen', 'UK'),
    (4,'Scott Hanselman', 'USA'),
    (5,'Jason N. Gaylord', 'USA'),
    (6,'Pranav Rastogi', 'India'),
    (7,'Todd Miranda', 'USA'),
    (8,'Christian Wenz', 'USA'),
    (9,'Jorge Luis Borges', 'Argentina'),
    (10,'Julio Cortázar', 'Argentina'),
    (11,'Howard P. Lovecraft', 'USA'),
    (12,'Haruki Murakami', 'Japón'),
    (13,'Isaac Asimov', 'Rusia'),
    (14,'Mario Benedetti', 'Argentina'),
    (15,'Fiodor Dostoievski', 'Rusia'),
    (16,'Pablo Neruda', 'Chile'),
    (17,'Oscar Wilde', 'Irlanda'),
    (18,'Edgar Allan Poe', 'USA'),
    (19,'Charles Dickens', 'Inglaterra'),
    (20,'Mark Twain', 'Usa'),
    (21,'Bram Stoker', 'Irlanda')
;

INSERT INTO Books
    (Id_B, Title)
VALUES
    (1, 'The Catcher in the Rye'),
    (2, 'Nine Stories'),
    (3, 'Franny and Zooey'),
    (4, 'The Great Gatsby'),
    (5, 'Tender id the Night'),
    (6, 'Pride and Prejudice'),
    (7, 'Professional ASP.NET 4.5 in C# and VB'),
    (8, 'El Aleph'),
    (9, 'Ficciones'),
    (10, 'Rayuela'),
    (11, 'Historias de cronopios y de famas'),
    (12, 'Los mitos de Cthulhu'),
    (13, 'Tokio Blues'),
    (14,"El fin de la eternidad"),
    (15, "La tregua"),
    (16, 'Noches blancas'),
    (17, 'Veinte poemas de amor y una canción desesperada'),
    (18, 'El retrato de Dorian Gray'),
    (19, 'El cuervo'),
    (20, 'Cuento de navidad'),
    (21, 'Las aventuras de Tom Sawyer'),
    (22, 'Dracula')
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