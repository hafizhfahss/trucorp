CREATE table users(
	id int(5) NOT NULL,
	nama varchar(101) NOT NULL,
	kantor varchar(21) NOT NULL,
	CHECK(kantor='pusat' or kantor='cabang'),
	PRIMARY KEY(ID)
);


INSERT INTO users (id,nama,kantor) VALUES (15,'Praditya H F','pusat');
