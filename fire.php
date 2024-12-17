<?php
    // Common header file (include header.php)
    include 'header.php'; 
?>
 
<nav class="navbar">
    <?php
         $navItems = [
            "AI" => ["label" => "[AI]", "page" => "ai.php"],
            "AIR" => ["label" => "[AIR]", "page" => "air.php"],
            "FIRE" => ["label" => "[FIRE]", "page" => "fire.php"],
            "LIFE" => ["label" => "[LIFE]", "page" => "life.php"],
            "SAGE" => ["label" => "[SAGE]", "page" => "sage.php"],
            "TIME" => ["label" => "[TIME]", "page" => "time.php"],
            "NOT-BAD" => ["label" => "[NOT-BAD]", "page" => "not-bad.php"],
            "ET" => ["label" => "[ET]", "page" => "erythrocyte.php"]
        ];

        foreach ($navItems as $id => $data) {
            $activeClass = ($current_page === basename($data['page'], '.php')) ? 'active' : '';
            // Pass the page name to the JavaScript function
            echo "<a href=\"javascript:void(0);\" id=\"$id\" class=\"$activeClass\" onclick=\"redirectToPage('{$data['page']}')\">{$data['label']}</a>";
        }
    ?>
</nav>

<div class="divider"></div>

<!-- Main content -->
<main class="container">
    <!-- Section 1 -->
    <div class="domain domain4">
        <h2>Fast Interactive Reading Engine [FIRE]</h2>
        <img src="/images/fire.jpg" alt="FIRE Image">
        <p>A cutting-edge engine designed for high-speed reading, compression, and decoding of large datasets to facilitate fast and efficient analyses.</p>
    </div>

    <!-- Section 2 -->
    <div class="domain domain4">
        <h2>Data Compression Techniques</h2>
        <img src="/images/data_compression.jpg" alt="Data Compression">
        <p>Exploring innovative data compression techniques that allow for faster data transmission while maintaining high accuracy and security.</p>
    </div>

    <!-- Section 3 -->
    <div class="domain domain4">
        <h2>Interactive Processing</h2>
        <img src="/images/interactive_processing.jpg" alt="Interactive Processing">
        <p>Utilizing real-time, interactive data processing methods to enhance decision-making speed and provide more immediate insights from raw data.</p>
    </div>

    <!-- Section 4 -->
    <div class="domain domain4">
        <h2>Machine Learning in FIRE</h2>
        <img src="/images/machine_learning_fire.jpg" alt="Machine Learning in FIRE">
        <p>Integrating machine learning algorithms into the FIRE engine to improve its reading and analysis capabilities for dynamic datasets.</p>
    </div>

    <!-- Section 5 -->
    <div class="domain domain4">
        <h2>FIRE for Big Data</h2>
        <img src="/images/big_data.jpg" alt="FIRE for Big Data">
        <p>Implementing FIRE technology for big data applications, enabling real-time analysis and decision-making for vast amounts of unstructured data.</p>
    </div>

    <!-- Section 6 -->
    <div class="domain domain4">
        <h2>FIRE for Business Intelligence</h2>
        <img src="/images/business_intelligence.jpg" alt="FIRE for Business Intelligence">
        <p>Harnessing FIRE’s speed and efficiency to revolutionize business intelligence processes, providing organizations with quicker access to actionable insights.</p>
    </div>
</main>

<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>
