create table helps (
    help_id int not null auto_increment,
    username char(15) not null,
    name char(10) not null,
    subject char(200) not null,
    content text not null,
    created_at char(20) not null,
    file_name char(40),
    file_type char(40),
    file_copied char(40),
    primary key(help_id)
);