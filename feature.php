<?php
$feature = isset($_GET['feature']) ? $_GET['feature'] : '';
$features = [
  'research' => [
    'title' => 'Research & Development',
    'content' => 'Our R&D team pioneers sustainable agricultural practices and innovative crop solutions for a better future.'
  ],
  'technology' => [
    'title' => 'Technologies & Partnering',
    'content' => 'We collaborate with global leaders to bring cutting-edge technology and strategic partnerships to local farmers.'
  ],
  'seeds' => [
    'title' => 'Agricultural Seeds',
    'content' => 'We offer a wide variety of high-yield, disease-resistant seeds to maximize your farm\'s productivity.'
  ],
];
if (isset($features[$feature])) {
  $data = $features[$feature];
} else {
  $data = [
    'title' => 'Feature Not Found',
    'content' => 'Sorry, the requested feature is not available.'
  ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo htmlspecialchars($data['title']); ?> - MontesOrg</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <nav>
      <ul class="navbar">
        <li><a href="index.html"><span class="home-icon">&#8962;</span></a></li>
        <li><a href="about us.html">ABOUT US</a></li>
        <li><a href="#">SOLUTION</a></li>
        <li><a href="service.html">SERVICES</a></li>
        <li><a href="#">PRODUCTS</a></li>
        <li><a href="#"> CONTACTS </a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="feature-card" style="margin: 60px auto; max-width: 500px;">
      <h2><?php echo htmlspecialchars($data['title']); ?></h2>
      <p style="font-size:1.1em; color:#444;"><?php echo htmlspecialchars($data['content']); ?></p>
      <a href="index.html" class="read- more-btn" style="margin-top:30px;">Back to Home</a>
    </div>
  </main>
</body>
</html>