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
            "title" => "Nice|Novel Operating Techniques in Binary Algorithmic Decisions [NOT-BAD]",
            "class" => "bodylowerimg1",
            "image" => "/images/combinations.png",
            "alt" => "NOT-BAD Image",
            "description" => "Learning, applying, and consolidating mathematics from bottom up, utilizing high-level applications with ease. This framework explores binary algorithmic decisions for solving complex problems."
        ],
        [
            "title" => "Binary Algorithms",
            "image" => "/images/binary_algorithms.jpg",
            "class" => "bodylowerimg1",
            "alt" => "Binary Algorithms",
            "description" => "This section explores how binary algorithms are used for decision-making processes and their application in computational systems and mathematics."
        ],
        [
            "title" => "High-Level Mathematical Applications",
            "image" => "/images/high_level_applications.jpg",
            "class" => "bodylowerimg1",
            "alt" => "High-Level Applications",
            "description" => "Utilizing mathematical concepts at high levels to create innovative algorithms that improve computational efficiency and solve complex problems in various domains."
        ],
        [
            "title" => "Mathematical Consolidation Techniques",
            "image" => "/images/mathematical_consolidation.jpg",
            "class" => "bodylowerimg1",
            "alt" => "Mathematical Consolidation",
            "description" => "Techniques for consolidating mathematical theories into practical applications, ensuring that complex problems can be tackled with simplified methods."
        ],
        [
            "title" => "Problem-Solving Framework",
            "image" => "/images/problem_solving.jpg",
            "class" => "bodylowerimg1",
            "alt" => "Problem Solving",
            "description" => "Introducing a novel problem-solving framework that uses binary algorithms to break down large challenges into manageable components, making solutions more efficient."
        ],
        [
            "title" => "Applications of NOT-BAD Framework",
            "image" => "/images/not_bad_applications.jpg",
            "class" => "bodylowerimg1",
            "alt" => "NOT-BAD Applications",
            "description" => "Exploring real-world applications of the NOT-BAD framework, including its role in improving decision-making processes in both software development and organizational management."
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
?>
    
</main>

<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>
