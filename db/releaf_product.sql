create table product
(
    id       int auto_increment
        primary key,
    name     char(50) not null,
    price    double   not null,
    image    char(50) not null,
    category int      null,
    constraint product_category_categoryId_fk
        foreign key (category) references category (id)
);

INSERT INTO releaf.product (id, name, price, image, category) VALUES (1, 'Früchtetee', 9.99, 'tee_000', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (2, 'Kräutertee', 5.99, 'tee_001', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (3, 'Schwarzer Tee', 8.5, 'tee_002', 2);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (4, 'Zimt Tee', 10.85, 'tee_003', 3);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (5, 'Süße Kirsche', 999.999, 'tee_004', 3);