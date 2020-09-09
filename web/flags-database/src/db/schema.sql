CREATE DATABASE IF NOT EXISTS flags_database;
USE flags_database;

GRANT SELECT ON flags_database.* TO 'challengeuser'@'%' IDENTIFIED BY 'geasbrebea';

CREATE TABLE IF NOT EXISTS flags
(
  country VARCHAR(64) PRIMARY KEY,
  colors VARCHAR(128) NOT NULL
);

INSERT INTO flags
  (country, colors)
VALUES
  ('Switzerland', 'red and white'),
  ('UK', 'red, white and blue'),
  ('Romania', 'blue, yellow and red'),
  ('France', 'blue, white and red'),
  ('USA', 'blue, red and white'),
  ('Italy', 'green, white and red'),
  ('Spain', 'red and yellow'),
  ('you_got_the_flag', 'slntCTF{the_input_must_be_sanitized}'),
  ('Russia', 'white, blue and red'),
  ('Netherlands', 'red, white and blue'),
  ('Germany', 'black, red and yellow');