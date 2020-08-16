-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 16, 2020 lúc 04:03 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_angular`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_comment`
--

CREATE TABLE `customer_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_comment`
--

INSERT INTO `customer_comment` (`id`, `name`, `image`, `company`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Nhật Quang', 'https://vnptproject.blob.core.windows.net/imagecontainer/sinh-vien-nam-3-thuc-tap-nganh-cntt-2016-04-164x144.jpg', 'Chủ tịch C.ty CP Phần mềm Hải Hòa Phó chủ tịch Vinasa', 'Dịch vụ Phái cử nguồn nhân lực công nghệ thông tin của DCV là một dịch mới, dịch vụ sẽ hỗ trợ các doanh nghiệp linh hoạt trong vấn đề sử dụng nhân sự, hỗ trợ cho ngành CNTT ngày càng phát triển.', '2031-07-20 02:56:50', '2031-07-20 02:56:50'),
(2, 'Nguyễn Quang Huy', 'https://vnptproject.blob.core.windows.net/imagecontainer/14993473_10154601804892667_7612419798747264024_n-164x144.jpg', 'Chủ tịch C.ty CP Giải pháp và Phần mềm Netbase', 'Tôi đã từng sử dụng dịch vụ Phái cử của DCV. C.Ty đã đáp ứng nhân lực kịp thời cho chúng tôi trong thời gian ngắn với chất lượng nhân sự tốt, đáp ứng yêu cầu công việc đề ra.', '2031-07-20 02:56:50', '2031-07-20 02:56:50'),
(3, 'Phan Văn Tiến', 'https://vnptproject.blob.core.windows.net/imagecontainer/13558600_1215477911797947_5986157598931584985_o-164x144.jpg', 'Phó Tổng Giám Đốc Công ty Cổ phần Smartjob', 'Các dự án phần mềm của DCV đã áp dụng quy trình sản xuất linh hoạt, đảm bảo yêu cầu chất lượng và tiến độ của Smartjob đề ra.', '2031-07-20 02:56:50', '2031-07-20 02:56:50'),
(4, 'Nguyễn Nhật Quang', 'https://vnptproject.blob.core.windows.net/imagecontainer/sinh-vien-nam-3-thuc-tap-nganh-cntt-2016-04-164x144.jpg', 'Chủ tịch C.ty CP Phần mềm Hải Hòa Phó chủ tịch Vinasa', 'Dịch vụ Phái cử nguồn nhân lực công nghệ thông tin của DCV là một dịch mới, dịch vụ sẽ hỗ trợ các doanh nghiệp linh hoạt trong vấn đề sử dụng nhân sự, hỗ trợ cho ngành CNTT ngày càng phát triển.', '2031-07-20 02:57:30', '2031-07-20 02:57:30'),
(5, 'Nguyễn Quang Huy', 'https://vnptproject.blob.core.windows.net/imagecontainer/14993473_10154601804892667_7612419798747264024_n-164x144.jpg', 'Chủ tịch C.ty CP Giải pháp và Phần mềm Netbase', 'Tôi đã từng sử dụng dịch vụ Phái cử của DCV. C.Ty đã đáp ứng nhân lực kịp thời cho chúng tôi trong thời gian ngắn với chất lượng nhân sự tốt, đáp ứng yêu cầu công việc đề ra.', '2031-07-20 02:57:30', '2031-07-20 02:57:30'),
(6, 'Phan Văn Tiến', 'https://vnptproject.blob.core.windows.net/imagecontainer/13558600_1215477911797947_5986157598931584985_o-164x144.jpg', 'Phó Tổng Giám Đốc Công ty Cổ phần Smartjob', 'Các dự án phần mềm của DCV đã áp dụng quy trình sản xuất linh hoạt, đảm bảo yêu cầu chất lượng và tiến độ của Smartjob đề ra.', '2031-07-20 02:57:30', '2031-07-20 02:57:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_highlight` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `name`, `short_description`, `full_description`, `cover_image`, `is_highlight`, `created_at`, `updated_at`) VALUES
(1, 'NGÀY ĐẦU NĂM 2020 – HÀNH HƯƠNG ĐẾN TAM CHÚC', 'Chùa Tam Chúc cổ được xây dựng từ thời nhà Đinh, gắn với truyền thuyết “Tiền Lục nhạc – hậu Thất Tinh”. Dân gian kể lại có 7 ngọn núi gần làng Tam chúc,xuất hiện&nbsp;một đốm sáng lớn tựa như 7 ngôi sao, sáng suốt đêm ngày. Dân làng gọi đó là núi “Thất Tinh”. Ngôi […]', 'full', 'https://vnptproject.blob.core.windows.net/imagecontainer/Thiết-kế-không-tên-348x209.png', 1, '2003-08-20 01:45:28', '2003-08-20 01:45:28'),
(2, 'PHẦN MỀM A HÓA ĐƠN” CHÍNH THỨC THAM GIA CUỘC ĐUA CHUYỂN ĐỔI SỐ', 'Ngày 10/02/2020, Công ty Cổ phần truyền số liệu Việt Nam chính thức ra mắt giải pháp hóa đơn điện tử – “Phần mềm A Hóa Đơn” “CMCN 4.0 là xu thế tất yếu của toàn cầu, là đòn bẩy tăng mạnh năng suất và chất lượng cho mọi ngành nghề phát triển Để bắt […]', 'full', 'https://vnptproject.blob.core.windows.net/imagecontainer/33C88E21-F6D6-4718-B3FA-05A6DCE6E248-348x209.jpg', 1, '2003-08-20 01:45:28', '2003-08-20 01:45:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_22_014240_create_services_table', 1),
(5, '2020_07_22_014459_create_products_table', 1),
(6, '2020_07_22_084634_create_award_table', 1),
(7, '2020_07_22_084728_create_projects_table', 1),
(8, '2020_07_22_085100_create_news_table', 1),
(9, '2020_07_22_085432_create_events_table', 1),
(10, '2020_07_22_090709_create_customer_comment_table', 1),
(11, '2020_07_22_094720_create_customer_faq_table', 1),
(12, '2020_07_22_095125_create_servicerequest_table', 1),
(13, '2020_07_22_100254_create_sub_service_table', 1),
(14, '2020_07_22_102116_create_recruitment_table', 1),
(15, '2020_07_22_104532_create_other_posts_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_highlight` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `cover_image`, `short_description`, `full_description`, `is_highlight`, `created_at`, `updated_at`) VALUES
(1, 'BẢN TIN CU ĐƠ SỐ 35', 'https://vnptproject.blob.core.windows.net/imagecontainer/newproject_1_original-348x209.png', '', 'full', 1, '2003-08-20 01:45:28', '2003-08-20 01:45:28'),
(2, 'BẢN TIN CU ĐƠ SỐ 36', 'https://vnptproject.blob.core.windows.net/imagecontainer/cu36_19_original-2-348x209.png', '', 'full', 1, '2003-08-20 01:45:28', '2003-08-20 01:45:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `other_posts`
--

CREATE TABLE `other_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apple_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_order` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `logo`, `short_description`, `full_description`, `apple_link`, `number_order`, `created_at`, `updated_at`, `google_link`) VALUES
(1, 'twitter 1', 'https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/twitter/id333903271', 0, '2020-08-12 03:39:30', '2020-08-13 07:41:53', 'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi'),
(2, 'whatsapp 1', 'https://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/whatsapp-messenger/id310633997', 0, '2020-08-12 03:39:30', '2020-08-14 01:32:27', 'https://play.google.com/store/apps/details?id=com.whatsapp&hl=vi'),
(3, 'twitter 2', 'https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/twitter/id333903271', 0, '2020-08-12 03:39:30', '2020-08-13 07:43:16', 'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi'),
(4, 'whatsapp 2', 'https://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/whatsapp-messenger/id310633997', 0, '2020-08-12 03:39:30', '2020-08-14 01:32:46', 'https://play.google.com/store/apps/details?id=com.whatsapp&hl=vi'),
(5, 'twitter 3', 'https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/twitter/id333903271', 0, '2020-08-12 03:39:30', '2020-08-13 07:43:59', 'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi'),
(6, 'whatsapp 3', 'https://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/whatsapp-messenger/id310633997', 0, '2020-08-12 03:39:30', '2020-08-14 01:33:06', 'https://play.google.com/store/apps/details?id=com.whatsapp&hl=vi'),
(7, 'twitter 4', 'https://vnptproject.blob.core.windows.net/imagecontainer/Twitter-bird-white-blue2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/twitter/id333903271', 0, '2020-08-12 03:39:30', '2020-08-13 07:44:58', 'https://play.google.com/store/apps/details?id=com.twitter.android&hl=vi'),
(8, 'whatsapp 4', 'https://vnptproject.blob.core.windows.net/imagecontainer/2018_social_media_popular_app_logo-whatsapp-512.webp', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' ', 'https://apps.apple.com/us/app/whatsapp-messenger/id310633997', 0, '2020-08-12 03:39:30', '2020-08-14 01:33:25', 'https://play.google.com/store/apps/details?id=com.whatsapp&hl=vi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `reference`, `created_at`, `updated_at`) VALUES
(1, 'Phái cử 15 nguồn lực PHP cho một công ty phần mềm của Việt Nam', ' ', 'trung-tam-phan-mem-vien-thong-viettel-tap-doan-vien-thong-quan-doi', '2030-07-20 02:26:06', '2030-07-20 02:26:06'),
(2, 'Phái cử 10 nguồn lực kiểm thử cho một công ty phần mềm của Việt Nam', ' ', 'trung-tam-giai-phap-va-thuong-mai-dien-tu-tong-cong-ty-vien-thong-viette', '2030-07-20 02:26:06', '2030-07-20 02:26:06'),
(3, 'Phái cử 25 nguồn lực .NET cho một công ty phần mềm của Việt Nam', ' ', 'cong-ty-tnhh-fsoft-da-nang', '2030-07-20 02:26:06', '2030-07-20 02:26:06'),
(4, 'Dự án tư vấn bán hàng cho một công ty phần mềm lớn của Việt Nam', ' ', 'cong-ty-tnhh-usol-viet-nam', '2030-07-20 02:26:06', '2030-07-20 02:26:06'),
(5, 'Phái cử 20 nguồn lực JAVA cho một công ty phần mềm của Việt Nam', ' ', 'cong-ty-tnhh-thuong-mai-va-xuat-nhat-khau-viettel-tap-doan-vien-thong-quan-doi', '2030-07-20 02:26:06', '2030-07-20 02:26:06'),
(6, 'Phái cử 15 nguồn lực PHP cho một công ty phần mềm của Việt Nam', ' ', 'trung-tam-phan-mem-vien-thong-viettel-tap-doan-vien-thong-quan-doi', '2030-07-20 02:27:23', '2030-07-20 02:27:23'),
(7, 'Phái cử 10 nguồn lực kiểm thử cho một công ty phần mềm của Việt Nam', ' ', 'trung-tam-giai-phap-va-thuong-mai-dien-tu-tong-cong-ty-vien-thong-viette', '2030-07-20 02:27:23', '2030-07-20 02:27:23'),
(8, 'Phái cử 25 nguồn lực .NET cho một công ty phần mềm của Việt Nam', ' ', 'cong-ty-tnhh-fsoft-da-nang', '2030-07-20 02:27:23', '2030-07-20 02:27:23'),
(9, 'Dự án tư vấn bán hàng cho một công ty phần mềm lớn của Việt Nam', ' ', 'cong-ty-tnhh-usol-viet-nam', '2030-07-20 02:27:23', '2030-07-20 02:27:23'),
(10, 'Phái cử 20 nguồn lực JAVA cho một công ty phần mềm của Việt Nam', ' ', 'cong-ty-tnhh-thuong-mai-va-xuat-nhat-khau-viettel-tap-doan-vien-thong-quan-doi', '2030-07-20 02:27:23', '2030-07-20 02:27:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruitment`
--

CREATE TABLE `recruitment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double NOT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_on` date NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHighlight` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `service_name`, `alt_name`, `logo`, `image_link`, `short_description`, `full_description`, `isHighlight`, `created_at`, `updated_at`, `type`) VALUES
(2, 'Phái cử nhân lực CNTT', 'phai-cu-nhan-luc-cntt', 'https://vnptproject.blob.core.windows.net/imagecontainer/bpo-icon.png', 'https://vnptproject.blob.core.windows.net/imagecontainer/quytrinhBPO-01-1-720x478.png', 'Để đáp ứng nhu cầu về nhân sự CNTT, Dịch vụ phái cử nguồn nhân lực CNTT đã được ra đời. Hiện nay, trong thị trường phái cử nguồn nhân lực CNTT, Công Cổ phần Truyền số liệu Việt Nam (DCV) là một công ty tiêu biểu, chuyên cung cấp nguồn nhân lực CNTT giúp doanh nghiệp tập trung tốt hơn cho các lĩnh vực kinh doanh cốt lõi.', '', 1, '2028-07-20 08:29:02', '2028-07-20 08:29:02', 0),
(3, 'Gia Công Phần Mềm', 'gia-cong-phan-mem', 'https://vnptproject.blob.core.windows.net/imagecontainer/giacong.png', 'https://vnptproject.blob.core.windows.net/imagecontainer/HR-Outsourcing-2-720x478.jpg', 'Gia công phần mềm là một xu hướng CNTT đã phát triển, trưởng thành khẳng định tiềm năng và vị thế của nó với các doanh nghiệp trên toàn thế giới. Gia công phần mềm không chỉ còn là lựa chọn đơn thuần cho doanh nghiệp mà được coi là một quyết định thông minh cho doanh nghiệp khi muốn cắt giảm chi phí và tăng lợi nhuận trên đầu tư.', '', 1, '2028-07-20 08:38:46', '2028-07-20 08:38:46', 1),
(4, 'Dịch Vụ IT Support', 'it-support', 'https://vnptproject.blob.core.windows.net/imagecontainer/digital-support.png', 'https://vnptproject.blob.core.windows.net/imagecontainer/IT-Support-Sydney-3.png', 'Với đội ngũ nhân viên hỗ trợ chuyên nghiệp, giàu kinh nghiệm trong việc quản lý hệ thống mạng, máy chủ web, máy chủ mail, tổng đài, … Dịch vụ IT của DCV sẽ giúp doanh nghiệp của bạn tiết kiệm chi phí rất nhiều lần so với tự duy trì 1 đội ngũ nhân sự đủ trình độ cao để vận hành bộ máy của bạn một cách hiệu quả nhất.', '', 1, '2028-07-20 08:38:46', '2028-07-20 08:38:46', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_request`
--

CREATE TABLE `service_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isConfirmed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_services`
--

CREATE TABLE `sub_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isHighlight` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alt_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sub_services`
--

INSERT INTO `sub_services` (`id`, `service_id`, `service_name`, `logo`, `image_link`, `short_description`, `full_description`, `isHighlight`, `created_at`, `updated_at`, `alt_name`, `type`) VALUES
(1, 2, 'Phái cử nhân lực CNTT', 'https://vnptproject.blob.core.windows.net/imagecontainer/quytrinhBPO-01-1-720x478.png', 'https://vnptproject.blob.core.windows.net/imagecontainer/quytrinhBPO-01-1-720x478.png', 'Để đáp ứng nhu cầu về nhân sự CNTT, Dịch vụ phái cử nguồn nhân lực CNTT đã được ra đời. Hiện nay, trong thị trường phái cử nguồn nhân lực CNTT, Công Cổ phần Truyền số liệu Việt Nam (DCV) là một công ty tiêu biểu, chuyên cung cấp nguồn nhân lực CNTT giúp doanh nghiệp tập trung tốt hơn cho các lĩnh vực kinh doanh cốt lõi.', '<p>Tăng năng lực cạnh tranh và tối ưu hóa nguồn lực là bài toán chung của rất nhiều doanh nghiệp. Trong khi đó, việc duy trì các hoạt động không phải là dịch vụ hay sản phẩm chủ chốt khiến doanh nghiệp phải tốn một khoản đầu tư không hề nhỏ cả về nhân lực và vật lực. Trong bối cảnh đó, việc thuê ngoài một đối tác cung cấp các dịch vụ, đặc biệt là các dịch vụ về công nghệ thông tin (CNTT) được xem là một giải pháp hữu hiệu giúp doanh nghiệp tập trung tốt hơn cho các lĩnh vực kinh doanh cốt lõi. Để đáp ứng nhu cầu về nhân sự CNTT, Dịch vụ phái cử nguồn nhân lực CNTT đã ra đời.</p>\r\n<p>Hiện nay, trong thị trường phái cử nguồn nhân lực CNTT, Công Cổ phần Truyền số liệu Việt Nam (DCV) là một công ty tiêu biểu cung cấp nhân lực CNTT.</p>\r\n<p><span style=\"color: #008080;\"><strong>NHỮNG LỢI THẾ CHỈ CÓ RIÊNG Ở DCV&nbsp;</strong></span></p>\r\n<div class=\"iframe-1\"><script id=\"tui-sdcn\">\r\n(function(t){t.sdcn={\r\n\"file\":\"http://dcv.vn/wp-content/themes/dcv-theme/tweenui/banner.html\",\r\n\"width\":\"750\",\r\n\"height\":\"460\"\r\n}}(window.tweenui=window.tweenui||{}));</script><br>\r\n<script src=\"./PHÁI CỬ NHÂN LỰC CNTT - Công ty cổ phần Truyền số liệu Việt Nam_files/tui.js.tải xuống\" async=\"\"></script></div>\r\n<div class=\"img-1\"><img class=\"alignnone size-full wp-image-373\" src=\"./PHÁI CỬ NHÂN LỰC CNTT - Công ty cổ phần Truyền số liệu Việt Nam_files/12.png\" alt=\"12\" width=\"8026\" height=\"4913\" srcset=\"https://dcv.vn/wp-content/uploads/2016/11/12.png 8026w, https://dcv.vn/wp-content/uploads/2016/11/12-300x184.png 300w, https://dcv.vn/wp-content/uploads/2016/11/12-768x470.png 768w, https://dcv.vn/wp-content/uploads/2016/11/12-1024x627.png 1024w\" sizes=\"(max-width: 8026px) 100vw, 8026px\"></div>\r\n<p>Hiện nay, DCV đang phái cử nhân lực Công nghệ thông tin tới làm việc ngắn và dài hạn tại công ty của khách hàng để thực hiện các công việc sau:<br>\r\n1. Lập trình viên Java (Java core, Strust, Hibernate, Spring, … )<br>\r\n2. Lập trình viên PHP<br>\r\n3. Lập trình viên .Net (C#, VB.net)<br>\r\n4. Lập trình viên Android<br>\r\n5. Lập trình viên iOS<br>\r\n6. Kiểm thử phần mềm<br>\r\n7. Quản trị dự án<br>\r\n8. Quản lý hệ thống mạng</p>\r\n<p><span style=\"color: #008080;\"><strong>NGUYÊN TẮC CHUẨN TRONG PHỤC VỤ KHÁCH HÀNG</strong></span></p>\r\n<ul>\r\n<li>Sự chuyên sâu trong lĩnh vực CNTT giúp cho DCV thấu hiểu và đáp ứng một cách chuyên nghiệp trước những yêu cầu của khách hàng</li>\r\n<li>Quy trình tiếp nhận yêu cầu phái cử nhân lực từ khách hàng được diễn ra nhanh chóng, chuyên nghiệp</li>\r\n<li>Nâng cao năng lực đáp ứng nguồn lực, đảm bảo cung cấp nguồn lực cho dự án</li>\r\n<li>Ứng viên gắn kết dài lâu, biến động nhân sự thấp</li>\r\n<li>Giá cả dịch vụ cạnh tranh so với các công ty cùng ngành.</li>\r\n</ul>\r\n<p><span style=\"color: #008080;\"><strong>QUY TRÌNH PHÁI CỬ NGUỒN NHÂN LỰC&nbsp;</strong></span></p>\r\n<div class=\"iframe-2\"><script id=\"tui-rtji\">\r\n(function(t){t.rtji={\r\n\"file\":\"http://dcv.vn/wp-content/themes/dcv-theme/tweenui/banner2.html\",\r\n\"width\":\"750\",\r\n\"height\":\"560\"\r\n}}(window.tweenui=window.tweenui||{}));</script><br>\r\n<script src=\"./PHÁI CỬ NHÂN LỰC CNTT - Công ty cổ phần Truyền số liệu Việt Nam_files/tui2.js.tải xuống\" async=\"\"></script></div>\r\n<div class=\"img-1\"><img class=\"alignnone size-full wp-image-560\" src=\"./PHÁI CỬ NHÂN LỰC CNTT - Công ty cổ phần Truyền số liệu Việt Nam_files/quytrinhBPO-01-1.png\" alt=\"quytrinhbpo-01\" width=\"1994\" height=\"1308\" srcset=\"https://dcv.vn/wp-content/uploads/2016/11/quytrinhBPO-01-1.png 1994w, https://dcv.vn/wp-content/uploads/2016/11/quytrinhBPO-01-1-300x197.png 300w, https://dcv.vn/wp-content/uploads/2016/11/quytrinhBPO-01-1-768x504.png 768w, https://dcv.vn/wp-content/uploads/2016/11/quytrinhBPO-01-1-1024x672.png 1024w\" sizes=\"(max-width: 1994px) 100vw, 1994px\"></div>\r\n<p><span style=\"color: #008080;\"><strong>ĐỘI NGŨ NHÂN SỰ CỦA DCV</strong></span></p>\r\n<ul>\r\n<li>Trẻ tuổi, trình độ học vấn cao;</li>\r\n<li>Chịu được áp lực, khó khăn trong công việc;</li>\r\n<li>Tích cực học hỏi tìm tỏi khám phá những công nghệ, ngôn ngữ lập trình mới;</li>\r\n<li>Thành thạo ngoại ngữ (tiếng Nhật, tiếng Anh…);</li>\r\n<li>&nbsp;Có tinh thần cầu tiến, sẵn sáng đương đầu với thử thách để trưởng thành hơn;…</li>\r\n</ul>\r\n<p>Đến với dịch vụ của DCV, các doanh nghiệp có thể hoàn toàn yên tâm giao phó toàn bộ công việc quản trị, vận hành hạ tầng phần cứng và các ứng dụng phần mềm cho các đơn vị cung cấp dịch vụ thay vì phải tự thực hiện. Với tính ổn định cao về mặt bằng nhân sự phái cử cùng môi trường an toàn và được quản lý chặt chẽ, DCV cam kết bảo mật thông tin một cách tuyệt đối cho các doanh nghiệp cũng như những bí mật cá nhân.</p>\r\n<p style=\"text-align: right;\"><strong>DCV JSC</strong></p>', 1, '2028-07-20 08:29:02', '2028-07-20 08:29:02', 'phai-cu-nhan-luc-cntt', 0),
(2, 3, 'Gia Công Phần Mềm', 'https://vnptproject.blob.core.windows.net/imagecontainer/HR-Outsourcing-2-720x478.jpg', 'https://vnptproject.blob.core.windows.net/imagecontainer/HR-Outsourcing-2-720x478.jpg', 'Gia công phần mềm là một xu hướng CNTT đã phát triển, trưởng thành khẳng định tiềm năng và vị thế của nó với các doanh nghiệp trên toàn thế giới. Gia công phần mềm không chỉ còn là lựa chọn đơn thuần cho doanh nghiệp mà được coi là một quyết định thông minh cho doanh nghiệp khi muốn cắt giảm chi phí và tăng lợi nhuận trên đầu tư.', '<div class=\"col-lg-8 col-md-8 col-sm-12 col-xs-12\">\r\n    <div class=\"left-side wow fadeInDown  animated\" style=\"visibility: visible; animation-name: fadeInDown;\">\r\n        <p>Với xu hướng toàn cầu hóa nền kinh tế như hiện nay, khá nhiều công ty đang gặp khó khăn trong công việc kinh doanh của mình. Một câu hỏi được đặt ra là làm thể nào để đẩy mạnh cũng như đổi mới kinh doanh, nâng cao năng lực cạnh tranh, thực hiện thành công các dự án phần mềm của mình? Nếu bạn đang tìm kiếm một câu trả lời cho câu hỏi này thì dịch vụ Gia công phát triển phần mềm chính là giải pháp tối ưu.</p>\r\n        <p>Gia công phần mềm là một xu hướng CNTT đã phát triển, trưởng thành khẳng định tiềm năng và vị thế của nó với các doanh nghiệp trên toàn thế giới. Gia công phần mềm không chỉ còn là lựa chọn đơn thuần cho doanh nghiệp mà được coi là một quyết định thông minh cho doanh nghiệp khi muốn cắt giảm chi phí và tăng lợi nhuận trên đầu tư.</p>\r\n        <p><span style=\"color: #008080;\"><strong> NHỮNG ƯU ĐIỂM CỦA DỊCH VỤ GIA CÔNG PHẦN MỀM CNTT TẠI DCV </strong></span></p>\r\n        <div class=\"iframe-1\">\r\n            <script src=\"http://dcv.vn/wp-content/themes/dcv-theme/tweenui/tui4.js\" async=\"\"></script></div>\r\n        <div class=\"img-1\"><img class=\"alignnone size-full wp-image-704\" src=\"http://dcv.vn/wp-content/uploads/2016/11/dcv3.png\" alt=\"dcv3\" width=\"5481\" height=\"3739\" srcset=\"https://dcv.vn/wp-content/uploads/2016/11/dcv3.png 5481w, https://dcv.vn/wp-content/uploads/2016/11/dcv3-300x205.png 300w, https://dcv.vn/wp-content/uploads/2016/11/dcv3-768x524.png 768w, https://dcv.vn/wp-content/uploads/2016/11/dcv3-1024x699.png 1024w\" sizes=\"(max-width: 5481px) 100vw, 5481px\"></div>\r\n        <p><span style=\"color: #008080;\"><strong>THẾ MẠNH CỦA DCV TRONG DỊCH VỤ GIA CÔNG PHẦN MỀM</strong></span></p>\r\n        <div class=\"iframe-1\">\r\n\r\n            <script src=\"http://dcv.vn/wp-content/themes/dcv-theme/tweenui/tui5.js\" async=\"\"></script></div>\r\n        <div class=\"img-1\"><img class=\"alignnone size-full wp-image-702 aligncenter\" src=\"http://dcv.vn/wp-content/uploads/2016/11/dcv1-1.png\" alt=\"dcv1\" width=\"5481\" height=\"3739\" srcset=\"https://dcv.vn/wp-content/uploads/2016/11/dcv1-1.png 5481w, https://dcv.vn/wp-content/uploads/2016/11/dcv1-1-300x205.png 300w, https://dcv.vn/wp-content/uploads/2016/11/dcv1-1-768x524.png 768w, https://dcv.vn/wp-content/uploads/2016/11/dcv1-1-1024x699.png 1024w\" sizes=\"(max-width: 5481px) 100vw, 5481px\"></div>\r\n        <p><span style=\"color: #008080;\"><strong>LỢI ÍCH CỦA DOANH NGHIỆP KHI SỬ DỤNG DỊCH VỤ GIA CÔNG PHẦN MỀM CỦA DCV</strong></span></p>\r\n        <div class=\"iframe-1\">\r\n            <script src=\"http://dcv.vn/wp-content/themes/dcv-theme/tweenui/tui6.js\" async=\"\"></script></div>\r\n        <div class=\"img-1\"><img class=\"alignnone size-full wp-image-708\" src=\"http://dcv.vn/wp-content/uploads/2016/11/dcv5.png\" alt=\"dcv5\" width=\"5481\" height=\"3739\" srcset=\"https://dcv.vn/wp-content/uploads/2016/11/dcv5.png 5481w, https://dcv.vn/wp-content/uploads/2016/11/dcv5-300x205.png 300w, https://dcv.vn/wp-content/uploads/2016/11/dcv5-768x524.png 768w, https://dcv.vn/wp-content/uploads/2016/11/dcv5-1024x699.png 1024w\" sizes=\"(max-width: 5481px) 100vw, 5481px\"></div>\r\n        <p>&nbsp;</p>\r\n        <p><span style=\"color: #008080;\"><strong>CÁC DỰ ÁN MÀ DCV ĐÃ LÀM</strong></span></p>\r\n        <ul>\r\n            <li>Dự án Tư vấn bán hàng cho một Công ty phần mềm lớn của Việt Nam</li>\r\n            <li>Dự án Tuyển dụng nhân sự cho một Công ty phần mềm lớn của Việt Nam</li>\r\n            <li>Dự án Quản lý&nbsp;tài sản cho một Công ty phần mềm lớn của Việt Nam</li>\r\n            <li>Dự án Phát triển hệ thống webiste tuyển dụng cho Công ty phần mềm lớn của Việt Nam</li>\r\n            <li>Dự án Phát triển cho một công ty của Nhật Bản…</li>\r\n        </ul>\r\n        <p style=\"text-align: right;\"><strong>DCV JSC</strong></p>\r\n    </div>\r\n</div>\r\n', 1, '2020-08-03 08:48:45', '2020-08-03 08:48:48', 'gia-cong-phan-mem', 1),
(3, 4, 'Cho thuê tổng đài CSKH 1900-1800', 'https://vnptproject.blob.core.windows.net/imagecontainer/14667581709611_banner_dichvu.fw_r1_c1-720x391.jpg', 'https://vnptproject.blob.core.windows.net/imagecontainer/14667581709611_banner_dichvu.fw_r1_c1-720x391.jpg', 'Dịch vụ tổng đài 1900 là dịch vụ chăm sóc khách hàng dựa trên các đầu số 1900, là dịch vụ mà người gọi phải trả tiền cước phí tùy theo từng đầu số và gói cước. Tổng đài 1900 cho phép khách hàng thực hiện các cuộc gọi tới nhiều địa điểm khác nhau thông qua một số truy cập thống nhất trên toàn quốc', 'full', 1, '2020-08-03 14:28:05', '2020-08-03 14:28:07', 'cho-thue-tong-dai-1900-1800', 1),
(4, 4, 'Tư vấn, thiết kế, thi công, di dời các hệ thống', 'https://vnptproject.blob.core.windows.net/imagecontainer/Dich-vu-lap-dat-thiet-bi-mang-720x391.jpg', 'https://vnptproject.blob.core.windows.net/imagecontainer/Dich-vu-lap-dat-thiet-bi-mang-720x391.jpg', 'Data Server là nền tảng vững chắc cho mọi hoạt động và các ứng dụng liên quan đến công nghệ thông tin của một doanh nghiệp. Chúng tôi đã phục vụ triển khai cho rất nhiều doanh nghiệp trong và ngoài nước…\r\n\r\n', 'full', 0, '2020-08-03 14:30:17', '2020-08-03 14:30:20', 'tu-van-thiet-ke-giam-sat-thi-cong-di-doi-cac-thong', 1),
(5, 4, 'Tư vấn, thiết kế, thi công mạng máy tính', 'https://vnptproject.blob.core.windows.net/imagecontainer/thietke-mang-720x391.jpg', 'https://vnptproject.blob.core.windows.net/imagecontainer/thietke-mang-720x391.jpg', 'Chúng tôi với đội ngũ nhân lực giàu kinh nghiệm trong việc, quản trị triển khai hệ thống hạ tầng mạng trên nền tảng Windows cũng như Linux đã từng làm việc cho các công ty ngân hàng, công ty chuyên cung cấp giải pháp tích hợp hệ thống, do đó, chúng tôi tự tin đem đến cho khách hàng những giải pháp, công nghệ cho hệ thống mạng LAN, WAN, Wireless phù hợp nhất tới các khách hàng công ty, doanh nghiệp.', 'full', 0, '2020-08-03 14:31:58', '2020-08-03 14:31:59', 'tu-van-thiet-ke-thi-cong-mang-may-tinh-camera-ninh', 1),
(8, 4, 'Bảo trì hạ tầng CNTT', 'https://vnptproject.blob.core.windows.net/imagecontainer/Support_plan_photo_e473f7bc-d471-4307-b2dc-fec61e9c8ed4-2-1-720x391.jpg', 'https://vnptproject.blob.core.windows.net/imagecontainer/Support_plan_photo_e473f7bc-d471-4307-b2dc-fec61e9c8ed4-2-1-720x391.jpg', 'Một nhân viên nào đó lên mạng và máy tính của họ bị nhiễm virus dẫn đến virus lây lan toàn bộ hệ thống, gây tê liệt mọi hoạt động trong công ty, thì phải làm thế nào?\r\n', 'full', 0, '2020-08-05 06:53:51', '2020-08-05 06:53:52', 'dich-vu-it', 1),
(34, 4, 'dlkf fixe fixed', 'https://vnptproject.blob.core.windows.net/imagecontainer/Screenshot (20).png', 'https://vnptproject.blob.core.windows.net/imagecontainer/Screenshot (20).png', 'xmlv fieex fixxefv', '<p>&#39;lsl,vf fixed fsef</p>', 0, '2008-08-20 15:59:48', '2020-08-14 01:29:39', 'a-a-a', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `test table`
--

CREATE TABLE `test table` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `test table`
--

INSERT INTO `test table` (`id`, `content`) VALUES
(1, '<p><img alt=\"\" src=\"https://vnptproject.blob.core.windows.net/imagecontainer/90935796_2581613512164808_2456897955036591237_n.jpg\" style=\"height:1350px; width:1080px\" /></p>\r\n\r\n<p><em><strong>vjđfhkhkf</strong></em></p>'),
(2, NULL),
(3, '<p><span style=\"color:#e74c3c\">dshsfjfg</span></p>\r\n\r\n<p><span style=\"color:#e74c3c\"><img alt=\"\" src=\"https://vnptproject.blob.core.windows.net/imagecontainer/Screenshot (71).png\" style=\"height:450px; width:800px\" />dfrgtgtrg</span></p>\r\n\r\n<p><span style=\"color:#e74c3c\">gntjkgn4t</span></p>'),
(4, '<p><img alt=\"\" src=\"https://vnptproject.blob.core.windows.net/imagecontainer/Screenshot (75).png\" style=\"height:768px; width:1366px\" /><span style=\"color:#3498db\">dhgjhgf&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `avatar`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Steve Roger', 'admin1@gmail.com', 'https://vnptproject.blob.core.windows.net/imagecontainer/83903525_10212780715711613_3348867875652763648_o.jpg', 1, '2020-08-20 01:36:12', '$2y$10$5V4gqmHddTyayYjof1SJvuZyL1rBoj7D4VElrIg4WL8Oo6NnSsb6i', 'ln1bMV8S7BIVBwVQE5uk7a9LKyg8uC2E3oFKBfuXiAatPOWyT6ePk63UKv8I', '2004-08-20 01:36:12', '2004-08-20 01:36:12'),
(4, 'Tony Stark', 'admin2@gmail.com', 'https://vnptproject.blob.core.windows.net/imagecontainer/87038173_2578685132376480_8577131985980358656_o.jpg', 2, '2004-08-20 01:36:12', '$2y$10$XBtKzhkzu39VVhDS5vAjYO5BT.l7ci.3sf.2pTphjFwicU7A34FF6', '3SN8HRGRCzvUJpPvBbfjauuKLkEYtvn9ePJIdClLmb3WXtBrvAmohqhxgzX5', '2004-08-20 01:36:12', '2004-08-20 01:36:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer_comment`
--
ALTER TABLE `customer_comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `other_posts`
--
ALTER TABLE `other_posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `test table`
--
ALTER TABLE `test table`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer_comment`
--
ALTER TABLE `customer_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `other_posts`
--
ALTER TABLE `other_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `service_request`
--
ALTER TABLE `service_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `test table`
--
ALTER TABLE `test table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
