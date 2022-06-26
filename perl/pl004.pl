#!"C:\xampp\perl\bin\perl.exe"

readFormData();
print "Content-type: text/html\n\n";
print '<html>';
print '<head>';
print '<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
print '</head><body>';
print $FORM{"my_login"} . "さん、こんにちは！";
print "</body></html>";

# フォームのデータから，パラメータ値を取得する関数
sub readFormData
{
	my ($buffer, $pair);
	if ($ENV{'REQUEST_METHOD'} eq 'POST') {
		read (STDIN, $buffer, $ENV{ 'CONTENT_LENGTH' });
	} else {
		$buffer = $ENV { 'QUERY_STRING' };
	}

    foreach $pair (split(/&/, $buffer)) {
		my ($name, $value) = split (/=/, $pair);
		# デコード
		$value =~ tr/+/ /;         
		$value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;        

		$FORM {$name} = $value;
    }

}