
1. Create db table:
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `email` varchar(50),
  `age` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19;

2. Setup the db connection from config/database.php
3. Change the value of js variable apiUrl into your root url from /index.html and /edit.html
4. Run yourRootURL from the browser

## PHP CRUD API
* `GET -http://cc.local/api/read.php` Fetch ALL Records
* `GET - http://cc.local/api/single_read.php/?id=2` Fetch Single Record
* `POST - http://cc.local/api/create.php` Create Record
* `POST -http://cc.local/api/update.php` Update Record
* `DELETE - http://cc.local/api/delete.php` Remove Records
