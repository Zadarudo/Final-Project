create TABLE memo (
    memo_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    memo_title varchar(200) not null,
    memo_note varchar(200) not null,
);

INSERT INTO memo (memo_title, memo_note)
   VALUES ('Stuff', 'hello hello hello');
