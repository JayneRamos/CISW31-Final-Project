
-- ------------------------
-- Populate Customers table
-- ------------------------
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("101", "Jason Smith", "527 Midvale Ave", "Los Angeles", 'NC', "90024", "jsmith@gmail.com", "pass101");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("102", "Victor Zamora", "1600 Pennsylvania Ave", "Washington DC", "DC", "00012", "vzamorra@mtsac.edu", "pass102");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("103", "John Blyska", "1100 N Grand Ave", "Walnut", "CA", "91789", "jblyska@mtsac.edu", "pass103");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("104", "Alejandro Navia", "5500 University Parkway", "San Bernardino", "AZ", "92407", "art.navia@yahoo.com", "pass104");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("105", "Junko Fujioka", "900 University Ave.", "Riverside", "HI", " 99521 ", "jfujioka@student.mtsac.edu", "pass105");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("106", "Steven Desa", "1950 Third St", "La Verne", "MA", "98710", "stevendesa@gmail.com", "pass106");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("107", "Jayne Ramos", "3801 W Temple Ave", "Pomona", "IN", "91768", "jramos125@student.mtsac.edu", "pass107");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("108", "Oscar Campos", "333 N. College Way", "Claremont", "NV", "91711", "ocampos@student.mtsac.edu", "pass108");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("109", "Tommy Ocampo", "1030 Columbia Avenue", "Montclare", "NM", "92768", "tocampo2@student.mtsac.edu", "pass109");
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password)
VALUES("110", "Anthony Coe", "301 Platt Boulevard,", "Upland", "FL", "91837", "acoe1@student.mtsac.edu", "pass110");



-- -----------------------
-- Populate Products table
-- -----------------------
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES('3085', 'Strawberry', 3.00, 'From California', "The fruit that started it all!", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES('4235', 'Banana', 1.50, 'Chiquita Yellow', "One of the healthiest fruits.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES('3284', 'Apple', 1.00, 'Red and Delicious', 'Extra large variety gaining popularity.', 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES('3110', 'Orange', 0.80, 'Cara Navel', "Rosy fleshed and won't overripen on the tree.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES('3359', 'Grapes', 2.00, 'Green and Seedless', "Larry Itilong's rebel fruit!", 1000 );
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("3382", "Atis", 2.75, "Sweet and Creamy", "Also known as Sugar Apple.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("4598", "Durian", 8.25, "Unique Aroma", "King of all tropical fruits.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("3454", "Jackfruit", 1.50, "Aromatic Flavor", "World's largest tree-born fruit.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("4302", "Caimito", 3.50, "Sweet and Delicious", "Also known as Star Apple.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("3626", "Calamondin", 1.25, "Very Refreshing", "Perfect for morning juice.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("4312", "Mangga", 7.75, "Sweetest Fruit", "National fruit of the Phillippines.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("3042", "Mangosteen", 6.50, "Creamy and Sweet", "Unique appearance and flavor.", 1000);
INSERT INTO Products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("3041", "Rambutan", 4.75, "Sweet and Juicy", "Energy-giving fruit.", 1000);
INSERT INTO products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("4220", "Santol", 5.25, "Sweet and Sour", "Popular summer fruit.", 1000);
INSERT INTO products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("4256", "Starfruit", 2.50, "Sweet & Tart", "Star-shaped fruit.", 1000);
INSERT INTO products(plu_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand)
VALUES("4279", "Suha-Pomelo", 3.25, "Mild and Sweet", "Largest of all citrus fruits.", 1000);



-- ---------------------
-- Populate Orders table
-- ---------------------
INSERT INTO Orders(order_num, order_date, cust_id)
VALUES(20005, '2016-05-01', '101');


-- -------------------------
-- Populate OrderItems table
-- -------------------------
INSERT INTO OrderItems(order_num, order_item, plu_id, quantity, prod_price)
VALUES(20005, 1, '3085', 5, 3.00);
INSERT INTO OrderItems(order_num, order_item, plu_id, quantity, prod_price)
VALUES(20005, 2, '4235', 7, 1.50);
