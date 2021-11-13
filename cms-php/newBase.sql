-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for classic_gravy
CREATE DATABASE IF NOT EXISTS `classic_gravy` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `classic_gravy`;

-- Dumping structure for table classic_gravy.cookbooks
CREATE TABLE IF NOT EXISTS `cookbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL DEFAULT '0',
  `subtitle` varchar(150) DEFAULT '0',
  `text` varchar(5000) NOT NULL DEFAULT '0',
  `img` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table classic_gravy.cookbooks: ~2 rows (approximately)
/*!40000 ALTER TABLE `cookbooks` DISABLE KEYS */;
INSERT INTO `cookbooks` (`id`, `title`, `subtitle`, `text`, `img`) VALUES
	(1, 'On Food and Cooking: The Science and Lore of the Kitchen', 'Book by Harold Mcgee', 'On Food And Cooking: The Science And Lore Of The Kitchen is a book by Harold McGee, published by Scribner in the United States in 1984 and revised extensively for a 2004 second edition. It is published by Hodder & Stoughton in Britain under the title McGee on Food and Cooking: An Encyclopedia of Kitchen Science, History and Culture.', 'https://i.imgur.com/m0MFFOZ.jpg'),
	(2, 'In Defense of Food An Eater\'s Manifesto', 'Book by Michael Pollan', 'In Defense of Food: An Eater\'s Manifesto is a 2008 book by journalist and activist Michael Pollan. It was number one on the New York Times Non-Fiction Best Seller List for six weeks. The book grew out of Pollan\'s 2007 essay Unhappy Meals published in the New York Times Magazine. Pollan has also said that he wrote In Defense of Food as a response to people asking him what they should eat after having read his previous book, The Omnivore\'s Dilemma.', 'https://i.imgur.com/u98L8gA.jpg'),
	(3, 'Julie and Julia: 365 Days, 524 Recipes, 1 Tiny Apartment Kitchen', 'Book by Julie Powell', 'While working for the Lower Manhattan Development Corporation in August 2002, Powell began the Julie/Julia Project, a blog chronicling her attempt to cook all the recipes in Julia Child\'s Mastering the Art of French Cooking.[1][4] The blog quickly gained a large following, and Powell signed a book deal with Little, Brown and Company. The resulting book, Julie and Julia: 365 Days, 524 Recipes, 1 Tiny Apartment Kitchen, was published in 2005.[5] The paperback edition was retitled Julie and Julia: My Year of Cooking Dangerously.', 'https://i.imgur.com/1ZOm2i0.jpg');
/*!40000 ALTER TABLE `cookbooks` ENABLE KEYS */;

-- Dumping structure for table classic_gravy.featured_recipes
CREATE TABLE IF NOT EXISTS `featured_recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '0',
  `img` varchar(1500) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table classic_gravy.featured_recipes: ~2 rows (approximately)
/*!40000 ALTER TABLE `featured_recipes` DISABLE KEYS */;
INSERT INTO `featured_recipes` (`id`, `title`, `img`) VALUES
	(2, 'keto-meatloaf-pesto-mayo', 'https://i.imgur.com/TyHD6v5.jpg'),
	(3, 'Keto-Chicken-Pesto-Stew-with-Zucchini-Pasta', 'https://i.imgur.com/KEOYC3U.jpg'),
	(4, 'Crustless-Broccoli-Quiche', 'https://i.imgur.com/dHxwvjj.jpg');
/*!40000 ALTER TABLE `featured_recipes` ENABLE KEYS */;

-- Dumping structure for table classic_gravy.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `img` varchar(5000) DEFAULT NULL,
  `subtitle` varchar(500) DEFAULT NULL,
  `chapter` varchar(5000) DEFAULT NULL,
  `chapter_two` varchar(5000) DEFAULT NULL,
  `chapter_three` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table classic_gravy.posts: ~3 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `img`, `subtitle`, `chapter`, `chapter_two`, `chapter_three`) VALUES
	(0, 'Mediterranean diet: A heart-healthy eating plan', 'https://i.imgur.com/oJ8bMFF.jpg', 'What is the Mediterranean diet?', 'The Mediterranean diet is a way of eating based on the traditional cuisine of countries bordering the Mediterranean Sea. While there is no single definition of the Mediterranean diet, it is typically high in vegetables, fruits, whole grains, beans, nut and seeds, and olive oil.', 'Healthy fats are a mainstay of the Mediterranean diet. They\'re eaten instead of less healthy fats, such as saturated and trans fats, which contribute to heart disease.', 'The foundation of the Mediterranean diet is vegetables, fruits, herbs, nuts, beans and whole grains. Meals are built around these plant-based foods. Moderate amounts of dairy, poultry and eggs are also central to the Mediterranean Diet, as is seafood. In contrast, red meat is eaten only occasionally.'),
	(1, 'The Ketogenic Diet: A Detailed Beginner\'s Guide to Keto', 'https://i.imgur.com/aoxMPhq.jpg', 'What Is a Ketogenic Diet?', 'The ketogenic diet is a high-fat, adequate-protein, low-carbohydrate diet that in medicine is used mainly to treat hard-to-control epilepsy in children. The diet forces the body to burn fats rather than carbohydrates.', 'A ketogenic diet has numerous risks. Top of the list: it\'s high in saturated fat. McManus recommends that you keep saturated fats to no more than 7% of your daily calories because of the link to heart disease. And indeed, the keto diet is associated with an increase in "bad" LDL cholesterol, which is also linked to heart disease.', 'The popular low-carb diets (such as Atkins or Paleo) modify a true keto diet. But they come with the same risks if you overdo it on fats and proteins and lay off the carbs. So why do people follow the diets? "They\'re everywhere, and people hear anecdotally that they work," McManus says. Theories about short-term low-carb diet success include lower appetite because fat burns slower than carbs. "But again, we don\'t know about the long term," she says. "And eating a restrictive diet, no matter what the plan, is difficult to sustain. Once you resume a normal diet, the weight will likely return."'),
	(2, 'Healthy Eating', 'https://i.imgur.com/MG1pk0R.jpg', 'The power of protein', 'A healthy diet helps pave the way to a healthy heart and blood vessels, strong bones and muscles, a sharp mind, and so much more.', 'Men gradually lose muscle mass as they grow older, a natural effect of aging called sarcopenia. During his lifetime, a man loses about 30% of his muscle mass. Yet older men can maintain and even regain muscle. It takes a combination of regular weight training and a proper diet, including adequate amounts of protein.', 'Certain fruits, vegetables, nuts, and seeds have been labeled "superfoods" because, compared with other foods, they have higher amounts of certain vitamins and minerals and powerful antioxidants. They often are associated with combating high blood pressure, diabetes, heart disease, and even some cancers. But instead of focusing on eating more of individual foods, experts suggest building "superplates" that include a variety of superfoods');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table classic_gravy.recipes
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '0',
  `img` varchar(300) NOT NULL DEFAULT '0',
  `difficulty` varchar(25) NOT NULL DEFAULT '0',
  `preparation_time` int(11) NOT NULL DEFAULT '0',
  `description` varchar(5000) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

-- Dumping data for table classic_gravy.recipes: ~9 rows (approximately)
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` (`id`, `title`, `img`, `difficulty`, `preparation_time`, `description`) VALUES
	(0, 'Three-Cheese-Fritatta', 'https://i.imgur.com/6gRS95T.jpg', 'Easy', 45, 'This gorgeous dish looks beyond impressive, yet is amazingy simple to make! Spinach, eggs, sausage or bacon, and veggies magically combine into a divine feast for the eyes... and the tummy. It\'s keto gold!'),
	(1, 'Keto-Tuna-Avocado-Salad', 'https://i.imgur.com/HANGBWU.jpg', 'Easy', 15, 'Not a fan of mayo, but love tuna, avocado, red pepper and onion? What if we tossed all of those with a tart lime and olive oil dressing? You\'d have a quick, simple and budget friendly meal in under 15 minutes!'),
	(2, 'Low-carb-Zoodle-Pesto-Chicken-Salad', 'https://i.imgur.com/TwxPMjc.jpg', 'Easy', 25, 'A Mediterranean feast, combining all of those classic flavors of basil, tomato and feta in a fresh and delicious salad. The shredded chicken absorbs the pesto flavor and the tart feta paired with the sweetness of the tomatoes makes for a yummy, quick and easy low-carb salad.'),
	(3, 'Low-carb-sunday-lamb-roast', 'https://i.imgur.com/IolLxro.jpg', 'Medium', 150, 'If you grew up in Australia, you grew up eating roast lamb for Sunday lunch. All over the country ovens are roasting legs of lamb, with all the trimmings. These succulent fragrances can instantly slingshot us back to our childhood and this highly anticipated family meal.'),
	(4, 'Low-Carb-Lemon-Garlic-Butter-Salmon-With-Cauli-Mash', 'https://i.imgur.com/RJQQIks.jpg', 'Medium', 30, 'For these salmon burgers, let\'s get down to the meat of the matter. They\'re simple to make, check. Loaded with tons of flavor, check. And they\'re covered with ooey, gooey, lemon butter. Oh, my. Talk about ketotastic meals! '),
	(5, 'Dairy-free-keto-Vanilla-Ice-Cream', 'https://i.imgur.com/EukpIQQ.jpg', 'Easy', 80, 'Dairy free doesn\'t mean ice cream free! This craemy dairy free vanilla ice cream includes all of the same wonderful flavors and textures of traditional ice cream. See if your guests can tell the difference!'),
	(6, 'Salmon-and-Asparagus-Frittata', 'https://i.imgur.com/xXIoh8z.jpg', 'Medium', 40, 'You\'ll impress your guests with this sumptuous keto brunch dish - not only that, but it\'s also a time savvy choice that can be prepared in minutes. Flavorsome salmon paired with asparagus combined with a savory creamy frittata base. This dish can be adapted to many variations depending on what you have in your pantry.'),
	(7, 'Keto-Crispy-Tuna-Burgers', 'https://i.imgur.com/7sOjwKl.jpg', 'Easy', 30, 'Crispy and flavorful tuna burger patties paired with crunchy lettuce and juicy tomatoes, team up to give you a light yet satisfying meal. These burgers are mouth-wateringly tasty! So simple to make and a great alternative to a traditional beef burger.'),
	(8, 'Pancakes with berries and whipped cream', 'https://i.imgur.com/QcH6ghQ.jpg', 'Easy', 25, 'Try these incredible keto cottage cheese pancakes and you\'ll never go back to regular flapjacks! Our berry topping gives them just the right amount of sweetness and the kids will love them too!');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;

-- Dumping structure for table classic_gravy.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `surname` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0',
  `user_id` varchar(50) DEFAULT '0',
  `message` varchar(2500) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table classic_gravy.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `surname`, `password`, `user_id`, `message`) VALUES
	(25, 'Neven', 'neven.josipovic.sae@gmail.com', 'Josipovic', '0', '0', '0');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
