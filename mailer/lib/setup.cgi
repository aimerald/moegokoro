# ACMAILER3
# 08/04/18 Ver3.0βリリース
# 08/04/18 Ver3.1β
# 修正
# ・バックナンバーにログインチェックがあるのを外す
# ・メール送信確認画面でのプレビュー数は全件→10件に変更
# ・送信ボタンに二度押し禁止チェック導入
# ・送信確認画面上部の送信件数が絞込みを行っても全件表示される不具合修正
# ・送信データのセッションの持ち方を変更。セッションデータを200分の1に縮小
# ・送信確認画面ではHTML送信でもプレビューはタグを表示するよう修正
# ・同じく送信履歴でもHTMLメールをテキストにして表示するよう修正
# ・同じくバックナンバーでもHTMLメールをテキストにして表示するよう修正
# ・本文に'が入っていた場合、送信プレビューのところでjavascriptエラーがでる不具合修正
# ・通常送信の場合、休憩処理を入れていたが無効に
# ・配信メールテンプレート・自動返信テンプレートの登録・修正でタブコードを半角スペースへ置換する修正
# ・分割送信時の待ち秒数設定を追加
# ・メール送信確認・履歴詳細画面・バックナンバーにてHTMLメールの場合プレビューリンクを追加
# ・各種設定より「SSLを使用する」の項目を削除。入力されたCGI設置URLはフォームタグ作成とバックナンバーのアクセス制御に使用
# 
# 08/04/23 Ver.3.11β
# ・不正にwriting.cgiを消した場合InternalServerErrorになるのを修正
# ・メール一覧に検索機能追加
# ・送信履歴に検索機能追加
# ・QMAILかどうかの設定を追加
# ・送信履歴にメールアドレスも記憶するかどうかの設定を追加
# ・HTMLメール時、送信履歴・バックナンバーにてタグを取り除いた形で見せるよう変更
# ・メール送信不完了を取得できるようステータスを保持。
# ・履歴に送信件数を持つように変更
# 08/05/20 Ver.3.12β
# ・差出人名に使用できない文字列を設定
# ・送信時の差出人名に&が入っているとおかしくなるバグ修正
# 08/06/20 Ver.3.13β
# 修正
# ・reg.cgiで送信元フォームに文字コード調査用の項目が設置されていなければエラーになるのを修正
# ・reg.cgiでメール内容が文字化けするのを修正
# ・履歴参照で表示件数を変更すると正しくソートされない不具合修正
# 追加機能
# ・携帯用メール送信画面
# ・空メール送信登録モジュール
# ・ダブルオプトイン機能
# ・自動返信メールHTML機能
# 08/06/24 Ver.3.20β
# ・主にユーザビリティ変更
# ・ダブルオプトインの仮登録データ掃除画面追加
# ・テンプレート画面下にラジオボタンのクリアボタン追加
# ・送信画面のテンプレートセレクトボックスにデフォルト設定されているものは（デフォルト）と表示して選択状態に
# ・送信確認画面下に最大１０件まで表示という言葉を明記
# ・携帯送信画面でforkテストをし、成功すればバックグランド処理、失敗すればノーマルのメールアドレスを表示しない送信方法に変更
# ・各種設定でSSL(https)の設定をできるように修正
# ・ダブルオプトイン機能のIDをMD5にし、強化。
# 08/07/18 Ver.3.21β
# ・reg.cgiで項目名がでない不具合を修正
# ・同じくautoreg.plでも項目名がでない不具合を修正
# 08/10/07 Ver.3.22β(公開せず）
# ・管理画面のUI変更
# ・自動返信メールとデフォルトとメール送信の時に{REGURL}{DELURL}の１クリック登録・解除アドレスを挿入できるように対応
# 08/11/07 Ver.3.30β
# ・予約配信機能追加
# ・不着管理機能追加
# ・表示文字コードをEUC-JPに統一し、文字化けを極力少なく
# ・バックナンバー設定での不具合修正
# ・メールアドレス一覧に配信か配信停止かの区分を追加
# ・不着処理での自動配信停止機能追加
# ・使用可能変数に日付を追加 {YEAR}{MONTH}{DAY}{HOUR}{MINUTE}{SECOND}{WEEK}{WEEK-JP}
# ・アンインストール機能を追加
# ・メールアドレスに「=」が入っていると配信が停止してしまう不具合を修正
# 09/01/21 Ver.3.31β
# ・携帯版で新しいタグ{WEEK-JP}など送信できかない不具合修正
# ・携帯版でメール送信時テンプレートを選択できるように
# ・登録自動返信メールで{WEEK-JP}が効かない不具合修正
# ・一括登録時改行コードがCRのみのときに改行が入ってしまう不具合修正
# ・自由項目に改行が入ってきた場合にデータ壊れる不具合修正
# 09/01/29 Ver.3.32β
# ・一括登録時に配信フラグを見るかどうかのラジオボタンを追加
# ・仮登録メールの配信内容を変更できるように
# ・登録時のエラーチェックを登録されていても配信フラグが停止の場合は再登録できるように
# ・仮登録→本登録時にメールアドレスをキーにして仮登録データを削除するように修正
# ・仮登録完了画面と本登録完了画面と削除完了画面をテンプレート化
# 09/02/16 Ver.3.33β
# ・不着メール管理でページングの処理がうまくいかない不具合を修正
# ・ダブルオプトインを使用する設定でユーザに自動返信メールを送らない設定をしていると本登録URLの送信ができない不具合修正
# ・機種依存文字をチェックしている場合サーバによっては大容量の文字列を処理できずエラーになるのを修正
# 09/03/31 Ver.3.40β
# ・3キャリアのデコメール対応（HTMLメール・インライン画像・絵文字）
# ・自動返信メールテンプレートがHTMLの場合のダブルオプトインの仮登録で適用されていない不具合修正
# ・エラーメール処理の最適化
# ・各機能モジュールのライブラリ参照先を統一
# ・メルマガフォーム設定例の記述ミス修正
# ・アンインストーラ画面の文言修正
# ・登録完了画面、削除完了画面、仮登録完了画面のSJIS化と簡易HTML化
# ・WEBCRON対応
# 09/03/31 Ver.3.41β
# ・予約配信で複数予約がある場合に正常に１つ１つの予約配信ができない不具合修正
# 09/03/31 Ver.3.42β
# ・ダブルオプトイン機能でfromに送信名があった場合正常に追加できない不具合修正
# ・3.4系でダブルオプトインがうまく動作していなかった不具合修正
# ・テキストメール配信がHTMLメールになってしまっている不具合修正
# ・デコメールで絵文字や画像を入れる場合に本文のカーソルに挿入されるよう修正
# ・outlookで改行コードがCRLFの場合うまくヘッダが読み込まれない不具合修正
# ・不着管理でタブなどの特殊文字が入り正常に不着データファイルが生成されない不具合修正
# 09/05/20 Ver.3.43RC
# ・outlookでヘッダが見えてしまう不具合修正（改行コード）
# ・メール送信画面、javascript機能追加
# 10/01/20 Ver.3.6.0β
# ・全体を一新
# ・SMTP送信に対応
# ・メールアドレス一覧で自由項目を表示
# ・メールアドレス検索・絞込機能の強化
# ・設定情報のエクスポート・インポート機能を追加
# ・バックナンバー携帯用を作成
# などなど
# 10/01/21 Ver.3.6.1β
# ・AUの文字化け対応
# ・perl5.6でも動作するよう修正（全機能は無理な場合がある）
# 10/01/21 Ver.3.6.2β
# ・フォームからでも重複登録できるように修正（内部的に実装）
# ・解除の時の配信停止の不具合修正
# ・管理画面で更新後、再度更新しようとした時のエラー修正
# ・モバイル系CSS修正
# ・モバイル系のデザイン登録完了形修正 (DOCOMOのCSSがそのまま表示されるなど）
# 10/02/15 Ver.3.6.3β
# ・予約配信時に履歴IDが正常に入らない不具合修正
# ・予約配信時にHTMLメールがテキストメールになる不具合修正
# ・管理者宛てのメールにDATEとREMOTE_HOSTの項目が入っていない不具合修正
# 10/03/08 Ver.3.6.4β
# ・機種依存文字チェックで依存文字以外をエラーにしてしまう不具合修正
# ・予約配信時に送信中フラグが立つように修正
# ・大量のデータを登録するとFireFoxでデザインが崩れる不具合修正
# ・ライセンス登録時にサンプルのメルマガフォームのロゴも消えるように修正
# ・メール送信確認画面より戻った時に送信件数が倍減ってしまう不具合修正
# 10/03/12 Ver.3.6.5β
# ・空メール登録で最後に登録したデータがそのあとのカラムにも登録される不具合修正
# ・自動返信メールでHTMLメールが効かない場合があるのを修正
# 10/03/25 Ver.3.6.6β
# ・不着メールを削除できるように
# ・外部メール送信する場合に失敗時にローカルから配送できるように
# ・削除時に配信停止する場合に再登録で全てのデータを上書きできるように(3.43rcと同仕様に）
# ・ダブルオプトインでメールアドレスを変更した場合COLの変数が効かない不具合修正
# ・ライセンスデータのエクスポートとインポート追加
# 10/04/02 Ver.3.6.7β
# ・DOCOMOでjpgが見れない不具合修正
# ・初期テンプレート修正
# 10/04/02 Ver.3.6.8β
# ・初期設定時にqmailかどうかの自動判別を追加
# ・空メールで本登録フォームへ誘導する機能を追加
# ・自動でフォームを生成する機能を追加
# ・qmailチェックがきかない不具合修正
# ・「含む」「完全一致」の検索項目追加
# ・空メール以外の削除時に確認画面を出す機能を追加
# ・チェックボックスを登録フォームに設定できるように
# ・送信者名の禁止文字列を強化 " ' < > 以外は使用できるように
# ・デザインを諸所変更
# ・履歴詳細で絞り込みが0が表示されない不具合修正
# ・管理画面のACMAILERロゴ以外、非表示ライセンスで表示しないように変更
# ・設定インポートエクスポートにフォーム設定を追加
# 10/07/06 Ver.3.6.9rc
# ・管理画面からシステム情報をダウンロードできるように
# ・メールアドレス検索、メール配信時に含まない検索ができるように
# ・デザイン諸所変更
# ・plainメール配信時のsubjectにBエンコードが正常にかかっていない不具合修正
# ・携帯用に完了画面やautoform機能でSJISで表示できるように修正
# 10/09/21 Ver.3.6.10rc
# ・EUC以外の文字コードにタグを貼り付けるとチェックボックスの値が正常に取得できない不具合修正
# 10/09/30 Ver.3.8.0
# ・配信間隔設定追加
# ・登録日と更新日を追加
# ・フォームからの重複登録許可設定を追加
# ・送信中に画面が遷移しないよう防止
# ・送信先CSVダウンロードを送信確認画面に追加
# ・メールアドレス管理で項目の表示が消えないよう修正
# 10/09/30 Ver.3.8.1
# ・携帯版の予約配信でPC画面の完了画面が表示される不具合修正
# 10/09/30 Ver.3.8.2
# ・PC版の予約配信完了画面の不具合修正
# 10/12/01 Ver.3.8.3
# ・数万件送信する場合にテスト配信がタイムアウトする不具合修正
# ・メール一括登録でメールアドレスが小文字に整形されない不具合修正
# ・メルマガ登録のサンプルソースを一部修正
# 10/12/01 Ver.3.8.4
# ・携帯版でDOCOMO端末で送信できない不具合修正
# 10/12/27 Ver.3.8.5
# ・バックナンバーのアクセス制限を解除
# ・再登録防止機能搭載
# ・XSS対策を全体的に実施
# 11/01/25 Ver.3.8.6
#　・予約配信編集機能追加
# ・checkbxo系の脆弱性を修正
# ・chromeで初期設定時にCGIインストール場所に空白が入ってしまう不具合修正
# 11/03/02 Ver.3.8.7
# ・機種依存文字チェックで正常なデータチェックに引っかかる不具合修正
# ・レイアウト調整
# ・メールテンプレートの選択はデフォルトではなしになるように修正

use File::Basename;
use POSIX;
use CGI;
use Jcode;
use Time::Local;
use Crypt::RC4;
use clsDataAccess;
use clsAcData;
use clsPaging;
require 'mimew.pl';
require 'jcode.pl';
use Template; # toolkit

# 共通モジュール読み込み
require 'common.pm';
# 絵文字テーブル読み込み
require 'mobileimg.cgi';


use strict;

our $SYS;
$SYS->{tmpl_error_file} = "tmpl/error.tmpl";
$SYS->{data_dir} = "./data/";
$SYS->{dir_session} = "./session/";
$SYS->{dir_session_mail} = "./session_mail";
$SYS->{version} = '3.8.14';

# 自由項目数
$SYS->{max_colnum} = 10;

1;
