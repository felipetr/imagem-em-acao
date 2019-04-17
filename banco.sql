/*
 Navicat Premium Data Transfer

 Source Server         : Synology
 Source Server Type    : MySQL
 Source Server Version : 50559
 Source Host           : 192.168.25.222:3306
 Source Schema         : felipetr_jogo

 Target Server Type    : MySQL
 Target Server Version : 50559
 File Encoding         : 65001

 Date: 17/04/2019 11:05:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mimica
-- ----------------------------
DROP TABLE IF EXISTS `mimica`;
CREATE TABLE `mimica`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `mimica` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 301 CHARACTER SET = utf8 COLLATE = utf8_bin ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mimica
-- ----------------------------
INSERT INTO `mimica` VALUES (1, 'o', 'Dentadura');
INSERT INTO `mimica` VALUES (2, 'o', 'Ar Condicionado');
INSERT INTO `mimica` VALUES (3, 'o', 'Escova de Dentes');
INSERT INTO `mimica` VALUES (4, 'o', 'Livro de Receitas');
INSERT INTO `mimica` VALUES (5, 'o', 'Crachá');
INSERT INTO `mimica` VALUES (6, 'o', 'Braço Mecânico');
INSERT INTO `mimica` VALUES (7, 'o', 'Cavaquinho');
INSERT INTO `mimica` VALUES (8, 'o', 'Espremedor de Frutas');
INSERT INTO `mimica` VALUES (9, 'o', 'Luva');
INSERT INTO `mimica` VALUES (10, 'o', 'Cadeira de Balanço');
INSERT INTO `mimica` VALUES (11, 'o', 'Ketchup');
INSERT INTO `mimica` VALUES (12, 'o', 'Bombom');
INSERT INTO `mimica` VALUES (13, 'o', 'Sanduiche');
INSERT INTO `mimica` VALUES (14, 'o', 'Mochila');
INSERT INTO `mimica` VALUES (15, 'o', 'Caderno');
INSERT INTO `mimica` VALUES (16, 'o', 'Maçaneta');
INSERT INTO `mimica` VALUES (17, 'o', 'Comprimido (Remédio)');
INSERT INTO `mimica` VALUES (18, 'o', 'Prancha de Surfe');
INSERT INTO `mimica` VALUES (19, 'o', 'Rodo');
INSERT INTO `mimica` VALUES (20, 'o', 'Escada Rolante');
INSERT INTO `mimica` VALUES (21, 'o', 'Espeto');
INSERT INTO `mimica` VALUES (22, 'o', 'Bicicleta');
INSERT INTO `mimica` VALUES (23, 'o', 'Placa de Trânsito');
INSERT INTO `mimica` VALUES (24, 'o', 'Xícara');
INSERT INTO `mimica` VALUES (25, 'o', 'Algodão Doce');
INSERT INTO `mimica` VALUES (26, 'o', 'Nuvem');
INSERT INTO `mimica` VALUES (27, 'o', 'Louça');
INSERT INTO `mimica` VALUES (28, 'o', 'Alicate');
INSERT INTO `mimica` VALUES (29, 'o', 'Gaiola');
INSERT INTO `mimica` VALUES (30, 'o', 'Panela de Pressão');
INSERT INTO `mimica` VALUES (31, 'o', 'Vestido');
INSERT INTO `mimica` VALUES (32, 'o', 'Machado');
INSERT INTO `mimica` VALUES (33, 'o', 'Gaveta');
INSERT INTO `mimica` VALUES (34, 'o', 'Telescópio');
INSERT INTO `mimica` VALUES (35, 'o', 'Lenço');
INSERT INTO `mimica` VALUES (36, 'o', 'Estátua');
INSERT INTO `mimica` VALUES (37, 'o', 'Paletó');
INSERT INTO `mimica` VALUES (38, 'o', 'Palito de Fósforo');
INSERT INTO `mimica` VALUES (39, 'o', 'Revista em Quadrinhos');
INSERT INTO `mimica` VALUES (40, 'o', 'Lixeira');
INSERT INTO `mimica` VALUES (41, 'o', 'Bola de Vôlei');
INSERT INTO `mimica` VALUES (42, 'o', 'Dado');
INSERT INTO `mimica` VALUES (43, 'o', 'Ímã de Geladeira');
INSERT INTO `mimica` VALUES (44, 'o', 'Babá Eletrônica');
INSERT INTO `mimica` VALUES (45, 'o', 'Papel de Presente');
INSERT INTO `mimica` VALUES (46, 'o', 'Coleira');
INSERT INTO `mimica` VALUES (47, 'o', 'Raquete de Tênis');
INSERT INTO `mimica` VALUES (48, 'o', 'Óculos de Grau');
INSERT INTO `mimica` VALUES (49, 'o', 'Balão (Veículo)');
INSERT INTO `mimica` VALUES (50, 'o', 'Varinha de Condão');
INSERT INTO `mimica` VALUES (51, 'a', 'Bagunçar');
INSERT INTO `mimica` VALUES (52, 'a', 'Grampear');
INSERT INTO `mimica` VALUES (53, 'a', 'Abanar o Rabo');
INSERT INTO `mimica` VALUES (54, 'a', 'Desmontar');
INSERT INTO `mimica` VALUES (55, 'a', 'Ninar');
INSERT INTO `mimica` VALUES (56, 'a', 'Ventilar');
INSERT INTO `mimica` VALUES (57, 'a', 'Enrolar');
INSERT INTO `mimica` VALUES (58, 'a', 'Fazer a Barba');
INSERT INTO `mimica` VALUES (59, 'a', 'Morar');
INSERT INTO `mimica` VALUES (60, 'a', 'Arrumar');
INSERT INTO `mimica` VALUES (61, 'a', 'Falar com as paredes');
INSERT INTO `mimica` VALUES (62, 'a', 'Olhar-se no Espelho');
INSERT INTO `mimica` VALUES (63, 'a', 'Atropelar');
INSERT INTO `mimica` VALUES (64, 'a', 'Batizar');
INSERT INTO `mimica` VALUES (65, 'a', 'Maquiar');
INSERT INTO `mimica` VALUES (66, 'a', 'Espremer');
INSERT INTO `mimica` VALUES (67, 'a', 'Aspirar o pó');
INSERT INTO `mimica` VALUES (68, 'a', 'Escutar');
INSERT INTO `mimica` VALUES (69, 'a', 'Fofocar');
INSERT INTO `mimica` VALUES (70, 'a', 'Comemorar');
INSERT INTO `mimica` VALUES (71, 'a', 'Calar');
INSERT INTO `mimica` VALUES (72, 'a', 'Passear com o cachorro');
INSERT INTO `mimica` VALUES (73, 'a', 'Desenhar');
INSERT INTO `mimica` VALUES (74, 'a', 'Digitar');
INSERT INTO `mimica` VALUES (75, 'a', 'Espiar');
INSERT INTO `mimica` VALUES (76, 'a', 'Fazer as pazes');
INSERT INTO `mimica` VALUES (77, 'a', 'Engatinhar');
INSERT INTO `mimica` VALUES (78, 'a', 'Mastigar');
INSERT INTO `mimica` VALUES (79, 'a', 'Amar');
INSERT INTO `mimica` VALUES (80, 'a', 'Tacar fogo');
INSERT INTO `mimica` VALUES (81, 'a', 'Ligar');
INSERT INTO `mimica` VALUES (82, 'a', 'Chamar');
INSERT INTO `mimica` VALUES (83, 'a', 'Cegar');
INSERT INTO `mimica` VALUES (84, 'a', 'Fritar ovo');
INSERT INTO `mimica` VALUES (85, 'a', 'Investigar');
INSERT INTO `mimica` VALUES (86, 'a', 'Vestir-se');
INSERT INTO `mimica` VALUES (87, 'a', 'Jogar Fora');
INSERT INTO `mimica` VALUES (88, 'a', 'Contar um Segredo');
INSERT INTO `mimica` VALUES (89, 'a', 'Castigar');
INSERT INTO `mimica` VALUES (90, 'a', 'Acender');
INSERT INTO `mimica` VALUES (91, 'a', 'Imitar');
INSERT INTO `mimica` VALUES (92, 'a', 'Sair');
INSERT INTO `mimica` VALUES (93, 'a', 'Vaiar');
INSERT INTO `mimica` VALUES (94, 'a', 'Assustar');
INSERT INTO `mimica` VALUES (95, 'a', 'Enterrar');
INSERT INTO `mimica` VALUES (96, 'a', 'Levar uma surra');
INSERT INTO `mimica` VALUES (97, 'a', 'Esticar');
INSERT INTO `mimica` VALUES (98, 'a', 'Encolher');
INSERT INTO `mimica` VALUES (99, 'a', 'Brigar');
INSERT INTO `mimica` VALUES (100, 'a', 'Estacionar');
INSERT INTO `mimica` VALUES (101, 'd', 'Local');
INSERT INTO `mimica` VALUES (102, 'd', 'Vingança');
INSERT INTO `mimica` VALUES (103, 'd', 'Trote');
INSERT INTO `mimica` VALUES (104, 'd', 'Vontade');
INSERT INTO `mimica` VALUES (105, 'd', 'Cadarço');
INSERT INTO `mimica` VALUES (106, 'd', 'Mímica');
INSERT INTO `mimica` VALUES (107, 'd', 'Lombada');
INSERT INTO `mimica` VALUES (108, 'd', 'Verdade');
INSERT INTO `mimica` VALUES (109, 'd', 'Mutante');
INSERT INTO `mimica` VALUES (110, 'd', 'Vitamina');
INSERT INTO `mimica` VALUES (111, 'd', 'Quadriculado');
INSERT INTO `mimica` VALUES (112, 'd', 'Milionário');
INSERT INTO `mimica` VALUES (113, 'd', 'Susto');
INSERT INTO `mimica` VALUES (114, 'd', 'Feiticeiro');
INSERT INTO `mimica` VALUES (115, 'd', 'Esmola');
INSERT INTO `mimica` VALUES (116, 'd', 'Defeito');
INSERT INTO `mimica` VALUES (117, 'd', 'Talento');
INSERT INTO `mimica` VALUES (118, 'd', 'Mentira');
INSERT INTO `mimica` VALUES (119, 'd', 'Tragédia');
INSERT INTO `mimica` VALUES (120, 'd', 'Pediatra');
INSERT INTO `mimica` VALUES (121, 'd', 'Imagem');
INSERT INTO `mimica` VALUES (122, 'd', 'Xingamento');
INSERT INTO `mimica` VALUES (123, 'd', 'Meia-entrada');
INSERT INTO `mimica` VALUES (124, 'd', 'Turma');
INSERT INTO `mimica` VALUES (125, 'd', 'Crise');
INSERT INTO `mimica` VALUES (126, 'd', 'Maremoto');
INSERT INTO `mimica` VALUES (127, 'd', 'Herança');
INSERT INTO `mimica` VALUES (128, 'd', 'Hospício');
INSERT INTO `mimica` VALUES (129, 'd', 'Plantão');
INSERT INTO `mimica` VALUES (130, 'd', 'Antena Parabólica');
INSERT INTO `mimica` VALUES (131, 'd', 'Dor de Dente');
INSERT INTO `mimica` VALUES (132, 'd', 'Dente de Leite');
INSERT INTO `mimica` VALUES (133, 'd', 'Laboratório');
INSERT INTO `mimica` VALUES (134, 'd', 'Quilômetro');
INSERT INTO `mimica` VALUES (135, 'd', 'Cansado');
INSERT INTO `mimica` VALUES (136, 'd', 'Arranha-céu');
INSERT INTO `mimica` VALUES (137, 'd', 'Ecologia');
INSERT INTO `mimica` VALUES (138, 'd', 'Paranoia');
INSERT INTO `mimica` VALUES (139, 'd', 'Asilo');
INSERT INTO `mimica` VALUES (140, 'd', 'Camelo');
INSERT INTO `mimica` VALUES (141, 'd', 'Fácil');
INSERT INTO `mimica` VALUES (142, 'd', 'Difícil');
INSERT INTO `mimica` VALUES (143, 'd', 'Macabro');
INSERT INTO `mimica` VALUES (144, 'd', 'Pino de Boliche');
INSERT INTO `mimica` VALUES (145, 'd', 'Lâmpada de LED');
INSERT INTO `mimica` VALUES (146, 'd', 'Casca de Ferida');
INSERT INTO `mimica` VALUES (147, 'd', 'Armário de Cozinha');
INSERT INTO `mimica` VALUES (148, 'd', 'Girassol');
INSERT INTO `mimica` VALUES (149, 'd', 'Fotografia em Preto e Branco');
INSERT INTO `mimica` VALUES (150, 'd', 'Calça boca de sino');
INSERT INTO `mimica` VALUES (151, 't', 'Calderão do Hulk');
INSERT INTO `mimica` VALUES (152, 't', 'Harry Potter');
INSERT INTO `mimica` VALUES (153, 't', 'Carinha de Anjo');
INSERT INTO `mimica` VALUES (154, 't', 'Chiquititas');
INSERT INTO `mimica` VALUES (155, 't', 'Sítio do Pica-pau Amarelo');
INSERT INTO `mimica` VALUES (156, 't', 'Jornal Nacional');
INSERT INTO `mimica` VALUES (157, 't', 'Velozes e Furiosos');
INSERT INTO `mimica` VALUES (158, 't', 'Star Wars');
INSERT INTO `mimica` VALUES (159, 't', 'Sexta-Feira 13');
INSERT INTO `mimica` VALUES (160, 't', 'O Chamado');
INSERT INTO `mimica` VALUES (161, 't', 'Toy Story');
INSERT INTO `mimica` VALUES (162, 't', 'Titanic');
INSERT INTO `mimica` VALUES (163, 't', 'Jurassic Park');
INSERT INTO `mimica` VALUES (164, 't', 'Hora de Aventura');
INSERT INTO `mimica` VALUES (165, 't', 'Naruto');
INSERT INTO `mimica` VALUES (166, 't', 'Senhor dos Anéis');
INSERT INTO `mimica` VALUES (167, 't', 'Auto da Compadecida');
INSERT INTO `mimica` VALUES (168, 't', 'Avatar');
INSERT INTO `mimica` VALUES (169, 't', 'Homem Aranha');
INSERT INTO `mimica` VALUES (170, 't', 'Batman');
INSERT INTO `mimica` VALUES (171, 't', 'Bob Esponja');
INSERT INTO `mimica` VALUES (172, 't', 'A Grande Família');
INSERT INTO `mimica` VALUES (173, 't', 'Os Simpsons');
INSERT INTO `mimica` VALUES (174, 't', 'A Praça é Nossa');
INSERT INTO `mimica` VALUES (175, 't', 'Galvão Bueno');
INSERT INTO `mimica` VALUES (176, 't', 'Silvio Santos');
INSERT INTO `mimica` VALUES (177, 't', 'Vingadores');
INSERT INTO `mimica` VALUES (178, 't', 'Caça Fantasmas');
INSERT INTO `mimica` VALUES (179, 't', 'Crepúsculo');
INSERT INTO `mimica` VALUES (180, 't', 'Alice no País das Maravilhas');
INSERT INTO `mimica` VALUES (181, 't', 'Gumball');
INSERT INTO `mimica` VALUES (182, 't', 'Cinderela');
INSERT INTO `mimica` VALUES (183, 't', 'Bela e a Fera');
INSERT INTO `mimica` VALUES (184, 't', 'Malhação');
INSERT INTO `mimica` VALUES (185, 't', 'Castelo Ratimbum');
INSERT INTO `mimica` VALUES (186, 't', 'Peppa Pig');
INSERT INTO `mimica` VALUES (187, 't', 'Fala que Eu Te Escuto');
INSERT INTO `mimica` VALUES (188, 't', 'Big Brother');
INSERT INTO `mimica` VALUES (189, 't', 'Vale a Pena Ver denovo');
INSERT INTO `mimica` VALUES (190, 't', 'Todo Mundo Odeia o Cris');
INSERT INTO `mimica` VALUES (191, 't', 'Um Maluco no Pedaço');
INSERT INTO `mimica` VALUES (192, 't', 'Eu, a Patroa e as Crianças');
INSERT INTO `mimica` VALUES (193, 't', 'Super Pop');
INSERT INTO `mimica` VALUES (194, 't', 'Chaves');
INSERT INTO `mimica` VALUES (195, 't', 'Chapolin Colorado');
INSERT INTO `mimica` VALUES (196, 't', 'Video Show');
INSERT INTO `mimica` VALUES (197, 't', 'Pica Pau');
INSERT INTO `mimica` VALUES (198, 't', 'Tom & Jerry');
INSERT INTO `mimica` VALUES (199, 't', 'Mais Você');
INSERT INTO `mimica` VALUES (200, 't', 'Siga Bem Caminhoneiro');
INSERT INTO `mimica` VALUES (201, 'p', 'Dentista');
INSERT INTO `mimica` VALUES (202, 'p', 'Médico');
INSERT INTO `mimica` VALUES (203, 'p', 'Bombeiro');
INSERT INTO `mimica` VALUES (204, 'p', 'Enfermeiro');
INSERT INTO `mimica` VALUES (205, 'p', 'Surfista');
INSERT INTO `mimica` VALUES (206, 'p', 'Babá');
INSERT INTO `mimica` VALUES (207, 'p', 'Jogador de Vôlei');
INSERT INTO `mimica` VALUES (208, 'p', 'Veterinário');
INSERT INTO `mimica` VALUES (209, 'p', 'Contador');
INSERT INTO `mimica` VALUES (210, 'p', 'Telefonista');
INSERT INTO `mimica` VALUES (211, 'p', 'Prefeito');
INSERT INTO `mimica` VALUES (212, 'p', 'Caminhoneiro');
INSERT INTO `mimica` VALUES (213, 'p', 'Pintor (Construção Civil)');
INSERT INTO `mimica` VALUES (214, 'p', 'Ator');
INSERT INTO `mimica` VALUES (215, 'p', 'Advogado');
INSERT INTO `mimica` VALUES (216, 'p', 'Juiz (Direito)');
INSERT INTO `mimica` VALUES (217, 'p', 'Flanelinha');
INSERT INTO `mimica` VALUES (218, 'p', 'Piloto de Avião');
INSERT INTO `mimica` VALUES (219, 'p', 'Programador');
INSERT INTO `mimica` VALUES (220, 'p', 'Mecânico');
INSERT INTO `mimica` VALUES (221, 'p', 'Idoso');
INSERT INTO `mimica` VALUES (222, 'p', 'Grávida');
INSERT INTO `mimica` VALUES (223, 'p', 'Anão');
INSERT INTO `mimica` VALUES (224, 'p', 'Chinês');
INSERT INTO `mimica` VALUES (225, 'p', 'Egoísta');
INSERT INTO `mimica` VALUES (226, 'p', 'Fumante');
INSERT INTO `mimica` VALUES (227, 'p', 'Bêbado');
INSERT INTO `mimica` VALUES (228, 'p', 'Roqueiro');
INSERT INTO `mimica` VALUES (229, 'p', 'Sambista');
INSERT INTO `mimica` VALUES (230, 'p', 'Bebê');
INSERT INTO `mimica` VALUES (231, 'p', 'Cavalo');
INSERT INTO `mimica` VALUES (232, 'p', 'Canguru');
INSERT INTO `mimica` VALUES (233, 'p', 'Jacaré');
INSERT INTO `mimica` VALUES (234, 'p', 'Cachorro');
INSERT INTO `mimica` VALUES (235, 'p', 'Elefante');
INSERT INTO `mimica` VALUES (236, 'p', 'Girafa');
INSERT INTO `mimica` VALUES (237, 'p', 'Minhoca');
INSERT INTO `mimica` VALUES (238, 'p', 'Tubarão');
INSERT INTO `mimica` VALUES (239, 'p', 'Abelha');
INSERT INTO `mimica` VALUES (240, 'p', 'Caracol');
INSERT INTO `mimica` VALUES (241, 'p', 'Polvo');
INSERT INTO `mimica` VALUES (242, 'p', 'Lagosta');
INSERT INTO `mimica` VALUES (243, 'p', 'Água Viva');
INSERT INTO `mimica` VALUES (244, 'p', 'Coruja');
INSERT INTO `mimica` VALUES (245, 'p', 'Beija Flor');
INSERT INTO `mimica` VALUES (246, 'p', 'Serpente');
INSERT INTO `mimica` VALUES (247, 'p', 'Urso Panda');
INSERT INTO `mimica` VALUES (248, 'p', 'Sapo');
INSERT INTO `mimica` VALUES (249, 'p', 'Baiacu');
INSERT INTO `mimica` VALUES (250, 'p', 'Galinha');
INSERT INTO `mimica` VALUES (251, 'l', 'Zoológico');
INSERT INTO `mimica` VALUES (252, 'l', 'Supermercado');
INSERT INTO `mimica` VALUES (253, 'l', 'Praça');
INSERT INTO `mimica` VALUES (254, 'l', 'Igreja');
INSERT INTO `mimica` VALUES (255, 'l', 'Praia');
INSERT INTO `mimica` VALUES (256, 'l', 'Japão');
INSERT INTO `mimica` VALUES (257, 'l', 'Olinda');
INSERT INTO `mimica` VALUES (258, 'l', 'França');
INSERT INTO `mimica` VALUES (259, 'l', 'Rio de Janeiro');
INSERT INTO `mimica` VALUES (260, 'l', 'Shopping Center');
INSERT INTO `mimica` VALUES (261, 'l', 'Hotel');
INSERT INTO `mimica` VALUES (262, 'l', 'México');
INSERT INTO `mimica` VALUES (263, 'l', 'Centro da Cidade');
INSERT INTO `mimica` VALUES (264, 'l', 'Hospício');
INSERT INTO `mimica` VALUES (265, 'l', 'Hospital');
INSERT INTO `mimica` VALUES (266, 'l', 'Prefeitura');
INSERT INTO `mimica` VALUES (267, 'l', 'Montanha');
INSERT INTO `mimica` VALUES (268, 'l', 'Estrada');
INSERT INTO `mimica` VALUES (269, 'l', 'Restaurante');
INSERT INTO `mimica` VALUES (270, 'l', 'Índia');
INSERT INTO `mimica` VALUES (271, 'l', 'Asilo');
INSERT INTO `mimica` VALUES (272, 'l', 'Academia');
INSERT INTO `mimica` VALUES (273, 'l', 'Barbearia');
INSERT INTO `mimica` VALUES (274, 'l', 'Cabeleireiro');
INSERT INTO `mimica` VALUES (275, 'l', 'Itália');
INSERT INTO `mimica` VALUES (276, 'l', 'Egito');
INSERT INTO `mimica` VALUES (277, 'l', 'Antártida');
INSERT INTO `mimica` VALUES (278, 'l', 'Grécia');
INSERT INTO `mimica` VALUES (279, 'l', 'Floresta');
INSERT INTO `mimica` VALUES (280, 'l', 'Deserto');
INSERT INTO `mimica` VALUES (281, 'l', 'Ilha');
INSERT INTO `mimica` VALUES (282, 'l', 'Farmácia');
INSERT INTO `mimica` VALUES (283, 'l', 'Cinema');
INSERT INTO `mimica` VALUES (284, 'l', 'Teatro');
INSERT INTO `mimica` VALUES (285, 'l', 'Museu');
INSERT INTO `mimica` VALUES (286, 'l', 'Feira');
INSERT INTO `mimica` VALUES (287, 'l', 'SPA');
INSERT INTO `mimica` VALUES (288, 'l', 'Casa');
INSERT INTO `mimica` VALUES (289, 'l', 'Livraria');
INSERT INTO `mimica` VALUES (290, 'l', 'Biblioteca');
INSERT INTO `mimica` VALUES (291, 'l', 'Escola');
INSERT INTO `mimica` VALUES (292, 'l', 'Piscina');
INSERT INTO `mimica` VALUES (293, 'l', 'Parque de Diversões');
INSERT INTO `mimica` VALUES (294, 'l', 'Cadeia');
INSERT INTO `mimica` VALUES (295, 'l', 'Sorveteria');
INSERT INTO `mimica` VALUES (296, 'l', 'Portugal');
INSERT INTO `mimica` VALUES (297, 'l', 'Espanha');
INSERT INTO `mimica` VALUES (298, 'l', 'Argentina');
INSERT INTO `mimica` VALUES (299, 'l', 'Frigorífico');
INSERT INTO `mimica` VALUES (300, 'l', 'Boate');

SET FOREIGN_KEY_CHECKS = 1;
