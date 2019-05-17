# CTF布教コンテストで作成した問題です

## Misc
* Welcome問題

* Esolang

* Different format

## Forensics
* Hidden message(hint: exif)

* Packet analysis(hint: ExportHTTP)

* Unzip me(hint: 'plaintext' is contained in 'KnownPlaintext.zip')

## Crypto
* ROT(hint: b→o,v→i,g→t)

* Vigenere

* Simple RSA

## Web
* Sweets

* Login form(hint: SELECT * FROM users WHERE name = $_POST['name'] AND password = $_POST['password];)

   adminとしてログインしてください

* Vulnerable PHP(hint: flagはflag.phpにコメントアウトしてあります/PHPのstream filterについて調べてみてください)

## Reversing
* Authentication system?

* Argument(hint: コマンドライン引数が使われています)

* Calculation(hint: debuggerは使えますか/実行中、計算結果は汎用レジスタに格納されます)

   簡単な定数計算を実装したプログラムです
   flag出力用のprint文を書き忘れてしまいました
   計算によって求められる値をflagとしますので、実行ファイルを解析して計算結果を求めてくだ   さい
   Flag形式: oitctf{"計算結果"}
