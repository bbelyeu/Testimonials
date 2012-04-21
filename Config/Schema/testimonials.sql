create table testimonials (
    id int unsigned not null auto_increment primary key,
    copy text not null default '', 
    author varchar(255) not null default '', 
    link varchar(255) not null default '', 
    created DATETIME,
    modified DATETIME
) engine=innodb default charset=utf8;
