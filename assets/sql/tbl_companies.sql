--
-- Estrutura da tabela `tbl_companies`
--

DROP TABLE IF EXISTS `tbl_companies`;
CREATE TABLE IF NOT EXISTS `tbl_companies` (
	`id_company` 			int(11) auto_increment,
	`street_company`	    varchar(255) NOT NULL,
	`number_company`		varchar(255) NOT NULL,
	`complement_company`	varchar(255) NOT NULL,
	`neighborhood_company`  varchar(255) NOT NULL,
	`cep_company`			varchar(255) NOT NULL,
	`city_company`		    varchar(255) NOT NULL,
	`state_company` 		varchar(255) NOT NULL,
	`telephone_company`		varchar(255) NOT NULL,
	`mobile_company`		varchar(255) DEFAULT NULL,
	`email_company`			varchar(255) DEFAULT NULL,
	`whatsapp_company`		varchar(255) DEFAULT NULL,
	`facebook_company`		varchar(255) DEFAULT NULL,
	`instagram_company`		varchar(255) DEFAULT NULL,
	`registered`	    	timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	`updated`	       		datetime DEFAULT NULL,
	`status` 		  	    tinyint(1) DEFAULT '1',
	`excluded`		  	    tinyint(1) DEFAULT '0',

	PRIMARY KEY (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
