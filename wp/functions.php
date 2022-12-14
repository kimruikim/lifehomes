<?php

define( 'LIG_G3_DIR', '_g3' );
define( 'LIG_G2_DIR', '_g2' );

define( 'LIG_DEBUG', false );

require_once dirname( __FILE__ ) . '/vendor/autoload.php';

if ( true === LIG_DEBUG ) {
	function lightning_debug_mode() {
		$options = lightning_get_theme_options();
		// $options = get_option( 'lightning_theme_options' );
		// unset( $options['layout'] );
		// update_option( 'lightning_theme_options', $options );
		print '<pre style="text-align:left">';
		print_r( $options );
		print '</pre>';
	}
	add_action( 'lightning_site_header_after', 'lightning_debug_mode' );
}

function lightning_is_g3() {

	$return = true;
	$g      = get_option( 'lightning_theme_generation' );
	if ( 'g3' === $g ) {
		$return = true;
	} elseif ( 'g2' === $g ) {
		$return = false;
	} else {
		$skin    = get_option( 'lightning_design_skin' );
		$options = get_option( 'lightning_theme_options' );
		if ( 'origin2' === $skin ) {
			$return = false;
			update_option( 'lightning_theme_generation', 'g2' );
		} elseif ( 'origin3' === $skin ) {
			$return = true;
			update_option( 'lightning_theme_generation', 'g3' );

		} elseif ( get_option( 'fresh_site' ) || ! $options ) {
			// 新規サイトでオプション非保存ならまぁG3っしょ
			$return = true;
			update_option( 'lightning_theme_generation', 'g3' );
		} else {
			// これ以外は従来ユーザーの可能性が高いのでG2
			$return = false;
			update_option( 'lightning_theme_generation', 'g2' );
		}
	}
	return apply_filters( 'lightning_is_g3', $return );
}

require dirname( __FILE__ ) . '/inc/class-ltg-template-redirect.php';

/**
 * 最終的に各Gディレクトリに移動
 */
if ( ! function_exists( 'lightning_get_template_part' ) ) {
	function lightning_get_template_part( $slug, $name = null, $args = array() ) {

		if ( lightning_is_g3() ) {
			$g_dir = '_g3';
		} else {
			$g_dir = '_g2';
		}

		/**
		 * 読み込み優先度
		 *
		 * 1.child g階層 nameあり
		 * 2.child 直下 nameあり
		 * 3.parent g階層 nameあり
		 *
		 * 4.child g階層 nameなし
		 * 5.child 直下 nameなし
		 * 6.parent g階層 nameなし
		 */

		/* Almost the same as the core */
		$template_path_array = array();
		$name                = (string) $name;

		// Child theme G directory
		if ( preg_match( '/^' . $g_dir . '/', $slug ) ) {
			// 1. g階層がもともと含まれている場合
			if ( '' !== $name ) {
				$template_path_array[] = get_stylesheet_directory() . "/{$slug}-{$name}.php";
			}
		} else {
			// g階層が含まれていない場合

			// 1. g階層付きのファイルパス
			if ( '' !== $name ) {
				$template_path_array[] = get_stylesheet_directory() . '/' . $g_dir . "/{$slug}-{$name}.php";
			}
			// 2. 直下のファイルパス
			if ( '' !== $name ) {
				$template_path_array[] = get_stylesheet_directory() . "/{$slug}-{$name}.php";
			}
		}

		if ( preg_match( '/^' . $g_dir . '/', $slug ) ) {
			// 3. g階層がもともと含まれている場合
			if ( '' !== $name ) {
				$template_path_array[] = get_template_directory() . "/{$slug}-{$name}.php";
			}
		} else {
			// 3. g階層がもともと含まれていない場合
			if ( '' !== $name ) {
				$template_path_array[] = get_template_directory() . '/' . $g_dir . "/{$slug}-{$name}.php";
			}
		}

		// Child theme G directory
		if ( preg_match( '/^' . $g_dir . '/', $slug ) ) {
			// 4. g階層がもともと含まれている場合
			$template_path_array[] = get_stylesheet_directory() . "/{$slug}.php";
		} else {
			// g階層が含まれていない場合
			// 4. g階層付きのファイルパス
			$template_path_array[] = get_stylesheet_directory() . '/' . $g_dir . "/{$slug}.php";
			// 5. 直下のファイルパス
			$template_path_array[] = get_stylesheet_directory() . "/{$slug}.php";
		}

		if ( preg_match( '/^' . $g_dir . '/', $slug ) ) {
			// g階層がもともと含まれている場合
			// 6. 親のg階層
			$template_path_array[] = get_template_directory() . "/{$slug}.php";
		} else {
			// 6. 親のg階層
			$template_path_array[] = get_template_directory() . '/' . $g_dir . "/{$slug}.php";
		}

		foreach ( (array) $template_path_array as $template_path ) {
			if ( file_exists( $template_path ) ) {
				$require_once = false;
				load_template( $template_path, $require_once );
				break;
			}
		}

	}
}

if ( lightning_is_g3() ) {
	require dirname( __FILE__ ) . '/' . LIG_G3_DIR . '/functions.php';
} else {
	require dirname( __FILE__ ) . '/' . LIG_G2_DIR . '/functions.php';
}

require dirname( __FILE__ ) . '/inc/customize-basic.php';
require dirname( __FILE__ ) . '/inc/tgm-plugin-activation/tgm-config.php';
require dirname( __FILE__ ) . '/inc/vk-old-options-notice/vk-old-options-notice-config.php';
require dirname( __FILE__ ) . '/inc/admin-mail-checker.php';
require dirname( __FILE__ ) . '/inc/functions-compatible.php';
require dirname( __FILE__ ) . '/inc/font-awesome/font-awesome-config.php';
require dirname( __FILE__ ) . '/inc/old-page-template.php';

/**
 * 世代切り替えした時に同時にスキンも変更する処理
 *
 * 世代は lightning_theme_generation で管理している。
 *
 *      generetionに変更がある場合
 *          今の世代でのスキン名を lightning_theme_options の配列の中に格納しておく
 *          lightning_theme_option の中に格納されている新しい世代のスキンを取得
 *          スキンをアップデートする *
 */

function lightning_change_generation( $old_value, $value, $option ) {
	// 世代変更がある場合
	if ( $value !== $old_value ) {

		// 現状のスキンを取得
		$current_skin = get_option( 'lightning_design_skin' );

		if ( $current_skin ) {
			// オプションを取得
			$options = get_option( 'lightning_theme_options' );
			if ( ! $options || ! is_array( $options ) ) {
				$options = array();
			}
			$options[ 'previous_skin_' . $old_value ] = $current_skin;
			// 既存のスキンをオプションに保存
			update_option( 'lightning_theme_options', $options );
		}

		// 前のスキンが保存されている場合
		if ( ! empty( $options[ 'previous_skin_' . $value ] ) ) {
			$new_skin = esc_attr( $options[ 'previous_skin_' . $value ] );

			// 前のスキンが保存されていない場合
		} else {
			if ( 'g3' === $value ) {
				$new_skin = 'origin3';
			} else {
				$new_skin = 'origin2';
			}
		}
		update_option( 'lightning_design_skin', $new_skin );
	}
}
add_action( 'update_option_lightning_theme_generation', 'lightning_change_generation', 10, 3 );


add_filter( 'mwform_error_message_mw-wp-form-60', 'custom_mwform_error_message', 10, 3 );
function custom_mwform_error_message( $error, $key, $rule ) {
    if ( $key === 'your-mail' ) {
        if ( $rule === 'noempty' ) {
            return 'メールアドレスが未入力です。';
        } elseif ( $rule === 'mail' ) {
            return 'メールアドレスの形式ではありません。';
        }
    } elseif( $key === 'your-name' ) {
        if ( $rule === 'noempty' ) {
            return 'お名前が未入力です。';
        }
    } elseif( $key === 'your-kana' ) {
        if ( $rule === 'noempty' ) {
            return 'ふりがなが未入力です。';
        } elseif ( $rule === 'hiragana' ) {
            return 'ふりがなで入力してください。';
        }
    } elseif( $key === 'memo' ) {
        if ( $rule === 'noempty' ) {
            return '詳細が未入力です。';
        }
    } elseif( $key === 'tel' ) {
        if ( $rule === 'tel' ) {
            return '電話番号の形式ではありません。';
        }
    } elseif( $key === 'rdo-item' ) {
        if ( $rule === 'required' ) {
            return '種別にチェックが入っておりません。';
        }
    } elseif( $key === 'ch-privacy' ) {
        if ( $rule === 'required' ) {
            return '「プライバシーポリシーに同意する」にチェックが入っておりません。';
        }
    }

    return $error;
}

function send_date_time( $value, $key, $insert_contact_data_id ) {
    if ( $key === 'send_datetime' ) {
        return date_i18n( 'Y年m月d日 H時i分' );
    }
    return $value;
}
add_filter( 'mwform_custom_mail_tag_mw-wp-form-60', 'send_date_time', 10, 3 );