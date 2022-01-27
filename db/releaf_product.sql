create table product
(
    id          int auto_increment
        primary key,
    name        char(50)  not null,
    price       double    not null,
    image       char(50)  not null,
    category    int       null,
    rating      int       null,
    description char(255) null,
    constraint product_category_categoryId_fk
        foreign key (category) references category (id)
);

INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (1, 'Mate Ingwer Zitrone', 9.99, 'tee_000', 1, 1, 'Der auffrischende Geschmack von Mate trifft auf den leicht säuerlich-/bitteren Geschmack von Ingwer und Zitrone. Der Tee hat eine Konzentrationsstärkende Wirkung.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (2, 'Guaven Blätter Tee', 5.99, 'tee_001', 1, 3, 'Der sanfte fruchtig, exotische Geschmack der Guave kommt mit einer süßlichen Note zum Vorschein. Der Tee hat eine Konzentrationsstärkende Wirkung.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (3, 'Jute Tee', 8.5, 'tee_002', 1, 4, 'Der frische Tee bringt einen mild-blumigen Geschmack mit einer Süßen Note hervor. Der Tee hat eine Konzentrationsstärkende Wirkung.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (4, 'Respaldar Tee', 10.85, 'tee_003', 1, 5, 'Der frische Genuss aus Mango- und Papayablättern verleiht dem Tee seine einzigartige süße. Der Tee hat eine Konzentrationsstärkende Wirkung.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (5, 'Mangoblätter Tee', 12.99, 'tee_004', 1, 2, 'Der Tee überzeugt mit seinem süß tropischem Geschmack. Der Tee hat eine Konzentrationsstärkende Wirkung.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (6, 'Yunnan Pu Erh', 9.99, 'tee_005', 2, 3, 'Der Tee überzeugt mit seinem kräftigen, würzig-erdigen Geschmack und senkt den Cholesterinspiegel und den Blutdruck.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (7, 'Lapsang Souchong', 10.99, 'tee_006', 2, 1, 'Mit seiner feinen rauchigen und holzigen Note und leichter süße überzeugt dieser Tee aus China. Dieser Tee hilft bei Magen- und Darmbeschwerden und hat eine Heilende Wirkung auf den Verdauungstrakt.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (8, 'Yerba Mate Zitrone', 9.99, 'tee_007', 2, 5, 'Dieser Tee überzeugt durch seinen erdig, rauchigen Geschmack mit seiner frischen süßlich-bitteren Note. Neben den vielen Vitaminen die der Tee enthält, ist der Tee Leistungsstärkend und kreislauffördernd');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (9, 'Yerba Mate Minze', 11.99, 'tee_008', 2, 4, 'Dieser Tee überzeugt durch seinen erdig, rauchigen Geschmack mit seiner erfrischenden leicht scharfen Note. Neben den vielen Vitaminen die der Tee enthält, ist der Tee leistungsstärkend und kreislauffördernd.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (10, 'Mate Waldbeere', 12.99, 'tee_001', 2, 2, 'Der auffrischende Geschmack der Mate vereint sich harmonisch mit verschiedenen Waldbeeren. Dieser Tee fördert die Verdauung und sorgt für Linderungen von Entzündungen der Harnwege.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (11, 'Blooming Tea Carmelia Lady', 9.99, 'tee_002', 3, 3, 'Nicht nur der leichte Jasmin Geschmack überzeugt bei dem Tee, sondern auch die besonderen Teeröschen die sich in dem Wasser öffnen. Dieser Tee ist genau richtig zum Entspannen.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (12, 'Jasmin White Dragon', 20.99, 'tee_003', 3, 5, 'Ein lieblicher, stark duftender, aromatischer chinesischer Grüntee mit weißen Jasminblüten. Dieser Tee ist genau richtig zum Entspannen.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (13, 'Bai Hao Yin Zhen', 19.99, 'tee_004', 3, 0, 'Der weiße Tee harmoniert wunderbar mit seinem süß, pflanzlichen zarten Geschmack. Dieser Tee ist genau richtig zum Entspannen.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (14, 'Basilikum Orange Ingwer', 21.99, 'tee_005', 4, 5, 'Dieser Tee vereint die fruchtige süße der Orange mit der sanften schärfe der Ingwer und der frische des Basilikums.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (15, 'Aloe Vera Beeryfrucht', 9.99, 'tee_006', 4, 4, 'Die sanfte Milde der Aloe Vera harmoniert hervorragend mit dem frischen Fruchtgeschmack.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (16, 'Birnen Mango Physalis', 15.99, 'tee_007', 4, 4, 'Dieser Früchtetee überzeugt mit seinem sanften, süßen Geschmack und ist wertvoll an Vitamin B und C.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (17, 'Winterglitzern', 9.99, 'tee_008', 4, 3, 'Die Kirsch-Mandel-Marzipan Note versetzt einen direkt in eine kuschelige Winterstimmung.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (18, 'Glühweinmischung Weihnachtsmarkt', 7.99, 'tee_001', 4, 2, 'Gewürznelken und Zimtrinde verleihen den typischen Geschmack des Glühweins und bringen einem die Weihnachtsmarktatmosphäre nach Hause.');
INSERT INTO releaf.product (id, name, price, image, category, rating, description) VALUES (19, 'Acerola Kirsche', 10.99, 'tee_002', 4, 5, 'Der Kraftvolle aromatische Kirschgeschmack bei diesem Tee ist für jeden Kirschliebhaber die richtige Entscheidung. 
');