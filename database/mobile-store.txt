-- user table :

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `gender` ENUM('male', 'female') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;


-- cart table :

CREATE TABLE `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;

-- product table :

CREATE TABLE `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4;

-- insert data into product table :

INSERT INTO `products` (`name`, `price`, `image`) VALUES
('Xiaomi 13T', '422', 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-13t.jpg'),
('Vivo x100', '660', 'https://fdn2.gsmarena.com/vv/bigpic/vivo-x100.jpg'),
('Samsung Galaxy S23 FE', '400', 'https://fdn2.gsmarena.com/vv/bigpic/samsung-galaxy-s23-fe.jpg'),
('Apple iPhone 15 Pro Max', '1200', 'https://fdn2.gsmarena.com/vv/bigpic/apple-iphone-15-pro-max.jpg'),
('Google Pixel 8 Pro', '800', 'https://fdn2.gsmarena.com/vv/bigpic/google-pixel-8-pro.jpg'),
('Xiaomi Poco M6 Pro', '110', 'https://fdn2.gsmarena.com/vv/bigpic/xiaomi-poco-m6-pro.jpg'),
('Realme Narzo 60x', '130', 'https://fdn2.gsmarena.com/vv/bigpic/realme-narzo-60x-5g.jpg'),
('Realme 11 Pro', '205', 'https://fdn2.gsmarena.com/vv/bigpic/realme-11-pro.jpg'),
('vivo V29e', '320', 'https://fdn2.gsmarena.com/vv/bigpic/vivo-v29e-international.jpg'),
('Infinix Note 30 Pro', '300', 'https://fdn2.gsmarena.com/vv/bigpic/infinix-note-30-pro.jpg'),
('Infinix GT 10 Pro', '320', 'https://fdn2.gsmarena.com/vv/bigpic/infinix-gt10-pro-5g.jpg'),
('Motorola Edge 40', '362', 'https://fdn2.gsmarena.com/vv/bigpic/motorola-edge-40.jpg'),
('Motorola Razr 40 Ultra', '1025', 'https://fdn2.gsmarena.com/vv/bigpic/motorola-razr-40-ultra.jpg'),
('Nokia 110 (2022)', '20', 'https://fdn2.gsmarena.com/vv/bigpic/nokia-110-2022.jpg'),
('Nokia C210', '110', 'https://fdn2.gsmarena.com/vv/bigpic/nokia-c210.jpg'),
('Huawei Mate 60 Pro', '890', 'https://fdn2.gsmarena.com/vv/bigpic/huawei-mate-60-pro.jpg'),
('Huawei P60 Pro', '830', 'https://fdn2.gsmarena.com/vv/bigpic/huawei-p60-pro.jpg'),
('OnePlus Open', '1700', 'https://fdn2.gsmarena.com/vv/bigpic/oneplus-open-10.jpg'),
('Oppo A2', '550', 'https://fdn2.gsmarena.com/vv/bigpic/oneplus-11.jpg'),
('Oppo Reno10 Pro', '500', 'https://fdn2.gsmarena.com/vv/bigpic/oppo-reno10-pro-international.jpg'),
('Tecno Camon 20 Pro', '25', 'https://fdn2.gsmarena.com/vv/bigpic/tecno-camon20-pro.jpg');
