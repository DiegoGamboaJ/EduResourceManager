CREATE DATABASE IF NOT EXISTS db_jwreservetablet;

USE db_jwreservetablet;

CREATE TABLE IF NOT EXISTS users(
id              INT UNSIGNED NOT NULL AUTO_INCREMENT,
role            VARCHAR(50) NOT NULL,
email           VARCHAR(255) NOT NULL,
password        VARCHAR(255) NOT NULL,
name            VARCHAR(100) NOT NULL,
surname         VARCHAR(200),
created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
updated_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
remember_token  VARCHAR(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS schedules(
id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
cycle       VARCHAR(50),
created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
updated_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT  pk_schedules PRIMARY KEY(id)
)ENGINE=InnoDb DEFAULT utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS grades(
id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
user_id     INT UNSIGNED,
schedule_id INT UNSIGNED,
name        VARCHAR(50) NOT NULL,
created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT pk_grades PRIMARY KEY(id),
CONSTRAINT fk_grades_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_grades_schedules FOREIGN KEY(schedule_id) REFERENCES schedules(id) 
)ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS blocks(
id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
schedule_id INT UNSIGNED NOT NULL,
start_time  time,
end_time    time,
created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT pk_blocks PRIMARY KEY(id),
CONSTRAINT fk_blocks_schedules FOREIGN KEY(schedule_id) REFERENCES schedules(id)
)ENGINE=InnoDb DEFAULT CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS reservation(
id          INT UNSIGNED NOT NULL AUTO_INCREMENT,
grade_id    INT UNSIGNED NOT NULL,
block_id    INT UNSIGNED NOT NULL,
date        date,
important   tinyint(1),
created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
CONSTRAINT pk_reservation PRIMARY KEY(id),
CONSTRAINT fk_reservation_grades FOREIGN KEY(grade_id) REFERENCES grades(id),
CONSTRAINT fk_reservation_users FOREIGN KEY(user_id) REFERENCES users(id),
CONSTRAINT fk_reservation_blocks FOREIGN KEY(block_id) REFERENCES blocks(id)
)ENGINE=InnoDb DEFAULT utf8mb4 COLLATE utf8mb4_unicode_ci;