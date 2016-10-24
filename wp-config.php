<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gambles1_ss_dbname595');

/** MySQL database username */
define('DB_USER', 'gambles1_ss_d595');

/** MySQL database password */
define('DB_PASSWORD', 'TDLCea2m9CLW');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'wAdo+@_?vE(iF^&EoQHF+HQ$MlVV}h}azWoX/>;njqXa;()oh^t-<-[MToAZTQTMqT]Wi>%EWn|uxns^Lese>Yva=ZNMFfEQ(vtDESUqYt{M/IK(u=>*}hknQQa;OKew');
define('SECURE_AUTH_KEY', 'o>C>$=aZPMP?|VWwb_bTSMNW->Pb!-M!pnC<YQx*h>btlh}n*JE<*EQIR<@&Du+S=HS{vw_BzXfnN@aw{!Y;k*Nx-XseJR(GC)/I$<au!eTqJoV=)c;&^>n|=QrfnjaP');
define('LOGGED_IN_KEY', 'ME!m-[U|^S>GUj&Oy$io<f{U}BE>syX-a$J%[/pX-Ar=OqsY@%hkQ{cO;X)dxZ[*K)h]|$W!b@CYB<CmYSIuM=ftIE_dQ<drM!olT!LaUUJAi}BqQWS}Z*(IlvA=jMr;');
define('NONCE_KEY', '<DT)q]yvVMB<jWyH=(|%lPjg{%riXp{Ges*ea^@aU]GOZ_x()V](/XVSYemXOZaVeGjOk%B-$%ZWw!BwJaIk<?Y&p>YVO-Hqbpz*+PmtGL>IuqyxQtO)]j|ciuhc[t[G');
define('AUTH_SALT', 'FVqJfJNkF[|uZLnfS(@T&K[=qmOfn=S$}(Hl<i/IRION&qBNI}h[z_(d$Nh!!kcz>gPlROKoiw]){/OTwSrRa<^jOJQ)xbF$NoTC)IA>AHGuK_)mV=&lP<QB_BVhUNqg');
define('SECURE_AUTH_SALT', '<pGM^MjErO&*PclNx@kLE[XEXcavpv!=IfNp(+CLIZFB!gE/N[bTCJKQd*Dy)}[T&<iq@{oBVZ}^mXxsx(|t?DLhC=I_^Xo+]rpU{r^mr^^@qREI<lKrPdme=eaLT*HF');
define('LOGGED_IN_SALT', 'V)WyNpozgWn)%kpp%PBGZ=sI(XhXe<HsqzM)/P>gfh/C[=dnWR%>$GDDj(f=eA<z}Q]CRFp>;KBA@r_-C[tGsGQ>?IVE^{)AjNGL^rggrAaVEKEIeg!HU*)+vlwz)^(_');
define('NONCE_SALT', 'tFnJy-S*wZ>--zMN{m}iu@PZaX{Bm_/p)fbM/Ut[>[Hsh/-_Je_Sh/k!FrXExVm)uRj*ac[bL]w&;CcdWEB;%]OlzRJ?LkMb)>CgZH?wqio%>w]rXr$k|K/TGSL!A^zw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_iwrp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
