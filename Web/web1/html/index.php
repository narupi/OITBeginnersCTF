<?php
$flag = 'oitctf{sweet_cookie}';

setcookie("FLAG", $flag);

?>

<!doctype html>
<html>
<head>
<meta charset = "UTF-8">
<title>web1</title>
</head>
<body>
 <div class="entry themeform">
        <div class="entry-inner">
          <div class="addtoany_share_save_container addtoany_content addtoany_content_top"><div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="https://www.narupi.net/2018/12/05/brainfuck/" data-a2a-title="BrainfuckにBrainをHackされた男(Brainfuck入門)"><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fwww.narupi.net%2F2018%2F12%2F05%2Fbrainfuck%2F&amp;linkname=Brainfuck%E3%81%ABBrain%E3%82%92Hack%E3%81%95%E3%82%8C%E3%81%9F%E7%94%B7%28Brainfuck%E5%85%A5%E9%96%80%29" title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fwww.narupi.net%2F2018%2F12%2F05%2Fbrainfuck%2F&amp;linkname=Brainfuck%E3%81%ABBrain%E3%82%92Hack%E3%81%95%E3%82%8C%E3%81%9F%E7%94%B7%28Brainfuck%E5%85%A5%E9%96%80%29" title="Twitter" rel="nofollow noopener" target="_blank"></a></div></div><div class="mod-calendarDescription">
<p>この記事は、<a href="https://adventar.org/calendars/2962" target="_blank" rel="noopener">OIT Advent Calendar 2018 </a>の5日目の記事です。</p>
<p>Twitterで行ったアンケートで最も票が多かったBrainfuckについての記事になります。</p>
</div><h3>目次</h3>
<hr />
<p>・<a href="#i-0">Brainfuckとは</a></p>
<p>・<a href="#i-1">Brainfuckの魅力</a></p>
<p>・<a href="#i-2">Brainfuckの言語仕様</a></p>
<p>・<a href="#i-3">Brainfuckに必要なもの</a></p>
<p>・<a href="#i-4">Brainfuckの考え方</a></p>
<p>・<a href="#i-5">Brainfuck入門の準備</a></p>
<p>・<a href="#i-6">Brainfuck入門</a></p>
<p>・<a href="#i-7">Brainfuckをさらに学びたい人向け</a></p>
<p>・<a href="#i-8">一発芸だけしたい人向け</a></p>
<p>・<a href="#i-9">まとめ</a></p><div class="mod-calendarDescription">
<h3><a id="i-0"></a>Brainfuckとは</h3>
<hr />
<blockquote><p><b>Brainfuck</b>（ブレインファック）は<a title="難解プログラミング言語" href="https://ja.wikipedia.org/wiki/%E9%9B%A3%E8%A7%A3%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0%E8%A8%80%E8%AA%9E">難解プログラミング言語</a>のひとつ<sup class="noprint Template-Fact">[<i><a title="Wikipedia:「要出典」をクリックされた方へ" href="https://ja.wikipedia.org/wiki/Wikipedia:%E3%80%8C%E8%A6%81%E5%87%BA%E5%85%B8%E3%80%8D%E3%82%92%E3%82%AF%E3%83%AA%E3%83%83%E3%82%AF%E3%81%95%E3%82%8C%E3%81%9F%E6%96%B9%E3%81%B8"><span title="この記述には信頼できる情報源の提示が求められています。（2016年11月）">要出典</span></a></i>]</sup>。なお名称に<a title="卑語" href="https://ja.wikipedia.org/wiki/%E5%8D%91%E8%AA%9E">卑語</a>が含まれるため、<b>Brainf*ck</b>などと表記されることがある。</p>
<p>開発者Urban Mullerが<a title="コンパイラ" href="https://ja.wikipedia.org/wiki/%E3%82%B3%E3%83%B3%E3%83%91%E3%82%A4%E3%83%A9">コンパイラ</a>がなるべく小さくなる言語として考案した。 実際、Mullerが開発したコンパイラのサイズはわずか123<a title="バイト (情報)" href="https://ja.wikipedia.org/wiki/%E3%83%90%E3%82%A4%E3%83%88_(%E6%83%85%E5%A0%B1)">バイト</a>、<a title="インタプリタ" href="https://ja.wikipedia.org/wiki/%E3%82%A4%E3%83%B3%E3%82%BF%E3%83%97%E3%83%AA%E3%82%BF">インタプリタ</a>は98バイトであった。</p>
<p>Brainfuckプログラムは非常に可読性・記述性が低いため実用性は期待できないが、<a title="チューリング完全" href="https://ja.wikipedia.org/wiki/%E3%83%81%E3%83%A5%E3%83%BC%E3%83%AA%E3%83%B3%E3%82%B0%E5%AE%8C%E5%85%A8">チューリング完全</a>である。その簡潔さから多くの派生言語を生み出すこととなった。</p>
<p>引用:wikipediaより</p>
<p>&nbsp;</p></blockquote>
<h3><a id="i-1"></a>Brainfuckの魅力</h3>
<hr />
<p>・言語仕様が簡単</p>
<p>・メモリが無限ならチューリング完全な言語なので、基本的にどんなプログラムも書ける。</p>
<p>・ポインタの理解が深まる(諸説ある)。</p>
<p>・コードが顔文字みたいで可愛い。(構文以外の文字列は無視される)</p>
<pre>,(&gt;,&lt;) = = = = \[&gt; - &lt;-]/ .</pre>
<p>・一発芸できる。</p>
<p>・AtCoderで使える。</p>
<p>&nbsp;</p>
<h3><a id="i-2"></a>Brainfuckの言語仕様</h3>
<hr />
</div><ul>
<li><strong><code>&gt;</code></strong> ポインタを１進める。C言語なら <code>++ptr;</code></li>
<li><strong><code>&lt;</code></strong> ポインタを１戻す。C言語なら <code>--prt;</code></li>
<li><strong><code>+</code></strong> ポインタの指す要素の値を１増やす。C言語なら <code>++(*ptr);</code></li>
<li><strong><code>-</code></strong> ポインタの指す要素の値を１減らす C言語なら <code>--(*ptr);</code></li>
<li><strong><code>.</code></strong> ポインタの指す要素の値を外に出力。C言語なら <code>putchar(*ptr);</code></li>
<li><strong><code>,</code></strong> 外から値を入力して、 ポインタの指す場所へ入れる。C言語なら <code>*ptr = getchar();</code></li>
<li><strong><code>[</code></strong> ポインタの指す要素の値が 0 だったら対応する次の ] までジャンプ。C言語なら <code>while(*ptr){</code></li>
<li><strong><code>]</code></strong> 対応する前の [ までジャンプ。C言語なら <code>}</code></li>
</ul><div data-reactid=".1">
<p>これだけ。簡単ですね。</p>
<p>&nbsp;</p>
<h3><a id="i-3"></a>Brainfuckに必要なもの</h3>
<hr />
<p>・ASCIIコード表(<a href="http://www3.nit.ac.jp/~tamura/ex2/ascii.html" target="_blank" rel="noopener">表</a>、<a href="http://web-apps.nbookmark.com/ascii-converter/" target="_blank" rel="noopener">変換器</a>)</p>
<p>・紙とペン</p>
<p>・エディタ([]のハイライトは必須)</p>
<p>・コンパイラorインタプリタ(<a href="http://moon.kmc.gr.jp/~prime/brainf_ck/env/">小規模なプログラムならこれがおすすめ</a>)</p>
<p>・脳を破壊する覚悟</p>
</div><p>&nbsp;</p>
<h3><a id="i-4"></a>Brainfuckの考え方</h3>
<hr /><div data-reactid=".1">
<p>長い配列をイメージする(各要素は0で初期化される)。</p>
<p>出力したい文字のASCIIを配列内で作成して出力する。</p>
<p>主な配列への操作</p>
<p>・番地の移動( &lt; &gt;)</p>
<p>・値の変更(+ -)</p>
<p>・値の入力(,)</p>
<p><img class="alignnone size-medium wp-image-249" src="https://www.narupi.net/wp-content/uploads/2018/11/mem_map-1-300x120.png" alt="" width="300" height="120" srcset="https://www.narupi.net/wp-content/uploads/2018/11/mem_map-1-300x120.png 300w, https://www.narupi.net/wp-content/uploads/2018/11/mem_map-1.png 500w" sizes="(max-width: 300px) 100vw, 300px" /></p>
<p>&nbsp;</p>
<h3><a id="i-5"></a>Brainfuck入門の準備</h3>
</div><div data-reactid=".1">
<hr />
</div><p><span style="font-size: 12pt;">以降のサンプルはすべて説明用に小さい値を利用します。実際のコードでは出力はASCIIコードなのでもっと大きな値になります。</span></p>
<p><span style="font-size: 12pt;">紹介するコードはあくまで一例なので他の実装方法もあります。</span></p>
<h5>ループ</h5>
<p>3回のループを実装する場合</p>
<pre>+++[-&gt;処理&lt;]</pre>
<h5>要素の初期化</h5>
<p>0になるまで-するループで実装</p>
<pre>[-]</pre>
<h5>要素の移動</h5>
<p>隣の番地に移動して要素を+する。前の番地に戻って要素を0になるまで-する。</p>
<pre>[&gt;+&lt;-]</pre>
<p>0番地の2を1番地へ移動する例</p>
<p><img class="alignnone wp-image-277" src="https://www.narupi.net/wp-content/uploads/2018/12/move.gif" alt="" width="550" height="309" /></p>
<h5>足し算</h5>
<p>要素の移動と同じコードになる。(要素の移動は０との足し算)</p>
<pre>[&gt;+&lt;-]</pre>
<p>2 + 4の例</p>
<p><img class="alignnone wp-image-280" src="https://www.narupi.net/wp-content/uploads/2018/12/plus.gif" alt="" width="550" height="309" /></p>
<h5>引き算</h5>
<p>1番地-0番地を1番地へ入れるコード。足し算と同じことをするだけ(引くだけ)。</p>
<pre>[&gt;-&lt;-]</pre>
<p>4 &#8211; 2の例</p>
<h5><img class="alignnone wp-image-283" src="https://www.narupi.net/wp-content/uploads/2018/12/minus.gif" alt="" width="550" height="309" /></h5>
<h5>値のコピー</h5>
<p>意外と重要。Brainfuckでコードを書くと、ほとんどの操作が破棄的操作になる。</p>
<p>値を使いまわしたいことはよくあるので、値のコピーを行う必要がある。</p>
<pre>[&gt;+&gt;+&lt;&lt;-]&gt;&gt;[&lt;&lt;+&gt;&gt;-]</pre>
<p>0番地の値を1番地と2番地にコピーする。</p>
<pre>[&gt;+&gt;+&lt;&lt;-]</pre>
<p>次のループで2番地の値を0番地に移動する。</p>
<pre>[&lt;&lt;+&gt;&gt;-]</pre>
<p><img class="alignnone wp-image-290" src="https://www.narupi.net/wp-content/uploads/2018/12/copy.gif" alt="" width="550" height="309" /></p>
<p>&nbsp;</p>
<h5>定数の掛け算</h5>
<p>0番地に++で2をセットする。1番地に++する処理を0番地が0になるまで繰り返す。(2*2の処理)</p>
<pre>++[-&gt;++&lt;]</pre>
<p>2 * 2の例</p>
<p><img class="alignnone wp-image-271" src="https://www.narupi.net/wp-content/uploads/2018/11/2-2-1.gif" alt="" width="550" height="309" /></p>
<p>これを応用して&#8221;H&#8221;のASCIIコードに対応する72(8*9)を出力するコードは以下のようになる。</p>
<pre>++++++++[-&gt;+++++++++&lt;].</pre>
<p>掛け算を使わずに&#8221;Hello World!&#8221;の一文字目&#8221;H&#8221;を出力する場合、0x48回(72)回+を記述しなければならない。</p>
<p>&#8220;Hello World!&#8221;を出力する場合……考えたくもないですね。</p>
<p>&nbsp;</p>
<h5>掛け算</h5>
<p>足し算と値のコピーを組み合わせることで実装できる。</p>
<p>0番地 * 1番地の結果を2番地に入れる。</p>
<p>0番地が0になるまで{1番地の値を2番地に足す。0番地の値を1減らす}を繰り返す。</p>
<pre>[&gt; 1番地へ移動
[&gt;+&gt;+&lt;&lt;-]&gt;&gt;[&lt;&lt;+&gt;&gt;-]　ここで値のコピーをしてる
&lt;&lt;&lt;-]　0番地に戻って-1する</pre>
<p>1 * 2の例<br />
<img class="alignnone wp-image-299" src="https://www.narupi.net/wp-content/uploads/2018/12/seki.gif" alt="" width="550" height="309" /></p>
<h5>条件分岐</h5>
<p>Brainfuckにif文は存在しない。whileを応用して作る。</p>
<p><strong>・一番簡単なif文</strong></p>
<p>0番地が0でなければ処理を実行する。<code>[-]</code>で0番地は初期化されるので処理は一回しか実行されない。</p>
<p>処理の最後は0番地へ戻る必要がある。</p>
<pre>[処理[-]]</pre>
<p><strong>・else文</strong></p>
<p>0番地が0でなければ処理1を、0なら処理2を実行</p>
<p>処理1は0番地へ、処理2は1番地に戻る必要がある。</p>
<pre>+&lt;[処理1&gt;-&lt;[-]]&gt;[処理2-]</pre>
<p><strong>・大小の比較</strong></p>
<p>A:0番地、B:1番地、C:2番地、D:3番地</p>
<blockquote><p><a href="http://d.hatena.ne.jp/yurupo/20120508/1338630601">http://d.hatena.ne.jp/yurupo/20120508/1338630601</a></p></blockquote>
<pre># if(A&gt;B){～}
&gt;[&gt;+&gt;+&lt;&lt;-]&gt;[&lt;+&gt;-]&lt;&lt;            # D=B;
[&gt;&gt;+&gt;&gt;+&lt;&lt;&lt;&lt;-]&gt;&gt;&gt;&gt;[&lt;&lt;&lt;&lt;+&gt;&gt;&gt;&gt;-]&lt; # C=A;
[&lt;                             # while(D){
  [&gt;]&gt;[[-]+&lt;+&gt;&gt;&gt;]&lt;&lt;&lt;           #   if(!C)C++,D=1;
  -&gt;-                          #   C--,D--;
]&lt;                             # }          CとDのどちらが先に0になるかで判定。
[[-]&lt;&lt;～&gt;&gt;]&lt;&lt;                  # if(C){C=0;～}</pre>
<pre># if(A&lt;B){～}
[&gt;&gt;+&gt;+&lt;&lt;&lt;-]&gt;&gt;[&lt;&lt;+&gt;&gt;-]&lt;         # C=B;
[&gt;+&gt;&gt;+&lt;&lt;&lt;-]&gt;&gt;&gt;[&lt;&lt;&lt;+&gt;&gt;&gt;-]&lt;      # D=A;  数値を逆にしただけ。
[&lt;                             # while(D){
  [&gt;]&gt;[[-]+&lt;+&gt;&gt;&gt;]&lt;&lt;&lt;           #   if(!C)C++,D=1;
  -&gt;-                          #   C--,D--;
]&lt;                             # }
[[-]&lt;&lt;～&gt;&gt;]&lt;&lt;                   # if(C){C=0;～}</pre>
<h5>割り算</h5>
<blockquote><p><a href="https://www.slideshare.net/KMC_JP/brainfck">https://www.slideshare.net/KMC_JP/brainfck</a></p></blockquote>
<p>0番地÷1番地の商を6番地に、あまりを7番地に入れる。(2~5番地は一時変数)</p>
<p>0番地 &gt;= 1番地である間、{0番地から1番地を引き、6番地に加える}という作業を繰り返し、0番地&lt;1番地になったら0番地を7番地に入れる。</p>
<pre>[[&gt;&gt;+&gt;+&lt;&lt;&lt;-]&gt;&gt;&gt;[&lt;&lt;&lt;+&gt;&gt;&gt;-]&lt;&lt;[&gt;&gt;+&gt;+&lt;&lt;&lt;-]&gt;&gt;&gt;[&lt;&lt;&lt;+&gt;&gt;&gt;-]&lt;&lt;[&gt;&gt;&gt;+&lt;&lt;[-&lt;-&gt;[&gt;+&lt;-]&gt;&gt;-&lt;&lt;]&gt;[&lt;+&gt;-]&gt;[-&lt;&lt;&lt;[-]&gt;&gt;&gt;]&lt;&lt;&lt;]+&gt;[[-]&lt;&lt;&lt;[&gt;&gt;&gt;&gt;&gt;&gt;&gt;+&lt;&lt;&lt;&lt;&lt;&lt;&lt;-]&gt;&gt;-&gt;]&lt;[-&lt;[&gt;+&lt;&lt;-&gt;-]&gt;[&lt;+&gt;-]&gt;&gt;&gt;&gt;+&lt;&lt;&lt;&lt;]&lt;&lt;]</pre>
<p>[&gt;,&lt;]/こんな感じで簡単な処理でも実装はとてもめんどくさいです。</p>
<p>ここまで理解すれば、AtCoder-ABCのAレベルなら解けるはずです。</p>
<p>&nbsp;</p>
<h3><a id="i-6"></a>Brainfuck入門</h3>
<hr />
<h5>手始めにHello World!</h5>
<p>コードは以下の様になります。脳をしっかりと下準備した方からすれば何も難しくありませんね。</p>
<pre>+++++++++[&gt;++++++++&lt;-]&gt;.
&lt;+++++++++[&gt;+++&lt;-]&gt;++.
+++++++.
.
+++.
&lt;+++++++++[&gt;--------&lt;-]&gt;-------.
&lt;+++++++++[&gt;++++++&lt;-]&gt;+.
&lt;+++++++++[&gt;++&lt;-]&gt;++++++.
+++.
------.
--------.
&lt;+++++++++[&gt;-------&lt;-]&gt;----.</pre>
<p>まず最初に&#8221;Hello World!&#8221;をASCIIに変換します。<a href="https://www.asciitohex.com/" target="_blank" rel="noopener">これとか</a></p>
<p>Hello World!　→　48 65 6c 6c 6f 20 57 6f 72 6c 64 21(Hex)</p>
<p>→　72 101 108 108 111 32 87 111 114 108 100 33(Decimal)</p>
<p>あとは、各文字に対応する文字コードを作ってやればいいわけです。</p>
<p>H : 9 * 8 = 72 =&gt; 0x48</p>
<p>e : 9 * 3 + 72 + 2 = 101 =&gt; 0x65</p>
<p>l :  101 + 7 = 108 =&gt; 0x6c</p>
<p>l : 108 =&gt; 0x6c</p>
<p>o : 108 + 3 = 111 =&gt; 0x6f</p>
<p>&#8216; &#8216;: 111 &#8211; 8 * 9 &#8211; 7 = 32 =&gt; 0x20</p>
<p>W : 32 + 9 * 6 + 1 = 87 =&gt; 0x57</p>
<p>o :  87 + 9 * 2 + 6 = 111 =&gt; 0x6f</p>
<p>r :  111 + 3 = 114 =&gt; 0x72</p>
<p>l : 114 &#8211; 6 = 108 =&gt; 0x6c</p>
<p>d : 108 &#8211; 8 = 100 =&gt; 0x64</p>
<p>! : 100 &#8211; 9 * 7 &#8211; 4 = 33 =&gt; 0x21</p>
<p>これが理解できればどんな文字列でも出力できるので一発芸ができますね。</p>
<p>&nbsp;</p>
<h5>入力と処理　(<a href="https://beta.atcoder.jp/contests/abc111/tasks/abc111_a" target="_blank" rel="noopener">AtCoder111-A</a>)</h5>
<p>入力をもとに処理する問題の例題です。</p>
<p>入力の各桁を1なら9、9なら1で出力する問題。</p>
<pre>+++[-&gt;++++++++++[-&gt;++++++++++&lt;],[-&gt;-&lt;]&gt;++++++.[-]&lt;&lt;]</pre>
<p>・入力は必ず3桁なのでとりあえず3回ループするために3を0番地に作る。</p>
<p>・2番地に100を作る。(10 * 10)</p>
<p>・1番地に数値を入力。</p>
<p>・2番地 &#8211; 1番地を行う。(100 &#8211; 49 OR 100 &#8211; 57)</p>
<p>・2番地 + 6を行う。(51 + 6 = 57 =&gt; 0x39 =&gt; &#8220;9&#8221;  OR 43 + 6 = 49 =&gt; 0x31 =&gt; &#8220;1&#8221;)</p>
<p>・2番地を0で初期化する。</p>
<p>・0番地に戻る。</p>
<p>&nbsp;</p>
<h3><a id="i-7"></a>Brainfuckをさらに学びたい人向け</h3>
<hr />
<p>ここから先は本格的に脳を破壊する覚悟が必要です。</p>
<p>・<a href="http://d.hatena.ne.jp/yurupo/20120508/1338630601" target="_blank" rel="noopener">九九や計算機の実装例が説明されています。</a></p>
<p>・<a href="https://www.nicovideo.jp/watch/sm10384056" target="_blank" rel="noopener">【プログラミング】Brainf*ckを作ってみた【実況解説・番外編】 </a></p>
<p>・<a href="https://nue2004.info/program/fizzbuzz_bf/" target="_blank" rel="noopener">FizzBuzzの実装が丁寧に解説されています。</a></p>
<p>・<a href="https://www.slideshare.net/KMC_JP/brainfck" target="_blank" rel="noopener">ハノイの塔、Brainfuckで実装したBrainfuckインタプリタ、多倍長整数/小数などなど実践的なBrainfuckが解説されています。</a></p>
<p>・<a href="http://esoteric.sange.fi/brainfuck/bf-source/prog/BFI.BF" target="_blank" rel="noopener">Brainfuckで実装したBrainfuckインタプリタのコード</a></p>
<p>&nbsp;</p>
<h3><a id="i-8"></a>一発芸だけしたい人向け</h3>
<hr />
<p>・<a href="http://tsoft-web.com/sub/brainfuck/editor.html" target="_blank" rel="noopener">半角文字列をBrainfuckで出力するコードを生成してくれます。</a></p>
<p>・<a href="http://tsoft-web.com/sub/brainfuck/convert.html" target="_blank" rel="noopener">Brainfuckの命令を任意の文字列に置換してくれます。</a></p>
<p>&nbsp;</p>
<h3><a id="i-9"></a>まとめ</h3>
<hr />
<p>ざっくりとしたBrainfuckの解説記事を書いてみました。</p>
<p>ちゃんと記事を読んでいただければ、今までネタでしかなかったBrainfuckのコードがネタじゃなくなると思います。</p>
<p><span style="font-size: 10pt;">(メモリレベルで操作を考えると、普段どれだけ高級な言語を使っているかが身に染みてわかりますね&#8230;.)</span></p>
<p>&nbsp;</p>
<p>普通のプログラミングとは考え方がかなり異なるのでパズルを解いてるような感覚で楽しいですね。</p>
<p>&nbsp;</p>
<p>言語の実用性に関してですが基本的にはありません。</p>
<p>極稀にBrainfuckが真価を発揮する競プロ問題もあるとかないとかなので、頭の片隅にでも入れておくと活躍する場面が来るかもしれないです。</p>
<p>あとはコードの難読化くらいですね。</p>
<p>&nbsp;</p>
<p>Brainfuckがどんな言語なのか雰囲気だけでも伝わっていれば幸いです。</p>
<p>&nbsp;</p><div class="addtoany_share_save_container addtoany_content addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="https://www.narupi.net/2018/12/05/brainfuck/" data-a2a-title="BrainfuckにBrainをHackされた男(Brainfuck入門)"><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fwww.narupi.net%2F2018%2F12%2F05%2Fbrainfuck%2F&amp;linkname=Brainfuck%E3%81%ABBrain%E3%82%92Hack%E3%81%95%E3%82%8C%E3%81%9F%E7%94%B7%28Brainfuck%E5%85%A5%E9%96%80%29" title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fwww.narupi.net%2F2018%2F12%2F05%2Fbrainfuck%2F&amp;linkname=Brainfuck%E3%81%ABBrain%E3%82%92Hack%E3%81%95%E3%82%8C%E3%81%9F%E7%94%B7%28Brainfuck%E5%85%A5%E9%96%80%29" title="Twitter" rel="nofollow noopener" target="_blank"></a></div></div>          <nav class="pagination group">
                      </nav><!--/.pagination-->
        </div>




</body>
</html>
