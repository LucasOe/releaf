create table product
(
    id    int auto_increment
        primary key,
    name  char(50) not null,
    price double   not null
);

INSERT INTO releaf.product (id, name, price) VALUES (1, 'Früchtetee', 9.99);
INSERT INTO releaf.product (id, name, price) VALUES (2, 'Kräutertee', 5.99);
INSERT INTO releaf.product (id, name, price) VALUES (3, 'Schwarzer Tee', 8.5);