drop schema if exists spotdb;
create schema spotdb;
use spotdb;

-- if tables exist do not create them
drop table if exists customer;
drop table if exists lot;
drop table if exists reservation;
drop table if exists spot;
drop table if exists orders;
drop table if exists vehicles;

CREATE TABLE customer (
    EMAIL VARCHAR(40) NOT NULL,
    FNAME VARCHAR(25) NOT NULL,
    LNAME VARCHAR(25) NOT NULL,
    PWD VARCHAR(20) NOT NULL,
    LICENSE_NUM VARCHAR(16) NOT NULL,
    PRIMARY KEY (EMAIL)
);

CREATE TABLE lot (
	LOT_ID VARCHAR(4),
    ADDRESS VARCHAR(100),
    LOT_NAME VARCHAR(20) NOT NULL,
	PRIMARY KEY (LOT_ID)
);

CREATE TABLE spot (
	SPOT_ID VARCHAR(4),
    LOT_ID VARCHAR(4),
    STD_AVAILABILITY MEDIUMINT NOT NULL,
    VIP_AVAILABILITY MEDIUMINT NOT NULL,
    STD_PRICE DECIMAL(4,2) NOT NULL,
    VIP_PRICE DECIMAL(4,2) NOT NULL,
    R_DATE DATE NOT NULL,
	PRIMARY KEY (SPOT_ID),
    FOREIGN KEY (LOT_ID) REFERENCES lot(LOT_ID)
);

CREATE TABLE reservation (
	RESERVATION_ID VARCHAR(4),
    SPOT_ID VARCHAR(4) NOT NULL,
    START_TIME TIME NOT NULL,
    END_TIME TIME NOT NULL,
    CLASS VARCHAR(3) NOT NULL,
    PARK_LOC VARCHAR(3) NOT NULL,
	PRIMARY KEY (RESERVATION_ID),
    FOREIGN KEY (SPOT_ID) REFERENCES spot(SPOT_ID)
);

CREATE TABLE orders (
	ORDER_ID VARCHAR(4), 
    EMAIL VARCHAR(4) NOT NULL,
	RESERVATION_ID VARCHAR(4) NOT NULL,
	SPOT_ID VARCHAR(4) NOT NULL,
    PRICE DECIMAL(4,2),
    PRIMARY KEY (ORDER_ID),
    FOREIGN KEY (EMAIL) REFERENCES customer(EMAIL),
    FOREIGN KEY (RESERVATION_ID) REFERENCES reservation(RESERVATION_ID),
    FOREIGN KEY (SPOT_ID) REFERENCES spot(SPOT_ID)
);

CREATE TABLE vehicle (
	VEHICLE_ID VARCHAR(4), 
    EMAIL VARCHAR(4) NOT NULL,
	MAKE VARCHAR(10) NOT NULL,
    MODEL VARCHAR(15) NOT NULL,
    V_YEAR VARCHAR(4) NOT NULL,
    COLOR VARCHAR(12) NOT NULL,
    LICENSE_PLATE VARCHAR(8) NOT NULL,
    PRIMARY KEY (VEHICLE_ID),
    FOREIGN KEY (EMAIL) REFERENCES customer(EMAIL)
);
