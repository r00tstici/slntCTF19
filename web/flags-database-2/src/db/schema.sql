CREATE DATABASE IF NOT EXISTS flags_database;
USE flags_database;

GRANT SELECT ON flags_database.* TO 'challengeuser'@'%' IDENTIFIED BY 'geasbrebea';

CREATE TABLE IF NOT EXISTS flags
(
  country VARCHAR(64) PRIMARY KEY,
  colors VARCHAR(128) NOT NULL
);

CREATE TABLE IF NOT EXISTS secrets
(
  secret VARCHAR(64) PRIMARY KEY
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
  ('Russia', 'white, blue and red'),
  ('Netherlands', 'red, white and blue'),
  ('Germany', 'black, red and yellow');

INSERT INTO secrets
  (secret)
VALUES
  ('slntCTF{what_about_a_prepared_statement}');