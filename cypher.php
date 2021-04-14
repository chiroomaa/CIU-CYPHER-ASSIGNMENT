

<?php
function Cipher($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;
	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function Decipher($input, $key)
{
	return Encipher($input, 26 - $key);
}

//variable declations

$text = "KHAN";
$shiftkey = "19";
$cipherText = Encipher($text, $shiftkey);
$plainText = Decipher($cipherText, $shiftkey);

// output contains ciper, palintext and shift key.

echo nl2br("first line cipher $cipherText \n second line plaintext $plainText \n third line shift key $shiftkey"); 



?>








