<?php
    // Common header file (include header.php)
    include 'header.php'; 
?>

 <nav class="navbar">
    <?php
        $current_path = $_SERVER['REQUEST_URI']; // Get the current URL path
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

<main class="container">
    <?php
    $bodylowers = [
        [
            "title" => "Erythrocyte Transmute: Where Precision Meets Innovation",
            "class" => "bodylowerimg2",
            "image" => "/images/erythrocyte.jpg",
            "alt" => "Erythrocyte Assembly Program",
            "description" => "Erythrocyte Transmute (ET) is not just a program—it's a revolution in secure data exchange. Harnessing the art of assembly-level architecture, ET transforms raw data into an impenetrable fortress, ensuring its seamless transit through the most hostile digital landscapes. It’s lean, lightning-fast, and built for those who demand nothing less than perfection."
        ],
        [
            "title" => "Adaptive Cryptography for an Unbreakable World",
            "class" => "bodylowerimg2",
            "alt" => "Secure Data Sharing",
            "description" => "At the heart of ET lies a cryptographic engine that adapts to the challenge at hand. Whether you're securing financial transactions or protecting sensitive communications, ET’s dynamic encryption algorithms shape-shift to outmaneuver emerging threats, delivering unparalleled resilience in the face of cyber adversaries."
        ],
        [
            "title" => "Performance That Redefines Efficiency",
            "class" => "bodylowerimg2",
            "alt" => "Performance Core Features",
            "description" => "Designed with microscopic precision, ET’s assembly-level optimizations operate on a scale where nanoseconds matter. It elevates computational efficiency to a new high, offering seamless data processing even under the heaviest loads. This makes ET the trusted backbone for critical systems worldwide."
        ],
        [
            "title" => "A Modular Framework for Limitless Customization",
            "class" => "bodylowerimg2",
            "alt" => "Modular Framework",
            "description" => "Erythrocyte Transmute isn’t one-size-fits-all—it’s a toolkit of possibilities. Its modular framework allows enterprises to fine-tune its functionality, whether it’s integrating with legacy systems, enhancing AI-driven threat response, or customizing encryption layers for specific use cases. With ET, the possibilities are as vast as your imagination."
        ],
        [
            "title" => "Trust Engineered Into Every Byte",
            "class" => "bodylowerimg2",
            "alt" => "Applications of ET",
            "description" => "From healthcare to aerospace, ET is the gold standard for industries where trust is non-negotiable. Securely encrypt and transfer sensitive information, control data flow with surgical precision, and rely on ET’s tamper-proof integrity checks to safeguard the things that matter most."
        ],
        [
            "title" => "The Future of Secure Data Exchange",
            "class" => "bodylowerimg2",
            "alt" => "Future of ET",
            "description" => "ET is not just a solution for today—it’s a foundation for tomorrow. With ongoing innovations that blend AI and quantum-resistant cryptography, ET is poised to remain ahead of the curve. When the stakes are high, Erythrocyte Transmute stands as the beacon of secure, efficient, and adaptable data sharing."
        ]
    ];

    // Loop through each section and display its content
    foreach ($bodylowers as $id => $data) {
        echo "<div id='$id' class='domain {$data['class']}'>";
        echo "<h2>{$data['title']}</h2>";
        echo "<img src='{$data['image']}' alt='{$data['alt']}'>";
        echo "<p>{$data['description']}</p>";
        echo "</div>";
    }
    ?>
</main>


<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>

