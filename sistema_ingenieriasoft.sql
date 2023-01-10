-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2023 a las 15:24:20
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_ingenieriasoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empren_innovacion`
--

CREATE TABLE `empren_innovacion` (
  `id_emprendimiento` int(11) NOT NULL,
  `nombre_empren` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_empren` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_subida` date NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empren_innovacion`
--

INSERT INTO `empren_innovacion` (`id_emprendimiento`, `nombre_empren`, `descripcion_empren`, `imagen`, `enlace_externo`, `fecha_subida`, `responsable`) VALUES
(7, 'Copa Mundial de Emprendimiento 2020', 'Amigoniano, si tienes un emprendimiento, que se encuentra en la etapa de ideación, etapa temprana o etapa de crecimiento, ¡Esta es una oportunidad que no puedes perderte! Participa de la Copa Mundial de Emprendimiento 2020.', '5f77cad451369-unnamed__1_.jpg', 'https://entrepreneurshipworldcup.com/', '2020-10-03', 1),
(8, '¿Que es una Spin-Off Universitaria?', 'Buscamos que el conocimiento fruto de los productos y los procesos académicos e investigativos, sean transferidos al entorno contribuyendo al desarrollo social y empresarial. Para ello se generan productos que trasciendan e impacten el medio como proyectos empresariales, emprendimientos, consultorías y programas de innovación.\n\nNuestro proceso articula el Emprendimiento, la Innovación y la Transferencia.\n\n\nPara mayor información de esta iniciativa, puedes solicitar cita en la Dirección de Extensión y Servicios a la Comunidad - Bloque 1, piso 9.\nTel.: 4487666 - Exts.: 9733 - 9672 - 9544\nCorreo: asis.extension@amigo.edu.co', '5f77c3ab358a0-Spin.jpg', '', '2020-10-03', 1),
(9, 'Consultorio Empresarial', ' ', '5f77c3c38f880-08_16_consultorio_empresarial.jpg', '', '2020-10-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `nombre_noticia` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_noticia` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_subida` date NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `nombre_noticia`, `descripcion_noticia`, `imagen`, `enlace_externo`, `fecha_subida`, `responsable`) VALUES
(9, 'Semilleros para bachilleres', '“Ser el mejor en tu clase… ser el mejor en la Universidad”\n\nPROCESO DE INSCRIPCIÓN: \n\nIngrese al Sistema Académico\nEn Nombre del programa, digite: El Nombre del Semillero (por favor digitar el título en mayúscula sostenida y sin tildes).\nEn Nivel académico, seleccione: EXTENSIÓN\nEn Sede, seleccione: MEDELLÍN\nPresione CONSULTAR\nFinalmente, diligencie el formato.', '5f77b92a954d9-semilleros_virtuales_sin_costo.png', 'https://academia.funlam.edu.co/uenlinea/index.jsf', '2020-10-03', 1),
(10, 'Webinnar de Innovación', 'Desde la Unidad de Innovación queremos invitarte a participar de nuestra estrategia “Webinnar de Innovación” en el nuevo capítulo de Innovación Social y Objetivos de Desarrollo sostenible.\n\nDesde junio y hasta noviembre podrás encontrar un espacio de diálogo sobre innovación social, ODS y  nuevas vertientes de la innovación que propenden por la transformación de las dinámicas socioeconómicas de los territorios en pro del bienestar de las comunidades que habitan en ellos. Los miércoles cada 15 días podrás aprender e interactuar con ponentes nacionales e internacionales en este nuevo capítulo. Adicionalmente, la estrategia será tomada como un curso, por tanto, los asistentes que participen en el 80% de los eventos podrán recibir un certificado de la Unidad de Innovación y las memorias de las temáticas abordadas en cada uno de los espacios.\n\n¡Este 10 de junio podrás participar de Circuito Innovación!\n\nEn este primer encuentro talleristas y ponentes nacionales e internacionales le darán la bienvenida a esta estrategia. A través del siguiente link Podrás inscribirte al evento central (Webinar) y al taller de tu preferencia.\n\n\nTalleres y charlas de 8:00 a.m. a 10:00 a.m. (Cupos limitados)\n\nEvento central: 10:30 a.m a 12:00 p.m.                                                                                      \n\nEn el documento Adjunto encontrarás una descripción de los talleres y ponentes que nos acompañarán en nuestro primer encuentro.', '5f77bd2712710-unnamed.png', 'https://www.funlam.edu.co/uploads/direccionextension/29_Ponentes_y_programaci%C3%B3n(1).pdf', '2020-10-03', 1),
(11, 'Webinar los desafíos del trabajo comunitario en momento', 'No te pierdas esta gran invitación.', '5f77bd9763134-webinara.png', '', '2020-10-03', 1),
(12, 'Taller internacional gratis con 4 invitados extranjeros', 'Regístrate Ahora', '5f77be84085a1-pauta_.jpg', 'https://acortar.link/14hl', '2020-10-03', 1),
(13, 'Convocatoria prácticas EPM', 'Proyecto Estudiantes de Práctica Semestre 2-2020.', '5f77beccd73d5-87182804_10159456174416258_6966798010537738240_n.jpg', 'https://www.funlam.edu.co/uploads/direccionextension/25_Proyectos_Estudiantes_de_pr%C3%A1ctica_Semestre_2_-2020.pdf', '2020-10-03', 1),
(14, 'Comunicado: eventos y servicios en periodo de contingen', 'Leer con atenciòn.', '5f77bef4ca944-image.png', '', '2020-10-03', 1),
(15, 'XIII Encuentro Nacional de Extensión Universitaria', ' ', '5f77bf2bc2e3f-Ecard_Extensi__n_universitaria.jpg', 'https://www.eia.edu.co/educacioncontinua/', '2020-10-03', 1),
(17, 'Luis Amigó coordina modelo de salud mental en Andes', 'Recientemente la Universidad realizó el acto de apertura oficial de la Granja Comunitaria y la certificación de 31 funcionarios de la Alcaldía del municipio de Andes, Antioquia, como parte del proyecto denominado \"IMPLEMENTACIÓN DE UN MODELO LOCAL DE SALUD MENTAL A TRAVÉS DE LA ATENCIÓN PRIMARIA PARA EL MUNICIPIO DE ANDES\".\n\nAl acto asistieron además de la comunidad general del Municipio, el Sr Alcalde Jhon Jairo Mejía Aramburo y Ana maría Zuleta Gómez Secretaria de Salud y Bienestar Social. Por parte de la Universidad Católica Luis Amigó estuvieron Camilo Gómez López, Director de Extensión y Servicios a la Comunidad y Sandra Milena Restrepo Escobar docente-investigadora y líder del proyecto Apprevenir.\n\nEl proyecto acordado con Andes consiste en:\n\n* Desarrollar un modelo de atención en salud mental a través de la atención primaria para el Municipio de Andes.\n\n* Formar y certificar a funcionarios de entidades relacionadas con la atención y prevención de adicciones del Municipio para el empoderamiento de la temática.\n\n* Caracterizar la población del Municipio de Andes en salud mental a través de una muestra representativa, que incluya varios sectores de la población (tamizaje).\n\n* Crear la ruta de articulación sectorial para el Municipio para la prevención y atención de adicciones.\n\n* Implementar una granja comunitaria en modalidad ambulatoria para personas con consumo de sustancias psicoactivas', 'location.png', '', '2020-10-03', 1),
(18, 'Cultura Amigó llega a otros municipios', 'El pasado 29 de mayo la Dirección de Extensión y Servicios a la Comunidad realizó una reunión con autoridades municipales de la Cuenca del Sinifaná (Fredonia y Venecia), en la que se socializó la propuesta \"Cultura Amigó: Prácticas transformadoras para un ejercicio social y comunitario Responsable\" la cual consiste en identificar necesidades, problemáticas y capacidades de los municipios, permitiendo la realización de intervenciones para el desarrollo y transformación de la sociedad.\n\nEn este espacio participaron el Alcalde del municipio de Fredonia, el Doctor Mauricio Alejandro Toro y la Secretaria de Educación del Municipio de Venecia, la Doctora Diana Lorena Vélez Taborda, quienes manifestaron su compromiso con el proyecto que iniciará con una fase piloto en el segundo semestre del 2019.\n\nA la sesión de trabajo asistió también el Director de Extensión y Servicios a la Comunidad, Camilo Andrés Gómez López y los Docentes da las Facultades de Ciencias Administrativas y Psicología Elías Vallejo y Hamilton Fernández.\n\nEsta prueba piloto, que iniciaría con estos dos municipios, se viene realizando una convocatoria dirigida a estudiantes para que hagan parte del voluntariado que permita realizar una análisis de los municipios, unas vistas diagnósticas y un trabajo de campo.\n\nCon este ejercicio no solo se cumple con la labor que debe desempeñar el Departamento de Prácticas de la Institución, sino que consolida el que hacer de la Institución desde la proyección social.\n\n', '5f77c0036863e-PresConst_38.jpg', '', '2020-10-03', 1),
(19, 'Copa Mundial de Emprendimiento', ' ', '5f77c038c7dfb-copa_mundial_de_emprendimiento.png', '', '2020-10-03', 1),
(20, 'Plan maestro de espacios físicos, un logro y un desafío', 'Conocedores del gran proyecto institucional de infraestructura, que en el mediano plazo nos beneficiará como comunidad, también debemos ser conscientes de que existirán limitaciones en términos de espacios físicos para la planeación de actividades y eventos en nuestra Institución.\n\nDado lo anterior y entendiendo que nuestra labor en la función sustantiva de Extensión no puede detenerse o minimizarse, compartimos algunas oportunidades que pueden ser útiles para realizar eventos, proyectos y otras actividades en esta materia durante los próximos periodos, las cuales deben ser consideradas y autorizadas por las respectivas autoridades institucionales de manera previa:\n\n1. Alquiler de espacios físicos: esta es una alternativa viable para la cual se deberán incluir los valores de estos espacios en los presupuestos de los mismos eventos, y seguir los procedimientos administrativos y jurídicos para este fin.\n\n2. Alianzas estratégicas: desarrollar convenios o acuerdos con entidades cercanas a los programas académicos y la Institución misma, con el fin de utilizar los espacios de estas organizaciones, otorgando algunas contraprestaciones no de tipo económico sino en especie como cupos, publicidad, entre otras.\n\n3. Eventos y proyectos en alianza: actividades con otras IES u organizaciones en las que cada entidad haga sus aportes, buscando que algunos de los aportes de los aliados sean en los espacios físicos, garantizando siempre el tema de evidencias de las actividades y el reporte de los respectivos indicadores para los programas y la Institución.\n\n4. Virtualidad: revisar desde los programas académicos de pregrado y posgrado, qué cursos existen diseñados desde la virtualidad que pueden ofrecerse en dicha modalidad. También se podrán generar otras propuestas para la virtualidad, teniendo en cuenta los costos de diseño y montaje de los mismos.\n\nEstas y otras propuestas serán recibidas siempre en beneficio de nuestra comunidad, nuestros programas y la Institución misma.', '5f77c0597f513-Collage_1.png', '', '2020-10-03', 1),
(21, 'Planeación y gestión para los docentes con horas destin', 'La Dirección de Extensión y Servicios a la Comunidad comenzará a implementar a partir del año 2019 un modelo de plan de trabajo e informes de gestión, los cuales serán realizados por los profesores que tienen horas asignadas para apoyar esta función sustantiva.\n\nLa estrategia permitirá proyectar de manera organizada los planes de cada docente, presentar resultados que sirvan en materia de renovaciones de registros y de acreditación en alta calidad, y permitirá organizar el proceso desde las perspectivas de la planeación y la visibilidad de los resultados.\n\nEste plan de trabajo será enviado a cada docente y deberá ser validado por cada director/coordinador de programa y la decanatura, previo al envío a la Dirección de Extensión.\n\nTanto planes como informes, deberán ser realizados semestralmente de acuerdo con las horas y actividades asociadas a la función sustantiva.\n\n\n\n“Con esta estrategia queremos una adecuada planeación, un seguimiento y un reporte de acciones acorde con los intereses institucionales”.\n\nCamilo Gómez López, Director de Extensión y Servicios a la Comunidad.', '5f77c0bc16909-collage_2.png', '', '2020-10-03', 1),
(22, 'Nuevo modelo para el reporte de información de registro', 'En articulación con la Coordinación de Registros Calificados, la Dirección de Extensión ha actualizado el esquema de presentación de los avances para la renovación de registros calificados y la solicitud de programas nuevos ante el MEN, con el fin de incorporar elementos a la luz de lo que la entidad nacional solicita y lo que se contempla en el Decreto 1280 de 2018 y en el Acuerdo 01 del CESU para la Acreditación en Alta Calidad de los programas.\n\nEn estos ajustes que se visualizan a través del SIGUE Web y que serán diligenciados por cada programa académico con la orientación de la Dirección de Extensión y Servicios a la Comunidad, se incorporan datos de educación permanente, contratos y proyectos, proyección social y servicios profesionales, incluyendo además resultados principales, logros, transformaciones e impacto en el medio.\n\nPor su parte, también se actualiza la tabla que permite la proyección y la planeación de la función sustantiva para la solicitud de nuevos programas, incluyendo las actividades estimadas y los impactos esperados producto de dichas acciones.', '5f77c0fa4eb72-collage3.png', '', '2020-10-03', 1),
(23, 'Nuevo logro', 'La Universidad y sus grupos de investigación en Farmacodependencia y otras Adicciones (Facultad de Psicología y Ciencias Sociales ) y Urbanitas (Facultad de Comunicación Social, Publicidad y Diseño), recibieron reconocimiento por su propuesta de Spin-Off con el proyecto Apprevenir.\n\nEste reconocimiento fue entregado por Colciencias, MinTIC y la Corporación Tecnnova, a finales del año 2018. ', '5f77c121d6311-Tic.jpg', '', '2020-10-03', 1),
(24, 'Electiva de Emprendimiento', ' ', '5f77c13b600f7-05_21_montar_empresa.png', '', '2020-10-03', 1),
(25, 'Funlam en Tecnnova', 'La Universidad Católica Luis Amigó participará por primera vez en Tecnnova 2017 este 10 y 11 de agosto en Plaza Mayor.\n\nEs un evento que tiene por objetivo conectar retos, oportunidades y soluciones de manera efectiva, articulando a los grupos de investigación de las universidades con el sector productivo. En esta versión, además de ofrecer un espacio para socializar las capacidades y la oferta de los grupos de investigación y universidades asistentes, se hará un especial énfasis en visibilizar resultados obtenidos en procesos investigativos\n \nEn esta oportunidad la Funlam quiere desarrollar una experiencia de relacionamiento entre los grupos de investigación de la Luis Amigó con otros grupos y centros de investigación, universidades y organizaciones. Asimismo, se ofrecerán los servicios de Extensión para el sector productivo y el Estado como consultorías, proyectos, capacitación, prácticas y graduados.\n \nCon la asistencia la Universidad quiere abrir el camino para futuras alianzas y posibles negociaciones que redunden en el desarrollo regional y nacional.\n \n\n\nQué buscamos:\n \n* Facilitar el relacionamiento de la Universidad con el medio.\n\n* Ofrecer posibilidades de servicios al sector productivo y al Estado, desde los procesos Institucionales de Extensión e Investigación.\n \nEl evento es gratuito y abierto para profesores e investigadores, empresarios y representantes de distintas organizaciones. ', '5f77c1700c1f7-Tecnnova.jpg', 'https://www.ruedadeinnovacion.com', '2020-10-03', 1),
(26, 'Llega Interacpedia', 'Una nueva manera de trabajar en clase dando respuesta a retos reales de las empresas y la sociedad. Buscamos profesores y estudiantes creativos, disruptivos y con alta capacidad de trabajo en equipo para seleccionar retos, trabajarlos en el semestre y obtener reconocimientos por parte de las empresas y el sector externo.\n\nA través de Interacpedia conectamos las clases de la Universidad al ecosistema de innovación, logrando que los proyectos de aula los estudiantes tengan un uso real en la sociedad y resuelvan retos de las empresas, organizaciones y entidades del Estado, con una experiencia colaborativa y disruptiva. Conoce más: https://www.interacpedia.com/ Para mayor información escribe: servicios_comunidad@funlam.edu.co', '5f77c1deab849-18_07__Profe_que_piensas_si...png', 'https://www.interacpedia.com/', '2020-10-03', 1),
(27, 'Convocatorias 2018', 'Como resultado de las mejoras que se deben implementar para garantizar un mayor impacto con los eventos académicos de educación permanente, la Dirección de Extensión y Servicios a la Comunidad implementará la realización de convocatorias semestrales para el diseño de propuestas de educación continua dirigida a las facultades, programas académicos, centros regionales, grupos de investigación y otras unidades.\n\nCon las convocatorias se proyecta que las propuestas de educación permanente respondan cada vez más a las necesidades del medio y permitan la consolidación de una programación anticipada de todos los eventos, así como la adecuada difusión y promoción de los mismos.\n\nPara conocer los términos y lineamientos de la convocatoria, lo invitamos a descargar el documento.', 'location.png', 'https://www.funlam.edu.co/uploads/direccionextension/4_Lineamientos_Convocatoria_2018.pdf', '2020-10-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portafolio`
--

CREATE TABLE `portafolio` (
  `id_portafolio` int(11) NOT NULL,
  `nombre_portafolio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_portafolio` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_subida` date NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practicas`
--

CREATE TABLE `practicas` (
  `id_practica` int(11) NOT NULL,
  `nombre_practica` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_practica` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_subida` date NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `practicas`
--

INSERT INTO `practicas` (`id_practica`, `nombre_practica`, `descripcion_practica`, `imagen`, `enlace_externo`, `fecha_subida`, `responsable`) VALUES
(9, 'Convocatoria externa Practicantes de Excelencia II', 'Medellín, 26 de marzo de 2020\n\nCordial saludo Coordinadores de prácticas,\n\n\nEn la Gobernación de Antioquia buscamos jóvenes que UNIDOS contribuyan a la transformación del Departamento, esta vez a través del programa de “Prácticas de Excelencia”, mediante el cual se busca hacer partícipes a los mejores estudiantes de carreras profesionales, tecnológicas y técnicas, aportando al cumplimiento de las metas propuestas en el Plan de Desarrollo y en la innovación de los diferentes procesos institucionales.\n\nCon el programa “Prácticas de Excelencia” la Dirección de Desarrollo Organizacional de la Secretaría de Gestión Humana y Desarrollo Organizacional, brinda la oportunidad a los estudiantes de las instituciones de educación públicas y privadas, para que realicen sus prácticas laborales mediante el apoyo a los programas de nuestro Plan de Desarrollo, contribuyendo de esta manera con la formación integral de los futuros profesionales.\n\nAntioquia UNIDOS invita a las instituciones de educación públicas y privadas, para que hagan parte de esta convocatoria. Buscamos estudiantes comprometidos, interesados por el sector público que aporten y generen valor agregado al Departamento de Antioquia, dispuestos a poner sus conocimientos al servicio de la comunidad, que se destaquen por su excelencia académica y con habilidad para proponer, liderar, crear e innovar.\n\nEn esta oportunidad contaremos con un total de 174 plazas de práctica, las cuales están ubicadas en los diferentes organismos de la Gobernación de Antioquia.\n\nLos requisitos que deben cumplir los estudiantes interesados en participar en la convocatoria son los siguientes:\n\nEstar cursando últimos semestres de la carrera profesional o técnica, o estar cursando el semestre de práctica.\n\nCertificar un promedio académico acumulado igual o superior a 3,8.\n\nEstar matriculado durante el periodo de práctica en la institución de educación.\n\nContar con disponibilidad de tiempo completo durante el segundo semestre de 2020.\n\nLa práctica laboral tendrá una duración 5 meses, correspondiente al segundo período académico comprendido entre el 16 de julio y el 15 de diciembre de 2020.\n\nLos practicantes tendrán una bonificación de 1,5 salarios mínimos legales mensuales vigentes (SMLMV) para el caso de los estudiantes del nivel profesional y tecnológico, y 1 salario mínimo legal mensual vigente (SMLMV) para los estudiantes del nivel técnico.\n\nCon el fin de brindar oportunidades a otros jóvenes para la realización de su práctica en la Gobernación de Antioquia, no podrán participar en esta convocatoria los estudiantes que ya han sido beneficiarios de este programa en semestres anteriores.\n\nPara participar en el proceso de selección los estudiantes deberán diligenciar el formulario de inscripción el cual estará activo entre el 26 de marzo y el 30 de abril de 2020, al cual podrán acceder a través del siguiente enlace:http://gplus2. antioquia.gov.co:9090/GPlus/ Practicante.public Es importante anotar que esta información también se encuentra disponible en la página web de la Gobernación de Antioquia www.antioquia.gov.co .\n\nLuego del proceso de inscripción, los coordinadores de prácticas de cada institución de educación deberán verificar y validar el cumplimiento de requisitos de los estudiantes que se postulen a dicha convocatoria, los días establecidos entre el 04 y 06 de mayo de 2020, a través del aplicativo G+, según las instrucciones que serán enviadas a cada institución.\n\nEs responsabilidad de los coordinadores de prácticas validar el cumplimiento de los requisitos de los candidatos que se postulen, teniendo en cuenta que los estudiantes que no sean validados por las instituciones no podrán participar en el proceso de selección.\n\nPara mayor información se puede comunicar a los teléfonos 3838884 – 3838885 o al correo electrónico practicasdeexcelen cia@antioquia.gov.co, con las servidoras públicas Maribel Barrientos Uribe o Marcela Verónica Estrada.', 'location.png', 'https://www.funlam.edu.co/uploads/direccionextension/24_Inventario_de_perfiles_II-2020.pdf', '2020-10-03', 1),
(10, 'Navega por el ABC del reglamento de prácticas', 'El ABC de las prácticas\n\nTomado de: Resolución Rectoral No. 51 del 28 de octubre de 2019', 'location.png', 'https://www.funlam.edu.co/uploads/documentosjuridicos/1704_El_ABC_de_la_practicas.pdf', '2020-10-03', 1),
(11, 'Conoce el reglamento de prácticas', 'Reglamento Institucional de Prácticas\n\nlas prácticas se conciben como el proceso que permite potenciar la formación integral de los estudiantes a partir de la puesta en práctica de los aprendizajes y competencias obtenidas en el desarrollo de las áreas de conocimiento.', 'location.png', 'https://www.funlam.edu.co/uploads/documentosjuridicos/1704_REGLAMENTO_INSTITUCIONAL_DE_PRACTICAS.pdf', '2020-10-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre_proyecto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion_proyecto` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_subida` date NOT NULL,
  `responsable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre_proyecto`, `descripcion_proyecto`, `imagen`, `enlace_externo`, `fecha_subida`, `responsable`) VALUES
(36, 'PROYECTO PRE-K ENGLISH', 'Capacitar a los maestros del nivel de educación preescolar de las Instituciones Educativas Oficiales, en el desarrollo de competencias comunicativas en inglés como lengua extranjera, en el nivel A2 del Marco Común Europeo de Referencia, necesarios para incorporar procesos formativos de los niños y niñas en este nivel.\n\nInstitución: Nutresa – Secretaría de Educación - Alcaldía de Medellín.\n\nVigencia: hasta diciembre 2015.', 'location.png', 'https://www.funlam.edu.co/uploads/facultadeducacion/333_gettingto_know_PreK.pdf', '2020-10-03', 1),
(37, 'TALLER LOS NIÑOS LLEGAN A LA U', 'Si el mundo quieres descubrir, al Taller de \"los niños llegan a la U\" debes de asistir\n\nEl Taller los niños llegan a la U. hace parte de la Universidad Católica Luis Amigó, desde en el 2013 dando respuesta a los interrogantes de la Facultad de Educación y humanidad, frente al tema relacionado a las necesidades de potenciar el pensamiento creativo de los niños y las niñas en la primera infancia, es un asunto que cobra importancia en la actualidad por las demandas que existen en el medio para fomentar el desarrollo infantil desde ámbitos alternativos, enfocados en la atención integral. \nA ésta necesidad se suman las universidades del mundo, aportando desde sus especificidades espacios de interacción cercanos a niños y niñas. Dicho espacio y el desarrollo de la experiencia, estará orientado desde comunidades de indagación con niños y niñas entre los 3 y 10 años de edad, con unos enfoques desde las operaciones lógicas, pensamiento científico y dilemas morales que posibilitan a los niños construyan unas habilidades que se desarrollaran para la vida entre las que se encuentran las siguientes: la capacidad para razonar de manera lógica, la comprensión de la dimensión ética, la capacidad para descubrir el significado de las experiencias de interacción entre el individuo y el mundo, el desarrollo de la creatividad, la capacidad de asombro, la capacidad para formular preguntas y hallar explicaciones que puedan ser comprensibles para los otros.\n\nCreando un espacio propicio para realizar preguntas, y generar posibles rutas para llegar a respuestas, cultiva en el niño el espíritu y las habilidades necesarias para desarrollar el pensamiento científico y para tener un acercamiento a la filosofía, no como teoría, sino como condición de apertura ante el mundo.', '5fa3e275c704b-huellas.png', '', '2020-10-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_us`
--

CREATE TABLE `tipo_us` (
  `id_tipo_us` int(11) NOT NULL,
  `nombre_tipo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_us`
--

INSERT INTO `tipo_us` (`id_tipo_us`, `nombre_tipo`) VALUES
(1, 'Root'),
(2, 'Administrador'),
(3, 'Usuario General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_carrera` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sobre_mi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `us_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contrasena`, `nombres`, `apellidos`, `nombre_carrera`, `email`, `sobre_mi`, `us_tipo`) VALUES
(1, 'root', 'root', 'Administrador', 'Sistema', 'Administrador', 'admin@admin.com', '123', 1),
(2, 'juan', 'juan', 'Juan David', 'Valencia Toro', 'Ingeniería Sistemas', 'juan.valenciaor@amigo.edu.co', 'Estudiante ingeniería de sistemas-\n', 2),
(5, 'carolina', 'carolina', 'carolina', 'carolina', 'ingeniería sistemas', 'carolina@carolina.com', '', 2),
(101, 'pedro', 'pedro', 'pedro', 'pedro', 'pedro', 'pedro', '', 3),
(135, 'juan.admin', 'juan', 'david', 'valencia', 'sistemas ', 'juan1@gmail.com', 'soy estudiante', 3),
(158, 'prueba23', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empren_innovacion`
--
ALTER TABLE `empren_innovacion`
  ADD PRIMARY KEY (`id_emprendimiento`),
  ADD KEY `creador_empre` (`responsable`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `creador_noti` (`responsable`);

--
-- Indices de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD PRIMARY KEY (`id_portafolio`),
  ADD KEY `creador_porta` (`responsable`);

--
-- Indices de la tabla `practicas`
--
ALTER TABLE `practicas`
  ADD PRIMARY KEY (`id_practica`),
  ADD KEY `creador_pract` (`responsable`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `creador_proyec` (`responsable`);

--
-- Indices de la tabla `tipo_us`
--
ALTER TABLE `tipo_us`
  ADD PRIMARY KEY (`id_tipo_us`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `us_tip` (`us_tipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empren_innovacion`
--
ALTER TABLE `empren_innovacion`
  MODIFY `id_emprendimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `portafolio`
--
ALTER TABLE `portafolio`
  MODIFY `id_portafolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `practicas`
--
ALTER TABLE `practicas`
  MODIFY `id_practica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `tipo_us`
--
ALTER TABLE `tipo_us`
  MODIFY `id_tipo_us` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empren_innovacion`
--
ALTER TABLE `empren_innovacion`
  ADD CONSTRAINT `creador_empre` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `creador_noti` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `portafolio`
--
ALTER TABLE `portafolio`
  ADD CONSTRAINT `creador_porta` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `practicas`
--
ALTER TABLE `practicas`
  ADD CONSTRAINT `creador_pract` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `creador_proyec` FOREIGN KEY (`responsable`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `us_tip` FOREIGN KEY (`us_tipo`) REFERENCES `tipo_us` (`id_tipo_us`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
