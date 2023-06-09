create table products (
    product_id int not null auto_increment,
    name char(100) not null,
    price int not null,
    brand char(50) not null,
    category char(50) not null,
    content text not null,
    rank int,
    is_in_cart boolean,
    primary key(product_id)
);