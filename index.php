<?php
// Include the common header
include 'header.php'; 
?>

<nav class="navbar">
    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $current_page = isset($_GET['page']) ? strtolower($_GET['page']) : 'home';

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
        $domains = [
            "ai" => [
                "class" => "domain3", 
                "title" => "Algorithmic Intelligence [AI]", 
                "description" => "Learning Mathematics from bottom up, to utilize concepts for a higher level.", 
                "image" => "images/algorithms.jpg",
                "page" => "ai"
            ],
            "air" => [
                "class" => "domain5", 
                "title" => "Advanced Intelligence Research [AIR]", 
                "description" => "Research into Advanced Intelligence technologies.", 
                "image" => "images/air.jpg",
                "page" => "air"
            ],
            "fire" => [
                "class" => "domain4", 
                "title" => "Fast Interactive Reading Engine [FIRE]", 
                "description" => "A rapid engine that can read, compress, encode, and decode data for capable analyses.", 
                "image" => "images/fire.jpg",
                "page" => "fire"
            ],
            "life" => [
                "class" => "domain2", 
                "title" => "Learning Improved Future Endeavours [LIFE]", 
                "description" => "Why one should pursue a life of learning, and the benefits of learning.", 
                "image" => "images/baby_pelican.jpg",
                "page" => "life"
            ],
            "sage" => [
                "class" => "domain1", 
                "title" => "Strategically Adaptable Growing Education [SAGE]", 
                "description" => "An Adaptive Intelligence powered learning application, with the goal of proliferating education and making it accessible.", 
                "image" => "images/life_tree.jpg",
                "page" => "sage"
            ],
            "time" => [
                "class" => "domain6", 
                "title" => "Time Improvement Management Engine [TIME]", 
                "description" => "Advanced scheduling and calendaring for productivity.", 
                "image" => "images/permutations.png",
                "page" => "time"
            ]
        ];

        if ($current_page === 'home') {
            // Display all domains on the home page
            foreach ($domains as $id => $data) {
                echo "<div id='$id' class='domain {$data['class']}'>";
                echo "<h2>{$data['title']}</h2>";
                echo "<img src='{$data['image']}' alt='{$data['title']}'>";
                echo "</a>";
                echo "<p>{$data['description']}</p>";
                echo "</div>";
            }

            // Additional content
            $bodylowers = [
                "not-bad" => [
                    "class" => "bodylowerimg1", 
                    "title" => "Nice|Novel Operating Techniques in Binary Algorithmic Decisions [NOT-BAD]", 
                    "description" => "Learning, applying, and consolidating Mathematics from bottom up, utilizing for high-level applications with ease.", 
                    "image" => "images/combinations.png",
                    "page" => "not-bad"
                ],
                "erythrocyte" => [
                    "class" => "bodylowerimg2", 
                    "title" => "Erythrocyte Transmute [ET]", 
                    "description" => "Assembly label. Data transmission framework, from an accessible and hardened security implementation.", 
                    "image" => "images/erythrocyte.jpg",
                    "page" => "erythrocyte"
                ]
            ];

            foreach ($bodylowers as $id => $data) {
                echo "<div id='$id' class='domain {$data['class']}'>";
                echo "<h2>{$data['title']}</h2>";
                echo "<img src='{$data['image']}' alt='{$data['title']}'>";
                echo "</a>";
                echo "<p>{$data['description']}</p>";
                echo "</div>";
            }
        }
    ?>
           
</main>

<script>
    // Define the redirect function
    function redirectToPage(page) {
        // Redirect to the specified page
        window.location.href = page;
    }
</script

<?php include 'footer.php'; ?>
