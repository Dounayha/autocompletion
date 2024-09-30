-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2024 at 11:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocompletion`
--

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `description` text,
  `photo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `nom`, `description`, `photo_url`) VALUES
(1, 'Chien', 'On retrouve le chien pratiquement dans tous les pays du monde. Il vit en harmonie avec les hommes comme animal de travail ou de compagnie. Le chien est souvent appelé le meilleur ami de l\'homme.', 'https://i.pinimg.com/originals/11/bd/46/11bd4658af4a9c27c52ffca59a3f60dd.jpg'),
(2, 'Chat', 'Le chat est un mammifère de la famille des félidés. Il pèse en moyenne 2,5 à 4,5 kg et mesure entre 66 et 76 cm, avec la queue. Ses pattes sont pourvues de griffes rétractiles. Elles ont à leur base des coussinets constitués d\'une membrane élastique qui leur permet de se déplacer sans faire de bruit. Le pelage du chat est composé de poils de longueur variable selon les races.', 'https://i.pinimg.com/originals/79/d5/78/79d57896af7d24510a002eb2f6165636.jpg'),
(3, 'Cheval', 'Le cheval est un grand mammifère de la famille des équidés. Il a une crinière et une queue dont les poils sont appelés crins. La couleur des poils et des crins du cheval constituent sa robe. Celle-ci peut avoir des couleurs très variées, mais les couleurs les plus courantes sont le bai (le pelage est roux, tandis que la crinière, la queue, le contour des oreilles et le bas des membres sont noirs), l\'alezan (les poils, les crins et les extrémités sont d\'un brun plus ou moins foncé) et le gris (le poil est clair, la peau et les yeux sont très foncés).', 'https://www.bubblypet.com/wp-content/uploads/2021/08/Buckskin-Bay-Horse.jpg'),
(4, 'Ours', 'L\'ours est un grand mammifère carnivore.\r\nL\'Ours brun peut vivre trente ans à l\'état sauvage et jusqu\'à quarante ans en captivité. L\'Ours brun a une fourrure dans les teintes blondes, brunes, noires, ou une combinaison de ces couleurs. Les Ours bruns ont une grande bosse de muscles au-dessus de leurs épaules qui donne la force aux membres antérieurs pour creuser.', 'https://i.pinimg.com/originals/aa/c1/6d/aac16ddda8b493bd76b22bc853ef615c.jpg'),
(5, 'Lion', 'Le lion est le roi des animaux.\r\nLe Lion  est une espèce de mammifères carnivores de la famille des Félidés. La femelle du lion est la lionne, son petit est le lionceau. Le mâle adulte, aisément reconnaissable à son importante crinière, accuse une masse moyenne qui peut être variable selon les zones géographiques où il se trouve, allant de 145 à 180 kg pour les lions d\'Asie à plus de 225 kg pour les lions d\'Afrique.', 'https://i.pinimg.com/originals/5c/c6/34/5cc63416f068f61d3e0b5b5ed0724b40.jpg'),
(6, 'Tigre', 'Le tigre est le plus grand des félins.\r\nLe Tigre est une espèce de mammifère carnivore de la famille des félidés du genre Panthera. Aisément reconnaissable à sa fourrure rousse rayée de noir, c\'est le plus grand félin sauvage et l\'un des plus grands carnivores terrestres, dépassé seulement par les plus grandes espèces d\'ours.', 'https://i.pinimg.com/originals/fc/2a/b7/fc2ab78a3a2d06c8b0350aae79742347.jpg'),
(7, 'Éléphant', 'L\'éléphant est le plus grand mammifère terrestre.\r\nLes éléphants sont des mammifères proboscidiens de la famille des Éléphantidés. Ils correspondent aujourd\'hui à trois espèces réparties en deux genres distincts. L\'éléphant de savane d\'Afrique et l\'éléphant de forêt d\'Afrique, autrefois regroupés sous la même espèce d\'« éléphant d\'Afrique »', 'https://i.pinimg.com/originals/21/74/82/217482c9fad0f123b70caa33aa432e47.jpg'),
(8, 'Singe', 'Le singe est un mammifère primate, réputé pour son intelligence et ses capacités d\\\'apprentissage. On le retrouve principalement dans les forêts tropicales et subtropicales, bien qu\\\'il existe de nombreuses espèces vivant dans différents habitats. Les singes se distinguent par leur grande agilité, leur queue parfois préhensile, et leur comportement social complexe. Ils vivent en groupes organisés et communiquent à travers une variété de vocalisations et de gestes. \r\n', 'https://i.pinimg.com/originals/07/68/b4/0768b49e7c1f10331eee102dfa82343c.jpg'),
(9, 'Zèbre', 'Le zèbre est un mammifère herbivore appartenant à la famille des équidés, célèbre pour ses rayures noires et blanches uniques. Chaque zèbre a un motif de rayures distinct, ce qui le rend aussi unique qu\'une empreinte digitale. Ces rayures sont un mécanisme de camouflage, les aidant à se fondre dans leur environnement et à éviter les prédateurs. \r\n', 'https://i.pinimg.com/originals/7c/1c/f6/7c1cf6740d84b54cd5b4b67cff782c34.jpg'),
(10, 'Renard', 'Le renard est un animal rusé et intelligent.\r\nLe renard est un mammifère carnivore appartenant à la famille des canidés. Il est surtout connu pour son intelligence, son agilité et sa capacité à s\'adapter à divers environnements, des forêts aux zones urbaines. Le renard roux, la variété la plus commune, possède un pelage rougeâtre, une queue touffue et des oreilles pointues. \r\n', 'https://i.pinimg.com/originals/ab/28/92/ab2892c5bee4fad1dc2a72c8a09bc26c.jpg'),
(11, 'Gorille', 'Le gorille est le plus grand primate vivant.Le gorille est le plus grand des primates, vivant principalement dans les forêts tropicales d\'Afrique centrale. Il existe deux espèces principales : le gorille de montagne et le gorille des plaines. Ce mammifère impressionnant est connu pour sa force physique, mais aussi pour son comportement social complexe. Les gorilles vivent en groupes familiaux dirigés par un mâle dominant appelé \'dos argenté.', 'https://i.pinimg.com/originals/90/03/aa/9003aaeacf704e660e4c6986996a4e7d.jpg'),
(12, 'Panthère', 'La panthère est un grand félin.La panthère est un grand félin agile et puissant, souvent confondu avec le léopard, car il s\'agit en réalité d\'une variation de couleur du léopard ou du jaguar, due à une mutation génétique. Elle peut être de couleur noire ou avoir des taches sur son pelage doré. La panthère est un prédateur solitaire et opportuniste, capable de grimper aux arbres pour chasser ou pour échapper à des prédateurs plus grands', 'https://i.pinimg.com/originals/4c/4e/b5/4c4eb57163a8594365bc947098e58afa.jpg'),
(13, 'Panda', 'Le panda est un ours noir et blanc originellement de Chine.Le panda géant est un mammifère originaire de Chine, célèbre pour son pelage noir et blanc distinctif. Il vit principalement dans les forêts de bambou des régions montagneuses. Bien qu\'il fasse partie de la famille des carnivores, son régime alimentaire est composé à 99 % de bambou, avec parfois des petits rongeurs ou des œufs.', 'https://i.pinimg.com/originals/2f/6b/5e/2f6b5e86c7cabad0ece4c05ab7526b7d.jpg'),
(14, 'Dauphin', 'Le dauphin est un mammifère marin intelligent.Le dauphin est un mammifère marin intelligent, connu pour sa sociabilité et sa capacité à interagir avec les humains. Ces animaux sont dotés d\'un corps hydrodynamique qui leur permet de nager rapidement et d\'effectuer des sauts acrobatiques hors de l\'eau. Les dauphins vivent en groupes appelés \"écoles\" et communiquent entre eux à l\'aide de sifflements, de clics et d\'autres vocalisations.', 'https://i.pinimg.com/originals/4a/3a/f6/4a3af6a66b99cc9e60e0f995a06a28e2.jpg'),
(15, 'Requin', 'Le requin est un prédateur marin redoutable, appartenant à la famille des poissons cartilagineux. Il se distingue par son corps fuselé, ses nageoires puissantes et sa mâchoire remplie de dents acérées. Les requins sont présents dans tous les océans du monde, des eaux côtières peu profondes aux profondeurs abyssales. ', 'https://i.pinimg.com/originals/fe/45/a7/fe45a7a468b0e298a848f71ba6c5faad.jpg'),
(16, 'Baleine', '\r\nLa baleine est le plus grand animal vivant sur Terre, appartenant au groupe des mammifères marins. Ces géants des mers peuvent atteindre des tailles impressionnantes, certaines espèces mesurant plus de 30 mètres de long. Les baleines se distinguent par leur corps massif, leur nageoire caudale large et leurs fanons ou dents, selon l\'espèce.', 'https://i.pinimg.com/originals/ee/8a/f2/ee8af274e01614fd7495ccc78d83ef62.jpg'),
(17, 'Cerf', 'Le cerf est un mammifère herbivore appartenant à la famille des cervidés. Reconnaissable par ses grandes oreilles, son corps élancé et ses pattes fines, le cerf est un animal agile et rapide. Les mâles, appelés cerfs, possèdent des bois qui tombent chaque année et repoussent au printemps, tandis que les femelles, appelées biches, n\'en ont pas.', 'https://i.pinimg.com/originals/38/c8/ce/38c8ce8e679a8ef6096f9b687785eee6.jpg'),
(18, 'Loup', 'Le loup est un mammifère carnivore appartenant à la famille des canidés. Reconnu pour son pelage épais et sa grande taille, le loup est un prédateur social qui vit en meute, une structure familiale qui lui permet de chasser efficacement et de défendre son territoire. Les meutes sont souvent dirigées par un couple alpha.', 'https://i.pinimg.com/originals/ab/40/3c/ab403c62130e7763bba67e57ab386cdc.jpg'),
(19, 'Crocodile', 'Le crocodile est un grand reptile carnivore appartenant à la famille des Crocodylidae. Il est connu pour son corps allongé, sa peau écailleuse et sa puissante mâchoire remplie de dents acérées. Les crocodiles sont des prédateurs opportunistes, se nourrissant principalement de poissons, d\'oiseaux et de mammifères qui s\'approchent de l\'eau.', 'https://i.pinimg.com/originals/e1/91/d4/e191d4537a9e1fd7066208545040ccd0.jpg'),
(20, 'Rhinocéros', 'Le rhinocéros est un grand mammifère herbivore de la famille des Rhinocerotidae, reconnaissable à sa peau épaisse et à ses célèbres cornes. Ces animaux imposants peuvent peser plusieurs tonnes et se distinguent par leur corps robuste et leur tête massive. Les rhinocéros se nourrissent principalement d\'herbes, de feuilles et de branches, utilisant leurs cornes pour défricher la végétation', 'https://i.pinimg.com/originals/a7/77/9c/a7779c36366e9699b998ae5e722ad77d.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
