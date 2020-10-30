<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');


  $str = '(gfgfg) (df)   (())';
  $str2 = '( () ) ) ( gfgfgfgfgfgf)(())(()(((dddddd111323)))()';

  function validateBrackets($str) {
  $reg = '/^[^()]*+(\((?>[^()]|(?1))*+\)[^()]*+)++$/';

  if (preg_match($reg, $str) == 1) {
    return 'Все скобки закрыты';
  } else {
    return 'Не все скобки закрыты';
  }}

  echo validateBrackets($str).'<br>';
  echo validateBrackets($str2);

  echo '<br>';
  echo '<br>';

  function isPalindrome($str) {
    $newstr = iconv('utf-8', 'windows-1251', $str);
    $newstr = strrev($newstr);
    $newstr = iconv('windows-1251', 'utf-8', $newstr);
    if ($newstr == $str) {
      return $str.' – палиндром';
    } else {
      return $str.' – не палиндром';
    }
  }
  echo isPalindrome('топот').'<br>';
  echo isPalindrome('101').'<br>';
  echo isPalindrome('abba').'<br>';
  echo isPalindrome('кошка').'<br>';