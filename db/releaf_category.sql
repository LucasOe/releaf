create table category
(
    id    int auto_increment
        primary key,
    name  char(50) not null,
    image char(50) null
);

INSERT INTO releaf.category (id, name, image) VALUES (1, 'Konzentrationstee', 'tee_001');
INSERT INTO releaf.category (id, name, image) VALUES (2, 'Gesundheitstee', 'tee_002');
INSERT INTO releaf.category (id, name, image) VALUES (3, 'Entspannungstee', 'tee_003');
INSERT INTO releaf.category (id, name, image) VALUES (4, 'Früchtetee', 'tee_004');