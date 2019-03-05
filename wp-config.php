<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt,
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'TDMUHub' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M3pRpLOdw*T>-3&DiYK]S8(Sfl5A($rQbWR,7b})g~S`%OhCH8VpSHGM9>!R[ijv' );
define( 'SECURE_AUTH_KEY',  '0A+ud?O5(]3A=VFvQ[C{*aPa:t^n^v8g~D${xkTVBzDE9Kdob/K*h|L)uQuC8t&o' );
define( 'LOGGED_IN_KEY',    'u3d%<7>}#BB-xMKBmS_~1-?5BVO4tTZJ:Gmdwh`hX+hM&}w0V4TrW7lGE30N2P[[' );
define( 'NONCE_KEY',        '#:?)b/4;=r#g#q*7JAW$2>lg]=z?){^bvhu`(Pu^lqgzRGP}QLC8P/rb-e-0Ks-.' );
define( 'AUTH_SALT',        '3{6VAKDe%bM`_Il~&k-dttCk|~6G:2~SluX!0hf0mZYdkL9&Us^e^2EI:l!dP#>`' );
define( 'SECURE_AUTH_SALT', '|CO1Vi/X`RT84d&:69(x-X^JDFI`hE^xn+2R-Gi;6_1#{[IbgFlyDX5ztt`T}Tge' );
define( 'LOGGED_IN_SALT',   'T-J8JdMqXcv4&_>WD?i}z8wwUEmmyJ3%UlY7YNX)qzAjB?uuM5$1~D_~JDFsFo*C' );
define( 'NONCE_SALT',       'F5y~Dcv&heX]/Lf=)b~7r5|B (<E9FDaA3_5;QRJda=?Ev*}<-$-Qb65MF![tx[4' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
