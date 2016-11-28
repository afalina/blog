-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.25 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица blog.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `preview` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `public` tinyint(1) NOT NULL,
  `comments_enable` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_article_category` (`category_id`),
  CONSTRAINT `FK_article_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.articles: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `content`, `preview`, `meta_description`, `meta_keywords`, `category_id`, `public`, `comments_enable`, `created_at`, `updated_at`) VALUES
	(1, 'Тестовое название', '<p>Пеми нуруб даг икуб каги ру пе гурав бива пе илепа вигали би тудо. Еам. Тамо суног сил какопо му а на ко. Гегик го мин ип та ло пи сару да садок! Ти гали; ни демут егав мамо те гугам еб удигог гер тоник арево вота сат. Мево тикиб акуту ке ореке домуб муп е долав релуг та алур сав! Тенут ли тирил дово пи! Рут лури итово уник акеме? Иаву бе пувул? Гу ко ироро бабу во ване вас го нар ел пи та ога гу? Мувес рил копиту нато са ну вав мел вибоке сомува сего ипакир суло рукор! Еам. Лук та му лакик га нилед ли? Аегабе со арупо белен инин мокув бупи ун нуко по укапу! Вув поп киб бо дулуте обунаг песи мок его анираг велод амо? Накеп еги до ните ипет. Оат ур рес иси егури кид па уве модус ма! Напан тол. Госет. Вис дил об е тик гимо мор думаб ерасу иг! Ее. Генес ем гесо ри со пукир кебимо на ку кад тосове де рилево бу ром! Бу бо ебу випо ге ду пикему ло да тутув гиг евево. Еу ву су ун ак ут! Оу гаго емомол имумиг ти на пунуни будаг емису иве у пом. Гал уре тал поб талел де бам марубо ис моки босод? Тап вите бу бе окубе ту! А луна. Деб египо кар? Рис сив унен. Ка илус пилиб ге вутебо пасос егатис расе ивапо вилав ми туке ку ри мо та. Си ме ику пе воп намапу гувур ул ен тури? Ее сурем бумуди тупуг унар де га неп евоб ге уд дида то дала ил уви? Ну! Го делам ел. Ои лилид. Бупик етеб делин гу гепа? Вила са орепе пес дат елугаг кам сено никок куроб ге аг лака. Батив ир тир! Тал белев абоди улуве идимо лу? Уоб соне ароби лу буволу сисома ли. Ревул видо?</p>', '/images/27.11.2016/kot.jpeg', '', '', 1, 1, 1, '2016-11-25 20:22:07', '2016-11-27 10:18:47'),
	(2, 'Как здорово, что все мы здесь сегодня собрались', ' Рар лур апе ова не тип ера вутан ка суде бом? Уилус амиг гаво модалу дад уб! Ме биту сус нилуд сед селе гот ведул ви пеб елотет име кур ус тун. Ги нел угуб еб и ган го лу гу вурук ло ро гов? Гу ена бо о месо ву ме вотуга у до гогит домо пудо лил ка?\r\n Лугик пе ру асуп осе вадо уборат увуна по дудуро! Лив релав лин гис лер вутона пипа умону. Тод кан санегу емоба мо одетур каво ипуд. Горуду апуро осот тине!\r\n Ве ируга одон ге муда! Пи пи рутул бипа деса ан епеп ет болеб агами нудел си! Топ тос отеви онул були гам дути об ебе сиру ебуг норо авуд. Еепир раби ке ка мо бе да обима ис киг думе билум ред? А ери сумор мала вудур ту ом рот напеб аналет сисе се тона пи белуг. Нила уб аг бит нетог бе вамас. Тер а се доту ту ло ну ло ву от. Дак рели де попат бупег.\r\n Кеке белу ту. Кед е мекеку лум ни довут да. Иекал огина ба акети рал мале ебано: ег идуба- ул ул епем добу мабаво! Еуг инал сапи диб тед ни тусит епаку ивокив гу ту мал ела ририн сера линоб му? Бе сират.\r\n Вокик па сибу век утури дане топ от ти бар тику гивато во мовег! Кему теда во пи. Касе угугус либад леви мо нув ви; емедиг рур! Бипа. Ла рувес удет делаво му кум ав помег пимату уд бит! Восоди ги: так. Толоду ра агид иле тевубу суга ба су то анинад усунут рим тикат у такав. Уум повуво го бива кабеб педу ду ло угему народ пуг пак нуга: мигисе евог обек етиб! Вет опоп лупу ела босеб.\r\n Тир ри илен ве атил вин век; ул ме ид ди мур ду, вако олеба тосаг. Иомев емик ре ори помиги ле мирису наро голит. Ииг? Ау то ету? Сапут авап ар гура. Не амем вур гул овед бени ери кук?\r\n У модед па ке пикет манун окилол агес нудел отур томив? Уубид нагис ба ноги ви ба епел апану пед бисе муд дипеп отаку пиме агу.\r\n Ообо екат епаги сенас оти варан убени тотиб ет мусо ранап ре! Иаку ку еноб леруб лену бому не ека ке ка реге имоко ев леребу упу. Ситигу убара бопу!\r\n Вовок мо осотон обон еноке ву унуни бадеба ра мупев опос! Гуг сиван удили и. Вапот муру етегу довоп омара. Мо лабу? Билу ире да буба ум дув соп дакет ромин ивера наву асам ме кимока атасу.\r\n Ту мовис сибос куко амомал на. Пелем потели? Оа ра кокел ба игими.\r\n', '/images/25.11.2016/1_full.jpg', '', '', 2, 1, 1, '2016-11-25 20:23:15', '2016-11-27 09:09:20'),
	(4, 'Бубубубуб', ' Ловег гакосу ару ит бидед дови сугуп то се. Сане ети са утос ир сотол лан вег: лело сорос гатим ре. Ри ла ту итебу ки е росас лив у доп му вик бекид ка унусе! Ги мубуг! Аопобу танол ток!\r\n Бу ип сото ус. Сев дугапа бале ебото тед лукид дену од. Монел апиве. Леб бе: е ко дидег сор нипи е болу ла ре упев нека! Ног нар бавити рун епапел вимун пу кидоб роги бемо мипур как мен восиса касе рему утув! Раме ну уко иго бик гаво та мату ди ре и!\r\n Пи рамусо иред ла емо недаб ино ле кигера осо тогело нид дун по до валам суне. Нулид сив, бу. Му ми ре, ноло вавод совубо со ро лукин? Ро? Мусиро соди идамон не мевис нат су биг! Оонор имумут. Рисупа ап о вуг докеб са ку ра ге уви омаг ебиби аге оно? Бомаг даса не ирод. Оедом сабен беп гору е рутусо.\r\n Еоб аме дилу мугоне о так гиноп ерад тедив ор вис? Сор раги обу сат икет еб ку увегув румо ру но, ог мак ви!\r\n Рикоре икапум мо ка иком ток ега во паног сугуму буга ат кебав! Иад годосу уду ивопа кидуко лав соду ма не ирулод тени пугу анеп на мелет мо лонад? Аабиги? Вог нопуги бе ол. Гевип пирун ом гуда му келиг линес суне канав бел му ив? Вок пов нибор коб диг го!\r\n Вепог унитом как бедаси пе вин ра овакем лип удане вем гото оми! Лодоб нат урилу: екел ири нисад вамуме те то. Кеваде гебу аво ваку сол агодит укамоб меви рупег гола се мабито гебу икеро отан до. Аан пико рен пер ив? Гемуд му гор вуси бидум комод омику никит ло ивегил елаве мул ми. Уо домин тита инег?\r\n Са ил сасаме ес ипед ати мо пиб атеду мегега дасав екелу дедабе макуп дотов тату. О ори ув ми раг ид нив уво киг руге се виналу паки думет ке! Сон мо ти па сус ут ано борас лу пеп виле! Аугу ебори тиву! Уев у асима ат дери?\r\n Саки кев пагигу кови бер ибу себиво отеко егем ибу ниру ловупи ла тубан. Ку сотек ме лодев усуба лор ели венери сетоб кугили амег игу руна. Коб лилу; бо онуно уболо оне на бега ами ла емор мумид е мопов ме. Ком мин гунаса сосув писуг унуна ими. Оабел вудиб. Су илир пик батоту ара дар сетуп ерин ку норе.\r\n Бу гу ру иса тевава во исе обулит дугуту кага. Тегид ма муку гел пебипо вев бан себеси пим сила! Ее мулан о лаг моне ви малади лику, идев гин отуну ринок куку бева. Боп. Еовамо му маси сал алоку еп и иб? Уукеп омогут адул кириб ровин о дем то сак. Неб са ге легипи иг ди.\r\n Гуле ниг. Еимо алу кате асан ког согег ри гегуп!\r\n', '/images/26.11.2016/gold-yog.png', '', '', 1, 1, 1, '2016-11-26 06:36:16', '2016-11-27 09:10:11'),
	(5, 'Привет, мир', '<p><img src="../../index.php/adminzoneimages/27.11.2016/dolphin1-big.jpg" alt="" /> <img src="../../index.php/adminzoneimages/25.11.2016/1_full.jpg" alt="" /></p>\r\n Кирило пек ма ке рук но ко неги гумат гу?\r\n Су! Нам пусат собеп илиг опег уминуп сит умел: ки не иба бе осал!\r\n То го егусу анакеб. Талеме пулолу говос неву а ло ук кив ери! Сек ор. Уе вив бимун тали рес леледо пуне ки сатус павуби ут укариб! Моп лепор син бев исопув мопок тума!\r\n Иоку бид? Еипе ба илету; дипа у руг небав еми исоти осесе лане ма. Еупа о дов ра енокил осуп! Бора ви сидуг ти вулел нутом тебоду? Еир- вас му бум когол кол ри готик аву ело ун му дил.\r\n Аорати упугаг суди ик амола буг пубит вов буба попи! Локе веда мипор, се ис гус ваки уп лоли насот дуту! Бамес ир лор ка во со нит лид та пепе маде ми мег би. Рупи усад ев ву ветон лид еге пери екико рус авема. Еипин ес умала: кевид кип ов; локи дирон ка вавун пеку года уно ка диб! Аинур асоп мули тоду добир ди одуму кул: суме дубол бакол ме улосол кул епоке насум! Вобе рор вим векеди ло, салуг диб урадос усали рупе отида сог ведув редуб.\r\n Ну рок ту пебу сен ви бу лота ку исом ву ек. Гев тесам лод ту уме унирам кирок ром ку рако ги ресе илиб бипес? Еебеко миб а оторок веги. Пинаб бук бале буби секиб бе. Ма вон тодини бо би ика елу туму дуди мисив тук би ди увов ма де.\r\n Иебак убе енемон го мадову ли рово лу. Ни дули дидон согеде ме пи кегу. Лакип оридир дубор увако лом вобу ресе муди ити пивиде расу вут сепик упу отев. Гике лу.\r\n Лунан угу онелом тилид гупепо надол лопе паву. Гу мивап итиву пепус тубупо! То тату сос гуси ивудум вугала себит лобат ример мо!\r\n Ра дувуне са тулак а ли ву сагет ета оп имаб. Ку да ру одуте ру роп пе улилу ироги со ков кепори. Пи нас нул ируна ба ука му еледа! Санев си пуло ему пес го ман ра вет абитос он го лубе во ме гор!\r\n Па уди ука гука вопуми лолод укиба да ос се му бед ме пек пакод салели. Га синок адеро паве тав побиг могигу вепово лево лу рекипе вак ладуна басидо ден буби пе. Месу гувог пес ан сипики енук сивет ана куд ди ар анонип удига ра ува. Ким кид му сабуге туд бопак осо.\r\n', '/images/27.11.2016/dolphin1-small.jpg', '', '', 1, 1, 1, '2016-11-27 08:07:31', '2016-11-27 09:11:07'),
	(6, 'Эта замечательная жизнь', '<p>&nbsp;Сепер ку ки ито дер пу рубес ов? Оебил ко се агадик саве дув лас кепаве уру овул тосумо? Ие мен моко лате ик гаком? Пемо налук бетубе?</p>\r\n<p>&nbsp;Оуд до пасу ирус ун ту авово гиг геваг гитеса дери! Кепук лову пи рон исипам лаги, вепело нус лино гукед ду.</p>\r\n<p>&nbsp;Ду мовек. Дикил ресару супуб вене ипод памаг еков лум епо вога а де ог!</p>\r\n<p>&nbsp;Паког епем накади кел гув касибу муд кав те павам. Лил набут кол лу субуг? Ке га баге угат мумиб обуна.</p>\r\n<p>&nbsp;Бинеди упа епан даке санар бен ат нумуд едас бод пере ну. Вуде да у луб пабуса.</p>\r\n<p>&nbsp;Еаса ати нин габуд. Да ил ного раруве есос ка то нисес вагара ик суб виму ду бепек ви радик! Са ка даруд ву асу моло мубил- уг ла баб аса кок пу нелан! Ридува дип усобут гид си мур? Нис упетиб кисика недеса ниселе.</p>\r\n<p>&nbsp;Риб дес нем каб алимап не ивубе мили нилопе ге сомак ада ипигу вагопа. Иудум сиса имат мо дег.</p>\r\n<p>&nbsp;Еулад тув агуде осаба оно ом? Тут сува а пива биг рив бе ув! Нома ено олому. Накет удар тодед дану ву ина невира епаруб екуб лури. Мунем бита ги пуп тивуг тиног муделу ок!</p>\r\n<p>&nbsp;Леку рал ам корул? Ле селис сибу па ут вуд ло ло. И луноб го лу. Ле нику сопово кув гав се ге на? Лупе у адуви водуп пи ерел вон редаг а додипа несун орут коки.</p>\r\n<p>&nbsp;Тек уво. Аонан та кете рут долир ир еку гуда табе. Ро уку! Аед лериго са пе тетало ку са инени воп нат обеле бул акоб!</p>\r\n<p>&nbsp;</p>', '/images/27.11.2016/gepard-small.jpg', '', '', 3, 1, 1, '2016-11-27 09:03:36', '2016-11-27 09:03:36');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- Дамп структуры для таблица blog.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.categories: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'test2', '2016-11-25 20:11:20', '2016-11-25 20:11:25'),
	(2, 'привет мир', '2016-11-26 20:48:29', '2016-11-26 20:48:29'),
	(3, 'категория', '2016-11-26 20:49:39', '2016-11-26 20:49:39'),
	(4, 'и еще одна категория', '2016-11-26 20:50:05', '2016-11-26 20:50:05');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Дамп структуры для таблица blog.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_comment_article` (`article_id`),
  CONSTRAINT `FK_comment_article` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.comments: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `article_id`, `content`, `author`, `email`, `public`, `created_at`, `updated_at`) VALUES
	(1, 1, '12334455', 'qwerty', 'qwertyy@mail.com', 1, '2016-11-25 21:13:35', '2016-11-25 21:25:27'),
	(3, 1, 'qwqwqwq', 'qwqwq', 'qwqw@mail.com', 1, '2016-11-27 20:45:47', '2016-11-27 20:45:54');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Дамп структуры для таблица blog.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.migrations: ~6 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_11_25_195040_Articles', 2),
	('2016_11_25_195053_Pages', 2),
	('2016_11_25_195107_Categories', 2),
	('2016_11_25_210722_create_table_comments', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица blog.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `public` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.pages: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Дамп структуры для таблица blog.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Дамп структуры для таблица blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы blog.users: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
	(1, 'Test', 'test@mail.com', '$2y$10$jaq5Jjas779/0/XZka1BV.Wuopy1uLbvytQ8CnMrfLssR1C7X11PW', 'iXgsJFe2IVF2YauiLclbTj73IkCFDI06mrFuJrSyt0GPj1UfUemnHYWFoHEE', 1, '2016-11-25 21:24:44', '2016-11-27 21:29:18'),
	(2, 'test', 'test@test.tesst', '$2y$10$Njq2p.6gyV/3WSZmqLaNPOIJpnpUSWWkxhh3MEk.Y76vAHeqXZw7i', NULL, 1, '2016-11-26 18:17:43', '2016-11-27 21:22:50'),
	(3, 'admin', 'admin@admin.admin', '$2y$10$XlKYkUUwyjEwFQJjlYcRfO2ZJhbFT63ylMisT0HhmowCkGNk7Wtq.', 'TS610bfwJRtzI9HIndhKw0PxxEhvEgx2AelwsfkoB8EX21DIa7nhtpS97ctY', 1, '2016-11-27 08:02:16', '2016-11-27 12:06:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
