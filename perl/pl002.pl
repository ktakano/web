#!"C:\xampp\perl\bin\perl.exe"

readFormData();

print "Content-type: text/html\n\n";
print '<html>';
print '<head>';
print '<meta charset="UTF-8">';
print '</head>';
print "<body><h1>";
print "ID: " . $FORM{"my_login"};
print "<br>";
print "パスワード: ". $FORM{"my_password"};
print "</h1></body></html>";

sub readFormData{
    my ($buffer, $pair);
    if ($ENV{'REQUEST_METHOD'} eq 'POST') { # POSTの場合
        read (STDIN, $buffer, $ENV{ 'CONTENT_LENGTH' });
    } else { # GETの場合
        $buffer = $ENV { 'QUERY_STRING' };
    }
    foreach $pair (split(/&/, $buffer)) {
        my ($name, $value) = split (/=/, $pair);
        $value =~ tr/+/ /;
        $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
        $FORM {$name} = $value;
    }
}