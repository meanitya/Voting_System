CREATE TABLE user_data (
  id VARCHAR(50) PRIMARY KEY,
  username VARCHAR(50),
  mobile VARCHAR(50),
  password VARCHAR(50),
  user_type ENUM('voter', 'group'),
  status INT,
  votes INT DEFAULT 0 CHECK (votes IN (0, 1))
);
