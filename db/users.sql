create table users (
    user_id int not null auto_increment,
    username char(15) not null,
    password char(15) not null,
    name char(10) not null,
    email char(80),
    created_at char(20),
    primary key(user_id)
);