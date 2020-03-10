--
-- Estrutura da tabela `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
	`id`			varchar(128) NOT NULL,
	`ip_address`	varchar(45) NOT NULL,
	`timestamp`		int(10) UNSIGNED NOT NULL DEFAULT '0',
	`acesso`		timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`data`			blob NOT NULL,
	
	PRIMARY KEY (`id`),
	KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
