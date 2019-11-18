-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 14 2019 г., 10:26
-- Версия сервера: 10.1.33-MariaDB
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crucial`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categoria`
--

INSERT INTO `categoria` (`id`, `Name`) VALUES
(1, 'Главная'),
(3, 'Спорт'),
(4, 'Политика'),
(5, 'Экономика'),
(6, 'ИТ-Технология'),
(7, 'Новости Эстонии');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `text` longtext NOT NULL,
  `date` date NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `fname`, `lname`, `text`, `date`, `post_id`) VALUES
(30, 'Kirill', 'Evtushenko', 'Я считаю, что лучше продать нескольких игроков, но Карпина лучше не увольнять', '2019-11-11', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `Name` varchar(10000) NOT NULL,
  `Date` date NOT NULL,
  `Category` int(11) NOT NULL,
  `img` mediumtext NOT NULL,
  `Description` longtext NOT NULL,
  `User` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `Name`, `Date`, `Category`, `img`, `Description`, `User`) VALUES
(8, 'У Карпина большие проблемы. Он может покинуть \"Ростов\"', '2019-11-11', 3, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\1.jpg', 'Занимающий третье место в чемпионате России по футболу \"Ростов\" испытывает серьезные проблемы. Долги по зарплате и премиальными перед футболистами составляют три месяца, сообщают российские СМИ.\r\n\r\nЕсли в ближайшее время ситуация не изменится, то в зимнюю паузу ростовчане вынуждены будут продать своих ключевых игроков. Покинет команду и главный тренер Валерий Карпин.\r\n\r\nВ последнем туре чемпионата России \"Ростов\" неожиданно проиграл на своем поле одному из аутсайдеров первенства \"Тамбову\" - 1:2 (1:0).', 50),
(9, 'Ночная бомба из США. Ковальчука выгоняют из \"Лос-Анджелеса\"', '2019-11-13', 3, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\2.jpg', 'Похоже, история капитана сборной России по хоккею Ильи Ковальчука в \"Лос-Анджелесе\" и НХЛ подходит к концу.\r\n\r\nОдин из ведущих инсайдеров Северной Америки Эллиотт Фридман сообщил, что \"Лос-Анджелес\" проинформировал россиянина о его отстранении из состава. Он может тренироваться с командой, но не будет играть.\r\n\r\n\"Лос-Анджелес\" рассматривал варианты обмена Ковальчука или разрыва его контракта. Однако, судя по последним новостям, ни один, ни второй не привел к какому-то позитивному результату.\r\n\r\nИлье 36 лет, его соглашение со среднегодовой зарплатой в 6,25 млн долларов будет действовать до конца сезона 2020/21. С учетом результативности Ковальчука (9 очков в 17 матчах), его показателя полезности (-10) и очень нестабильной игры в ветеране вряд ли кто-либо был заинтересован.\r\n\r\nУ россиянина в контракте есть пункт, по которому его не могут не только обменять, но и отправить в фарм-клуб. Совсем скоро Ковальчук получит львиную часть зарплаты за текущий сезон - 5,3 млн долларов были записаны в бонус, который будет полностью выплачен 15 декабря. Останется лишь 700 000. Но есть еще 4,2 миллиона за следующий сезон — и Ковальчуку нет резона просто так от них отказываться.', 50),
(10, 'Во Франции скончался 8-кратный призер \"Тур де Франс\"', '2019-11-14', 3, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\3.jpg', 'Восьмикратный призер супермногодневной велогонки \"Тур де Франс\" Раймон Пулидор скончался во французском местечке Сен-Леонар-де-Нобла, сообщает El Mindo Deportivo.\r\n\r\nЕму было 83 года. Он 8 раз поднимался на пьедестал почета самой престижной гонки он поднимался в период с 1962 по 1976 год, однако ни разу не сумел ее выиграть, уступая сначала Жаку Анкетилю, а потом Эдди Мерксу, в итоге его имя стало во французском языке нарицательным, означающим неудачника.\r\n\r\n\"Его сердце не выдержало\", — объяснила причину смерти супруга легендарного гонщика Жизель, слова которой приводит издание.', 50),
(11, 'Очередное эстонское предприятие попало в скандал в Германии ', '2019-11-12', 5, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\4.jpg', 'На эстонское предприятие-платежного посредника TransferWise в Германии обрушился гнев банков, так на своем сайте оно указывало стоимости переводов в банках выше, чем есть на самом деле, пишет Äripäev.\r\n\r\nКак сообщает Handelsblatt, предприятие TransferWise показывало на своем сайте платы за денежные переводы и обмен валюты в Deutsche Bank, Postbank, Commerzbank, Stadtsparkasse Augsburg и Western Union выше, чем есть на самом деле, ссылаясь на то, что эти цены якобы выросли в последние три месяца на 17% из-за Брекзита.\r\n\r\nTransferWise призналось Handelsblatt, что это было действительно так, так как независимое предприятие, которое TransferWise наняло, сделало ошибку при обработке немецких данных.', 50),
(12, 'Прогноз SEB: экономический рост Эстонии замедляется', '2019-11-11', 5, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\5.jpg', 'Согласно результатам свежего экономического прогноза SEB, мировая экономика сможет избежать крупнейших подводных камней, но ограничения, наложенные рынком труда, все же сдерживают рост. Экономический рост Эстонии резко замедляется под влиянием слабой внешней среды, хотя частное потребление не позволит росту ВВП упасть ниже уровня в 2 процента.\r\n\r\nМировая экономика стабилизировалась\r\n\r\nПосле переменчивого полугодия в последние месяцы ситуация в мировой экономике стала более стабильной. Три урезания процентной ставки подряд со стороны Федерального резерва, положительные сдвиги в торговых переговорах между США и Китаем и прекращение спада промышленности в Азии повысили уверенность в будущем. Наиболее четко смелый взгляд выражается в фондовых рынках, мощно устремившихся вверх и (по меньшей мере, в США) штурмующих все новые вершины.\r\n\r\nРынки труда — сильнейшие за десятилетия\r\n\r\nХотя вероятность мирового спада экономики уменьшилась, экономический рост — по крайней мере, в обеспеченных странах — немного запаздывает, и причиной тому, прежде всего, геополитика и ситуация на рынке труда. В странах ОЭСР средний уровень безработицы достиг самого низкого показателя за последние 40 лет, а в США даже за 50. По одной лишь этой причине существенное ускорение экономического роста крайне маловероятно. Более быстрый экономический рост предполагал бы резкий подъем производительности, которая — по крайней мере, в Европе — в последние кварталы переживает скорее стагнацию.\r\n\r\nЭкономический рост Еврозоны ограничен как экспортом, так и осторожностью потребителей\r\n\r\nПроблемы нынешней экономической среды наиболее явно заметны в глобальном товарообороте, быстрый рост которого пошел на спад. Одна из причин замедления товарообмена — война тарифов между США и Китаем. Прямой эффект от защитных пошлин был скорее небольшим, но при этом сильно повлиял на экономическую уверенность участников экономики и сделал предприятия очень осторожными в вопросах новых инвестиций. Именно низкий уровень экспорта — одна из основных причин медленного экономического роста и в Еврозоне. Экономический рост экспортозависимых Германии и Италии может оказаться скромным на протяжении всего прогнозного периода, тогда как страны, более зависимые от внутреннего потребления, продолжат стабильный рост. Подъем внутреннего потребления может, несмотря на сильный рынок труда, все же оказаться сдержанным, потому что потребители осторожны и скорее желают увеличить сбережения, чем больше потреблять. В этом году экономический рост Еврозоны ограничится всего 1 процентом и вырастет в 2020 году до 1,1 процента, в 2021 году — до 1,3 процента.\r\n\r\nЭкономический рост Эстонии резко замедляется\r\n\r\nНынешняя внешняя среда явно неблагоприятна для экспортозависимой Эстонии. С другой стороны, экспортеры сумели в этом году неплохо удержаться против ветра во внешней торговле. Хотя товарный экспорт снижается уже с июня, это в значительной мере вызвано большим спадом продажи энерготоваров. Промышленные предприятия стали очень пессимистичны в отношении будущего, и, вероятно, снижение объемов начнет затрагивать все больше и больше сфер деятельности. Наряду с текущей конъюнктурой под вопросом стоит также долгосрочная конкурентоспособность отечественной промышленности. Даже если сравнивать со странами с аналогичным уровнем жизни, в обрабатывающей промышленности Эстонии занято слишком много людей, а получаемая оттуда прибавочная стоимость низкая. Поэтому часть работающих сегодня промышленных предприятий придется закрыть — или изменить бизнес-план.', 50),
(13, 'Вводятся ограничения на ввоз в Эстонию из России растений, фруктов, овощей, ягод и семян', '2019-11-13', 5, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\6.jpg', 'Начиная с 14 декабря 2019 года в Эстонии и других странах ЕС меняется порядок ввоза растений и продукции растениеводства.\r\n\r\nКак поясняет Департамент сельского хозяйства, новые правила и требования касаются как предпринимателей, так и частных лиц, и призваны предотвратить распространение опасных вредителей растений.\r\n\r\nСамое большое изменение заключается в том, что прибывающим из третьих стран (стран, не входящих в ЕС, например, России) пассажиров запрещено провозить без наличия фитосанитарного сертификата растения, отрезные цветы, овощи и фрукты, садовые и лесные ягоды, а также семена.\r\n\r\nСоответствующий сертификат выдается службой по защите растений страны-производителя, если товар безопасен и не является носителем болезней или паразитов, представляющих угрозу для страны назначения.\r\n\r\nВ качестве исключения без сертификата можно провозить 5 видов фруктов: банан, дуриан, ананас, финики и кокосовый орех.', 50),
(14, 'В Маарду женщина попала под машину на пешеходном переходе', '2019-11-12', 7, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\8.jpg', 'Накануне днем в результате ДТП в Маарду пострадала женщина-пешеход.\r\n\r\nПо данным полиции, инцидент случился в 16:25 у дома №2 по улице Кеэмикуте, где автомобиль  Volkswagen, которым управлял 36-летний мужчина, сбил переходившую дорогу по пешеходному переходу 65-летнюю женщину.\r\n\r\nПострадавшую доставили в Ида-Таллиннскую центральную больницу.', 50),
(15, 'Рийгикогу отклонил все предложенные оппозицией поправки к бюджету', '2019-11-13', 7, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\9.jpg', 'Все до единой поправки к государственному бюджету на 2020 год, которые были предложены оппозиционными фракциями, не нашли поддержки на состоявшемся в среду втором чтении законопроекта о госбюджете.\r\n\r\nЗаседание Рийгикогу, начавшееся в 14:00, затянулось за полночь.\r\n\r\nБольше всего времени - практически шесть полных часов - у депутатов ушло на второе чтение проекта государственного бюджета на 2020 год. Ни одна из предложенных оппозицией к документу 33 поправок не прошла. Ранее эти предложения отклонила и финансовая комиссия парламента.\r\n\r\nВ 20:25 оппозиционные реформисты и социал-демократы предложили прервать чтение законопроекта, но депутаты из фракций правящей коалиции их не поддержали. В итоге главный финансовый документ страны был направлен на третье, заключительное чтение.\r\n\r\n\"Рийгикогу не поддержал ни одной поправки оппозиции к бюджету, тем самым нарушив данные избирателям обещания\", - заявила лидер парламентской фракции Партии реформ Кая Каллас.\r\n\r\nПо словам зампреда финансовой комиссии парламента Марис Лаури (Партия реформ), никакого обсуждения поправок не было.\r\n\r\n\"Вместо того, чтобы вести дискуссию по существу, от поправок просто отмахнулись, в результате чего этот законопроект остался точно таким же, каким его отправило нам правительство - бессодержательным, бесцельным, нарушающим обещания\", - сказала Лаури.\r\n\r\nСрок подачи поправок к прошедшему второе чтение законопроекту - 27 ноября. Утверждать бюджет, объем которого станет рекордным за всю историю государства, депутаты будут в декабре.', 50),
(16, 'Житель Эстонии выиграл 400 000 евро по купленному в интернете лотерейному билету', '2019-11-14', 7, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\10.jpg', 'На состоявшемся в среду розыгрыше лотереи Bingo был выигран джекпот в размере 399 718 евро.\r\n\r\nВыигрышный билет был куплен в интернете, сообщил организатор лотереи.\r\n\r\nПредыдущий джекпот в размере 462 000 евро выиграл 25 сентября мужчина, работающий в строительной фирме в Рапламаа. Выигрышный билет он также приобрел в интернете.\r\n\r\nВ целом за первые девять месяцев текущего года Eesti Loto выплатила лотерейные выигрыши на сумму 17,8 млн евро. Размер уплаченного в государственный бюджет налога на азартные игры от Eesti Loto составил за тот же период 7,7 млн евро.', 50),
(17, 'Моралес хочет вернуться и призывает прекратить насилие', '2019-11-14', 4, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\11.jpg', 'Бывший президент Боливии Эво Моралес готов вернуться на родину, чтобы положить конец кризису в стране. Заявил он об этом из Мексики, которая дала политику убежище. Накануне власти Мехико назвали его почетным гостем города и вручили в знак уважения медаль.\r\n\r\nОн говорил, что намерен вернуться в Боливию с новыми силами, но, пожалуй, никто не ожидал, что так быстро. Эво Моралес, который подал в отставку под давлением военных, заявил, что уже готов рискнуть и прилететь на родину, чтобы положить конец кризису. Находясь в Мексике, которая предоставила ему политическое убежище, Моралес обратился к боливийцам. Призвал общественные движения, гражданские организации и политические партии – прекратить насилие и начать мирный диалог: \"Если я могу своим присутствием внести вклад в мирное решение кризиса, которое остановит насилие и спасет жизни, я сделаю это ради моей любимой Боливии\".\r\n\r\nТем временем, Боливия охвачена беспорядками, в ходе которых погибли уже как минимум 10 человек, пострадали более пятисот. Тысячи демонстрантов требуют, чтобы объявившая себя временным президентом – оппозиционер Жанин Аньес покинула пост. И заявляют, что не примут отставки Моралеса.\r\n\r\nАньес уже назначила нового командующего вооруженными силами и спешно привела к присяге переходный кабинет министров. Заявила, что намерена провести новые президентские выборы, но Моралеса к ним не допустит, хотя, по закону – на пост главы государства в Боливии можно переизбираться неограниченное количество раз.\r\n\r\n\"У меня две основные цели — отмена неконституционного судебного решения от 28 ноября 2017 года и проведение всеобщих выборов в кратчайшие сроки. Свободных и прозрачных, с участием только тех кандидатов, которые отвечают конституционным требованиям\", — заявила Аньес.\r\n\r\nДействия Аньес признают законными США. Госсекретарь Майк Помпео уже поздравил ее с принятием полномочий. И выразил надежду на сотрудничество. Эво Моралес напомнил, как это напоминает ситуацию в Венесуэле, где Вашингтон пытался устроить госпереворот и привести к власти своего ставленника Гуайдо. Сейчас, заявил Моралес, все указывает на то, что именно Штаты инициировали госпереворот в Боливии.\r\n\r\n\"США только и делают, что говорят о мире. Но знаете, никакого мира не будет без социальной справедливости. По моему опыту, мир возможен только тогда, когда каждая страна уважает суверенитет и независимость других государств. Мир не может быть обеспечен путем военного вмешательства\", — сказал Моралес.\r\n\r\nБудет ли он участвовать в новых президентских выборах? В ходе пресс-конференции в Мексике Моралес уклонился от прямого ответа на этот вопрос. Удивительно, что он вообще так быстро собирается вернуться в Боливию. Ведь еще на днях он благодарил власти Мексики за то, что они буквально спасли его жизнь.', 50),
(18, 'Бразилия встречает саммит БРИКС павлинами: эстафетную палочку принимает Россия', '2019-11-13', 4, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\12.jpg', '14 ноября — основной день работы саммита БРИКС. Лидеры России, Бразилии, Индии, Китая и ЮАР обсуждают вопросы политики и экономики, а также взаимодействие стран \"пятерки\". Владимир Путин примет участие в пленарных заседаниях и проведет переговоры с бразильским коллегой Жаиром Болсонару.\r\n\r\nКрасная ковровая дорожка, почетный караул. В Бразилии явно хотели произвести впечатление. Торжественная церемония во дворце Итамарати, где располагается министерство иностранных дел. Сразу после протокольного фото гостей приглашают на концерт.\r\n\r\nОт имени президента Бразилии Болсонару — обед в честь лидеров, которые чуть раньше уже успели встретиться с бизнесом. Деловой форум БРИКС словно индикатор того, как развивается сотрудничество между пятеркой бурно растущих экономик. Тем более сейчас, когда с подачи США торговые войны и санкции стали проверенным приемом политического шантажа.\r\n\r\n\"Ситуация в глобальной экономике остается сложной. С начала 2018 года темпы роста непрерывно снижаются и, по прогнозам Международного валютного фонда, в этом году упадут до самого низкого показателя за прошедшие 10 лет. Несомненно, сказалось на мировой экономике то, что в мировой торговле все шире применяются методы недобросовестной конкуренции, односторонние санкции, в том числе политически мотивированные, процветает протекционизм\", — отметил в своем выступлении на форуме глава российского государства Владимир Путин.\r\n\r\nРоссия в течение многих лет проводит сбалансированную макроэкономическую политику, отмечает Путин. Ответственное отношение к государственным финансам, стабильность банковского сектора и, как результат, несмотря на внешнее давление, никаких катастрофических сценариев, никаких обвалов.\r\n\r\n\"Нам удалось удержать экономику страны от сползания к рецессии, — пояснил участникам форума президент России. — Конечно, мы не считаем, что текущие темпы прироста ВВП достаточны, поэтому стараемся создать максимально комфортные условия для новых капиталовложений, настойчиво работаем над упрощением регуляторных норм, выстраиваем современную инфраструктуру. В октябре текущего года Всемирный банк еще раз улучшил оценки делового и инвестклимата в России. Инвестиционная привлекательность, в том числе рынка ценных бумаг, повышаются. По итогам первого квартала этого года объем вложений зарубежных инвесторов в облигации федерального займа увеличился почти на 4 миллиарда долларов\".\r\n\r\nРоссийский бизнес активно сотрудничает с партнерами в рамках БРИКС. В 2018 году товарооборот с государствами \"пятерки\" вырос более чем на 22 процента. Причем, речь прежде всего о промышленной кооперации: медицина, авиапром, телекоммуникации. Заинтересовать страны БРИКС теперь могут и российские цифровые разработки. Например, технологии электронного документооборота, поисковые системы и антивирусные программы. Другое перспективное направление — использование экологически чистых видов топлива. Среди стран, с которыми сотрудничество развивается особенно активно, — Китай.\r\n\r\nВладимир Путин подъезжает на встречу с китайским лидером на отечественном AURUS с российским триколором и российскими номерами.\r\n\r\nПутин и Си Цзиньпин встречаются постоянно, и каждый раз есть что обсудить.\r\n\r\n\"Связи между Россией и Китаем прочны и стабильны, они не подвержены влиянию извне и обладают очень хорошим потенциалом развития. Мы проводим консультации на политическом уровне, сотрудничаем в области экономики, на международной арене, большой объем работы связан с военно-техническим сотрудничеством и военным взаимодействием. Это в полном смысле всеобъемлющее стратегическое партнерство\", — характеризует отношения Москвы и Пекина Путин.\r\n\r\n\"Между нашими странами наметилась очень позитивная динамика в сфере торговли. Безусловно, будем ее поддерживать. Новый год зовет к новым шагам и новым действиям\", — призывает смотреть дальше в будущее Си Цзиньпин.\r\n\r\nНа территории резиденции дежурят военные. Строжайший контроль, который не распространяется разве что на птиц. Встреча Владимира Путина и Си Цзиньпина проходит за городом. Природа. Зелень. Даже павлины ходят.\r\n\r\nСреди стран, с которыми Россия сотрудничает особенно активно, — Индия. Товарооборот в прошлом году вырос более чем на 17%. Перед встречей Путина с Нарендрой Моди — обсуждение в кулуарах. Приготовлены папки, карандаши, блокноты. О теплоте отношений между Москвой и Нью-Дели говорит и то, насколько тепло Нарендра Моди приветствует российскую делегацию.\r\n\r\n\"Я хотел бы отметить, что все договоренности, достигнутые на наших предыдущих встречах, исполняются. В том числе и договоренности, достигнутые в ходе саммита в сентябре этого года во Владивостоке. Я жду нашей встречи в Москве в мае следующего года на торжественных мероприятиях в честь 75-летия Победы во Второй мировой войне, в Великой Отечественной войне\", — приглашает 9 мая 2020 года в Москву Нарендру Моди Путин.\r\n\r\n\"Я рад нашим с вами частым встречам, в ходе которых можно обсудить и двухсторонние отношения, и международные проблемы. И я с удовольствием приеду в Россию на празднование 75-й годовщины Победы\", — заверяет президента России Моди.\r\n\r\nК России в 2020 году переходит и председательство в БРИКС. Саммит пройдет в Санкт-Петербурге. Уже сейчас готовится обширная экономическая программа. Кроме того, Путин пригласил лидеров стран \"пятерки\" и бизнес принять участие в Петербургском международном экономическом форуме, а также прилететь осенью на Восточный экономический форум во Владивосток.\r\n\r\nСтолица Бразилии, построенная с нуля во второй половине пятидесятых, считается примером современной архитектуры того времени. Сегодня здесь обсуждают развитие мировой политической архитектуры. Объединение БРИКС уже стало мотором глобальной экономики. И его влияние в многополярном мире будет только расти.', 50),
(19, 'Аньес признали армия и Конституционный суд. В мире пока не все гладко\r\n', '2019-11-13', 4, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\13.jpg', 'Россия приветствует решение Мексики предоставить политическое убежище бывшему президенту Боливии Эво Моралесу, об этом сообщил замглавы МИД Сергей Рябков. По его словам, Москва призывает внешних игроков не пытаться извлечь выгоду из внутриполитической ситуации в этой южноамериканской стране. Ранее временным президентом Боливии стала оппозиционный сенатор Жанин Аньес.\r\n\r\nПолномочия Жанин Аньес в качестве временного президента Боливии вслед за Конституционным судом признали и вооруженные силы. Оппозиция празднует победу.\r\n\r\n\"Мы довольны результатом. Демократия в нашей стране была уничтожена. Теперь мы сможем вылечить нашу демократию\", — заявил сторонник оппозиции Даниэль Мехиа.\r\n\r\n\"Теперь мы все можем сказать, что это того стоило, вот почему мы так счастливы\", — сказал Сергион Малдонадо.\r\n\r\nА вот с международным признанием дело идет не настолько гладко. Пока о готовности поддержать Аньес заявили только власти США и Бразилии. Дипломаты обеих стран в очень обтекаемых формулировках сообщили, что готовы работать с Аньес. Но и только. Госдеп одновременно начал эвакуировать из Боливии семьи своих дипломатов — получается, не верят, что со сменой лидера кризис в этой стране разрешится.\r\n\r\nЖанин Аньес Чавес родилась в городе Тринидад, сначала получила юридическое образование, затем долго работала в местной телекомпании Total Vision, сначала режиссером, а потом ведущей. Политическую карьеру начала в 2006 году, вступив в партию социал-демократов. Работала в комиссии по разработке новой конституции, затем была избрана в Сенат от крупнейшей оппозиционной партии \"Национальный план прогресса\", стала вторым вице-председателем Сената. После того, как Эво Моралес сложил с себя полномочия, в отставку подали и те люди, к которым по конституции должно было перейти право возглавить страну — а именно, вице-президент и председатели двух палат парламента. 12 ноября Жанин Аньес провозгласила себя временным президентом: Конституционный суд Боливии поддержал ее притязания.\r\n\r\nПроблема, однако, в том, что в основном законе страны не было предусмотрено подобной ситуации, нигде не написано, что второй заместитель главы Сената может получить в свои руки власть над всем государством, то есть права Аньес возглавлять страну — остаются под вопросом. Не говоря уже о том, что присягу она приносила в полупустом зале. Отсутствовали, примерно, две трети законодателей — сторонников Моралеса, их попросту не пригласили.\r\n\r\nВ итоге, те, кто верен бывшему президенту, массово выходят на улицы. Несмотря на агрессивный лозунг — \"Гражданская война и немедленно!\". Акции пока проходят мирно. Впрочем, участники демонстраций заявляют, что могут перейти и к более активным действиям, если к их голосу не прислушаются. А требуют они — чтобы на пост президента вернулся Эво Моралес.', 50),
(20, '\"ВКонтакте\" внедрит \"дизлайки\"', '2019-11-13', 6, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\14.jpg', 'У пользователей социальной сети \"ВКонтакте\" появится возможность оставлять \"дизлайки\" к комментариям. Непонравившиеся записи можно будет \"заминусовать\" \"в ближайшее время\"\r\n\r\n\"Подписчики смогут выразить свое несогласие с мнением комментатора, но не вступать при этом в дискуссию — просто поставить дизлайк\", — пояснили представители \"ВКонтакте\" на конференции VK Content Day. Сроки запуска новой функции уточнят позднее.\r\n\r\nКнопку, с помощью которой пользователи могли бы выразить негативное отношение к комментариям других людей, тестировала Facebook в начале прошлого года. Эксперимент проводился только в США на небольшой доле аудитории. Нажимая на кнопку Downvote, пользователи могли \"понизить\" тот или иной комментарий, чтобы читающие могли увидеть его с меньшей вероятностью. Будут ли так же ранжироваться записи во \"ВКонтакте\" — от \"хороших\", набравших много лайков, к \"плохим\", — не уточняется.\r\n\r\nВместе с этим российская соцсеть анонсировала тематические ленты, содержимое которых будут курировать эксперты. Ленты по интересам (бизнес, спорт, туризм, игры и так далее) появятся в \"Рекомендациях\", а за их наполнение будет отвечать команда экспертов, разбирающаяся в своей теме.\r\n\r\n\r\n\"Эксперты голосуют за или против материалов по своей теме, — сказали представители \"ВКонтакте\". — Чем больше положительных откликов от участников редакции, тем выше алгоритмы поднимут публикацию в \'Рекомендациях\'\". Когда будут запущены тематические ленты, пока не сообщается.\r\n', 50),
(21, 'Обновлённый WhatsApp ударил по батарее смартфонов', '2019-11-14', 6, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\15.jpg', 'Некоторые модели смартфонов Xiaomi, Samsung, Google и OnePlus разряжаются заметно быстрее после установки последней версии WhatsApp. Об этом столкнувшиеся с проблемой пользователи пишут на Reddit и в отзывах на странице мессенджера в Google Play.\r\n\r\nБольше всего среди пострадавших пользователей смартфонов OnePlus, однако встречаются и владельцы Samsung Galaxy S10e, Galaxy S9, Google Pixel 3 и Pixel 4, а также Xiaomi Redmi пишет PhoneArena.\r\n\r\nБольшинство замечают, что приложение продолжает работать в фоне, быстро расходуя батарею. Например, у одного владельца OnePlus 6 в статистике использования аккумулятора время работы WhatsApp отображалось как 1,5 часа, хотя он за это время отправил всего пару сообщений. В среднем пользователи утверждают, что мессенджер начинает потреблять до 30% от общего расхода заряда.\r\n\r\nВ последнем обновлении WhatsApp для Android добавлена функция блокировки доступа отпечатком пальца. В качестве временного решения предлагают, предварительно создав архив переписки, удалить приложение и поставить предыдущую версию из APK-файла. Некоторые утверждают, что вернуть расход батареи в норму помогла очистка данных приложения и кэша (перед этим также следует заархивировать чаты).', 50),
(22, 'Google собирается стать банком', '2019-11-14', 6, 'C:\\xampp\\htdocs\\PTVR18_AR\\Tund3_OOP\\img\\news\\16.jpg', 'Вслед за Apple, выпустившей летом собственную кредитку, компания Google готовится расширить спектр финансовых услуг. Как пишет The Wall Street Journal, скоро поисковик начнет предлагать пользователям из США открыть банковский счет на своей платформе.\r\n\r\nПроект носит рабочее название Cache и запланирован к запуску на начало следующего года. Помимо Google, в нем участвуют банк Citigroup и кредитный союз Стэнфордского университета. (SFCU). В рамках сотрудничества поисковик предоставит платформу и интерфейс, а его партнеры займутся обслуживанием счетов.\r\n\r\nВ беседе с WSJ глава платежных сервисов Google Цезарь Сенгупта подчеркнул, что в новом продукте финансовым брендам будет отведена большая роль, чем в других IT-компаниях. В частности, открываемые счета будут маркироваться логотипом банка, а не Google. В случае, например, с Apple Card, кредитку эмитирует инвестбанк Goldman Sachs, однако Apple позиционирует её как собственный продукт.\r\n\r\nПо словам Сенгупты, пользу от нового проекта извлекут все стороны. Например, банки смогут воспользоваться опытом Google по работе с большими объемами данных и предложить клиентам более выгодные условия и услуги (в том числе программы лояльности).\r\n\r\nДоступ к счету можно будет получить через Google Pay. В компании пообещали, что не будут использовать персональные финансовые данные для нацеливания рекламы и продавать их третьим лицам.', 50);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Fname` varchar(50) DEFAULT NULL,
  `Lname` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(25) DEFAULT NULL,
  `Text` longtext,
  `Date` date DEFAULT NULL,
  `Role` varchar(50) NOT NULL,
  `Login` varchar(100) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `Email`, `Phone`, `Text`, `Date`, `Role`, `Login`, `Password`) VALUES
(50, 'Aleksander', 'Russovitš', 'aleksander.russovits@ivkhk.ee', '+37253002573', 'Любит смотреть футбол и играть в компьютерные игры', '2019-11-13', 'Author', 'Sn9oZe', 'writer12345'),
(51, 'Andrey', 'Martynov', NULL, NULL, NULL, '2019-11-10', 'Administrator', 'admin', 'admin'),
(52, 'Evgeny', 'Kuplinov', 'evgeny.kuplinov@mail.ru', '+37258921356', 'Любит читать', '2019-11-13', 'Author', 'evgkup', 'kuplinov123567');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
