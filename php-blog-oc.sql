-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 02 fév. 2023 à 13:16
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php-blog-oc`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) NOT NULL,
  `category_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_title`) VALUES
(2, 'CSS'),
(3, 'Javascript'),
(4, 'PHP'),
(5, 'HTML'),
(6, 'PHP-POO'),
(7, 'Vue'),
(8, 'React'),
(10, 'Symfony'),
(11, 'Unity'),
(12, 'Unity'),
(13, 'ADD CAT');

-- --------------------------------------------------------

--
-- Structure de la table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `comment_text` text,
  `created_at` varchar(255) DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = waiting for validation / 1 = validate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `post_id`, `user_id`, `comment_text`, `created_at`, `flag`) VALUES
(2, 9, 4, 'eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus', '25/11/2021', 1),
(3, 8, 5, 'consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis', '29/11/2021', 0),
(4, 8, 5, 'ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin', '18/11/2021', 1),
(7, 8, 7, 'mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod', '23/11/2021', 1),
(8, 7, 7, 'montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem', '25/11/2021', 1),
(9, 1, 2, 'malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a,', '24/11/2021', 1),
(11, 2, 4, 'egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat,', '26/11/2021', 1),
(13, 10, 3, 'enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet', '21/11/2021', 1),
(14, 8, 4, 'ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam', '27/11/2021', 1),
(15, 1, 6, 'a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus', '21/11/2021', 1),
(16, 2, 9, 'justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id', '26/11/2021', 1),
(18, 10, 6, 'in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis', '18/11/2021', 1),
(19, 10, 4, 'eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna,', '21/11/2021', 1),
(20, 1, 10, 'Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris', '28/11/2021', 1),
(21, 7, 5, 'eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi', '17/11/2021', 1),
(22, 99, 5, 'sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula.', '25/11/2021', 1),
(23, 8, 5, 'sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie', '20/11/2021', 1),
(25, 9, 7, 'orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna', '23/11/2021', 1),
(26, 10, 4, 'magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean', '28/11/2021', 0),
(27, 2, 1, 'Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus', '27/11/2021', 0),
(28, 9, 3, 'vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer', '17/11/2021', 0),
(29, 8, 9, 'volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin', '18/11/2021', 0),
(32, 2, 5, 'nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget', '24/11/2021', 0),
(33, 1, 4, 'Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam', '21/11/2021', 0),
(35, 6, 8, 'pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique', '24/11/2021', 0),
(36, 10, 1, 'consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy', '27/11/2021', 0),
(38, 7, 1, 'nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue,', '23/11/2021', 0),
(39, 1, 2, 'posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate', '21/11/2021', 0),
(43, 2, 1, 'turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer', '21/11/2021', 0),
(44, 6, 2, 'non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien.', '25/11/2021', 0),
(45, 4, 5, 'In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam', '24/11/2021', 0),
(46, 4, 3, 'tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat.', '19/11/2021', 0),
(47, 2, 6, 'et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus.', '17/11/2021', 0),
(48, 8, 5, 'interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra', '21/11/2021', 0),
(50, 1, 8, 'in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor', '29/11/2021', 1),
(51, 9, 5, 'nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna', '20/11/2021', 0),
(52, 6, 6, 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu', '29/11/2021', 0),
(54, 7, 6, 'fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', '19/11/2021', 0),
(55, 6, 3, 'litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie', '18/11/2021', 0),
(56, 6, 3, 'neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet,', '19/11/2021', 0),
(57, 1, 1, 'amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras', '20/11/2021', 0),
(58, 1, 3, 'Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.', '27/11/2021', 0),
(60, 6, 6, 'Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit,', '28/11/2021', 0),
(61, 2, 7, 'non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare', '26/11/2021', 0),
(62, 6, 4, 'orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent', '23/11/2021', 0),
(63, 1, 9, 'fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies', '29/11/2021', 0),
(64, 9, 3, 'vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at', '22/11/2021', 0),
(65, 59, 1, 'orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus.', '26/11/2021', 0),
(67, 9, 9, 'arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin', '26/11/2021', 0),
(68, 9, 3, 'odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus', '24/11/2021', 0),
(70, 8, 9, 'nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer', '18/11/2021', 0),
(71, 4, 7, 'condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel', '20/11/2021', 0),
(72, 10, 2, 'quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare', '18/11/2021', 0),
(73, 7, 1, 'Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla', '22/11/2021', 0),
(74, 1, 8, 'neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis', '24/11/2021', 0),
(75, 6, 7, 'molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam', '24/11/2021', 0),
(76, 4, 10, 'amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy.', '19/11/2021', 0),
(79, 9, 7, 'auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique', '28/11/2021', 0),
(80, 2, 5, 'hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo,', '24/11/2021', 0),
(81, 2, 9, 'dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam.', '22/11/2021', 0),
(82, 1, 7, 'amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum.', '28/11/2021', 0),
(85, 1, 6, 'pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque', '24/11/2021', 0),
(86, 9, 6, 'Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur', '23/11/2021', 0),
(88, 7, 3, 'ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer', '23/11/2021', 0),
(89, 10, 3, 'et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed', '21/11/2021', 0),
(90, 6, 3, 'dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis', '22/11/2021', 0),
(91, 2, 9, 'et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean', '27/11/2021', 0),
(92, 6, 1, 'habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum', '20/11/2021', 0),
(93, 6, 6, 'Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae', '26/11/2021', 0),
(94, 6, 1, 'elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque', '19/11/2021', 0),
(95, 9, 2, 'magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius', '29/11/2021', 0),
(97, 6, 1, 'lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu', '26/11/2021', 0),
(98, 7, 2, 'vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris', '27/11/2021', 0),
(100, 2, 6, 'Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus', '17/11/2021', 0);

-- --------------------------------------------------------

--
-- Structure de la table `blog_globals`
--

CREATE TABLE `blog_globals` (
  `name` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_globals`
--

INSERT INTO `blog_globals` (`name`, `value`) VALUES
('email', 'tony.tilletpro@gmail.com'),
('g-analytics', 'google analytics here'),
('g-maps', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46558.0495397688!2d5.670472936455893!3d43.17008295926894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9a86a4528d78f%3A0x40819a5fd8fc9c0!2s83270%20Saint-Cyr-sur-Mer!5e0!3m2!1sfr!2sfr!4v1669292885069!5m2!1sfr!2sfr\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
('github', 'https://github.com/TonyWTillet'),
('phone', '0610892485'),
('portfolio', 'https://tony-tillet.com');

-- --------------------------------------------------------

--
-- Structure de la table `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `nav_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `type`, `nav_url`) VALUES
(1, 'home', 'accueil'),
(2, 'list-cats', 'categories'),
(3, 'contact', 'contact');

-- --------------------------------------------------------

--
-- Structure de la table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) NOT NULL,
  `category_id` int(10) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `post_title` text,
  `post_text` text,
  `post_chapo` text,
  `created_at` varchar(255) DEFAULT NULL,
  `modified_at` varchar(255) DEFAULT NULL,
  `nav_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `user_id`, `post_title`, `post_text`, `post_chapo`, `created_at`, `modified_at`, `nav_url`) VALUES
(1, 6, 7, 'in molestie tortor nibh sit', 'lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus', 'In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed', '22/11/2021', '26/11/2021', '1'),
(2, 12, 5, 'sit amet, consectetuer adipiscing elit. Aliquam', 'nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis,', 'et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem,', '17/11/2021', '24/11/2021', '2'),
(4, 3, 1, 'auctor odio a purus.', 'orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis', 'at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia', '20/11/2021', '21/11/2021', '4'),
(6, 1, 4, 'et', 'parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus.', 'Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum', '26/11/2021', '28/11/2021', '6'),
(7, 2, 5, 'Nulla dignissim. Maecenas ornare', 'nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero.', 'eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus', '19/11/2021', '24/11/2021', '7'),
(8, 4, 3, 'odio. Nam interdum enim non', 'ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus', 'ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh', '19/11/2021', '29/11/2021', '8'),
(9, NULL, 7, 'sagittis semper. Nam', 'mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', 'Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus', '28/11/2021', '25/11/2021', '9'),
(10, 8, 2, 'vel, faucibus id, libero.', 'posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis', 'metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa.', '24/11/2021', '27/11/2021', '10'),
(11, 7, 4, 'vehicula aliquet libero.', 'molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue', 'sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac', '17/11/2021', '23/11/2021', '11'),
(12, 3, 3, 'lacinia at, iaculis quis, pede.', 'Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean', 'eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non', '24/11/2021', '29/11/2021', '12'),
(13, 2, 8, 'per inceptos hymenaeos.', 'libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut,', 'Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam', '18/11/2021', '30/11/2021', '13'),
(14, 2, 3, 'dapibus rutrum, justo. Praesent', 'Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat', 'lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet', '18/11/2021', '24/11/2021', '14'),
(15, 1, 7, 'sed tortor. Integer aliquam', 'Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis', 'vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy', '21/11/2021', '27/11/2021', '15'),
(16, 4, 7, 'eu, ligula.', 'Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras', 'elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed', '18/11/2021', '30/11/2021', '16'),
(17, 3, 8, 'In mi', 'ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere', 'ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed,', '18/11/2021', '23/11/2021', '17'),
(18, 6, 5, 'turpis. Nulla aliquet. Proin velit. Sed', 'eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget,', 'Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas', '22/11/2021', '25/11/2021', '18'),
(19, 7, 8, 'nulla ante, iaculis nec,', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna', 'lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae,', '27/11/2021', '27/11/2021', '19'),
(20, 8, 4, 'ante ipsum primis in faucibus', 'tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque', 'eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet', '26/11/2021', '23/11/2021', '20'),
(21, 8, 2, 'hymenaeos. Mauris ut quam', 'diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue.', 'enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus', '20/11/2021', '29/11/2021', '21'),
(22, 2, 3, 'ullamcorper eu, euismod ac, fermentum', 'enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu', 'adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque', '27/11/2021', '18/11/2021', '22'),
(23, 4, 6, 'accumsan', 'consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula', 'lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis.', '20/11/2021', '29/11/2021', '23'),
(24, 1, 2, 'Morbi neque', 'nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In', 'sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio', '25/11/2021', '20/11/2021', '24'),
(25, 1, 4, 'In at pede. Cras vulputate', 'vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', 'diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis', '23/11/2021', '23/11/2021', '25'),
(26, 1, 1, 'nisi nibh lacinia orci, consectetuer', 'elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit', 'tellus non magna. Nam ligula elit, pretium et, rutrum non,', '22/11/2021', '25/11/2021', '26'),
(27, 7, 2, 'lectus pede et', 'aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla', 'Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede', '20/11/2021', '28/11/2021', '27'),
(28, 6, 5, 'ornare egestas ligula. Nullam', 'sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet', 'bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci,', '24/11/2021', '23/11/2021', '28'),
(29, 3, 1, 'In', 'Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras', 'diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna.', '25/11/2021', '29/11/2021', '29'),
(30, 5, 1, 'Mauris vestibulum, neque sed dictum', 'sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna.', 'nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse', '25/11/2021', '22/11/2021', '30'),
(31, NULL, 2, 'nisl sem, consequat', 'eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque', 'neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '29/11/2021', '23/11/2021', '31'),
(33, 6, 9, 'Proin nisl sem, consequat', 'accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit', 'nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero', '28/11/2021', '20/11/2021', '33'),
(34, 4, 6, 'ac mattis ornare,', 'fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et', 'turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna', '28/11/2021', '28/11/2021', '34'),
(35, 3, 1, 'magnis dis parturient', 'tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula', 'dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac', '23/11/2021', '27/11/2021', '35'),
(36, 8, 1, 'nisl. Maecenas malesuada fringilla est.', 'Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla.', 'molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam', '20/11/2021', '19/11/2021', '36'),
(37, 6, 2, 'elit, dictum', 'est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula', 'mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id', '27/11/2021', '20/11/2021', '37'),
(38, 4, 4, 'sapien. Nunc pulvinar', 'Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas', 'eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut,', '18/11/2021', '22/11/2021', '38'),
(39, 1, 5, 'ornare lectus justo eu', 'ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id', 'fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat.', '29/11/2021', '30/11/2021', '39'),
(40, 2, 6, 'mi felis, adipiscing fringilla, porttitor', 'non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut', 'accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id', '22/11/2021', '22/11/2021', '40'),
(41, 2, 4, 'Etiam laoreet, libero', 'facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing', 'a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi', '28/11/2021', '29/11/2021', '41'),
(42, 4, 8, 'lectus quis massa. Mauris vestibulum,', 'vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien', 'In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et', '19/11/2021', '24/11/2021', '42'),
(43, 3, 8, 'sed, sapien. Nunc pulvinar arcu', 'Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis', 'sit amet nulla. Donec non justo. Proin non massa non', '24/11/2021', '27/11/2021', '43'),
(44, NULL, 2, 'feugiat tellus', 'sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel', 'nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id', '26/11/2021', '30/11/2021', '44'),
(46, 7, 8, 'enim. Etiam gravida molestie arcu. Sed', 'varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc', 'auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non,', '21/11/2021', '29/11/2021', '46'),
(47, NULL, 6, 'felis. Donec tempor, est ac mattis', 'risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque.', 'eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis', '22/11/2021', '21/11/2021', '47'),
(48, 8, 9, 'et magnis dis parturient', 'aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis', 'egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada.', '22/11/2021', '20/11/2021', '48'),
(49, 3, 4, 'Fusce aliquet magna a neque.', 'imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus', 'egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi', '22/11/2021', '20/11/2021', '49'),
(51, 3, 2, 'dictum eleifend, nunc', 'egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla', 'nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam.', '28/11/2021', '24/11/2021', '51'),
(52, 2, 4, 'volutpat nunc sit amet metus.', 'vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum,', 'tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui,', '27/11/2021', '20/11/2021', '52'),
(53, 10, 4, 'nonummy ac, feugiat', 'Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris', 'tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa', '24/11/2021', '29/11/2021', '53'),
(54, NULL, 5, 'tempor', 'egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies', 'velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere', '29/11/2021', '25/11/2021', '54'),
(55, 8, 7, 'mauris', 'id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt', 'Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu', '25/11/2021', '19/11/2021', '55'),
(56, 4, 1, 'dui. Cum sociis natoque penatibus', 'Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi', 'egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget', '24/11/2021', '26/11/2021', '56'),
(57, NULL, 8, 'accumsan interdum libero', 'eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis', 'eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class', '19/11/2021', '20/11/2021', '57'),
(59, 5, 4, 'rutrum eu, ultrices sit', 'lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet,', 'neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus', '26/11/2021', '22/11/2021', '59'),
(60, 1, 5, 'Curabitur egestas nunc sed libero.', 'nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue', 'mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor', '17/11/2021', '25/11/2021', '60'),
(61, 6, 5, 'porttitor scelerisque neque. Nullam nisl.', 'pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi', 'eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum', '26/11/2021', '29/11/2021', '61'),
(62, 4, 1, 'non leo. Vivamus', 'Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum.', 'odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut,', '28/11/2021', '20/11/2021', '62'),
(63, 1, 1, 'erat neque non', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper. Duis', 'Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at,', '25/11/2021', '18/11/2021', '63'),
(64, 8, 2, 'massa. Vestibulum accumsan neque', 'Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit', 'Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae', '27/11/2021', '18/11/2021', '64'),
(65, 5, 2, 'eget metus.', 'Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi', 'cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue', '29/11/2021', '22/11/2021', '65'),
(66, 1, 6, 'tortor at risus.', 'imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin', 'sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique', '26/11/2021', '18/11/2021', '66'),
(68, 10, 5, 'lectus quis massa. Mauris vestibulum,', 'urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi.', 'interdum enim non nisi. Aenean eget metus. In nec orci.', '27/11/2021', '21/11/2021', '68'),
(69, 4, 10, 'odio sagittis semper. Nam', 'Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi', 'Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum', '26/11/2021', '28/11/2021', '69'),
(70, 3, 1, 'faucibus orci luctus', 'lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros.', 'sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet', '19/11/2021', '27/11/2021', '70'),
(71, 2, 8, 'nunc. Quisque', 'laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus.', 'semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi', '27/11/2021', '27/11/2021', '71'),
(72, 10, 2, 'facilisis.', 'dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue', 'In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum', '20/11/2021', '21/11/2021', '72'),
(73, 6, 2, 'consectetuer adipiscing', 'ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum', 'arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec', '23/11/2021', '29/11/2021', '73'),
(75, NULL, 9, 'egestas. Sed pharetra, felis eget', 'elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis', 'Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam', '18/11/2021', '20/11/2021', '75'),
(76, 5, 10, 'massa. Suspendisse eleifend. Cras sed leo.', 'orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum', 'libero. Proin sed turpis nec mauris blandit mattis. Cras eget nisi dictum augue malesuada', '22/11/2021', '29/11/2021', '76'),
(77, 3, 3, 'malesuada id, erat. Etiam vestibulum', 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam', 'commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper', '17/11/2021', '22/11/2021', '77'),
(78, 3, 6, 'Nulla aliquet. Proin velit. Sed', 'consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante', 'vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet', '24/11/2021', '27/11/2021', '78'),
(79, 10, 10, 'tristique neque venenatis lacus. Etiam', 'mauris blandit mattis. Cras eget nisi dictum augue malesuada malesuada. Integer id magna et ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam', 'molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla', '27/11/2021', '27/11/2021', '79'),
(80, 7, 4, 'Etiam bibendum fermentum metus.', 'Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula', 'elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae', '28/11/2021', '27/11/2021', '80'),
(81, NULL, 9, 'ipsum.', 'non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc', 'natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu', '27/11/2021', '30/11/2021', '81'),
(82, 3, 2, 'ullamcorper viverra. Maecenas iaculis aliquet', 'tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere', 'lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos', '18/11/2021', '18/11/2021', '82'),
(83, 3, 8, 'Cras eu tellus eu', 'Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat', 'amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes,', '27/11/2021', '27/11/2021', '83'),
(85, 5, 10, 'arcu. Curabitur ut', 'Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris', 'vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper.', '26/11/2021', '22/11/2021', '85'),
(86, 6, 7, 'Integer vitae nibh. Donec est mauris,', 'magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu', 'erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus', '24/11/2021', '25/11/2021', '86'),
(87, 1, 1, 'lorem, vehicula et, rutrum eu, ultrices', 'lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed', 'orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce', '19/11/2021', '17/11/2021', '87'),
(88, 4, 8, 'sed tortor.', 'dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper', 'malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam', '21/11/2021', '29/11/2021', '88'),
(89, 1, 5, 'magna a tortor. Nunc', 'egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis', 'non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor', '18/11/2021', '01/12/2021', '89'),
(90, 7, 3, 'magna. Ut', 'orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa.', 'posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed', '28/11/2021', '27/11/2021', '90'),
(91, 3, 6, 'et nunc.', 'ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam', 'Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie', '22/11/2021', '29/11/2021', '91'),
(92, 5, 6, 'In lorem.', 'eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim', 'aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a,', '22/11/2021', '20/11/2021', '92'),
(93, 7, 7, 'Cum sociis natoque penatibus et', 'turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue', 'non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '25/11/2021', '21/11/2021', '93'),
(94, 6, 4, 'Aenean eget metus.', 'sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,', 'ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros', '25/11/2021', '23/11/2021', '94'),
(95, 6, 9, 'euismod in,', 'gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet', 'accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem', '27/11/2021', '29/11/2021', '95'),
(96, 2, 1, 'lorem ut aliquam iaculis, lacus', 'mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy', 'molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu', '20/11/2021', '23/11/2021', '96'),
(97, 5, 8, 'Mauris magna. Duis dignissim tempor', 'diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque.', 'arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce', '20/11/2021', '17/11/2021', '97'),
(98, 10, 7, 'non dui nec', 'lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus', 'nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat.', '26/11/2021', '28/11/2021', '98'),
(99, 4, 1, 'a neque. Nullam ut', 'penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus.', 'lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum', '28/11/2021', '23/11/2021', '99'),
(100, 4, 8, 'Integer vulputate, risus', 'eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora', 'et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id,', '20/11/2021', '20/11/2021', '100'),
(104, 7, 1, 'Titre', 'texte', 'chapo', '12/01/2023', NULL, '101-Titre'),
(105, 10, 1, 'Titre', 'texte add', 'chapo', '12/01/2023', NULL, '105-Titre'),
(106, 7, 1, 'Titre', 'texte', 'chapo', '12/01/2023', NULL, '106-Titre'),
(107, 7, 1, 'Titre', 'texte', 'chapo', '12/01/2023', NULL, '107-Titre');

-- --------------------------------------------------------

--
-- Structure de la table `blog_users`
--

CREATE TABLE `blog_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog_users`
--

INSERT INTO `blog_users` (`id`, `user_name`, `first_name`, `last_name`, `email`, `password`, `created_at`, `flag`) VALUES
(1, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 1),
(2, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 1),
(3, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 1),
(4, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 1),
(5, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 1),
(6, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 0),
(7, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 0),
(8, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 0),
(9, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 0),
(10, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 0),
(11, 'Tonytillet', 'Tillet', 'Tony', 'tony.tillet@gmail.com', '$2y$10$fM/RIf2nHTez2.N.BwbX3uLRxllvCA985N6A8X7EzltcrtS5FdoUG', '2022-10-26 11:48:37', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog_globals`
--
ALTER TABLE `blog_globals`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT pour la table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT pour la table `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
