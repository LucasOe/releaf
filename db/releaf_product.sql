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

INSERT INTO releaf.product (id, name, price, image, category) VALUES (1, 'Mate Ingwer Zitrone', 9.99, 'tee_000', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (2, 'Guaven Blätter Tee', 5.99, 'tee_001', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (3, 'Jute Tee', 8.5, 'tee_002', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (4, 'Respaldar Tee', 10.85, 'tee_003', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (5, 'Mangoblätter Tee', 12.99, 'tee_004', 1);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (6, 'Yunnan Pu Erh', 9.99, 'tee_005', 2);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (7, 'Lapsang Souchong', 10.99, 'tee_006', 2);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (8, 'Yerba Mate Zitrone', 9.99, 'tee_007', 2);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (9, 'Yerba Mate Minze', 11.99, 'tee_008', 2);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (10, 'Mate Waldbeere', 12.99, 'tee_001', 2);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (11, 'Blooming Tea Carmelia Lady', 9.99, 'tee_002', 3);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (12, 'Jasmin White Dragon', 20.99, 'tee_003', 3);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (13, 'Bai Hao Yin Zhen', 19.99, 'tee_004', 3);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (14, 'Basilikum Orange Ingwer', 21.99, 'tee_005', 4);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (15, 'Aloe Vera Beeryfrucht', 9.99, 'tee_006', 4);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (16, 'Birnen Mango Physalis', 15.99, 'tee_007', 4);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (17, 'Winterglitzern', 9.99, 'tee_008', 4);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (18, 'Glühweinmischung Weihnachtsmarkt', 7.99, 'tee_001', 4);
INSERT INTO releaf.product (id, name, price, image, category) VALUES (19, 'Acerola Kirsche', 10.99, 'tee_002', 4);