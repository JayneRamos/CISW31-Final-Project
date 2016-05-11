CREATE DATABASE strawberrymitten;

USE DATABASE strawberrymitten;

-- ----------------------
-- Create Customers table
-- ----------------------
CREATE TABLE Customers
(
  cust_id       char(10)  NOT NULL ,
  cust_name     char(50)  NOT NULL ,
  cust_address  char(50)  NOT NULL ,
  cust_city     char(50)  NOT NULL ,
  cust_state    char(5)   NOT NULL ,
  cust_zip      char(10)  NOT NULL ,
  cust_email    char(255) NOT NULL ,
  cust_password char(64)  NOT NULL ,
  admin         tinyint   NOT NULL
);

-- -----------------------
-- Create OrderItems table
-- -----------------------
CREATE TABLE OrderItems
(
  order_num  int           NOT NULL ,
  order_item int           NOT NULL ,
  plu_id     char(10)      NOT NULL ,
  quantity   int           NOT NULL ,
  prod_price decimal(8,2)  NOT NULL 
);


-- -------------------
-- Create Orders table
-- -------------------
CREATE TABLE Orders
(
  order_num  int      NOT NULL ,
  order_date datetime NOT NULL ,
  cust_id    char(10) NOT NULL 
);

-- ---------------------
-- Create Products table
-- ---------------------
CREATE TABLE Products
(
  plu_id    	char(4)      NOT NULL ,
  prod_name  	char(25)     NOT NULL ,
  prod_price 	decimal(8,2) NOT NULL ,
  prod_desc  	text         NULL , 
  prod_notes	text		     NULL ,
  prod_onhand tinyint	   	 NULL ,
  prod_image  char(30)     NOT NULL
);


-- -------------------
-- Define primary keys
-- -------------------
ALTER TABLE Customers  ADD PRIMARY KEY (cust_id);
ALTER TABLE OrderItems ADD PRIMARY KEY (order_num, order_item);
ALTER TABLE Orders     ADD PRIMARY KEY (order_num);
ALTER TABLE Products   ADD PRIMARY KEY (plu_id);


-- -------------------
-- Define foreign keys
-- -------------------
ALTER TABLE OrderItems ADD CONSTRAINT FK_OrderItems_Orders   FOREIGN KEY (order_num) REFERENCES Orders (order_num);
ALTER TABLE OrderItems ADD CONSTRAINT FK_OrderItems_Products FOREIGN KEY (plu_id)    REFERENCES Products (plu_id);
ALTER TABLE Orders     ADD CONSTRAINT FK_Orders_Customers    FOREIGN KEY (cust_id)   REFERENCES Customers (cust_id);
