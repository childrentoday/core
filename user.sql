-- База данных: `phpconstructor`
-- Структура таблицы `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `ID` int(15) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(45) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_registered` varchar(50) NOT NULL,
  `user_url` varchar(100) NOT NULL,
  `user_sys_status` int(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`ID`, `user_login`, `user_pass`, `user_email`, `user_registered`, `user_url`, `user_sys_status`) VALUES
(1, 'Name', '123456', 'name@phpconstructor.loc', '14/08/2022 12:45', 'https://phpconstructor.local/user', 5),
(2, 'Имя', '123456', 'name@phpconstructor.loc', '14/08/2022 12:45', 'https://phpconstructor.local/user', 5);
