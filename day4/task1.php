<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>قائمة المنتجات</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h2 class="text-center mb-4">قائمة المنتجات</h2>

    <?php
    // مصفوفة متعددة الأبعاد تحتوي على المنتجات
    $products = [
        [
            "name" => "لاب توب",
            "price" => 15000,
            "quantity" => 5
        ],
        [
            "name" => "هاتف ذكي",
            "price" => 8000,
            "quantity" => 10
        ],
        [
            "name" => "سماعات",
            "price" => 600,
            "quantity" => 20
        ]
    ];
    ?>

    <table class="table table-bordered table-striped text-center">
      <thead class="table-dark">
        <tr>
          <th>اسم المنتج</th>
          <th>السعر (جنيه)</th>
          <th>الكمية</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($products as $product): ?>
          <tr>
            <td><?= $product["name"] ?></td>
            <td><?= $product["price"] ?></td>
            <td><?= $product["quantity"] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>
</html>