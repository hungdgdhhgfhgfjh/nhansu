<?php
class Nhansu{
    public $ho = "";
    public $ten = "";
    public $ngaysinh = 0;
    private $address = "";
    public $congviec = "";

     public function __construct($ho = "",$ten = "",$ngaysinh = 0,$address = "",$congviec = "")
    {
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngaysinh = $ngaysinh;
        $this->address = $address;
        $this->congviec = $congviec;
    }
    public function setHo($ho) {
        $this->ho = $ho;
    }
    public function getHo()
    {
        return $this->ho;
    }
    public function setTen($ten)
    {
        $this->ten = $ten;
    }
    public function getTen()
    {
        return $this->ten;
    }
    public function setNgaySinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;
    }
    public function  getNgaySinh()
    {
        return $this->ngaysinh;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
       return $this->address;
    }
     public function setCongviec($congviec)
    {
        $this->congviec = $congviec;
    }
    public function getCongviec()
    {
        return $this->congviec;
    }
   
}
$obj = [];
$ngoclan = new Nhansu("lê","ngọc lan","22/1/1990","photo","đông hà");
$hoa = new Nhansu("lê","ngọc hoa","22/1/1998","thư ký","hà nội");
$huong = new Nhansu("lê","ngọc huong","22/1/2000","kế toán","sài gòn");;
echo "<pre>";
print_r($ngoclan);
echo "</pre>";
$obj[] = $ngoclan;
$obj[] = $hoa;
$obj[] = $huong;
echo "<pre>";
print_r($obj);
echo "</pre>";
unset($obj[0]);
echo "<pre>";
print_r($obj);
echo "</pre>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>