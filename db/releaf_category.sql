create table category
(
    id   int auto_increment
        primary key,
    name char(50) not null
);

INSERT INTO releaf.category (id, name) VALUES (1, 'Konzentrationstee');
INSERT INTO releaf.category (id, name) VALUES (2, 'Gesundheitstee');
INSERT INTO releaf.category (id, name) VALUES (3, 'Entspannungstee');
INSERT INTO releaf.category (id, name) VALUES (4, 'Früchtetee');