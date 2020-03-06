0#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: brands
#------------------------------------------------------------

CREATE TABLE brands(
        `id`          Int  Auto_increment  NOT NULL ,
        `name`        Varchar (150) NOT NULL ,
        `url`         Varchar (150) NOT NULL ,
        `description` Longtext NOT NULL
	,CONSTRAINT FK_brand PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        `id`   Int  Auto_increment  NOT NULL ,
        `name` Varchar (100) NOT NULL
	,CONSTRAINT PK_categories PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: products
#------------------------------------------------------------

CREATE TABLE products(
        `id`            Int  Auto_increment  NOT NULL ,
        `item`          Varchar (150) NOT NULL ,
        `picture`       Varchar (150) NOT NULL ,
        `new`           Varchar (150) NOT NULL ,
        `bestsellers`   Varchar (150) NOT NULL ,
        `brand_id`     Int NOT NULL ,
        `category_id` Int NOT NULL
	,CONSTRAINT PK_products PRIMARY KEY (`id`)

	,CONSTRAINT FK_products_brands FOREIGN KEY (`brand_id`) REFERENCES brands(`id`)
	,CONSTRAINT FK_products_categories FOREIGN KEY (`category_id`) REFERENCES categories(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: role
#------------------------------------------------------------

CREATE TABLE `role`(
        `id`      Int  Auto_increment  NOT NULL ,
        `statuts` Varchar (150) NOT NULL
	,CONSTRAINT PK_role PRIMARY KEY (`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE `users`(
        `id`        Int  Auto_increment  NOT NULL ,
        `lastname`  Varchar (50) NOT NULL ,
        `firstname` Varchar (50) NOT NULL ,
        register_at Datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `birthdate` Date NOT NULL ,
        `email`     Varchar (50) NOT NULL ,
        `phone`     Int NOT NULL ,
        `password`  Varchar (50) NOT NULL ,
        `id_role`   Int NOT NULL
        ,CONSTRAINT UK_user UNIQUE (email)
        ,CONSTRAINT UK_user UNIQUE (email)
	,CONSTRAINT PK_users PRIMARY KEY (`id`)

	,CONSTRAINT FK_users_role FOREIGN KEY (`id_role`) REFERENCES role(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: appointments
#------------------------------------------------------------

CREATE TABLE `appointments`(
        `id`      Int  Auto_increment  NOT NULL ,
        `dateHour` Datetime NOT NULL ,
        `user_id` Int NOT NULL
	,CONSTRAINT UK_appointments UNIQUE(dateHour)
	,CONSTRAINT PK_appointments PRIMARY KEY (`id`)

	,CONSTRAINT FK_appointments_users FOREIGN KEY (`user_id`) REFERENCES users(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: posts
#------------------------------------------------------------

CREATE TABLE `posts`(
        `id`       Int  Auto_increment  NOT NULL ,
        `title`    Varchar (150) NOT NULL ,
        `content`  Text NOT NULL ,
        `user_id` Int NOT NULL
	,CONSTRAINT PK_posts PRIMARY KEY (`id`)

	,CONSTRAINT FK_posts_users FOREIGN KEY (`user_id`) REFERENCES users(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: post_pictures
#------------------------------------------------------------

CREATE TABLE post_pictures(
        `id`       Int  Auto_increment  NOT NULL ,
        `url`      Varchar (100) NOT NULL ,
        `alt`      Varchar (50) NOT NULL ,
        `post_id` Int NOT NULL
	,CONSTRAINT PK_post_pictures PRIMARY KEY (`id`)

	,CONSTRAINT FK_post_pictures_posts FOREIGN KEY (`post_id`) REFERENCES posts(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: brand_pictures
#------------------------------------------------------------

CREATE TABLE brand_pictures(
        `id`        Int  Auto_increment  NOT NULL ,
        `url`       Varchar (100) NOT NULL ,
        `alt`       Varchar (50) NOT NULL ,
        `brand_id` Int NOT NULL
	,CONSTRAINT PK_brand_pictures PRIMARY KEY (`id`)

	,CONSTRAINT FK_brand_pictures_brands FOREIGN KEY (`brand_id`) REFERENCES `brands`(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: users_favoris
#------------------------------------------------------------

CREATE TABLE users_favoris(
        `product_id`       Int NOT NULL ,
        `user_id` Int NOT NULL
	,CONSTRAINT PK_users_favoris PRIMARY KEY (`product_id`,`user_id`)

	,CONSTRAINT FK_users_favoris_products FOREIGN KEY (`product_id`) REFERENCES products(`id`)
	,CONSTRAINT FK_users_favoris_users FOREIGN KEY (`user_id`) REFERENCES users(`id`)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: booking
#------------------------------------------------------------

CREATE TABLE booking(
        `product_id`         Int NOT NULL ,
        `user_id`   Int NOT NULL ,
        `start_date` Datetime NOT NULL ,
        `active`     Bool NOT NULL
	,CONSTRAINT PK_booking PRIMARY KEY (`product_id`,`user_id`)

	,CONSTRAINT FK_booking_products FOREIGN KEY (`product_id`) REFERENCES products(`id`)
	,CONSTRAINT FK_booking_users FOREIGN KEY (`user_id`) REFERENCES users(`id`)
)ENGINE=InnoDB;
