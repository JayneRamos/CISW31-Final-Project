
-- ------------------------
-- Populate Customers table
-- ------------------------
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("101", "Jason Smith", "527 Midvale Ave", "Los Angeles", "NC", "90024", "jsmith@gmail.com", "pass101", 0);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("102", "Victor Zamora", "1600 Pennsylvania Ave", "Washington DC", "DC", "00012", "vzamorra@mtsac.edu", "pass102", 0);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("103", "John Blyska", "1100 N Grand Ave", "Walnut", "CA", "91789", "jblyska@mtsac.edu", "pass103", 0);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("104", "Alejandro Navia", "5500 University Parkway", "San Bernardino", "AZ", "92407", "art.navia@yahoo.com", "pass104", 1);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("105", "Junko Fujioka", "900 University Ave.", "Riverside", "HI", " 99521 ", "jfujioka@student.mtsac.edu", "pass105", 1);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("106", "Steven Desa", "1950 Third St", "La Verne", "MA", "98710", "stevenjdesa@gmail.com", "pass106", 1);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("107", "Jayne Ramos", "3801 W Temple Ave", "Pomona", "IN", "91768", "jramos125@student.mtsac.edu", "pass107", 1);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("108", "Oscar Campos", "333 N. College Way", "Claremont", "NV", "91711", "ocampos@student.mtsac.edu", "pass108", 1);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("109", "Tommy Ocampo", "1030 Columbia Avenue", "Montclair", "NM", "92768", "tocampo2@student.mtsac.edu", "pass109", 1);
INSERT INTO Customers(cust_id, cust_name, cust_address, cust_city, cust_state, cust_zip, cust_email, cust_password, administrator)
VALUES("110", "Anthony Coe", "301 Platt Boulevard,", "Upland", "FL", "91837", "acoe1@student.mtsac.edu", "pass110", 1);



-- -----------------------
-- Populate Products table  
-- -----------------------

INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P001", "Atis", 2.75, "Sweet and Creamy", "Also known as Sugar Apple.", 1000, image/Atis.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P002", "Durian", 8.25, "Unique Aroma", "King of all tropical fruits.", 1000, image/durian.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P003", "Jackfruit", 1.50, "Aromatic Flavor", "World's largest tree-born fruit.", 1000, image/jackfruit.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P004", "Caimito", 3.50, "Sweet and Delicious", "Also known as Star Apple.", 1000, image/caimito.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P005", "Calamondin", 1.25, "Very Refreshing", "Perfect for morning juice.", 1000, image/calamondin.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P006", "Mangga", 7.75, "Sweetest Fruit", "National fruit of the Philippines.", 1000, image/Mangga.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P007", "Mangosteen", 6.50, "Creamy and Sweet", "Unique appearance and flavor.", 1000, image/mangosteen.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P008", "Rambutan", 4.75, "Sweet and Juicy", "Energy-giving fruit.", 1000, image/rambutan.jpg);
INSERT INTO products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P009", "Santol", 5.25, "Sweet and Sour", "Popular summer fruit.", 1000, image/santol.jpg);
INSERT INTO products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P010", "Starfruit", 2.50, "Sweet & Tart", "Star-shaped fruit.", 1000, image/star-fruit.jpg);
INSERT INTO products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P011", "Suha-Pomelo", 3.25, "Mild and Sweet", "Largest of all citrus fruits.", 1000, image/suhapomelo.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P012", "Strawberry", 3.00, "From California", "The fruit that started it all!", 1000, image/strawberry.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P013", "Banana", 1.50, "Chiquita Yellow", "One of the healthiest fruits.", 1000, image/banana.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P014", "Apple", 1.00, "Red and Delicious", "Extra-large  variety gaining popularity.", 1000, image/apple.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P015", "Cara Orange", 0.80, "Sweet and Delicious", "Rosy fleshed and won't overripen on the tree.", 1000, image/orange.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P016", "Grapes", 2.00, "Green and Seedless", "Larry Itilong's rebel fruit!", 1000 , image/grapes.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P017", "Lucuma", 4.50, "Unique Flavor", "Sweet Gold of the Incas", 1000 , image/Lucuma.png);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P018", "Avocado", 2.50, "Creamy and Delicious", "Packed with nutrients and is a 'good fat'.", 1000 , image/avocado.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P019", "Bayabas", 5.75, "Delicious and Nutritious", "The bark and leaves are used for herbal medicine.", 1000 , image/bababas.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P020", "Chico Sapodilla", 6.50, "Sweet and Pleasant", "Interesting and desirable tropical fruit.", 1000 , image/chico sapodilla.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P021", "Coconut", 3.25, "Delicious and Versatile", "Truly remarkable food and medicine.", 1000 , image/coconut.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P022", "Guyabano", 4.25, "Sweet and Delicious", "Tastes like a combination of strawberry, pineapple, coconut and banana.", 1000 , image/guyabano.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P023", "Java Plum", 2.75, "Mildly Sour and Astringent", "Possible health benefits include lowering blood sugars.", 1000 , image/javaplum.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P024", "Jocote Spanish Plum", 2.00, "Small and Very Sweet", "A genus of flowering plants in the cashew family.", 1000 , image/jocotespanishplum.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P025", "Langka", 5.75, "Unique Fruity Flavor", "Species of tree in the mulberry or fig family.", 1000 , image/langka.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P026", "Lanzones", 5.25, "Sweet and Succulent", " 'Fruit for the Gods,' with its very own Lanzones Festival!", 1000 , image/lanzones.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P027", "Muntingia", 4.75, "Sweet and Sticky", "Birds and bats love this cherry tree.", 1000 , image/muntingia.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P028", "Pakwan", 7.50, "Sweet and Juicy", "The salted seeds are an addictive snack.", 1000 , image/pakwanwatermelon.JPG);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P029", "Pinya", 8.00, "Sweet and Tart", "Is nothing short of one pretty sweet superfood.", 1000 , image/pinya.jpg);
INSERT INTO Products(prod_id, prod_name, prod_price, prod_desc, prod_notes, prod_onhand, prod_image)
VALUES("P030", "Soursop", 4.50, "Delicious and Sweet", "Believed to be a 'natural cancer cell killer.' ", 1000 , image/soursop.jpg);



-- ---------------------
-- Populate Orders table
-- ---------------------
INSERT INTO Orders(order_num, order_date, cust_id)
VALUES(20005, "2016-05-01", "101");


-- -------------------------
-- Populate OrderItems table
-- -------------------------
INSERT INTO OrderItems(order_num, order_item, prod_id, quantity, prod_price)
VALUES(20005, 1, "P012", 5, 3.00);
INSERT INTO OrderItems(order_num, order_item, prod_id, quantity, prod_price)
VALUES(20005, 2, "P002", 7, 1.50);
