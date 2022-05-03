#!/usr/bin/perl

$value = "%E9%B7%B9"; # "鷹"
$value = "%E9%B7%B9%E9%87%8E"; # "鷹野"

print("10進数 (E9): " . hex("E9") . "\n"); # 16進数を10進数に変換
# pack関数はバイナリに変換．連結すると文字になる．
print("pack関数の返り値を連結 (E9 B7 B9): " . pack("C", hex("E9")) . pack("C", hex("B7")) . pack("C", hex("B9")) . "\n");

# URLデコード: 正規表現を利用して一括して変換
$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
print("URLデコード (E9 B7 B9 E9 87 8E): " . $value . "\n");