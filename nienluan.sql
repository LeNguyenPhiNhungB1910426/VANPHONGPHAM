use nienluan;
CREATE TABLE sanpham (
  Masanpham char(10) primary key NOT NULL,
  Tensp varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  Gia float NOT NULL,
  Hinhanh varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
drop table sanpham;
drop table sanpham;
INSERT INTO sanpham (Masanpham, Tensp, Gia, Hinhanh) VALUES
('MLO18', 'BÚT XÓA NƯỚC THIÊN LONG', 23000, 'img/hinh24.jpg'),
('TN007', 'BÚT LÔNG FIBER PEN', 75000, 'img/hinh25.jpg'),
('TN112', 'BÚT MỰC XANH', 3500, 'img/hinh26.png'),
('ST212', 'BÚT DẠ QUANG', 30000, 'img/hinh27.png'),
('ST311', 'BÚT MÁY', 200000, 'img/hinh28.jpg'),
('ML152', 'BÚT CHÌ', 2500, 'img/hinh29.jpg');
drop table sanpham;
CREATE TABLE CART (
  NameProduct varchar(100) NOT NULL,
  Price float NOT NULL,
  Quantity int(11) NOT NULL,
  Notes varchar(100) NOT NULL, 
  Masanpham char(10) primary key NOT NULL
);
drop table CART;
CREATE TABLE CART1 (
  NameProduct varchar(100) NOT NULL,
  Price float NOT NULL,
  Quantity int(11) NOT NULL,
  Notes varchar(100) NOT NULL, 
  Masanpham char(10) primary key NOT NULL
);
drop table CART1;
CREATE TABLE users (
  id int(20) NOT NULL primary key auto_increment,
  name varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(100) NOT NULL,
  created_at datetime NOT NULL,
  updated_at datetime NOT NULL
);
drop table users;
INSERT INTO CART (Masanpham, NameProduct, Price, Quantity, Notes) VALUES
('ML018', 'BÚT XÓA NƯỚC THIÊN LONG', 23000, 1, " "),
('TN007', 'BÚT LÔNG FIBER PEN', 75000, 1, " "),
('TN112', 'BÚT MỰC XANH', 3500, 1, " "),
('ST212', 'BÚT DẠ QUANG', 30000, 1, " "),
('ST311', 'BÚT MÁY', 200000, 1, " "),
('ML152', 'BÚT CHÌ', 2500, 1, " ");


