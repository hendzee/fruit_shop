/*
SQLyog Ultimate v10.42 
MySQL - 5.6.25 : Database - tokobaju
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tokobaju` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tokobaju`;

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id_customer` varchar(30) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `alamat_rumah` varchar(50) NOT NULL,
  `kode_pos` varchar(15) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id_customer`,`nama_depan`,`nama_belakang`,`provinsi`,`kota`,`alamat_rumah`,`kode_pos`,`no_telp`,`email`,`password`) values ('5a6de253','virginia','hendras','jawa timur','malang','jl.sengkaling indah banget no.10','654312','085655427339','hendras@hendzmail.com','hendras'),('b0db10501','nazril','irham','jawa barat','bandung','bandungan sutami dalam no 03','531657','085655427339','nazril@noah.com','noah'),('b0ff22310','blue','eyes','DKI JAKARTA','jakarta','jl.raya dan ramai no 901','085655','085655427339','titutitutitut@wkwk.com','hore'),('b10eh4017','blablaa','bliblibli','jawa timur','malang','jl.bandung','654321','0878930565','wkwkwk','hellow'),('c2ad8670','nazril','irham','jawa barat','bandung','bandungan sutami dalam no 03','531657','085655427339','nazril@noah.com','noah'),('e2fb41106','hello','panda','jawa tengah','purwokerto','jl.jalan yuk','2134','54321','hehe@yahut.com','hehehe'),('f9db6455','hendras','balelo','jawatimur','malang','jl.chappie','65412','0856744890','wkwkwk@yahoo.com','yangyang'),('g7dg8150','marmut','imut','jawa bawah','pedalaman','jl.bolongan dalam no 12','121212','085655427339','900@cilukbaa.cin','marmutpass'),('g7ea4928','artificial','inteligence','jawa timur','malang','jl.chappie','987654','08976548923','chappie@yahoo.com','chappiee'),('g8fb10584','hello','world','jawa timur','malang','jl. kenari indah no 17','5349276','087908976','helloworld@yahoo.com','helloworld');

/*Table structure for table `daftar_brand` */

DROP TABLE IF EXISTS `daftar_brand`;

CREATE TABLE `daftar_brand` (
  `id_brand` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `daftar_brand` */

insert  into `daftar_brand`(`id_brand`,`brand_name`) values (1,'samsung'),(2,'asus'),(3,'acer'),(4,'blackberry'),(5,'oppo'),(6,'nokia'),(7,'sony'),(8,'htc'),(9,'huawei'),(10,'lg'),(11,'microsoft');

/*Table structure for table `detail_item` */

DROP TABLE IF EXISTS `detail_item`;

CREATE TABLE `detail_item` (
  `id_detitem` varchar(15) NOT NULL,
  `price` int(30) NOT NULL,
  `name_item` varchar(50) NOT NULL,
  `id_brand` int(15) NOT NULL,
  `network_bands` varchar(100) NOT NULL,
  `dimension` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `os` varchar(30) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `chipset` varchar(100) NOT NULL,
  `int_memory` varchar(30) NOT NULL,
  `card_slot` varchar(100) NOT NULL,
  `baterry` varchar(100) NOT NULL,
  `stb_time` varchar(75) NOT NULL,
  `talk_time` varchar(75) NOT NULL,
  `pri_camera` varchar(100) NOT NULL,
  `sec_camera` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `ftr_camera` varchar(100) NOT NULL,
  `display_type` varchar(100) NOT NULL,
  `size_pixel` varchar(100) NOT NULL,
  `multitouch` varchar(30) NOT NULL,
  `protection` varchar(100) NOT NULL,
  `gprs` varchar(30) NOT NULL,
  `edge` varchar(30) NOT NULL,
  `con_speed` varchar(100) NOT NULL,
  `wlan` varchar(100) NOT NULL,
  `bluetooth` varchar(100) NOT NULL,
  `hfc` varchar(100) NOT NULL,
  `usb` varchar(100) NOT NULL,
  `loudspeaker` varchar(30) NOT NULL,
  `jack` varchar(30) NOT NULL,
  `pic1` varchar(30) NOT NULL,
  `pic2` varchar(30) NOT NULL,
  `pic3` varchar(30) NOT NULL,
  `pic4` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `stock` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_item` */

insert  into `detail_item`(`id_detitem`,`price`,`name_item`,`id_brand`,`network_bands`,`dimension`,`weight`,`os`,`cpu`,`chipset`,`int_memory`,`card_slot`,`baterry`,`stb_time`,`talk_time`,`pri_camera`,`sec_camera`,`video`,`ftr_camera`,`display_type`,`size_pixel`,`multitouch`,`protection`,`gprs`,`edge`,`con_speed`,`wlan`,`bluetooth`,`hfc`,`usb`,`loudspeaker`,`jack`,`pic1`,`pic2`,`pic3`,`pic4`,`description`,`stock`) values ('h001',2500000,'Samsung Galaxy Grand Prime',1,'2G','144.8  x  72.1  x  8.6 mm','156 g (5.50 oz)','Android OS, v4.4.4 (KitKat)','Quad-core 1.2 GHz Cortex-A53 ','Qualcomm MSM8916 Snapdragon 410','8 GB, 1 GB RAM','microSD, up to 64 GB','Li-Ion 2600 mAh battery','-','Up to 17 h (3G)','8 MP, 3264 x 2448 pixels, autofocus, LED flash ','5 MP','1080p@30fps','Geo-tagging, touch focus','TFT capacitive touchscreen, 16M colors ','5.0 inches (~66.0% screen-to-body ratio) ','yes','-','yes','yes','HSPA, LTE','Wi-Fi 802.11 b/g/n, Wi-Fi Direct, hotspot','v4.0, A2DP','Yes (SM-G530F model)','microUSB v2.0','yes','yes','images/prime1.jpg','images/prime2.jpg','images/prime3.jpg','images/prime4.jpg','-','ada'),('h002',750000,'Samsung Galaxy S3 Mini',1,'2G & 3G','121.6  x  63  x  9.9 mm','111.5 g (3.92 oz)','Android OS, v4.1 (Jelly Bean)','1 GHz dual-core Cortex-A9 ','NovaThor U8420','8/16 GB, 1 GB RAM','microSD, up to 32 GB','Li-Ion 1500 mAh battery','Up to 450 h (2G) / Up to 430 h (3G)','Up to 14 h 10 min (2G) / Up to 7 h 10 min (3G)','5 MP, 2592 x 1944 pixels, autofocus, LED flash ','VGA','720p@30fps','Geo-tagging, touch focus, face and smile detection, panorama','Super AMOLED capacitive touchscreen, 16M colors','480 x 800 pixels, 4.0 inches (~233 ppi pixel density) ','yes','-','yes','yes','HSDPA 14.4 Mbps, HSUPA 5.76 Mbps','Wi-Fi 802.11 a/b/g/n, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot','v4.0 with A2DP, LE, EDR','Yes (Market dependent)','Yes, microUSB v2.0','Voice 66dB / Noise 63dB','yes','images/s3mini1.jpg','images/s3mini2.jpg','images/s3mini3.jpg','images/s3mini1.jpg','-','ada'),('h003',7500000,'Samsung Galaxy A7 Duos',1,'2G','151  x  76.2  x  6.3 mm','141 g (4.97 oz)','Android OS, v4.1 (Jelly Bean)','Quad-core 1.5 GHz Cortex-A53 & quad-core 1.0 GHz Cortex-A53 - LTE/3G Dual SIM modelQuad-core 1.8 Cor','Qualcomm MSM8939 Snapdragon 615 - LTE/3G Dual SIM modelExynos 5 Octa 5430 - LTE model','16 GB, 2 GB RAM ','microSD, up to 64 GB','Non-removable Li-Ion 2600 mAh battery','-','-','13 MP, 4128 x 3096 pixels, autofocus, LED flash','5 MP','1080p@30fps','Geo-tagging, touch focus, face detection, panorama, HDR','Super AMOLED capacitive touchscreen, 16M colors','5.5 inches (~72.5% screen-to-body ratio) ','yes','','yes','yes','HSPA 42.2/5.76 Mbps, LTE Cat4 150/50 Mbps','Wi-Fi 802.11 a/b/g/n, dual-band, hotspot','v4.0, A2DP, EDR, LE','Yes (LTE model only)','microUSB v2.0','yes','yes','images/ga7_1.jpg','images/ga7_1.jpg','images/ga7_2.jpg','images/ga7_2.jpg','-','ada'),('h004',5500000,'LG L Prime',10,'2G & 3G','138.2  x  70.6  x  10.7 mm ','- ','Android OS, v4.4.2 (KitKat)','Quad-core 1.3 GHz ','-','8 GB, 1 GB RAM ','microSD, up to 32 GB','Li-Ion 2460 mAh battery','-','-','8 MP, 3264 x 2448 pixels, LED flash','1.3 MP','720p','Geo-tagging','IPS LCD capacitive touchscreen, 16M colors ','5.0 inches (~70.6% screen-to-body ratio)','yes','-','yes','yes','HSPA','yes','v4.0, A2DP','-','microUSB v2.0','yes','yes','images/lglprime1.jpg','images/lglprime1.jpg','images/lglprime2.jpg','images/lglprime2.jpg','-','ada'),('h005',850000,'Blackberry Curve 9370',4,'2G & 3G','109  x  60  x  11 mm ','-','BlackBerry OS 7.0','800 MHz ','-','1 GB storage, 512 MB RAM ','microSD, up to 32 GB','Li-Ion 1000 mAh battery','Up to 348 h','Up to 5 h 30 min','5 MP, 2592 x 1944 pixels, LED flash ','No','VGA','Geo-tagging, face detection, image stabilization','TFT ','480 x 360 pixels, 2.44 inches (~246 ppi pixel density)','-','-','-','yes','EV-DO Rev. A, up to 3.1 Mbps','','','','','','','images/curve9370_1.jpg','images/curve9370_1.jpg','images/curve9370_2.jpg','images/curve9370_2.jpg','-','ada');

/*Table structure for table `detail_transaksi` */

DROP TABLE IF EXISTS `detail_transaksi`;

CREATE TABLE `detail_transaksi` (
  `id_dettransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(30) NOT NULL,
  `id_gal` int(30) NOT NULL,
  `jumlah_item` int(30) NOT NULL,
  `total_subharga` int(30) NOT NULL,
  PRIMARY KEY (`id_dettransaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_transaksi` */

/*Table structure for table `informasi_pembayaran` */

DROP TABLE IF EXISTS `informasi_pembayaran`;

CREATE TABLE `informasi_pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `invoice` varchar(30) NOT NULL,
  `id_customer` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `bank_pengirim` varchar(30) NOT NULL,
  `bank_tujuan` varchar(30) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `keterangan` varchar(150) NOT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `informasi_pembayaran` */

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id_gal` int(11) NOT NULL AUTO_INCREMENT,
  `id_detitem` varchar(15) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(15) NOT NULL,
  `foto_item1` varchar(30) NOT NULL,
  `stok` varchar(15) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_gal`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `item` */

insert  into `item`(`id_gal`,`id_detitem`,`nama_item`,`jenis`,`deskripsi`,`harga`,`foto_item1`,`stok`,`status`) values (2,'','baju1','baju','Baju ini terbuat dari besi tua yang sudah lapuk yang ditemukan di desa konoha. Warnanya biru cerah secerah mentari pagi.',540000,'images/pi.jpg','tersedia',0),(3,'','baju2','baju','Baju ini terbuat dari besi tua yang sudah lapuk yang ditemukan di desa konoha. Warnanya biru cerah secerah mentari pagi.',125000,'images/pi1.jpg','tersedia',0),(5,'','baju3','baju','Baju ini terbuat dari besi tua yang sudah lapuk yang ditemukan di desa konoha. Warnanya biru cerah secerah mentari pagi.',120000,'images/pi2.jpg','pre-order',0),(6,'','baju4','baju','Baju ini terbuat dari kayu, tidak bisa dimakan maupun diminum. Baju berwarna merah muda keabu-abuan.',250000,'images/pi3.jpg','pre-order',0),(7,'','baju5','baju','Baju ini terbuat dari kayu, tidak bisa dimakan maupun diminum. Baju berwarna merah muda keabu-abuan.',80000,'images/pi4.jpg','tersedia',0),(8,'','Baju6','baju','Baju sip, bagus dan murah tidak mudah rusak dan anti maling. Warna hitam belakangnya putih serta bolong di tengah.',75000,'images/pi5.jpg','tersedia',0),(9,'','Baju7','baju','Baju sip, bagus dan murah tidak mudah rusak dan anti maling. Warna hitam belakangnya putih serta bolong di tengah.',50000,'images/pi2.jpg','pre-order',0),(10,'','Baju8','baju','Baju sip, bagus dan murah tidak mudah rusak dan anti maling. Warna hitam belakangnya putih serta bolong di tengah.',150000,'images/pi.jpg','tersedia',0),(11,'','NOKIA EKSPERIA','NOKIA','dimensi:50km x 50km\r\nkamera dpn: 50mpx\r\nkamera blk: 70mpx\r\nwifi: ada\r\nbluetooth:ada\r\nwarna: hitam, putih',3500000,'images/pi.jpg','tersedia',0),(12,'','GALAXY NOTE III','SAMSUNG','dimensi:50km x 50km\r\nkamera dpn: 50mpx\r\nkamera blk: 70mpx\r\nwifi: ada\r\nbluetooth:ada\r\nwarna: hitam, putih',4700000,'images/pi2.jpg','ada',0),(13,'','OPPO YAHUT','OPPO','dimensi:50km x 50km\r\nkamera dpn: 50mpx\r\nkamera blk: 70mpx\r\nwifi: ada\r\nbluetooth:ada\r\nwarna: hitam, putih',870000,'images/pi5.jpg','pesan',1);

/*Table structure for table `mailbox` */

DROP TABLE IF EXISTS `mailbox`;

CREATE TABLE `mailbox` (
  `id_mailbox` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_masuk` datetime DEFAULT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `email_user` varchar(30) DEFAULT NULL,
  `pesan` text,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_mailbox`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `mailbox` */

insert  into `mailbox`(`id_mailbox`,`tanggal_masuk`,`nama_user`,`email_user`,`pesan`,`status`) values (1,'2015-10-19 04:10:53','hendras','hendras@yahoo.com','bang saya mau beli hape gimane caranye ? thankyu',NULL);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id_slide` int(11) NOT NULL AUTO_INCREMENT,
  `nama_slide` varchar(50) NOT NULL,
  `foto_slide` varchar(50) NOT NULL,
  `deskripsi_slide` text NOT NULL,
  PRIMARY KEY (`id_slide`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

insert  into `slider`(`id_slide`,`nama_slide`,`foto_slide`,`deskripsi_slide`) values (2,'chelsea','images/sh.png','Jersey terbaru Chelsea, berbahan dasar kain kafan 100%, sejuk dan mudah digunakan.'),(3,'manchester united','images/sh1.png','Jersey terbaru Manchester United, terbuat dari tepung terigu dan sedikit saus sambal. Hangat tidak pedih di mata.'),(4,'barcelona','images/sh2.png','Jersey Terbaru dari Bacelona terbuat dari jerami ASLI.');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(30) NOT NULL,
  `id_customer` varchar(30) NOT NULL,
  `total_item` int(30) NOT NULL,
  `total_finharga` int(30) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  `keterangan` int(30) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaksi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
