CREATE TABLE notes (
    note_id int NOT NULL AUTO_INCREMENT,
    user_id int NOT NULL,
    note varchar(255) NOT NULL,
    lastmod timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (note_id),
    FOREIGN KEY (user_id) REFERENCES main(user_id)
  );
