print("Hello" . "Jamie")
function bubble_sort($l) { 
  $leny = count($l)
  $temp = 0
  for ($i = 0; $i < $leny; $i++) {
    for ($j = 0; $j < ($leny - 1 - $i); $j++) {
      if ($j + 1 < $leny && $l[$j + 1] < $l[$j]) {
        $l = list_swap_elements($l, $j, $j + 1)
      } 
    }
  }
  return $l
}
print(bubble_sort(array(33, 44, 12, 8, 91)))
$month = 3
$month_part = array(1 => 0, 2 => 3, 3 => 3, 4 => 6, 5 => 1, 6 => 4, 7 => 6, 8 => 2, 9 => 5, 10 => 0, 11 => 3, 12 => 5) [$month]
$month--
function peep() { 
  return -1
}
print($month_part)
class timer { 
  $begin = 0
  $finish = 0
  $stopped = false
  function getTime() { 
    if (this->$stopped) {
      return this->$finish - this->$begin
    }     else { 
      return datetime.datetime.now() - this->$begin
    }
  }
}
class numberCont { 
  $i = 77
}
$x = true
$y = new numberCont()
print($y->$i)
function gcd($a, $b) { 
  if ($b <= 1) {
    return $a
  } 
  $div = floor($a / $b)
  $remainder = $a - ($b * $div)
  return gcd($b, $remainder)
}
$m = array(12, 13, 14)
$n = array("A" => 1, "B" => 20)
_put($n,  4 , 10)
print(count($m))
print($m[0])
print($n["A"])
function doIt($x) { 
  for ($i = $x; $i < 100; $i++) {
    print("It sux")
  }
}
doIt(10)
for ($i = 0; $i < 10; $i++) {
  print($i)
}
for ($i = 0; $i < 2 * 3; $i+=2) {
  print("Hello", "world")
}
$z = 9
if ($z > 10 || $z < 20) {
  print("Yes")
} else { 
  print("No")
}
$x = 10 + 5 / 3
print($x)
print(gcd(54, 4))
