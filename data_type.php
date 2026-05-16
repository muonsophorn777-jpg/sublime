<!DOCTYPE html>
<html lang="km">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Data Types</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #0b0f1a;
    color: #fff;
}

.container {
    padding: 20px;
}

h1 {
    color: #F13E93;
}

h2 {
    color: #F13E93;
    margin-top: 20px;
}

p {
    color: #ccc;
}

ul {
    margin-left: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #F13E93;
    border-radius: 25px;
    color: #F13E93;
    text-decoration: none;
    margin-bottom: 20px;
}

.btn:hover {
    background: #F13E93;
    color: black;
}
</style>
</head>

<body>

<div class="container">

<a href="lomhat1.html" class="btn">← Back to Projects</a>

<h1>1. តើ Data Type ក្នុង PHP មានអ្វីខ្លះ?</h1>

<p>PHP មាន Data Types សំខាន់ៗជា 3 ប្រភេទ៖</p>

<h2>1. Scalar Data Types</h2>
<ul>
    <li>Integer – លេខគត់</li>
    <li>Float – លេខទសភាគ</li>
    <li>String – អក្សរ</li>
    <li>Boolean – true / false</li>
</ul>

<h2>2. Compound Data Types</h2>
<ul>
    <li>Array – ផ្ទុកតម្លៃច្រើន</li>
    <li>Object – ប្រើក្នុង OOP</li>
</ul>

<h2>3. Special Data Types</h2>
<ul>
    <li>NULL – គ្មានតម្លៃ</li>
    <li>Resource – database connection</li>
</ul>

</div>

</body>
</html>
<style>
    .section-title {
    font-size: 28px;
    color: #F13E93;
    margin-top: 40px;
    border-bottom: 2px solid #F13E93;
    padding-bottom: 10px;
}

.item-title {
    color: #F13E93;
    margin-top: 25px;
    font-size: 20px;
}

.code-box {
    background: #111827;
    padding: 15px;
    border-radius: 12px;
    margin-top: 10px;
    border-left: 4px solid #00ff99;
    color: #cbd5e1;
    font-family: monospace;
}
</style>
<h1 class="section-title">2. Syntax និង ឧទាហរណ៍ក្នុង PHP</h1>

<!-- 1 Integer -->
<div class="item-title">1. Integer (លេខគត់)</div>
<div class="code-box">
// Syntax: $variable = number;<br>
// Example:<br>
$age = 20;<br>
echo $age;
</div>

<!-- 2 Float -->
<div class="item-title">2. Float / Double (លេខទសភាគ)</div>
<div class="code-box">
$price = 12.5;<br>
echo $price;
</div>

<!-- 3 String -->
<div class="item-title">3. String (អក្សរ)</div>
<div class="code-box">
$name = "Sok Dara";<br>
echo $name;
</div>

<!-- 4 Boolean -->
<div class="item-title">4. Boolean</div>
<div class="code-box">
$isLogin = true;<br>
if ($isLogin) {<br>
&nbsp;&nbsp;echo "User បាន Login";<br>
}
</div>

<!-- 5 Array -->
<div class="item-title">5. Array</div>
<div class="code-box">
$colors = ["Red", "Green", "Blue"];<br>
echo $colors[0]; // Red
</div>

<!-- 6 Object -->
<div class="item-title">6. Object</div>
<div class="code-box">
class Student { public $name; }<br>
$stu = new Student();<br>
$stu->name = "Dara";<br>
echo $stu->name;
</div>

<!-- 7 NULL -->
<div class="item-title">7. NULL</div>
<div class="code-box">
$data = null;<br>
if ($data === null) {<br>
&nbsp;&nbsp;echo "មិនមានតម្លៃ";<br>
}
</div>

<!-- 8 Resource -->
<div class="item-title">8. Resource</div>
<div class="code-box">
// Example:<br>
$file = fopen("test.txt", "r");
</style>
</div>