CREATE TABLE `adminAccounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `fullName` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `permissionTitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

CREATE TABLE `projectPosts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `whatText` varchar(5000) COLLATE utf8_bin NOT NULL,
  `whyText` varchar(5000) COLLATE utf8_bin NOT NULL,
  `howText` varchar(5000) COLLATE utf8_bin NOT NULL,
  `projectCoverImgSrc` varchar(255) COLLATE utf8_bin NOT NULL,
  `demoLink` varchar(255) COLLATE utf8_bin,
  `videoTitle1` varchar(255) COLLATE utf8_bin,
  `videoTitle2` varchar(255) COLLATE utf8_bin,
  `videoTitle3` varchar(255) COLLATE utf8_bin,
  `videoCoverImg1` varchar(255) COLLATE utf8_bin,
  `videoCoverImg2` varchar(255) COLLATE utf8_bin,
  `videoCoverImg3` varchar(255) COLLATE utf8_bin,
  `videoLink1` varchar(255) COLLATE utf8_bin,
  `videoLink2` varchar(255) COLLATE utf8_bin,
  `videoLink3` varchar(255) COLLATE utf8_bin,
  `ongoingProject` varchar(20) NOT NULL,
  `createdBy` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

CREATE TABLE `emailList` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `hash` varchar(255) COLLATE utf8_bin NOT NULL, /* USED TO VOTE/ DEACTIVATE EMAILINGLIST. */
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

CREATE TABLE `casePosts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caseTitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `caseText` varchar(10000) COLLATE utf8_bin NOT NULL,
  `imgSrc` varchar(255) COLLATE utf8_bin NOT NULL,
  `demoLink` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `figureSrc` varchar(255) COLLATE utf8_bin NOT NULL,
  `figureText` varchar(255) COLLATE utf8_bin NOT NULL,
  `breadText` varchar(5000) COLLATE utf8_bin NOT NULL,
  `vidSrc` varchar(255) COLLATE utf8_bin NOT NULL,
  `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;
