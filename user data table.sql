CREATE TABLE user_data (
  name VARCHAR(50),
  ph_no VARCHAR(20),
  password VARCHAR(50),
  type VARCHAR(10) DEFAULT 'VOTER',
  vote ENUM('y', 'n'),
  PRIMARY KEY (ph_no)
);
