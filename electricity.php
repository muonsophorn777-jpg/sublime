<style>
    body{
        margin:0;
        background: linear-gradient(135deg, #0f172a, #020617);
        color:white;
        font-family: 'Segoe UI', sans-serif;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }

    .box{
        background: rgba(17, 24, 39, 0.9);
        padding:25px;
        border-radius:20px;
        width:320px;
        box-shadow: 0 0 25px rgba(34,197,94,0.2);
        backdrop-filter: blur(10px);
        animation: fadeIn 0.6s ease-in-out;
    }

    h2{
        text-align:center;
        color:##F13E93;
        margin-bottom:15px;
    }

    input{
        width:100%;
        padding:12px;
        margin:10px 0;
        border-radius:10px;
        border:none;
        background:#F13E93;
        color:white;
        outline:none;
        transition:0.3s;
    }

    input:focus{
        box-shadow:0 0 8px #22c55e;
        background:#111827;
    }

    button{
        width:100%;
        padding:12px;
        border:none;
        border-radius:10px;
        background: linear-gradient(135deg, #22c55e, #16a34a);
        color:white;
        font-weight:bold;
        cursor:pointer;
        transition:0.3s;
    }

    button:hover{
        transform: scale(1.05);
        box-shadow:0 0 15px #F13E93;
    }

    .result{
        margin-top:15px;
        text-align:center;
        font-size:16px;
        padding:10px;
        border-radius:10px;
        background:#020617;
    }

    .error{
        color:#ef4444;
    }

    .success{
        color:#22c55e;
    }

    @keyframes fadeIn{
        from{
            opacity:0;
            transform: translateY(20px);
        }
        to{
            opacity:1;
            transform: translateY(0);
        }
    }
</style>
<?php
$result = "new";
if(isset($_POST['calculate'])){
    $old = $_POST['old'];
    $new = $_POST['new'];

    if($new >= $old){
        $unit = $new - $old;
        $price = $unit * 0.25;
        $result = "ប្រើប្រាស់: $unit kWh | តម្លៃ: $$price";
    } else {
        $result = "លេខថ្មីត្រូវធំជាងលេខចាស់";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electricity</title>
<body>

<div class="box">
    <h2>គណនាថ្លៃអគ្គិសនី</h2>

    <form method="post">
        <input type="number" name="old" placeholder="លេខចាស់" required>
        <input type="number" name="new" placeholder="លេខថ្មី" required>

        <button name="calculate">គណនា</button>
    </form>

    <div class="result"><?php echo $result; ?></div>
   <style>
        body{
            background: #1e4fa3;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin: 0;
        }

        .card{
            width: 250px;
            background: #4f7fc6;
            border-radius: 25px;
            padding: 25px;
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }

        .title{
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .row{
            display: flex;
            justify-content: space-between;
            padding: 18px 0;
            border-top: 1px solid rgba(255,255,255,0.2);
            font-size: 19px;
        }

        .price{
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$rates = [
    "1 - 10 kWh" => "$0.10",
    "11 - 50 kWh" => "$0.12",
    "51 - 200 kWh" => "$0.15",
    "Over 200 kWh" => "$0.18"
];
?>

<div class="card">
    <div class="title">☰ EDC Rates</div>

    <?php foreach($rates as $unit => $price): ?>
        <div class="row">
            <span><?php echo $unit; ?></span>
            <span class="price"><?php echo $price; ?></span>
        </div>
    <?php endforeach; ?>

</div>

</body>
</html>

</div>

</body>
</html>