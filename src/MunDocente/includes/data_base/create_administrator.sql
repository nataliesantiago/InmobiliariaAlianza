CREATE OR REPLACE TABLE ADMINISTRATOR(
	USERNAME	VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	PASSWORD	VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
	AREA				INT NOT NULL,
	PRIMARY KEY(USERNAME)
) ENGINE = INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;